<?php
include("../helpers/template.php");
include("../helpers/database.php");
if(!isset($_GET["id"])){
    header("Location: index.php");
} else {
    $query = $pdo -> prepare("SELECT * FROM works WHERE id = ?");
    $query -> execute([intval($_GET["id"])]);
    $work = $query -> fetch();
    if(!$work){
        header("Location: index.php");
    } else {
        $work["images"] = glob("../assets/imgs/projects/".$work["id"]."/*.*");
        if(str_starts_with($work["link"],"https://www.youtube.com") or str_starts_with($work["link"],"https://youtu.be")){
            $youtube = substr($work["link"],-11);
        }
    }
}
getHeader(["works/work.css"]);
?>
<section id="work">
    <div class="container">
        <div id="thumbnail">
            <?php
            if(isset($youtube)):?>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $youtube;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

            <?php else:?>
            <img src="<?php echo $work["images"][0];?>" alt="<?php echo $work["frenchName"];?>">
            <?php endif;?>
        </div>
        <div id="infos">
            <h2><?php echo $work["frenchName"]?></h2>
            <p><b>Categorie: </b>&nbsp;
        <?php
        if($work["category"]=="graphic"){
            echo "Design Graphique";
        } else if($work["category"]=="photography"){
            echo "Photographie";
        } else if($work["category"]=="video"){
            echo "Audiovisuel";
        } else if($work["category"]=="communication"){
            echo "Communication";
        } else if($work["category"]=="performance"){
            echo "Analyse de performance";
        } else if($work["category"]=="ux"){
            echo "Design UX/UI";
        }
        ?>
        </p>
        <p><b>Outils: </b>&nbsp;<?php echo $work["softwares"];?></p>
        <p><b>Description: </b><br><?php echo str_replace("\n","<br>",$work["frenchDescription"]);?></p>
        <?php if(isset($work["link"]) and !empty($work["link"])):?>
            <a href="<?php echo $work["link"]?>" class="button">voir le projet</a>

        <?php  endif;?>
        </div>

    </div>
</section>
<section id="photos">
    <div class="container">
        <h1>voir plus de photos</h1>
        <div id="wrapper">
            <button id="leftArrow" class="arrow" onclick="slideLeft()"><i class='bx bx-chevron-left'></i></button>
            <div id="caroussel">
                <?php foreach($work["images"] as $image):?>
                    <img src="<?php echo $image;?>">
                <?php endforeach;?>
            </div>
            <button id="rightArrow" class="arrow" onclick="slideRight()"><i class='bx bx-chevron-right'></i></button>
        </div>
    </div>
</section>

<?php
getFooter(["works/caroussel.js"]);
?>