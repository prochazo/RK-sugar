<!DOCTYPE html>
<html lang="cz">
<head>
    <meta charset="UTF-8">

    <title>Rádcovský kurz Cukříček</title>

    <link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="assets/icomoon.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    
    <?php
        $activeNavItem = "index";
        include __DIR__ . "/parts/nav.php";
    ?>

    <?php include __DIR__ . "/parts/index/landing.php"; ?>

    <?php include __DIR__ . "/parts/index/prehled.php"; ?>

    <!-- naviagční cíl pro index.php#tym -->
    <div id="tym"></div>
    
    <?php include __DIR__ . "/parts/index/hero1.php"; ?>
    
    <?php include __DIR__ . "/parts/index/tym.php"; ?>

    <?php include __DIR__ . "/parts/index/externiste.php"; ?>

    <?php include __DIR__ . "/parts/index/hero2.php"; ?>
    
    <?php include __DIR__ . "/parts/analytics.php"; ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/index.js"></script>

</body>
</html>