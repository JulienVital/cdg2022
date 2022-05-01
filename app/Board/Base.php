<?php
namespace app\Board;

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