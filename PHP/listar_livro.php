<?php 
    require 'connect.php';
    
    // Pegando os filtros da URL
    $genero = isset($_GET['genero']) ? $_GET['genero'] : '';
    $data = isset($_GET['data']) ? $_GET['data'] : '';
    
    // Construindo a query SQL
    $sql = "SELECT * FROM livro WHERE 1=1";
    if (!empty($genero)) {
        $sql .= " AND genero = '$genero'";
    }
    if (!empty($data)) {
        $sql .= " AND dataPub >= '$data'";
    }
    
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Livros</title>
    <link rel="stylesheet" href="../CSS/styles.css">
</head>
<body>
    <nav class="menu">
    <ul>
      <li><a href="../HTML/home.html">Home</a></li>
      <li><a href="../HTML/sobre.html">Sobre</a></li>
      <li><a href="../PHP/listar_livro.php">Catálogo</a></li>
      <li><a href="../HTML/contato.html">Contato</a></li>
    </ul>
    </nav>
    
    <div class="area-tabela">
        <h1 class="titulo-cat">Catálogo de Livros</h1>
        
        <form method="GET" action="listar_livro.php">
            <label for="genero">Filtrar por Gênero:</label>
            <select name="genero">
                <option value="">Todos</option>
                <option value="Ficcao" <?= $genero == "Ficcao" ? "selected" : "" ?>>Ficção</option>
                <option value="Fantasia" <?= $genero == "Fantasia" ? "selected" : "" ?>>Fantasia</option>
                <option value="Romance" <?= $genero == "Romance" ? "selected" : "" ?>>Romance</option>
            </select>
            
            <label for="data">Filtrar por Data:</label>
            <input type="date" name="data" value="<?= $data ?>">
            
            <button type="submit">Filtrar</button>
        </form>
        
        <div class="container">
            <table border=1 class="tabela-livros">
                <tr class="superior">
                    <td>Id</td>
                    <td>Título</td>
                    <td>Autor</td>
                    <td>Data de Publicação</td>
                    <td>Data de Chegada</td>
                    <td>Gênero</td>
                    <td>Sinopse</td>
                </tr>

                <?php
                    if ($result){
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['id'];
                            $titulo = $row['titulo'];
                            $autor = $row['autor'];
                            $dataPub = $row['dataPub'];
                            $dataCheg = $row['dataCheg'];
                            $genero = $row['genero'];
                            $sinopse = $row['sinopse'];

                            echo '
                            <tr>
                                <td>'.$id.'</td>
                                <td>'.$titulo.'</td>
                                <td>'.$autor.'</td>
                                <td>'.$dataPub.'</td>
                                <td>'.$dataCheg.'</td>
                                <td>'.$genero.'</td>
                                <td>'.$sinopse.'</td>
                            </tr>
                            ';
                        }
                    }
                ?>
            </table>
        </div>
    </div>
    <style>
        .titulo{
            align-items: center;
            justify-content: center;
            display: flex;
        }
    
        .superior{
            background-color: #cdcdcd;
        }

        .tabela-livros {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
        background: #fff;
        }

        .tabela-livros th, .tabela-livros td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
        }

        .tabela-livros th {
        background-color: #007bff;
        color: white;
        font-weight: bold;
        }

        .tabela-livros tr:nth-child(even) {
        background-color: #f9f9f9;
        }

        .tabela-livros tr:hover {
        background-color: #f1f1f2;
        }

        .area-tabela {
        width: 90%;
        margin: 20px auto;
        padding: 20px;
        border-radius: 8px;
        background: #fff;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

    </style>
</body>
</html>
