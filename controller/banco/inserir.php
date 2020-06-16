<?php
require_once __DIR__."/../../core/database.php";
    
$requisicao_id = $_GET["id"];

if($_POST){

    $produto        = $_POST["produto"] ?? "";
    $qtde_produto   = $_POST["qtde"] ?? "";
    $ultima_venda   = $_POST["ultima_venda"] ?? "";
    //print_r($_POST);
    if( empty($produto) ){
        echo '<script>alert("Erro ao incluir produto");</script>';
    } else{
        //inserir dentro do quadrinho_personagem
        $sql = "INSERT INTO requisicao_produto(id_produto, id_requisicao, qtde_produto, ultima_venda)
        VALUES(:produto, :requisicao, :qtde, :ultima_venda)";
        $consulta = $pdo->prepare($sql);
        $consulta->bindParam(":produto", $produto);
        $consulta->bindParam(":requisicao", $requisicao_id);
        $consulta->bindParam(":qtde", $qtde_produto);
        $consulta->bindParam(":ultima_venda", $ultima_venda);

        if (!$consulta->execute()){
            echo '<script>alert("Não foi possível inserir o produto");</script>';
        }
    }
    
    echo '<script>location.href="requisicao";</script';
}
