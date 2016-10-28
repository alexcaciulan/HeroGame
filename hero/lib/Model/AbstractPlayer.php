<?php

namespace Model;

abstract class AbstractPlayer
{
    private $name;
    private $health;
    private $strength;
    private $defence;
    private $speed;
    private $luck;
    private $type;

    abstract public function haveMagicSkills($whenToUse);

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return integer
     */
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * @param integer $health
     */
    public function setHealth($health)
    {
        $this->health = $health;
    }

    /**
     * @return integer
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * @param integer $strength
     */
    public function setStrength($strength)
    {
        $this->strength = $strength;
    }

    /**
     * @return integer
     */
    public function getDefence()
    {
        return $this->defence;
    }

    /**
     * @param integer $defence
     */
    public function setDefence($defence)
    {
        $this->defence = $defence;
    }

    /**
     * @return integer
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param integer $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    /**
     * @return integer
     */
    public function getLuck()
    {
        return $this->luck;
    }

    /**
     * @param integer $luck
     */
    public function setLuck($luck)
    {
        $this->luck = $luck;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }


}