<?php
namespace Strategy\MaxMana;

use app\Game\Game;
use app\Parser\GetSpiderInRadius;
use CalcDist;

class MaxMana{
    private $midX = 8815;  
    private $midY = 4500;
    private $calcDist ;
    private $game ;
    
    public function __construct(){
        $this->calcDist = new CalcDist();
    }
    public function findBestPosition($unit, Game $game){
        $this->game = $game;
        $this->unit = $unit;
        if ($monsters = $this->getMonsters()){

            $monsters = GetSpiderInRadius::get($unit,1500, $monsters);

            
            foreach($monsters as $monster){
                if ($monster->getThreatFor() != 2){

                    $unit->move($monster->getX(),$monster->getY());
                    return;
                }
            }
        }
        
        $this->goTomiddle();
        return;
    }
    public function findBestPositionAtck($unit, Game $game){
        $this->game = $game;
        $this->unit = $unit;
        if ($monsters = $this->getMonsters()){
            foreach($monsters as $monster){
                if ($monster->getThreatFor() != 2){

                    $unit->move($monster->getX(),$monster->getY());
                    return;
                }
            }
        }
        
        $this->goTomiddle();
        return;
    }

    private function goTomiddle(){

        $this->unit->move(rand($this->midX-2500,$this->midX+2500), rand($this->midY-2500,$this->midY+2500));
        return;
    }
    

    private function getMonsters(){

        if ($monsters = $this->getThreat()){
            return $monsters;            

        }
        if ($monsters = $this->getMonstersWithoutTheath()){
            return $monsters;            

        }
        

    }
    private function getMonstersWithoutTheath(){

        if ($monsters = $this->game->getMonsters()){
            $monsters = array_merge(array(), $monsters);
            foreach ($monsters as $key => $monster){
                if ($monster->getMyBaseDist() <5500 ){
                    unset($monsters[$key]);
                } else {

                    $monster->setDistMyFarmer($this->calcDist->getDist($monster, $this->unit));
                }
            }
            $customSort = function($monster1, $monster2) {
                
                if ($monster1->getDistMyFarmer() === $monster2->getDistMyFarmer()) {
                    return 0;
                }
                return $monster1->getDistMyFarmer() < $monster2->getDistMyFarmer() ? -1 : 1;
            };
            usort($monsters,$customSort);

            return $monsters;
            

        }
            return ;

    }
    private function getThreat(){

        if ($monsters = $this->game->getThreat()){
            return $this->sortMonsters($monsters);
        }
        return;
    }

    private function sortMonsters($monsters){

            foreach ($monsters as $key => $monster){
                if ($monster->getMyBaseDist() <5500 ){
                    unset($monsters[$key]);
                } else {

                    $monster->setDistMyFarmer($this->calcDist->getDist($monster, $this->unit));
                }
            }
            $customSort = function($monster1, $monster2) {
                
                if ($monster1->getDistMyFarmer() === $monster2->getDistMyFarmer()) {
                    return 0;
                }
                return $monster1->getDistMyFarmer() < $monster2->getDistMyFarmer() ? -1 : 1;
            };
            usort($monsters,$customSort);

            return $monsters;
            

    }
    
}