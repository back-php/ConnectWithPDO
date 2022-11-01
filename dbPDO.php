<?php
$host='localhost';
$username='root';
$password='';
$dbname='project';
$dsn="mysql:host=$host;dbname=$dbname";

$pdo =new PDO($dsn,$username,$password);
?>