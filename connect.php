<?php
function connecting($base,$set)
{
include_once($set.".php");
$host=HOST;
$dsn="mysql:host=$host;dbname=$base";
$user=user;
$pass=pass;
try 
{

$idcon=new PDO($dsn,$user,$pass);
return $idcon;
}

catch(PDOException $e)
{
	return false ;
}



}


?>