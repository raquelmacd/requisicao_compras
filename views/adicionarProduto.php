<div class="container">
    <div class="mt-5">
        <form method="post" action="inserir?id=<?=$requisicao->id;?>">
            <div class="form-group">
            <label for="ultima_venda">Última venda</label>
            <input type="date" class="form-control" id="ultima_venda" name="ultima_venda" >
          </div>
            <div class="form-group">
                <label for="produto">Produto</label>    
                <select type="text" name="produto" class="form-control" list="produtos">

                    <option></option>
                    <?php
                    $select = "SELECT * FROM produtos";
                    $pesquisar = $pdo->prepare($select);
                    $pesquisar->execute();
                    
                    while($produtos =  $pesquisar->fetch(PDO::FETCH_OBJ)){
                        
                        echo '<option value="'.$produtos->id.'">'.$produtos->produto.'</option>';
                    }
                    
                    ?>

                </select>

                <label for="qtde">Quantidade</label>
                <input type="number" name="qtde" id="qtde"  class="form-control" min="1">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a class="btn btn-primary" href="dash">Voltar</a>
        </form>
    </div>
      <div class="mt-5">
          <iframe src="listProdutos.php" name="produtos" width="100%" height="200px"></iframe>
      </div>
  </div>