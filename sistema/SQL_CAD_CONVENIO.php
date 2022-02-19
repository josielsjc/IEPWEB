<?php

//Chamando conexao
include 'conexao.php';

//Coletando as informacoes do post
//@ Para ignorar o erro caso nao seja enviado



//Chamando conexao


//Coletando as informacoes do post
//@ Para ignorar o erro caso nao seja enviado
$convenio = $_POST['frm_conv'];
$convenio_coo = $_POST['frm_coo'];

echo 'Nome do convênio digitado: '. $convenio . '<br>';
echo  '<br>' . 'Porcentagem da cooparticipação: '. $convenio_coo;

$comando_sql = "(INSERT INTO convenio)
VALUES('$convenio', '$convenio_coo')";


?>

