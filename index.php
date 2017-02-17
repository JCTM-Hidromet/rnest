<?php
	include_once 'verificaLogin.php';
	$msgErro;
	$data;
	$erroLogin = false;
	
	if (isset ( $_GET ['acao'] ) && $_GET ['acao'] == 'logar') {
		if (fazLogin ( $_POST ['cmpUsuario'], $_POST ['cmpSenha'] )) {
			header ( "location:logResumo.php" );
		} else {
			$erroLogin = true;
			$msgErro = "erro login";
		}
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta content="text/html; charset=UTF-8"
	http-equiv="content-type">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/estilos.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<link rel="shortcut icon" href="jctmicon.ico" type="image/x-icon" />
<title>RNEST - Autenticação</title>
</head>
<body>
	<!-- container imagem cabeçalho-->

	
			<?php 
        		include_once 'topo.php';
        	?>


	<!-- /container imagem cabeçalho-->

	<!-- container navbar -->

		<div class="container"></div>

	<!-- /container navbar -->

	<!-- container conteudo -->

		<div class="container">
	
			<!-- painel -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Autentica&ccedil;&atilde;o de usu&aacute;rio</h4>
					</div>
					<div class="panel-body">
					
						<?php if($erroLogin): ?>
							<div class="alert alert-danger" role="alert">
								<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
	  							<span class="sr-only">Error:</span>Dados de login inv&aacute;lidos.
							</div>
						<?php endif ?>
		
						<div class="form-group">
				          <form method="post" action="index.php?acao=logar" class="form-signin">
				            <div class="input-group">
				              <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
				              <input class="form-control" id="cmpUsuario" name="cmpUsuario" placeholder="Nome de usu&aacute;rio" type="text">
				            </div>
				            <div class="input-group">
				              <span class="input-group-addon"><span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span></span>
				              <input class="form-control" id="cmpSenha" name="cmpSenha" placeholder="Senha" type="password">
				            </div>
				            <br>
				            <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
				          </form>
       					</div>
		
					</div>
				</div>
			<!-- /painel -->

		<!-- /container conteudo -->
				
		</div>

</body>
</html>
