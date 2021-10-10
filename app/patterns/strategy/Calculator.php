<?php

require_once 'StrategyInterface.php';
require_once 'strategies/StrategyAdd.php';
require_once 'strategies/StrategySubstract.php';
require_once 'strategies/StrategyMultiply.php';
require_once 'strategies/StrategyDevision.php';

class Calculator 
{
    private StrategyInterface $strategy;

    public function setStrategy(StrategyInterface $strategy) {
        $this->strategy = $strategy;
    }

    public function calculate(int $a, int $b) {
        return $this->strategy->calculate($a, $b); 
    }
}