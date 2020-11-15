<?php


?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="miniprjet">
    <meta name="author" content="  ">

    <title>mini projet</title>


    <link href="public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/bootstrap/css/bootstrap-grid.css" rel="stylesheet">
    <link href="public/bootstrap/css/bootstrap-reboot.css" rel="stylesheet">

    <script type="text/javascript" src="public/bootstrap/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="public/bootstrap/js/bootstrap.js"></script>

    <link href="public/css/style.css" rel="stylesheet">


</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="index.php">Accueil</a>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="actua.php">Actualités </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="proteg.php">Infos Covid19</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">


        <h1>Statistiques</h1>

    <center>
        <img src="img/stat.png" alt="image" style="width:80%;margin:auto;margin-bottom: 50px;">
    </center>

<iframe src="https://ourworldindata.org/coronavirus-data-explorer?zoomToSelection=true&country=~OWID_WRL&region=World&deathsMetric=true&interval=total&hideControls=true&smoothing=0&pickerMetric=location&pickerSort=asc" loading="lazy" style="width: 100%; height: 600px; border: 0px none;"></iframe>

</div>

</html>