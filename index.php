<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="ma-grande-boite">
        <nav>
          
        </nav>
        <main>
            <form method="POST" action="inserer.php">
                <input type="text" name="montweet" id="">
                <button type="submit">Tweeter !</button>
            </form>

            <?php 
            // Connexion à la base de données PDO
            $database = new PDO('mysql:host=localhost;dbname=twitter2', 'root', 'root');
            // Get all tweets with prepred statement
            $jeveuxlesdonnes = $database->prepare(' SELECT * FROM tweets ');
            $jeveuxlesdonnes->execute();
            $lesdonnes = $jeveuxlesdonnes->fetchAll();

            // display all tweets
            foreach ($lesdonnes as $tweet) {
                echo "<p>" . $tweet['tweets'] . "</p>";
            }
            ?>
        </main>

        <aside>

        </aside>
   
    </div>
</body>
</html>