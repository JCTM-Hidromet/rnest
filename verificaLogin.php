<?php
session_start();
include_once 'classes/Usuario.class.php';

function fazLogin($usr, $sen){
	$usuario = new usuario();
	$usuario->setNomeUsuario($usr);
	$usuario->setSenhaUsuario($sen);
	if ($usuario->conectar()){
		$_SESSION["nomeLogado"] = $usr;
		$_SESSION["senhaLogado"]= $sen;
		return true;
	}else{
		unset($_SESSION['nomeLogado']);
		unset($_SESSION['senhaLogado']);
		session_destroy();
		return false;
	}
	
}

function verificaLogin(){
	if((isset($_SESSION['nomeLogado'])==true) && (isset($_SESSION['senhaLogado'])==true)){
		return fazLogin($_SESSION['nomeLogado'], $_SESSION['senhaLogado']);
	}else{
		return false;
	}
}
