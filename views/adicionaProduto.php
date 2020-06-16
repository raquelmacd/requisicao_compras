
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags ObrigatÃ³rias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">

    <title>Compras</title>
  </head>
  <body>
  
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
  </div>
      <script>
      </script>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="../assets/jquery/jquery-3.3.1.slim.min.js" ></script>
    <script src="../assets/popper/popper.min.js" ></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js" ></script>
  </body>
</html>
