<?php
$host='localhost';$db='tienda_parcial';$user='root';$pass='';
try{$conn=new PDO("mysql:host=$host;dbname=$db",$user,$pass);}catch(PDOException $e){die($e->getMessage());}
