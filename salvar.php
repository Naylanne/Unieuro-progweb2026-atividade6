<?php
include("db.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$status = $_POST['status'];

if ($id == "") {
    $sql = "INSERT INTO funcionario (nome, cargo, email, telefone, status)
            VALUES ('$nome','$cargo','$email','$telefone',$status)";
} else {
    $sql = "UPDATE funcionario SET
            nome='$nome',
            cargo='$cargo',
            email='$email',
            telefone='$telefone',
            status=$status
            WHERE id=$id";
}

pg_query($conn, $sql);

header("Location: home.php");