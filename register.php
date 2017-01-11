



<?php
    $n=$_POST["nom"];
    $pre=$_POST["prenom"];
    $cin=$_POST["cin"];
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    $var2=null;
    include_once("connect.php");
    $idcon=connecting("helpsoft","set");
    
 
    	if($idcon)
        {
    	echo "connexion établie......<br><br>";
    	$requete="INSERT INTO user values(null,\"$n\",\"$pre\",\"$cin\",\"$email\",\"$pass\")";
    	
    	
    	if($idcon->exec($requete))
    	{
    		
            $var2['success']='inscrit';
           

    	}
    	else
    	{
    	 $var2['success']='echec';
    	}

    }

    //echo $var2['success'];
    echo json_encode($var2);
 

    
?>