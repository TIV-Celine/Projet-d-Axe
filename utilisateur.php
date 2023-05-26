<?php

$pdo = new PDO('mysql:host=localhost;dbname=twitter2', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

// Si le formulaire a été posté :
    if($_POST) {
       
        // J'affiche les infos :
        echo $_POST['nom'] . '<br>';
        echo $_POST['pseudo'] . '<br>';
        echo $_POST['email'] . '<br>';
        echo password_hash ($_POST['mdp'], PASSWORD_DEFAULT) . '<br>';
        }
?>

<hr>

<form method="post">
    <input type="text" name="nom" placeholder="Votre nom">
    <br><br>
    <input type="text" name="pseudo" placeholder="Votre pseudo">
    <br><br>
    <input type="text" name="email" placeholder="Votre email">
    <br><br>
    <input type="password" name="mdp" placeholder="Votre mot de passe">
    <br><br>
    <input type="submit" value="Envoyer">
</form>