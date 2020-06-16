<?php

require_once __DIR__."/../../core/database.php";

if($_GET){
    
    $id = $_GET["id"];
    
    $sql = "DELETE FROM requisicao WHERE id = :id LIMIT 1";
    $consulta = $pdo->prepare($sql);
    $consulta->bindParam(":id",$id);
    $consulta->execute();
    
    $select = "DELETE FROM requisicao_produto WHERE id_requisicao = :id";
    $verifica = $pdo->prepare($select);
    $verifica->bindParam(":id",$id);
    $verifica->execute();
    
    echo '<script>location.href="requisicao"</script>';
    
    
} else{
    echo '<script>slert("Erro");history.back();</script>';
}