<?php
use PHPUnit\Framework\TestCase;

require_once 'main.php';

class MainTest extends TestCase
{
    public function testAdd(){
        $calc = new Calculator();
        $this->assertEquals(4, $calc->plus(2, 2));
        $this->assertEquals(0, $calc->plus(-2, 2));
    }

    public function testMinus(){
        $calc = new Calculator();
        $this->assertEquals(4, $calc->minus(8,4));
        $this->assertEquals(8, $calc->minus(12,4));
    }

    public function testMult(){
        $calc = new Calculator();
        $this->assertEquals(10, $calc->multyply(5,2));
        $this->assertEquals(20, $calc->multyply(10,2));
    }

    public function testDel(){
        $calc = new Calculator();
        $this->assertEquals(5, $calc->del(10,2));
        $this->assertEquals(2, $calc->del(4,2));
    }
}
