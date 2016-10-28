<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 10/26/2016
 * Time: 8:12 PM
 */

namespace Service;


class Tools
{
    /**
     * @param array $array
     * @return int
     */
    public function valFromRange(array $array){
        return mt_rand($array[0], $array[1]);
    }
}