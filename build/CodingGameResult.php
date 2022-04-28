<?php
// Last compile time: 28/04/22 23:00 



class Unit{

        private $myBaseDist; 
        private $distMyheroes; 
        public function __construct(

            // $id: Unique identifier
            $id, 

            // $type: 0=monster, 1=your hero, 2=opponent hero
            $type, 

            // $x: Position of this entity
            $x, 

            // $y: Position of this entity
            $y,

            // $shieldLife: Ignore for this league; Count down until shield spell fades
            $shieldLife, 

            // $isControlled: Ignore for this league; Equals 1 when this entity is under a control spell
            $isControlled, 

            // $health: Remaining health of this monster
            $health, 

            // $vx: Trajectory of this monster
            $vx,

            // $vy: Trajectory of this monster
            $vy, 

            // $nearBase: 0=monster with no target yet, 1=monster targeting a base
            $nearBase, 

            // $threatFor: Given this monster's trajectory, is it a threat to 1=your base, 2=your opponent's base, 0=neither
            $threatFor)
        {
            $this->id = $id ;
            $this->type = $type ;
            $this->x = $x ;
            $this->y = $y ;
            $this->shieldLife = $shieldLife ;
            $this->isControlled = $isControlled ;
            $this->health = $health ;
            $this->vx = $vx ;
            $this->vy = $vy ;
            $this->nearBase = $nearBase ;
            $this->threatFor = $threatFor ;
            
        }

            /**
             * Get the value of id
             */
            public function getId()
            {
                return $this->id;
            }

            /**
             * Set the value of id
             */
            public function setId($id): self
            {
                $this->id = $id;

                return $this;
            }

            /**
             * Get the value of type
             */
            public function getType()
            {
                return $this->type;
            }

            /**
             * Set the value of type
             */
            public function setType($type): self
            {
                $this->type = $type;

                return $this;
            }

            /**
             * Get the value of x
             */
            public function getX()
            {
                return $this->x;
            }

            /**
             * Set the value of x
             */
            public function setX($x): self
            {
                        $this->x = $x;

                        return $this;
            }

            /**
             * Get the value of y
             */
            public function getY()
            {
                        return $this->y;
            }

            /**
             * Set the value of y
             */
            public function setY($y): self
            {
                        $this->y = $y;

                        return $this;
            }

            /**
             * Get the value of health
             */
            public function getHealth()
            {
                        return $this->health;
            }

            /**
             * Set the value of health
             */
            public function setHealth($health): self
            {
                        $this->health = $health;

                        return $this;
            }

            /**
             * Get the value of vx
             */
            public function getVx()
            {
                        return $this->vx;
            }

            /**
             * Set the value of vx
             */
            public function setVx($vx): self
            {
                        $this->vx = $vx;

                        return $this;
            }

            /**
             * Get the value of vy
             */
            public function getVy()
            {
                        return $this->vy;
            }

            /**
             * Set the value of vy
             */
            public function setVy($vy): self
            {
                        $this->vy = $vy;

                        return $this;
            }

            /**
             * Get the value of nearBase
             */
            public function getNearBase()
            {
                        return $this->nearBase;
            }

            /**
             * Set the value of nearBase
             */
            public function setNearBase($nearBase): self
            {
                        $this->nearBase = $nearBase;

                        return $this;
            }

            /**
             * Get the value of threatFor
             */
            public function getThreatFor()
            {
                        return $this->threatFor;
            }

            /**
             * Set the value of threatFor
             */
            public function setThreatFor($threatFor): self
            {
                        $this->threatFor = $threatFor;

                        return $this;
            }

        /**
         * Get the value of myBaseDist
         */
        public function getMyBaseDist()
        {
                return $this->myBaseDist;
        }

        /**
         * Set the value of myBaseDist
         */
        public function setMyBaseDist($myBaseDist): self
        {
                $this->myBaseDist = $myBaseDist;

                return $this;
        }

        /**
         * Get the value of distMyheroes
         */
        public function getDistMyheroes()
        {
                return $this->distMyheroes;
        }

        /**
         * Set the value of distMyheroes
         */
        public function setDistMyheroes($distMyheroes): self
        {
                $this->distMyheroes = $distMyheroes;

                return $this;
        }
    }


class Base {
    
    // $baseX: The corner of the map representing your base
    private $baseX;

    // $baseY: The corner of the map representing your base
    private $baseY;

    // $health: Each player's base health
    private $health;

    // $mana: Ignore in the first league; Spend ten mana to cast a spell
    private $mana;

    // $mana: Ignore in the first league; Spend ten mana to cast a spell
    private $waitSpotX;
    private $waitSpotY;

    public function __construct ($baseX, $baseY ){
        $this->baseX = $baseX;
        $this->baseY = $baseY;
        $this->waitSpotX = $baseX == 0 ? "6000" : "11000";
        $this->waitSpotY = $baseX == 0 ? "4000" : "4800";

    }

    /**
     * Get the value of health
     */
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * Set the value of health
     */
    public function setHealth($health): self
    {
        $this->health = $health;

        return $this;
    }

    /**
     * Get the value of mana
     */
    public function getMana()
    {
        return $this->mana;
    }

    /**
     * Set the value of mana
     */
    public function setMana($mana): self
    {
        $this->mana = $mana;

        return $this;
    }

    /**
     * Get the value of baseX
     */
    public function getBaseX()
    {
        return $this->baseX;
    }

    /**
     * Set the value of baseX
     */
    public function setBaseX($baseX): self
    {
        $this->baseX = $baseX;

        return $this;
    }

    /**
     * Get the value of baseY
     */
    public function getBaseY()
    {
        return $this->baseY;
    }

    /**
     * Set the value of baseY
     */
    public function setBaseY($baseY): self
    {
        $this->baseY = $baseY;

        return $this;
    }

    /**
     * Get the value of waitSpot
     */
    public function getWaitSpot()
    {
        return $this->waitSpot;
    }

    /**
     * Get the value of waitSpotX
     */
    public function getWaitSpotX()
    {
        return $this->waitSpotX;
    }

    /**
     * Set the value of waitSpotX
     */
    public function setWaitSpotX($waitSpotX): self
    {
        $this->waitSpotX = $waitSpotX;

        return $this;
    }

    /**
     * Get the value of waitSpotY
     */
    public function getWaitSpotY()
    {
        return $this->waitSpotY;
    }

    /**
     * Set the value of waitSpotY
     */
    public function setWaitSpotY($waitSpotY): self
    {
        $this->waitSpotY = $waitSpotY;

        return $this;
    }
}




class Game {

    private $myBase;

    private $opponentBase;

    private $myHeroes;
    
    private $monsters;
    
    private $threat;

    public function __construct ($myBase, $opponentBase){
        $this->myBase = $myBase;
        $this->opponentBase = $opponentBase;
    }

    public function updateGame ($data){
    // error_log(var_export('update', true));
    $parser = new Parser();

    $parser->parse($this, $data);
    // error_log(var_export($data, true));

    }

    public function sortThreat (){
        
        $threat = $this->threat;
        $customSort = function($monster1, $monster2) {
            $monster1X = abs($this->myBase->getBaseX() - $monster1->getX() ); //4140
            $monster1Y = abs($this->myBase->getBaseY() - $monster1->getY() ); //3844
            $monster1->setMyBaseDist(sqrt($monster1X*$monster1X + $monster1Y*$monster1Y));
            $monster2X = abs($this->myBase->getBaseX() - $monster2->getX() );
            $monster2Y = abs($this->myBase->getBaseY() - $monster2->getY() );
            $monster2Dist = sqrt($monster2X*$monster2X + $monster2Y*$monster2Y);
            $monster2->setMyBaseDist(sqrt($monster2X*$monster2X + $monster2Y*$monster2Y));

            if ($monster1->getMyBaseDist() === $monster2->getMyBaseDist()) {
                return 0;
            }
            return $monster1->getMyBaseDist() < $monster2->getMyBaseDist() ? -1 : 1;
        };
        usort($threat,$customSort);

        $this->setThreat($threat);
    }

    public function sortByclosest(){
        $monsters = $this->monsters;
        $customSort = function($monster1, $monster2) {
            $monster1X = abs($this->myHeroes[0]->getX() - $monster1->getX() ); //4140
            $monster1Y = abs($this->myHeroes[0]->getY() - $monster1->getY() ); //3844
            $monster1->setDistMyheroes(sqrt($monster1X*$monster1X + $monster1Y*$monster1Y));


            
            
            $monster2X = abs($this->myHeroes[0]->getX() - $monster2->getX() );
            $monster2Y = abs($this->myHeroes[0]->getY() - $monster2->getY() );
            $monster2Dist = sqrt($monster2X*$monster2X + $monster2Y*$monster2Y);
            $monster2->setDistMyheroes(sqrt($monster2X*$monster2X + $monster2Y*$monster2Y));

            if ($monster1->getDistMyheroes() === $monster2->getDistMyheroes()) {
                return 0;
            }
            return $monster1->getDistMyheroes() < $monster2->getDistMyheroes() ? -1 : 1;
        };
        usort($monsters,$customSort);
        $this->setMonsters($monsters);
    }
 
    /**
     * Get the value of myBase
     */
    public function getMyBase()
    {
        return $this->myBase;
    }

    /**
     * Set the value of myBase
     */
    public function setMyBase($myBase): self
    {
        $this->myBase = $myBase;

        return $this;
    }

    /**
     * Get the value of opponentBase
     */
    public function getOpponentBase()
    {
        return $this->opponentBase;
    }

    /**
     * Set the value of opponentBase
     */
    public function setOpponentBase($opponentBase): self
    {
        $this->opponentBase = $opponentBase;

        return $this;
    }

    /**
     * Get the value of myHeroes
     */
    public function getMyHeroes()
    {
        return $this->myHeroes;
    }

    /**
     * Set the value of myHeroes
     */
    public function setMyHeroes($myHeroes): self
    {
        $this->myHeroes = $myHeroes;

        return $this;
    }

    /**
     * Get the value of monsters
     */
    public function getMonsters()
    {
        return $this->monsters;
    }

    /**
     * Set the value of monsters
     */
    public function setMonsters($monsters): self
    {
        $this->monsters = $monsters;

        return $this;
    }

    /**
     * Get the value of threat
     */
    public function getThreat()
    {
        return $this->threat;
    }

    /**
     * Set the value of threat
     */
    public function setThreat($threat): self
    {
        $this->threat = $threat;

        return $this;
    }
}


class Data{

    public $baseData ;
    public $heroesPerPlayer ;
    public $units =[] ;
}





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
