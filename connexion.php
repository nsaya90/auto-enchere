<?php



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
        <legend>Connexion</legend>

        <form action="connexion.php" method="POST">



            <label for="nom">Mail</label>
            <input type="email" name="c_mail">

            <label for="nom">Mot de passe</label>
            <input type="password" name="c_password">

            <button class="btn" name="connexion">Connectez-vous</button>
        </form>

    </fieldset>

    <?php

    if (isset($_POST['connexion'])) {

        require 'c_connexion.php';
    }

    ?>

</body>

</html>