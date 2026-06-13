<?php

session_start();
include("conexao.php");

$id = $_SESSION['id'];

$opcao = $_GET['opcao'];

$sql = "INSERT INTO escolhas
(usuario_id, capitulo, escolha)
VALUES
('$id', 1, '$opcao')";

$conn->query($sql);

header("Location: capitulos/cap2.php");

?>