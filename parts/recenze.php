<?php

// načíst data
$people = require __DIR__ . "/../data/recenze.php";

?>

<section class="recenze">
    <div class="wrapper">
        <div class="recenze__wrapper">

            <?php foreach ($people as $person): ?>
                <div class="recenze__card__wraper">
                    <div class="recenze__card">
                        <div class="recenze__card__head">
                            <div class="recenze__card__img">
                                <img src="assets/tym/<?php echo $person["img"]; ?>">
                            </div>
                            <div class="recenze__card__title">
                                <h2 class="recenze__card__title__name">
                                    <?php echo $person["name"]; ?>
                                </h2>
                                <div class="recenze__card__title__nickname">
                                    <?php echo $person["nickname"]; ?>
                                </div>
                                <div class="recenze__card__title__town">
                                    <?php echo $person["first"]; ?>
                                </div>
                            </div>
                            <!--
                            <button class="recenze__card__details-button">
                                <span class="icon-info"></span>
                            </button>
                            -->
                        </div>
                        <div class="recenze__card__body">
                        
                            <p><?php echo $person["body"]; ?></p>

                            
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>