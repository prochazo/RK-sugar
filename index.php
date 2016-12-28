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
    
    <section class="team">
        <div class="wrapper">

            <h1 class="team__title">Náš tým</h1>

            <div class="team__wrapper">
            
                <div class="team__card__wraper">
                    <div class="team__card">
                        <div class="team__card__head">
                            <div class="team__card__img">
                                <img src="assets/IMG_0328.jpg" >
                            </div>
                            <div class="team__card__title">
                                <h2 class="team__card__title__name">Patrik Půlpán</h2>
                                <div class="team__card__title__nickname">Paťa</div>
                                <div class="team__card__title__town">Slatiňany</div>
                            </div>
                            <button class="team__card__details-button">
                                <span class="icon-info"></span>
                            </button>
                        </div>
                        <div class="team__card__body">
                            <h3>Baví mě:</h3>
                            <p>Skauting, Organizace akcí, divadlo</p>

                            <h3>Kde se na kurzu potkáme?</h3>
                            <p>Všude mě je všude plno a hlavně jsem slyšet přes celé tábořiště :)</p>

                            <h3>Pár vět o mně:</h3>
                            <p>Jsem skaut už 13 let a pořád mě to baví! Jsem vůdce jedné smečky vlčat, motám se kolem vedení jednoho střediska, podílím se realizaci dalších kurzů :) a ještě pár věcí ... Mimo to jsem student a ještě nevím čím bych chtěl v životě být (ale popelářem už ne!) </p>

                            <h3>Skautské vzdělání:</h3>
                            <ul>
                                <li>ČK Tokaheya (2014)</li>
                                <li>ZZA Podlitina (2015)</li>
                                <li>VLK Quo Vadis (2015) </li>
                            </ul>
                            <h3>Co si určitě nezapomenu s sebou do Cukřenky přibalit ?</h3>
                            <p>Špunty do uší, dobrou náladu a hlavně peřinky!<p/>
                            <h3>Motto</h3>
                            <p>Kdo chce jiné zapalovat, musí sám hořet!</p>
                        </div>
                    </div>
                </div>

                <div class="team__card__wraper">
                    <div class="team__card">
                        <div class="team__card__head">
                            <div class="team__card__img">
                                <img src="assets/IMG_0328.jpg" >
                            </div>
                            <div class="team__card__title">
                                <h2 class="team__card__title__name">Tereza Koberová</h2>
                                <div class="team__card__title__nickname">Sňéža</div>
                                <div class="team__card__title__town">Slatiňany</div>
                            </div>
                            <button class="team__card__details-button">
                                <span class="icon-info"></span>
                            </button>
                        </div>
                        <h3>Baví mě:</h3>
                            <p>Trempování</p>

                            <h3>Kde se na kurzu potkáme?</h3>
                            <p>49° 53' 18.0901577" N 15° 46' 10.357132" E</p>

                            <h3>Pár vět o mně:</h3>
                            <p>Mé jméno už znáte a studuji medicinální chemii (takže si s sebou raději vemte ochutnávače). Skautuju ve Slatiňanech od té doby, co jsem přišla na světlušácký nábor. Prázdniny ráda trávím v přírodě, baví mě objevovat nová místa - v zimě na běžkách, v létě pěšmo.</p>

                            <h3>Skautské vzdělání:</h3>
                            <ul>
                                <li>ČK Tokaheya (2014)</li>
                                <li>ZZA Podlitina (2015)</li>
                                <li>VLK Quo Vadis (2015) </li>
                            </ul>
                            <h3>Co si určitě nezapomenu s sebou do Cukřenky přibalit ?</h3>
                            <p>To, co mi při balení cvrnkne o nos.<p/>
                            <h3>Motto</h3>
                            <p>Žij naplno (skoro) každý den!</p>
                        </div>
                    </div>
                </div>

            </div>










            <div class="grid">
                <div class="grid__item">
                    <img src="">
                    <h1>Hana Chalupová – Hanďa – Přelouč</h1>
                    <p><b>Baví mě: </b>skautování, házení létajícím talířem, hraní her a vyhrávání</p>
                    <p><b>Na kurzu mám na starost: </b>Ještě jsem se neodvážila zeptat </p>
                    <p><b>Co dělám ve skautingu: </b>Vedu oddíl světlušek v Přelouči, chodím na všelijaké rady a pomáhám tam, kde je zrovna potřeba</p>
                    <p><b>Skautské vzdělání:</b></p>
                    <ul>
                        <li>ČLK Odyssea 2013</li>
                        <li>ZZA Červený kříž 2015</li>
                        <li>VLK Quo Vadis 2015 </li>
                    </ul>
                    <p><b>Motto: </b>Žádný pesimista nikdy neobjevil tajemství hvězd, neplavil se do neznámých zemí, ani neobjevil nové obzory lidské duše.</p>
                </div>
                <div class="grid__item">
                    <img src="">
                    <h1>Paťa - Patrik Půlpán- Slatiňany</h1>
                    <p><b>Baví mě: </b>Skauting, Organizace akcí, divadlo</p>
                    <p><b>Na kurzu mám na starost: </b>Vůdcování kurzu a jeho duchovní otcovství :), přednášky, hospodaření a spoustu úsměvů na frekventanty. </p>
                    <p><b>Co dělám ve skautingu: </b>Jsem vůdcem úžasné 5. smečky vlčat ve Slatiňanech a občas pořádám nějakou akci :)</p>
                    <p><b>Skautské vzdělání:</b></p>
                    <ul>
                        <li>ČK Tokaheya (2014)</li>
                        <li>ZZA Podlitina (2015)</li>
                        <li>VLK Quo Vadis (2015) </li>
                    </ul>
                    <p><b>Motto: </b>Kdo chce jiné zapalovat, musí sám hořet!</p>
                </div>
                <div class="grid__item">
                    <img src="">
                    <h1>Šimon Kimák - Krocan(Krůta) - Saltiňany</h1>
                    <p><b>Baví mě: </b> Skauting, příroda, literatura frisbee, běžky</p>
                    <p><b>Na kurzu mám na starost: </b>Tajemničení, kuchyň a nějakou tu přednášku a hlavně vařit kafe vůdcovi!</p>
                    <p><b>Co dělám ve skautingu: </b>rádce 5 smečky vlčat ve Slatiňanech, spolupracuju s Paťou na různých akcích pro veřejnost!</p>
                    <p><b>Skautské vzdělání:</b></p>
                    <ul>
                        <li>ČLK Corda (2015)</li>
                        <li>ZZA Quo Vadis (2015)</li>
                    </ul>
                    <p><b>Motto: </b>Smrt je strašlivě konečná, zatímco život přináší plno možností!</p>
                </div>
                <div class="grid__item">
                    <img src="">
                    <h1>Mája - Magdaléna Vtípilová a Syslík - Sylva Coufalová - Dobříš</h1>
                    <p><b>Baví nás: </b> Skauting, zpívání, hraní na hudební nástroje, vaření, volejbal, angličtina, cestování a příroda.</p>
                    <p><b>Na kurzu máme na starost: </b>Pobíhání a pomáhání s čím je třeba, dělání radosti ostatním.</p>
                    <p><b>Co děláme ve skautingu: </b>Rádkyně u skautek.</p>
                    <p><b>Motto: </b>Každé dobrodružství začíná okamžikem, každá cesta začíná krokem, každý sen začíná snílkem, všechno je možné, pokud máš odvahu.</p>
                </div>
                <div class="grid__item">
                    <img src="">
                    <h1>Ondřej Procházka - Ondra - Slatiňany</h1>
                    <p><b>Baví mě: </b> Natáčení videí, práce s počítačem a skauting.</p>
                    <p><b>Na kurzu mám na starost: </b>Webovky, zábavu a vše co je potřeba.</p>
                    <p><b>Co dělám ve skautingu: </b>Rádce 5 smečky vlčat ve Slatiňanech, spolupracuju s Paťou na různých akcích pro veřejnost!</p>
                    <p><b>Skautské vzdělání:</b></p>
                    <ul>
                        <li>ČK Tokaheya (2014)</li>
                    </ul>
                    <p><b>Motto: </b>Koukej se kolem sebe a uč se!</p>
                </div>
            </div>

        </div>
    </section>

    <div style="height: 800px"></div>

    <script src="js/jquery.min.js"></script>
    <script src="js/index.js"></script>

</body>
</html>