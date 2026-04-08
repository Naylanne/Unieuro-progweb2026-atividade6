<?php
$conn = pg_connect("host=localhost dbname=Reserva_Sala user=postgres password=123456");

if (!$conn) {
    die("Erro na conexão");
}
?>