<?php
$servername = "localhost";
$username = "atchoc47_bechkouuche";
$password = ",ykTSiQ3O)cy";
$dbname = "atchoc47_atchochwiya";
// Create connection
try{
$conn = new PDO("mysql:host=$servername; dbname=$dbname; charset=utf8",$username,$password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
     $conn->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
   
    
}
catch (PDOException $e){
    echo "connexion faild to the server " .$e->getMessage();
}
    

?>