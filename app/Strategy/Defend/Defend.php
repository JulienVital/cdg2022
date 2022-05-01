<?php
namespace Strategy\Defend;

use app\Game\Game;
use CalcDist;

class Defend{

    public $game;

    public function findBestMove($hero, $game){
                    // Write an action using echo(). DON'T FORGET THE TRAILING \n
            // To debug: error_log(var_export($var, true)); (equivalent to var_dump)
            $this->game = $game;
            $this->hero = $hero;
            $pressing = new CounterPressing();
            if ($ennemy = $pressing->needCounterPressing($this->game)){
                error_log(var_export('defend with pressing', true));

                $mybase = $game->getMybase();
                $calcDist = new CalcDist();
                if ($calcDist->getDist($mybase, $ennemy) < $calcDist->getDist($mybase, $hero) && $calcDist->getDist($mybase, $hero) < 4000){

                    if ( $hero->getShieldLife()==0 && $mybase->getMana() > 10){
                        echo("SPELL WIND ". $this->game->getOpponentBase()->getX().' '. $this->game->getOpponentBase()->getY()."\n");
                        return;
                    }
                    $this->goSafeSpot();
                    return;
                }

            }

            if (!empty($threats = $game->getThreat())){
                $this->bestMoveIfThreats($threats, $hero);
                return;
            }

            else {
                $this->bestMoveIfNoThreats();
                return;
            }
    }
    public function bestMoveIfThreats($threats, $hero){
        if ($threats[0]->getMyBaseDist()  < 5000 && (CalcDist::getDist($threats[0], $hero)<1200)&& $threats[0]->getShieldLife()==0){
            echo("SPELL WIND ". $this->game->getOpponentBase()->getX().' '. $this->game->getOpponentBase()->getY()."\n");
        }else {
            $pressing = new CounterPressing();
            if ($ennemy = $pressing->needCounterPressing($this->game)){
                $calcDist = new CalcDist();
                if ($hero->getShieldLife()==0 && $calcDist->getDist($ennemy, $hero) < 2500){
                    $hero->shield($hero);
                    return;
                }
                if ($threats[0]->getMyBaseDist() < 5000 ){
                    $hero->move($threats[0]->getX(),$threats[0]->getY(),' Attack near Threat');
                    return;
                }
            }


            $hero->move($threats[0]->getX(),$threats[0]->getY(),' ');

            return;

        }
        
    }
    public function bestMoveIfNoThreats(){
        $game = $this->game;

        if ($monsters = $game->getMonsters()) {
            $calcDist =new CalcDist();
            if ($calcDist->getDist($monsters[0], $game->getMyBase()) < 8000){

                echo("MOVE " . $monsters[0]->getX() ." ".$monsters[0]->getX()." \n");
                return;
            }
        }
        $this->goSafeSpot();
        return;

        
    }

    public function goSafeSpot(){
        $waitSpotX = $this->game->getMyBase()->getWaitSpot()['X'];
        $waitSpotY = $this->game->getMyBase()->getWaitSpot()['Y'];
        $this->hero->move(rand($waitSpotX-1000,$waitSpotX+1000), rand($waitSpotY-1000,$waitSpotY+1000), 'safeSpot');
        return;        
    }

    public function getThreats(){
        return $this->game->getThreat();
        
    }
    
}