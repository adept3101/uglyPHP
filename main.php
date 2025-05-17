<?php
class Calculator{
    function plus($a, $b){
        return $a + $b;
    }

    function minus($a, $b){
        return $a - $b;
    }

    function multyply($a , $b){
        return $a * $b;
    }

    function del($a, $b){
        if($b == 0){
            echo "На ноль делить нельзя";
        } else {
            return $a / $b;
        }
    }
}
class Sphere{
    function sphere ($radius){
        $P = 3.14;
        $V = 4/3 * $P * pow($radius,3);
        return $V;
    }
}
?>
