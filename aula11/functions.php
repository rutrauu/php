<?php
$server = "localhost";
$user_db = "root";
$pass_db = "";
$name_db = "gentili";
$conecta = mysqli_connect($server,$user_db,$pass_db, $name_db);

function select($conecta){
	$sql = "SELECT * FROM usuarios ";
	$action = mysqli_query($conecta, $sql);

	//Busca apenas uma linha da tabela
	//$result = mysqli_fetch_assoc($action);
	$result = mysqli_fetch_all($action, MYSQLI_ASSOC);
	return $result;
}
function insertUser($conecta){
	if (isset($_POST['inserir'])) {
		$nome = mysqli_real_escape_string($conecta, $_POST['nome']);
		$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
		$email = mysqli_real_escape_string($conecta,$email);
		$senha = sha1($_POST['senha']);
		$erros = array();

		if (strlen($nome) < 4 ) {
			$erros[] = "<p>Preencha seu nome completo.</p>";
		}
		if (empty($email)) {
			$erros[] = "<p>Preencha um e-mail válido.</p>";
		}
		if (empty($senha)) {
			$erros[] = "<p>Preecha uma senha.</p>";
		}
		if ( !empty($erros) ) {
			foreach ($erros as $erro) {
				echo $erro;
			}
		}else{
			$sql = "INSERT INTO usuarios 
			( nome, email, senha, data ) VALUES 
			( '$nome', '$email','$senha', NOW() )";
			$action = mysqli_query($conecta, $sql);
			echo "Dado inserido com sucesso!";
		}
	}
}

function delete($conecta, $id){
	if (isset($_POST['deletar']) and !empty($id)) {
		$id = filter_var($id, FILTER_VALIDATE_INT);
		$query = "DELETE FROM usuarios WHERE id = $id";
		$action = mysqli_query($conecta, $query);
		if ($action) {
			echo " Usuário Deletado com sucesso!";
		}else{
			echo "Erro ao deletar";
		}
	}
}
