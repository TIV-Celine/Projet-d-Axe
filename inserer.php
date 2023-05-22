<?php

var_dump($_POST);

/* echo "<h1>J'ai tweeté ceci : ";
echo $_POST["montweet"];
echo "</h1>";
*/

// Version concaténée
echo "<h1>J'ai tweeté ceci : " . $_POST['montweet'], "</h1>";

// Connexion à la base de données PDO
$database = new PDO('mysql:host=localhost;dbname=twitter2', 'root', 'root');


$jeveuxinserer = $database->prepare(' INSERT INTO tweets (tweets) VALUES (:gfaim) ');
$jeveuxinserer->execute(['gfaim' => $_POST['montweet']]);

header("Location: index.php");