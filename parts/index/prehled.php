<?php

$tiles = [
    [
        "title" => "Pro koho je Cukříček?",
        "content" => "Rádcovský kurz Cukříček je určen všem rádkyním a rádcům ve věku 13 - 15 let (výjimku uděluje vůdce kurzu), kteří chtějí zažít skvělý konec léta, něco nového se dozvědět a motivovat se do další činnosti u oddílu a nebo úplně začínají a chtějí pomoci nalézt ten správný směr."
    ],
    [
        "title" => "Jak Cukříček funguje?",
        "content" => "Cukříček není samá nudná přednáška, zapisování si do sešitků a zkoušení jako ve škole! Snažíme se většinu věcí předávat prakticky tedy tím, že to děláme! Pojeď s námi zažít nejlepší konec léta s lidmi, kteří mají stejné záliby jako ty a patří do velké skautské rodiny! Díky tomu se na kurzu můžeš těšit na přátelskou a pohodovou atmosféru, sehraný přátelský tým instruktorů, vyhlášenou kuchyni a mnoho dalšího!"
    ],
    [
        "title" => "Kdy a kde se Cukříček koná?",
        "content" => "Zakládáme si na tom, že se kurz koná vždy poslední týden prázdnin, jako taková sladká tečka. Letos tedy kurz proběhne od pondělí 29. srpna 2017 do soboty 2. září 2017. Tábořit budeme uprostřed lesů v divočině nedaleko Šiškovic u Chrudimi."
    ],
    [
        "title" => "Kolik Cukříček stojí?",
        "content" => "Celý kurz bude stát 900,- Kč. Po potvrzení přijetí přihlášky je nutno uhradit nevratnou zálohu 400,- Kč (POZOR! Až po přijetí zálohy se přihláška stává platnou.) Cena zahrnuje ubytování, stravu, potřeby na program. Samozřejmostí je příjmový doklad, díky němuž je možné žádat ve tvém středisku proplacení kurz (nebo jeho části). Cestovné účastníků kurz neproplácí."
    ]
];

?>


<section class="prehled">
    <div class="prehled__wrapper">

        <h1 class="prehled__title">Rádcovský kurz - Cukříček</h1>

        <div class="prehled__grid">
            <?php foreach ($tiles as $tile): ?>
                <div class="prehled__item">
                    <h2 class="prehled__item__title"><?php echo $tile["title"]; ?></h2>
                    <p class="prehled__item__content"><?php echo $tile["content"]; ?></p>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>