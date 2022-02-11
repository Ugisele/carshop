<?php

$servername="localhost";
$username="root";
$password="";

// connection

$guhuza= new mysqli($servername,$username,$password);

// testing if the connection is working
 if($conn -> connect_error){
     die("guhuza ntago bikunda" .$conn -> connect_error);
 }
 echo " turarenze wallah!!!!";

 

?>