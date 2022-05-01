<?php
namespace app\Parser;

use app\Board\Unit\Hero;
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
        $ennemyHeroes = [];
        foreach($units as $unit){
            switch ($unit->getType()) {
                case 0:
                    $unit->setMyBaseDist(CalcDist::getDist($unit, $game->getMyBase()));
                    $monsters[]= $unit;
                    
                    if ($unit->getThreatFor() == 1){
                        $threat[] = $unit;
                    }
                    break;
                case 1:
                    $heroes[]= new Hero($unit);

                    break;
                case 2:
                    $unit->setMyBaseDist(CalcDist::getDist($unit, $game->getMyBase()));
                    $ennemyHeroes[]= new Hero($unit);

                    break;
                default:
                    # code...
                    break;
            }
        }
        
        $game->setMyHeroes($heroes);
        $game->setEnnemyHeroes($ennemyHeroes);
        $game->setMonsters($monsters);
        $game->setThreat($threat);
        // error_log(var_export($game->getThreat(), true));
    }

}  