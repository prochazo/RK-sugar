<?php

$people = [
    [
        "name" => "Ferda",
        "image" => "Ferda_externiste.jpg"
    ],
    [
        "name" => "Hanďa",
        "image" => "Handa_externiste.jpg"
    ],
    [
        "name" => "Lukáš",
        "image" => "Lukas_externiste.jpg"
    ],
    [
        "name" => "Simba",
        "image" => "Simba_externisti.jpg"
    ],
    [
        "name" => "Vodička",
        "image" => "Vodicka_externisti.jpg"
    ]
];

?>

<section class="externiste">
    <h1 class="externiste__title">A další...</h1>
    <div class="externiste__wrapper">

        <?php foreach ($people as $person): ?>
            <div class="externiste__item">
                <div class="externiste__img">
                    <img src="assets/tym/<?php echo $person["image"] ?>">
                </div>
                <p class="externiste__name"><?php echo $person["name"] ?></p>
            </div>
        <?php endforeach; ?>

    </div>
</section>