<?php
	 //$PathApp = "C:\\webdev\\www\\sespa";	//nombre sesion
	$UrlApp = "http://localhost/sespa";	//nombre sesion
	$host_db = "localhost";	//servidor mysql
	$session_name = "sespa";	//nombre sesion
	$driver_db = "mysqlt";	//driver database
	$debug_db = false;	//Debug para manejo de sql
	$debug_app = 'none';	//Debug para aplicacion  false = none,  verdadero = true;	
	$frm_fecha1 ='%Y-%m-%d';	//formato de fecha corta
	$frm_fecha2 ='%Y-%m-%d %H:%M';	//formato de fecha con hora
	$frm_hora ='24';	//formato de hora
	$path_sqlfiles_temp ='C:/webdev/www/sespa/temp/'; //directorio para almacenar temporalmente archivos sql
	$nreg=10;
	$offset=0;

	$tamPag=10;
	$bd ='sespa';
	$usuario ='root';
	$clave ='root';
	$servidor="localhost";
	$nreg=10;
	$offset=0;

	//ARREGLO DE ESTADOS
	$array_estado[1]="Activo";
	$array_estado[0]="Inactivo";


	//Parametro Archivo Imagenes.
	$tipo_exten='jpg';
	$p_y=150;
	$p_x=250;
	$cualiti=100;
	$tf=50;
	$pos_y=150;
	$pos_x=150;
	$promedio=10;
	$val='#000000';
	$col='#ffffff';
	$tipo='BR';

?>