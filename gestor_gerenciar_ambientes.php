<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar ambiente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand " href="gestor_dashboard.php">SGM Admin</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link " href="gestor_chamados.php">Chamados</a>
                <a class="nav-link active" href="gestor_gerenciar_ambientes.php">Ambientes</a>
                <a class="nav-link" href="api/logout.php">Sair</a>
            </div>
        </div>
    </nav>
    <main>
        <div class="container">
        <div class="d-flex justify-content-between align-items-center" >
            <h2 class="mb-4">Todos os Ambientes</h2>
            <a class="btn btn-success" href="gestor_criar_ambientes.php"><i class="bi bi-plus-lg"></i>Criar Ambiente</a>
        </div>

        <div class="mb-3 d-flex gap-2">
            <button class="btn btn-sm btn-outline-secondary" onclick="carregarChamados('todos')">Todos</button>
            <button class="btn btn-sm btn-outline-primary" onclick="carregarChamados('usando')">Usando</button>
            <button class="btn btn-sm btn-outline-warning" onclick="carregarChamados('ativos')">Ativos</button>
        </div>

        <div class="card shadow">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Foto</th>
                            <th>Nome ambiente</th>
                            <th>Nome do Bloco</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody id="tabelaGeral">
                        <tr>
                            <th scope="row">1</th>
                            <td></td>
                            <td>Recepção</td>
                            <td>Bloco administrativo</td>
                            <td><span class="badge bg-danger text-dark">Fechado</span></td>
                            <td><a class="btn btn-primary" href="gestor_criar_ambientes.php"><i class="bi bi-pencil-square me-2"></i>Atualizar</a>
                            <a type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-trash3 me-2" ></i>Deletar</a>
                            </td>
                            </tr>
                        </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <h2>Voçê tem certeza q deseja excluir essa ambiente?</h2>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-danger">Excluir</button>
        </div>
        </div>
    </div>
    </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>