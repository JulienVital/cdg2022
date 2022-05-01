<?php
namespace app\Game;

use app\Parser\Parser;

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