<?php

// zajisti aby $activeNavItem byl deklarovanej
if (!isset($activeNavItem))
    $activeNavItem = "index";

?>

<nav class="navigation">
    <div class="navigation__content">
        <img class="navigation__picture" src="assets/logo.png">

        <a
            class="navigation__item <?php if ($activeNavItem == "index") echo "navigation__item--active"; ?>"
            href="index.php"
        >Ročník 2017</a>

        <a
            class="navigation__item <?php if ($activeNavItem == "tým") echo "navigation__item--active"; ?>"
            href="index.php#tym">
        Tým</a>

        <a
            class="navigation__item"
            href="https://goo.gl/forms/nbXyan5aIKRiPDYT2"
            target="item_blanc"
        >Přihlášky</a>

        <a
            class="navigation__item <?php if ($activeNavItem == "fotogalerie") echo "navigation__item--active"; ?>"
            href="https://www.zonerama.com/RKCukricek"
            target="item_blanc"
        >Fotogalerie</a>
        
        <a
            class="navigation__item <?php if ($activeNavItem == "recenze") echo "navigation__item--active"; ?>"
            href="recenze.php"
        >Recenze</a>

        <a
            class="navigation__item <?php if ($activeNavItem == "kontakty") echo "navigation__item--active"; ?>"
            href="kontakty.php"
        >Kontakty</a>
        
        <img class="navigation__picture" src="assets/skaut_logo.png"></div>
    </div>
</nav>

<!-- aby navigace nezakrývala obsah stránky -->
<div style="height: 88px;"></div>