<?php

//recuperelaon a la BDD
require_once('pdo.php');
include('helpers/function.php');
//je stocks  la connexion dans $pdo
$pdo = pdo();
/**
 * 
 * Get all items in DB
 */
function getALL($table, $order="")
//fonction qui va recupere tout les elements

{
    //global permet de retrouver la pdo
    global $pdo;
// 1 selectionne tous dans ma db
$sql ="SELECT * FROM $table ";

if($order) {
    $sql .= " ORDER BY " . $order;
}
//2-Prépare ma requette
$query =$pdo->prepare($sql);
//3-Executela requette
$query->execute();
//4- jz stock ts les resultats ds une variable
$goats = $query->fetchAll();
//5-je retourne le resultat dans la query 
return $goats;
}

//function get id 
function getId()
{

    if(!empty($_GET['id']) && isset($_GET['id']) && is_numeric($_GET['id'])){
    //on nettoie l'id
    $id = cleanInput($_GET['id']);
    }else{
        $_SESSION["error"] = "ID invalide";
        //redirection quand l'id est invalide
         header('Location: liste-goat.php');
    }
    return $id;
}

//function get table
function get($table)
{
    global $pdo;
    $id = getId();
    //faire la requette
    $sql = "SELECT * FROM $table where id= :id";
    // prépare la requette
    $query = $pdo->prepare($sql);
    //associe la valeur à un parametre
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    //execute ma requette
    $query->execute();
    //on stocke goat dans une variable
    $item = $query->fetch();
   // debug_array($goat);

    //pas d'etudiant alors on est  redirect vers la liste
    if(!$item) {
        $_SESSION["error"] ="Cet étudiant n'existe pas!";
        header('Location: liste-goat.php');
    }
    return $item;
}

//fonction suprimer
function delete($table)
{
    global $pdo;
    $id = getId();
    //faire la requette
    $sql = "DELETE FROM $table where id= :id";
    // prépare la requette
    $query = $pdo->prepare($sql);
    //associe la valeur à un parametre
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    //execute ma requette
    $query->execute();
    $_SESSION["success"] ="L'élément a bien été supprimé avec succés!!";
    //redirect
    header('location: index.php');


}