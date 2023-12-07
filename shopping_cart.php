<?php
session_start();


// Ajouter un article 
if (!isset($_SESSION["send"])) {
    $_SESSION['send'] = [];
}

if (isset($_POST["add_to_cart"])) {
    array_push($_SESSION["send"], $_POST["product"]); 
    header('location: index.php');
}


// Supprimer l'article 
if (isset($_GET['remove'])) {
   $id = $_GET["remove"];
   if ($_SESSION["send"][$id]) {
    unset($_SESSION["send"][$id]); 

    header('location: index.php');
   }
}

?>