<?php

session_start();

include("conexao.php");

$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios
WHERE login='$login'";

$resultado = $conn->query($sql);

if($resultado->num_rows > 0){

    $usuario = $resultado->fetch_assoc();

    if(password_verify(
        $senha,
        $usuario['senha']
    )){

        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];

        header("Location: dashboad.php");
        exit();

    }

}

echo "Login ou senha inválidos.";

?>