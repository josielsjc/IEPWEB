<?php
include_once("conexao.php");
$arquivo = $_FILES['arquivo'] ['name']

$_UP['pasta'] = 'foto/';

//$_UP['tamanho']=1024*1024*100;

$_UP['extensoes']=array('png','jpg','jpeg','gif','jiff');

$_['renomeia']=false;

$_UP['erros'][0] = 'Não houve erros';
$_UP['erros'][1] = 'Arquivo esta maior que o limite';
$_UP['erros'][2] = 'O arquivo ultrapassa o limite';
$_UP['erros'][3] = 'upload feito parcialmente';
$_UP['erros'][4] = 'não foi realizado  o upload do arquivo';

if($_FILES['arquivo'] ['erros'] != 0){
    die("não foi possivel fazer o upoad erro:<br>" . $_up['erros'][$_FILES['arquivo'] ['error']]);
    exit;
    //9:38
}


?>