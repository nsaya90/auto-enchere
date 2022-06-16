<?php
$servname = 'localhost';
$dbname = 'auto-enchere';
$user = 'root';
$pass = '';


$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$mail =  htmlspecialchars($_POST['mail']);
$password =  htmlspecialchars($_POST['password']);

var_dump($_POST);


try {
  $pdo = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "INSERT INTO utilisateurs(nom,prenom,email,password) VALUES(?,?,?,?)";

  $stmt = $pdo->prepare($sql);

  $stmt->execute([$nom,$prenom,$mail,$password]);
  
  echo 'Entrée ajoutée dans la table';

} catch (PDOException $e) {
  $dbco->rollBack();
  echo "Erreur : " . $e->getMessage();
}

header('Location: connexion.php');
exit;

?>