<?php
session_start();
include("db.php");

if ($_POST) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM usuario WHERE username='$user' AND password='$pass'";
    $res = pg_query($conn, $sql);

    if (pg_num_rows($res) > 0) {
        $_SESSION['user'] = $user;
        header("Location: home.php");
    } else {
        echo "Login inválido";
    }
}
?>

<div class="container">
<div class="card" style="width:300px; margin:auto; text-align:center;">

<h2> <img src="images/executivo.png" alt="Imagem do Executivo" style="width:50px; height:auto;"><br>Cadastro de Funcionários</h2>

<form method="POST">
    <input type="text" name="username" placeholder="Usuário"><br><br>
    <input type="password" name="password" placeholder="Senha"><br><br>
    <button class="btn-primary">Entrar</button>
</form>

</div>
</div>