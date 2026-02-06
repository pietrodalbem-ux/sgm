<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGM | Gestor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    
        <header>
            <nav class="navbar bg-dark">
            <div class="container-fluid">
            <a class="navbar-brand text-light">SGM Admin</a>
            <form class="d-flex" role="search">
            </a>
            <button class="btn"> <a href="#" class="text-white text-decoration-none" >Chamados</a></button>
            <button class="btn"> <a href="#" class="text-white text-decoration-none">Locais</a></button>
            <button class="btn"> <a href="api/logout.php" class="text-white text-decoration-none">Sair</a></button>
            </form>
        </div>
        </nav>
    </header>

    <main class="container my-4">
        <div class="">
            <h1 class="h1 fw-bold text-black">Todos os chamados</h1>  
            <button type="button" class="btn btn-outline-secondary "><a href="#" class="text-decoration-none text-secondary">Todos</a></button>
            <button type="button" class="btn btn-outline-primary"><a href="#" class="text-decoration-none text-primary">Abertos</a></button>
            <button type="button" class="btn btn-outline-warning"><a href="#" class="text-decoration-none text-warning">Em execução</a></button>
            <button type="button" class="btn btn-outline-success"><a href="#" class="text-decoration-none text-success">Concluidos</a></button>         
        </div>

        <div class="table-responsive bg-white shadow-sm rounded">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th scope="col" class="py-3 ps-4">ID</th>
                        <th scope="col" class="py-3 ps-4">Solicitante</th>
                        <th scope="col" class="py-3">Local/Tipo</th>
                        <th scope="col" class="py-3">Prioridade</th>
                        <th scope="col" class="py-3">Técnico</th>
                        <th scope="col" class="py-3">Status</th>
                        <th scope="col" class="py-3">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="ps-4 fw-bold">#1</td>
                        <td>Maria Solicitante</td>
                        <td>Bloco Administrativo - Recepçao</td>
                        <td>Alta</td>
                        <td>João Técnico</td>
                        <td>Fechado</td>
                        <td>
                            <span class="badge rounded-pill text-bg-primary">Gerenciar</span>
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