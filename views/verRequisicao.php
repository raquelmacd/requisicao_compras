<div class="container">
    <table class="table table-hover">
            <thead>
                <tr> 
                    <td>Emissão</td>
                    <td>Solicitante</td>
                    <td>Produto</td>
                    <td>Quantidade</td>
                </tr>
            </thead>
            <tbody>
<?php
            while($dados =  $consulta->fetch(PDO::FETCH_OBJ)){
                require_once __DIR__."/../core/functions.php";
                        $solicitante = $dados->solicitante;
                        $emissao = $dados->data_emissao;
                        $emissao = formatar($emissao);
                        $produto  = $dados->produto;
                        $qtde = $dados->qtde_produto;

                  ?>
                <tr> 
                    <td><?=$emissao;?></td>
                    <td><?=$solicitante;?></td>
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
</div>