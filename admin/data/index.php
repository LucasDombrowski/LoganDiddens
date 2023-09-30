<?php
include("helpers/template.php");
include("helpers/database.php");
$query = $pdo -> prepare("SELECT * FROM works");
$query -> execute();
$allWorks = $query -> fetchall();
$works = [];
foreach($allWorks as $work){
    $work["images"] = glob("assets/imgs/projects/".$work["id"]."/*.*");
    array_pop($allWorks);
    $allWorks[] = $work;
    $works[$work["category"]][] = $work;
}
$query = $pdo -> prepare("SELECT * FROM partners");
$query -> execute();
$partners = $query -> fetchall();
getHeader(["index.css"]);?>
<section id="home">
    <div id="video">
            <video src="/assets/videos/Portfolio.mp4" controls></video>
            <button class="button" onclick="document.getElementById('video').style.display = 'none'">fermer</button>
    </div>
    <div class="container">
        <div class="text">
            <p>bonjour, mon nom est</p>
            <h1>logan<br><span>diddens</span></h1>
            <h2>Je suis &nbsp;<span id="typing"></span></h2>
            <div class="buttons">
                <a href="/assets/imgs/CV_FR.png" class="button" download>télécharger cv</a>
                <button class="button" onclick="document.getElementById('video').style.display = 'flex'">voir vidéo</button>
            </div>
        </div>
        <div class="photo">
            <a href="/about/"><img src="/assets/imgs/photos/logan1.png" alt="Logan Diddens"></a>
        </div>
        <div class="socialNetworks">
            <a href="https://instagram.com/logandiddens?igshid=NGVhN2U2NjQ0Yg=="><i class='bx bxl-instagram' ></i></a><a href="https://twitter.com/Logan8183755772"><img src="/assets/imgs/icons/x-twitter.svg" alt="X"></a><a href="https://www.linkedin.com/in/logan-diddens-50a61b250"><i class='bx bxl-linkedin'></i></a>
        </div>
    </div>
</section>
<section id="scrolling" class="scrolling">
    <div>
        <h2>étudiant</h2>
        <div class="rotate">✷</div>
        <h2>portfolio</h2>
        <div class="rotate">✷</div>
        <h2>multimédia</h2>
    </div>
</section>
<section id="about">
    <div class="container">
        <div class="photo">
            <img src="/assets/imgs/photos/logan2.png" alt="Logan Diddens">
        </div>
        <div class="text">
            <h1>Je suis ...</h1>
            <p>Un étudiant professionel, indépendant, et créatif qui vous écoute !</p>
            <a href="/about/" class="button">En voir plus</a>
        </div>
    </div>
</section>
<section id="services">
    <div class="container">
        <h1>Je fais ...</h1>
        <h2>(Au moins une chose pour vous !)</h2>
        <div class="cards">
            <button id="leftArrow"><i class='bx bx-chevron-left'></i></button>
            <div class="wrapper"><div id="caroussel">
                <div class="card">
                    <div><h3>Design <br>Graphique</h3>
                    <p>Création d'identités graphiques, de posters, et de visuels pour les médias de communication.</p>
                    <a href="/services/graphic/"><i class='bx bx-right-arrow-alt' ></i></a></div>
                </div>
                <div class="card">
                    <div><h3>Audiovisuel</h3>
                    <p>Transformez vos idées en vidéos à couper le souffle. La créativité en action, des moments immortalisés avec brillance.</p><a href="/services/audiovisual/"><i class='bx bx-right-arrow-alt' ></i></a></div>
                    
                </div>
                <div class="card">
                    <div><h3>photo</h3>
                    <p>Des moments magiques. Capturons des sourires et des émotions dans des images intemporelles. Votre histoire en images.</p><a href="/services/photography/"><i class='bx bx-right-arrow-alt' ></i></a></div>
                    
                </div>
                <div class="card">
                    <div><h3>stratégie de <br>communication</h3>
                    <p>Communiquez avec de l'impact. Designons ensemble des stratégies impactantes. Votre message, notre succès.</p><a href="/services/communication/"><i class='bx bx-right-arrow-alt' ></i></a></div>
                    
                </div>
                <div class="card">
                    <div><h3>Design <br>UX/UI</h3>
                    <p>Une expérience unique, un design vibrant. Mélangez beauté et expérience utilisateur. Votre interface, ma créativité frappante.</p><a href="/services/design/"><i class='bx bx-right-arrow-alt' ></i></a></div>
                    
                </div>

            </div></div>
            <button id="rightArrow"><i class='bx bx-chevron-right'></i></button>
        </div>
        <a href="/services/" class="button">voir tout</a>
    </div>
</section>
<section id="numbers">
    <div class="container">
        <div class="rotate">✷</div>
        <div class="number">
        <strong><b>1</b><b>0</b><b>0</b>%</strong>
            <em>passion</em>
        </div>
        <div class="number">
        <strong>+<b>1</b><b>0</b></strong>
            <em>partenaires</em>
        </div>
        <div class="number">
        <strong>+<b>3</b><b>0</b></strong>
            <em>projets</em>
        </div>
        <div class="rotate">✷</div>
    </div>
</section>
<section id="works">
    <div class="container">
        <h1>J'ai fait ...</h1>
        <div class="projects">
            <nav id="computer">
                <label for="all" class="active">tout</label>
                <label for="graphic">design graphique</label>
                <label for="audiovisual">audiovisuel</label>
                <label for="photo">photo</label>
                <label for="communication">stratégie de communication</label>
                <label for="ux">design ux/ui</label>
            </nav>
            <div id="phone">
                <span id="placeholder">tout</span>
                <nav id="computer">
                    <label for="all" class="active">tout</label>
                    <label for="graphic">design graphique</label>
                    <label for="audiovisual">audiovisuel</label>
                    <label for="photo">photo</label>
                    <label for="communication">stratégie de communication</label>
                    <label for="ux">design ux/ui</label>
                </nav>
                
            </div>
            <input type="radio" id="all" name="projects" checked>
            <div class="works">
                <?php $i = 1;foreach($allWorks as $work):if($i<=6):?>
                    <div class="work">
                        <img src="<?php echo $work["images"][0];?>" alt="<?php echo $work["frenchName"];?>">
                        <div class="info">
                            <h3><?php echo $work["frenchName"];?></h3>
                            <p><?php echo $work["frenchDescription"];?></p>
                            <a href="/works/work.php?id=<?php echo $work["id"];?>"><i class='bx bx-right-arrow-alt' ></i></a>
                        </div>
                    </div>
                    
                <?php endif; $i++; endforeach;
                for($i=0;$i<=count($allWorks)%3;$i++){
                    echo "<div class='work'></div>";
                }?>
            </div>
            <input type="radio" id="graphic" name="projects">
            <div class="works">
                <?php
                if(isset($works["graphic"])){
                    $i=1; foreach($works["graphic"] as $work): if($i<=6):?>
                        <div class="work">
                            <img src="<?php echo $work["images"][0];?>" alt="<?php echo $work["frenchName"];?>">
                            <div class="info">
                                <h3><?php echo $work["frenchName"];?></h3>
                                <p><?php echo $work["frenchDescription"];?></p>
                                <a href="/works/work.php?id=<?php echo $work["id"];?>"><i class='bx bx-right-arrow-alt' ></i></a>
                            </div>
                        </div>
                        
                    <?php endif; $i++; endforeach;
                    for($i=0;$i<=count($works["graphic"])%3;$i++){
                        echo "<div class='work'></div>";
                    }
                }
                ?>
                
                
            </div>
            <input type="radio" id="audiovisual" name="projects">
            <div class="works">
            <?php
                if(isset($works["video"])){
                    $i=1; foreach($works["video"] as $work): if($i<=6):?>
                        <div class="work">
                            <img src="<?php echo $work["images"][0];?>" alt="<?php echo $work["frenchName"];?>">
                            <div class="info">
                                <h3><?php echo $work["frenchName"];?></h3>
                                <p><?php echo $work["frenchDescription"];?></p>
                                <a href="/works/work.php?id=<?php echo $work["id"];?>"><i class='bx bx-right-arrow-alt' ></i></a>
                            </div>
                        </div>
                        
                    <?php endif; $i++; endforeach;
                    for($i=0;$i<=count($works["video"])%3;$i++){
                        echo "<div class='work'></div>";
                    }
                }
                ?>
                
            </div>
            <input type="radio" id="photo" name="projects">
            <div class="works">
            <?php
                if(isset($works["photography"])){
                    $i=1; foreach($works["photography"] as $work): if($i<=6):?>
                        <div class="work">
                            <img src="<?php echo $work["images"][0];?>" alt="<?php echo $work["frenchName"];?>">
                            <div class="info">
                                <h3><?php echo $work["frenchName"];?></h3>
                                <p><?php echo $work["frenchDescription"];?></p>
                                <a href="/works/work.php?id=<?php echo $work["id"];?>"><i class='bx bx-right-arrow-alt' ></i></a>
                            </div>
                        </div>
                        
                    <?php endif; $i++; endforeach;
                    for($i=0;$i<=count($works["photography"])%3;$i++){
                        echo "<div class='work'></div>";
                    }
                }
                ?>
                
            </div>
            <input type="radio" id="communication" name="projects">
            <div class="works">
            <?php
                if(isset($works["communication"])){
                    $i = 1; foreach($works["communication"] as $work): if($i<=6):?>
                        <div class="work">
                            <img src="<?php echo $work["images"][0];?>" alt="<?php echo $work["frenchName"];?>">
                            <div class="info">
                                <h3><?php echo $work["frenchName"];?></h3>
                                <p><?php echo $work["frenchDescription"];?></p>
                                <a href="/works/work.php?id=<?php echo $work["id"];?>"><i class='bx bx-right-arrow-alt' ></i></a>
                            </div>
                        </div>
                        
                    <?php endif; $i++; endforeach;
                    for($i=0;$i<=count($works["communication"])%3;$i++){
                        echo "<div class='work'></div>";
                    }
                }
                ?>
                
            </div>
            <input type="radio" id="ux" name="projects">
            <div class="works">
            <?php
                if(isset($works["ux"])){
                    $i=1; foreach($works["ux"] as $work): if($i<=6):?>
                        <div class="work">
                            <img src="<?php echo $work["images"][0];?>" alt="<?php echo $work["frenchName"];?>">
                            <div class="info">
                                <h3><?php echo $work["frenchName"];?></h3>
                                <p><?php echo $work["frenchDescription"];?></p>
                                <a href="/works/work.php?id=<?php echo $work["id"];?>"><i class='bx bx-right-arrow-alt' ></i></a>
                            </div>
                        </div>
                        
                    <?php endif; $i++; endforeach;
                    for($i=0;$i<=count($works["ux"])%3;$i++){
                        echo "<div class='work'></div>";
                    }
                }
                ?>
                
            </div>
        </div>
        <a href="/works/" class="button">voir tout</a>
        <h2>Le prochain projet bientôt avec vous ?</h2>
    </div>
</section>
<section id="partners" class="scrolling">
    <div>
        <div class="rotate">✷</div>
        <?php foreach($partners as $partner):?>
            <a href="/works/work.php?id=<?php echo $partner["idWork"];?>"><img src="/assets/imgs/partnership/<?php echo $partner["id"];?>.png" alt="<?php echo $partner["name"];?>"></a>
            <div class="rotate">✷</div>
        <?php endforeach;?>
    </div>

</section>
<section id="contact">
    <div class="container">
        <h1>Je suis là pour vous !</h1>
        <h2>(Promis, je répondrai)</h2>
        <div>
            <div class="contact_infos">
                <div class="info">
                    <div class="icon">
                        <img src="/assets/imgs/icons/home.png" alt="Address">
                    </div>
                    <div class="text">
                        <h3>adresse</h3>
                        <p>
                            141 Cité Bruno 62119 Dourges, FRANCE
                        </p>
                    </div>
                </div>
                <div class="info">
                    <div class="text">
                        <img src="/assets/imgs/icons/mail.png" alt="Email">
                    </div>
                    <div class="text">
                        <h3>email</h3>
                        <p>
                            <a href="mailto:logan.diddens@gmail.com">logan.diddens@gmail.com</a>
                        </p>
                    </div>
                </div>
                <div class="info">
                    <div class="text">
                        <img src="/assets/imgs/icons/phone.webp" alt="Phone">
                    </div>
                    <div class="text">
                        <h3>téléphone</h3>
                        <p>
                            <a href="tel:+33612817526">+33 6 12 81 75 26</a>
                        </p>
                    </div>
                </div>
            </div>
            <form action="#" method="post">
                <div>
                    <div>
                        <label for="name">votre nom complet</label>
                        <input type="text" name="name" id="name">
                    </div>
                    <div>
                        <label for="email">votre adresse email</label>
                        <input type="email" name="email" id="email">
                    </div>
                </div>

                    <label for="subject">votre sujet</label>
                    <input type="text" name="subject" id="subject">
               
                
                    <label for="message">votre message</label>
                    <textarea name="message" id="message" rows="6"></textarea>
               
                <div class="send">
                    <p>J'accepte les termes et conditions</p>
                    <button class="button">Envoyer message</button>
                </div>
            </form>
        </div>
    </div>
</section>
<?php
getFooter(["caroussel.js","projects.js","writingFR.js"]);
?>