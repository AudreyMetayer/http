<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
 <title>HTTP Template</title>
</head>

<body>

<?php

$errors = [];
$NameError  = $_POST['name'];
$firstnameError = $_POST['firstname'];
$emailError     = $_POST['email'];
$phoneError     = $_POST['phone'];
$subjectError   = $_POST['subject'];
$messageError   = $_POST['message'];


if (empty($NameError)) {
    $errors ['name'] = "Entrez votre nom." ;
    echo $errors ['name'] . "<br>";
}
if (empty($firstnameError)) {
    $errors ['firstname'] = " Entrez votre prénom." ;
    echo $errors ['firstname'] . "<br>";
}
if (!filter_var($emailError, FILTER_VALIDATE_EMAIL)) {
    $errors ['email'] = "Email invalide ou non renseigné.";
    echo $errors ['email'] . "<br>";
}
if (empty($phoneError)) {
    $errors ['phone'] = "Entrez votre téléphone" ;
    echo $errors ['phone'] . "<br>";
}
if (empty($subjectError)) {
    $errors ['subject-select'] = "Sélectionnez votre sujet" ;
    echo $errors ['subject'] . "<br>";
}
if (empty($messageError)) {
    $errors ['message'] = "Entrez votre message" ;
    echo $errors ['message'] . "<br>";
}
if (count($errors) === 0) {
    echo  "Merci " . $_POST["firstname"] . " " . $_POST["lastname"] . " de nous avoir contacté à propos de " .  $_POST["subject"] .
        ". Un de nos conseiller vous contactera soit à l’adresse " . $_POST["email"] . " ou par téléphone au " . $_POST["phone"] . " dans les plus brefs délais pour traiter votre demande : " . $_POST["message"] ;
}

?>


</body>
</html>