<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGM | Painel do Solicitante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .custom-navbar {
            background-color: #87CEFA; 
        }
        .table td, .table th {
            vertical-align: middle;
        }
    </style>
</head>
<body class="bg-light">

    <header>
        <nav class="navbar custom-navbar shadow-sm">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">SGM | Painel Do Solicitante</span>
                <div class="d-flex align-items-center">
                    <span class="me-3">Olá! Luma solicitante</span>
                     <button> <a href="api/logout.php" class="btn bg-light">Sair</a></button>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-5">
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Minhas Solicitações</h3>
            <button type="button" class="btn btn-primary shadow-sm">
                + Nova Solicitação
            </button>
        </div>

        <hr class="my-4">

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Data</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">#1</th>
                        <td>foto</td>
                        <td>Bloco administrativo - Recepção: vazando água na lâmpada</td>
                        <td>06/02/2026</td> <td><span class="badge bg-warning text-dark">Fechado</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>