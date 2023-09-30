<?php
include("../helpers/template.php");
include("../helpers/database.php");
$query = $pdo -> prepare("SELECT * FROM resume WHERE type LIKE 'education'");
$query -> execute();
$education = $query -> fetchall();
$query = $pdo -> prepare("SELECT * FROM resume WHERE type LIKE 'experience'");
$query -> execute();
$experience = $query -> fetchall();
getHeader(["about/about.css"]);
?>
<section id="presentation">
    <div class="container">
        <h1>presentation</h1>
        <h2>just to let you know few things about me</h2>
        <div>
            <div class="text animated">
                <p>I'm a French student studying multimedia and the Internet.
I'd like to become a Content Manager, while opening my
own graphic design and audiovisual business. I've been
doing photography, video and graphic design for several
years now. My secondary education has also enabled me to
develop commercial, sociological and technical knowledge
related to communication.</p>
<p>I'm passionate about sport, the magical world, my field of
study, travelling and meeting new people, and I want to ex-
perience unique adventures and fulfil my potential as a
professional.</p>
            </div>
            <div class="photo animated">
                <img src="/assets/imgs/photos/logan1.png" alt="Logan Diddens">
            </div>
        </div>
    </div>
</section>
<section id="skills">
    <div class="container">
        <h1>skills</h1>
        <nav>
            <label for="soft" class="active">soft skills</label>
            <label for="hard">hard skills</label>
        </nav>
        <input type="radio" name="skill" id="soft" checked>
        <div class="animated">
            <div class="skill"><img src="/assets/imgs/icons/soft/passion.png" alt="Passion"><h3>Passion and Motivation</h3></div>
            <div class="skill"><img src="/assets/imgs/icons/soft/adaptabilité.png" alt="Adaptability"><h3>Adaptability</h3></div>
            <div class="skill"><img src="/assets/imgs/icons/soft/activelistening.png" alt="Active Listening"><h3>Active listening</h3></div>
            <div class="skill"><img src="/assets/imgs/icons/soft/sociability.png" alt="Sociabilité"><h3>Sociability</h3></div>
            <div class="skill"><img src="/assets/imgs/icons/soft/perfectionniste.png" alt="Perfectionism"><h3>Perfectionism</h3></div>
            <div class="skill"><img src="/assets/imgs/icons/soft/communication.png" alt="Communication"><h3>Communication</h3></div>
            <div class="skill"><img src="/assets/imgs/icons/soft/technology.png" alt="Technological mastery"><h3>Technological mastery</h3></div>
            <div class="skill"><img src="/assets/imgs/icons/soft/energy.png" alt="Energy"><h3>Dynamism and energy</h3></div>
        </div>
        <input type="radio" name="skill" id="hard">
        <div>
            <div class="skill">
                <img src="/assets/imgs/icons/hard/ps.png" alt="Photoshop">
                <div class="description">
                    <h4>photoshop</h4>
                    <p>Good command of Photoshop for striking, professional visual creations.</p>
                </div>
            </div>
            <div class="skill">
                <img src="/assets/imgs/icons/hard/premiere.png" alt="Premiere Pro">
                <div class="description">
                    <h4>premiere pro</h4>
                    <p>Good command of Photoshop for striking, professional visual creations.</p>
                </div>
            </div>
            <div class="skill">
                <img src="/assets/imgs/icons/hard/after.png" alt="After Effect">
                <div class="description">
                    <h4>after effect</h4>
                    <p>I've mastered the basics of After Effects and add a touch of elegance and dynamism to my videos, creating a unique impact in communication media.</p>
                </div>
            </div>
            <div class="skill">
                <img src="/assets/imgs/icons/hard/illustrator.png" alt="Illustrator">
                <div class="description">
                    <h4>illustrator</h4>
                    <p>Advanced skills in Illustrator. Professional creation of digital media to create a graphic identity and highlight your values.</p>
                </div>
            </div>
            <div class="skill">
                <img src="/assets/imgs/icons/hard/speak-english.png" alt="English">
                <div class="description">
                    <h4>english</h4>
                    <p>I speak English fluently and easily, which enables me to communicate effectively both orally and in writing.</p>
                </div>
            </div>
            <div class="skill">
                <img src="/assets/imgs/icons/hard/espanol.png" alt="Spanish">
                <div class="description">
                    <h4>spanish</h4>
                    <p>My Spanish skills enable me to make myself understood and to communicate with native speakers.</p>
                </div>
            </div>
            <div class="skill">
                <img src="/assets/imgs/icons/hard/insta.png" alt="Instagram">
                <div class="description">
                    <h4>instagram</h4>
                    <p>I handle Instagram and its subtleties with ease, exploiting its workings for impactful communication strategies.</p>
                </div>
            </div>
            <div class="skill">
                <img src="/assets/imgs/icons/hard/figma.png" alt="Figma">
                <div class="description">
                    <h4>figma</h4>
                    <p>Acquire the fundamentals of Figma and master the basics to create captivating designs.</p>
                </div>
            </div>
            <div class="skill">
                <img src="/assets/imgs/icons/hard/x.png" alt="X">
                <div class="description">
                    <h4>x</h4>
                    <p>I exploit the subtleties of X for impactful and effective communication strategies.</p>
                </div>
            </div>
            <div class="skill">
                <img src="/assets/imgs/icons/hard/tiktok.png" alt="Tiktok">
                <div class="description">
                    <h4>tiktok</h4>
                    <p>I surf TikTok, juggling its boundless creativity to create original and entertaining digital media.</p>
                </div>
            </div>

        </div>

    </div>
</section>
<section id="resume">
    <div class="container">
        <h1>resume</h1>
        <div class="global">
            <div class="resume" id="education">
                <h2>education</h2>
                <?php
                foreach($education as $row):?>
                    <div class="exp hidden animated">
                        <h3><?php echo $row["englishName"];?></h3>
                        <div class="informations">
                            <div>
                                <em><?php echo $row["placeEnglish"];?></em>
                                <strong><?php echo $row["start"]." - "; if(isset($row["end"])){ echo $row["end"];}?></strong>
                            </div>
                            <p><?php echo $row["englishDescription"];?></p>
                        </div>
                        <div class="more"></div>
                    </div>


                <?php endforeach;?>
            </div>
            <div class="resume" id="experience">
                <h2>experience</h2>
                <?php
                foreach($experience as $row):?>
                    <div class="exp hidden animated">
                        <h3><?php echo $row["englishName"];?></h3>
                        <div class="informations">
                            <div>
                                <strong><?php echo $row["start"]." - "; if(isset($row["end"])){ echo $row["end"];}?></strong>
                            </div>
                            <p><?php echo $row["englishDescription"];?></p>
                        </div>
                        <div class="more"></div>
                    </div>


                <?php endforeach;?>
            </div>
        </div>
    </div>
</section>
<?php
getFooter(["about/skills.js","about/resume.js","about/hardSkills.js"]);
?>