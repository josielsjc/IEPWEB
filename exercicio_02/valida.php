<?php




$email = $_POST['frm_email'];
$senha = $_POST['frm_senha'];

if($email == "iep@aluno" && $senha == "1234") {

    header('location: formulario.php');

 


}
else
header('location: index.php');






?>




