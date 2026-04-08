<?php
include("db.php");

$id = $_GET['id'];

pg_query($conn, "DELETE FROM funcionario WHERE id=$id");

header("Location: home.php");