<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ma page test de formulaire</title>
  </head>
  <body>
    <p>Voici ma page web de formulaire</p>
    <form action="thanks.php" method="GET">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name">
    </div>
    <div>
        <label for="Prénom">Prénom :</label>
        <input type="text" id="prenom" name="prenom">
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="mail">
    </div>
    <div>
        <label for="tel">tel :</label>
        <input type="tel" id="tel" name="tel">
    </div>
    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="message"></textarea>
    </div>

    <label for="Sujet">Sujet :</label>
    <select name="Sujet" id="Sujet">
      <option>FAQ</option>
      <option>Inscription</option>
      <option>Divers</option>
    </select>


    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
</body>
</form>


</html>

