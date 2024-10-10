<?php
    include_once("templates/header.php");
?>

    <div class="container">
        <?php if(isset($printMsg) && $printMsg != '') : ?>
            <p id="msg"><?= $printMsg ?></p>
        <?php endif; ?>

        <h1 id="main-title">Agenda</h1>
        
        <?php if(count($contacts) > 0 ): ?>
            <table class="table" id="contacts-table">
                <thead>
                    <tr>
                        <th scoope="col">#</th>
                        <th scoope="col">Nome</th>
                        <th scoope="col">Telefone</th>
                        <th scoope="col">E-mail</th>
                        <th scoope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($contacts as $contact) : ?>
                        <tr>
                            <td scoope="row" class="col-id"><?= $contact["id"] ?></td>
                            <td scoope="row"><?= $contact["nome"] ?></td>
                            <td scoope="row"><?= $contact["celular"] ?></td>
                            <td scoope="row"><?= $contact["email"] ?></td>
                            <td class="acoes">
                                <a href="<?= $BASE_URL ?>detail.php?id=<?= $contact["id"] ?>"><i class="fas fa-eye check-icon"></i></a>
                                <a href="<?= $BASE_URL ?>edit.php?id=<?= $contact["id"] ?>"><i class="far fa-edit edit-icon"></i></a>
                                <button type="submit" class="deleteBtn"><i class="fas fa-times delete-icon"></i></button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p id="empty-list-text">Ainda não ha contatos, <a href="<?= $BASE_URL ?>create.php">Clique aqui para adicionar</a>.</p>
        <?php endif; ?>
    </div>
    

<?php
    include_once("templates/footer.php");
?>