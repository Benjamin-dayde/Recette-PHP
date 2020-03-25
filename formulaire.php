<?php

//var_dump($_POST);

$nom = $_POST["nom"];
$email = $_POST["email"];

$checkbox = isset($_POST["checkbox"])? "a que couteaux" : "";
$checkbox2 = isset($_POST["checkbox2"])? "a que fourchette" : "";
$ustensile = $_POST["ustensile"];
$notes = $_POST["notes"];
$commentaire = $_POST["commentaire"];






?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>formulaire</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
<section>
            <h2>Commentaires</h2>
            <form action="formulaire.php" method="post">
                <p>
                    <label for="nom">Votre nom</label>
                    <input type="text" id="nom" name="nom" placeholder="Votre nom">
                </p>

                <p>
                    <label for="email">Votre email</label>
                    <input type="email" id="email" name="email" placeholder="Votre email">
                </p>

                <p>
                    <input type="checkbox" id="checkbox" name="checkbox" >
                    <label for="couteaux">A que couteaux</label>
                </p>

                <p>
                    <input type="checkbox" id="checkbox" name="checkbox2" >
                    <label for="fourchette">A que fourchette</label>
                </p>

                <p>
                    <label for="select">Choisie ton ustensile</label>

                    <select name="ustensile" id="outils">
                        <option value="">Vazi choisie</option>
                        <option value="cuillere">cuillère</option>
                        <option value="rouleaux">rouleaux</option>
                        <option value="marteaux">marteaux</option>
                </p>


                <p>Note /5 : 
                    <label for="rad0">0</label>
                    <input type="radio" id="rad0" name="notes" value="0">
                    <label for="rad1">1</label>
                    <input type="radio" id="rad1" name="notes" value="1">
                    <label for="rad2">2</label>
                    <input type="radio" id="rad2" name="notes" value="2">
                    <label for="rad3">3</label>
                    <input type="radio" id="rad3" name="notes" value="3">
                    <label for="rad4">4</label>
                    <input type="radio" id="rad4" name="notes" value="4">
                    <label for="rad5">5</label>
                    <input type="radio" id="rad5" name="notes" value="5">
                </p>
                <p> 
                    <label for="comment">Laissez-nous un commentaire</label><br>
                    <textarea name="commentaire" id="comment" rows="5" cols="40"></textarea>
                </p>
                <p><input type="submit" value="Envoyer">
                </p>
            </form>
        </section>
        <section>
            <table>
 
            <tr>   
                <th>Nom</th>
                <th>Email</th>
                <th>checkbox</th>
                <th>checkbox2</th>
                <th>Ustensile</th>
                <th>Notes</th>
                <th>Commentaire</th>
            </tr>

            <tr>

            <td><?= $nom  ?></td>
            <td><?= $email ?></td>
            <td><?= $checkbox  ?></td>
            <td><?= $checkbox2  ?></td>
            <td><?= $ustensile ?></td>
            <td><?= $notes ?></td>
            <td><?= $commentaire ?></td>

            </tr>
                


        </section>
</html>