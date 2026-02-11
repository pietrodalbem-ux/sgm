<?php
session_start();
require_once '../config/database.php';

header('Content-Type: application/json; charset=utf-8');

if (!isset($_SESSION['user_id'])) {
    echo json_encode(["success" => false, "message" => "Acesso negado"]);
    exit;
}

$chamado_id = $_GET['id'] ?? null;
$usuario_id = $_SESSION['user_id'];

if (!$chamado_id) {
    echo json_encode(["success" => false, "message" => "ID do chamado não fornecido"]);
    exit;
}

$sql = "SELECT 
            id, 
            arquivo_nome, 
            arquivo_path, 
            data_upload 
        FROM anexos 
        WHERE chamado_id = ? AND solicitante_id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $chamado_id, $usuario_id);
$stmt->execute();
$res = $stmt->get_result();

$anexos = [];
while ($row = $res->fetch_assoc()) {
    $anexos[] = $row;
}

echo json_encode([
    "success" => true,
    "chamado_id" => $chamado_id,
    "anexos" => $anexos
]);