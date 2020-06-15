<div class="container">  
    <div class="row">
        <form action="salvar" method="get">
    <div class="form-group">
    <label for="status">Status</label>
        <input type="hidden" value="<?=$_GET["id"];?>" name="id"> 
        <select type="text" class="form-control" id="atualizar" name="atualizar">
          <?php       if($dados->status == 0) {
                            $descricao = "Pendente";

    ?>
            <option value="<?=$status;?>"><?=$descricao;?></option>
            <option value="1">Finalizada</option>
            <?php
                        }else{
                            $descricao = "Finalizada";?>
            <option value="<?=$status;?>"><?=$descricao;?></option>
            <option value="0">Pendente</option>
                    <?php    } ?>
        </select>
    </div>


        <button type="submit" class="btn btn-primary">Salvar</button>
        <a class="btn btn-primary" href="requisicao">Cancelar</a>
        </form>
    </div>
</div>
<script>
    
</script>