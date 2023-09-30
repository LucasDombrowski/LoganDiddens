<?php
include("../helpers/template.php");
if(!isset($_SESSION["admin"])){
    header("Location: index.php");
}

include("../helpers/database.php");
$query = $pdo -> prepare("SELECT * FROM resume WHERE type LIKE 'education'");
$query -> execute();
$education = $query -> fetchall();
$query = $pdo -> prepare("SELECT * FROM resume WHERE type LIKE 'experience'");
$query -> execute();
$experience = $query -> fetchall();
getHeader(["admin.css","about/about.css"]);
?>
<section>
<div class="container">
    <h1>Ajouter une expérience</h1>
    <form action="data/addExperienceT.php" method="post">
        <label for="type">Type</label>
        <select name="type" id="type" required>
            <option value="education">Education</option>
            <option value="experience">Experience</option>
        </select>
        <label for="frenchName">Nom français</label>
        <input type="text" name="frenchName" id="frenchName"  required>
        <label for="englishName">English name</label>
        <input type="text" name="englishName" id="englishName" required>
        <label for="frenchPlace">Endroit (en français) (facultatif)</label>
        <input type="text" name="frenchPlace" id="frenchPlace">
        <label for="englishPlace">Place (english) (facultatif)</label>
        <input type="text" name="englishPlace" id="englishPlace">
        <label for="start">Année de début</label>
        <input type="number" name="start" id="start" required>
        <label for="end">Année de fin (facultatif)</label>
        <input type="number" name="end" id="end">
        <label for="frenchDescription">Description (français)</label>
        <textarea name="frenchDescription" id="frenchDescription" cols="30" rows="10" required></textarea>
        <label for="englishDescription">Description (english)</label>
        <textarea name="englishDescription" id="englishDescription" cols="30" rows="10" required></textarea>
        <button type="submit" class="button">Envoyer</button>
    </form>
</div>
</section>
<section id="resume">
    <div class="container">
        <div class="global">
            <div class="resume" id="education">
                <h2>études</h2>
                <?php
                foreach($education as $row):?>
                    <div class="exp hidden">
                        <h3><?php echo $row["frenchName"];?></h3>
                        <div class="informations">
                            <div>
                                <em><?php echo $row["placeFrench"];?></em>
                                <strong><?php echo $row["start"]." - "; if(isset($row["end"])){ echo $row["end"];}?></strong>
                            </div>
                            <p><?php echo $row["frenchDescription"];?></p>
                            <a href="data/deleteExperience.php?id=<?php echo $row["id"];?>" class="button">supprimer</a>
                        </div>
                        <div class="more"></div>
                    </div>


                <?php endforeach;?>
            </div>
            <div class="resume" id="experience">
                <h2>expérience</h2>
                <?php
                foreach($experience as $row):?>
                    <div class="exp hidden">
                        <h3><?php echo $row["frenchName"];?></h3>
                        <div class="informations">
                            <div>
                                <strong><?php echo $row["start"]." - "; if(isset($row["end"])){ echo $row["end"];}?></strong>
                            </div>
                            <p><?php echo $row["frenchDescription"];?></p>
                            <a href="data/deleteExperience.php?id=<?php echo $row["id"];?>" class="button">supprimer</a>
                        </div>
                        <div class="more"></div>
                    </div>


                <?php endforeach;?>
            </div>
        </div>
    </div>
</section>
<?php getFooter(["about/resume.js"]);?>