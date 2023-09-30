<?php
include("../helpers/template.php");
if(!isset($_SESSION["admin"])){
    header("Location: index.php");
}

include("../helpers/database.php");
$query = $pdo -> prepare("SELECT * FROM works");
$query -> execute();
$allWorks = $query -> fetchall();
$works = [];
foreach($allWorks as $work){
    $works[$work["category"]][] = $work;
}
getHeader(["admin.css","index.css"]);
?>
<section>
<div class="container">
    <h1>Ajouter une réalisation</h1>
    <form action="data/addWorkT.php" method="post" enctype="multipart/form-data">
        <label for="frenchName">Nom français</label>
        <input type="text" name="frenchName" id="frenchName" required>
        <label for="englishName">English name</label>
        <input type="text" name="englishName" id="englishName" required>
        <label for="category">Catégorie</label>
        <select name="category" id="category" required>
            <option value="graphic">Graphic Design</option>
            <option value="photography">Photography</option>
            <option value="video">Video</option>
            <option value="communication">Communication</option>
            <option value="ux">UX/UI Design</option>
            
        </select>
        <label for="softwares">Logiciels</label>
        <input type="text" name="softwares" id="softwares" required>
        <label for="frenchDescription">Description (français)</label>
        <textarea name="frenchDescription" id="frenchDescription" cols="90" rows="10" required></textarea>
        <label for="frenchDescription">Description (english)</label>
        <textarea name="englishDescription" id="englishDescription" cols="90" rows="10" required></textarea>
        <label for="link">Lien (YouTube ou autre)</label>
        <input type="url" name="link" id="link">
        <label for="images">Images (possibilité d'en sélectionner plusieurs)</label>
        <input type="file" name="images[]" id="images" accept="image/*" multiple="multiple" required>
        <button type="submit" class="button">Envoyer</button>
    </form>
</div>
</section>
<section id="works">
    <div class="container">
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
                            <a href="../works/work.php?id=<?php echo $work["id"];?>"><i class='bx bx-right-arrow-alt' ></i></a>
                        </div>
                        <a href="data/deleteWork.php?id=<?php echo $work["id"];?>" class="button">supprimer</a>
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
                                <a href="../works/work.php?id=<?php echo $work["id"];?>"><i class='bx bx-right-arrow-alt' ></i></a>
                            </div>
                            <a href="data/deleteWork.php?id=<?php echo $work["id"];?>" class="button">supprimer</a>
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
                                <a href="../works/work.php?id=<?php echo $work["id"];?>"><i class='bx bx-right-arrow-alt' ></i></a>
                            </div>
                        </div>
                        <a href="data/deleteWork.php?id=<?php echo $work["id"];?>" class="button">supprimer</a>
                        
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
                                <a href="../works/work.php?id=<?php echo $work["id"];?>"><i class='bx bx-right-arrow-alt' ></i></a>
                            </div>
                        </div>
                        <a href="data/deleteWork.php?id=<?php echo $work["id"];?>" class="button">supprimer</a>
                        
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
                                <a href="../works/work.php?id=<?php echo $work["id"];?>"><i class='bx bx-right-arrow-alt' ></i></a>
                            </div>
                        </div>
                        <a href="data/deleteWork.php?id=<?php echo $work["id"];?>" class="button">supprimer</a>
                        
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
                                <a href="../works/work.php?id=<?php echo $work["id"];?>"><i class='bx bx-right-arrow-alt' ></i></a>
                            </div>
                        </div>
                        <a href="data/deleteWork.php?id=<?php echo $work["id"];?>" class="button">supprimer</a>
                        
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

<?php getFooter(["projects.js"]);?>
  