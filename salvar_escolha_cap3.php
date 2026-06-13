<?php

session_start();

include("conexao.php");

$id_usuario = $_SESSION['id'];

$capitulo = $_GET['capitulo'];

$escolha = $_GET['escolha'];

/*
Tabela exemplo:

CREATE TABLE escolhas(
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    capitulo INT,
    escolha VARCHAR(100)
);

*/

$sql = "INSERT INTO escolhas
(
    usuario_id,
    capitulo,
    escolha
)
VALUES
(
    '$id_usuario',
    '$capitulo',
    '$escolha'
)";

$conn->query($sql);

/* Envia para o próximo capítulo */

header("Location: ./capitulos/cap4.php");
exit();


?>