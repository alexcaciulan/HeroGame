<?php
require_once "autoload.php";
require_once "includes/header.php";
?>

    <div class="jumbotron">
        <h3>The Story</h3>
        <hr>
        <div>
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
        <div>
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
        <a href="battle.php" type="button" class="btn btn-lg btn-primary btn-block">Start Battle</a>

    </div>


<?php
require_once "includes/footer.php";
?>
