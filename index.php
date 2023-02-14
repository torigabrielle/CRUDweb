<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">

    <title>Produto</title>
  </head>
  <body>
    <style>
      body {
        font-family: 'Open Sans', sans-serif;
        letter-spacing: 0.1pt;
      } 
      button {
        margin: 0px 1.4px 0px 1.4px;
      }
    </style>


    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Produto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="index.php">Início</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    produto
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="?page=produto-listar">Listar</a></li>
                    <li><a class="dropdown-item" href="?page=produto-cadastrar">Cadastrar</a></li>
                  </ul>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php
                    include('config.php'); // incluindo o arquivo de configuração
                    switch (@$_REQUEST['page']) { // verificando qual página deve ser carregada
                         /* produto  */
                        case 'produto-cadastrar': 
                            include('pages/produto-cadastrar.php');
                            break;
                        case 'produto-listar':
                            include('pages/produto-listar.php');
                            break;
                        case 'produto-editar':
                            include('pages/produto-editar.php');
                            break;
                        case 'produto-salvar':
                            include('pages/produto-salvar.php');
                            break;
                        // caso não seja nenhum dos casos acima, carrega a página inicial
                        default:
                           include('pages/main.php');
                            break;
                    }
                ?>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>