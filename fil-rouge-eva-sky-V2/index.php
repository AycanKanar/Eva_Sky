<?php
session_start();
?> 

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" sizes="16x16" href="Assets/img/Eva3.png">
    <title>Eva Sky</title>
    <!-- azraheal20 -->
    <!-- fannybenzama -->
</head>

<body>
    <nav>
        <div class="navbar">
            <div class="container nav-container">
                <input class="checkb" type="checkbox" name="" id="" />
                <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div>
                <ul class="menu-items">
                    <li id="li1">
                        <a href="index.php" class="actuellement">
                            <img src="Assets/img/Eva3.png" alt="">
                            <p>Accueil</p>
                        </a>
                    </li>
                    <li id="li2">
                    </li>
                    <li>
                        <a href="boutique.php">
                            Boutique
                        </a>
                    </li>
                    <li>
                        <a href="vote.php">
                            Vote
                        </a>
                    </li>
                    <li>
                        <a href="forum.php">
                            Forum
                        </a>
                    </li>
                    <li>
                        <a href="reglement.php">
                            Reglement
                        </a>
                    </li>
                    <?php
                    if (isset($_SESSION['id'])) { ?>
                        <li class="active">
                            <a href="profil.php?id=<?php echo $_SESSION['id']; ?>" id="bleu">Mon profil</a>
                        </li>
                    <?php } else { ?>
                        <li class="active">
                            <a href="connexion.php" id="bleu">Connexion</a>
                        </li>
                    <?php } ?>
                </ul>
                <hr>
            </div>
        </div>
    </nav>

<?php
// $countMbr = $bdd->query('SELECT * FROM membres');
// $nbrMembres = $countMbr->rowCount();
?>

    <section>
        <div>
            <h2>
                Votre server pr??f??r?? enfin la !
            </h2>
            <h3>
                Nouveau : Gun Gale Online
            </h3>
            <p>
                <!-- Rejoins les <?php echo $nbrMembres ?> joueur inscrit -->
            </p>
            <a href="https://discord.gg/sXEPHuyZgE">
                <button class="discordbtn">
                    Discord
                </button>
            </a>
                <button class="playbtn" id="playbtnanim" onclick="copy()">
                    PLAY.EVA-SKY.FR
                </button>
                <p>
                Joueur en ligne : 17
            </p>
        </div>
        <div>
            <img src="Assets/img/Eva3.png" alt="" class="imgbase">
            
        </div>
    </section>



    <section class="secactus">
        <h3>
            Actus
        </h3>
        <div class="divactustout">
            <div class="imgactus1">
                <div>
                    <h6>La saison 10 du SKYBLOCK est d??sormais disponible! ????</h6>
                    <a href="">Voir plus <span>>> </span></a>
                </div>
            </div>
        </div>
        <div class="divactustout">
            <div class="imgactus2">
                <div>
                    <h6>Nouvelle armes et spawn sur GunGaleOnline !!</h6>
                    <a href="">Voir plus <span>>> </span> </a>
                </div>
            </div>
        </div>
        <div class="divactustout">
            <div class="imgactus3">
                <div>
                    <h6>Nouvelle armes et spawn sur GunGaleOnline !!</h6>
                    <a href="">Voir plus <span>>> </span> </a>
                </div>
            </div>
        </div>
    </section>

    <section class="votett">
        <div class="classement">
            <p class="pclassement1">
                Classement des votes
            </p>
            <p class="pclassement2">
                Vous pouvez voter sur les serveurs pour gagner des r??compenses unique ainsi que des VotesPoints pour acheter des objets sur le site !
            </p>
        </div>
        <div id="casevote">
            <!-- tetes des meilleurs voteur -->
            <div class="vote" id="vote1">
                <div class="votediv">
                    <img src="https://mc-heads.net/avatar/azraheal/40.png" alt="">
                </div>
                <div class="voteclass">
                    <h2>
                        2??me
                    </h2>
                    <p>
                        Nom du Joueur
                    </p>
                </div>
            </div>
            <div class="vote" id="vote2">
                <div class="votediv">
                    <img src="https://mc-heads.net/avatar/eihlen/40.png" alt="">
                </div>
                <div class="voteclass">
                    <h2>
                        1ier
                    </h2>
                    <p>
                        Nom du Joueur
                    </p>
                </div>
            </div>
            <div class="vote" id="vote3">
                <div class="votediv">
                    <img src="https://mc-heads.net/avatar/badwolf831/40.png" alt="">
                </div>
                <div class="voteclass">
                    <h2>
                        3??me
                    </h2>
                    <p>
                        Nom du Joueur
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="flex">
        <div id="carte-tout">
            <div class="carte-container">
                <div class="carte">
                    <div class="face face1">
                        <div class="interieur-carte">
                            <img src="assets/img/equipe.png">
                            <h3>Une ??quipe passionn??e !</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="interieur-carte">
                            <p>??paul??e par un staff mature et exp??riment?? ainsi qu'une ??quipe de d??veloppeurs passionn??e, depuis maintenant 3 ans nous avons pour objectif de vous apporter la meilleure exp??rience de jeu possible tout en ajoutant des nouveaut??s r??guli??rement.</p>
                        </div>
                    </div>
                </div>
                <div class="carte">
                    <div class="face face1">
                        <div class="interieur-carte">
                            <img src="assets/img/cpu.png">
                            <h3>Les meilleures performances</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="interieur-carte">
                            <p>Localis?? dans une infrastructure puissante et hautement s??curis??e chez le leader des h??bergements de machines hautes qualit??s, OVH nous permet de vous garantir des performances optimales.</p>
                        </div>
                    </div>
                </div>
                <div class="carte">
                    <div class="face face1">
                        <div class="interieur-carte">
                            <img src="assets/img/creep.png">
                            <h3>
                                Un gameplay unique !</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="interieur-carte">
                            <p>Une multitude d'ajouts (Spawner, Qu??tes ??volutives, Grades & Avantages achetables en jeu, +20 Objets custom ...) pour vous permettre de profiter et de progresser un maximum sur notre plateforme.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <footer>
        <div>
            <div>
                <h1>
                    A PROPOS
                </h1>
                <p>
                    Le serveur Eva Sky n'est pas affili?? ?? mojang AB.
                </p>
                <a href="reglement.php">Condition g??n??rales de vente</a>
                <a href="reglement.php">Mention l??gales</a>
            </div>
            <div>
                <h1>
                    LIENS UTILES
                </h1>
                <a href="Acueil.php">Acueil</a>
                <hr>
                <a href="Forum.php">Forum</a>
                <hr>
                <a href="Boutique.php">Boutique</a>
            </div>
            <div>
                <h1>
                    NOUS SUPPORTER
                </h1>
                <p>
                    En soutenant le serveur, vous permettez le d??veloppement d'un meilleurs serveurs et de nouvelle maps! <span>Merci ?? vous !</span>
                </p>

            </div>
        </div>
        <hr>
        <div>
            <h2>
                Eva Sky 2022
            </h2>
        </div>
    </footer>
    <script src="Assets/js/color.js"></script>
    <script src="Assets/js/copy.js"></script>
</body>


</html>