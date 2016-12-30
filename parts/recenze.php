<?php

// načíst data
$teamMembers = require __DIR__ . "/../data/recenze.php";

?>

<section class="recenze">
    <div class="wrapper">
        <div class="recenze__wrapper">

            <?php foreach ($teamMembers as $member): ?>
                <div class="recenze__card__wraper">
                    <div class="recenze__card">
                        <div class="recenze__card__head">
                            <div class="recenze__card__img">
                                <img src="assets/tym/<?php echo $member["img"]; ?>">
                            </div>
                            <div class="recenze__card__title">
                                <h2 class="recenze__card__title__name">
                                    <?php echo $member["name"]; ?>
                                </h2>
                                <div class="recenze__card__title__nickname">
                                    <?php echo $member["nickname"]; ?>
                                </div>
                                <div class="recenze__card__title__town">
                                    <?php echo $member["first"]; ?>
                                </div>
                            </div>
                            <!--
                            <button class="recenze__card__details-button">
                                <span class="icon-info"></span>
                            </button>
                            -->
                        </div>
                        <div class="recenze__card__body">
                        
                            <p><?php echo $member["body"]; ?></p>

                            
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>