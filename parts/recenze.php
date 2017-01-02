<?php

// načíst data
$people = require __DIR__ . "/../data/recenze.php";

?>

<section class="recenze">
    <div class="recenze__wrapper">

        <?php foreach ($people as $person): ?>
            <div class="recenze__item">
                <div class="recenze__item__img">
                    <img src="assets/tym/<?php echo $person["img"]; ?>">
                </div>
                <div class="recenze__item__body">
                    <h2 class="recenze__item__name">
                        <?php echo $person["name"]; ?>
                    </h2>
                    <div class="recenze__item__content">
                        <?php echo $person["content"]; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</section>