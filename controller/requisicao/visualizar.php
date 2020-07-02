<?php
require_once __DIR__."/../../core/database.php";
$id = $_GET["id"];

$sql = "SELECT r.*, date_format(r.data_emissao, '%d/%m/%Y' ) as data,rp.id_produto,rp.qtde_produto, p.produto
        FROM requisicao AS r 
        INNER JOIN requisicao_produto AS rp ON(r.id = rp.id_requisicao)
        INNER JOIN produtos as p ON(rp.id_produto = p.id)
        WHERE r.id = :id" ;
$consulta = $pdo->prepare($sql);
$consulta->bindParam(":id",$id );
$consulta->execute();

require_once __DIR__."/../../views/verRequisicao.php";