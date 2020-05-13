<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ma page test de formulaire</title>
  </head>
  <body>
    <p>Voici ma page web de formulaire</p>
    <form action="thanks.php" method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="name">Prénom :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="user_mail">
    </div>
    <div>
        <label for="tel">tel :</label>
        <input type="tel" id="tel" name="user_tel">
    </div>
    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
    <select>
      <option>FAQ</option>
      <option>Inscription</option>
      <option>Divers</option>
    </select>

    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
</form>
  </body>
?php
  var_dump($_GET);
?>
<?php
  echo  $_GET['user_name'];
?>
    
<?php
  header('Location: http://localhost:8000/thanks.php');
  exit();
?>

</html>
