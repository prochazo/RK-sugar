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
	
    <script src="js/jquery.min.js"></script>
    <script src="js/recenze.js"></script>

    <?php include __DIR__ . "/parts/analytics.php"; ?>

</body>
</html>