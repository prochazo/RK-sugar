<!DOCTYPE html>
<html lang="cz">
<head>
    <meta charset="UTF-8">

    <title>Recenze - Rádcovský kurz Cukříček</title>

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

    <?php include __DIR__ . "/parts/analytics.php"; ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/recenze.js"></script>

</body>
</html>