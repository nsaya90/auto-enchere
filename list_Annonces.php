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



$sql = "SELECT * FROM annonces";

// Preparation
$stmt = $pdo->prepare($sql);

// execution
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_BOTH); // fetchAll() car PLUSIEURS LIGNES récupérées

$_SESSION['data'] = $result;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./asset/style.css">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">

        <a href="./index.php">Acceuil</a>
        <a href="./inscription.php">Inscription</a>
        <a href="./connexion.php">Connexion</a>
        <a href="./annonces.php">Annonces</a>
        <a href="./list_Annonces.php">Les annonces</a>
        <div class="wrapper">


            <h1>Liste des annonces</h1>

            <div class="box_list">


                <?php
                foreach ($result as $infos) {

                    var_dump($infos);
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


                    echo '<button data-id="' . $infos['uid'] . '" class="btn_info" name="infos">Infos</button>';

                    echo '</div>';
                }
                ?>


            </div>


        </div>

    </div>

</body>

<script>
    let btns = document.querySelectorAll('.btn_info');
    console.log(btns);
    btns.forEach(btn => {
        btn.addEventListener('click', watchBtnClick, false);
    });

    function watchBtnClick(e) {
        let annonce_id = e.target.dataset.id;

        console.log(annonce_id);

        document.location.href = `./info_Annonce.php?id=${annonce_id}`;

    
    }
</script>

</html>