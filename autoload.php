<?php 

//Open Connection Banco
$host = "localhost";
$database = "locationstudents";
$user = "root";
$password = "";

 include 'model/connection.php';
 include 'model/entidades/class.aluno.php';
 include 'model/class.servicedao.php';
 include 'servicos/class.servicosaluno.php';
 
 $connection = new Connection($host, $database, $user, $password);
 $serviceDao = new ServicosDao();
 $servicosAluno = new ServicosAluno();

 

?>