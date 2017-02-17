<?php

class Dados
{
	private $linhaEntrada;
	private $listaNomeDosDados;
	private $dados;
		
	public function __construct($strLinhaTxt){
		$this->linhaEntrada = $strLinhaTxt;
	}
		
	public function formatar(){
	/* exemplo entrada :
	* RPT2 >15-04-23 16:00:00     -9999.=     12.50<    702.17<      0.00<      0.01<      0.01<    -9999.=    -9999.=    -9999.=    -9999.=    -9999.=    -9999.=    -9999.=      0.00=      0.00=
		
	*  divide a entrada em dois arrays separando-os pelo '>' */
		$parte1 = explode(">", $this->linhaEntrada);
				
	/* os dados uteis se encontram no array parte1[1], deste tiram-se os espaços em branco e cria-se um novo array com os dados*/
			$parte2 = preg_split("/[\s]+/", $parte1[1]);
	/* exclui elementos vazios do array */
		for ( $i = 0 ; $i < (count($parte2) ); $i++ ){
			if( $parte2[$i] == ''){
				unset($parte2[$i]);
			}
		}
		return $parte2;
	}
	
}