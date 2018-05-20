<?php namespace H34;

class PrintNumbers
{
    public function oneToOneN($n=100){
        for ($i=1; $i <= $n; $i++) {
            echo $this->calculateOutPut($i) . PHP_EOL;
        }
    }

    public function calculateOutPut($n){
        if ($n%3==0 && $n%5==0){
            return "Linianos";
        }
        if ($n%3==0){
            return "Linio";
        }
        if ($n%5==0){
            return "IT";
        }
        return $n;
    }
}
