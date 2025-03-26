<?php

include 'connect.php';

if(isset($_POST["cadastrar"])){
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $dataPub = $_POST['dataPub'];
    $dataCheg = $_POST['dataCheg'];
    $genero = $_POST['genero'];
    $sinopse = $_POST['sinopse'];

    $sql = "INSERT INTO livro (titulo,autor,dataPub,dataCheg,genero,sinopse) VALUES ('$titulo','$autor','$dataPub','$dataCheg','$genero', '$sinopse')";

    $result = mysqli_query($conn,$sql);

        if($result){
            echo "<script> alert('Cadastrou um Livro :)') </script>";
            header('location:../HTML/adm.html');
    }

    else{
        echo "<script> alert('Erro ao cadastrar Livro :/') </script>";
        die(mysqli_error($conn));
    }

}
?>