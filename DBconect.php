<?php
// configuración de la conexión
$servidor ='localhost';
$baseDatos = 'php_multiplelogin';
$usuario ='root';
$password ='';

// echo "archivo conexion";
try
{
	$db = new PDO("mysql:host=$servidor; dbname=$baseDatos",$usuario,$password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
	
	// echo $db ? "conectado":"fallo en conexion";
}
catch(PDOEXCEPTION $e)
{
	$e->getMessage();
}

?>



