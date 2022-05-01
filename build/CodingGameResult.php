<?php
// Last compile time: 02/05/22 0:13 



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


class Unit{

        private $myBaseDist; 
        private $distMyheroes; 
        private $distMyFarmer; 

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

            /**
             * Get the value of shieldLife
             */
            public function getShieldLife()
            {
                        return $this->shieldLife;
            }

            /**
             * Set the value of shieldLife
             */
            public function setShieldLife($shieldLife): self
            {
                        $this->shieldLife = $shieldLife;

                        return $this;
            }

            /**
             * Get the value of isControlled
             */
            public function getIsControlled()
            {
                        return $this->isControlled;
            }

            /**
             * Set the value of isControlled
             */
            public function setIsControlled($isControlled): self
            {
                        $this->isControlled = $isControlled;

                        return $this;
            }

        /**
         * Get the value of distMyFarmer
         */
        public function getDistMyFarmer()
        {
                return $this->distMyFarmer;
        }

        /**
         * Set the value of distMyFarmer
         */
        public function setDistMyFarmer($distMyFarmer): self
        {
                $this->distMyFarmer = $distMyFarmer;

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
    private $waitSpot;

    public function __construct ($baseX, $baseY ){
        $this->baseX = $baseX;
        $this->baseY = $baseY;
        $this->waitSpot['X'] = $baseX == 0 ? "1400" : "16000";
        $this->waitSpot['Y'] = $baseX == 0 ? "1500" : "7000";

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
    public function getX()
    {
        return $this->baseX;
    }

    /**
     * Set the value of baseX
     */
    public function setX($baseX): self
    {
        $this->baseX = $baseX;

        return $this;
    }

    /**
     * Get the value of baseY
     */
    public function getY()
    {
        return $this->baseY;
    }

    /**
     * Set the value of baseY
     */
    public function setY($baseY): self
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
    
    private $ennemyHeroes;
    
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

    public function sortThreat ($threat){
        
        $customSort = function($monster1, $monster2) {

            if ($monster1->getMyBaseDist() === $monster2->getMyBaseDist()) {
                return 0;
            }
            return $monster1->getMyBaseDist() < $monster2->getMyBaseDist() ? -1 : 1;
        };
        usort($threat,$customSort);
        return $threat;
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
        $this->threat = $this->sortThreat($threat);
        return $this;
    }

    /**
     * Get the value of ennemyHeroes
     */
    public function getEnnemyHeroes()
    {
        return $this->ennemyHeroes;
    }

    /**
     * Set the value of ennemyHeroes
     */
    public function setEnnemyHeroes($ennemyHeroes): self
    {
        $this->ennemyHeroes = $ennemyHeroes;

        return $this;
    }
}


class CalcDist{

    static function getDist($data1, $data2){
        $xValue = abs($data1->getX() - $data2->getX() ); //4140
        $Yvalue = abs($data1->getY() - $data2->getY() ); //3844
        return sqrt($xValue*$xValue + $Yvalue*$Yvalue);
    }
}


class Data{

    public $baseData ;
    public $heroesPerPlayer ;
    public $units =[] ;
}


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




class Strategy{

    public function MaxMana(Unit $unit){
        
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
    // error_log(var_export($game->getThreat(), true));
    $i = 0;
    foreach ($game->getMyHeroes() as $hero)
    {
        if ($i == 0 ){
            $strategy = new Defend();
            $strategy->findBestMove($hero, $game);
        }
        else if ($i == 1 ){
            $counterPressing = new CounterPressing();
            if ($ennemyToCounter = $counterPressing->needCounterPressing($game)){
                $counterPressing->CounterPressing($ennemyToCounter, $hero, $game);
            }else{

                $strategy = new MaxMana();
                $strategy->findBestPosition($hero, $game);
            }
        }
        else if ($i == 2 ){
            $strategy = new Attack();
            $strategy->findAttack($hero, $game);
        }
        $i++;  // In the first league: MOVE <x> <y> | WAIT; In later leagues: | SPELL <spellParams>;
    }
        

}

