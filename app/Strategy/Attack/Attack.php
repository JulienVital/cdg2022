<?php
namespace Strategy\Attack;

use app\Board\Unit\Hero;
use app\Game\Game;
use app\Parser\GetSpiderInRadius;
use CalcDist;
use Strategy\MaxMana\MaxMana;

class Attack{

    public function findAttack(Hero $hero, Game $game){
        $this->game= $game;
        $monsters = $game->getMonsters();
        $monstersInRadius = GetSpiderInRadius::get($hero, 2200, $monsters);
        $calcDist = new CalcDist();
        if ($monstersInRadius){
            $opponentBase = $game->getOpponentBase();
            foreach ($monstersInRadius as $monster){
                if ($monster->getThreatFor() != 2 && $game->getMyBase()->getMana() > 40 && $monster->getHealth()>8 && $calcDist->getDist($monster,$opponentBase) < 10000){
                    $monster->setThreatFor(2);
                    $hero->control($monster, $opponentBase->getX(),$opponentBase->getY());
                    return;
                }
            }
        }
        $calcDist = new CalcDist();
        $ennemyBase = $this->game->getOpponentBase();

        if ($calcDist->getDist($hero,$ennemyBase) > 9000){

            $this->goToFarmNearOpponentBase($hero);
            return;
        }
        $strategie = new MaxMana();
        $strategie->findBestPositionAtck($hero, $game);
        return;
    }
    private function goToFarmNearOpponentBase($hero){
        $ennemyBase = $this->game->getOpponentBase();
        if ($ennemyBase->getX()==0){

            $hero->move(rand(2500,6300), rand(0,8800));
            return;

        }
        $hero->move(rand(10000,15700), rand(0,8800));
        return;
        
    }
}