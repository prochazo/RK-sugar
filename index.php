<!DOCTYPE html>
<html lang="cz">
<head>
    <meta charset="UTF-8">
    <title>Rádcovský kurz - Cukříček</title>
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

    <!--
    Jedná se o kod který je pro službu Analytics
    -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-89705903-1', 'auto');
      ga('send', 'pageview');

    </script>




    <section class="landing">
        <div class="landing__content">
            
        </div>
    </section>



    <section id="sec1">
        <div class="wrapper">  

            <h1 id="rocnik">Rádcovský kurz - Cukříček</h1>

            <div class="grid">
                <div class="grid__item">
                    <h2>Pro koho je Cukříček?</h2>
                    <p>Rádcovský kurz Cukříček je určen všem rádkyním a rádcům ve věku 13 - 15 let (výjimku uděluje vůdce kurzu), kteří chtějí zažít skvělý konec léta, něco nového se dozvědět a motivovat se do další činnosti u oddílu a nebo úplně začínají a chtějí pomoci nalézt ten správný směr.</p>
                </div>
                <div class="grid__item">
                    <h2>Jak Cukříček funguje?</h2>
                    <p>Cukříček není samá nudná přednáška, zapisování si do sešitků a zkoušení jako ve škole! Snažíme se většinu věcí předávat prakticky tedy tím, že to děláme! Pojeď s námi zažít nejlepší konec léta s lidmi, kteří mají stejné záliby jako ty a patří do velké skautské rodiny! Díky tomu se na kurzu můžeš těšit na přátelskou a pohodovou atmosféru, sehraný přátelský tým instruktorů, vyhlášenou kuchyni a mnoho dalšího!
                    </p>
                </div>
                <div class="grid__item">
                    <h2>Kdy a kde se Cukříček koná?</h2>
                    <p>Zakládáme si na tom, že se kurz koná vždy poslední týden prázdnin, jako taková sladká tečka. Letos tedy kurz proběhne od pondělí 29. srpna 2017 do soboty 2. září 2017. Tábořit budeme uprostřed lesů v divočině nedaleko Šiškovic u Chrudimi.</p>
                </div>
                <div class="grid__item">
                    <h2>Kolik Cukříček stojí?</h2>
                    <p>Celý kurz bude stát 900,- Kč. Po potvrzení přijetí přihlášky je nutno uhradit nevratnou zálohu 400,- Kč (POZOR! Až po přijetí zálohy se přihláška stává platnou.) Cena zahrnuje ubytování, stravu, potřeby na program. Samozřejmostí je příjmový doklad, díky němuž je možné žádat ve tvém středisku proplacení kurz (nebo jeho části). Cestovné účastníků kurz neproplácí.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- naviagční cíl pro index.php#tym -->
    <div id="tym"></div>
    
    <section id="sec2">
        
    </section>
    
    <?php include __DIR__ . "/parts/index/tym.php"; ?>

    <!-- 
    Sekce s obrázky bývalých instruktorů
    -->
    <section id="noteam">
        <div class="wrapper">
            <h1 class="noteam__title">A další...</h1>
            <div class="noteam__wrapper">
                <div class="noteam__card__wraper">
                    <div class="noteam__card__img">
                        <img src="assets/tym/Ferda_externiste.jpg">
                    </div>
                    <p>Ferda</p>

                </div>
                <div class="noteam__card__wraper">
                    <div class="noteam__card__img">
                        <img src="assets/tym/Handa_externiste.jpg">
                    </div>
                    <p>Hanďa</p>
                </div>
                <div class="noteam__card__wraper">
                    <div class="noteam__card__img">
                        <img src="assets/tym/Lukas_externiste.jpg">
                    </div>
                    <p>Lukáš</p>
                </div>
                <div class="noteam__card__wraper">
                    <div class="noteam__card__img">
                        <img src="assets/tym/Simba_externisti.jpg">
                    </div>
                    <p>Simba</p>
                </div>
                <div class="noteam__card__wraper">
                    <div class="noteam__card__img">
                        <img src="assets/tym/Vodicka_externisti.jpg">
                    </div>
                    <p>Vodička</p>
                </div>
            </div>
        </div>
    </section>

    <section id="sec4">
        
    </section>

    
    <script src="js/jquery.min.js"></script>
    <script src="js/index.js"></script>

</body>
</html>