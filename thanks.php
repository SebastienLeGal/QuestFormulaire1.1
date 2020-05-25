<?php 
$prenom=$_GET['prenom'];
$name=$_GET['name'];
$mail=$_GET['mail'];
$tel=$_GET['tel'];
$Sujet=$_GET["Sujet"];
$message=$_GET["message"]
?>
<h1>Merci, <?php echo $_GET["prenom"]. $_GET["name"] ?></h1> <h2>nous avoir contacté à propos de : <?php echo $_GET['Sujet] ?></h2>
<h3>Un de nos conseiller vous contactera soit à l’adresse <?php echo $_GET["mail"] ?></h3>
<h4>ou par téléphone au : <?php echo $_GET["tel"] ?></h4> <h5>dans les plus brefs délais pour traiter votre demande : <?php echo $_GET["message"] ?></h5>
