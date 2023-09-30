<?php
include("../helpers/template.php");
getHeader(["services/services.css"]);
?>
<section id="services">
    <div class="container">
        <h1>services</h1>
        <h2>You always have a reason to make me work.</h2>
        <div class="cards">
            <div class="wrapper"><div id="caroussel">
            <div class="card">
                    <div><div><h3>graphic <br>design</h3>
                    <p>Creating graphics identities, posters, visuals and communication media.</p>
                    <a href="graphic/"><i class='bx bx-right-arrow-alt' ></i></a></div>
                    <img src="/assets/imgs/services/graphic.png" alt="Graphuc Design">
                    <h4>Graphic <br>Design</h4></div>
                </div>
                <div class="card">
                    <div><div><h3>audiovisual</h3>
                    <p>Turn your ideas into dynamic videos. Creativity in action, moments immortalised with brillance.</p><a href="audiovisual/"><i class='bx bx-right-arrow-alt' ></i></a></div>
                    <img src="/assets/imgs/services/audiovisual.png" alt="Audiovisual"><h4>audiovisual</h4></div>
                    
                </div>
                <div class="card">
                    <div><div><h3>photo</h3>
                    <p>Magical moments. Let's capture smiles and emotions in timeless images. Your story in pictures.</p><a href="photography/"><i class='bx bx-right-arrow-alt' ></i></a></div>
                    <img src="/assets/imgs/services/photography.png" alt="Photography"><h4>photography</h4></div>
                    
                </div>
                <div class="card">
                    <div><div><h3>Communication<br>strategy</h3>
                    <p>Communicate with impact. Let's design impactful strategies together. Your message, our success.</p><a href="communication/"><i class='bx bx-right-arrow-alt' ></i></a></div>
                    <img src="/assets/imgs/services/communication.png" alt="Communication strategy"><h4>Communication <br>strategy</h4></div>
                    
                </div>
                <div class="card">
                    <div><div><h3>UX/UI <br>Design</h3>
                    <p>Unique experience, vibrant design. Merging beauty and user-friendliness. Your interface, my striking creativity.</p><a href="design/"><i class='bx bx-right-arrow-alt' ></i></a></div>
                    <img src="/assets/imgs/services/design.png" alt="UX/UI Design"><h4>UX/UI <br>Design</h4></div>
                    
                </div>

            </div></div>
        </div>
    </div>
</section>
<?php
getFooter(["services/services.js"]);
?>