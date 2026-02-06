<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGM | Gestor</title>
    <!-- Importação do CSS do Bootstrap 5 via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    
        <header>
            <nav class="navbar bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand text-light">SGM - Painel do solicitante</a>
            <form class="d-flex" role="search">
            <a class="navbar-brand">    <a class="navbar-brand text-light">Olá, Maria Solicitante |</a>
        </a>
                    <button class="btn btn-outline-light"> <a href="api/logout.php" class="text-white">Sair</a></button>
            <button class="btn btn-outline-light" type="submit">Sair</button>
            </form>
        </div>
        </nav>
    </header>

    <main class="container my-4">
        <div class="d-flex justify-content-between">
            <h2 class="h5 fw-bold text-black">Minhas Solicitações</h2>
            <button class="btn btn-outline-success">+ Nova solicitação</button>
            
        </div>

        <div class="table-responsive bg-white shadow-sm rounded">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th scope="col" class="py-3 ps-4">ID</th>
                        <th scope="col" class="py-3 ps-4">Foto</th>
                        <th scope="col" class="py-3">Local</th>
                        <th scope="col" class="py-3">Descrição</th>
                        <th scope="col" class="py-3">Datas</th>
                        <th scope="col" class="py-3">STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="ps-4 fw-bold">#1</td>
                        <td></td>
                        <td>Bloco Administrativo - Recepçao</td>
                        <td>Vazando água na lampada....</td>
                        <td>04/02/2026</td>
                        <td>
                            <span class="badge rounded-pill text-bg-warning">Em Andamento</span>
                        </td>
                    </tr>
                   
                    </tr>
                </tbody>
            </table>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>