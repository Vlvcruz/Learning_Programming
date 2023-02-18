<?php
session_start();

if(!isset($_SESSION['identificador'])){
	echo "
		<script>
			alert('Você Precisa estar Logado para acessar essa Aula');
			location.href='../../index.php';
			exit();
		</script>

	";
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
	<title>Aulas PHP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>	

	<link rel="stylesheet" type="text/css" href="../../css/estilizacao.css">
	<link rel="stylesheet" type="text/css" href="../../css/aulahtml.css">
</head>
<body>

	<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
	<a href="../../index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none" id="logonavbar">
		<img src="../../imagens/projeto.png" alt="logo" width="170" height="40" class="d-inline-block align-text-top" title='Logo'>   
	</a>

	<?php
		if(isset($identificador)){
			switch ($identificador){
				case '1':
					echo"
						<div class='col-md-3 menus-nav text-end'>
							<a href='../../index.php' class='' title='voltar'><button type='button' class='btn btn-outline-primary me-2' id='sair'>Voltar A Home</button></a>
						</div>
					";
				break;
				case '2':
					echo"
						<div class='col-md-3 menus-nav text-end'>
							<a href='../../index.php' class='' title='voltar'><button type='button' class='btn btn-outline-primary me-2' id='sair'>Voltar A Home</button></a>
						</div>
						</div>
					";
				break;
				default:

				break;
					}
				}else{
					
				}
	?>

	</header>

	<div class="container">
	  <div class="row">
	    <div class="col">

	    	<div id ="aula1">
	    		<iframe width="1000" height="600" src="https://www.youtube.com/embed/qAisUeI5oKE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	    		<div class="form-text">Aula 9 De PHP</div>
	    	</div>

	    	<div id="aula2">
	    		<iframe width="1000" height="600" src="https://www.youtube.com/embed/thElQ5IhM1Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	    		<div class="form-text">Aula 10 De PHP</div>
	    	</div>

	    	<div id="aula3">
	    		<iframe width="1000" height="600" src="https://www.youtube.com/embed/3jk8fSWpQIg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	    		<div class="form-text">Aula 11 De PHP</div>
	    	</div>

	    	<div id="aula4">
	    		<iframe width="1000" height="600" src="https://www.youtube.com/embed/6QymvmX3YJU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	    		<div class="form-text">Aula 12 De PHP</div>
	    	</div>

	    	<nav aria-label="Page navigation example">
	    	  <ul class="pagination justify-content-end">
	    	    <li class="page-item">
	    	      <a class="page-link" href="aula_php2.php">Back</a>
	    	    </li>
	    	    <li class="page-item"><a class="page-link" href="aula_php.php">1</a></li>
	    	    <li class="page-item"><a class="page-link" href="aula_php2.php">2</a></li>
	    	    <li class="page-item active" aria-current="page">
	    	          <span class="page-link">3</span>
	    	    <li class="page-item disabled">
	    	      <a class="page-link">Next</a>
	    	    </li>
	    	  </ul>
	    	</nav>

	    </div>
	  </div>
	</div>

	<hr>
	<footer id="rodape">
		<br>
		<div id="logorodape">
			<h5>Learning Programming</h5>
			<figure class="figure">
			  <img src="../../imagens/projeto.png" class="figure-img img-fluid rounded" alt="logo">
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

</body>
</html>