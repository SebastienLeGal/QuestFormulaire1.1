<!DOCTYPE html>
<html>
<head>
    <title>
        Formulaire
    </title>


</head>

<body>

<form action="thanks.php" method="post">
    <div>
        <label for="prenom">Prenom : </label>
        <input type="text" id="prenom" name="prenom">
    </div>
    <br>
    <div class="c100">
        <label for="nom">Nom : </label>
        <input type="text" id="nom" name="nom">
    </div>
    <br>
    <div>
        <label for="email">E-Mail : </label>
        <input type="text" id="email" name="email">
    </div>
    <br>
    <div>
        <label for="telephone">Telephone : </label>
        <input type="text" id="telephone" name="telephone">
    </div>
    <br>
    <div>
        <label for="sujet">Sujet : </label>
        <select id="sujet" name="sujet">
            <option value="sujet1">Sujet 1</option>
            <option value="sujet2">Sujet 2</option>
            <option value="sujet3">Sujet 3</option>
        </select>
    </div>
    <br>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="message">

                </textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer le message</button>
    </div>
</form>

</body>

</html>
