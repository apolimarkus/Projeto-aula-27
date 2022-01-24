<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "loja";

$con = mysqli_connect($servidor, $usuario, $senha, $bd);

if(!$con){
    echo "Não foi possível conectar ao Banco de Dados!";
}