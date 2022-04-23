<?php

    //INICIANDO SESSAO
    session_start();

    //CHAMANDO ARQUIVO CONEXAO
    include '../../conexao.php';

    //CADA ../ SIGNIFICA VOLTAR UMA PASTA PARA TRAS   

    //BUSCANDO DADOS DO CADASTRO DE especialidade via _POST
    $var_nm_especialidade = $_POST['frm_nome_pacientes'];    
    $var_sus = $_POST['frm_sus'];

    //PRIMEIRO PASSO PARA INSERIR DADOS
    //FAZER A CONSULTA DO INSERT
    $insere_pacientes = "INSERT INTO hospital.pacientes 
                            (nm_paciente, sn_sus)
                         VALUES 
                            ('$var_nm_pacientes', '$var_sus')";

    //SEGUNDO PASSO
    //JUNTAR AS INFORMACOES DA CONEXAO + A CONSULTA
    $valida_cadastro_pacientes = mysqli_query($conexao, $insere_pacientes);
    //OBS a variavel $conexao é a mesma do conexao.php

    //VALIDANDO SE OS DADOS FORAM CORRETAMENTE INSERIDOS
    if(!$valida_cadastro_pacientes){
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'Erro no cadastro da pacientes.';        
        header('Location: ../../pacientes.php');
    }else{
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'pacientes cadastrada com sucesso!';   
        header('Location: ../../pacientes.php');
    }



?>