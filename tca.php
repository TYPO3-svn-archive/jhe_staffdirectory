<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_jhestaffdirectory_sectors'] = array (
	'ctrl' => $TCA['tx_jhestaffdirectory_sectors']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'hidden,sector_name'
	),
	'feInterface' => $TCA['tx_jhestaffdirectory_sectors']['feInterface'],
	'columns' => array (
		'hidden' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		'sector_name' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:jhe_staffdirectory/locallang_db.xml:tx_jhestaffdirectory_sectors.sector_name',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'required,trim',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'hidden;;1;;1-1-1, sector_name')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);



$TCA['tx_jhestaffdirectory_further_education'] = array (
	'ctrl' => $TCA['tx_jhestaffdirectory_further_education']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'hidden,fursther_education_name'
	),
	'feInterface' => $TCA['tx_jhestaffdirectory_further_education']['feInterface'],
	'columns' => array (
		'hidden' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		'fursther_education_name' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:jhe_staffdirectory/locallang_db.xml:tx_jhestaffdirectory_further_education.fursther_education_name',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'required,trim',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'hidden;;1;;1-1-1, fursther_education_name')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);



$TCA['tx_jhestaffdirectory_accreditation'] = array (
	'ctrl' => $TCA['tx_jhestaffdirectory_accreditation']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'hidden,accreditation_name'
	),
	'feInterface' => $TCA['tx_jhestaffdirectory_accreditation']['feInterface'],
	'columns' => array (
		'hidden' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		'accreditation_name' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:jhe_staffdirectory/locallang_db.xml:tx_jhestaffdirectory_accreditation.accreditation_name',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'required,trim',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'hidden;;1;;1-1-1, accreditation_name')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);
?>