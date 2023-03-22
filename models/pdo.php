<?php
/**
 * 
 */
function pdo()
{

//1-creation des variables
$serveur ="localhost";
$dbname ="app-goat";
$login ="root";
$password ="";
//2-tentative de conection base de données
try {
    $pdo = new PDO("mysql:host=$serveur;dbname=$dbname", $login, $password, array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        //recuperer datas sous forme de tableaux associatifs
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        //Voir les erreurs
        PDO::ATTR_ERRMODE =>PDO::ERRMODE_WARNING
    ));

    return $pdo;
// 3-exeption
} catch (PDOException $e) {
    echo 'Erreur de connection : ' .$e->getMessage();
}
}