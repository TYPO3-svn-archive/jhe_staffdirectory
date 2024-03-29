<?php

########################################################################
# Extension Manager/Repository config file for ext "jhe_staffdirectory".
#
# Auto generated 02-06-2010 14:34
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Staff Directory',
	'description' => 'Directory of staff members based on fe_user (list, single view and search). Adds some fields.',
	'category' => 'plugin',
	'author' => 'Jari-Hermann Ernst',
	'author_email' => 'jari-hermann.ernst@bad-gmbh.de',
	'shy' => '',
	'dependencies' => 'cms,tt_address',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.0.0',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'tt_address' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:28:{s:9:"ChangeLog";s:4:"f1ba";s:10:"README.txt";s:4:"9fa9";s:12:"ext_icon.gif";s:4:"1bdc";s:17:"ext_localconf.php";s:4:"ce56";s:14:"ext_tables.php";s:4:"1218";s:14:"ext_tables.sql";s:4:"31c3";s:43:"icon_tx_jhestaffdirectory_accreditation.gif";s:4:"475a";s:47:"icon_tx_jhestaffdirectory_further_education.gif";s:4:"475a";s:37:"icon_tx_jhestaffdirectory_sectors.gif";s:4:"475a";s:13:"locallang.xml";s:4:"4b68";s:16:"locallang_db.xml";s:4:"21e7";s:7:"tca.php";s:4:"9f88";s:19:"doc/wizard_form.dat";s:4:"e346";s:20:"doc/wizard_form.html";s:4:"5736";s:14:"pi1/ce_wiz.gif";s:4:"02b6";s:38:"pi1/class.tx_jhestaffdirectory_pi1.php";s:4:"4308";s:46:"pi1/class.tx_jhestaffdirectory_pi1_wizicon.php";s:4:"e2b1";s:13:"pi1/clear.gif";s:4:"cc11";s:17:"pi1/locallang.xml";s:4:"876d";s:20:"pi1/static/setup.txt";s:4:"2646";s:28:"res/template_department.html";s:4:"adb9";s:24:"res/template_detail.html";s:4:"adb9";s:22:"res/template_list.html";s:4:"696d";s:24:"res/template_search.html";s:4:"adb9";s:39:"static/jhe_staffdirectory/constants.txt";s:4:"d41d";s:35:"static/jhe_staffdirectory/setup.txt";s:4:"d41d";s:53:"static/jhe_staffdirectory_default_style/constants.txt";s:4:"d41d";s:49:"static/jhe_staffdirectory_default_style/setup.txt";s:4:"d41d";}',
);

?>