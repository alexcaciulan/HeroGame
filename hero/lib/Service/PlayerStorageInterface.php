<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 10/26/2016
 * Time: 7:48 PM
 */

namespace Service;

/**
 * Interface PlayerStorageInterface
 * @package Service
 * methods to use for any type of storage (array, pdo, json)
 */
interface PlayerStorageInterface
{
    public function fetchSinglePlayerDataById($id);

    public function fetchAllPlayersData();
}