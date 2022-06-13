<?php
require "database.php";

$select = $conn->query("SELECT nome, autor, genero, categoria FROM livros;");

while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
    echo "<p class='text-white'>Nome da obra: {$row['nome']} - Autor: {$row['autor']}
    - Gênero: {$row['genero']} - Categoria: {$row['categoria']}</p>";
}
?>