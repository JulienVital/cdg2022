<?php
namespace app\Parser;

use app\Board\Unit\Unit;
use app\Game\Game;

class Parser{

    public function parse(Game $game, Data $data){
        $this->base($game,$data->baseData);
        $this->unit($game,$data->units);
    }

    private function base($game, $baseData){

        $game->getMyBase()->setHealth($baseData[0][0]);
        $game->getMyBase()->setMana($baseData[0][1]);
        $game->getOpponentBase()->setHealth($baseData[1][0]);
        $game->getOpponentBase()->setMana($baseData[1][1]);
    }

    private function unit ($game, $units){
        $heroes = [];
        $monsters = [];
        $threat = [];
        foreach($units as $unit){
            switch ($unit->getType()) {
                case 0:
                    $monster[]= $unit;
                    
                    if ($unit->getThreatFor() == 1){
                        $threat[] = $unit;
                    }
                    break;
                case 1:
                    $heroes[]= $unit;

                    break;
                default:
                    # code...
                    break;
            }
        }
        $game->setMyHeroes($heroes);
        $game->setMonsters($monsters);
        $game->setThreat($threat);
    }

}  