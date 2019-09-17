<?php   

$con = new PDO("mysql:host=localhost;dbname=moove","root","");
if (isset($_POST)){
  $sql = $con->prepare("INSERT INTO tbl_usuario  (id_usuario,nomecompleto_usuario, cpf, cnh, data_nascimento, email_usuario,senha_usuario,tbl_aluguel_id_aluguel,tbl_locatario_id) values (null, ?, ?,?,?,?,?,1,1)");
  $sql->execute(array(  $_POST['nomecompleto_usuario'], $_POST['cpf'], $_POST['cnh'], $_POST['data_nascimento'],$_POST['email_usuario'],md5($_POST['senha_usuario'])  ));
}
  $rows = $sql->fetchall(PDO::FETCH_CLASS);

     if ($rows > 0){
	// Select nos dados do usuario

	
     header("Location: ../pit/index.html");
     
}
else{
	
     header("Location: ../pit/cadastro.php");
}

?>