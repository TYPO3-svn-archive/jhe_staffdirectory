<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
$tempColumns = array (
	'tx_jhestaffdirectory_room' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:jhe_staffdirectory/locallang_db.xml:fe_users.tx_jhestaffdirectory_room',		
		'config' => array (
			'type' => 'input',	
			'size' => '10',	
			'eval' => 'trim',
		)
	),
	'tx_jhestaffdirectory_mobile' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:jhe_staffdirectory/locallang_db.xml:fe_users.tx_jhestaffdirectory_mobile',		
		'config' => array (
			'type' => 'input',	
			'size' => '20',	
			'eval' => 'trim',
		)
	),
	'tx_jhestaffdirectory_personnel_number' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:jhe_staffdirectory/locallang_db.xml:fe_users.tx_jhestaffdirectory_personnel_number',		
		'config' => array (
			'type' => 'input',	
			'size' => '10',	
			'eval' => 'required,trim',
		)
	),
	'tx_jhestaffdirectory_cost_unit' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:jhe_staffdirectory/locallang_db.xml:fe_users.tx_jhestaffdirectory_cost_unit',		
		'config' => array (
			'type' => 'input',	
			'size' => '10',	
			'eval' => 'trim',
		)
	),
	'tx_jhestaffdirectory_function' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:jhe_staffdirectory/locallang_db.xml:fe_users.tx_jhestaffdirectory_function',		
		'config' => array (
			'type' => 'input',	
			'size' => '30',	
			'eval' => 'trim',
		)
	),
	'tx_jhestaffdirectory_sector' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:jhe_staffdirectory/locallang_db.xml:fe_users.tx_jhestaffdirectory_sector',		
		'config' => array (
			'type' => 'group',	
			'internal_type' => 'db',	
			'allowed' => 'tx_jhestaffdirectory_sectors',	
			'size' => 5,	
			'minitems' => 0,
			'maxitems' => 100,	
			"MM" => "fe_users_tx_jhestaffdirectory_sector_mm",
		)
	),
	'tx_jhestaffdirectory_further_education' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:jhe_staffdirectory/locallang_db.xml:fe_users.tx_jhestaffdirectory_further_education',		
		'config' => array (
			'type' => 'group',	
			'internal_type' => 'db',	
			'allowed' => 'tx_jhestaffdirectory_further_education',	
			'size' => 5,	
			'minitems' => 0,
			'maxitems' => 100,	
			"MM" => "fe_users_tx_jhestaffdirectory_further_education_mm",
		)
	),
	'tx_jhestaffdirectory_accreditations' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:jhe_staffdirectory/locallang_db.xml:fe_users.tx_jhestaffdirectory_accreditations',		
		'config' => array (
			'type' => 'group',	
			'internal_type' => 'db',	
			'allowed' => 'tx_jhestaffdirectory_accreditation',	
			'size' => 5,	
			'minitems' => 0,
			'maxitems' => 100,	
			"MM" => "fe_users_tx_jhestaffdirectory_accreditations_mm",
		)
	),
);


t3lib_div::loadTCA('fe_users');
t3lib_extMgm::addTCAcolumns('fe_users',$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes('fe_users','tx_jhestaffdirectory_room;;;;1-1-1, tx_jhestaffdirectory_mobile, tx_jhestaffdirectory_personnel_number, tx_jhestaffdirectory_cost_unit, tx_jhestaffdirectory_function, tx_jhestaffdirectory_sector, tx_jhestaffdirectory_further_education, tx_jhestaffdirectory_accreditations');

$TCA['tx_jhestaffdirectory_sectors'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:jhe_staffdirectory/locallang_db.xml:tx_jhestaffdirectory_sectors',		
		'label'     => 'sector_name',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'sortby' => 'sorting',	
		'delete' => 'deleted',	
		'enablecolumns' => array (		
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_jhestaffdirectory_sectors.gif',
	),
);

$TCA['tx_jhestaffdirectory_further_education'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:jhe_staffdirectory/locallang_db.xml:tx_jhestaffdirectory_further_education',		
		'label'     => 'fursther_education_name',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'sortby' => 'sorting',	
		'delete' => 'deleted',	
		'enablecolumns' => array (		
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_jhestaffdirectory_further_education.gif',
	),
);

$TCA['tx_jhestaffdirectory_accreditation'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:jhe_staffdirectory/locallang_db.xml:tx_jhestaffdirectory_accreditation',		
		'label'     => 'accreditation_name',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'sortby' => 'sorting',	
		'delete' => 'deleted',	
		'enablecolumns' => array (		
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_jhestaffdirectory_accreditation.gif',
	),
);


t3lib_div::loadTCA('tt_content');
$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_pi1']='layout,select_key';


t3lib_extMgm::addPlugin(array(
	'LLL:EXT:jhe_staffdirectory/locallang_db.xml:tt_content.list_type_pi1',
	$_EXTKEY . '_pi1',
	t3lib_extMgm::extRelPath($_EXTKEY) . 'ext_icon.gif'
),'list_type');


t3lib_extMgm::addStaticFile($_EXTKEY,'pi1/static/','Staff Directory');


if (TYPO3_MODE == 'BE') {
	$TBE_MODULES_EXT['xMOD_db_new_content_el']['addElClasses']['tx_jhestaffdirectory_pi1_wizicon'] = t3lib_extMgm::extPath($_EXTKEY).'pi1/class.tx_jhestaffdirectory_pi1_wizicon.php';
}

t3lib_extMgm::addStaticFile($_EXTKEY,'static/jhe_staffdirectory/', 'jhe_staffdirectory');

t3lib_extMgm::addStaticFile($_EXTKEY,'static/jhe_staffdirectory_default_style/', 'jhe_staffdirectory default style');
?>