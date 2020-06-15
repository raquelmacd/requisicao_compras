<?php
    

    $compra = $_GET["compra"] ?? "";

    include "../core/database.php";

    if($_POST){
        
        $produto        = $_POST["produto"] ?? "";
        $valor          = $_POST["valor"] ?? "";
        $qtde_produto   = $_POST["valor"] ?? "";
        //print_r($_POST);
        if( empty($produto) ){
            echo '<script>alert("Erro ao incluir produto");</script>';
        } else{
            //inserir dentro do quadrinho_personagem
            $sql = "INSERT INTO produtos(produto, valor, qtde_produto)
            VALUES(:produto, :valor, :qtde)";
            $consulta = $pdo->prepare($sql);
            $consulta->bindParam(":produto", $produto);
            $consulta->bindParam(":valor", $valor);
            $consulta->bindParam(":qtde", $qtde_produto);
            
            if (!$consulta->execute()){
                echo '<script>alert("Não foi possível inserir o produto");</script>';
            }
        }
    }
?>
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
        <table class="table table-hover">
            <thead>
                <tr> 
                    <td>Produtos</td>
                    <td>Quantidade</td>
                    <td>Valor</td>
                    <td>Opções</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM compra_produto WHERE id_compra = :id_compra";
                    $consulta = $pdo->prepare($sql);
                    $consulta->bindParam(":id_compra", $compra );
                    while ($dados = $consulta->fetch(PDO::FETCH_OBJ)){
                        
                        
                    }
                ?>
                <tr> 
                    <td>Produto 1</td>
                    <td>
                        <input type="number" class="form-control col-12 col-md-2"  value="1" min="1">
                    </td>
                    <td>
                        <a href="javascript:adiciona(<?=$qtde_produto;?>)" class="btn btn-info">+</a>
                        <a href="javascript:retira(<?=$qtde_produto;?>)" class="btn btn-info">-</a>
                    </td>
                    <td><button type="button" class="btn btn-sm btn-danger" >Deletar</button></td>
                </tr>
            </tbody>
        </table>
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
