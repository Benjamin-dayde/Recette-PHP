<?php 

$recettes_test = [
    "titre" => "Plat 2",
    "image" => "img\plat2.jpg",
    "temps" => "2h05",
    "personnes" => "8",
    "dificulte" => "3/4",
    "cout" => "3/4",
    "ingredient" => "1 paquet de lazagne /// 3 oignon jaune /// 3 gousse d'ails /// 1 brnache de celerie /// 1 caroote /// etc",
    "etape" => "Faire revenir gousses hachées d'ail et les oignons émincés dans un peu d'huile d'olive. /// Ajouter la carotte et la branche de céleri hachée puis la viande et faire revenir le tout. /// Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu'à évaporation.",
];

$cat_test = [

    $recettes1 = [
        "titre" => "Plat 2",
    "image" => "img\plat2.jpg",
    "temps" => "2h05",
    "personnes" => "8",
    "dificulte" => "3/4",
    "cout" => "3/4",
    "ingredient" => "1 paquet de lazagne /// 3 oignon jaune /// 3 gousse d'ails /// 1 brnache de celerie /// 1 caroote /// etc",
    "etape" => "Faire revenir gousses hachées d'ail et les oignons émincés dans un peu d'huile d'olive. /// Ajouter la carotte et la branche de céleri hachée puis la viande et faire revenir le tout. /// Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu'à évaporation.",
    ],

    $recettes2 = [
        "titre" => "Plat 2",
    "image" => "img\plat2.jpg",
    "temps" => "2h05",
    "personnes" => "8",
    "dificulte" => "3/4",
    "cout" => "3/4",
    "ingredient" => "1 paquet de lazagne /// 3 oignon jaune /// 3 gousse d'ails /// 1 brnache de celerie /// 1 caroote /// etc",
    "etape" => "Faire revenir gousses hachées d'ail et les oignons émincés dans un peu d'huile d'olive. /// Ajouter la carotte et la branche de céleri hachée puis la viande et faire revenir le tout. /// Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu'à évaporation.",
    ],

    $recettes3 = [
        "titre" => "Plat 2",
    "image" => "img\plat2.jpg",
    "temps" => "2h05",
    "personnes" => "8",
    "dificulte" => "3/4",
    "cout" => "3/4",
    "ingredient" => "1 paquet de lazagne /// 3 oignon jaune /// 3 gousse d'ails /// 1 brnache de celerie /// 1 caroote /// etc",
    "etape" => "Faire revenir gousses hachées d'ail et les oignons émincés dans un peu d'huile d'olive. /// Ajouter la carotte et la branche de céleri hachée puis la viande et faire revenir le tout. /// Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu'à évaporation.",
    ]
];

//var_dump($recettes_test)







/*$size = sizeof($recettes_test)

$titre = "";
$image = "";
$temps = "";
$personnes = "";
$dificult = "";
$cout = ""; 
$ingredient = "";
$etape = ""; 

for ($i == 0 ; $i < $size ; $i++) {
    
    $titre = "";
    $image = "";
    $temps = "";
    $personnes = "";
    $dificult = "";
    $cout = ""; 
    $ingredient = "";
    $etape = ""; 
}*/

?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Mon livre de recettes</title>
        <meta charset="utf-8">
         <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

<body>
    <h1><?= $recettes_test["titre"] ?>
    <img src="<?= $recettes_test["image"] ?>"alt="Image plat 2"></a>
    <table>
        <tr>
        <th>Temps de preparation </th>
        <th>Personnes</th>
        <th>Difficulté</th>
        <th>Coût</th>
        </tr>
        <tr>
        <td><?= $recettes_test["temps"] ?></td>
        <td><?= $recettes_test["personnes"] ?></td>
        <td><?= $recettes_test["dificulte"] ?></td>
        <td><?= $recettes_test["cout"] ?></td>
        
        </tr>
        </table>
</body>

</html>