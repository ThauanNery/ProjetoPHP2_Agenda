<?php
    include_once("templates/header.php");
?>

  <div class="container">
    <h1 id="main-title">Editar Contato</h1>
    <form id="edit-form" action="<?=$BASE_URL?>config/process.php" method="POST">
      <input type="hidden" name="type" value="edit">
      <input type="hidden" name="id" value="<?= $contact['id'] ?>">
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" value="<?= $contact['nome'] ?>" required>
      </div>
      <div class="form-group">
        <label for="celular">Telefone</label>
        <input type="text" class="form-control" name="celular" id="celular" value="<?= $contact['celular'] ?>" required>
      </div>
      <div class="form-group">
        <label for="emailInput">E-mail</label>
        <input type="e-mail" class="form-control" name="email" id="email" value="<?= $contact['email'] ?>" required>
      </div>
      <div class="form-group">
        <label for="observacao">Observações</label>
        <textarea type="text" class="form-control" name="observacao" id="observacao" rows="3"><?= $contact['observacao'] ?></textarea>
      </div>      
      <div class="button-container">
          <button type="submit" class="btn btn-primary">Salvar</button>
          <?php include_once("templates/backbtn.php"); ?>
      </div>
    </form>
  </div>

<?php
    include_once("templates/footer.php");
?>