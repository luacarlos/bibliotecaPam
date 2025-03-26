<?php

$hostname = 'localhost';
$username = "root";
$password = '';
$db = 'biblioteca_pam';

$conn = new mysqli($hostname,$username,$password,$db);

if (!$conn){
    echo 'Erro ao conectar !';
}
else{
    // echo "Conectado com sucesso !";
}

?>