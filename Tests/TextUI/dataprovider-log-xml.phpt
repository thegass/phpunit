--TEST--
phpunit --log-junit php://stdout DataProviderTest ../_files/DataProviderTest.php
--FILE--
<?php
define('PHPUNIT_TESTSUITE', TRUE);

$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--log-junit';
$_SERVER['argv'][3] = 'php://stdout';
$_SERVER['argv'][4] = 'DataProviderTest';
$_SERVER['argv'][5] = dirname(dirname(__FILE__)) . '/_files/DataProviderTest.php';

require_once dirname(dirname(dirname(__FILE__))) . '/PHPUnit/Autoload.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann.

..F.<?xml version="1.0" encoding="UTF-8"?>
<testsuites>
  <testsuite name="DataProviderTest" file="%s/DataProviderTest.php" tests="4" assertions="4" failures="1" errors="0" time="%f">
    <testsuite name="DataProviderTest::testAdd" tests="4" assertions="4" failures="1" errors="0" time="%f">
      <testcase name="testAdd with data set #0" assertions="1" time="%f"/>
      <testcase name="testAdd with data set #1" assertions="1" time="%f"/>
      <testcase name="testAdd with data set #2" assertions="1" time="%f">
        <failure type="PHPUnit_Framework_ExpectationFailedException">DataProviderTest::testAdd with data set #2 (1, 1, 3)
Failed asserting that &lt;integer:2&gt; matches expected &lt;integer:3&gt;.

%s:%i
%s:%i
</failure>
      </testcase>
      <testcase name="testAdd with data set #3" assertions="1" time="%f"/>
    </testsuite>
  </testsuite>
</testsuites>


Time: %i %s, Memory: %sMb

There was 1 failure:

1) DataProviderTest::testAdd with data set #2 (1, 1, 3)
Failed asserting that <integer:2> matches expected <integer:3>.
%s:%i
%s:%i

FAILURES!
Tests: 4, Assertions: 4, Failures: 1.

