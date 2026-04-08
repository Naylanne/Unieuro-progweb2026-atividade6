<?php
include("auth.php");
include("db.php");

$id = "";
$nome = "";
$cargo = "";
$email = "";
$telefone = "";
$status = true;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $res = pg_query($conn, "SELECT * FROM funcionario WHERE id=$id");
    $dados = pg_fetch_assoc($res);

    $nome = $dados['nome'];
    $cargo = $dados['cargo'];
    $email = $dados['email'];
    $telefone = $dados['telefone'];
    $status = $dados['status'];
}
?>

<form method="POST" action="salvar.php">
    <input type="hidden" name="id" value="<?= $id ?>">

    Nome: <input type="text" name="nome" value="<?= $nome ?>"><br>
    Cargo: <input type="text" name="cargo" value="<?= $cargo ?>"><br>
    Email: <input type="email" name="email" value="<?= $email ?>"><br>
    Telefone: <input type="text" name="telefone" value="<?= $telefone ?>"><br>

    Status:
    <input type="radio" name="status" value="1" <?= $status ? 'checked' : '' ?>> Ativo
    <input type="radio" name="status" value="0" <?= !$status ? 'checked' : '' ?>> Inativo
    <br>

    <button>Salvar</button>
</form>

<a href="home.php">Voltar</a>