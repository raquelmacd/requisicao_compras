<?php
require_once __DIR__."/../../core/database.php";

if( $_POST ) {
    $produto = $_POST["produto"];

    //inserir 
    $sql = "INSERT INTO produtos(produto)
    VALUES(:produto)";
    $consulta = $pdo->prepare($sql);
    $consulta->bindParam(":produto", $produto);

    if(!$consulta->execute()){
        echo $consulta->errorInfo()[2];
        echo '<script>alert("Erro ao salvar requisicao de compra");history.back();</script>';
        
    }
    
    echo '<script>location.href="cadProduto";</script>';
    
} else{
    echo '<script>alert("Erro");history.back();</script>';
}