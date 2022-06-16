<?php

if(isset($_POST["valider"]))

    require 'c_inscription.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/asset/style.css">
    
    <title>Auto-enchère</title>
</head>
<body>

<header>
        <nav>
            
                <a href="./index.php">Acceuil</a>
                <a href="./inscription.php">Inscription</a>
                <a href="./connexion.php">Connexion</a>
                <a href="./annonces.php">Annonces</a>
                <a href="./list_Annonces.php">Les annonces</a>

            
        </nav>
    </header>

<fieldset>
    <legend>Inscription</legend>

    <form action="c_inscription.php" method="POST">

    <label for="nom">Nom</label>
    <input type="text" name="nom">

    <label for="prenom">Prénom</label>
    <input type="text" name="prenom">

    <label for="nom">Mail</label>
    <input type="email" name="mail">

    <label for="nom">Mot de passe</label>
    <input type="password" name="password">

    <button class="btn" name="valider">Valider</button>
    </form>

</fieldset>
    
</body>
</html>