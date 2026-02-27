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
                <a class="nav-link active" href="api/logout.php">Sair</a>
            </div>
        </div>
    </nav>
    <main>
            <div class="d-flex justify-content-center align-items-center text-center m-5">
            <form class="w-50">
            <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label"><h2>Atualizar Ambientes</h2></label>
                <input type="email" class="form-control border-success" id="exampleFormControlInput1" placeholder="Ex:Nome do local do ambiente">
            </div>

            <select class="form-select form-select-sm" aria-label="Small select example">
                <option selected>Selecione a sala de Ambiente</option>
                <option value="1">Sala do ensino fundamental</option>
                <option value="2">Cozinha</option>
                <option value="3">Quadra</option>
            </select>
            <button type="button" class="btn btn-success shadow-sm m-5">
                + Nova Solicitação
            </button> 
        </form>
    </div>
    </main>
</body>
</html>