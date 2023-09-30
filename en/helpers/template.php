<?php
session_start();
function getHeader($css = NULL){
    if(isset($_SESSION["mode"])){
        $mode = $_SESSION["mode"];
    } else {
        $mode = "dark";
    }?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <a href="/en/" id="logo">
                <img src="/assets/imgs/LOGO.png" alt="Logo">
        </a>
            <nav id="menu" class="hidden">
                <a href="/en/">home</a>
                <a href="/en/about">about me</a>
                <div class="undermenu">
                    <a href="/en/services/">services</a>
                    <div>
                        <a href="/en/services/graphic">graphic design</a><a href="/en/services/photography/">photography</a><a href="/en/services/audiovisual/">audiovisual</a><a href="/en/services/communication">communication</a><a href="/en/services/design/">ux/ui design</a>
                    </div>
                </div>
                <a href="/en/works/">works</a>
                <div id="lang">EN <i class='bx bx-chevron-right'></i><a href="<?php echo str_replace("/en","",$_SERVER['REQUEST_URI']);?>">FR</a></div>
                <div id="mode">
                    <?php
                    if(isset($_SESSION["mode"])){
                        if($_SESSION["mode"] == "light"){
                            echo "<img src='/assets/imgs/icons/light.png'><i class='bx bx-chevron-right'></i><a href='/changeMode.php?mode=dark'><img src='/assets/imgs/icons/dark.png'></a>";
                        } else if($_SESSION["mode"] == "dark"){
                            echo "<img src='/assets/imgs/icons/dark.png'><i class='bx bx-chevron-right'></i><a href='/changeMode.php?mode=light'><img src='/assets/imgs/icons/light.png'></a>";
                        }
                    } else {
                        echo "<img src='/assets/imgs/icons/dark.png'><i class='bx bx-chevron-right'></i><a href='/changeMode.php?mode=light'><img src='/assets/imgs/icons/light.png'></a>";

                    }
                    ?>
                </div>
                <a href="/en/#contact" id="contactButton" class="button">contact</a>
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
            <h2>about me</h2>
            <a href="/en/about/#presentation">presentation</a>
            <a href="/en/about/#skills">skills</a>
            <a href="/en/about/#resume">resume</a>
        </div>
        <div>
            <h2>legal information</h2>
            <a href="/en/legal/general">general policy</a>
            <a href="/en/legal/data">data security</a>
            <a href="/en/legal/cookies">use of cookies</a>
        </div>
        <div>
            <h2><a href="/en/#contact">contact</a></h2>
            <h2>follow me</h2>
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