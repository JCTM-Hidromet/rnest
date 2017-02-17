<?php

class NomeadorDeDados
{
	private $nomeDosDados;
	private $dados;
	private $dadosNomeados;
		
	function __construct( $listaDeNomes , $arrayDados){
		$this->nomeDosDados = $listaDeNomes;
		$this->dados = $arrayDados;
	}
	
	public function nomear(){
		$chaves = $this->nomeDosDados;
		$valores = $this->dados;
		$valoresValidos = array();
		
		for ($i = 0 ; $i < count($chaves) ; $i++){
			$valoresValidos[$i] = $valores[$i];
		}
		
		$dadosMontados =  array_combine($chaves, $valoresValidos);
		$this->dadosNomeados  = $this->corrigeData($dadosMontados);
		
	}
	
	public function getDadosNomeados(){
		return $this->dadosNomeados;
	}
		
	private function corrigeData($array){
		$novaData = date('d/m/y', strtotime($array['DATA']));
		$array['DATA'] = $novaData;
		return $array;
	}
	
}