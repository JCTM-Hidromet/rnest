<?php
	error_reporting(0);
	
	date_default_timezone_set("America/Sao_Paulo");
	
	function data(){
		$data = date("Y-m-d");
		return $data;
		if(isset($_GET['datapesquisa'])){
			$data = date("Y-m-d", str);
		}
	}
	
	function __autoload($classe){
		include_once "classes/{$classe}.class.php";
	}
	
	//parametros das esta��es
		$parametrosGaibu	= array( 'DATA', 'HORA', 'TEMP (�C)', 'O3 (�g/m3)', 'CO (ppm)' , 'NO (�g/m3)' , 'NO2 (�g/m3)' , 'NOX (�g/m3)' , 'NH3 (�g/m3)' , 'SO2 (�g/m3)' , 'H2S (�g/m3)' , 'CH4 (ppm)' , 'NMH (ppm)' , 'THC (ppm)' , 'PM10 (�g/m3)' , 'AT (C)' , 'RH (%)' , 'BP (mbar)' , 'SR (W/m2)' , 'WS (m/s)' , 'WD (�)' , 'Rain (mm)' );
		$parametrosIFPE		= array( 'DATA', 'HORA', 'TEMP (�C)', 'O3 (�g/m3)',  'CO (ppm)', 'NO (�g/m3)' , 'NO2 (�g/m3)', 'NOX (�g/m3)', 'SO2 (�g/m3)', 'H2S (�g/m3)' , 'CH4 (ppm)' , 'NMH (ppm)' , 'THC (ppm)'  , 'PM10 (�g/m3)');
		$parametrosCone		= array( 'DATA', 'HORA', 'TEMP (�C)', 'O3 (�g/m3)',  'CO (ppm)', 'NO (�g/m3)' , 'NO2 (�g/m3)', 'NOX (�g/m3)', 'SO2 (�g/m3)', 'H2S (�g/m3)' , 'CH4 (ppm)' , 'NMH (ppm)' , 'THC (ppm)'  , 'PM10 (�g/m3)');
		$parametrosIpojuca	= array( 'DATA', 'HORA', 'O3 (�g/m3)'  , 'CO (ppm)',  'NO   (�g/m3)', 'NO2   (�g/m3)', 'NOX (�g/m3)', 'NH3 (�g/m3)', 'SO2 (�g/m3)', 'H2S (�g/m3)', 'CH4 (ppm)' , 'MNH (ppm)'  , 'THC (ppm)', 'PM10 (�g/m3)' ) ;
		$parametrosCPRH		= array( 'DATA', 'HORA' , 'TEMP (�C)', 'O3 (�g/m3)', 'CO (ppm)' , 'NO (�g/m3)' , 'NO2 (�g/m3)' , 'NOX (�g/m3)' , 'SO2 (�g/m3)' , 'CH4 (ppm)' , 'NMH (ppm)' , 'THC (ppm)' , 'PM10 (�g/m3)' , 'AT (C)' , 'RH (%)' , 'SR (W/m2)' , 'BP (mbar)' , 'Rain (mm)' , 'WS (m/s)' , 'WD (�)' );
		
		//array grupo de parametros das esta�oes
		$grupoEstacoes 		= array( 'Gaibu' 	=> 	$parametrosGaibu,
									 'IFPE'		=> 	$parametrosIFPE,
									 'Ipojuca'	=> 	$parametrosIpojuca,
									 'CPRH'		=> 	$parametrosCPRH,
									 'Cone'		=> 	$parametrosCone,
		);
	//		
	
	
			
	