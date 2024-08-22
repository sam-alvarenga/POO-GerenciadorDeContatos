<?php

require_once 'Contato.php';
require_once 'GerenciadorDeContatos.php';

$gerenciadorDeContatos = new GerenciadorDeContatos();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['nome'], $_POST['email'], $_POST['telefone'])) {
        $gerenciadorDeContatos -> adicionarContato($_POST['nome'], $_POST['telefone']);
    }

    if(isset($_POST['deletar'])) {
        $gerenciadorDeContatos -> deletarContato($_POST['deletar']);
    }
}

$contatos = $gerenciadorDeContatos -> getContatos();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gereciador de Contatos</title>
</head>

<body>
    <h1>
        Gereciador de Contatos
    </h1>
    <!-- Formulário para adicionar um novo contato -->
    <form action="" method="POST">
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="tel" name="telefone" placeholder="Telefone" required>
        <button type="submit">Adionar Contato</button>
    </form>
    <!-- Lista de contatos  -->
    <ul>
        <?php foreach ($contatos as $indice => $contato):?>

        <li>
            <strong>Nome:</strong> <?= htmlspecialchars
            ($contato -> getNome()) ?><br>
            <strong>Email:</strong> <?= htmlspecialchars
            ($contato -> getEmail()) ?><br>
            <strong>Telefone:</strong> <?= htmlspecialchars
            ($contato -> getTelefone()) ?>
            <form action="" method="POST" style="display:inline">
                <button type="submit" name="deletar" value="<?= $indice ?>">Excluir</button>
            </form>
        </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>