<?php

	class leitor
	{
		
		private $enderecoArquivo;
				
		public function __construct( $strEnderecoArquivo ){
			$this->enderecoArquivo = $strEnderecoArquivo;
		}
		
		
		public function lerArquivo(){
			if ( file( $this->enderecoArquivo ) ){
				$arrayLinhas = file( $this->enderecoArquivo );
												
				for( $i = 0 ; $i < count( $arrayLinhas ) ; $i++ ){
					if ( !stristr( $arrayLinhas[ $i ] , "ec RPT" ) ){
						unset( $arrayLinhas[$i] );
					}
				}
				
				return array_reverse( $arrayLinhas,true );
			}else{
				throw new Exception( "N&atilde;o foram encontrados dados referentes a pesquisa, por favor refa&ccedil;a a pesquisa com datas mais atuais" );
			}
			
		}
	}
