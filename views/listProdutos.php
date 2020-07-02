<?php

$id_requisicao = $_GET["id"];

$select = "SELECT p.produto, rp.qtde_produto, rp.ultima_venda FROM requisicao_produto AS rp
            INNER JOIN produtos AS p ON(rp.id_produto = p.id) 
            WHERE id_requisicao = :id ";
$pesquisar = $pdo->prepare($select);
$pesquisar->execute();

?>

<div class="container">
    <h1>Produtos nesta requisição</h1>
    <hr>
    
    <table class="table">
    <thead>
        <tr>
            <td>Produto</td>
            <td>Quantidade</td>
            <td>Última Venda</td>
        </tr>
        </thead>
        <tbody>
        <?php 
        while ($produtos = $pesquisar->fetch(PDO::FETCH_ASSOC)){
        ?>
            <tr>
                <td><?=$produtos->produto;?></td>
                <td><?=$produtos->qtde_produto;?></td>
                <td><?=$produtos->ultima_venda;?></td>
            </tr>
        <?php
        };?>
        </tbody>
    </table>
</div>