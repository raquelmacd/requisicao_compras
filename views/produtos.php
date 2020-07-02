<?php
require_once __DIR__.'/../core/database.php';
$select = "SELECT * FROM produtos";
$pesquisar = $pdo->prepare($select);
$pesquisar->execute();

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags ObrigatÃ³rias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  </head>
  <body>
  
  <div class="container">
    <table class="table table-hover">
    <thead>
        <tr>
            <td>Id</td>
            <td>Produto</td>
            <td>Opções</td>
        </tr>
        </thead>
        <tbody>
        <?php 
        while ($produtos = $pesquisar->fetch(PDO::FETCH_OBJ)){
        ?>
            <tr>
                <td><?=$produtos->id;?></td>
                <td><?=$produtos->produto;?></td>
                <td><a type="button" class="btn btn-sm btn-danger" href="excluirProduto?id=<?=$produtos->id;?>" >Deletar</a></td>
            </tr>
        <?php
        };?>
        </tbody>
    </table>
  </div>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="../assets/jquery/jquery-3.3.1.slim.min.js" ></script>
    <script src="../assets/popper/popper.min.js" ></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js" ></script>
  </body>
</html>

