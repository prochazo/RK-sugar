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
            href="https://docs.google.com/forms/d/15hvNajdfMRPFj05xR0hNm8QFofMxw4xd-M-fL0nRU8I/viewform?c=0&w=1"
        >Přihlášky</a>

        <a
            class="navigation__item <?php if ($activeNavItem == "fotogalerie") echo "navigation__item--active"; ?>"
            href="#"
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