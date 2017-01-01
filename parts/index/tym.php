<?php

// načíst data
$teamMembers = require __DIR__ . "/../../data/tym.php";

?>

<section class="team">
    <div class="wrapper">
        <h1 class="team__title">Náš tým</h1>
        <div class="team__wrapper">

            <?php foreach ($teamMembers as $member): ?>
                <div class="team__card__wraper">
                    <div class="team__card">
                        <div class="team__card__head">
                            <div class="team__card__img">
                                <img src="assets/tym/<?php echo $member["img"]; ?>">
                            </div>
                            <div class="team__card__title">
                                <h2 class="team__card__title__name">
                                    <?php echo $member["name"]; ?>
                                </h2>
                                <div class="team__card__title__nickname">
                                    <?php echo $member["nickname"]; ?>
                                </div>
                                <div class="team__card__title__town">
                                    <?php echo $member["town"]; ?>
                                </div>
                            </div>
                            <button class="team__card__details-button">
                                <span class="icon-info"></span>
                            </button>
                        </div>
                        <div class="team__card__body">
                            <!--

                            <h3>Funkce:</h3>
                            <p><?php echo $member["likes"]; ?></p>

                            -->

                            <h3>Kde se na kurzu potkáme?</h3>
                            <p><?php echo $member["meet"]; ?></p>

                            <h3>Pár vět o mně:</h3>
                            <p><?php echo $member["about"]; ?></p>

                            <?php if (array_key_exists("education", $member)): ?>
                                <h3>Skautské vzdělání:</h3>
                                <ul>
                                    <?php foreach ($member["education"] as $edu): ?>
                                        <li><?php echo $edu; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>

                            <h3>Co si s sebou do Cukřenky přibalim?</h3>
                            <p><?php echo $member["take"]; ?></p>

                            <h3>Motto</h3>
                            <p><?php echo $member["motto"]; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>     
    </div>
</section>
