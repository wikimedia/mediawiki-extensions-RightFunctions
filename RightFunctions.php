<?php
/**
 * RightFunctions extension to MediaWiki
 *
 * Provides permission-based parser functions
 *
 * @link https://www.mediawiki.org/wiki/Extension:RightFunctions Documentation
 * @link https://www.mediawiki.org/wiki/Extension_talk:RightFunctions Support
 * @link https://phabricator.wikimedia.org/diffusion/ERIF/ Source code
 *
 * @file
 * @ingroup Extensions
 * @package MediaWiki
 *
 * @author Ryan Schmidt (Skizzerz)
 * @copyright (C) 2007 Ryan Schmidt
 * @license https://unlicense.org/ Unlicense
 */

// Ensure that the script cannot be executed outside of MediaWiki.
if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'This is an extension to MediaWiki and cannot be run standalone.' );
}

// Display extension properties on MediaWiki.
$wgExtensionCredits['parserhook'][] = array(
	'path' => __FILE__,
	'name' => 'RightFunctions',
	'version' => '1.12.0',
	'url' => 'https://www.mediawiki.org/wiki/Extension:RightFunctions',
	'author' => array(
		'Ryan Schmidt',
		'...'
	),
	'descriptionmsg' => 'rightfunctions-desc',
	'license-name' => 'Unlicense'
);

// Register extension messages and other localisation.
$wgMessagesDirs['RightFunctions'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['RightFunctionsMagic'] = __DIR__ . '/RightFunctions.i18n.magic.php';

$wgAutoloadClasses['ExtRightFunctions'] = __DIR__ . '/ExtRightFunctions.php';
// Register extension hooks.
$wgHooks['ParserFirstCallInit'][] = 'ExtRightFunctions::onParserFirstCallInit';

// Set configuration settings and their defaults.
$wgRightFunctionsUserGroups = array( '*', 'user', 'autoconfirmed', 'sysop', 'bureaucrat' );
$wgRightFunctionsAllowExpensiveQueries = true;
$wgRightFunctionsAllowCaching = false;
$wgRightFunctionsDisableFunctions = array();
