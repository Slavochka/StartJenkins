<?php
require_once('../simpletest/autorun.php');
require_once('../classes/Log.php');
require_once('../classes/SimpleCalculator.php');

class TestOfLogging extends UnitTestCase {
    protected $_firstNum = 5;
    protected $_secondNum = 20;
    function testSimpleCalculatorPassCalculations() {
        $accessLog = new Log('../var/log/success.log');
        $errorLog = new Log('../var/log/error.log');

        $calculator = new SimpleCalculator($this->_firstNum, $this->_secondNum);
        $sum  = $this->_firstNum + $this->_secondNum;
        $diff = $this->_firstNum - $this->_secondNum;
        $mult = $this->_firstNum * $this->_secondNum;
        $div  = $this->_firstNum / $this->_secondNum;

        $testSum  = $this->assertTrue($calculator->calculateSum() == $sum);
        $testDiff = $this->assertTrue($calculator->calculateDiff() == $diff);
        $testMult = $this->assertTrue($calculator->calculateMult() == $mult);
        $testDiv  = $this->assertTrue($calculator->calculateDiv() == $div);
        $results = array(
            'Sum'  => $testSum,
            'Siff' => $testDiff,
            'Mult' => $testMult,
            'Div'  => $testDiv
        );

        foreach ($results as $key=>$res) {
            if ($res) {
                $message = $key . ': passed';
                $accessLog->writeLog($message);
            } else {
                $message = $key . ': failed';
                $accessLog->writeLog($message);
            }
        }
    }
}
