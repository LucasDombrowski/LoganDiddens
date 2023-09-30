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
        $work["images"] = glob("../../assets/imgs/projects/".$work["id"]."/*.*");
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
            <h2><?php echo $work["englishName"]?></h2>
            <p><b>Category: </b>
        <?php
        if($work["category"]=="graphic"){
            echo "Graphic Design";
        } else if($work["category"]=="photography"){
            echo "Photography";
        } else if($work["category"]=="video"){
            echo "Audiovisual";
        } else if($work["category"]=="communication"){
            echo "Communication";
        } else if($work["category"]=="performance"){
            echo "Performance Analysis";
        } else if($work["category"]=="ux"){
            echo "UX / UI Design";
        }
        ?>
        </p>
        <p><b>Softwares: </b><?php echo $work["softwares"];?></p>
        <p><b>Description: </b><br><?php echo str_replace("\n","<br",$work["englishDescription"]);?></p>
        <?php if(isset($work["link"]) and !empty($work["link"])):?>
            <a href="<?php echo $work["link"]?>" class="button">Watch the work</a>

        <?php endif;?>
        </div>

    </div>
</section>
<section id="photos">
    <div class="container">
        <h1>view more photos</h1>
        <div id="wrapper">
            <?php
            if(count($work["images"])>=3):?>
            <button id="leftArrow" class="arrow" onclick="slideLeft()"><i class='bx bx-chevron-left'></i></button>
            <?php endif;?>
            <div id="caroussel">
                <?php foreach($work["images"] as $image):?>
                    <img src="<?php echo $image;?>">
                <?php endforeach;?>
            </div>
            <?php
            if(count($work["images"])>=3):?>
            <button id="rightArrow" class="arrow" onclick="slideRight()"><i class='bx bx-chevron-right'></i></button>
            <?php endif;?>
        </div>
    </div>
</section>

<?php
getFooter(["works/caroussel.js"]);
?>