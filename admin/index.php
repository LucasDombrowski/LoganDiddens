<?php
include("../helpers/template.php");
getHeader(["admin.css"]);
?>
<section>
<div class="container">
    <h1>Administration</h1>
    <?php if(!isset($_SESSION["admin"])):?>
    <form action="verify.php" method="post">
        <label for="login">Login</label>
        <input type="text" name="login" id="login" required>
        <label for="password">password</label>
        <input type="password" name="password" id="password" required>
        <button type="submit" class="button">send</button>
    </form>
    <?php else: ?>
        <a href="addWork.php" class="button">Ajouter une réalisation</a>
        <a href="addExperience.php" class="button">Ajouter une expérience</a>
        <a href="addPartner.php" class="button">Ajouter un partenaire</a>
    <?php endif;?>
</div>
</section>
<?php getFooter();?>
