<?php

namespace Service;


class PlayerStorage implements PlayerStorageInterface
{
    /**
     * @param $id
     * @return mixed
     */
    public function fetchSinglePlayerDataById($id){
        return $this->fetchAllPlayersData()[$id];
    }

    /**
     * @return array
     */
    public function fetchAllPlayersData (){
        return array(
            'orderus' => array(
                'name' => 'Orderus',
                'health' => array (70, 100),
                'strength' => array (70, 80),
                'defence' => array (45, 55),
                'speed' => array (40, 50),
                'luck' => array (10, 30),
                'type' => 'hero'
            ),
            'beast' => array(
                'name' => 'Beast',
                'health' => array (60, 90),
                'strength' => array (60, 90),
                'defence' => array (40, 60),
                'speed' => array (40, 60),
                'luck' => array (25, 40),
                'type' => 'beast'
            )
        );
    }
}