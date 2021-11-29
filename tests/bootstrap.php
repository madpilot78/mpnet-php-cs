<?php

/*
 * Inspired by https://github.com/ncou/coding-standard/blob/master/tests_bootstrap.php
 */

require_once __DIR__ . '/../vendor/squizlabs/php_codesniffer/tests/bootstrap.php';

PHP_CodeSniffer\Config::setConfigData(
    'installed_paths',
    __DIR__ . '/../MPNetPHPCS',
    true
);

// Ignore all other Standards in tests
$standards = PHP_CodeSniffer\Util\Standards::getInstalledStandards();
$standards[] = 'Generic';

$ignoredStandardsStr = implode(
    ',',
    array_filter(
        $standards,
        function ($v) {
            return $v !== 'MPNetPHPCS';
        }
    )
);

putenv('PHPCS_IGNORE_TESTS=' . $ignoredStandardsStr);
