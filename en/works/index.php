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
        <h1 style="text-align: center">works</h1>
        <h2 style="text-align: center">One more project with you soon ?</h2>
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
            <div class="works">
                <?php foreach($allWorks as $work):?>
                    <div class="work">
                        <img src="<?php echo glob("../../assets/imgs/projects/".$work["id"]."/*.*")[0];?>" alt="<?php echo $work["englishName"];?>">
                        <div class="info">
                            <h3><?php echo $work["englishName"];?></h3>
                            <p><?php echo $work["englishDescription"];?></p>
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
                            <img src="<?php echo glob("../../assets/imgs/projects/".$work["id"]."/*.*")[0];?>" alt="<?php echo $work["englishName"];?>">
                            <div class="info">
                                <h3><?php echo $work["englishName"];?></h3>
                                <p><?php echo $work["englishDescription"];?></p>
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
                            <img src="<?php echo glob("../../assets/imgs/projects/".$work["id"]."/*.*")[0];?>" alt="<?php echo $work["englishName"];?>">
                            <div class="info">
                                <h3><?php echo $work["englishName"];?></h3>
                                <p><?php echo $work["englishDescription"];?></p>
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
                            <img src="<?php echo glob("../../assets/imgs/projects/".$work["id"]."/*.*")[0];?>" alt="<?php echo $work["englishName"];?>">
                            <div class="info">
                                <h3><?php echo $work["englishName"];?></h3>
                                <p><?php echo $work["englishDescription"];?></p>
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
                            <img src="<?php echo glob("../../assets/imgs/projects/".$work["id"]."/*.*")[0];?>" alt="<?php echo $work["englishName"];?>">
                            <div class="info">
                                <h3><?php echo $work["englishName"];?></h3>
                                <p><?php echo $work["englishDescription"];?></p>
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
                            <img src="<?php echo glob("../../assets/imgs/projects/".$work["id"]."/*.*")[0];?>" alt="<?php echo $work["englishName"];?>">
                            <div class="info">
                                <h3><?php echo $work["englishName"];?></h3>
                                <p><?php echo $work["englishDescription"];?></p>
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