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
                            <h3>Baví mě:</h3>
                            <p><?php echo $member["likes"]; ?></p>

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








        <!--
            Starý kód, v budoucnu odstranit!
        -->

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