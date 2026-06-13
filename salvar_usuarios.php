<?php

include("conexao.php");

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios
(nome, login, senha)
VALUES
('$nome','$login','$senha')";

if($conn->query($sql)){
    header("Location: login.php");
}else{
    echo "Erro ao cadastrar.";
}

?>