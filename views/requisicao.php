<div class="container">
    <table class="table table-hover">
            <thead>
                <tr> 
                    <td>Solicitante</td>
                    <td>Motivo</td>
                    <td>Status</td>
                    <td>Opções</td>
                </tr>
            </thead>
            <tbody>
<?php
            while($dados =  $consulta->fetch(PDO::FETCH_OBJ)){
                        $id = $dados->id;
                        $solicitante = $dados->solicitante;
                        $motivo = $dados->motivo;
                        if($dados->status == 0) {
                            $status = "Pendente";
                        }else{
                            $status = "Finalizada";
                        } 
                  ?>
                <tr> 
                    <td><?=$solicitante;?></td>
                    <td><?=$motivo;?></td>
                    <td><?=$status;?></td>
                    <td>
                        <a href="javascript:alterar(<?=$id;?>)" class="btn btn-warning btn-sm">Alterar Status</a>
                        <a type="button" class="btn btn-sm btn-danger" href="javascript:excluir(<?=$id;?>)" >Deletar</a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <a href="cadastrar" class="btn btn-primary">Cadastrar Nova</a>
        <a class="btn btn-primary" href="dash">Voltar</a>
</div>
<script>
    function excluir(id){
        
        alert("Deseja excluir registro ?");
        if (confirm){
            location.href="excluir?id="+id;
        }
        
    }
        function alterar(id){

            location.href="alterar?id="+id;
        
    }

</script>