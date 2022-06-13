<?php
require "database.php";

if (isset($_POST['insert'])) {
    try {
        $stmt = $conn->prepare("INSERT INTO livros (nome, autor, genero, categoria) VALUES (:nome, :autor, :genero, :categoria)");
    
        $stmt->bindParam(':nome', $name);
        $stmt->bindParam(':autor', $author);
        $stmt->bindParam(':genero', $genre);
        $stmt->bindParam(':categoria', $category);
    
        $name = $_POST["name"];
        $author = $_POST["author"];
        $genre = $_POST["genre"];
        $category = $_POST["category"];
    
        $stmt->execute();
    
        header("Location: index.php"); 
    }
    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
}
?>