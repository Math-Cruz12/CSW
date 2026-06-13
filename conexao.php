<?php

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "visualnovel"
);

if($conn->connect_error){
    die("Erro na conexão.");
}

?>