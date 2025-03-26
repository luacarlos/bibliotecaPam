<?php
 
require 'connect.php';
 
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca - Cadastro de Livro</title>
</head> 
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(62, 62, 62);
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            padding: 15px;
            text-align: center;
        }
        header ul {
            list-style: none;   
            padding: 0;
        }
        header ul li {
            display: inline;
            margin: 0 15px;
        }
        header ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }
        h1 {
            text-align: center;
            color: #fff;
        }
        .formulario {
            max-width: 400px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .formulario label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        .formulario input[type="text"],
        .formulario input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .enviar {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .enviar:hover {
            background-color: #218838;
        }
    </style>
<body>
    <header>
        <ul>
            <li> <a href="../HTML/home.html"> Voltar</a></li>
        </ul>
    </header>
    <h1>Cadastro de Livros</h1>
    <form method="POST" action="cadastra_livro.php" class="formulario">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" placeholder="Título do Livro">        

        <label for="titulo">Autor:</label>
        <input type="text" name="autor" id="autor" placeholder="Autor do Livro">   

        <label for="dataPub">Data de Publicação:</label>
        <input type="date" id="dataPub" name="dataPub" required>

        <label for="dataCheg">Data de Chegada:</label>
        <input type="date" id="dataPub" name="dataPub" required>

        <label for="titulo">Gênero:</label>
        <input type="text" name="genero" id="genero" placeholder="Gênero do Livro">   

        <label for="titulo">Sinopse:</label>
        <input type="text" name="sinopse" id="sinopse" placeholder="Sinopse do Livro (Opcional)">    

        <input type="submit" name="cadastrar" id="bot" value="cadastrar" class="enviar">
    </form>
</body>
</html>