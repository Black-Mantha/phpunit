--TEST--
phpunit --list-tests --filter testAdd#0 ../../../_files/DataProviderTest.php
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--no-configuration';
$_SERVER['argv'][] = '--list-tests';
$_SERVER['argv'][] = '--filter';
$_SERVER['argv'][] = 'testAdd#0';
$_SERVER['argv'][] = __DIR__ . '/../../../_files/DataProviderTest.php';

require_once __DIR__ . '/../../../bootstrap.php';
(new PHPUnit\TextUI\Application)->run($_SERVER['argv']);
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

Available test(s):
 - PHPUnit\TestFixture\DataProviderTest::testAdd#0
