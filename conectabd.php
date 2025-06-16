<?php

// A localização 'db_config.php' assume que ele está na mesma pasta
// ou em um caminho que o PHP consiga encontrar.
require_once 'db_config.php';

// Conectar ao BD usando as CONSTANTES definidas em db_config.php
$servidorCONN = DB_SERVER;
$usuarioCONN = DB_USERNAME;
$senhaCONN = DB_PASSWORD;
$bdCONN = DB_NAME;

$conn = mysqli_connect($servidorCONN,$usuarioCONN,$senhaCONN,$bdCONN);

if(!$conn){
    // É bom adicionar mysqli_connect_error() para ver o erro real de conexão
    die("Não foi possível fazer a conexão com o BD: " . mysqli_connect_error());
}
?>
