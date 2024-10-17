<?php
    include_once("templates/header.php");
?>

<div class="container" id="view-contact-container">
   
    <h1 id="main-title"><?= htmlspecialchars($contact["nome"]) ?></h1>
    <div class="form-group" style="display: flex; justify-content: space-between;">
        <div style="flex: 1; margin-right: 10px;">
            <label for="celular" class="bold">Telefone:</label>
            <input type="text" id="celular" name="celular" value="<?= htmlspecialchars($contact["celular"]) ?>" readonly style="width: 100%;">
        </div>

        <div style="flex: 1; margin-left: 10px;">
            <label for="email" class="bold">E-mail:</label>
            <input type="email" id="email" name="email" value="<?= htmlspecialchars($contact["email"]) ?>" readonly style="width: 100%;">
        </div>
    </div>

     <div class="form-group">
        <label for="observacoes" class="bold">Observações:</label>
        <textarea id="observacoes" name="observacoes" readonly style="width: 100%; height: 150px; resize: none;"><?= htmlspecialchars($contact["observacao"]) ?></textarea>
        <?php include_once("templates/backbtn.php"); ?>
    </div>
</div>

<?php
    include_once("templates/footer.php");
?>