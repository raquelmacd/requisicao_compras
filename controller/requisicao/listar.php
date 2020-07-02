<?php
require_once __DIR__."/../../core/database.php";
$sql = "SELECT * FROM requisicao";
$consulta = $pdo->prepare($sql);
$consulta->execute();


require_once __DIR__."/../../views/listaRequisicao.php";

