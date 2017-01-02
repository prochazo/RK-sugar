<html>
<head>
	<title>Kontakty</title>
	<meta charset="utf-8">
	<link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/kontakty.css">
</head>
<body>
	
    <?php
        $activeNavItem = "kontakty";
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
</body>
</html>