<?php
namespace app\Board\Unit;

class Hero extends Unit{

    public function __construct($unit){
        parent::__construct(
            $unit->getId(),
            $unit->getType(), 
            $unit->getX(), 
            $unit->getY(),
            $unit->getShieldLife(), 
            $unit->getIsControlled(), 
            $unit->getHealth(), 
            $unit->getVx(),
            $unit->getVy(), 
            $unit->getNearBase(), 
            $unit->getThreatFor());
    }
    
    public function move($x, $y, $debug = ''){
        echo("MOVE ". $x.' '. $y." $debug\n");
    }

    public function control($unit, $x, $y){
        echo("SPELL CONTROL ".$unit->getId(). " ". $x.' '. $y."\n");
    }
    
    public function wind( $x, $y){
        echo("SPELL WIND ". $x.' '. $y."\n");
    }
    public function shield( Unit $unit){
        echo("SPELL SHIELD ". $unit->getId() ."\n");
    }

}