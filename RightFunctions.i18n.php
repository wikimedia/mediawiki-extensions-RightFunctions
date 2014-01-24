<?php
/**
 * Internationalisation file for the RightFunctions extension
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

$messages['en'] = array(
	'rightfunctions-desc'  => 'Permission-based parser functions',
	'rightfunctions-rest1' => '$1 $2', # do not translate this message
	'rightfunctions-rest2' => '$1 $2$5 $3 $4', # do not translate this message
	'rightfunctions-rest3' => '$1 $2$7 $3 $4$7 $5 $6', # do not translate this message
	'rightfunctions-sep'   => ',', # the separator used in the above two messages, $5 and $7 respectively
	'rightfunctions-casc'  => '(from cascading sources)',
	'rightfunctions-local' => '(from local page)',
	'rightfunctions-ns'    => '(from namespace protection)',
	
);

/** Message documentation (Message documentation)
 * @author Purodha
 * @author Shirayuki
 * @author The Evil IP address
 * @author Umherirrender
 */
$messages['qqq'] = array(
	'rightfunctions-desc' => '{{desc|name=Right Functions|url=http://www.mediawiki.org/wiki/Extension:RightFunctions}}',
	'rightfunctions-rest1' => '{{optional}}
Parameters:
* $1 - list of any one of the following: cascade protection sources, restrictions, namespaces
* $2 - any one of the following messages:
** {{msg-mw|Rightfunctions-casc}}
** {{msg-mw|Rightfunctions-local}}
** {{msg-mw|Rightfunctions-ns}}',
	'rightfunctions-rest2' => '{{optional}}
Parameters:
* $1 - list of any one of the following: cascade protection sources, restrictions
* $2 - any one of the following messages:
** {{msg-mw|Rightfunctions-casc}}
** {{msg-mw|Rightfunctions-local}}
* $3 - list of any one of the following: cascade protection sources, namespaces
* $4 - any one of the following messages:
** {{msg-mw|Rightfunctions-casc}}
** {{msg-mw|Rightfunctions-ns}}
* $5 - separator {{msg-mw|Rightfunctions-sep}}',
	'rightfunctions-rest3' => '{{optional}}
Parameters:
* $1 - list of restrictions
* $2 - {{msg-mw|Rightfunctions-local}}
* $3 - list of cascade protection sources
* $4 - {{msg-mw|Rightfunctions-casc}}
* $5 - list of namespaces
* $6 - {{msg-mw|Rightfunctions-ns}}
* $7 - separator {{msg-mw|Rightfunctions-sep}}',
	'rightfunctions-sep' => '{{optional}}
Used as a separator:
* as <code>$5</code> in {{msg-mw|Rightfunctions-rest2}}
* as <code>$7</code> in {{msg-mw|Rightfunctions-rest3}}',
	'rightfunctions-casc' => 'This message follows a list of the cascade protection sources.

Used:
* as <code>$2</code> in {{msg-mw|Rightfunctions-rest1}}
* as <code>$2</code> or <code>$4</code> in {{msg-mw|Rightfunctions-rest2}}
* as <code>$4</code> in {{msg-mw|Rightfunctions-rest3}}',
	'rightfunctions-local' => 'This message follows a list of the restrictions.

Used:
* as <code>$2</code> in {{msg-mw|Rightfunctions-rest1}}
* as <code>$2</code> in {{msg-mw|Rightfunctions-rest2}}
* as <code>$2</code> in {{msg-mw|Rightfunctions-rest3}}',
	'rightfunctions-ns' => 'This message follows a list of the namespaces.

Used:
* as <code>$2</code> in {{msg-mw|Rightfunctions-rest1}}
* as <code>$4</code> in {{msg-mw|Rightfunctions-rest2}}
* as <code>$6</code> in {{msg-mw|Rightfunctions-rest3}}',
);

/** Arabic (العربية)
 * @author Meno25
 */
$messages['ar'] = array(
	'rightfunctions-desc' => 'دوال محلل تعتمد على السماحات',
	'rightfunctions-sep' => '،',
	'rightfunctions-casc' => '(من مصادر مضمنة)',
	'rightfunctions-local' => '(من صفحة محلية)',
	'rightfunctions-ns' => '(من حماية نطاق)',
);

/** Egyptian Spoken Arabic (مصرى)
 * @author Meno25
 */
$messages['arz'] = array(
	'rightfunctions-desc' => 'دوال محلل تعتمد على السماحات',
	'rightfunctions-casc' => '(من مصادر مضمنة)',
	'rightfunctions-local' => '(من صفحة محلية)',
	'rightfunctions-ns' => '(من حماية نطاق)',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'rightfunctions-desc' => "Funciones d'analís basaes en permisos",
	'rightfunctions-casc' => '(dende fontes en cascada)',
	'rightfunctions-local' => '(dende páxina llocal)',
	'rightfunctions-ns' => "(dende protección d'espaciu de nomes)",
);

/** Bavarian (Boarisch)
 * @author Man77
 */
$messages['bar'] = array(
	'rightfunctions-casc' => '(vu ana kaskadiaradn Quöin)',
	'rightfunctions-local' => '(vu lokale Seitn)',
	'rightfunctions-ns' => '(vu da Nãmensraumsperrung)',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'rightfunctions-desc' => 'Функцыі парсэра заснаваныя на дазволах',
	'rightfunctions-casc' => '(з каскаднай абароны)',
	'rightfunctions-local' => '(з лякальнай старонкі)',
	'rightfunctions-ns' => '(з абароны прасторы назваў)',
);

/** Breton (brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'rightfunctions-desc' => "Arc'hwelioù parser diazezet war aotreoù",
	'rightfunctions-casc' => '(adalek mammennoù e sklalierad)',
	'rightfunctions-local' => "(adalek ur bajenn lec'hel)",
	'rightfunctions-ns' => '(adalek ar gwarez esaouennoù anv)',
);

/** Bosnian (bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'rightfunctions-desc' => 'Funkcije parsera bazirane za dopuštenjima',
	'rightfunctions-casc' => '(iz povezanih izvora)',
	'rightfunctions-local' => '(sa lokalne stranice)',
	'rightfunctions-ns' => '(od zaštite imenskog prostora)',
);

/** German (Deutsch)
 * @author Kghbln
 * @author Melancholie
 */
$messages['de'] = array(
	'rightfunctions-desc' => 'Ermöglicht von Berechtigungen abhängige Parserfunktionen',
	'rightfunctions-casc' => '(von kaskadierenden Quellen)',
	'rightfunctions-local' => '(von lokalen Seiten)',
	'rightfunctions-ns' => '(von Namensraumsperrungen)',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'rightfunctions-desc' => 'Parserowe funkcije na zakłaźe pšawow',
	'rightfunctions-casc' => '(z kaskaděrujucych žrědłow)',
	'rightfunctions-local' => '(z lokalnego boka)',
	'rightfunctions-ns' => '(ze šćita mjenjowego ruma)',
);

/** Greek (Ελληνικά)
 * @author Omnipaedista
 * @author ZaDiak
 */
$messages['el'] = array(
	'rightfunctions-desc' => 'Λεξιαναλυτικές συναρτήσεις βάσει αδειών',
	'rightfunctions-casc' => '(απο διαδοχικές πηγές)',
	'rightfunctions-local' => '(από τοπική σελίδα)',
	'rightfunctions-ns' => '(από την προστασία περιοχής)',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 */
$messages['eo'] = array(
	'rightfunctions-desc' => 'Rajtecaj funkcioj de sintaksaj analiziloj',
	'rightfunctions-casc' => '(de kaskadaj fontoj)',
	'rightfunctions-local' => '(de loka paĝo)',
	'rightfunctions-ns' => '(de nomspaca protektado)',
);

/** Spanish (español)
 * @author Crazymadlover
 * @author Sanbec
 */
$messages['es'] = array(
	'rightfunctions-desc' => 'Funciones sintácticas basadas en permisos',
	'rightfunctions-casc' => '(a partir de fuentes en cascada)',
	'rightfunctions-local' => '(de página local)',
	'rightfunctions-ns' => '(a partir de la protección del espacio de nombres)',
);

/** Persian (فارسی)
 * @author Armin1392
 * @author Reza1615
 */
$messages['fa'] = array(
	'rightfunctions-sep' => '،',
	'rightfunctions-local' => '(از صفحهٔ داخلی)',
	'rightfunctions-ns' => '(از حفاظت فضای نام)',
);

/** Finnish (suomi)
 * @author Str4nd
 */
$messages['fi'] = array(
	'rightfunctions-desc' => 'Käyttöoikeuspohjaiset jäsenninfunktiot',
	'rightfunctions-local' => '(paikalliselta sivulta)',
	'rightfunctions-ns' => '(nimiavaruuden suojauksesta)',
);

/** French (français)
 * @author Grondin
 * @author McDutchie
 */
$messages['fr'] = array(
	'rightfunctions-desc' => 'Fonctions pour le parseur basées sur des permissions',
	'rightfunctions-casc' => '(depuis les sources en cascade)',
	'rightfunctions-local' => '(depuis une page locale)',
	'rightfunctions-ns' => '(depuis la protection des espaces de nom)',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'rightfunctions-desc' => 'Fonccions du parsor basâs sur des pèrmissions',
	'rightfunctions-casc' => '(dês les sôrses en cascâda)',
	'rightfunctions-local' => '(dês una pâge locala)',
	'rightfunctions-ns' => '(dês la protèccion des èspâços de noms)',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'rightfunctions-desc' => 'Permisos baseados nas funcións analíticas',
	'rightfunctions-rest1' => '$1 $2',
	'rightfunctions-rest2' => '$1 $2$5 $3 $4',
	'rightfunctions-rest3' => '$1 $2$7 $3 $4$7 $5 $6',
	'rightfunctions-sep' => ',',
	'rightfunctions-casc' => '(desde fontes en cascada)',
	'rightfunctions-local' => '(desde a páxina local)',
	'rightfunctions-ns' => '(desde a protección do espazo de nomes)',
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'rightfunctions-desc' => 'Erlaubnisbasierti Parser-Funktione',
	'rightfunctions-casc' => '(vu kaskadefermige Quälle)',
	'rightfunctions-local' => '(vu lokale Syte)',
	'rightfunctions-ns' => '(vu Namensryymsperrige)',
);

/** Hebrew (עברית)
 * @author Rotemliss
 * @author YaronSh
 */
$messages['he'] = array(
	'rightfunctions-desc' => 'הוראות תנאי מבוססות הרשאות',
	'rightfunctions-rest1' => '$1 $2',
	'rightfunctions-rest2' => '$1 $2$5 $3 $4',
	'rightfunctions-rest3' => '$1 $2$7 $3 $4$7 $5 $6',
	'rightfunctions-sep' => ',',
	'rightfunctions-casc' => '(ממקורות מדורגים)',
	'rightfunctions-local' => '(מדף מקומי)',
	'rightfunctions-ns' => '(מהגנת מרחב השם)',
);

/** Hindi (हिन्दी)
 * @author Kaustubh
 */
$messages['hi'] = array(
	'rightfunctions-desc' => 'अनुमति-आधारित पार्सर कार्य',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'rightfunctions-desc' => 'Parserowe funkcije na zakładźe prawow',
	'rightfunctions-casc' => '(z kaskadowacych žórłow)',
	'rightfunctions-local' => '(z lokalneje strony)',
	'rightfunctions-ns' => '(ze škita mjenoweho ruma)',
);

/** Hungarian (magyar)
 * @author Glanthor Reviol
 */
$messages['hu'] = array(
	'rightfunctions-desc' => 'Jogosultság-alapú elemzőfüggvények',
	'rightfunctions-casc' => '(kaszkádolt forrásokból)',
	'rightfunctions-local' => '(helyi lapról)',
	'rightfunctions-ns' => '(névtérvédelemből)',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'rightfunctions-desc' => 'Functiones pro le analysator syntactic a base de permissiones',
	'rightfunctions-rest1' => '$1 $2',
	'rightfunctions-rest2' => '$1 $2$5 $3 $4',
	'rightfunctions-rest3' => '$1 $2$7 $3 $4$7 $5 $6',
	'rightfunctions-sep' => ',',
	'rightfunctions-casc' => '(ab fontes in cascada)',
	'rightfunctions-local' => '(ab un pagina local)',
	'rightfunctions-ns' => '(ab le protection de spatios de nomines)',
);

/** Indonesian (Bahasa Indonesia)
 * @author Bennylin
 * @author IvanLanin
 */
$messages['id'] = array(
	'rightfunctions-desc' => 'Fungsi parser berdasarkan hak pengguna',
	'rightfunctions-casc' => '(dari sumber beruntun)',
	'rightfunctions-local' => '(dari halaman lokal)',
	'rightfunctions-ns' => '(dari pelindungan ruang nama)',
);

/** Italian (italiano)
 * @author Darth Kule
 * @author Pietrodn
 */
$messages['it'] = array(
	'rightfunctions-desc' => 'Funzioni del parser basate sui permessi',
	'rightfunctions-casc' => '(da fonti a cascata)',
	'rightfunctions-local' => '(da pagina locale)',
	'rightfunctions-ns' => '(da protezione namespace)',
);

/** Japanese (日本語)
 * @author Fryed-peach
 * @author Shirayuki
 */
$messages['ja'] = array(
	'rightfunctions-desc' => 'アクセス許可ベースのパーサー関数',
	'rightfunctions-rest1' => '$1 $2',
	'rightfunctions-rest2' => '$1 $2$5$3 $4',
	'rightfunctions-rest3' => '$1 $2$7$3 $4$7$5 $6',
	'rightfunctions-sep' => '、',
	'rightfunctions-casc' => '(カスケード元より)',
	'rightfunctions-local' => '(ローカルページより)',
	'rightfunctions-ns' => '(名前空間保護より)',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'rightfunctions-casc' => '(კასკადური წყაროებისათვის)',
	'rightfunctions-local' => '(ლოკალური გვერდისათვის)',
	'rightfunctions-ns' => '(სახელთა სივრცის დასაცავად)',
);

/** Khmer (ភាសាខ្មែរ)
 * @author Lovekhmer
 * @author Thearith
 */
$messages['km'] = array(
	'rightfunctions-local' => '(ពី​ទំពរ​មូលដ្ឋាន)',
	'rightfunctions-ns' => '(ពីការការពារលំហឈ្មោះ)',
);

/** Korean (한국어)
 * @author 아라
 */
$messages['ko'] = array(
	'rightfunctions-desc' => '허가 기반의 파서 함수',
	'rightfunctions-casc' => '(계단식 원본에서)',
	'rightfunctions-local' => '(로컬 문서에서)',
	'rightfunctions-ns' => '(이름공간 보호에서)',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'rightfunctions-desc' => 'Parser-Fungxjuhne op Rääschte.',
	'rightfunctions-casc' => '(fun Kaßkade-Quelle)',
	'rightfunctions-local' => '(fun en Sigg hee em Wiki)',
	'rightfunctions-ns' => '(fum Appachemang Schotz)',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'rightfunctions-desc' => 'Parser Funktiounen déi vun de Benotzerrechter ofhänken',
	'rightfunctions-casc' => '(vun de Quellen a Kaskaden)',
	'rightfunctions-local' => '(vun der lokaler Säit)',
	'rightfunctions-ns' => '(vun der Spär vum Nummraum)',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 * @author Brest
 */
$messages['mk'] = array(
	'rightfunctions-desc' => 'Парсер функции на основа на дозволи',
	'rightfunctions-casc' => '(од каскадни извори)',
	'rightfunctions-local' => '(од локална страница)',
	'rightfunctions-ns' => '(од заштита на именски простор)',
);

/** Marathi (मराठी)
 * @author Kaustubh
 */
$messages['mr'] = array(
	'rightfunctions-desc' => 'परवानगी आधारित पार्सर कार्ये',
);

/** Norwegian Bokmål (norsk bokmål)
 * @author Nghtwlkr
 */
$messages['nb'] = array(
	'rightfunctions-desc' => 'Rettighetsbaserte parserfunksjoner',
	'rightfunctions-casc' => '(fra etterfølgende kilder)',
	'rightfunctions-local' => '(fra lokal side)',
	'rightfunctions-ns' => '(fra navneromsbeskyttelse)',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'rightfunctions-desc' => 'Rechtengebaseerde parserfuncties',
	'rightfunctions-casc' => '(van cascadebronnen)',
	'rightfunctions-local' => '(van lokale pagina)',
	'rightfunctions-ns' => '(van naamruimtebeveiliging)',
);

/** Norwegian Nynorsk (norsk nynorsk)
 * @author Harald Khan
 * @author Njardarlogar
 */
$messages['nn'] = array(
	'rightfunctions-desc' => 'Rettbaserte parserfunksjonar',
	'rightfunctions-casc' => '(frå etterfølgjande kjelder)',
	'rightfunctions-local' => '(frå lokal sida)',
	'rightfunctions-ns' => '(frå namneromvern)',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'rightfunctions-desc' => 'Permissions de basa de las foncions parsaires',
	'rightfunctions-casc' => '(dempuèi las fonts en cascada)',
	'rightfunctions-local' => '(dempuèi una pagina locala)',
	'rightfunctions-ns' => '(dempuèi la proteccion dels espacis de nom)',
);

/** Polish (polski)
 * @author Sp5uhe
 * @author ToSter
 */
$messages['pl'] = array(
	'rightfunctions-desc' => 'Funkcje parsera pracujące na uprawnieniach',
	'rightfunctions-casc' => '(ze źródeł kaskadowych)',
	'rightfunctions-local' => '(z lokalnej strony)',
	'rightfunctions-ns' => '(z zabezpieczenia przestrzeni nazw)',
);

/** Piedmontese (Piemontèis)
 * @author Dragonòt
 */
$messages['pms'] = array(
	'rightfunctions-desc' => 'Funsion dël parser basà an sij përmess',
	'rightfunctions-casc' => '(da sorziss a cascà)',
	'rightfunctions-local' => '(da pàgina local)',
	'rightfunctions-ns' => '(da protession namespace)',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'rightfunctions-local' => '(له سيمه ايز مخ نه)',
);

/** Portuguese (português)
 * @author Hamilton Abreu
 * @author Luckas
 * @author Malafaya
 */
$messages['pt'] = array(
	'rightfunctions-desc' => 'Funções do analisador sintáctico baseadas em permissões',
	'rightfunctions-casc' => '(de fontes em cascata)',
	'rightfunctions-local' => '(de página local)',
	'rightfunctions-ns' => '(de proteção de espaços nominais)',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Eduardo.mps
 */
$messages['pt-br'] = array(
	'rightfunctions-desc' => 'Funções do analisador (parser) baseadas em permissões',
	'rightfunctions-casc' => '(de fontes em cascata)',
	'rightfunctions-local' => '(de página local)',
	'rightfunctions-ns' => '(de proteção de espaços nominais)',
);

/** Romanian (română)
 * @author Minisarm
 */
$messages['ro'] = array(
	'rightfunctions-local' => '(de la o pagină locală)',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'rightfunctions-desc' => 'Permesse basate sus a le funziune de analisi',
	'rightfunctions-casc' => '(da sorgende a cascate)',
	'rightfunctions-local' => "(da 'na pàgena locale)",
	'rightfunctions-ns' => "(da 'nu namespace protette)",
);

/** Russian (русский)
 * @author Ferrer
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'rightfunctions-desc' => 'Функции парсера на основе разрешений',
	'rightfunctions-casc' => '(для каскадных источников)',
	'rightfunctions-local' => '(для локальной страницы)',
	'rightfunctions-ns' => '(для защиты пространства имён)',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'rightfunctions-local' => '(ප්‍රාදේශීය පිටුවකින්)',
);

/** Slovak (slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'rightfunctions-desc' => 'Funkcie syntaktického analyzátora podľa oprávnení',
	'rightfunctions-casc' => '(z kaskádových zdrojov)',
	'rightfunctions-local' => '(z lokálnej stránky)',
	'rightfunctions-ns' => '(zo zamknutia menného priestoru)',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'rightfunctions-rest1' => '$1 $2',
	'rightfunctions-rest2' => '$1 $2$5 $3 $4',
	'rightfunctions-rest3' => '$1 $2$7 $3 $4$7 $5 $6',
	'rightfunctions-sep' => ',',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 */
$messages['sr-el'] = array(
	'rightfunctions-rest1' => '$1 $2',
	'rightfunctions-rest2' => '$1 $2$5 $3 $4',
	'rightfunctions-rest3' => '$1 $2$7 $3 $4$7 $5 $6',
	'rightfunctions-sep' => ',',
);

/** Swedish (svenska)
 * @author Lejonel
 * @author M.M.S.
 * @author Najami
 */
$messages['sv'] = array(
	'rightfunctions-desc' => 'Parserfunktioner som är baserade på användarrättigheter',
	'rightfunctions-casc' => '(från kaskaderande källor)',
	'rightfunctions-local' => '(från lokal sida)',
	'rightfunctions-ns' => '(från namnrymdsskrivskydd)',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'rightfunctions-local' => '(స్థానిక పేజీ నుండి)',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'rightfunctions-desc' => 'Mga tungkuling pambanghay na nakabatay sa kapahintulutan',
	'rightfunctions-rest1' => '$1 $2',
	'rightfunctions-rest2' => '$1 $2$5 $3 $4',
	'rightfunctions-rest3' => '$1 $2$7 $3 $4$7 $5 $6',
	'rightfunctions-sep' => ',',
	'rightfunctions-casc' => '(mula sa mga pinagmumulang baita-baitang)',
	'rightfunctions-local' => '(mula sa pampook/lokal na pahina)',
	'rightfunctions-ns' => '(mula sa pagsasanggalang ng espasyo ng pangalan)',
);

/** Turkish (Türkçe)
 * @author Vito Genovese
 */
$messages['tr'] = array(
	'rightfunctions-desc' => 'İzin temelli ayrıştırıcı fonksiyonlar',
	'rightfunctions-casc' => '(kademeli kaynaklardan)',
	'rightfunctions-local' => '(yerel sayfadan)',
	'rightfunctions-ns' => '(ad alanı korumasından)',
);

/** Ukrainian (українська)
 * @author Ата
 */
$messages['uk'] = array(
	'rightfunctions-desc' => 'Парсерні функції на основі дозволів',
	'rightfunctions-casc' => '(із каскадних джерел)',
	'rightfunctions-local' => '(із локальної сторінки)',
	'rightfunctions-ns' => '(із захисту простору імен)',
);

/** Vietnamese (Tiếng Việt)
 * @author Vinhtantran
 */
$messages['vi'] = array(
	'rightfunctions-desc' => 'Hàm cú pháp dựa trên sự cấp phép',
	'rightfunctions-casc' => '(từ nguồn xếp tầng)',
	'rightfunctions-local' => '(từ trang nội bộ)',
	'rightfunctions-ns' => '(từ khóa không gian tên)',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Kuailong
 * @author Yfdyh000
 */
$messages['zh-hans'] = array(
	'rightfunctions-desc' => '基于权限的解析器功能',
	'rightfunctions-local' => '（来自本地页面）',
);
