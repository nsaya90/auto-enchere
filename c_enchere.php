<?php
$servname = 'localhost';
$dbname = 'auto-enchere';
$user = 'root';
$pass = '';


$date = htmlspecialchars($_POST['date']);
$prix = htmlspecialchars($_POST['prix']);

var_dump($_POST);


try {
  $pdo = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "INSERT INTO encheres(date,prix) VALUES(?,?)";

  $stmt = $pdo->prepare($sql);

  $stmt->execute([$date,$prix,]);
  
  echo 'Entrée ajoutée dans la table';

} catch (PDOException $e) {
  $dbco->rollBack();
  echo "Erreur : " . $e->getMessage();
}

header('Location: connexion.php');
exit;

?>