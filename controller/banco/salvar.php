<?php
require_once __DIR__."/../../core/database.php";

if( $_POST ) {
    $solicitante = $_POST["solicitante"];
    $motivo = $_POST["motivo"];
    $status = 0;
    
    //inserir 
    $sql = "INSERT INTO requisicao(solicitante, motivo, status, data_emissao, data_alteracao)
    VALUES(:solicitante, :motivo , :status, current_date(), current_date())";
    $consulta = $pdo->prepare($sql);
    $consulta->bindParam(":solicitante", $solicitante);
    $consulta->bindParam(":motivo", $motivo);
    $consulta->bindParam(":status", $status);
    
    

    if(!$consulta->execute()){
        echo $consulta->errorInfo()[2];
        echo '<script>alert("Erro ao salvar requisicao de compra");history.back();</script>';
        
    }
    
    /*
    $select = "SELECT MAX(id) * FROM requisicao";
    $pesquisa = $pdo->prepare($sql);
    $pesquisa->execute();
    $ultimo_registro = $pesquisa->fetch(PDO::FETCH_OBJ);
    
    $insert=  "INSERT INTO requisicao_produto(id_produto,id_requisicao, qtde_produto) VALUES( :produto,:requisicao, :qtde)";
    $verificar = $pdo->prepare($insert);
    $verificar->bindParam(":requisicao", $ultimo_registro);
    $verificar->bindParam(":produto", $produto);
    $verificar->bindParam(":qtde", $qtde);
    if(!$verificar->execute()){

        echo '<script>alert("Erro ao salvar requisicao de compra");</script>';
    }
    */
    echo '<script>location.href="adicionar"</script>';

    
    

} else if($_GET){
    
    $id = $_GET["id"];
    $status = $_GET["atualizar"];
    $sql = "UPDATE requisicao SET status = :status, data_alteracao = current_date() WHERE id = :id LIMIT 1";
    $consulta = $pdo->prepare($sql);
    $consulta->bindParam(":id",$id);
    $consulta->bindParam(":status",$status);
    $consulta->execute();
    echo '<script>location.href="requisicao"</script>';
    
    
} else{
    echo '<script>slert("Erro");history.back();</script>';
}
