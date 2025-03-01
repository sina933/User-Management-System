<?php


$host="localhost";
$username="root";
$password='';
$database_name="user_management_db";

try{

    $pdo=new PDO("mysql:host=$host;dbname=$database_name",$username,$password);
    
}  catch(PDOException $e){

    die("ERORO: can not connect!". $e->getMessage());


}




?>