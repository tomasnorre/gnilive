<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Tnm.' . $_EXTKEY,
	'Scores',
	'Show Scores'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Tnm.' . $_EXTKEY,
	'Match',
	'Show match'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'gnilive');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_gnilive_domain_model_player', 'EXT:gnilive/Resources/Private/Language/locallang_csh_tx_gnilive_domain_model_player.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_gnilive_domain_model_player');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_gnilive_domain_model_team', 'EXT:gnilive/Resources/Private/Language/locallang_csh_tx_gnilive_domain_model_team.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_gnilive_domain_model_team');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_gnilive_domain_model_match', 'EXT:gnilive/Resources/Private/Language/locallang_csh_tx_gnilive_domain_model_match.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_gnilive_domain_model_match');
