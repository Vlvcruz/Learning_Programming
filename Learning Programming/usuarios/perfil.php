<?php
session_start();

if(!isset($_SESSION['identificador'])){
	echo "
		<script>
			alert('ALERTA DE VIRUS: MELHOR VOCÊ SAIR DAQUI...');
			location.href='../index.php';
		</script>
	";
}else{
	$identificador = $_SESSION['identificador'];
	$id = $_SESSION['id']; 
	$nome_us = $_SESSION['nome'];
	$endereco_us = $_SESSION['endereco'];

	$data = $_SESSION["data_nasc"];
   	  $explode = explode("-", $data);
        $nasc_us = $explode[2]."/".$explode[1]."/".$explode[0];

    $telefone_us = $_SESSION['telefone'];
    $email_us = $_SESSION['email'];
    $caminho = $_SESSION['caminho'];

	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Perfil</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/estilizacao.css">
	<link rel="stylesheet" type="text/css" href="css/estilizacaoperfil.css">
</head>
<body>

	<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
	<a href="../index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none" id="logonavbar">
		<img src="../imagens/projeto.png" alt="logo" width="170" height="40" class="d-inline-block align-text-top" title='Logo'>   
	</a>
		<?php
			if(isset($identificador)){
				switch ($identificador){
					case '1':
						echo"
							<div class='col-md-3 menus-nav text-end'>
								<a href='../index.php' class='' title='salvar'><button type='button' class='btn btn-outline-primary me-2' id='salvar'>Salvar</button></a>
							</div>
						";
					break;
					case '2':
						echo"
							<div class='col-md-3 menus-nav text-end'>
								<a href='../index.php' class='' title='salvar'><button type='button' class='btn btn-outline-primary me-2' id='salvar'>Salvar</button></a>
							</div>
						";
					break;
					default:
						echo"
							<div class='col-md-3 menus-nav text-end'>
								<a href='../index.php' class='' title='salvar'><button type='button' class='btn btn-outline-primary me-2' id='salvar'>Salvar</button></a>
							</div>
						";
					break;
						}
					}else{
						
					}
		?>
	</header>

	<div class="container">
	  <div class="row">
	    <div class="col">

	    	<div id="Painel">

	    		<h2>Perfil</h2>
				
	    		<img src=" <?php echo $caminho; ?>" class="rounded float-end" alt="imagem de perfil" width="300" height="300" id="img_perfil">

	    		<div class="dados_us">
	    			Nome:
	    			<?php 
	    				echo $nome_us;
	    			?> 	
	    		</div>
	    		<div class="dados_us">
	    			Data de Nascimento:
	    			<?php 
	    				echo $nasc_us;
	    			?> 	
	    		</div>
	    		<div class="dados_us">
	    			Telefone:
	    			<?php 
	    				echo $telefone_us;
	    			?> 	
	    		</div>
	    		<div class="dados_us">
	    			Email:
	    			<?php 
	    				echo $email_us;
	    			?> 	
	    		</div>
	    		<br>
	    		<div class="dados_us">
	    			Endereço:
	    			<?php 
	    				echo $endereco_us;
	    			?> 	
	    		</div>
	    	</div>

	    	<?php 

	    		require_once "../conexao/conexao.php";

	    		$checagem ="SELECT id_usuario, id_curso FROM inscricao WHERE id_usuario = '$id' AND id_curso = '1'";
	    			$con = mysqli_query($conexao, $checagem);
        				$conectou = mysqli_num_rows($con);

        		if ($conectou == 1) {
        			$inscritoHTML = "Inscrito !!";
        		}else{
        			
        		}

        		$checagemtwo ="SELECT id_usuario, id_curso FROM inscricao WHERE id_usuario = '$id' AND id_curso = '2'";
	    			$contwo = mysqli_query($conexao, $checagemtwo);
        				$conectoutwo = mysqli_num_rows($contwo);

        		if ($conectoutwo == 1) {
        			$inscritoCSS = "Inscrito !!";
        		}else{
        			
        		}

        		$checagemtre ="SELECT id_usuario, id_curso FROM inscricao WHERE id_usuario = '$id' AND id_curso = '3'";
	    			$contre = mysqli_query($conexao, $checagemtre);
        				$conectoutre = mysqli_num_rows($contre);

        		if ($conectoutre == 1){
        			$inscritoJS = "Inscrito !!";
        		}else{
        			
        		}

        		$checagemfor ="SELECT id_usuario, id_curso FROM inscricao WHERE id_usuario = '$id' AND id_curso = '4'";
	    			$confor = mysqli_query($conexao, $checagemfor);
        				$conectoufor = mysqli_num_rows($confor);

        		if ($conectoufor == 1) {
        			$inscritoPHP = "Inscrito !!";
        		}else{
        			
        		}

        		$checagemfiv ="SELECT id_usuario, id_curso FROM inscricao WHERE id_usuario = '$id' AND id_curso = '5'";
	    			$confiv = mysqli_query($conexao, $checagemfiv);
        				$conectoufiv = mysqli_num_rows($confiv);

        		if ($conectoufiv == 1) {
        			$inscritoBD = "Inscrito !!";
        		}else{
        			
        		}

        		$checagemsix ="SELECT id_usuario, id_curso FROM inscricao WHERE id_usuario = '$id' AND id_curso = '6'";
	    			$consix = mysqli_query($conexao, $checagemsix);
        				$conectousix = mysqli_num_rows($consix);

        		if ($conectousix == 1) {
        			$inscritoPY = "Inscrito !!";
        		}else{
        			
        		}

	    	?>

	    	<div id="aulas">
	    		<h3>Cursos Inscritos</h3>
		    	<div class="container">
		    	  <div class="row">
		    	    <div class="col order-first">
		    	      Curso HTML: 
		    	      <?php

		    	      if (isset($inscritoHTML) == 'TRUE'){
		    	      	echo $inscritoHTML;
		    	      }else{
		    	      	echo "Não Inscrito";
		    	      }

		    	      ?>
		    	    </div>
		    	    <div class="col">
		    	      Curso CSS:
		    	      <?php

		    	      if (isset($inscritoCSS) == 'TRUE'){
		    	      	echo $inscritoCSS;
		    	      }else{
		    	      	echo "Não Inscrito";
		    	      }

		    	      ?>

		    	    </div>
		    	    <div class="col order-last">
		    	      Curso Java Script:
		    	      <?php

		    	      if (isset($inscritoJS) == 'TRUE'){
		    	      	echo $inscritoJS;
		    	      }else{
		    	      	echo "Não Inscrito";
		    	      }

		    	      ?>
		    	    </div>
		    	  </div>
		    	</div>

		    	<div class="container">
		    	  <div class="row">
		    	    <div class="col order-first">
		    	      Curso PHP:
		    	      <?php

		    	      if (isset($inscritoPHP) == 'TRUE'){
		    	      	echo $inscritoPHP;
		    	      }else{
		    	      	echo "Não Inscrito";
		    	      }

		    	      ?>
		    	    </div>
		    	    <div class="col">
		    	      Curso MySQL BD:
		    	      <?php

		    	      if (isset($inscritoBD) == 'TRUE'){
		    	      	echo $inscritoBD;
		    	      }else{
		    	      	echo "Não Inscrito";
		    	      }

		    	      ?>
		    	    </div>
		    	    <div class="col order-last">
		    	      Curso Python:
		    	      <?php

		    	      if (isset($inscritoPY) == 'TRUE'){
		    	      	echo $inscritoPY;
		    	      }else{
		    	      	echo "Não Inscrito";
		    	      }

		    	      ?>
		    	    </div>
		    	  </div>
		    	</div>
		    </div>

	    </div>
	  </div>
	</div>

	<hr>
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

</body>
</html>