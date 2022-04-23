<?php

    //INICIANDO SESSAO
    session_start();

    //CHAMANDO ARQUIVO CONEXAO
    include '../../conexao.php';

    //CADA ../ SIGNIFICA VOLTAR UMA PASTA PARA TRAS   

    //BUSCANDO DADOS DO CADASTRO DE CONVENIO via _POST
    $var_cd_pacientes = $_POST['frm_cd_pacientes'];    


    //PRIMEIRO PASSO PARA INSERIR DADOS
    //FAZER A CONSULTA DO INSERT
    $exclui_pacientes = "DELETE FROM hospital.pacientes WHERE cd_paciente= '$var_cd_pacientes'";

    //SEGUNDO PASSO
    //JUNTAR AS INFORMACOES DA CONEXAO + A CONSULTA
    $valida_cadastro_pacientes = mysqli_query($conexao, $exclui_pacientes);
    //OBS a variavel $conexao é a mesma do conexao.php

    //VALIDANDO SE OS DADOS FORAM CORRETAMENTE INSERIDOS
    if(!$valida_cadastro_pacientes){
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'Erro na exclusao da pacientes.';        
        header('Location: ../../pacientes.php');
    }else{
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'pacientes excluido com sucesso!';   
        header('Location: ../../pacientes.php');
    }



?>