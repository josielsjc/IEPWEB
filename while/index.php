<?php

//Variavel quantidade de repetições
$qtd_repeticoes=10;
$contador = 1;


echo 'Quantidade de repetições:' . $qtd_repeticoes;

//Contador
echo '<br>Contador se inicia do: ' . $contador;

//LACO
echo ' <br>[IMPAR]: ' . $contador ;
while($contador <= $qtd_repeticoes){
    
    $contador++;
    // echo ' <br>Repetição: ' . $contador;
    
    if ($contador % 2 == 0){
        echo ' <br>[PAR]: ' . $contador;
    }
    else {
        echo ' <br>[IMPAR]: ' . $contador;
    }
}

// for ($contador = 1; $contador <= 10; $contador++) {
//     echo $contador;

// }
?>