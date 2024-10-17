<?php
    include_once("templates/header.php");
?>

  <div class="container">
    <h1 id="main-title">Adicionando Contato</h1>
    <form id="create-form" action="<?=$BASE_URL?>config/process.php" method="POST">
      <input type="hidden" name="type" value="create">
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome" required>
      </div>
      <div class="form-group">
        <label for="celular">Telefone</label>
        <input type="tel" class="form-control" name="celular" id="celular" placeholder="(XX) XXXXX-XXXX" required>
      </div>
      <div class="form-group">
        <label for="emailInput">E-mail</label>
        <input type="e-mail" class="form-control" name="email" id="email" placeholder="Digite o E-mail" required>
      </div>
      <div class="form-group">
        <label for="observacao">Observações</label>
        <textarea type="text" class="form-control" name="observacao" id="observacao" placeholder="" rows="3"></textarea>
      </div>      
      <div class="button-container">
          <button type="submit" class="btn btn-primary">Cadastrar</button>
          <?php include_once("templates/backbtn.php"); ?>
      </div>

    </form>
  </div>

<?php
    include_once("templates/footer.php");
?>