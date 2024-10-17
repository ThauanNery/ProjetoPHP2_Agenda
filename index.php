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
                        <th scoope="col">Nome</th>
                        <th scoope="col">Telefone</th>
                        <th scoope="col">E-mail</th>
                        <th scoope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($contacts as $contact) : ?>
                        <tr>
                            <input type="hidden" name="contact_id[]" value="<?= $contact['id'] ?>">
                            <td scoope="row"><?= $contact["nome"] ?></td>
                            <td id="celular" scoope="row"><?= $contact["celular"] ?></td>
                            <td scoope="row"><?= $contact["email"] ?></td>
                            <td class="acoes">
                                <a href="<?= $BASE_URL ?>detail.php?id=<?= $contact["id"] ?>"><i class="fas fa-eye check-icon"></i></a>
                                <a href="<?= $BASE_URL ?>edit.php?id=<?= $contact["id"] ?>"><i class="far fa-edit edit-icon"></i></a>
                                <form class="delete-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
                                    <input type="hidden" name="type" value="delete">
                                    <input type="hidden" name="id" value="<?= $contact["id"] ?>"> 
                                    <button type="submit" class="deleteBtn"><i class="fas fa-times delete-icon"></i></button>
                                </form>
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