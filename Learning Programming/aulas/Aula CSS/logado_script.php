<?php
session_start();

if(!isset($_SESSION['identificador'])){
	
}else{
	$identificador = $_SESSION['identificador'];
	$id = $_SESSION['id']; 
	$nome_usuario = $_SESSION['nome'];

	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Validação</title>
</head>
<body>

	<?php

		require_once "../../conexao/conexao.php";



		$id_curso = '2';
		$_SESSION['id_curso'] = $id_curso;
		
		$status = '1';



			if(empty($identificador) == 'NULO'){
				echo "
					<script>
						alert('kralh0, Para de tentar Acessar as abas diretamente, faça Login !');
						location.href='../../index.php';
						exit();
					</script>
				";
			}else{

				$pesquisa ="SELECT id_usuario FROM inscricao WHERE id_usuario = '$id' AND id_curso = '$id_curso'";
					$insercao = mysqli_query($conexao, $pesquisa);
						$conclusao = mysqli_num_rows($insercao);

					if ($conclusao == '1'){
						echo "
							<script>
								alert('Seja Bem Vindo de volta $nome_usuario a Aula de CSS, Bons Estudos');
								location.href='aula_css.php';
								exit();
							</script>
						";
					}else{
						$inscricao="INSERT INTO inscricao(`id_usuario`, `id_curso`, `status`) VALUES ('$id', '$id_curso', '$status')";
							$finalizacao = mysqli_query($conexao, $inscricao);
					}

					if (isset($finalizacao) == 'TRUE'){
						echo "
						  <script>
						  	alert('Cadastro Realizado com sucesso, Bons Estudos $nome_usuario');
						  	location.href='aula_css.php';
						  </script>
						";
					}else{
						echo "
						  <script>
						  	alert('Erro 404');
						  	location.href='../../index.php';
						  </script>
						";
				}
			}

	?>
			

</body>
</html>