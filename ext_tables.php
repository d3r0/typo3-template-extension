<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function () {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('t3-template', 'Configuration/TypoScript', 't3-template');
    }
);
