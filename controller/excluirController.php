<?php

require_once __DIR__."/../core/database.php";

if($_GET){
    
    $id = $_GET["id"];
    
    $sql = "DELETE FROM compras WHERE id = :id LIMIT 1";
    $consulta = $pdo->prepare($sql);
    $consulta->bindParam(":id",$id);
    $consulta->execute();
    echo '<script>location.href="requisicao"</script>';
    
    
} else{
    echo '<script>slert("Erro");history.back();</script>';
}