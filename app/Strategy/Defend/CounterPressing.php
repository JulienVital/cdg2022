<?php
namespace Strategy\Defend;

use app\Board\Unit\Hero;
use app\Game\Game;
use app\Parser\GetSpiderInRadius;
use CalcDist;
use Strategy\Attack\Attack;

class CounterPressing{
    private $calcDist;
    public function __construct()
    {
        $this->calcDist = new CalcDist();
    }

    public function needCounterPressing(Game $game){
        $enemies = $game->getEnnemyHeroes();
        foreach ($enemies as $ennemy){
            $dist = $this->calcDist->getDist($ennemy, $game->getMyBase());
            if ($dist < 8000){
                return $ennemy;
            }
        }
        return false;
    }
    public function CounterPressing(Hero $ennemy, Hero $myHero, Game $game){
        $calcDist = new CalcDist();
        $mybase = $game->getMyBase();
        $opponentBase = $game->getOpponentBase();
        if ( $myHero->getShieldLife()==0){
            $myHero->shield($myHero);
            return;
        }
        $monsters = $game->getMonsters();
        $monstersInRadius = GetSpiderInRadius::get($game->getMyBase(),6200,$monsters);
        if (count($monstersInRadius) > 3){
            $strategy = new Defend();
            $strategy->findBestMove($myHero, $game);

            return;
        }

        if ($calcDist->getDist($ennemy, $mybase) < $calcDist->getDist($myHero, $mybase)){
            
            $myHero->move($ennemy->getX(),$ennemy->getY() );
            return;
        }
        $monstersInRadius = GetSpiderInRadius::get($ennemy,2200,$monsters);
        if ($monstersInRadius && $mybase->getMana() >= 20){
            $myHero->wind( $opponentBase->getX(),$opponentBase->getY());
            return;
        }
        $strategy = new Attack();
        $strategy->findAttack($myHero, $game);
        return;
        // $myHero->move($ennemy->getX(),$ennemy->getY() );
        // foreach ($monstersInRadius as $monster){
        //     if ($monster->getThreatFor() != 2 && $game->getMyBase()->getMana() > 40 && $monster->getHealth()>10){
        //         $monster->setThreatFor(2);
        //         $myHero->control($monster, $opponentBase->getX(),$opponentBase->getY());
        //         return;
        //     }
        //     $myHero->move($monster->getX(),$monster->getY() );
        //     return;
        // }
    }
}