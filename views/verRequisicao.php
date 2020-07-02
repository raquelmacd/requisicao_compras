<div class="container">
    <table class="table table-hover">
            <thead>
                <tr> 
                    <td>Produto</td>
                    <td>Quantidade</td>
                </tr>
            </thead>
            <tbody>
<?php
            while($dados =  $consulta->fetch(PDO::FETCH_OBJ)){
                        $solicitante = $dados->solicitante;
                        $emissao = $dados->data;
                        $produto  = $dados->produto;
                        $qtde = $dados->qtde_produto;

                  ?>
                <tr> 
                    <td><?=$produto;?></td>
                    <td><?=$qtde;?></td>

                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <a href="cadastrar" class="btn btn-primary">Cadastrar Nova</a>
        <a class="btn btn-primary" href="requisicao">Voltar</a>
        <a type="button" class="btn btn-outline-primary" href="inserirPro?id=<?=$id;?>" >Inserir Produtos</a>
        
</div>