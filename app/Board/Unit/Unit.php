<?php
namespace app\Board\Unit;

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