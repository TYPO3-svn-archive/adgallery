<?php

########################################################################
# Extension Manager/Repository config file for ext "adgallery".
#
# Auto generated 22-03-2011 13:46
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Multimedia gallery based on adgallery',
	'description' => 'Multimedia gallery based on adgallery',
	'category' => 'plugin',
	'author' => 'CERDAN Yohann [Site-nGo]',
	'author_email' => 'cerdanyohann@yahoo.fr',
	'shy' => '',
	'dependencies' => 't3devapi',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => 'uploads/tx_adgallery',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '1.0.2',
	'constraints' => array(
		'depends' => array(
			't3devapi' => '',
			'php' => '5.0.0-0.0.0',
			'typo3' => '4.3.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:24:{s:9:"ChangeLog";s:4:"2ec4";s:12:"ext_icon.gif";s:4:"9835";s:17:"ext_localconf.php";s:4:"e39d";s:14:"ext_tables.php";s:4:"9f42";s:14:"ext_tables.sql";s:4:"9a69";s:13:"locallang.xml";s:4:"0464";s:14:"doc/manual.sxw";s:4:"bbd5";s:50:"hooks/class.tx_adgallery_extraGlobalMarkerHook.php";s:4:"1b6f";s:16:"libs/ad_next.png";s:4:"e340";s:16:"libs/ad_prev.png";s:4:"fe52";s:23:"libs/ad_scroll_back.png";s:4:"289e";s:26:"libs/ad_scroll_forward.png";s:4:"f5f3";s:16:"libs/example.txt";s:4:"968c";s:26:"libs/jquery.ad-gallery.css";s:4:"289f";s:25:"libs/jquery.ad-gallery.js";s:4:"c1a6";s:15:"libs/loader.gif";s:4:"71f0";s:14:"libs/opa75.png";s:4:"2943";s:14:"pi1/ce_wiz.gif";s:4:"ca98";s:30:"pi1/class.tx_adgallery_pi1.php";s:4:"9a90";s:38:"pi1/class.tx_adgallery_pi1_wizicon.php";s:4:"27ab";s:13:"pi1/clear.gif";s:4:"cc11";s:23:"pi1/flexform_ds_pi1.xml";s:4:"4047";s:17:"pi1/locallang.xml";s:4:"e2cc";s:17:"res/template.html";s:4:"bb87";}',
	'suggests' => array(
	),
);

?>