<?php
session_start();
  
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/estilizacao.css">
    <title>Cadastro Finalizado</title>
  </head>
  <body>
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="../index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none" id="logonavbar">
        <div class="container">
          <img src="../imagens/projeto.png" alt="logo" width="170" height="40" class="d-inline-block align-text-top">
        </div>

      </a>
    </header>

    <div class="container">
      <div class="row">
        <div class="col">
          <div class="jumbotron">
            <h1 class="display-4">Dados Cadastros !!</h1>
            <p class="lead">
                Muito obrigado por fazer parte do nosso projeto de aprendizagem, fique tranquilo pois seus dados não serão divulgados ou vendidos a terceiros !!!</p>
            <hr class="my-4">
          </div>

          <?php
            require_once"../conexao/conexao.php";

            $senha = $_SESSION['senha'];
            $senha = sha1($senha);
            $email = $_SESSION["email"];

            $query ="SELECT id,nome,endereco,data_nasc,telefone,email,senha,identificador FROM usuario WHERE email = '$email' AND senha = '$senha'";
            
            $execut = mysqli_query($conexao, $query);
            $conectou = mysqli_num_rows($execut);

            if($conectou == 1){
              $usuario = mysqli_fetch_array($execut);
              $_SESSION['id'] = $usuario["id"];
              $_SESSION['identificador'] = $usuario["identificador"];
              $_SESSION['nome'] = $usuario["nome"];
              $_SESSION['endereco'] = $usuario["endereco"];
              $_SESSION['data_nasc'] = $usuario["data_nasc"];
              $_SESSION['telefone'] = $usuario["telefone"];
              $_SESSION['email'] = $usuario["email"];

              echo "
                    <div class='d-grid gap-2 col-6 mx-auto'>
                      <a href='../index.php' class='btn btn-outline-primary me-2' type='button'>Voltar a Home</button></a>
                      <button class='btn btn-outline-primary me-2' type='button' data-bs-toggle='offcanvas' data-bs-target='#offcanvasRight' aria-controls='offcanvasRight'>Seus Dados</button>
                    </div>  
              ";
            }else{
            }

          ?>
        </div>
      </div>
    </div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Veja Seus Dados Cadastrados</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <?php

        $nome = $_SESSION["nome"];
          echo "Nome: $nome";
        ?>
        <br>
        <hr>
        <?php
        $endereco = $_SESSION["endereco"];
          echo "Endereço: $endereco";
        ?>
        <br>
        <hr>
        <?php

        $data = $_SESSION["data_nasc"];
        $explode = explode("-", $data);
        $data2 = $explode[2]."/".$explode[1]."/".$explode[0]; 

          echo "Data De Nascimento: $data2";
        ?>
        <br>
        <hr>
        <?php
        $fone = $_SESSION["fone"];
          echo "Telefone: $fone";
        ?>
        <br>
        <hr>
        <?php
        $email = $_SESSION["email"];
          echo "Email: $email";
        ?>
        <br>
        <hr>
        Por motivos de segurança sua senha foi Criptografada ao ser armazenada no nosso sistema!
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h6>Equipe de Suport Learning Programming</h6>
      </div>
    </div>

        <script type="text/javascript">
          swal("Dados Cadastrados","Seus Dados Foram Cadastrados Com Sucesso");
        </script>

      <hr class="unico">
      <footer id="rodape">
        <br>
        <div id="logorodape">
          <h5>Learning Programming</h5>
          <figure class="figure">
            <img src="../imagens/projeto.png" class="figure-img img-fluid rounded" alt="logo">
              <figcaption class="figure-caption text-end">Logo</figcaption>
          </figure>
        </div>
        <div id="contatos">
          <svg xmlns="//www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
            <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
            <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
          </svg> Telefone: (11) 986474052
          <br>

          <svg xmlns="//www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
          </svg> Email: learning.Programming@suport.com.br
          <br>

          <svg xmlns="//www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          </svg> Endereço: R. Cambará Orli, 866 - Jardim Miray, Itaquaquecetuba - SP, 08574-150
          <br>

          <svg xmlns="//www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
            <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
          </svg> Programadores: Vitor Leon

        </div>  
      </footer>
      <hr>

      <div class="linguagens_cursos">
        Trabalho Interdisciplinar, Outubro 2021
      </div>

    <script src="//cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script> 
    <script src="//cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="ha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-s
    kAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

  </body>
</html> 