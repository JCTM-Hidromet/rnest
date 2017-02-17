<?php 
	
	$srcImgLogo="img/menu-logoJctm.png";
	if (isset($_GET['datapesquisa'])){
		$data = $_GET['datapesquisa'] ;
	}else{
		$data = date("d/m/Y");
	}
	
	if (isset($_GET['estacao'])){
		$estacao = $_GET['estacao'];
	}

?>
<script type="text/javascript">
$(document).ready(function(){
	$('#datapesquisa').datepicker({
		format: "dd/mm/yyyy",
		language:"pt-BR",
		autoclose: true,
		endDate : "0d",
	});
});
</script>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<div>
				<a class="navbar-brand" href="#"><img alt="logo" src="<?php echo $srcImgLogo?>"></a>
			</div>
		</div>
		
		<div class="collapse navbar-collapse" id="menuestacoes">
		<?php if( isset($_GET['estacao'] ) && isset($_GET['datapesquisa'])): ?> 
			<ul class="nav navbar-nav navbar-right">
       			<li class="active"><a href="logResumo.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
       		</ul>
       	<?php endif;?>
       		
			<form class="navbar-form navbar-right" action="logEstacao.php" method="get">
				<div class="form-group">
					<label for="exampleInputName2">Pesquisar por</label>
					<select class="form-control" name="estacao" id="estacao">
						<?php 
						//monta o a lista de option de acordo com vetor grupoestacoes;
						
							$ini = 0;
							
							while ( $ini < count($grupoEstacoes) ){
								$nomeEstacoes = array_keys($grupoEstacoes);
								$estacao = $nomeEstacoes[$ini];
								echo "<option value='{$estacao}'"; 
								if($_GET['estacao'] == $estacao){ 
									echo "selected = 'selected'";
								}
								echo ">";
								echo $estacao;
								echo "</option>";
								$ini++;
							}
						
						?>
																  
					</select>
				</div>
				<div class="form-group">
					<label for="data">em </label><input type="text" class="form-control" name="datapesquisa" id="datapesquisa" value='<?php echo $data?>' required>
				</div>
				<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
			</form>
			
		</div>
	
		</div>
		
		<!-- /.navbar-collapse -->

	<!-- /.container-fluid -->
</nav>