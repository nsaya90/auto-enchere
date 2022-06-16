<?php

if(isset($_POST["valider"]))

    require 'c_annonces.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annonces</title>
</head>
<body>

<fieldset>
    <legend>Dépot annonce</legend>

    <form action="annonces.php" method="POST">

    <label for="titre">Titre de l'annonce</label>
    <input type="text" name="titre">

    <label for="prix_depart">Prix de départ</label>
    <input type="number" name="prix_depart">

    <label for="model">Model</label>
    <input type="text" name="modele">

    <label for="marque">Marque</label>
    <input type="text" name="marque">

    <label for="date_fin">Date de fin de la vente</label>
    <input type="number" name="date_fin_enchere">

    <label for="puissance">Puissance</label>
    <input type="number" name="puissance">

    <label for="annee">Année</label>
    <input type="number" name="annee">

 
    <label for="description">Description</label>
    <input type="text" name="description">

    <label for="photo">Photo</label>
    <input type="text" name="photo" placeholder="Veuillez copier le lien de la photo">

    

    <button class="btn" name="valider">Valider</button>
    </form>

</fieldset>
    
</body>
</html>