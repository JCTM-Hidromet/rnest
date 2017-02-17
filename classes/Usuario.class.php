<?php
class usuario
{
 		
	private $nomeUsuario;
	private $senhaUsuario;
 		 		
	public function setNomeUsuario($nome){
		$this->nomeUsuario = $nome;
	}
 		
	public function getNomeUsuario(){
		return $this->nomeUsuario;
	}
 		
	public function setSenhaUsuario($senha){
		$this->senhaUsuario = $senha;
	}
 		
	public function getSenhaUsuario(){
		return $this->senhaUsuario;
	}

	public function conectar(){
		$usr = "rnest";
		$sen = "monitoramento#2015";
		if ( ( $this->getNomeUsuario() == $usr ) && ( $this->getSenhaUsuario() == $sen ) ){
			return true;
		}else{
			return false;
		}
	}
 		
	public function desconectar(){
 			
	}
}
 
 