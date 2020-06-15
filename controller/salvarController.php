<?php
require_once __DIR__."/../core/database.php";

if( $_POST ) {
    $solicitante = $_POST["solicitante"];
    $motivo = $_POST["motivo"];
    $status = $_POST["status"];
    $produto = $_POST["produto"];
    $qtde = $_POST["qtde"];
    $valor = $_POST["valor"];
    
    //inserir 
    $sql = "INSERT INTO compras(solicitante, motivo, status)
    VALUES(:solicitante, :motivo, :status)";
    $consulta = $pdo->prepare($sql);
    $consulta->bindParam(":solicitante", $solicitante);
    $consulta->bindParam(":motivo", $motivo);
    $consulta->bindParam(":status", $status);

    if(!$consulta->execute()){

        echo '<script>alert("Erro ao salvar compra");</script>';
    }
      
    
    echo '<script>location.href="requisicao"</script>';

    
    

} else if($_GET){
    
    $id = $_GET["id"];
    $status = $_GET["atualizar"];
    $sql = "UPDATE compras SET status = :status WHERE id = :id LIMIT 1";
    $consulta = $pdo->prepare($sql);
    $consulta->bindParam(":id",$id);
    $consulta->bindParam(":status",$status);
    $consulta->execute();
    echo '<script>location.href="requisicao"</script>';
    
    
} else{
    echo '<script>slert("Erro");history.back();</script>';
}
