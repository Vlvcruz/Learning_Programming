<?php
session_start();

if(!isset($_SESSION['identificador'])){
	
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

	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Learning Programming</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>	

	<link rel="stylesheet" type="text/css" href="css/estilizacao.css">
	<link rel="shortcut icon" href="imagens/book.svg"> 
</head>
<body>

	
	<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
	<a href="#" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none" id="logonavbar">
		<img src="imagens/projeto.png" alt="logo" width="170" height="40" class="d-inline-block align-text-top" title='Logo'>   
	</a>
	<ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
		<li><a href="#quem_somos" class="nav-link px-2 link-dark" title='Quem Somos'>Quem Somos</a></li>
		<li><a href="#linguagens" class="nav-link px-2 link-dark" title='Linguagens'>Linguagens</a></li>
		<li><a href="#caracteristicas" class="nav-link px-2 link-dark" title='caracteristicas'>
		Características</a></li>
		<li><a href="#fale_conosco" class="nav-link px-2 link-dark" title='Fale Conosco'>Fale Conosco</a></li>
	</ul>
		<?php
			if(isset($identificador)){
				switch ($identificador){
					case '1':
						echo"
							<div class='col-md-3 menus-nav text-end'>
								<a href='Cadastros_login/sair.php' class='' title='Sair'><button type='button' class='btn btn-outline-primary me-2' id='sair'>Sair</button></a>
								<a href='usuarios/perfil.php' title='Administração' class=''><button type='button' class='btn btn-outline-primary me-2'><ion-icon name='home-outline'></ion-icon>Perfil</button></a>
							</div>
						";
					break;
					case '2':
						echo"
							<div class='col-md-3 menus-nav text-end'>
								<a href='Cadastros_login/sair.php' class='' title='Sair'><button type='button' class='btn btn-outline-primary me-2' id='sair'>Sair</button></a>
								<a href='usuarios/perfil.php' title='Administração' class=''><button type='button' class='btn btn-outline-primary me-2'><ion-icon name='home-outline'></ion-icon>Perfil</button></a>
							</div>
						";
					break;
					default:
						echo"
						<div class='col-md-3 menus-nav text-end'>
							<a href='Cadastros_login/cadastro.php' class=''><button type='button' class='btn btn-outline-primary me-2'>Cadastre-se</button></a>
							<a href='Cadastros_login/login.php' class=''><button type='button' class='btn btn-outline-primary me-2' id='login'>Login</button></a>
						</div>
						";
					break;
						}
					}else{
						echo"
							<div class='col-md-3 menus-nav text-end'>
								<a href='Cadastros_login/cadastro.php' class=''><button type='button' class='btn btn-outline-primary me-2'>Cadastre-se</button></a>
								<a href='Cadastros_login/login.php' class=''><button type='button' class='btn btn-outline-primary me-2' id='login'>Login</button></a>
							</div>
						";
					}
		?>
	</header>

	<div class="container">
	  <div class="row">
	    <div class="col">
			<img src="imagens/Learning Programming Novo.png" class="img-fluid" alt="Imagem da empresa" id="logo_marca">

			<div id="quem_somos">
				<h3>Quem Somos</h3>
			</div>
			<div id="text_on">
				Somos os melhores no nosso segmento, e é tudo graças aos relacionamentos incríveis que formamos com nossos clientes. Ao contrário dos nossos concorrentes, somos dedicados ao desenvolvimeto de uma conexão pessoal com cada um dos nossos clientes. Para isso, prestamos serviços de quaalidade e estamos a disposição 22 horas por dia, 7 dias por semana, entre em contato conosco quando estiver pronto para saber mais. Temos o prazer de conhecê-lo !! <br> "LEMBRANDO O SITE É APENAS PARA FINS DA PRÁTICA DE ESTUDO"
			</div>

		<div id="linguagens">Linguagens</div>

			<div class="row row-cols-1 row-cols-md-3 g-4">
			  <div class="col">
			    <div class="card text-dark bg-light mb-3">
			      <img src="imagens/html.jpg" class="card-img-top" alt="imagem de codigos HTML">
			      <div class="card-body">
			      	<div class="linguagens_cursos">
				        <h5 class="card-title">HTML</h5>
				        <p class="card-text">HTML abreviação para a expressão HyperText Markup Language, significa: "Linguagem de Marcação de Hipertexto" é uma linguagem de marcação utilizada na construção de páginas na Web. Documentos HTML podem ser interpretados por navegadores.</p>
			    	</div>
			      </div>
			      	<?php
			      		if(isset($identificador)){
			      			switch ($identificador){
			      				case '1':
			      					echo"
			      						<div class='card-footer'>
			      						    <a href='aulas/Aula HTML/logado_script.php' class='btn btn-outline-primary'>Assistir Aula</a>
			      						</div>
			      					";
			      				break;
			      				case '2':
			      					echo"
			      						<div class='card-footer'>
			      						    <a href='aulas/Aula HTML/logado_script.php' class='btn btn-outline-primary'>Assistir Aula</a>
			      						</div>
			      					";
			      				break;
			      				default:
			      					echo"
			      						<div class='card-footer'>
			      						  <a href='aulas/Aula HTML/sem_acesso.php' class='btn btn-outline-primary'>Inscrever-se</a>
			      						</div>
			      					";
			      				break;
			      					}
			      				}else{
			      					echo"
			      						<div class='card-footer'>
			      						  <a href='aulas/Aula HTML/sem_acesso.php' class='btn btn-outline-primary'>Inscrever-se</a>
			      						</div>
			      					";
			      				}
			      	?>
			    </div>
			  </div>
			  <div class="col">
			    <div class="card text-dark bg-light mb-3">
			      <img src="imagens/css.jpg" class="card-img-top" alt="imagem de codigos CSS">
			      <div class="card-body">
			      	<div class="linguagens_cursos">
				        <h5 class="card-title">CSS</h5>
				        <p class="card-text">CSS abreviação para Cascading Style Sheets é um mecanismo para adicionar estilo a um documento web. O código CSS pode ser aplicado diretamente nas tags ou ficar contido dentro das tags <"style"> Também é possível, criar um link para um arquivo CSS que contém os estilos</p>
			        </div>
			      </div>
			      	<?php
			      		if(isset($identificador)){
			      			switch ($identificador){
			      				case '1':
			      					echo"
			      						<div class='card-footer'>
			      						  <a href='aulas/Aula CSS/logado_script.php' class='btn btn-outline-primary'>Assistir Aula</a>
			      						</div>
			      					";
			      				break;
			      				case '2':
			      					echo"
			      						<div class='card-footer'>
			      						  <a href='aulas/Aula CSS/logado_script.php' class='btn btn-outline-primary'>Assistir Aula</a>
			      						</div>
			      					";
			      				break;
			      				default:
			      					echo"
			      						<div class='card-footer'>
			      						  <a href='aulas/Aula CSS/sem_acesso.php' class='btn btn-outline-primary'>Inscrever-se</a>
			      						</div>
			      					";
			      				break;
			      					}
			      				}else{
			      					echo"
			      						<div class='card-footer'>
			      						  <a href='aulas/Aula CSS/sem_acesso.php' class='btn btn-outline-primary'>Inscrever-se</a>
			      						</div>
			      					";
			      				}
			      	?>
			    </div>
			  </div>
			  <div class="col">
			    <div class="card text-dark bg-light mb-3">
			      <img src="imagens/javascript.jpg" class="card-img-top" alt="imagem de codigos JavaScript">
			      <div class="card-body">
			      	<div class="linguagens_cursos">
				        <h5 class="card-title">Java Script</h5>
				        <p class="card-text">JavaScript é uma linguagem de programação interpretada estruturada, de script em alto nível com tipagem dinâmica fraca e multiparadigma. Juntamente com HTML e CSS, o JavaScript é uma das três principais tecnologias da World Wide Web.</p>
				    </div>
			      </div>
			      	<?php
			      		if(isset($identificador)){
			      			switch ($identificador){
			      				case '1':
			      					echo"
			      						<div class='card-footer'>
			      						  <a href='aulas/Aula Js/logado_script.php' class='btn btn-outline-primary'>Assistir Aula</a>
			      						</div>
			      					";
			      				break;
			      				case '2':
			      					echo"
			      						<div class='card-footer'>
			      						  <a href='aulas/Aula Js/logado_script.php' class='btn btn-outline-primary'>Assistir Aula</a>
			      						</div>
			      					";
			      				break;
			      				default:
			      					echo"
			      						<div class='card-footer'>
			      						  <a href='aulas/Aula Js/sem_acesso.php' class='btn btn-outline-primary'>Inscrever-se</a>
			      						</div>
			      					";
			      				break;
			      					}
			      				}else{
			      					echo"
			      						<div class='card-footer'>
			      						  <a href='aulas/Aula Js/sem_acesso.php' class='btn btn-outline-primary'>Inscrever-se</a>
			      						</div>
			      					";
			      				}
			      	?>
			    </div>
			  </div>
			</div>
			<br>
			<div class="row row-cols-1 row-cols-md-3 g-4">
			  <div class="col">
			    <div class="card text-dark bg-light mb-3">
			      <img src="imagens/php.jpg" class="card-img-top" alt="imagem de codigos PHP">
			      <div class="card-body">
			      	<div class="linguagens_cursos">
				        <h5 class="card-title">PHP</h5>
				        <p class="card-text">PHP é uma linguagem interpretada livre usada originalmente apenas para o desenvolvimento de aplicações presentes, atuantes no lado do servidor capazes de gerar conteúdo dinâmico na World Wide Web Figura entre as primeiras linguagens passíveis de inserção em documentos HTML</p>
			    	</div>
			      </div>
			      <?php
			      		if(isset($identificador)){
			      			switch ($identificador){
			      				case '1':
			      					echo"
			      						<div class='card-footer'>
			      						  <a href='aulas/Aula PHP/logado_script.php' class='btn btn-outline-primary'>Assistir Aula</a>
			      						</div>
			      					";
			      				break;
			      				case '2':
			      					echo"
			      						<div class='card-footer'>
			      						  <a href='aulas/Aula PHP/logado_script.php' class='btn btn-outline-primary'>Assistir Aula</a>
			      						</div>
			      					";
			      				break;
			      				default:
			      					echo"
			      						<div class='card-footer'>
			      						  <a href='aulas/Aula PHP/sem_acesso.php' class='btn btn-outline-primary'>Inscrever-se</a>
			      						</div>
			      					";
			      				break;
			      					}
			      				}else{
			      					echo"
			      						<div class='card-footer'>
			      						  <a href='aulas/Aula PHP/sem_acesso.php' class='btn btn-outline-primary'>Inscrever-se</a>
			      						</div>
			      					";
			      				}
			      	?>
			    </div>
			  </div>
			  <div class="col">
			    <div class="card text-dark bg-light mb-3">
			      <img src="imagens/bd.jpg" class="card-img-top" alt="imagem de codigos banco de dados">
			      <div class="card-body">
			      	<div class="linguagens_cursos">
				        <h5 class="card-title">Banco de Dados MySQL</h5>
				        <p class="card-text">Banco de dados MySQL é um sistema de gerenciamento de banco de dados, que utiliza a linguagem SQL como interface.
				        <br>É atualmente um dos sistemas de gerenciamento de bancos de dados mais populares da Oracle Corporation, com mais de 10 milhões de instalações pelo mundo</p>
			        </div>
			      </div>
			      <?php
			      		if(isset($identificador)){
			      			switch ($identificador){
			      				case '1':
			      					echo"
			      						<div class='card-footer'>
			      						  <a href='aulas/Aula BD/logado_script.php' class='btn btn-outline-primary'>Assistir Aula</a>
			      						</div>
			      					";
			      				break;
			      				case '2':
			      					echo"
			      						<div class='card-footer'>
			      						  <a href='aulas/Aula BD/logado_script.php' class='btn btn-outline-primary'>Assistir Aula</a>
			      						</div>
			      					";
			      				break;
			      				default:
			      					echo"
			      						<div class='card-footer'>
			      						  <a href='aulas/Aula BD/sem_acesso.php' class='btn btn-outline-primary'>Inscrever-se</a>
			      						</div>
			      					";
			      				break;
			      					}
			      				}else{
			      					echo"
			      						<div class='card-footer'>
			      						  <a href='aulas/Aula BD/sem_acesso.php' class='btn btn-outline-primary'>Inscrever-se</a>
			      						</div>
			      					";
			      				}
			      	?>
			    </div>
			  </div>
			  <div class="col">
			    <div class="card text-dark bg-light mb-3">
			      <img src="imagens/python.jpeg" class="card-img-top" alt="imagem de codigos Python">
			      <div class="card-body">
			      	<div class="linguagens_cursos">
				        <h5 class="card-title">Python</h5>
				        <p class="card-text">Python é uma linguagem de programação de alto nível, interpretada de script, imperativa, orientada a objetos de tipagem dinâmica e forte. Lançada por Guido van Rossum em 1991, possui um modelo de desenvolvimento comunitário, aberto e gerenciada pela Python Software Foundation</p>
				    </div>
			      </div>
			      <?php
			      		if(isset($identificador)){
			      			switch ($identificador){
			      				case '1':
			      					echo"
			      						<div class='card-footer'>
			      						  <a href='aulas/Aula PYTHON/logado_script.php' class='btn btn-outline-primary'>Assistir Aula</a>
			      						</div>
			      					";
			      				break;
			      				case '2':
			      					echo"
			      						<div class='card-footer'>
			      						  <a href='aulas/Aula PYTHON/logado_script.php' class='btn btn-outline-primary'>Assistir Aula</a>
			      						</div>
			      					";
			      				break;
			      				default:
			      					echo"
			      						<div class='card-footer'>
			      						  <a href='aulas/Aula PYTHON/sem_acesso.php' class='btn btn-outline-primary'>Inscrever-se</a>
			      						</div>
			      					";
			      				break;
			      					}
			      				}else{
			      					echo"
			      						<div class='card-footer'>
			      						  <a href='aulas/Aula PYTHON/sem_acesso.php' class='btn btn-outline-primary'>Inscrever-se</a>
			      						</div>
			      					";
			      				}
			      	?>
			    </div>
			  </div>
			</div>

			<div id="caracteristicas">Características</div>

			<div class="row row-cols-1 row-cols-md-3 g-4">
			  <div class="col">
			    <div class="card border-light mb-3">
			      <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="60" fill="currentColor" class="bi bi-gem" viewBox="0 0 16 16">
				  <path d="M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6l3-4zm11.386 3.785-1.806-2.41-.776 2.413 2.582-.003zm-3.633.004.961-2.989H4.186l.963 2.995 5.704-.006zM5.47 5.495 8 13.366l2.532-7.876-5.062.005zm-1.371-.999-.78-2.422-1.818 2.425 2.598-.003zM1.499 5.5l5.113 6.817-2.192-6.82L1.5 5.5zm7.889 6.817 5.123-6.83-2.928.002-2.195 6.828z"/>
				</svg>
			      <div class="card-body">
			      	<div class="titulo_cursos">
				        <h5 class="card-title">Melhor Qualidade</h5>
				        <p class="card-text">Garantimos sua total satisfação.</p>
			    	</div>
			      </div>
			    </div>
			  </div>
			    <div class="col">
			      <div class="card border-light mb-3">
			        <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="60" fill="currentColor" class="bi bi-gem" viewBox="0 0 16 16">
				  	  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
				  	    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
						</svg>
			        <div class="card-body">
			        	<div class="titulo_cursos">
				          <h5 class="card-title">Profissionais Licenciados</h5>
				          <p class="card-text">Totalmente qualificados em nossa áreas.</p>
			        	</div>
			    	</div>
			      </div>
			    </div>
			      <div class="col">
			        <div class="card border-light mb-3">
			        	<svg xmlns="http://www.w3.org/2000/svg" width="auto" height="60" fill="currentColor" class="bi bi-wifi" viewBox="0 0 16 16">
				        	<path d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.444 12.444 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.518.518 0 0 0 .668.05A11.448 11.448 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049z"/>
				        	<path d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.455 9.455 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065zm-2.183 2.183c.226-.226.185-.605-.1-.75A6.473 6.473 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.478 5.478 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091l.016-.015zM9.06 12.44c.196-.196.198-.52-.04-.66A1.99 1.99 0 0 0 8 11.5a1.99 1.99 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z"/>  
			        	</svg>		          
			          <div class="card-body">
			          	<div class="titulo_cursos">
				            <h5 class="card-title">Curso Totalmente Online</h5>
				            <p class="card-text">Faça O curso totalmente online, sem precisar sair de sua casa</p>
				        </div>
			          </div>
			        </div>
			      </div>
			</div>

			<div id="fale_conosco">Fale Conosco !</div>
			<div id="fale_conosco2">Estamos disponíveis para ajudar! Envie-nos quaisquer pergunta que tiver. Esperamos receber notícias suas.</div>

		<form action="mensagem/mensagem_script.php" method="POST">
			<div id="form">
			<div class="row">
			  <div class="col">
			    <input type="text" class="form-control" placeholder="Nome" name="name_msg" required>
			  </div>
			  <div class="col">
			    <input type="tel" class="form-control" placeholder="Telefone" id="fone" name="fone_msg" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" / required>
			  	<script type="text/javascript">$("#fone").mask("(00) 0000-00009");</script>
			  </div>
			</div>
			<div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label"></label>
			    <input type="email" class="form-control" name="email_msg" placeholder="Email" required>
			    <div name="emailHelp" class="form-text">Digite seu Email no qual foi cadastrado, para que possamos entrar em contato com você futuramente !!</div>
			</div>

			<div class="form-floating">
			  <textarea class="form-control" placeholder="Leave a comment here" id="mensagem_form" name="camp_msg" style="height: 100px" required></textarea>
			  <label for="floatingTextarea2">Comentario</label>
			</div>
			</div>

			<div id="botao_enviar">
			<div class="d-grid gap-2">
			  <button class="btn btn-outline-primary" type="submit">Enviar</button>
			</div>
			</div>
		</form>

		</div>
	  </div>
	</div>

	<hr>
	<footer id="rodape">
		<br>
		<div id="logorodape">
			<h5>Learning Programming</h5>
			<figure class="figure">
			  <img src="imagens/projeto.png" class="figure-img img-fluid rounded" alt="logo">
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