<?php
//Info conexao
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";

	
	//Criar a conexão
    //@ ignora erros
	@$conexao =  new mysqli($servidor, $usuario, $senha);

    //checa conexao
	if($conexao->connect_error){
		die("Falha na conexao: " . $conexao->error);
	}else{
		echo "";
		
	}

	
?>

