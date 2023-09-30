<?php
include("../helpers/template.php");
if(!isset($_SESSION["admin"])){
    header("Location: index.php");
}

include("../helpers/database.php");
$query = $pdo -> prepare("SELECT * FROM partners");
$query -> execute();
$partners = $query -> fetchall();
getHeader(["index.css","admin.css"]);

?>
<section>
<div class="container">
    <h1>Ajouter un partenaire</h1>
    <form action="data/addPartnerT.php" method="post" enctype="multipart/form-data">
        <label for="name">Nom du partenaire</label>
        <input type="text" name="name" id="name" required>
        <label for="id">Id de la réalisation avec le partenaire (trouvable à la fin de l'url)</label>
        <input type="number" name="id" id="id" required>
        <label for="logo">Logo du partenaire</label>
        <input type="file" name="logo" id="logo" required>
        <button type="submit" class="button">envoyer</button>
    </form>
</div>
</section>
<section id="partners" class="scrolling">
    <div>
        <div class="rotate">✷</div>
        <?php foreach($partners as $partner):?>
            <a href="data/deletePartner.php?id=<?php echo $partner["id"];?>"><img src="/assets/imgs/partnership/<?php echo $partner["id"];?>.png" alt="<?php echo $partner["name"];?>"></a>
            <div class="rotate">✷</div>
        <?php endforeach;?>
    </div>

</section>
<?php getFooter();?>
