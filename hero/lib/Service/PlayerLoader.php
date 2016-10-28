<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 10/26/2016
 * Time: 7:29 PM
 */

namespace Service;


use Model\BeastPlayer;
use Model\OrderusPlayer;

class PlayerLoader
{
    private $playerStorage;

    public function __construct(PlayerStorageInterface $playerStorage)
    {
        $this->playerStorage = $playerStorage;
    }


    /**
     * @return array
     */
    public function getPlayers(){
        $playersData = $this->playerStorage->fetchAllPlayersData();
        $players = array();
        foreach ($playersData as $playerData){
            $players[] = $this->createPlayerFromData($playerData);
        }
        return $players;

    }

    /**
     * @param $id
     * @return BeastPlayer|OrderusPlayer
     */
    public function findOneById($id){
        $playerArray = $this->playerStorage->fetchSinglePlayerDataById($id);
        return $this->createPlayerFromData($playerArray);
    }


    /**
     * @param array $plyerData
     * @return BeastPlayer|OrderusPlayer
     */
    public function createPlayerFromData(array $plyerData){

        $tools = new Tools();

        if($plyerData['type']=='hero'){
            $player = new OrderusPlayer();
        }else {
            $player = new BeastPlayer();
        }

        $player->setName($plyerData['name']);
        $player->setHealth($tools->valFromRange($plyerData['health']));
        $player->setStrength($tools->valFromRange($plyerData['strength']));
        $player->setDefence($tools->valFromRange($plyerData['defence']));
        $player->setSpeed($tools->valFromRange($plyerData['speed']));
        $player->setLuck($tools->valFromRange($plyerData['luck']));
        $player->setType($plyerData['type']);

        return $player;

    }

}