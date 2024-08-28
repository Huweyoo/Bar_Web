<?php

$servername = "127.0.0.1";
$suser= "root";
$password="";

$con = new mysqli($servername,$suser,$password);

if($con->connect_error){
    die("Connection failed:" . $con->connection_error);
}
$sql = "CREATE DATABASE IF NOT EXISTS wsforms";
    if ($con->query($sql) === TRUE) {
  
}
$sql1 = "CREATE TABLE IF NOT EXISTS `wsforms`.`users` (
        `id` INT NOT NULL AUTO_INCREMENT , 
        `fname` TEXT NOT NULL,
        `lname` TEXT NOT NULL,
        `email` TEXT NOT NULL,
        `password` TEXT NOT NULL,
        PRIMARY KEY (`id`),
        UNIQUE (`email`)
        ) ENGINE = InnoDB;";
    if ($con->query($sql1) === TRUE) {
    }
    
$sql2="CREATE TABLE IF NOT EXISTS `wsforms`.`contactmsg` (
        `id` INT NOT NULL AUTO_INCREMENT , 
        `fname` TEXT NOT NULL, 
        `lname` TEXT NOT NULL , 
        `email` TEXT NOT NULL ,
        `msg` TEXT NOT NULL,
        PRIMARY KEY (`id`)
        ) ENGINE = InnoDB;";
    if ($con->query($sql2) === TRUE) {
    }
?>