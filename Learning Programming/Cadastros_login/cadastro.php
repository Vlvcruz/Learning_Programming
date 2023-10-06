<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../css/estilizacao.css">
    <title>Cadastro</title>
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
            <h1 class="display-4">Cadastre-se</h1>
            <p class="lead">Esse site e voltado para o aprendizado e técnicas de desenvolvimento, nenhum dos seus dados serão divulgados, Nossa Equipe da Learning Programming agradece por sua participação !!</p>
            <hr class="my-4">
          </div>

            <form action="cadastro_script.php" method="POST" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Endereço</label>
                <input type="text" class="form-control" name="endereco" required>
              </div>
              <div class="mb-3">
                <label for="endereco" class="form-label">Data De Nascimento</label>
                <input type="date" class="form-control" name="data_nasc" required>
              </div>
              <div class="mb-3">
                <label for="txttelefone" class="form-label">Telefone</label>
                <input type="tel" class="form-control" id="fone" name="fone" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" />
                <script type="text/javascript">$("#fone").mask("(00) 0000-00009");</script>
              </div>
              <div class="mb-3">
                <label for="formFile" class="form-label" required>Foto de Perfil</label>
                <input class="form-control" type="file" name="foto_perfil" onchange="previewImagem()">
              <br>
                <img id="foto_perfil" style="width: 300px; height: 290px;">
              </div>
              <script>
                  function previewImagem() {
                      var imagem = document.querySelector('input[name=foto_perfil]').files[0];
                      //var preview = document.querySelector('img');
                      var preview = document.getElementById('foto_perfil');

                      var reader = new FileReader();

                      reader.onloadend = function() {
                          preview.src = reader.result;
                      }

                      if (imagem) {
                          reader.readAsDataURL(imagem);
                      } else {
                          preview.src = "";
                      }
                  }
              </script>
              <figcaption class="figure-caption">OBS: Essa será sua foto de perfil, e não podera ser trocada</figcaption>
              <div class="mb-3">
                <label for="senha" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" required>
              </div>
              <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" name="senha" required>
              </div>
                <div class="d-grid gap-2">
                  <button class="btn btn-outline-primary me-2" type="submit">Cadastrar</button>
                </div>
              <br>
                <div class="d-grid gap-2">
                  <button class="btn btn-outline-primary me-2" type="reset">Limpar</button>
                </div>
            </form>
            <br>
            <div class="d-grid gap-2">
              <a href="login.php" class="btn btn-outline-primary me-2" tabindex="-1" role="button" aria-disabled="true">Ja Tenho Cadastro</a>
            </div>
        </div>
      </div>
    </div>  
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
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
          <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
          <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
        </svg> Telefone: (11) 986474052
        <br>

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
          <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
        </svg> Email: learning.Programming@suport.com.br
        <br>

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
          <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
          <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
        </svg> Endereço: R. Cambará Orli, 866 - Jardim Miray, Itaquaquecetuba - SP, 08574-150
        <br>

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
          <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
        </svg> Programadores: Vitor Leon

      </div>


      
    </footer>
    <hr>
    <div class="linguagens_cursos">
      Trabalho Interdisciplinar, Outubro 2021
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    
  </body>
</html>

