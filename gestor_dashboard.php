<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <header>
     <nav class="navbar bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-light">SGM | Gestão Administrativa</a>
    <form class="d-flex" role="search">
    <a class="navbar-brand">    <a class="navbar-brand text-light">Olá, Admin Gestor |</a>
</a>
            <button class="btn btn-outline-light"> <a href="api/logout.php" class="text-white">Sair</a></button>

      <button class="btn btn-outline-success" type="submit">Sair</button>
    </form>
  </div>
</nav>
    </header>
            <main>
        <div class="row">
        <div class="col-sm-4 mb-3 mb-sm-0 ">
            <div class="card text-bg-primary mb-3">
            <div class="card-body">
                <h1 class="card-title">Novas solicitações</h1>
                <h2 class="card-text">0</h2>
            </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card text-bg-warning mb-3">
            <div class="card-body">
                <h1 class="card-title text-light">Em atendimento</h1>
                <h2 class="card-text text-light">0</h2>
            </div>
            </div>
        </div>
            <div class="col-sm-4">
            <div class="card text-bg-danger mb-3">
            <div class="card-body">
                <h1 class="card-title">Críticos / Urgentes</h1>
                <h2 class="card-text">0</h2>
            </div>
            </div>
        </div>
        </div>
        <div>
            <button type="button" class="btn btn-secondary">Gerenciar Todos os Chamados</button>
            <button type="button" class="btn btn-outline-primary"><i class="bi bi-geo-alt"></i>Configurar ambiente</button>
        </div>
        </main>
    <footer></footer>
</body>
</html>