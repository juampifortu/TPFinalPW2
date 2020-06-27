<?php
$servername = "localhost";
$username = "root";
$dbname = "tpfinal";
$password = "";


try{
    $conne = new PDO("mysql:host=$servername;dbname=$dbname;",$username,$password);

}catch(PDOException $e){
    die("Error en la conexion" . $e->getMessage());
}