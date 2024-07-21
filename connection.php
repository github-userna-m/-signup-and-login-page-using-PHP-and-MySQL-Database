<?php

// connecting to the database
$servername="localhost";
$username="root";
$password="";
$db_name='my_database';

// creat the connection 
$con = mysqli_connect($servername, $username, $password ,$db_name);

// die if connection wass not successful 
if(!$con){
    die("sorry we failed to connect:" . mysqli_connect_error());
    exit();
}



?>