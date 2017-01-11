<?php

$u=$_POST['user'];
$p=$_POST['pass'];
include_once("connect.php");
$idcon=connecting("helpsoft","set");


if($idcon)
{
	$req="SELECT * from user where nom= \"$u\" and prenom=\"$p\"";
	$res=$idcon->query($req);
$var=null;
	if(!$res)
	{
		$var['con']="connection echoué";
	}
	else
	{

		if ($res->rowCount()==1)

		{
			$var['success']='ok';
		}
		else
		{
			$var['success']='echoue';

		}

		

	}
	
}
echo json_encode($var);
	?>