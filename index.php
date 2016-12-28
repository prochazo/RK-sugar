<!DOCTYPE html>
<html lang="cz">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="assets/icomoon.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/team.css">
</head>
<body>
    
    <?php
        $activeNavItem = "index";
        include __DIR__ . "/parts/nav.php";
    ?>

    <section class="landing">
        <div class="landing__content">
            <h1></h1>
            <h2></h2>
        </div>
    </section>



    <section id="sec1">
        <div class="wrapper">  

            <h1 id="rocnik">Rádcovský kurz Cukříček</h1>

            <div class="grid">
                <div class="grid__item">
                    <h2>Pro koho je Cukříček?</h2>
                    <p>Rádcovský kurz Cukříček je určen všem rádkyním a rádcům ve věku 13 - 17 let (výjimku uděluje vůdce kurzu), kteří se chtějí zažít skvělý konec léta, něco nového dozvědět a motivovat se do další činnosti u oddílu a nebo úplně začínají a chtějí pomoci nalézt ten správný směr. </p>
                </div>
                <div class="grid__item">
                    <h2>Jak Cukříček funguje?</h2>
                    <p>Cukříček není samá nudná přednáška, zapisování si do sešitků a zkoušení jako ve škole! Snažíme se většinu věcí předávat prakticky tedy tím, že to děláme!
                    Pojeď s námi zažít nejlepší konec léta s lidmi, kteří mají stejné záliby jako ty a patří do velké skautské rodiny! Díky tomu se na kurzu můžeš těšit na přátelskou a pohodovou atmosféru, sehraný přátelský tým instruktorů, vyhlášenou kuchyni a mnoho dalšího! 
                    </p>
                </div>
                <div class="grid__item">
                    <h2>Kdy a kde se Cukříček koná?</h2>
                    <p>Zakládáme si na tom, že se kurz koná vždy poslední týden prázdnin, jako taková sladká tečka. Letos tedy kurz proběhne od pondělí 29. srpna 2017 do soboty 2. září 2017. Tábořit budeme uprostřed lesů v divočině šiškovických lesů nedaleko Chrudimi.</p>
                </div>
                <div class="grid__item">
                    <h2>Kolik Cukříček stojí?</h2>
                    <p>Celý kurz bude stát 900,- Kč. Po potvrzení přijetí přihlášky je nutno uhradit nevratnou zálohu 400,- Kč (POZOR! Až po přijetí zálohy se přihláška stává platnou.) Cena zahrnuje ubytování, stravu, potřeby na program. Cestovné účastníků kurz neproplácí. Samozřejmostí je příjmový doklad, díky němuž je možné žádat ve tvém středisku proplacení kurz (nebo jeho části).</p>
                </div>
            </div>

        </div>
    </section>

    <!-- naviagční cíl pro index.php#tym -->
    <div id="tym"></div>
    
    <section id="sec2">
        
    </section>
    
    <?php include __DIR__ . "/parts/index/tym.php"; ?>

    <div style="height: 800px"></div>

    <script src="js/jquery.min.js"></script>
    <script src="js/index.js"></script>

</body>
</html>