<?php
$servername="localhost";
$username="root";
$password="";

// connection

$conne=new mysqli($servername,$username,$password);
// testing if connection is working

if($conne->connect_error){
    die("connection failed" .$conne->connect_error);
    
}
// Create database
$sql = "CREATE DATABASE Customers (ID INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
names varchar(30),
e_mail varchar(30),
phone int(10),
messages varchar(1000),
reg_date timestamp default current_timestamp on update current_timestamp )";

if ($conne->query($sql) === TRUE) {

    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conne->error;
}

$conne->close();

?>
