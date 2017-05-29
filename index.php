<?php
require_once('simpletest/autorun.php');
require_once('classes/log.php');

class TestOfLogging extends UnitTestCase {
    function testLogCreatesNewFileOnFirstMessage() {
        $accessLog = new Log('var/log/success.log');
        $errorLog = new Log('var/log/error.log');
        $test = $this->assertFalse(file_exists('var/log/error.log'));
//        $test = $this->assertTrue(file_exists('var/log/success.log'));
        if ($test) {
            $message = 'File exist';
            $accessLog->writeLog($message);
        } else {
            $message = 'File not exist';
            $errorLog->writeLog($message);
        }
    }
}
