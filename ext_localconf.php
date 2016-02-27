<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Tnm.' . $_EXTKEY,
	'Scores',
	array(
		'showScores' => 'list',
		
	),
	// non-cacheable actions
	array(
		'showScores' => 'list',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Tnm.' . $_EXTKEY,
	'Match',
	array(
		'showMatch' => 'list',
		
	),
	// non-cacheable actions
	array(
		'showMatch' => 'list',
		
	)
);
