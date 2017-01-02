<!DOCTYPE html>
<html lang="cz">
<head>
	<meta charset="UTF-8">

	<title>Kontakty - Rádcovský kurz Cukříček</title>

	<link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/kontakty.css">
</head>
<body>
	
    <?php
        $activeNavItem = "kontakty";
        include __DIR__ . "/parts/nav.php";
    ?>
	
	<section id="kontakty">
		<div>
			<h2>Kontaktujte nás:</h2>
			<p class="cukricek">cukricek@skaut.cz</p>
		</div>
		
		<div>
			<h2>Tajemník kurzu</h2>
			<p>Šimon Kimák (ŠÍMA) - simakimak@gmail.com - 724 520 855</p>
		</div>
		<div>
			<h2>Šéfka týmu:</h2>
			<p>Tereza Koberová (Sňéža) - tereza.koberova@seznam.cz - 723 576 536 </p>
		</div>

	</section>


	<section id="obrazky">	
		
		<div class="rozdeleni">
			<div style="width: 450px;"></div>
			<a href="https://www.facebook.com/rkcukricek/?fref=ts">
				<img src="../assets/facebook-apk.png">
			</a>
			<div style="width: 155px;"></div>
			<a href="https://www.youtube.com/channel/UCKqj76zoH8lFQ8v3y39pCyw">
				<img src="../assets/youtube.png">
			</a>
			
		</div>
	</section>


	
	<section id="zbytek">
		<div>Junák - český skaut, středisko Slatiňany, z. s. (531.02)<br>Jungmannova 471<br>538 21 Slatiňany
		</div>
	</section>

    <?php include __DIR__ . "/parts/analytics.php"; ?>
    
</body>
</html>