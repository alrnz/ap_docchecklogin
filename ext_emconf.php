<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "ap_docchecklogin".
 *
 * Auto generated 18-07-2014 10:31
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'DocCheck Login',
    'description' => 'Official DocCheck Login Extension for TYPO3 9 - 10',
    'category' => 'plugin',
    'shy' => false,
    'version' => '3.0.0',
    'dependencies' => 'extbase,fluid',
    'conflicts' => 'tgr_doccheck,kb_md5fepw',
    'priority' => '',
    'loadOrder' => '',
    'module' => '',
    'state' => 'beta',
    'uploadfolder' => false,
    'createDirs' => '',
    'modify_tables' => '',
    'clearcacheonload' => true,
    'lockType' => '',
    'author' => 'antwerpes ag - see README.txt',
    'author_email' => 'opensource@antwerpes.de',
    'author_company' => 'antwerpes ag',
    'CGLcompliance' => null,
    'CGLcompliance_note' => null,
    'constraints' => [
        'conflicts' => [
            'kb_md5fepw' => '',
            'tgr_doccheck' => '',
        ],
        'depends' => [
        ],
        'suggests' => [],
    ],
];
