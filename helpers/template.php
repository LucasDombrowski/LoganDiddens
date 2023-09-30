<?php
session_start();
ini_set('display_errors', '1');
function getHeader($css = NULL){
    if(isset($_SESSION["mode"])){
        $mode = $_SESSION["mode"];
    } else {
        $mode = "light";
    }?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>Logan Diddens</title>
        <link rel="icon" type="image/x-icon" href="/assets/imgs/icons/logo.png">
        <link rel="stylesheet" href="/assets/css/<?php echo $mode;?>/normalize.css">
        <link rel="stylesheet" href="/assets/css/<?php echo $mode;?>/style.css">
        <?php
        if(isset($css)){
            foreach($css as $link){?>
            <link rel="stylesheet" href="<?php echo "/assets/css/$mode/$link";?>"><?php

            }
        }
        ?>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="/assets/css/animations.css">
    </head>
    <body>
        <header>
            <a href="/" id="logo">
                <img src="/assets/imgs/LOGO.png" alt="Logo">
            </a>
            <nav id="menu" class="hidden">
                <a href="/">Accueil</a>
                <a href="/about/">à propos</a>
                <div class="undermenu">
                    <a href="/services">compétences</a>
                    <div>
                        <a href="/services/graphic/">Design graphique</a><a href="/services/photography/">photographie</a><a href="/services/audiovisual/">audiovisuel</a><a href="/services/communication/">communication</a><a href="/services/design/">UX/UI Design</a>
                    </div>
                </div>
                <a href="/works/">réalisations</a>
                <div id="lang">FR <i class='bx bx-chevron-right'></i><a href="<?php echo "/en".$_SERVER['REQUEST_URI'];?>">EN</a></div>
                <div id="mode">
                    <?php
                    if(isset($mode)){
                        if($mode == "light"){
                            echo "<img src='/assets/imgs/icons/light.png'><i class='bx bx-chevron-right'></i><a href='/changeMode.php?mode=dark'><img src='/assets/imgs/icons/dark.png'></a>";
                        } else if($mode == "dark"){
                            echo "<img src='/assets/imgs/icons/dark.png'><i class='bx bx-chevron-right'></i><a href='/changeMode.php?mode=light'><img src='/assets/imgs/icons/light.png'></a>";
                        }
                    } else {
                        echo "<img src='/assets/imgs/icons/dark.png'><i class='bx bx-chevron-right'></i><a href='/changeMode.php?mode=light'><img src='/assets/imgs/icons/light.png'></a>";

                    }
                    ?>
                </div>
                <a href="/#contact" id="contactButton" class="button">contact</a>
                
            </nav>
            <button id="burger"></button>
        </header>
    <main>

    <?php
    }
function getFooter($scripts = NULL){?>
</main>
<footer>
    <div class="container">
        <div>
            <h2>à propos</h2>
            <a href="/about/#presentation">présentation</a>
            <a href="/about/#skills">savoirs</a>
            <a href="/about/#resume">CV</a>
        </div>
        <div>
            <h2>informations légales</h2>
            <a href="/legal/general">conditions générales</a>
            <a href="/legal/data">sécurité des données</a>
            <a href="/legal/cookies">utilisation des cookies</a>
        </div>
        <div>
            <h2><a href="/#contact">contact</a></h2>
            <h2>suivez-moi</h2>
            <div class="social_networks">
                <a href="https://www.linkedin.com/in/logan-diddens-50a61b250"><i class='bx bxl-linkedin'></i></a>
                <a href="https://instagram.com/logandiddens?igshid=NGVhN2U2NjQ0Yg=="><i class='bx bxl-instagram' ></i></a>
                <a href="https://twitter.com/Logan8183755772"><img src="/assets/imgs/icons/x-twitter.svg" alt="X"></a>
            
            </div>
        </div>
    </div>
    <em>Logan Diddens © 2023</em>
</footer>
<script src="/assets/js/loader.js"></script>
<script src="/assets/js/burger.js"></script>
<script src="/assets/js/animation.js"></script>

<?php
if(isset($scripts)){
        foreach($scripts as $script){?>
        <script src="<?php echo "/assets/js/$script";?>"></script><?php

        }
    }
        ?>
</body>
</html>
<?php
}?>