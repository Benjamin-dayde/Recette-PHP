<?php

    //var_dump($_GET);

$page = (isset($_GET["page"]))? $_GET["page"] : "accueil";


switch ($page) {
    case "accueil":
        $input = "recettes/home.php";
    break;

    case "entree":
        $input = "recettes/entree.php";
    break;

    case "plat":
        $input = "recettes/plat.php";
    break;

    case "dessert":
        $input = "recettes/dessert.php";
    break;

    default:
        $input = "recettes/home.html";
}
?>



<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Mon livre de recettes</title>
        <meta charset="utf-8">
         <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body>
        <header>
            <?php require "Html/menu.php" ?>
        </header>
        
        <?php require $input ?>
        <?php require "Html/recette.php" ?>
        <?php require "formulaire.php" ?>

    </body>

</html>