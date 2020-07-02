<?php

require_once __DIR__."/../../core/database.php";

if($_GET){
    
    $id = $_GET["id"];
    $sql = "DELETE FROM produtos WHERE id = :id LIMIT 1";
    $consulta = $pdo->prepare($sql);
    $consulta->bindParam(":id",$id);
    
    // BLOQUEAR EXCLUSAO DE ITENS NA REQUISICAO _PRODUTOS
    $select = "SELECT id FROM requisicao_produto where id_produto = :id limit 1";
    $verifica = $pdo->prepare($select);
    $verifica->bindParam(":id",$id);
    $verifica->execute();
    $dados = $verifica->fetch(PDO::FETCH_OBJ);
    
    if(!empty($dados->id)){
        echo '<script>alert("Erro ao excluir produto");history.back();</script>';
        exit;
    } else if ($consulta->execute()){

        echo '<script>location.href="requisicao"</script>';
    }
    
    echo '<script>alert("Erro");history.back();</script>';
    
    
} else{
    echo '<script>alert("Erro");history.back();</script>';
}