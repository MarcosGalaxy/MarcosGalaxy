<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php
        require_once ('library.php');
        
        ?>
    </head>
    <body>

    <header class="header">
        <nav class="nav">
            <a class="nav-link active" ario-current="page" href="index.php">
                <img src="imagens/paw-icon.png" alt="PawPartner" width="35" height="29">
            </a>
          <button class="hamburger"></button>
          <ul class="nav-list">
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Nossos serviços</a></li>
            <li><a href="#">Criadores</a></li>
          </ul>
          <a href="logar.php"><button type="button" class="btn btn-outline-light">Entrar |
                Registrar</button></a>
        </nav>
      </header>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    </body>
</html>