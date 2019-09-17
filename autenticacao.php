<?php
session_start();

$con =  new PDO("mysql:host=localhost; dbname=moove","root","");
$sql = $con->prepare("SELECT * FROM tbl_usuario WHERE email_usuario=? AND senha_usuario=?");
$sql->execute( array($_POST['email'], md5($_POST['senha']) ) );

$row = $sql->fetchObject();  // devolve um único registro

// Se o usuário foi localizado
if ($row){
    $_SESSION['usuario'] = $row;
    header("Location: ../pit/restrito/index_restrito.php");
}else{
    header("Location: ../pit/cadastro.php");
}


?>