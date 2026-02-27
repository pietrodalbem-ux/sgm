<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGM | Gestor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f4f7f6;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        
        .navbar {
            background-color: #20c997 !important; 
            padding: 1rem 0;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
        
        .navbar-brand {
            font-weight: 600;
            color: white !important;
        }

        .btn-sair {
            border: 1px solid white;
            color: white;
            padding: 5px 20px;
        }

        .btn-sair:hover {
            background-color: white;
            color: #20c997;
        }

       
        .content-area {
            margin-top: 50px;
        }

        /* Card básico para a mensagem */
        .status-card {
            background: white;
            border-radius: 8px;
            border: 1px solid #e0e0e0;
            padding: 3rem;
            text-align: center;
        }

        .text-info-vazio {
            color: #6c757d;
            font-size: 1.1rem;
            margin-bottom: 0;
        }
    </style>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <span class="navbar-brand">SGM | Técnico | Luiz</span>
            <div class="ms-auto">
          <button> <a href="api/logout.php" class="btn bg-light" type="submit">Sair</a></button>
            </div>
        </div>
    </nav>
</header>

<main class="container content-area">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h3 class="mb-4 text-dark" style="font-weight: 500;">Minha Fila de Trabalho</h3>
            
            <div class="status-card">
                <p class="text-info-vazio">Nenhuma Tarefa Pendente</p>
            </div>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>