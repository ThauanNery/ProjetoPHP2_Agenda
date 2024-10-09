<?php
    include_once("templates/header.php");
?>

<div class="container" id="view-contact-container">
    <?php include_once("templates/backbtn.php"); ?>
    <h1 id="main-title"><?= $contact["nome"] ?></h1>
    <p class="bold">Telefone:</p>
    <p><?=$contact["celular"] ?></p>
    <p class="bold">E-mail:</p>
    <p><?=$contact["email"] ?></p>
    <p class="bold">Observações:</p>
    <p><?=$contact["observacao"] ?></p>
</div>

<?php
    include_once("templates/footer.php");
?>