<?php

class SimpleCalculator {
    
    protected $_firstNumber;
    protected $_secondNumber;
    
    function SimpleCalculator($first, $second)
    {
        $this->_firstNumber = $first;
        $this->_secondNumber = $second;
    }
    
    public function calculateSum()
    {
        return $this->_firstNumber + $this->_secondNumber;
    }
    
    public function calculateDiff()
    {
        return $this->_firstNumber - $this->_secondNumber;
    }
    
    public function calculateMult()
    {
        return $this->_firstNumber * $this->_secondNumber;
    }
    
    public function calculateDiv()
    {
        return $this->_firstNumber / $this->_secondNumber;
    }
    
}