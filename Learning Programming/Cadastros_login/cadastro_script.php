<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Cadastro</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <?php

          require_once "../conexao/conexao.php";

          $nome = $_POST['nome'];
          $endereco = $_POST['endereco'];
          $data_nasc = $_POST['data_nasc'];
          $fone = $_POST['fone'];
          $email = $_POST['email'];
          $senha = $_POST['senha'];
          $senhabd = sha1($senha);
          $identificador = '2';

          session_start();

          $_SESSION['data_nasc'] = $data_nasc;
          $_SESSION['fone']= $fone;
          $_SESSION['nome'] = $nome;
          $_SESSION['email'] = $email;
          $_SESSION['endereco'] = $endereco;
          $_SESSION['senha'] = $senha;
          $_SESSION['senhabd'] = $senhabd;

          $checagem = "SELECT email FROM usuario WHERE email = '$email' ";
            $checar = mysqli_query($conexao, $checagem);
             $contem = mysqli_num_rows($checar);


          if(strlen($nome) > 100 || empty($nome)){
            echo "
                  <script>
                      alert('Erro-NOME: Excesso de caracteres ou nenhuma caracter inserida');
                      history.back();
                      exit();
                  </script>
                ";
          }elseif(strlen($endereco) > 200 || empty($endereco)){
            echo "
                <script>
                  alert('Erro-ENDEREÇO: Excesso de caracteres ou nenhuma caracter inserida');
                  history.back();
                  exit();
                </script>
            ";
          }elseif(strlen($email) > 100 || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo"
                  <script>
                    alert('Email Inválido');
                    history.back();
                    exit();
                  </script>
              ";
          }elseif ($contem==1){
              echo "
              <script>
                alert('Eita, Ja Existe esse email Cadastrado !');
                history.back();
                exit();
              </script>
            ";
          }elseif(isset($_FILES['foto_perfil'])){
            $arquivo = $_FILES['foto_perfil'];
          }else{
            echo "
              <script>
                alert('arquivo Nao Identificado');
                history.back();
                exit();
              </script>
            ";
          }


            if($arquivo['error']){
              echo "Erro ao carregar arquivo";
            }

            $pasta = "../usuarios/ft_perfil/";
            $nomeArquivo = $arquivo['name'];
            $novonomeArquivo = uniqid();
            $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));
            $caminho = $pasta . $novonomeArquivo . "." . $extensao;
            $_SESSION['caminho'] = $caminho;
            $_SESSION['arquivo'] = $arquivo;

            if ($extensao != "jpg" && $extensao != "png" && $extensao != "jpeg"){
                echo "
                  <script>
                    alert('Tipo de arquivo não aceito...');
                    history.back();
                    exit();
                  </script
                ";
            }else{

              $tudook = move_uploaded_file($arquivo["tmp_name"], $pasta . $novonomeArquivo . "." . $extensao);
               if ($tudook){
                $query ="INSERT INTO `usuario`(`nome`, `endereco`, `data_nasc`, `telefone`, `email`, `senha`, `ft_perfil_name`, `caminho`, `identificador`) VALUES ('$nome', '$endereco','$data_nasc' ,'$fone', '$email', '$senhabd','$novonomeArquivo','$caminho', '$identificador')";
               }else{
                 echo "Erro nao sei aonde....";
               }
              
            }

          

            $inserir = mysqli_query($conexao,$query);

          if (isset($inserir) == 'TRUE'){
            echo "
              <script>
                location.href='sucesso.php';
              </script>'
            ";
          }else{
            echo "
                <script>
                  history.back();
                </script>'
            ";
          }


        ?>
      </div>
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    
  </body>
</html>