<?php

require_once "db/db.php";
require_once 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

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
            <li class="nav-item active">
                <a class="nav-link" href="actua.php">Actualités</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="proteg.php">Infos Covid19</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">

        <h1>Articles</h1>
    <?php
    $sqls ='SET CHARACTER SET utf8';
    $res = $conn->query($sqls);
    $sql = "SELECT * FROM articles";

    /**
     * resultat de la requete
     * @var $articles[]
     */
    $articles = $conn->query($sql);

    if (!$articles) {
        echo "message d'erreur: %s\n". $conn->error ;

        $logger = new Logger('requetebd');
        $logger->pushHandler(new StreamHandler('log/meslogs.log', Logger::ERROR));
        $logger->error('erreur dans la requete :'.$conn->error.'');
    }

    while ($article = $articles->fetch_assoc()) {
?>
            <div class="art">
             <h3><?php echo $article['titre'] ?> </h3>
                <center><img src="img/<?php echo $article['image'] ?>" alt="image"></center>
             <p><?php echo $article['contenu'] ?></p>
        </div>

    <?php }
    $conn->close();
    ?>

</div>

</html>