<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enchère</title>
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
        <legend>Ajout enchère</legend>

        <form action="c_enchere.php" method="POST">

            <label for="date">Date de l'enchère</label>
            <input type="number" name="date">

            <label for="prix">Prix</label>
            <input type="float" name="prix">

            <button class="btn" name="valider">Valider</button>
        </form>

    </fieldset>

    <?php
    if (isset($_POST['valider'])) {

        require './c_enchere.php';
    }

    ?>

</body>

</html>