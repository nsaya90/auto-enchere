<?php

$servname = 'localhost';
$dbname = 'auto-enchere';
$user = 'root';
$pass = '';

try {

    $pdo = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $dbco->rollBack();
    echo "Erreur : " . $e->getMessage();
}


$id_annonce = $_GET['id'];

// var_dump($id_annonce);

$sql = "SELECT * FROM annonces WHERE uid = $id_annonce";

// Preparation
$stmt = $pdo->prepare($sql);

// execution
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_BOTH); // fetchAll() car PLUSIEURS LIGNES récupérées


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    foreach ($result as $infos) {


        echo '<div class="box_annonce">';

        echo '<ul>';
        echo '<li> Titre : ' . $infos['titre_annonce'] . '</li>';
        echo '<li>Prix de départ : ' . $infos['prix_depart'] . '</li>';
        echo '<li>Date fin enchère : ' . $infos['date_fin_enchere'] . '</li>';
        echo '<li>Model : ' . $infos['modele'] . '</li>';
        echo '<li>Marque : ' . $infos['marque'] . '</li>';
        echo '<li>Puissance : ' . $infos['puissance'] . '</li>';
        echo '<li>Année : ' . $infos['annee'] . '</li>';
        echo '<li>Description : ' . $infos['description'] . '</li>';

        echo '</ul>';

        echo '<div class="box_img">';
        echo '<img class="img_annonce" src=' . $infos['photo'] . '>';
        echo '</div>';

        echo '</div>';
    }
    ?>

</body>

</html>