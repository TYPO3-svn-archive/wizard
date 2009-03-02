<?php
if ( TYPO3_MODE != 'BE' )
	die ('Access denied.');

		// Use custom AOE media wizard instead the default create new page wizard
t3lib_extMgm::addPageTSConfig('
	mod.web_list.newPageWiz.overrideWithExtension = wizard
	mod.web_list.newContentWiz.overrideWithExtension = wizard
');
?>