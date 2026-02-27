<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        /* Ajuste para os cards não ficarem colados em telas pequenas */
        .card { margin-bottom: 1rem; }
    </style>
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">SGM | Gestor</a>
        <div class="ms-auto d-flex align-items-center">
            <span class="navbar-text me-3 text-white">Olá, Gestor |</span>
            <a href="api/logout.php" class="btn btn-outline-danger btn-sm">
                <i class="bi bi-box-arrow-right"></i> Sair
            </a>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <div class="text-center mb-4">
        <h1 class="display-5 fw-bold">Minha Fila de Trabalho</h1>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-3">
            <div class="card bg-success text-white p-4 text-center shadow-sm">
                <h6 class="text-uppercase opacity-75">Novas Solicitações</h6>
                <h1 class="display-4 fw-bold">0</h1>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card bg-warning text-dark p-4 text-center shadow-sm">
                <h6 class="text-uppercase opacity-75">Em Andamento</h6>
                <h1 class="display-4 fw-bold">0</h1>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card bg-danger text-white p-4 text-center shadow-sm">
                <h6 class="text-uppercase opacity-75">Críticos / Urgentes</h6>
                <h1 class="display-4 fw-bold">0</h1>
            </div>
        </div>

    </div>
</div>

<div class="container mt-4">
    <div class="d-flex justify-content-center gap-3">
        <a href="gestor_chamados.php" class="btn btn-secondary btn-lg px-4">
            <i class="bi bi-list-ul"></i> Gerenciar Chamados
        </a>    
        <a href="gestor_gerenciar_ambientes.php" class="btn btn-outline-primary btn-lg px-4">
            <i class="bi bi-gear"></i>Ambientes
        </a>
        <a href="gestor_gerenciar_ambientes.php" class="btn btn-outline-warning btn-lg px-4">
            <i class=""></i> Blocos
        </a>
        <a href="gestor_gerenciar_ambientes.php" class="btn btn-outline-success btn-lg px-4">
            <i class=""></i>Tipo de serviço
        </a>
        <a href="gestor_gerenciar_ambientes.php" class="btn btn-outline-danger btn-lg px-4">
            <i class=""></i>Usarios
        </a>
        </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>