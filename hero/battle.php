<?php
require_once "autoload.php";

use Service\Container;

$container = new Container();
$playerLoader = $container->getPlayerLoader();

$player1 = $playerLoader->findOneById('orderus');
$player2 = $playerLoader->findOneById('beast');

$battle = $container->getBattleManager();

require_once "includes/header.php";
?>

<div class="jumbotron">
    <div class="row">
        <div class="col-md-12">
            <h3>Battle</h3>
           <p>Initial players stats</p>  <br/>
            <div class="col-md-6 col-sm-12">
                Player 1
                    <ul>
                    <li>Name: <?php echo $player1->getName()?></li>
                    <li>Health: <?php echo $player1->getHealth()?></li>
                    <li>Strength: <?php echo $player1->getStrength()?></li>
                    <li>Defence: <?php echo $player1->getDefence()?></li>
                    <li>Speed: <?php echo $player1->getSpeed()?></li>
                    <li>Luck: <?php echo $player1->getLuck()?>%</li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-12">
                Player 2
                <ul>
                    <li>Name: <?php echo $player2->getName()?></li>
                    <li>Health: <?php echo $player2->getHealth()?></li>
                    <li>Strength: <?php echo $player2->getStrength()?></li>
                    <li>Defence: <?php echo $player2->getDefence()?></li>
                    <li>Speed: <?php echo $player2->getSpeed()?></li>
                    <li>Luck: <?php echo $player2->getLuck()?>%</li>
                </ul>
            </div>
        </div>
    </div>
    <hr>
    <h3>Start Battle</h3>
    <?php
    $battle->battle($player1, $player2);
    ?>
    <p><a href="battle.php"> Battle again</a></p>
</div>


<?php
require_once "includes/footer.php";
?>
