<?php

$name = $_POST['frm_name'];
$idade = $_POST['frm_idade'];
$sexo= $_POST['frm_sexo'];




if($sexo =="M"){

        echo '<style>
            .caixa_exibicao{
                width: 400px;
                height: 200px;
                border: solid 3px blue;
            }
        </style>';
}else{
        echo '<style>
            .caixa_exibicao{
                width: 400px;
                height: 200px;
                border: solid 3px pink;
            }
        </style>';
}
?>
<div class="caixa_exibicao">



<?php

if($idade==1 && $sexo=='F'){
    echo "<img src='recursos/bebef.jpg'>";
}
if($idade==1 && $sexo=='M'){
    echo "<img src='recursos/bebe.jpg'>";
}
echo $name;
echo $idade;
echo $sexo;



?>
   








