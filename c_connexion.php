<?php

$servname = 'localhost';
$dbname = 'auto-enchere';
$user = 'root';
$pass = '';

var_dump($_POST);

try {

    $pdo = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $dbco->rollBack();
    echo "Erreur : " . $e->getMessage();
}


$mail = $_POST['c_mail'];


$sql = "SELECT * FROM utilisateurs WHERE email = ?";

// Preparation
$stmt = $pdo->prepare($sql);

// execution
$stmt->execute([$mail]);

$result = $stmt->fetchAll(PDO::FETCH_BOTH); // fetchAll() car PLUSIEURS LIGNES récupérées

foreach ($result as $info) {
    echo $info['nom'];
    echo $info['prenom'];
    echo $info['email'];
}

if ($info['email'] === $_POST['c_mail'] && $info['password'] === $_POST['c_password']) {

    echo 'Vous êtes connectez !';
    echo '<a href="./enchere.php">'. 'Ajoutez une enchère'.'</a>';
    echo '<a href="./annonces.php">'. 'Ajoutez une annonce'.'</a>';
}


?>