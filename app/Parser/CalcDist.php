<?php
namespace app\Parser;

class CalcDist{

    static function getDist($data1, $data2){
        $xValue = abs($data1->getX() - $data2->getX() ); //4140
        $Yvalue = abs($data1->getY() - $data2->getY() ); //3844
        return sqrt($xValue*$xValue + $Yvalue*$Yvalue);
    }
}