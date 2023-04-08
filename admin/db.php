<?php 	
// connexion a la base de donnee
$servername = "localhost";
$username = "root";
$password = "";
$database = "managol_db";


// creation de la connexion de la base de donnees
$connexion = mysqli_connect($servername, $username, $password, $database);

// verification de la connexion
if($connexion){
	echo"connectez avec success"
}

else{
	echo"echec de connexion";
}



 ?>