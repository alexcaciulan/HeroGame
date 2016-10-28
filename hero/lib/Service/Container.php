<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 10/26/2016
 * Time: 7:30 PM
 */

namespace Service;


class Container
{
    private $playerLoader;
    private $playerStorage;
    private $battleManager;


    /**
     * @return PlayerLoader
     */
    public function getPlayerLoader()
    {
        if ($this->playerLoader === null) {
            $this->playerLoader = new PlayerLoader($this->getPlayerStorage());
        }
        return $this->playerLoader;
    }

    /**
     * @return PlayerStorageInterface
     */
    public function getPlayerStorage(){
        if ($this->playerStorage === null) {
            $this->playerStorage = new PlayerStorage();
        }
        return $this->playerStorage;
    }

    /**
     * @return BattleManager
     */
    public function getBattleManager()
    {
        if ($this->battleManager === null) {
            $this->battleManager = new BattleManager();
        }
        return $this->battleManager;
    }

}