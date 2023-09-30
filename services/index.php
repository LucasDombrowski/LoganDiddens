<?php
include("../helpers/template.php");
getHeader(["services/services.css"]);
?>
<section id="services">
    <div class="container">
        <h1>compétences</h1>
        <h2>Vous avez toujours une raison de me faire travailler.</h2>
        <div class="cards">
            <div class="wrapper"><div id="caroussel">
            <div class="card">
                    <div><div><h3>Design Graphique</h3>
                    <p>Création d'identités graphiques, de posters, et de visuels pour les médias de communication.</p>
                    <a href="graphic/"><i class='bx bx-right-arrow-alt' ></i></a></div>
                    <img src="/assets/imgs/services/graphic.png" alt="Design Graphique">
                    <h4>Design <br>Graphique</h4></div>
                </div>
                <div class="card">
                    <div><div><h3>Audiovisuel</h3>
                    <p>Transformez vos idées en vidéos dynamiques. La créativité en action, des moments immortalisés avec brillance.</p><a href="audiovisual/"><i class='bx bx-right-arrow-alt' ></i></a></div>
                    <img src="/assets/imgs/services/audiovisual.png" alt="Audiovisuel"><h4>audiovisuel</h4></div>
                    
                </div>
                <div class="card">
                    <div><div><h3>photo</h3>
                    <p>Des moments magiques. Capturons des sourires et des émotions dans des images intemporelles. Votre histoire en images.</p><a href="photography/"><i class='bx bx-right-arrow-alt' ></i></a></div>
                    <img src="/assets/imgs/services/photography.png" alt="Photographie"><h4>photographie</h4></div>
                    
                </div>
                <div class="card">
                    <div><div><h3>stratégie de <br>communication</h3>
                    <p>Communiquez avec de l'impact. Designons ensemble des stratégies impactantes. Votre message, notre succès.</p><a href="communication/"><i class='bx bx-right-arrow-alt' ></i></a></div>
                    <img src="/assets/imgs/services/communication.png" alt="Communication"><h4>stratégie de <br>communication</h4></div>
                    
                </div>
                <div class="card">
                    <div><div><h3>Design UX/UI</h3>
                    <p>Une expérience unique, un design vibrant. Mélangez beauté et expérience utilisateur. Votre interface, ma créativité frappante.</p><a href="design/"><i class='bx bx-right-arrow-alt' ></i></a></div>
                    <img src="/assets/imgs/services/design.png" alt="Design UX/UI"><h4>Design <br>UX/UI</h4></div>
                    
                </div>

            </div></div>
        </div>
    </div>
</section>
<?php
getFooter(["services/services.js"]);
?>