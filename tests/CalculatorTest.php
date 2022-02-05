<?php

class CalculatorTest extends \PHPUnit\Framework\TestCase {
    public function testAdd() {
        $calculator =new App\Calculator;
        $result =$calculator->add(25,5);

        $this->assertEquals(30, $result);
    }

    public function testSubtract() {
        $calculator =new App\Calculator;
        $result =$calculator->subtract(25,5);

        $this->assertEquals(20, $result);
    }
}