<?php
$host="localhost";
$dbName="leo";
$user="root";
$password="root";

try{
    $db = new PDO('mysql:host=localhost;dbname=leo;charset=utf8', 'root', 'root');
} catch (Exception $e){
    die('Erreur :'.$e->getMessage());
}