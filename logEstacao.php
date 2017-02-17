<?php

	include_once 'inicializacao.php';
	include_once 'verificaLogin.php';
	include_once 'tabela.php';
		
	$conectadoOk = false;
			
	if( verificaLogin( )){
		$conectadoOk	= true;
				
	}else{
		$msgErroLogado 	= "voc&ecirc; precisa estar logado";			
	}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta content="text/html; charset=UTF-8"
	http-equiv="content-type">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-datepicker.css" rel="stylesheet">
<link href="css/estilos.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="js/bootstrap-datepicker.pt-BR.min.js"></script>
<link rel="shortcut icon" href="jctmicon.ico" type="image/x-icon" />
<title>RNEST - Histórico de Dados</title>
</head>
<body>
	<!-- container imagem cabeçalho-->

		
			<?php 
        		include_once 'topo.php';
        	?>
		

	<!-- /container imagem cabeçalho-->

	<!-- container navbar -->

		<div class="container">
		
			<?php
				if($conectadoOk){
					include_once include_once 'menuLogado.php';
				}
				
			?>	
		
		</div>

	<!-- /container navbar -->

	<!-- container conteudo -->

		<div class="container">
	
			<!-- painel -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Visualiza&ccedil;&atilde;o de Dados da Qualidade do Ar - Resumo do Dia</h4>
					</div>
					<div class="panel-body">
					
						<?php if($conectadoOk): ?>
						
							<?php
								
								if ( isset($_GET[ 'estacao' ] ) && isset( $_GET[ 'datapesquisa' ] ) ){
									$estacao = $_GET['estacao'];
									$datapesquisa =  $_GET[ 'datapesquisa' ];
									exibeTabela($estacao , $datapesquisa , $grupoEstacoes[$estacao]);
											
								}  
							
							?>
							
						<?php else: ?>
						
							<div class="alert alert-danger" role="alert">
								<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
	  							<span class="sr-only">Error:</span><?php echo $msgErroLogado?>
							</div>
						
						<?php endif ?>
										
					</div>
				</div>
			<!-- /painel -->

		<!-- /container conteudo -->
				
		</div>

</body>
</html>
