<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 10/26/2016
 * Time: 6:51 PM
 */

namespace Model;


class OrderusPlayer extends AbstractPlayer
{


    public function haveMagicSkills($whenToUse=null)
    {
        if($whenToUse=='attack'){
            //10% chance to use this skill
            $attack = mt_rand(1, 100) <= 10;
            return $attack;
        }else if($whenToUse=='defends'){
            //20% chance to use this skill
            $defends = mt_rand(1, 100) <= 20;
            return $defends;
        }
        return;
    }

}