<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'TYPO3.' . $_EXTKEY,
	'Tntlightgallery',
	array(
		'LightGallery' => 'gallery',
		
	),
	// non-cacheable actions
	array(
		'LightGallery' => 'gallery',
		
	)
);
