<?php
namespace app\Game;

use app\Parser\Parser;

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
        $this->threat = $this->sortThreat($threat);
        return $this;
    }
}