<?php

use MediaWiki\MediaWikiServices;

class ExtRightFunctions {
	public static function onParserFirstCallInit( $parser ) {
		$parser->setFunctionHook( 'ifright', [ __CLASS__, 'ifright' ] );
		$parser->setFunctionHook( 'ifallowed', [ __CLASS__, 'ifallowed' ] );
		$parser->setFunctionHook( 'switchright', [ __CLASS__, 'switchright' ] );
		$parser->setFunctionHook( 'userrights', [ __CLASS__, 'userrights' ] );
		$parser->setFunctionHook( 'usergroup', [ __CLASS__, 'usergroup' ] );
		$parser->setFunctionHook( 'ifgroup', [ __CLASS__, 'ifgroup' ] );
		$parser->setFunctionHook( 'switchgroup', [ __CLASS__, 'switchgroup' ] );
		$parser->setFunctionHook( 'ifpageright', [ __CLASS__, 'ifpageright' ] );
		$parser->setFunctionHook( 'ifpageallowed', [ __CLASS__, 'ifpageallowed' ] );
		$parser->setFunctionHook( 'ifprotected', [ __CLASS__, 'ifprotected' ] );
		$parser->setFunctionHook( 'getrestrictions', [ __CLASS__, 'getrestrictions' ] );

		return true;
	}

	public static function ifright( &$parser, $right = '', $then = '', $else = '' ) {
		global $wgRightFunctionsAllowCaching, $wgRightFunctionsDisableFunctions;
		if ( in_array( 'ifright', $wgRightFunctionsDisableFunctions ) ) {
			return;
		}
		if ( !$wgRightFunctionsAllowCaching ) {
			$parser->getOutput()->updateCacheExpiry( 0 );
		}
		if ( method_exists( $parser, 'getUserIdentity' ) ) {
			// MW 1.36+
			$user = MediaWikiServices::getInstance()
				->getUserFactory()->newFromUserIdentity( $parser->getUserIdentity() );
		} else {
			$user = $parser->getUser();
		}
		if ( $user->isAllowed( $right ) ) {
			return $then;
		}
		return $else;
	}

	public static function ifallowed( &$parser, $name = '', $right = '', $then = '', $else = '' ) {
		global $wgRightFunctionsDisableFunctions, $wgRightFunctionsAllowCaching;
		if ( in_array( 'ifallowed', $wgRightFunctionsDisableFunctions ) || $name == '' ) {
			return;
		}
		if ( !$wgRightFunctionsAllowCaching ) {
			$parser->getOutput()->updateCacheExpiry( 0 );
		}
		$user = User::newFromName( $name );
		$user->load();
		if ( $user->isAllowed( $right ) ) {
			return $then;
		}
		return $else;
	}

	public static function switchright( &$parser ) {
		$args = func_get_args();
		array_shift( $args );
		$found = false;
		$parts = null;
		$default = null;
		foreach ( $args as $arg ) {
			$parts = array_map( 'trim', explode( '=', $arg, 2 ) );
			if ( count( $parts ) == 2 ) {
				if ( $found || self::ifright( $parser, $parts[0], true, false ) ) {
					return $parts[1];
				} else {
					$mwDefault =& \MediaWiki\MediaWikiServices::getInstance()->getMagicWordFactory()->get( 'default' );
					if ( $mwDefault->matchStartAndRemove( $parts[0] ) ) {
						$default = $parts[1];
					}
				}
			} elseif ( count( $parts ) == 1 ) {
				if ( self::ifright( $parser, $parts[0], true, false ) ) {
					$found = true;
				}
			}
		}

		if ( count( $parts ) == 1 ) {
			return $parts[0];
		} elseif ( $default !== null ) {
			return $default;
		} else {
			return '';
		}
	}

	public static function userrights( &$parser, $name = '' ) {
		global $wgRightFunctionsDisableFunctions, $wgRightFunctionsAllowCaching;
		if ( in_array( 'userrights', $wgRightFunctionsDisableFunctions ) ) {
			return;
		}
		if ( !$wgRightFunctionsAllowCaching ) {
			$parser->getOutput()->updateCacheExpiry( 0 );
		}
		if ( $name ) {
			$user = User::newFromName( $name );
			$user->load();
		} else {
			if ( method_exists( $parser, 'getUserIdentity' ) ) {
				// MW 1.36+
				$user = $parser->getUserIdentity();
			} else {
				$user = $parser->getUser();
			}
		}
		$userrights = "";
		$rights = MediaWikiServices::getInstance()->getPermissionManager()->getUserPermissions( $user );
		foreach ( $rights as $value ) {
			$userrights = "$userrights" . "\n* $value";
		}
		return trim( $userrights );
	}

	public static function usergroup( &$parser, $name = '' ) {
		global $wgRightFunctionsUserGroups, $wgRightFunctionsDisableFunctions, $wgRightFunctionsAllowCaching;
		if ( in_array( 'usergroup', $wgRightFunctionsDisableFunctions ) ) {
			return;
		}
		if ( !$wgRightFunctionsAllowCaching ) {
			$parser->getOutput()->updateCacheExpiry( 0 );
		}
		if ( $name ) {
			$user = User::newFromName( $name );
			$user->load();
		} else {
			if ( method_exists( $parser, 'getUserIdentity' ) ) {
				// MW 1.36+
				$user = $parser->getUserIdentity();
			} else {
				$user = $parser->getUser();
			}
		}
		$usergroups = MediaWikiServices::getInstance()->getUserGroupManager()
			->getUserEffectiveGroups( $user, IDBAccessObject::READ_NORMAL, !$wgRightFunctionsAllowCaching );
		$right = "";
		foreach ( $wgRightFunctionsUserGroups as $value ) {
			if ( in_array( $value, $usergroups ) ) {
				$right = $value;
			}
		}
		return $right;
	}

	public static function ifgroup( &$parser, $group = '', $then = '', $else = '', $name = '' ) {
		global $wgRightFunctionsDisableFunctions, $wgRightFunctionsAllowCaching;
		if ( in_array( 'ifgroup', $wgRightFunctionsDisableFunctions ) ) {
			return;
		}
		if ( !$wgRightFunctionsAllowCaching ) {
			$parser->getOutput()->updateCacheExpiry( 0 );
		}
		if ( $name ) {
			$user = User::newFromName( $name );
			$user->load();
		} else {
			if ( method_exists( $parser, 'getUserIdentity' ) ) {
				// MW 1.36+
				$user = $parser->getUserIdentity();
			} else {
				$user = $parser->getUser();
			}
		}
		$usergroups = MediaWikiServices::getInstance()->getUserGroupManager()
			->getUserEffectiveGroups( $user, IDBAccessObject::READ_NORMAL, !$wgRightFunctionsAllowCaching );
		if ( in_array( $group, $usergroups ) ) {
			return $then;
		}
		return $else;
	}

	public static function switchgroup( &$parser ) {
		$args = func_get_args();
		array_shift( $args );
		$found = false;
		$parts = null;
		$default = null;
		foreach ( $args as $arg ) {
			$parts = array_map( 'trim', explode( '=', $arg, 2 ) );
			if ( count( $parts ) == 2 ) {
				if ( $found || self::ifgroup( $parser, $parts[0], true, false ) ) {
					return $parts[1];
				} else {
					$mwDefault =& \MediaWiki\MediaWikiServices::getInstance()->getMagicWordFactory()->get( 'default' );
					if ( $mwDefault->matchStartAndRemove( $parts[0] ) ) {
						$default = $parts[1];
					}
				}
			} elseif ( count( $parts ) == 1 ) {
				if ( self::ifgroup( $parser, $parts[0], true, false ) ) {
					$found = true;
				}
			}
		}

		if ( count( $parts ) == 1 ) {
			return $parts[0];
		} elseif ( $default !== null ) {
			return $default;
		} else {
			return '';
		}
	}

	public static function ifpageright( &$parser, $right = '', $then = '', $else = '', $page = '' ) {
		global $wgRightFunctionsDisableFunctions, $wgRightFunctionsAllowExpensiveQueries, $wgRightFunctionsAllowCaching;
		if ( in_array( 'ifpageright', $wgRightFunctionsDisableFunctions ) ) {
			return;
		}
		if ( !$wgRightFunctionsAllowCaching ) {
			$parser->getOutput()->updateCacheExpiry( 0 );
		}
		if ( $page ) {
			$title = Title::newFromText( $page );
			if ( !$title->exists() ) {
				$title = $parser->getTitle();
			}
		} else {
			$title = $parser->getTitle();
		}

		$rigor = $wgRightFunctionsAllowExpensiveQueries ?
			\MediaWiki\Permissions\PermissionManager::RIGOR_SECURE :
			\MediaWiki\Permissions\PermissionManager::RIGOR_QUICK;
		if ( method_exists( $parser, 'getUserIdentity' ) ) {
			// MW 1.36+
			$user = MediaWikiServices::getInstance()
				->getUserFactory()->newFromUserIdentity( $parser->getUserIdentity() );
		} else {
			$user = $parser->getUser();
		}
		if ( \MediaWiki\MediaWikiServices::getInstance()
			->getPermissionManager()
			->userCan( $right, $user, $title, $rigor )
		) {
			return $then;
		}
		return $else;
	}

	public static function ifpageallowed( &$parser, $name = '', $right = '', $then = '', $else = '', $page = '' ) {
		global $wgRightFunctionsAllowExpensiveQueries, $wgRightFunctionsDisableFunctions, $wgRightFunctionsAllowCaching;
		if ( in_array( 'ifpageallowed', $wgRightFunctionsDisableFunctions ) || $name == '' ) {
			return;
		}
		if ( !$wgRightFunctionsAllowCaching ) {
			$parser->getOutput()->updateCacheExpiry( 0 );
		}
		$user = User::newFromName( $name );
		$user->load();
		if ( $page ) {
			$title = Title::newFromText( $page );
			if ( !$title->exists() ) {
				$title = $parser->getTitle();
			}
		} else {
			$title = $parser->getTitle();
		}

		$rigor = $wgRightFunctionsAllowExpensiveQueries ?
			\MediaWiki\Permissions\PermissionManager::RIGOR_SECURE :
			\MediaWiki\Permissions\PermissionManager::RIGOR_QUICK;
		$errors = \MediaWiki\MediaWikiServices::getInstance()->getPermissionManager()
			->getPermissionErrors( $right, $user, $title, $rigor );

		if ( !$errors ) {
			return $then;
		}
		return $else;
	}

	public static function ifprotected( &$parser, $then = '', $else = '', $page = '', $type = 'fscn' ) {
		global $wgRightFunctionsAllowCaching, $wgRightFunctionsDisableFunctions;
		if ( in_array( 'ifprotected', $wgRightFunctionsDisableFunctions ) ) {
			return;
		}
		if ( !$wgRightFunctionsAllowCaching ) {
			$parser->getOutput()->updateCacheExpiry( 0 );
		}
		if ( $page ) {
			$title = Title::newFromText( $page );
			if ( !$title->exists() ) {
				$title = $parser->getTitle();
			}
		} else {
			$title = $parser->getTitle();
		}
		// dummy first character so that strpos doesn't return 0.
		$type = "0{$type}";
		if ( method_exists( MediaWikiServices::class, 'getRestrictionStore' ) ) {
			// MW 1.37+
			$restrictionStore = MediaWikiServices::getInstance()->getRestrictionStore();
			if ( $restrictionStore->isProtected( $title ) && strpos( $type, 'f' ) ) {
				return $then;
			}
			if ( $restrictionStore->isSemiProtected( $title ) && strpos( $type, 's' ) ) {
				return $then;
			}
			if ( $restrictionStore->isCascadeProtected( $title ) && strpos( $type, 'c' ) ) {
				return $then;
			}
		} else {
			if ( $title->isProtected() && strpos( $type, 'f' ) ) {
				return $then;
			}
			if ( $title->isSemiProtected() && strpos( $type, 's' ) ) {
				return $then;
			}
			if ( $title->isCascadeProtected() && strpos( $type, 'c' ) ) {
				return $then;
			}
		}
		if ( strpos( $type, 'n' ) ) {
			global $wgNamespaceProtection;
			$ns = $title->getNamespace();
			if ( isset( $wgNamespaceProtection[$ns] ) ) {
				return $then;
			}
		}
		return $else;
	}

	public static function getrestrictions( &$parser, $right = 'edit', $page = '', $returnall = false ) {
		global $wgRightFunctionsAllowCaching,
			   $wgRightFunctionsDisableFunctions,
			   $wgRestrictionLevels,
			   $wgNamespaceProtection;

		if ( in_array( 'getrestrictions', $wgRightFunctionsDisableFunctions ) ) {
			return;
		}
		if ( !$wgRightFunctionsAllowCaching ) {
			$parser->getOutput()->updateCacheExpiry( 0 );
		}
		$sep = wfMessage( 'rightfunctions-sep' )->text();
		$localmsg = wfMessage( 'rightfunctions-local' )->text();
		$cascmsg = wfMessage( 'rightfunctions-casc' )->text();
		$nsmsg = wfMessage( 'rightfunctions-ns' )->text();

		if ( $page ) {
			$title = Title::newFromText( $page );
			if ( !$title->exists() ) {
				$title = $parser->getTitle();
			}
		} else {
			$title = $parser->getTitle();
		}
		if ( !$right ) {
			$right = [ 'edit' ];
		}
		$iscascade = false;
		$cascrest = '';
		if ( method_exists( MediaWikiServices::class, 'getRestrictionStore' ) ) {
			// MW 1.37+
			$restrictionStore = MediaWikiServices::getInstance()->getRestrictionStore();
		} else {
			$restrictionStore = null;
		}
		if ( $restrictionStore ? $restrictionStore->isCascadeProtected( $title ) : $title->isCascadeProtected() ) {
			$cascaderestrictions = $restrictionStore ?
				$restrictionStore->getCascadeProtectionSources( $title )
				: $title->getCascadeProtectionSources();

			foreach ( array_slice( $cascaderestrictions, 1 ) as $groups ) {
				foreach ( $groups as $action => $restrictions ) {
					if ( $action == $right ) {
						foreach ( $restrictions as $value ) {
							$cascrest .= $sep . ' ' . $value;
							$iscascade = true;
						}
					}
				}
			}
		}
		$cascrest = trim( trim( $cascrest, $sep ) );
		$localrest = $restrictionStore ?
			$restrictionStore->getRestrictions( $title, $right )
			: $title->getRestrictions( $right );
		if ( is_array( $localrest ) ) {
			$localrest = array_pop( $localrest );
		}
		$isns = false;
		$nsrest = '';
		if ( isset( $wgNamespaceProtection[$title->getNamespace()] ) ) {
			$isns = true;
			$nsresta = (array)$wgNamespaceProtection[$title->getNamespace()];
			foreach ( $nsresta as $right ) {
				if ( $right != '' ) {
					$nsrest .= $sep . ' ' . $right;
				}
			}
		}
		$nsrest = trim( trim( $nsrest, $sep ) );
		if ( $returnall ) {
			if ( $iscascade && $isns && $localrest ) {
				return wfMessage(
					'rightfunctions-rest3',
					$localrest,
					$localmsg,
					$cascrest,
					$cascmsg,
					$nsrest,
					$nsmsg,
					$sep
				)->text();
			} elseif ( $iscascade && $localrest ) {
				return wfMessage( 'rightfunctions-rest2', $localrest, $localmsg, $cascrest, $cascmsg, $sep )->text();
			} elseif ( $isns && $localrest ) {
				return wfMessage( 'rightfunctions-rest2', $localrest, $localmsg, $nsrest, $nsmsg, $sep )->text();
			} elseif ( $iscascade && $isns ) {
				return wfMessage( 'rightfunctions-rest2', $cascrest, $cascmsg, $nsrest, $nsmsg, $sep )->text();
			} elseif ( $iscascade ) {
				return wfMessage( 'rightfunctions-rest1', $cascrest, $cascmsg )->text();
			} elseif ( $isns ) {
				return wfMessage( 'rightfunctions-rest1', $nsrest, $nsmsg )->text();
			} elseif ( $localrest != '' ) {
				return wfMessage( 'rightfunctions-rest1', $localrest, $localmsg )->text();
			} else {
				return '';
			}
		}
		$restrictions = explode( $sep, $localrest . $sep . $cascrest );
		$return = "";
		foreach ( $wgRestrictionLevels as $level ) {
			foreach ( $restrictions as $right ) {
				if ( trim( $right ) == $level ) {
					$return = $level;
					break 1;
				}
			}
		}
		if ( $isns ) {
			$return = trim( trim( $return . $sep . ' ' . $nsrest, $sep ) );
		}
		return $return;
	}
}
