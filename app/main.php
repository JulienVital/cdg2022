<?php
namespace app;

use app\Board\Base;
use app\Game\Game;
use app\Parser\Data;
use Unit;

/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

// $baseX: The corner of the map representing your base
fscanf(STDIN, "%d %d", $baseX, $baseY);

$mybase = new Base($baseX,$baseY );

if ($baseX === 0){
    $opponentBase = new Base(17630,9000 );
    
}else{
    $opponentBase = new Base(0,0);

}

$game = new Game($mybase, $opponentBase);
// $heroesPerPlayer: Always 3
fscanf(STDIN, "%d", $heroesPerPlayer);
// $data->heroesPerPlayer = $heroesPerPlayer;

// game loop
while (TRUE)
{
    $data = new Data();

    for ($i = 0; $i < 2; $i++)
    {
        fscanf(STDIN, "%d %d", $health, $mana);
        $data->baseData[] = [$health, $mana];
    }
    // $entityCount: Amount of heros and monsters you can see
    fscanf(STDIN, "%d", $entityCount);
    $data->units=[];
    for ($i = 0; $i < $entityCount; $i++)
    {
        // $id: Unique identifier
        // $type: 0=monster, 1=your hero, 2=opponent hero
        // $x: Position of this entity
        // $shieldLife: Ignore for this league; Count down until shield spell fades
        // $isControlled: Ignore for this league; Equals 1 when this entity is under a control spell
        // $health: Remaining health of this monster
        // $vx: Trajectory of this monster
        // $nearBase: 0=monster with no target yet, 1=monster targeting a base
        // $threatFor: Given this monster's trajectory, is it a threat to 1=your base, 2=your opponent's base, 0=neither
        fscanf(STDIN, "%d %d %d %d %d %d %d %d %d %d %d", $id, $type, $x, $y, $shieldLife, $isControlled, $health, $vx, $vy, $nearBase, $threatFor);
        
        $data->units[] = new Unit($id, $type, $x, $y, $shieldLife, $isControlled, $health, $vx, $vy, $nearBase, $threatFor);
        
    }
    $game->updateGame($data);
    $game->sortThreat();
    $game->sortByclosest();
    // error_log(var_export($game->getThreat(), true));
    for ($i = 0; $i < $heroesPerPlayer; $i++)
    {

        // Write an action using echo(). DON'T FORGET THE TRAILING \n
        // To debug: error_log(var_export($var, true)); (equivalent to var_dump)
        if (!empty($game->getThreat())){
            echo("MOVE ". $game->getThreat()[0]->getX().' '. $game->getThreat()[0]->getY()."\n");

        }

        else {
            if ($monsters = $game->getMonsters()) {
                error_log(var_export('no menace', true));
                echo("MOVE " . $monster[0]->getX() ." ".$monster[0]->getX()."\n");
            }else {
                $waitSpotX = $game->getMyBase()->getWaitSpotX();
                $waitSpotY = $game->getMyBase()->getWaitSpotY();
                echo("MOVE ". rand($waitSpotX-1000,$waitSpotX+1000)." ". rand($waitSpotY-1000,$waitSpotY+1000)."\n");

            }
        }

        // In the first league: MOVE <x> <y> | WAIT; In later leagues: | SPELL <spellParams>;
    }
}
