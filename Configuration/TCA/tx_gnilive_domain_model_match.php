<?php
return array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:gnilive/Resources/Private/Language/locallang_db.xlf:tx_gnilive_domain_model_match',
		'label' => 'match_type',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'match_type,tee_time,current_hole,score,player_one_team_a,player_two_team_a,player_one_team_b,player_two_team_b,match_team_a,match_team_b,',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('gnilive') . 'Resources/Public/Icons/tx_gnilive_domain_model_match.gif'
	),
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, match_type, tee_time, current_hole, score, player_one_team_a, player_two_team_a, player_one_team_b, player_two_team_b, match_team_a, match_team_b',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, match_type, tee_time, current_hole, score, player_one_team_a, player_two_team_a, player_one_team_b, player_two_team_b, match_team_a, match_team_b, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_gnilive_domain_model_match',
				'foreign_table_where' => 'AND tx_gnilive_domain_model_match.pid=###CURRENT_PID### AND tx_gnilive_domain_model_match.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'match_type' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:gnilive/Resources/Private/Language/locallang_db.xlf:tx_gnilive_domain_model_match.match_type',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'tee_time' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:gnilive/Resources/Private/Language/locallang_db.xlf:tx_gnilive_domain_model_match.tee_time',
			'config' => array(
				'type' => 'input',
				'size' => 10,
				'eval' => 'datetime',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'current_hole' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:gnilive/Resources/Private/Language/locallang_db.xlf:tx_gnilive_domain_model_match.current_hole',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'score' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:gnilive/Resources/Private/Language/locallang_db.xlf:tx_gnilive_domain_model_match.score',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'player_one_team_a' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:gnilive/Resources/Private/Language/locallang_db.xlf:tx_gnilive_domain_model_match.player_one_team_a',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_gnilive_domain_model_player',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'player_two_team_a' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:gnilive/Resources/Private/Language/locallang_db.xlf:tx_gnilive_domain_model_match.player_two_team_a',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_gnilive_domain_model_player',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'player_one_team_b' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:gnilive/Resources/Private/Language/locallang_db.xlf:tx_gnilive_domain_model_match.player_one_team_b',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_gnilive_domain_model_player',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'player_two_team_b' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:gnilive/Resources/Private/Language/locallang_db.xlf:tx_gnilive_domain_model_match.player_two_team_b',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_gnilive_domain_model_player',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'match_team_a' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:gnilive/Resources/Private/Language/locallang_db.xlf:tx_gnilive_domain_model_match.match_team_a',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_gnilive_domain_model_team',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'match_team_b' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:gnilive/Resources/Private/Language/locallang_db.xlf:tx_gnilive_domain_model_match.match_team_b',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'tx_gnilive_domain_model_team',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		
	),
);