<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
t3lib_extMgm::addUserTSConfig('
	options.saveDocNew.tx_jhestaffdirectory_sectors=1
');
t3lib_extMgm::addUserTSConfig('
	options.saveDocNew.tx_jhestaffdirectory_further_education=1
');
t3lib_extMgm::addUserTSConfig('
	options.saveDocNew.tx_jhestaffdirectory_accreditation=1
');

t3lib_extMgm::addPItoST43($_EXTKEY, 'pi1/class.tx_jhestaffdirectory_pi1.php', '_pi1', 'list_type', 1);


t3lib_extMgm::addTypoScript($_EXTKEY,'setup','
	tt_content.shortcut.20.0.conf.tx_jhestaffdirectory_sectors = < plugin.'.t3lib_extMgm::getCN($_EXTKEY).'_pi1
	tt_content.shortcut.20.0.conf.tx_jhestaffdirectory_sectors.CMD = singleView
',43);
?>