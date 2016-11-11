<?php
require_once "autoload.php";

require_once "includes/header.php";
?>

    <div class="jumbotron">
        <h3>The Story</h3>
        <hr>
        <div style="font-size: 12px">
            <h4>Hero Orderus</h4>
            Once upon a time there was a great hero, called Orderus, with some strengths and weaknesses, as all heroes have.
            After battling all kinds of monsters for more than a hundred years, Orderus now has the following stats:
            <ul>
             <li>Health: 70 - 100</li>
                <li>Strength: 70 - 80</li>
                <li>Defence: 45 – 55</li>
                <li>Speed: 40 – 50</li>
                <li>Luck: 10% - 30% (0% means no luck, 100% lucky all the time).</li>
            </ul>
            Also, he possesses 2 skills:
            <ul>
                <li>Rapid strike: Strike twice while it’s his turn to attack; there’s a 10% chance he’ll use this skill
                    every time he attacks</li>
                <li>Magic shield: Takes only half of the usual damage when an enemy attacks; there’s a 20%
                    change he’ll use this skill every time he defends.</li>
            </ul>
        </div>
        <hr>
        <div style="font-size: 12px">
            <h4>The beast</h4>
            As Orderus walks the ever-green forests of Emagia, he encounters some wild beasts, with the following properties:
            <ul>
                <li>Health: 60 - 90</li>
                <li>Strength: 60 - 90</li>
                <li>Defence: 40 – 60</li>
                <li>Speed: 40 – 60</li>
                <li>Luck: 25% - 40%</li>
            </ul>
        </div>
        <hr>
        <div style="font-size: 12px">
            <h4>Gameplay Rules</h4>
            You’ll have to simulate a battle between Orderus and a wild beast, either at command line or using a web browser. On every battle, Orderus and the beast must be initialized with random properties, within their ranges.<br />
            *The first attack is done by the player with the higher speed. If both players have the same speed,
            than the attack is carried on by the player with the highest luck.<br />

            *After an attack, the players switch roles: the attacker now defends and the defender now attacks.<br /><br />

            The damage done by the attacker is calculated with the following formula:<br />

            <strong>Damage = Attacker strength – Defender defence</strong><br />

            -The damage is subtracted from the defender’s health.<br />
            -An attacker can miss their hit and do no damage if the defender gets lucky that turn.<br />
            -Orderus’ skills occur randomly, based on their chances, so take them into account on each turn.

            <h4>Game over</h4>

            The game ends when one of the players remain without health or the number of turns reaches 20.
            The application must output the results each turn: what happened, which skills were used (if any),
            the damage done, defender’s health left.
            If we have a winner before the maximum number of rounds is reached, he must be declared
            <br /><br />
        </div>
        <a href="battle.php" type="button" class="btn btn-lg btn-primary btn-block">Start Battle</a>

    </div>


<?php
require_once "includes/footer.php";
?>
