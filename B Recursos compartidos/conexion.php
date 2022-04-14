<?php
if ( ! file_exists( __DIR__ . '/Configuracion.php' ) ) {
	die( 'ERROR:No existe config.php' );
}

require 'Configuracion.php';

setlocale( LC_TIME, SITE_LANG );
date_default_timezone_set( SITE_TIMEZONE );

$app_db = mysqli_connect(TU_HOST,TU_USER,TU_PASS,TU_BBDD,TU_PORT );
if ( $app_db === false ) {
	die( 'Error al conectar con la base de datos' );
}
