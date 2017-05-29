<?php
class Log {
    protected $_logFile;

    function Log($file_path) {
        $this->_logFile = $file_path;
    }

    function writeLog($message) {
        $date = date("Y-m-d H:i:s");
        file_put_contents($this->_logFile, $date . '| ' . $message . "\n", FILE_APPEND);
    }
}