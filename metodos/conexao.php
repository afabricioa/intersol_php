<?php
// conexão com o banco de dados
$servername = "localhost:8889";
$username = "root";
$password = "root";
$db_name ="crudPHP_intersol";

$connect = mysqli_connect($servername, $username, $password, $db_name);
//mysqli_set_charset($connect, "uft-8");

if(mysqli_connect_error()):
  echo "Falha na conexão: ".mysqli_connect_error();
endif;
