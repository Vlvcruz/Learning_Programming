<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Validação</title>
</head>
<body>

<?php
session_start();

	if(isset($_SESSION['identificador']) != '1' || isset($_SESSION['identificador']) != '2'){
		echo "
			<script>
				alert('Eiii, Para Acessar as Aulas Você Precisa Fazer Login !');
				var check = confirm('Caso Não possua um Cadastro, Clique em OK Para Realizar');
				if (check == true){
				    location.href='../../Cadastros_login/cadastro.php';
				}else{
					location.href='../../index.php';
				}
			</script>
		";
	}else{
		echo"kkk apenas uma tela em branco amigão, VAZA FELADAPUT@";
	}
?>
</body>
</html>