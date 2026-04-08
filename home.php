<?php
include("auth.php");
include("db.php");

$busca = "";

if (isset($_GET['busca'])) {
    $busca = $_GET['busca'];
    $sql = "SELECT * FROM funcionario WHERE nome ILIKE '%$busca%'";
} else {
    $sql = "SELECT * FROM funcionario";
}

$res = pg_query($conn, $sql);
?>

<div class="header">
    <div>🌍 Cadastro de Funcionários</div>
    <div>
        <a href="home.php">Início</a>
        <a href="home.php">Listagem</a>
        Olá, <?= $_SESSION['user'] ?>
    </div>
</div>

<h2>Funcionários</h2>

<form method="GET">
    <input type="text" name="busca" placeholder="Buscar funcionário">
    <button>Pesquisar</button>
</form>

<a href="cadastro.php">Novo Funcionário</a>

<table border="1">
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Cargo</th>
    <th>Email</th>
    <th>Status</th>
    <th>Ações</th>
</tr>

<?php while($row = pg_fetch_assoc($res)) { ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['nome'] ?></td>
    <td><?= $row['cargo'] ?></td>
    <td><?= $row['email'] ?></td>
    <td><?= $row['status'] ? 'Ativo' : 'Inativo' ?></td>
    <td>
        <a href="cadastro.php?id=<?= $row['id'] ?>">Editar</a>
        <a href="excluir.php?id=<?= $row['id'] ?>">Excluir</a>
    </td>
</tr>
<?php } ?>

</table>

<a href="logout.php">Sair</a>