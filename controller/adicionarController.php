<?php
require_once __DIR__."/../core/database.php";
$sql = "SELECT max(id) as id FROM requisicao";
$consulta = $pdo->prepare($sql);
$consulta->execute();
$requisicao =  $consulta->fetch(PDO::FETCH_OBJ);

//echo $requisicao->id;



require_once __DIR__."/../views/adicionaProduto.php";