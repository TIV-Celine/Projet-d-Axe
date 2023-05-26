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
          <!-- Sidebar -->
          <div id="mySidebar" class="sidebar">
            <!-- Fermeture Sidebar -->
            <a href="#" class="closebtn" onclick="closeNav()">&times;</a>
            <!-- Logo dans Sidebar -->
            <div class="logo">
                <img src="img/twitter_socialnetwork_20007.png" alt="">
                <span class="logo-name">Twitter</span>
            </div>
            <!-- Liste dans Sidebar -->
            <div class="sidebar-content">
                <ul class="lists">
                    <li class="list">
                        <a href="#" class="nav-link ">
                            <img src="img/home_icon-icons.com_73532.png" alt="">
                            <span class="link">Accueil</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="#" class="nav-link ">
                            <img src="img/alarm_alert_attention_bell_clock_notification_ring_icon_123203.png" alt="">
                            <span class="link">Notification</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="#" class="nav-link ">
                            <img src="img/4092564-about-mobile-ui-profile-ui-user-website_114033.png" alt="">
                            <span class="link">Profil</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="#" class="nav-link ">
                            <img src="img/massage_icon_176650.png" alt="">
                            <span class="link">Message</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="#" class="nav-link ">
                            <img src="img/4552621-bookmark-favorite-site-website_121402.png" alt="">
                            <span class="link">Bookmarks</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="#" class="nav-link ">
                            <img src="img/32officeicons-21_89726.png" alt="">
                            <span class="link">List</span>
                        </a>
                    </li>
                </ul>
                <div class="bottom-cotent">
                  <li class="list">
                      <a href="#" class="nav-link ">
                          <img src="img/1904675-configuration-edit-gear-options-preferences-setting-settings_122525.png" alt="">
                          <span class="link">Paramètre</span>
                      </a>
                  </li>
                  <li class="list">
                      <a href="#" class="nav-link ">
                          <img src="img/logout_bracket_icon_149439.png" alt="">
                          <span class="link">Déconnexion</span>
                      </a>
                  </li>
                </div>
            </div>
          </div>
          <div id="main">
            <!-- Ouverture Sidebar -->
            <button class="openbtn" onclick="openNav()">&#9776; Open</button>
           
          </div>
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
            <br> <br>
            <!-- Carte du contenu -->
            <div class="card-container">
        <div class="card-top">
          <div class="description">
            <h1>Mario</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, quos.</p>
          </div>
        </div>
        <div class="card-bottom d-flex justify-content-between">
          <img src="img/Mario.jpg" alt="image1" class="w-25">
        </div>
       </div>
        </main>
        <aside>
        <!-- Tags -->
        <div class="wrapper">
        <div class="title">
            <img src="img/tags_categories_icon_145927.png" alt="tag-icon">
            <h1>Tags</h1>
        </div>
        <div class="content">
            <p>Veuillez saisir votre tag</p>
            <div class="tag-box">
                <ul>
                    <li>html <i class="uit uit-multiply"></i></li>
                    <li>css <i class="uit uit-multiply"></i></li>
                    <input type="text">
                </ul>
            </div>
        </div>
        <div class="detail">
            <button>Remove all</button>
        </div>
    </div>
        <!-- floating avec le contenu de lorem -->
        <button class="floating-btn">
                <img src="img/questionincircularbutton_80033.png" alt="">
                <p class="tooltip">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, voluptates.</p>
            </button>
        </aside>
    </div>
    <script src="js/script.js"></script>
    <script src="js/tags.js"></script>

</body>
</html>