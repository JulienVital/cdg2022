<?php
namespace app\Parser;

class GetSpiderInRadius{

    static function get($unit , $radius, $monsters){
        $monstersInRadius = [];
        $calcDist = new CalcDist();
        foreach ($monsters as $monster){
            if ($calcDist->getDist($monster, $unit) < $radius){
                $monstersInRadius[]= $monster;
            }
        }
        return $monstersInRadius;
    }
}