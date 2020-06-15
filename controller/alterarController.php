<?php
require_once __DIR__."/../core/database.php";
$id = $_GET["id"];
$sql = "SELECT status FROM compras WHERE id = :id LIMIT 1";
$consulta = $pdo->prepare($sql);
$consulta->bindParam(":id",$id);
$consulta->execute();

$dados = $consulta->fetch(PDO::FETCH_OBJ);

$status = $dados->status;


require_once __DIR__."/../views/alterar.php";

