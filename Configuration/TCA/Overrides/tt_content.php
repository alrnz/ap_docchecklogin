<?php
defined('TYPO3_MODE') || die();

/***************
 * FlexForms
 */
$pluginSignature = 'apdocchecklogin_doccheckauthentication';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] = 'layout,select_key,recursive';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $pluginSignature,
    'FILE:EXT:ap_docchecklogin/Configuration/FlexForms/Setup.xml'
);

/***************
 * Plugin
 */
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Antwerpes.ApDocchecklogin',
    'DocCheckAuthentication',
    'LLL:EXT:ap_docchecklogin/Resources/Private/Language/locallang_db.xlf:pluginName'
);