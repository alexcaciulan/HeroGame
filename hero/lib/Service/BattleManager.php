<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 10/26/2016
 * Time: 8:49 PM
 */

namespace Service;
use Model\AbstractPlayer;

class BattleManager
{
    /**
     * @param AbstractPlayer $player1
     * @param AbstractPlayer $player2
     * Battle algorithm
     */
    public function battle(AbstractPlayer $player1, AbstractPlayer $player2){

        $container = new Container();
        $playerLoader = $container->getPlayerLoader();


        //Set first Attacker/Defender
        $attacker = $this->setAttacker($player1, $player2);
        if($attacker->getType() != $player1->getType()){
            $defender = $player1;
        }else {
            $defender = $player2;
        }

        //Set players health
        if($player1->getType()=='hero'){
            $heroHealth = $player1->getHealth();
            $beastHealth = $player2->getHealth();
        }else {
            $heroHealth = $player2->getHealth();
            $beastHealth = $player1->getHealth();
        }

        $i=1;
        while ($heroHealth > 0 && $beastHealth > 0) {

            echo $i.') '.$attacker->getName() .' attacks '.$defender->getName();
            echo '<ul class="hero-ul">';

            //Set damage
            $damage = $this->damage($attacker->getStrength(), $defender->getDefence());
            echo '<li>Damage: '.$damage .' </li>';

            //Orderus attack
            if($attacker->getType()=='hero'){

                //Use magic skill
                if($attacker->haveMagicSkills('attack')==true){
                    $damage = $damage*2;
                    echo '<li>Orderus has used Rapid strike skill  (Final Damage: '.$damage.')</li>';
                }
                $beastHealth = $beastHealth - $damage;
                $defenderHealth = $beastHealth;
                $attackerHealth = $heroHealth;

             //Beast attack
            } else {

                //Use magic skill
                if($defender->haveMagicSkills('defends')==true){
                    $damage = $damage/2;
                    echo '<li>Orderus has used Magic Shield skill  (Final Damage: '.$damage.')</li>';
                }
                $heroHealth = $heroHealth - $damage;
                $defenderHealth = $heroHealth;
                $attackerHealth = $beastHealth;
            }

            //Display players left health
            echo '<li>Health left for defender '.$defender->getName() .': '.$defenderHealth.' </li>
                  <li>Health left for attacker '.$attacker->getName() .': '.$attackerHealth.' </li>
                 </ul><hr>';


            //Re-init stats
            $player1 = $playerLoader->findOneById('orderus');
            $player2 = $playerLoader->findOneById('beast');


            //Re-init Attacker/Defender
            if($attacker->getType() == $player1->getType()){
                $attacker = $this->setAttacker(null, null, $player2);
                $defender = $player1;
            }else {
                $attacker = $this->setAttacker(null, null, $player1);
                $defender = $player2;
            }

            if($i==20) break;
            $i++;
        }



        ///Display Battle Result

        //Update the health on the players
        if($player1->getType()=='hero'){
            $hero = $player1;
            $beast = $player2;
        }else {
            $hero = $player2;
            $beast = $player1;
        }
        $hero->setHealth($heroHealth);
        $beast->setHealth($beastHealth);


        if ($heroHealth <= 0 && $beastHealth <= 0) {
            //They destroyed each other
            $winningPlayer = null;
            $losingPlayer = null;

        } elseif ($heroHealth <= 0) {
            $winningPlayer = $beast;
            $losingPlayer = $hero;
        } else {
            $winningPlayer = $hero;
            $losingPlayer = $beast;
        }

        if($winningPlayer!=null){
            $message = 'The winner is '. $winningPlayer->getName() .'!';
        }else {
            $message = 'There is no winner!';
        }

        echo '<div class="alert alert-success"><h4>'.$message.'</h4></div>';
    }


    /**
     * @param AbstractPlayer|null $player1
     * @param AbstractPlayer|null $player2
     * @param AbstractPlayer|null $lastAttacker
     * @return AbstractPlayer
     */
    public function setAttacker(AbstractPlayer $player1=null, AbstractPlayer $player2=null, AbstractPlayer $lastAttacker=null){

        //Set first atacker
        if($lastAttacker==null){
            if($player1->getSpeed()!=$player2->getSpeed()){
                if($player1->getSpeed() > $player2->getSpeed()){
                    return $player1;
                } else{
                    return $player2;
                }
            }
            else {
                if($player1->getLuck() > $player2->getLuck()){
                    return $player1;
                }
                else {
                    return $player2;
                }
            }

         //Set next attacker
        }else {
           return $lastAttacker;
        }
    }

    /**
     * @param $attackerStrength
     * @param $defenderDefence
     * @return int
     */
    public function damage($attackerStrength, $defenderDefence ){
        $damage = $attackerStrength - $defenderDefence;
        if($damage>=0) {
            return $damage;
        }
        return 0;
    }


}