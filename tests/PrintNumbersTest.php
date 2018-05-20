<?php

use PHPUnit\Framework\TestCase;
use H34\PrintNumbers;

class PrintNumbersTest extends TestCase
{
    public function setUp()
    {
        $this->pn = new PrintNumbers();
    }

    public function test_it_works()
    {
        for ($i=1; $i < 100; $i++) { 
            $result = $this->pn->calculateOutPut($i);
            if($i % 3 == 0 || $i % 5 == 0){
                if($i % 3 == 0 && $i % 5 == 0)
                    $this->assertEquals($result, 'Linianos');
                elseif($i % 3 == 0)
                    $this->assertEquals($result, 'Linio');
                else
                $this->assertEquals($result, 'IT');
            } else {
                $this->assertEquals($result, (string)$i);
            }
        }
    }
}
