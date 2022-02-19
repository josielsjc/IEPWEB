<?php

//Variaveis
$nome="Josiel";
$sobrenome="Silva";

//Concatenando
$nome_completo =  $nome . " ". $sobrenome;

//Exibindo


$nascimento = 1991;
$data=2022;
$idade = $data- $nascimento;

if($idade >= 18){
    $resultado = "maior de idade";
}
else{
    $resultado = "menor de idade";
}

/*
$apresenta =  $nome_completo . " você é " . $resultado . " você nasceu em " . $nascimento . " sua idade portanto é " . $idade;
echo "<div style='width: 300px; height:200px; background-color:white;margin-top:30px;color: blue;font-size: 30px;
;'>  $apresenta </div>";*/
?>
<!-- TR linha TH coluna titulo RD coluna de resultado- L-->
<table>
    <tr></tr>
    <th>
        Nome
    </th>
    <th>
        Idade
    </th>
   
    <th>
        Resultado
    </th>
    <tr>

    </tr>
    <td>
    <?php echo $nome ?>
    </td>
    <td>
    <?php echo $idade ?>
    </td>
    <td>
    <?php echo $resultado ?>
    </td>
    <th></th>
</table>