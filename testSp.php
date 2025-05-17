<?php
use PHPUnit\Framework\TestCase;

require_once 'main.php';

class testSp extends TestCase
{
    public function testSp(){
        $sph = new Sphere();
        $this->assertEqualsWithDelta(4.1866666666667, $sph->sphere(1), 0.0000001);
        $this->assertEqualsWithDelta(33.493333333333, $sph->sphere(2), 0.0000001);
    }
    
}
