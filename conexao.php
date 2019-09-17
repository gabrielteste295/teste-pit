<?php

// Criando constantes para conexão com o banco de dados

define('server', 'mysql:host=localhost; dbname=moove');
define('usuario','root');
define('senha', '');


// Criar a classe Cargos

class cadastro
{   // Atributos / campos da tabela
	public $Id;
    public $Nome;
    public $Email;
    public $Senha;
	public $CPF;
	public $Data_de_Nascimento;
	public $Renavam;
	public $CEP;

    public function inserir()
    {
        //verificar se os dados foram enviados pelo form
        if(isset($_POST['Id'],$_POST['Nome'], $_POST['Email'], $_POST['Senha'], $_POST['CPF'], $_POST['Data_de_Nascimento'], $_POST['Renavam'], $_POST['CEP']))
        {
            //preencher os atributos com os valores do formulário
            $this->Id = $_POST["Id"];
			$this->Nome = $_POST["Nome"];
            $this->Email = $_POST["Email"];
            $this->Senha = md5 ($_POST["Senha"]);
            $this->Data_de_Nascimento = md5($_POST["Data_de_Nascimento"]);
			$this->Renavam = $_POST["Renavam"];
			$this->CEP = $_POST["CEP"];
          
            //criar a conexão com o bd
            $pdo = new PDO(server, usuario, senha);

            //criar o comando SQL
            $smtp = $pdo->prepare("insert into tbl_locatario (id, Nome, Email, Senha, CPF, Data_de_Nascimento, Renavam, CEP) values(null, :Nome,  :Email, :Senha ,:CPF,:Data_de_Nascimento,:Renavam,:CEP)");

            //executar o comando passando os valores
            $sucesso = $smtp->execute(array(
                ':Nome' => $this->Nome,
                ':Email' => $this->Email,
                ':Senha' => $this->Senha,
				':CPF' => $this->CPF,
				':Data_de_Nascimento' => $this->Data_de_Nascimento,
				':Renavam' => $this->Renavam,
				':CEP' => $this->CEP,
               
                ));

            return $sucesso;
        }
        else{
            return false;
        }
    }
}

?>