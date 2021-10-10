<?php

class StrategySubstract implements StrategyInterface
{
    public function calculate(int $a, int $b) {
        return $a - $b;
    }
}