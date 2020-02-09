<?php
// conexão com o banco de dados
// $servername = "izm96dhhnwr2ieg0.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
// $username = "doax53ajdh8sc24h";
// $password = "b9qu7b5f6cwwnqv4";
// $db_name ="fit0wj9lgpd3rb53";

// $connect = mysqli_connect($servername, $username, $password, $db_name);
// //mysqli_set_charset($connect, "uft-8");

// if(mysqli_connect_error()):
//   echo "Falha na conexão: ".mysqli_connect_error();
// endif;

$url = getenv('JAWSDB_URL');
$dbparts = parse_url($url);

$hostname = $dbparts['host'];
$username = $dbparts['user'];
$password = $dbparts['pass'];
$database = ltrim($dbparts['path'],'/');

// Create connection
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check connection
if(mysqli_connect_error()):
   echo "Falha na conexão: ".mysqli_connect_error();
else:
    echo "conexão bem sucedida!";
endif;