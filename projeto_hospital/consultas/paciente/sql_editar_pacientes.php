<?php

    //INICIANDO SESSAO
    session_start();

    //CHAMANDO ARQUIVO CONEXAO
    include '../../conexao.php';

    //CADA ../ SIGNIFICA VOLTAR UMA PASTA PARA TRAS   

    //BUSCANDO DADOS DO CADASTRO DE CONVENIO via _POST
    $var_cd_pacientes = $_POST['frm_cd_pacientes'];    
    $var_nm_pacientes = $_POST['frm_nm_pacientes'];    
    $var_sus= $_POST['frm_sus'];


    //PRIMEIRO PASSO PARA INSERIR DADOS
    //FAZER A CONSULTA DO INSERT
    $edita_pacientes = "UPDATE hospital.pacientes
                             SET nm_paciente = '$var_nm_pacientes',
                                 sn_sus = '$var_sus'
                             WHERE cd_paciente = '$var_cd_pacientes' ";

    //SEGUNDO PASSO
    //JUNTAR AS INFORMACOES DA CONEXAO + A CONSULTA
    $valida_cadastro_pacientes = mysqli_query($conexao, $edita_pacientes);
    //OBS a variavel $conexao é a mesma do conexao.php

    //VALIDANDO SE OS DADOS FORAM CORRETAMENTE INSERIDOS
    if(!$valida_cadastro_pacientes){
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'Erro na edição do convênio.';        
        header('Location: ../../pacientes.php');
    }else{
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'pacientes editada com sucesso';   
        header('Location: ../../pacientes.php');
    }



?>