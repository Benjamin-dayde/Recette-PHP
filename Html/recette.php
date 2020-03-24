<?php

require "recettes.php";

$lon = sizeof($grdtab);

$titre = "";
$image = "";
$temps = "";
$personnes = "";
$difficulte = "";
$cout = "";
$ingredients = "";
$etapes = "";
$html = "";

for ($i = 0 ; $i < $lon ; $i++) {
    $titre = $grdtab[$i]["titre"];
    $image = $grdtab[$i]["image"];
    $temps = $grdtab[$i]["temps"];
    $personnes = $grdtab[$i]["personnes"];
    $difficulte = $grdtab[$i]["difficulte"];
    $cout = $grdtab[$i]["cout"];
    $ingredients = $grdtab[$i]["ingredients"];
    $etapes = $grdtab[$i]["etapes"];

    $inter = explode("///", $ingredients);
    $inter2 = explode("///", $etapes);

    $html .= 
    
    "<h1>$titre</h1>
        
    <div class=illustration img-block><a href=entree1.html><img src=img/$image alt=Illustration de la recette>
    </a></div>
    
    <section class=row bg-light>
        <div class=col-6>
            <table>
                <tr>
                    <th>Temps de préparation</th>
                    <th>Personnes</th>
                    <th>Difficulté</th>
                    <th>Coût</th>
                </tr>
                <tr>
                    <td>$temps</td>
                    <td>$personnes</td>
                    <td>$difficulte</td>
                    <td>$cout</td>
                </tr>
            </table>
    
            <h2>Ingrédients</h2>
             
            <ul>
                <li>$inter[0]</li>
                <li>$inter[1]</li>
                <li>$inter[2]</li>
                <li>$inter[3]</li>
                <li>$inter[4]</li>
            </ul>
        </div>
    
        <div class=col-6>
            <h2>Etapes</h2>
            <ol>
            <li>$inter2[0]</li>
            <li>$inter2[1]</li>
            <li>$inter2[2]</li>
            </ol>
        </div>
    </section>";
};

foreach ($grdtab as $recette) {
  
    var_dump($recette);
};


?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Plat 1</title>
        <meta charset="utf-8">
         <link rel="stylesheet" type="text/css" href="../../css/style.css">
    </head>
<body>
    <?= $html ?>
</body>
</html>