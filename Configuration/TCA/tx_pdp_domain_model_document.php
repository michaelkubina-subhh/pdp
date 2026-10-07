<?php

declare(strict_types=1);

return [
    'ctrl' => [
        'title' => 'LLL:EXT:pdp/Resources/Private/Language/locallang_db.xlf:tx_pdp_domain_model_document',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'default_sortby' => 'title',
        'iconfile' => 'EXT:pdp/Resources/Public/Icons/Document.svg',
        'searchFields' => 'title, author, year',
        'transOrigPointerField' => 'l18n_parent',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'languageField' => 'sys_language_uid',
        'translationSource' => 'l10n_source'
    ],
    'types' => [
        '0' => [
            'showitem'
                => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    title, author, year,
                 --div--;LLL:EXT:pdp/Resources/Private/Language/locallang_db.xlf:tx_pdp_domain_model_document.tabs.action,
                    --palette--;;action,',
        ],
    ],
    'palettes' => [
        'action' => [
            'label' => 'LLL:EXT:pdp/Resources/Private/Language/locallang_db.xlf:tx_pdp_domain_model_document.tabs.action',
            'showitem' => '
                action;LLL:EXT:pdp/Resources/Private/Language/locallang_db.xlf:tx_pdp_domain_model_document.tabs.action,
            ',
        ],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ],
        ],
        'l18n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        'label' => '',
                        'value' => 0,
                    ],
                ],
                'foreign_table' => 'tx_pdp_domain_model_document',
                'foreign_table_where'
                    => 'AND {#tx_pdp_domain_model_document}.{#pid}=###CURRENT_PID###
                     AND {#tx_pdp_domain_model_document}.{#sys_language_uid} IN (-1,0)',
                'default' => 0,
            ],
        ],
        'l10n_source' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'l18n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
                'default' => '',
            ],
        ],
        'title' => [
            'label' => 'LLL:EXT:pdp/Resources/Private/Language/locallang_db.xlf:tx_pdp_domain_model_document.title',
            'config' => [
                'type' => 'input',
                'size' => 40,
                'max' => 255,
                'eval' => 'trim',
                'required' => true,
            ],
        ],
        'author' => [
            'label' => 'LLL:EXT:pdp/Resources/Private/Language/locallang_db.xlf:tx_pdp_domain_model_document.author',
            'config' => [
                'type' => 'input',
                'size' => 40,
                'max' => 255,
                'eval' => 'trim',
                'required' => true,
            ],
        ],
        'year' => [
            'label' => 'LLL:EXT:pdp/Resources/Private/Language/locallang_db.xlf:tx_pdp_domain_model_document.year',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'max' => 4,
                'eval' => 'year',
                'required' => true,
            ],
        ],
        'action' => [
            'label' => 'LLL:EXT:pdp/Resources/Private/Language/locallang_db.xlf:tx_pdp_domain_model_document.tabs.action',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectCheckBox',
                'items' => [
                    [
                        'label' => 'View',
                        'value' => 1,
                    ],
                    [
                        'label' => 'Download',
                        'value' => 2,
                    ],
                    [
                        'label' => 'Print',
                        'value' => 3,
                    ],
                ],
            ],
        ],
    ],
];
