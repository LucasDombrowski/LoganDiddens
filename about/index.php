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
        <h1>présentation</h1>
        <h2>Juste pour que vous en appreniez plus sur moi</h2>
        <div>
            <div class="text animated">
                <p>Je suis un étudiant français dans les métiers du multimédia et de l’internet. J’aimerais devenir Content Manager, tout en ouvrant mon auto-entreprise de graphisme et d’audiovisuel. Cela fait maintenant plusieurs années que je pratique la photographie, la vidéo et le graphisme. Mes études secondaires m’ont également permis de développer des connaissances commerciales, sociologiques et techniques liées à la communication.
</p>
<p>Passionné par le sport, l’univers magique, mon domaine d’études, le voyage et les rencontres, je veux vivre des aventures uniques et m’épanouir pleinement au sein de mon projet professionnel.
</p>
            </div>
            <div class="photo animated">
                <img src="/assets/imgs/photos/logan1.png" alt="Logan Diddens">
            </div>
        </div>
    </div>
</section>
<section id="skills">
    <div class="container">
        <h1>compétences</h1>
        <nav>
            <label for="soft" class="active">savoir être</label>
            <label for="hard">savoir faire</label>
        </nav>
        <input type="radio" name="skill" id="soft" checked>
        <div class="animated">
            <div class="skill"><img src="/assets/imgs/icons/soft/passion.png" alt="Passion"><h3>Passion et Motivation</h3></div>
            <div class="skill"><img src="/assets/imgs/icons/soft/adaptabilité.png" alt="Adaptability"><h3>Adaptabilité</h3></div>
            <div class="skill"><img src="/assets/imgs/icons/soft/activelistening.png" alt="Active Listening"><h3>écoute active</h3></div>
            <div class="skill"><img src="/assets/imgs/icons/soft/sociability.png" alt="Sociabilité"><h3>Sociabilité</h3></div>
            <div class="skill"><img src="/assets/imgs/icons/soft/perfectionniste.png" alt="Perfectionism"><h3>Perfectionisme</h3></div>
            <div class="skill"><img src="/assets/imgs/icons/soft/communication.png" alt="Communication"><h3>Communication</h3></div>
            <div class="skill"><img src="/assets/imgs/icons/soft/technology.png" alt="Technological mastery"><h3>Maîtrise des technologies</h3></div>
            <div class="skill"><img src="/assets/imgs/icons/soft/energy.png" alt="Energy"><h3>Dynamisme et énergie</h3></div>
        </div>
        <input type="radio" name="skill" id="hard">
        <div>
            <div class="skill">
                <img src="/assets/imgs/icons/hard/ps.png" alt="Photoshop">
                <div class="description">
                    <h4>photoshop</h4>
                    <p>Bonne maîtrise de photoshop pour des créations visuelles frappantes et professionnelles.</p>
                </div>
            </div>
            <div class="skill">
                <img src="/assets/imgs/icons/hard/premiere.png" alt="Premiere Pro">
                <div class="description">
                    <h4>premiere pro</h4>
                    <p>Des compétences avancées sur Premiere Pro. Création de vidéos dynamiques pour créer des souvenirs inoubliables et mettre en lumière des événements spéciaux.</p>
                </div>
            </div>
            <div class="skill">
                <img src="/assets/imgs/icons/hard/after.png" alt="After Effect">
                <div class="description">
                    <h4>after effect</h4>
                    <p>J'ai maîtrisé les bases de After Effect et j'ajoute une touche d'élégance à mes vidéos en créant un impact unique sur les médias de communication.</p>
                </div>
            </div>
            <div class="skill">
                <img src="/assets/imgs/icons/hard/illustrator.png" alt="Illustrator">
                <div class="description">
                    <h4>illustrator</h4>
                    <p>Des compétences avancées sur Illustrator. Des créations professionnelles de médias digitaux pour créer une identité graphique et mettre en avant vos valeurs.</p>
                </div>
            </div>
            <div class="skill">
                <img src="/assets/imgs/icons/hard/speak-english.png" alt="English">
                <div class="description">
                    <h4>english</h4>
                    <p>Je parle anglais facilement et de façon fluide, ce qui me permet de communiquer efficacement à la fois oralement mais aussi à l'écrit.</p>
                </div>
            </div>
            <div class="skill">
                <img src="/assets/imgs/icons/hard/espanol.png" alt="Spanish">
                <div class="description">
                    <h4>spanish</h4>
                    <p>Mes compétences d'espagnol me permettent de me faire comprendre et de communiquer avec des locuteurs natifs.</p>
                </div>
            </div>
            <div class="skill">
                <img src="/assets/imgs/icons/hard/insta.png" alt="Instagram">
                <div class="description">
                    <h4>instagram</h4>
                    <p>Je manipule Instagram et ses subtilités avec aisance en exploitant son fonctionnement pour des stratégies de communication impactantes.</p>
                </div>
            </div>
            <div class="skill">
                <img src="/assets/imgs/icons/hard/figma.png" alt="Figma">
                <div class="description">
                    <h4>figma</h4>
                    <p>J'ai acquis les fondamentaux de Figma et maîtrisé les bases pour créer des designs captivants.</p>
                </div>
            </div>
            <div class="skill">
                <img src="/assets/imgs/icons/hard/x.png" alt="X">
                <div class="description">
                    <h4>x</h4>
                    <p>J'exploite les subtilités de X pour des stratégies de communication impactantes et efficaces.</p>
                </div>
            </div>
            <div class="skill">
                <img src="/assets/imgs/icons/hard/tiktok.png" alt="Tiktok">
                <div class="description">
                    <h4>tiktok</h4>
                    <p>Je surf sur Tiktok, en jonglant avec sa créativité sans limite afin de créer d'originaux et divertissants médias digitaux.</p>
                </div>
            </div>

        </div>

    </div>
</section>
<section id="resume">
    <div class="container">
        <h1>CV</h1>
        <div class="global">
            <div class="resume" id="education">
                <h2>études</h2>
                <?php
                foreach($education as $row):?>
                    <div class="exp hidden animated">
                        <h3><?php echo $row["frenchName"];?></h3>
                        <div class="informations">
                            <div>
                                <em><?php echo $row["placeFrench"];?></em>
                                <strong><?php echo $row["start"]." - "; if(isset($row["end"])){ echo $row["end"];}?></strong>
                            </div>
                            <p><?php echo $row["frenchDescription"];?></p>
                        </div>
                        <div class="more"></div>
                    </div>


                <?php endforeach;?>
            </div>
            <div class="resume" id="experience">
                <h2>expérience</h2>
                <?php
                foreach($experience as $row):?>
                    <div class="exp hidden animated">
                        <h3><?php echo $row["frenchName"];?></h3>
                        <div class="informations">
                            <div>
                                <strong><?php echo $row["start"]." - "; if(isset($row["end"])){ echo $row["end"];}?></strong>
                            </div>
                            <p><?php echo $row["frenchDescription"];?></p>
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