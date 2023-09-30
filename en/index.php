<?php
include("helpers/template.php");
include("helpers/database.php");
$query = $pdo -> prepare("SELECT * FROM works");
$query -> execute();
$allWorks = $query -> fetchall();
$works = [];
foreach($allWorks as $work){
    $works[$work["category"]][] = $work;
}
$query = $pdo -> prepare("SELECT * FROM partners");
$query -> execute();
$partners = $query -> fetchall();
getHeader(["index.css"]);?>
 <div id="loader">
    <video src="/assets/videos/loader.mp4" muted loop autoplay></video>
    </div>
<section id="home">
    <div id="video">
        <video src="/assets/videos/video_en.mp4" controls></video>
        <button class="button" onclick="document.getElementById('video').style.display = 'none'; document.querySelector('#video video').pause();">close</button>
    </div>
    <div class="container">
        <div class="text">
            <p>hello, my name is</p>
            <h1>logan<br><span>diddens</span></h1>
            <h2>i'm a &nbsp;<span id="typing"></span></h2>
            <div class="buttons">
                <a href="/assets/imgs/CV_FR.png" class="button" download>download cv</a>
                <button class="button" onclick="document.getElementById('video').style.display = 'flex'">watch video</button>
            </div>
        </div>
        <div class="photo">
            <a href="/en/about/"><img src="/assets/imgs/photos/logan1.png" alt="Logan Diddens"></a>
        </div>
        <div class="socialNetworks">
            <a href="https://instagram.com/logandiddens?igshid=NGVhN2U2NjQ0Yg=="><i class='bx bxl-instagram' ></i></a><a href="https://twitter.com/Logan8183755772"><img src="/assets/imgs/icons/x-twitter.svg" alt="X"></a><a href="https://www.linkedin.com/in/logan-diddens-50a61b250"><i class='bx bxl-linkedin'></i></a>
        </div>
    </div>
</section>
<section id="scrolling" class="scrolling">
    <div>
        <h2>student</h2>
        <div class="rotate">✷</div>
        <h2>portfolio</h2>
        <div class="rotate">✷</div>
        <h2>multimedia</h2>
    </div>
</section>
<section id="about">
    <div class="container">
        <div class="photo animated">
            <img src="/assets/imgs/photos/logan2.png" alt="Logan Diddens">
        </div>
        <div class="text">
            <h1>i am ...</h1>
            <p class="animated">A rigorous, independent and creative student who listens to you !</p>
            <a href="/en/about/" class="button">discover more</a>
        </div>
    </div>
</section>
<section id="services">
    <div class="container">
        <h1>i do ...</h1>
        <h2>(At least one thing for you !)</h2>
        <div class="cards">
            <button id="leftArrow"><i class='bx bx-chevron-left'></i></button>
            <div class="wrapper"><div id="caroussel" class="animated">
                <div class="card">
                    <div><h3>graphic <br>design</h3>
                    <p>Creating graphics identities, posters, visuals and communication media.</p>
                    <a href="/en/services/graphic/"><i class='bx bx-right-arrow-alt' ></i></a></div>
                </div>
                <div class="card">
                    <div><h3>audiovisual</h3>
                    <p>Turn your ideas into dynamic videos. Creativity in action, moments immortalised with brillance.</p><a href="/en/services/audiovisual/"><i class='bx bx-right-arrow-alt' ></i></a></div>
                    
                </div>
                <div class="card">
                    <div><h3>photo</h3>
                    <p>Magical moments. Let's capture smiles and emotions in timeless images. Your story in pictures.</p><a href="/en/services/photography/"><i class='bx bx-right-arrow-alt' ></i></a></div>
                    
                </div>
                <div class="card">
                    <div><h3>Communication <br>strategy</h3>
                    <p>Communicate with impact. Let's design impactful strategies together. Your message, our success.</p><a href="#"><i class='bx bx-right-arrow-alt' ></i></a></div>
                    
                </div>
                <div class="card">
                    <div><h3>UX/UI <br>Design</h3>
                    <p>Unique experience, vibrant design. Merging beauty and user-friendliness. Your interface, my striking creativity.</p><a href="/en/services/design/"><i class='bx bx-right-arrow-alt' ></i></a></div>
                    
                </div>

            </div></div>
            <button id="rightArrow"><i class='bx bx-chevron-right'></i></button>
        </div>
        <a href="/en/services/" class="button">view all</a>
    </div>
</section>
<section id="numbers">
    <div class="container">
        <div class="rotate_3d"><img src="/assets/imgs/LOGO.png"></div>
        <div class="number">
        <strong><span data-count="100">0</span>%</strong>
            <em>passion</em>
        </div>
        <div class="number">
        <strong>+<span data-count="10">0</span></strong>
            <em>partners</em>
        </div>
        <div class="number">
        <strong>+<span data-count="30">0</span></strong>
            <em>projects</em>
        </div>
        <div class="rotate_3d"><img src="/assets/imgs/LOGO.png"></div>
    </div>
</section>
<section id="works">
    <div class="container">
        <h1>i have done ...</h1>
        <div class="projects">
            <nav id="computer">
                <label for="all" class="active">all</label>
                <label for="graphic">graphic design</label>
                <label for="audiovisual">audiovisual</label>
                <label for="photo">photo</label>
                <label for="communication">communication strategy</label>
                <label for="ux">ux/ui design</label>
            </nav>
            <div id="phone">
                <span id="placeholder">all</span>
                <nav>
                    <label for="all" class="active">all</label>
                    <label for="graphic">graphic design</label>
                    <label for="audiovisual">audiovisual</label>
                    <label for="photo">photo</label>
                    <label for="communication">communication strategy</label>
                    <label for="ux">ux/ui design</label>
                </nav>
            </div>
            <input type="radio" id="all" name="projects" checked>
            <div class="works animated">
                <?php $i = 1;foreach($allWorks as $work):if($i<=6):?>
                    <div class="work">
                        <img src="<?php echo glob("../assets/imgs/projects/".$work["id"]."/*.*")[0];?>" alt="<?php echo $work["englishName"];?>">
                        <div class="info">
                            <h3><?php echo $work["englishName"];?></h3>
                            <p><?php echo $work["englishDescription"];?></p>
                            <a href="/en/works/work.php?id=<?php echo $work["id"];?>"><i class='bx bx-right-arrow-alt' ></i></a>
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
                            <img src="<?php echo glob("../assets/imgs/projects/".$work["id"]."/*.*")[0];?>" alt="<?php echo $work["englishName"];?>">
                            <div class="info">
                                <h3><?php echo $work["englishName"];?></h3>
                                <p><?php echo $work["englishDescription"];?></p>
                                <a href="/en/works/work.php?id=<?php echo $work["id"];?>"><i class='bx bx-right-arrow-alt' ></i></a>
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
                            <img src="<?php echo glob("../assets/imgs/projects/".$work["id"]."/*.*")[0];?>" alt="<?php echo $work["englishName"];?>">
                            <div class="info">
                                <h3><?php echo $work["englishName"];?></h3>
                                <p><?php echo $work["englishDescription"];?></p>
                                <a href="/en/works/work.php?id=<?php echo $work["id"];?>"><i class='bx bx-right-arrow-alt' ></i></a>
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
                            <img src="<?php echo glob("../assets/imgs/projects/".$work["id"]."/*.*")[0];?>" alt="<?php echo $work["englishName"];?>">
                            <div class="info">
                                <h3><?php echo $work["englishName"];?></h3>
                                <p><?php echo $work["englishDescription"];?></p>
                                <a href="/en/works/work.php?id=<?php echo $work["id"];?>"><i class='bx bx-right-arrow-alt' ></i></a>
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
                            <img src="<?php echo glob("../assets/imgs/projects/".$work["id"]."/*.*")[0];?>" alt="<?php echo $work["englishName"];?>">
                            <div class="info">
                                <h3><?php echo $work["englishName"];?></h3>
                                <p><?php echo $work["englishDescription"];?></p>
                                <a href="/en/works/work.php?id=<?php echo $work["id"];?>"><i class='bx bx-right-arrow-alt' ></i></a>
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
                            <img src="<?php echo glob("../assets/imgs/projects/".$work["id"]."/*.*")[0];?>" alt="<?php echo $work["englishName"];?>">
                            <div class="info">
                                <h3><?php echo $work["englishName"];?></h3>
                                <p><?php echo $work["englishDescription"];?></p>
                                <a href="/en/works/work.php?id=<?php echo $work["id"];?>"><i class='bx bx-right-arrow-alt' ></i></a>
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
        <a href="/en/works/" class="button">view all</a>
        <h2>One more project with you soon ?</h2>
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
        <h1>i am here for you !</h1>
        <h2>(Promise, I will answer)</h2>
        <div>
            <div class="contact_infos">
                <div class="info">
                    <div class="icon">
                        <img src="/assets/imgs/icons/home.png" alt="Address">
                    </div>
                    <div class="text">
                        <h3>address</h3>
                        <p>
                            62119 Dourges, FRANCE
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
                        <h3>phone</h3>
                        <p>
                            <a href="tel:+33612817526">+33 6 12 81 75 26</a>
                        </p>
                    </div>
                </div>
            </div>
            <form action="/sendMail.php" method="post">
                <div>
                    <div>
                        <label for="name">your full name</label>
                        <input type="text" name="name" id="name">
                    </div>
                    <div>
                        <label for="email">your email address</label>
                        <input type="email" name="email" id="email">
                    </div>
                </div>

                    <label for="subject">your subject</label>
                    <input type="text" name="subject" id="subject">
               
                
                    <label for="message">your message</label>
                    <textarea name="message" id="message" rows="6"></textarea>
               
                <div class="send">
                    <p>Accept the terms and conditions</p>
                    <button class="button">send message</button>
                </div>
            </form>
        </div>
    </div>
</section>
<?php
getFooter(["caroussel.js","projects.js","writingEN.js","numbers.js"]);
?>