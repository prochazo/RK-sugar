<html>
<head>
	<title>Recenze</title>
	<meta CHARSET="UTF-8">
	<link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/recenze.css">
    <link rel="stylesheet" type="text/css" href="assets/icomoon.css">
</head>
<body>
    
    <?php
        $activeNavItem = "recenze";
        include __DIR__ . "/parts/nav.php";
    ?>

    <?php include __DIR__ . "/parts/recenze.php"; ?>
    
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

	
    <script src="js/jquery.min.js"></script>
    <script src="js/recenze.js"></script>
</body>
</html>