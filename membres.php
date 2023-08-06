<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_admin;', 'root' , 'root');
if(!$_SESSION['mdp']){
  header('Location: connexion.php');
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Espace de connexion admin</title>
  <meta charset="utf-8">
</head>
  <body>
  <!-- Afficher les membres-->
  <?php
  $recupUsers = $bdd-> query('SELECT * FROM menbres');
  while($user = $recupUsers->fetch()){
    ?>
    <p><?= $user['pseudo']; ?></p>
    <?php
  }
  ?>
  <!-- Fin Afficher les membres-->
  </body>
</html>