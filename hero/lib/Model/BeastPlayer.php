<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 10/26/2016
 * Time: 6:52 PM
 */

namespace Model;


class BeastPlayer extends AbstractPlayer
{
    public function haveMagicSkills($whenToUse)
    {
        return false;
    }
}