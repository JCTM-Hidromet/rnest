<?php
class montaDiretorio
	{
	
	private $estacao;
	private $data;
	const pasta = "Log";
	const prefixoAtual 	= 	"eco004";
	const prefixoAntigo = 	"eco002";
	const extensao 		= 	".txt";
	
	public function __construct($estacao, $data){
		$this -> estacao 	=	 $estacao;
		$this -> data 		=	 $data;
	}
			
	public function montar(){
		$dir;
		// log\gaibu\eco002\eco00220150423.txt
		
		if( $this -> data == null ){
			$dir	= 	self::pasta
						.DIRECTORY_SEPARATOR
						.$this->estacao
						.DIRECTORY_SEPARATOR
						.self::prefixoAtual
						.DIRECTORY_SEPARATOR
						.$this->estacao
						.self::extensao;
		}else{
			$dir 	= 	self::pasta
						.DIRECTORY_SEPARATOR
						.$this->estacao
						.DIRECTORY_SEPARATOR
						.self::prefixoAntigo
						.DIRECTORY_SEPARATOR
						.self::prefixoAntigo
						.$this->data
						.self::extensao;
		}
		return $dir;
	}

}