<?php



date_default_timezone_set('America/Sao_Paulo');
ini_set('display_errors', true); 

$Data = date("Y-m-d");
$Hora = date("H:i:s");

function db_connect()
{
	define('DB_HOSTNAME', 'localhost');
	define('DB_DATABASE', 'kpi');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_CHARSET','utf8');
    $opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');
    $PDO = new PDO("mysql:host=".DB_HOSTNAME."; dbname=".DB_DATABASE, DB_USERNAME, DB_PASSWORD, $opcoes);
	$PDO -> setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  
    return $PDO;
}

 
  
  function dateMysql ($date){
	
	return implode("-",array_reverse(explode("/",$date)));
	
	}
	
	
function Mysqldate ($date){
	
	return implode("/",array_reverse(explode("-",$date)));
	
	}
	
function decimalToMySql($value)
    {
        $value = str_replace(".","",$value);
        $value = str_replace(",",".",$value);
        return $value;
    }
	

