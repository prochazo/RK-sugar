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

<section id="noteam">
    <div class="wrapper">
        <h1 class="noteam__title">A další...</h1>
        <div class="noteam__wrapper">
            <?php foreach ($people as $person): ?>
                <div class="noteam__card__wraper">
                    <div class="noteam__card__img">
                        <img src="assets/tym/<?php echo $person["image"] ?>">
                    </div>
                    <p><?php echo $person["name"] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>