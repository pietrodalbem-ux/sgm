<?php

session_start();
require_once '../config/database.php';
header('Content-Type: application/json');

$sql = "SELECT chamados.id_chamado, ambientes.nome, chamados.descricao_problema, chamados.data_abertura, chamados.status 
        FROM chamados 
        INNER JOIN ambientes ON chamados.id_ambiente = ambientes.id_ambiente";

$res = $conn->query($sql);
$dados = $res->fetch_all(MYSQLI_ASSOC);

echo json_encode($dados);