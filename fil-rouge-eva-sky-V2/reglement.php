<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reglement - EvaSky</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" sizes="16x16" href="Assets/img/Eva3.png">
</head>
<body>
    
<nav>
        <ul>
            <li id="li1">
                <a href="index.php" >
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
                <a href="reglement.php" class="actuellement">
                    Reglement
                </a>
            </li>
            <?php 
                if (isset($_SESSION['id'])) {?>
                <li class="active">
                    <a href="profil.php?id=<?php echo $_SESSION['id'] ; ?>" id="bleu">Mon profil</a>
                </li>
            <?php }  else { ?>
                <li class="active">
                    <a href="connexion.php" id="bleu">Connexion</a>
                </li>
            <?php } ?> 
        </ul>
        <hr>
    </nav>

    <main>
        <h1>
            Règlement du serveur
        </h1>

        <div>
            <div class="n1">
                <h1>
                Afin de rendre votre expérience de jeu et celle des autres joueurs optimales, il est nécessaire de respecter un certain nombre de règles. Ces règles   s'appliquent sur l'ensemble du serveur <span>EvaSky</span> et sont valables pour toute personne. Le non-respect des règles présentées ci-dessous pourra entraîner des   sanctions, voire un bannissement permanent de tous nos serveurs. Le présent règlement est entré en vigueur le mardi 2 mars 2022.
                <br><br>
                Tout joueur se connectant sur le serveur <span>EvaSky</span> est considéré comme l'ayant accepté.
                <br><br>
                <span class="souligner">Ce règlement est susceptible d'être modifié à tout moment.</span>
                </h1>
            </div>
            <div class="reglementdiv">
                <H2>
                    I – Vous êtes responsable de votre compte
                </H2>
                <p>
                Vous êtes entièrement responsable de la sécurité de votre compte Minecraft. EvaSky ne prend aucune part de responsabilité si celui-ci venait à être      piraté, ou utilisé par un membre tiers. Si une règle est enfreinte par un compte vous appartenant, celui-ci subira la punition adéquate, et ce, sans exception.
                </p>
            </div>
            <div class="reglementdiv">
                <H2>
                    II – La publicité 
                </H2>
                <p>
                Tout partage d'adresse IP, adresse web dans le chat public, en message privé, ou sous quelconque autre forme est strictement interdit. Toute forme de publicité est interdite, même si celle-ci n'a pas de lien à votre personne. Il est formellement interdit de diffuser quelconque screamer, ou lien vers des sites pornographiques.
                </p>
            </div>
            <div class="reglementdiv">
                <H2>
                    II BIS – La publicité en jeu
                </H2>
                <p>
                Toute publicité liée au serveur (ventes d'objets, shop, warp, îles...) est limitée à une fois toutes les 30 minutes par île et non par membre , cela a pour but d'éviter le spam massif dans le chat général qui reste toujours un lieu d'échanges et de discussion. Si cette règle venait à être enfreinte, des sanctions en découleraient.
                <br><br>
                <span class="souligner">
                Le message du /b comprenant tout type de pub précédemment cité pourra également entraîner des sanctions.
                </span>
                </p>
            </div>
            <div class="reglementdiv">
                <H2>
                    III – L'usurpation d'identité
                </H2>
                <p>
                Il est formellement interdit de prétendre être une personne que vous n'êtes pas. L'usurpation de l'identité d'un YouTuber, d'un membre du Staff doté de permissions particulières, ou d'un proche de ces derniers est fortement condamnable. Chaque membre de l'Equipe possède un grade particulier, permettant de les différencier d'un joueur, quel que soit son grade, évitant ainsi tout problème de confusion.
                </p>
            </div>
            <div class="reglementdiv">
                <H2>
                    IV – Le spam et les majuscules
                </H2>
                <p>
                Tout type de spam est interdit. Il est de cette manière interdit de poster une série de messages dénués de sens et inutiles, ayant pour seul effet de flooder le chat et de gêner les autres joueurs. Les messages contenant un nombre trop important de majuscules sont considérés comme du spam, rendant le chat illisible. Le spam peut néanmoins être toléré dans certains cas particuliers tel qu'un moment événementiel, dans la limite du raisonnable.
                </p>
            </div>
            <div class="reglementdiv">
                <H2>
                    V – Le langage
                </H2>
                <p>
                Lorsque vous vous exprimez aux autres dans le chat, vous leur devez le respect. Tout langage de type offensant, insultant, incitant à la violence, à la haine est à proscrire, apportant une ambiance néfaste et dégradante. Le langage SMS est déconseillé. Si un Staff juge votre comportement dans le chat inadapté, vous serez sanctionné temporairement ou définitivement en fonction de la gravité de l'acte.
                </p>
            </div>
            <div class="reglementdiv">
                <H2>
                    
                </H2>
                <p>

VI – Respectez les joueurs

Nous sommes tous des joueurs, cherchant à passer un bon moment en jouant sur EvaSky. Il vous est donc demandé d'être respectueux envers les autres. N'écrivez rien susceptible de blesser quelqu'un, d'impoli, ou d'incorrect, et ce, peu importe votre grade. Toute atteinte à la vie privée est punie. La discrimination sous quelconque forme, le racisme, le sexisme, le sectarisme et le harcèlement sont formellement interdits.





VII – Le serveur vocal Discord

 Le serveur Discord est soumis à un règlement strict que vous pouvez retrouver à chacune de vos connexions. Tout joueur se connectant au serveur Discord se doit de les respecter.





VIII – Les transferts d'argent & d'objets

 Il est totalement interdit de vendre des services, des objets ou de l'argent en jeu contre une transaction monétaire réelle ou contre des euros boutique. Vous pouvez le faire uniquement avec de l'argent en jeux ($).





Si un joueur enfreint ces règles, il sera immédiatement banni définitivement de notre plateforme sans retour possible.

          

IX – Les skins et capes inappropriés



Tout skin ou cape inapproprié, c'est-à-dire pouvant potentiellement porter atteinte aux autres utilisateurs, étant offensants, à caractère sexuel, à connotation politique ou religieuse sont prohibés.





X – Les pseudonymes inappropriés



Tout pseudonyme à caractère sexuel, dégradant, discriminatoire, insultant ou à connotation politique ou religieuse sera sanctionné par un bannissement définitif.

L'usurpation de pseudonyme (joueurs, staff ...) avec la commande "/nick" est également sanctionnable. Une demande de débannissement est possible en envoyant un mail à l'adresse azraheal@EvaSky.

      

Nous rappelons que l'équipe de EvaSky est seul juge quant à ce que nous considérons comme tel.

               

XI – Le hack et la modification du client

  Le hack et la modification du client sont interdits et punis d'un bannissement définitif. Toute modification du jeu susceptible d'aider un joueur en lui donnant un avantage certain face à ses adversaires jouant en version vanilla est donc à proscrire. Votre grade ne sera pas remboursé en cas de bannissement, et aucun transfert de monnaie, de grade ou quelconque autre avantage vers un éventuel nouveau compte ne sera effectué.

      

• Modifications autorisées :

- Les mods proposant une amélioration purement esthétique, tel que ShaderMod.

- Les mods permettant une amélioration des performances de jeu, tel que OptiFine.

- La modification du gamma depuis le fichier "options.txt" du \.minecraft.

- Le mod Schematica (Le printer est formellement INTERDIT).

- Les mods minimap.

          

• Modifications interdites (liste non-exhaustive) :

- Les mods donnant un avantage au joueur dans ses agissements, voire les automatisant (ex: forcefield, autosneak...).

- Les mods et ressourcepacks donnant au joueur des données supplémentaires qui ne sont pas visibles (ex: Xray, Radar Chest Mod).

- Les mods permettant au joueur de voler ou d'augmenter sa vitesse de marche.

- Les macros et mods macro donnant un avantage au joueur l'utilisant. Ils peuvent néanmoins être utilisés par le Staff, pour une utilisation dans le chat.

- Les mods permettant de supprimer les dégâts de chute.

- Les mods donnant des informations quelconques sur son inventaire, alors que celui-ci n'est pas accessible (ex: BetterPvP).

- Tout mod donnant un quelconque avantage au PvP face à un joueur vanilla.

          

Un mod non présent dans cette liste, et ne servant pas à améliorer les performances ou graphismes est interdit. Dans le cas où vous souhaiteriez utiliser un mod n'étant dans aucune des deux listes, adressez-vous à l'équipe de modération.

      

XII – Les escroqueries / pillages / grief / TP KILL

 Toute tentative d'escroquerie en relation avec la boutique d’EvaSky, ainsi que toute tentative de vente de compte Minecraft, de grade ou monnaie proposé par le serveur, est formellement interdite. Toutes formes d'arnaques sont interdites dans le HDV (Hôtel Des Ventes), la vente d'item bugé sur l'HDV peut devenir un motif de bannissement.

Toute tentative d'escroquerie, de pillage, de grief, TP Kill ou abus de confiance pour voler des objets sera sanctionnée d'un bannissement temporaire de la plateforme (ou définitif si le staff en décide ainsi).

          

XIII – L'exploitation de bug

L'exploitation d'un bug présent sur le serveur est interdite et peut être sanctionnée. Il vous est demandé de nous informer des problèmes présents sur le serveur depuis notre discord ou par mail à l'adresse azraheal@EvaSky.fr, dans le but d'améliorer l'expérience de jeu de tous les joueurs.

Si un joueur enfreint cette règle, il sera immédiatement banni définitivement de notre plateforme sans retour possible.

          

XIV – Contournement de l'anti AFK

Tout moyen de contourner l'anti AFK (machine, logiciel, use bug, auto clique, macro) est strictement interdit. Cette règle est également valable pour les usines/machines AFK, si vous ne répondez pas à un membre du staff qui vous mentionne à plusieurs reprises dans le chat ou en message privé vous serez sanctionnés pour AFK.

Le staff se réserve le droit de réinitialiser totalement l'inventaire du joueur ainsi que la progression faite en AFK (Métiers/Récompenses).

les usines à pêche semi-AFK sont autorisées

          

XV – Remboursement en jeu

 Le Staff ne rembourse en aucun cas des items perdus (peu importe la raison).

      

XVI – Changement de Pseudo

 Si vous changez votre pseudo Minecraft, connectez-vous sur notre site avec votre ancien pseudo ou directement sur le serveur pour l’actualiser. Il n’y a aucune manipulation à faire en jeu c’est automatique.

      

XVII – Double comptes

 Chaque compte doit être associé à une personne physique. Le non-respect de cette règle peut être sanctionné par un reset complet du joueur et bannissement de la plateforme.

      

XVIII – Sanctions applicables

 Les sanctions appliquées sur le serveur (en jeu) sont susceptibles d'aboutir à une ou plusieurs sanctions sur le serveur vocal (Discord) si les fautes commises par le joueur sont jugées graves.

      

XIX - L'exploitation de failles

L'exploitation de failles de sécurité venant d’EvaSky ou de Mojang dans le but de nuire au serveur ou à autrui est interdite et sévèrement punie. Cela entrainera un bannissement définitif de la plateforme ainsi qu'un reset global du compte en question, ainsi que des personnes en relation avec le joueur en question.

      

Nous rappelons que l'équipe de EvaSky est seul juge quant à ce que nous considérons comme tel.

          

toute pratique nuisant au plaisir de jeu des joueurs par quelconque manière est prohibée, et pourra être sanctionnée.

          

MAIL: azraheal@eva-sky.fr

DISCORD: https://discord.gg/nyNX7wEGvt
                </p>
            </div>
        </div>
        
    </main>



    <footer>
        <div>
            <div>
                <h1>
                    A PROPOS
                </h1>
                <p>
                    Le serveur Eva Sky n'est pas affilié à mojang AB.
                </p>
                <a href="reglement.php">Condition générales de vente</a>
                <a href="reglement.php">Mention légales</a>
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
                    En soutenant le serveur, vous permettez le développement d'un meilleurs serveurs et de nouvelle maps! <span>Merci à vous !</span>
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

</body>
</html>