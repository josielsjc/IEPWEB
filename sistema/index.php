<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

</body>
</html>


<?php

//Chamando conexao
include 'conexao.php';

//Coletando as informacoes do post
//@ Para ignorar o erro caso nao seja enviado
@$cd_convenio = $_POST['frm_cd_convenio'];

?>

<form action="index.php" method="post">

<input type="number" name="frm_cd_convenio">

<button type="submit">Buscar dados cadastrados</button>

</form>

<br>
<?php echo "Convênio localizado: " . '<br>'; ?>
<a href="CAD_CONVENIO.PHP"><button type="button" id="cadastra">Cadastrar </button></a>


<?php


//BUSCANDO DADOS DO CONVENIO
        $consulta_convenio = "SELECT * FROM 
                              banco_iep.convenio
                              WHERE cd_convenio = $cd_convenio";

      //EXECUTANDO COMANDO NO BANCO
    $resultado = mysqli_query($conexao, $consulta_convenio);

    //APENAS PARA O COMANDO SELECT
    //CRIANDO ARRAY(TABELA) COM AS INFORMACOES DA CONSULTA
    $linha = mysqli_fetch_array($resultado);
  

   

?>
  <!-- EXIBINDO INFORMACOES     -->
<table>
    <!-- Primeira linha titulo -->
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Cooparticipação (%)</th>
    </tr>
    <!-- segunda linha dados -->
    <tr>
        <td><?php echo $linha['cd_convenio'];?> </td>
        <td><?php echo $linha['nm_convenio'];?></td>
        <td><?php echo $linha['cooparticipacao'];?></td>
    </tr>
    </table>
    
    <style>


        table{
            width: 500px;
            height: 210px;
        }
    th{ 
        padding: 10px;
        border-top: solid black 1px;
        background-color: burlywood;
        border: solid black 3px;
        
    }

    td{
        padding: 10px;
        text-align: center;
        border: solid black 1px;
    }
        
    </style>
