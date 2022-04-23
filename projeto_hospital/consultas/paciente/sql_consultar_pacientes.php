<?php

    //PRIMEIRO PASSO PARA BUSCAR DADOS
    //FAZER A CONSULTA DO SELECT
    $consulta_pacientes = "SELECT cd_paciente, nm_paciente, sn_sus
                           FROM hospital.paciente
                           ORDER BY cd_paciente DESC";

    //SEGUNDO PASSO
    //JUNTAR AS INFORMACOES DA CONEXAO + A CONSULTA
    $resultado_pacientes = mysqli_query($conexao, $consulta_pacientes );
    //OBS a variavel $conexao é a mesma do conexao.php

?>