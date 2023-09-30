<?php
include("../helpers/database.php");
include("../helpers/template.php");
$query = $pdo -> prepare("SELECT * FROM works");
$query -> execute();
$allWorks = $query -> fetchall();
$works = [];
foreach($allWorks as $work){
    $works[$work["category"]][] = $work;
}
getHeader(["index.css"]);
?>
<section id="works">
    <div class="container">
        <h1 style="text-align: center">réalisations</h1>
        <h2 style="text-align: center">Le prochain projet bientôt avec vous ?</h2>
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
                <?php foreach($allWorks as $work):?>
                    <div class="work">
                        <img src="<?php echo glob("../assets/imgs/projects/".$work["id"]."/*.*")[0];?>" alt="<?php echo $work["frenchName"];?>">
                        <div class="info">
                            <h3><?php echo $work["frenchName"];?></h3>
                            <p><?php echo $work["frenchDescription"];?></p>
                            <a href="work.php?id=<?php echo $work["id"];?>"><i class='bx bx-right-arrow-alt' ></i></a>
                        </div>
                    </div>
                    
                <?php endforeach;
                for($i=0;$i<=count($allWorks)%3;$i++){
                    echo "<div class='work'></div>";
                }?>
            </div>
            <input type="radio" id="graphic" name="projects">
            <div class="works">
                <?php
                if(isset($works["graphic"])){
                    foreach($works["graphic"] as $work):?>
                        <div class="work">
                            <img src="<?php echo glob("../assets/imgs/projects/".$work["id"]."/*.*")[0];?>" alt="<?php echo $work["frenchName"];?>">
                            <div class="info">
                                <h3><?php echo $work["frenchName"];?></h3>
                                <p><?php echo $work["frenchDescription"];?></p>
                                <a href="work.php?id=<?php echo $work["id"];?>"><i class='bx bx-right-arrow-alt' ></i></a>
                            </div>
                        </div>
                        
                    <?php endforeach;
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
                    foreach($works["video"] as $work):?>
                        <div class="work">
                            <img src="<?php echo glob("../assets/imgs/projects/".$work["id"]."/*.*")[0];?>" alt="<?php echo $work["frenchName"];?>">
                            <div class="info">
                                <h3><?php echo $work["frenchName"];?></h3>
                                <p><?php echo $work["frenchDescription"];?></p>
                                <a href="work.php?id=<?php echo $work["id"];?>"><i class='bx bx-right-arrow-alt' ></i></a>
                            </div>
                        </div>
                        
                    <?php endforeach;
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
                    foreach($works["photography"] as $work):?>
                        <div class="work">
                            <img src="<?php echo glob("../assets/imgs/projects/".$work["id"]."/*.*")[0];?>" alt="<?php echo $work["frenchName"];?>">
                            <div class="info">
                                <h3><?php echo $work["frenchName"];?></h3>
                                <p><?php echo $work["frenchDescription"];?></p>
                                <a href="work.php?id=<?php echo $work["id"];?>"><i class='bx bx-right-arrow-alt' ></i></a>
                            </div>
                        </div>
                        
                    <?php endforeach;
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
                    foreach($works["communication"] as $work):?>
                        <div class="work">
                            <img src="<?php echo glob("../assets/imgs/projects/".$work["id"]."/*.*")[0];?>" alt="<?php echo $work["frenchName"];?>">
                            <div class="info">
                                <h3><?php echo $work["frenchName"];?></h3>
                                <p><?php echo $work["frenchDescription"];?></p>
                                <a href="work.php?id=<?php echo $work["id"];?>"><i class='bx bx-right-arrow-alt' ></i></a>
                            </div>
                        </div>
                        
                    <?php endforeach;
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
                    foreach($works["ux"] as $work):?>
                        <div class="work">
                            <img src="<?php echo glob("../assets/imgs/projects/".$work["id"]."/*.*")[0];?>" alt="<?php echo $work["frenchName"];?>">
                            <div class="info">
                                <h3><?php echo $work["frenchName"];?></h3>
                                <p><?php echo $work["frenchDescription"];?></p>
                                <a href="work.php?id=<?php echo $work["id"];?>"><i class='bx bx-right-arrow-alt' ></i></a>
                            </div>
                        </div>
                        
                    <?php endforeach;
                    for($i=0;$i<=count($works["ux"])%3;$i++){
                        echo "<div class='work'></div>";
                    }
                }
                ?>
                
            </div>
        </div>
    </div>
</section>
<?php
getFooter(["projects.js"]);
?>