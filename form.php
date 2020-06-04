<!DOCTYPE html>
<?php
function test_input($data) : string
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$nomErr = $prenomErr = $emailErr = $telErr = $messageErr = $sujetErr = "";
$nom = $prenom = $email = $tel = $message = $sujet = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arrayOfValidValues = ["sujet1", "sujet2", "sujet3"];
    if (empty($_POST["nom"])) {
        $nameErr = "Veuillez entrer un nom";
    } else {
        $name = test_input($_POST["name"]);
    }
    if (empty($_POST["surname"])) {
        $firstNameErr = "Veuillez entrer un prenom";
    } else {
        $firstName = test_input($_POST["prenom"]);
    }
    if (empty($_POST["email"])) {
        $emailErr = "Veuillez entrer une adresse email";
    } else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "E-mail invalide";
    } else {
        $email = test_input($_POST["email"]);
    }
    if (empty($_POST["telephone"])) {
        $telErr = "Veuillez entrer un numéro de téléphone";
    } else {
        $tel = test_input($_POST["phone"]);
    }
    if (empty($_POST["subjet"]) || !in_array($_POST["subjet"], $arrayOfValidValues)) {
        $subjectErr = "Veuillez choisir un sujet";
    } else {
        $subject = test_input($_POST["subjet"]);
    }
    if (empty($_POST["message"])) {
        $messageErr = "Veuillez entrer un message";
    } else {
        $message = test_input($_POST["message"]);
    }
    if ($nomErr . $prenomErr . $emailErr . $telErr . $sujetErr . $messageErr === "") {
        $_SESSION['surname'] = $firstName;
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $tel;
        $_SESSION['subjet'] = $subjet;
        $_SESSION['message'] = $message;
    }
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
</head>
<body>
<form  action="thanks.php"  method="post">
    <div>
        <label  for="nom">Nom :</label>
        <input  type="text"  id="nom"  name="nom" required>
        <span class="error"><?php echo $nameErr ?></span>
    </div>
    <div>
        <label  for="prenom">Prenom :</label>
        <input  type="text"  id="prenom"  name="prenom" required>
        <span class="error"><?php echo $firstNameErr ?></span>
    </div>
    <div>
        <label for="email">E-Mail : </label>
        <input  type="text"  id="email"  name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
        <span class="error"><?php echo $emailErr ?></span>
    </div>
    <div>
        <label  for="tel">Téléphone :</label>
        <input  type="tel"  id="tel"  name="telephone" required>
        <span class="error"><?php echo $telErr ?></span>
    </div>
    <div>
        <label for="sujet">Sujet : </label>
        <select id="sujet" name="sujet">
            <option value="sujet1">Sujet 1</option>
            <option value="sujet2">Sujet 2</option>
            <option value="sujet3">Sujet 3</option>
        </select>
        </label>
        <span class="error"><?php echo $subjectErr ?></span>
    </div>
    <div>
        <label  for="message">Message :</label>
        <textarea  id="message"  name="message" required></textarea>
        <span class="error"><?php echo $messageErr ?></span>
    </div>
    <div >
        <button  type="submit" id="submit" name="submit">Envoyer votre message</button>
    </div>
</form>
</body>
</html>
