<?php


require_once 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;


/**
 * nom du serveur ou adresse IP du serveur $serveur
 * @var string
 */
$serveur = "localhost";
/**
 * utilisateur de la  base de donnees
 * @var string
 */
$nomutilisateur = "root";
/**
 * mot de pasee de la base de donnees
 * @var string
 */
$mdp = "";
/**
 * nom de la base de donnees
 * @var string
 */
$nombd = "miniprojet";


try {
    /**
     * etat de la connexion (succes , echoué )
     * @var boolean
     */
    $conn = new mysqli($serveur, $nomutilisateur, $mdp, $nombd);
}
catch (exception $e) {

    $logger = new Logger('bd');
    $logger->pushHandler(new StreamHandler('log/meslogs.log', Logger::ERROR));
    $logger->error('erreur de connexion a la base de donnees');
}


?>