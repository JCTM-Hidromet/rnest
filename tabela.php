<?php


function exibeTabela ($estacao, $data, $parametrosDados){
	$strdata = implode("", array_reverse(explode("/", $data)));
	$srcLogoMiniPetrobras = "img/menu-logoPetrobras-mini.png";
	$srcLogoMiniDesligado = "img/menu-desligado-mini.png";
	$srcLogoMiniPadrao = "img/menu-logoJctm-mini.png";
	$srcLogoMini = $srcLogoMiniPadrao;
	
	if ($estacao == 'IFPE'){
		$srcLogoMini = $srcLogoMiniPetrobras;
	}

    if ($estacao == 'CPRH'){
		$srcLogoMini = $srcLogoMiniPetrobras;
	}

	
	if ($estacao == 'Cone'){
		$srcLogoMini = $srcLogoMiniDesligado;
	}
	
	$dadosTabelados = array();
	
	$MontadorDiretorio = new montaDiretorio($estacao, $strdata);
	$diretorio = $MontadorDiretorio->montar();
		
	try {
		
		$leitura = new leitor($diretorio);
		$conjuntoDeLinhasArquivo = $leitura->lerArquivo();
		
		foreach ($conjuntoDeLinhasArquivo as $linha){
			$dados = new Dados($linha);
			$conjuntoDeDados =  $dados->formatar();
			$informacoes = new NomeadorDeDados($parametrosDados, $conjuntoDeDados);
			$informacoes->nomear();
			$dadosDaTabela = $informacoes->getDadosNomeados();
			array_push($dadosTabelados, $dadosDaTabela);
		}
		
		
		$qntLinhaTabela = count($dadosTabelados);
		
			
		echo "<div class='panel panel-success'>";
		
		echo "<div class='panel-heading'><img src='{$srcLogoMini}'>"."   |   ".strtoupper($estacao)."</div>";
		
		echo "<div class='panel-body'>";
		
		echo "<div class='datatable-content'>";
		
		echo "<table class='table table-bordered table-hover'>";
		
		for( $i = 0 ; $i<$qntLinhaTabela ; $i++){
		
			if($i == 0 ){
				echo'<thead>';
				echo'<tr>';
				$valoresCelulas = array_keys($dadosTabelados[$i]);
				foreach ($valoresCelulas as $valorCelula){
					echo'<th>'.$valorCelula.'</th>';
				}
				echo '</tr>';
				echo'</thead>';
			}
			echo'<tbody>';
			echo'<tr>';
			$valoresCelulas = array_values($dadosTabelados[$i]);
			foreach ($valoresCelulas as $valorCelula){
				echo'<td>'.$valorCelula.'</td>';
			}
			echo'</tr>';
			echo'</tbody>';
		
		}
		
	
		echo '</table>';
		
		echo "</div>";
		echo "</div>";
		echo "</div>";
			
					
	} catch (Exception $e) {
		echo "<div class='panel panel-success'>";
		
		echo "<div class='panel-heading'><img src='{$srcLogoMini}'>"."   |   ".strtoupper($estacao)."</div>";
		
		echo "<div class='panel-body'>";
		
		echo "<div class='datatable-content'>";
		
		echo $e->getMessage();
		
		echo "</div>";
		
		echo "</div>";
		
		echo "</div>";
		
		echo "</div>";
	}

}