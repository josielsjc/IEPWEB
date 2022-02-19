<link rel="stylesheet" href="style.css">

<div class="caixa">Sistema de Caixa</div>
<?php

    if(isset($_POST['frm_caixa'])){

        $quant_caixa = $_POST['frm_caixa'];
        $uni_caixa = $_POST['frm_uni'];

    }else{

        $quant_caixa = 0;
        $uni_caixa = 0;

    }

    $total = $quant_caixa * $uni_caixa;

?>

<br>
<br>

<table>
    <tr></tr>
    <th>
        QUANTIDADE DE CAIXAS
    </th>
    <th>
        UNIDADES POR CAIXA
    </th>
   
    <th>
        QUANTIDADE TOTAL
    </th>
    <tr>

    </tr>
    <td>
    <?php echo $quant_caixa ?>
    </td>
    <td>
    <?php echo $uni_caixa ?>
    </td>
    <td>
    <?php echo $total ?>
    </td>
   
</table>
<hr>

<form method="POST" action="index.php" id="calcula">
QUANTIDADE DE CAIXAS<input type="text" name="frm_caixa" value="<?php echo $quant_caixa ?>" placeholder="QUANTIDADE DE CAIXAS" >
<br> UNIDADES POR CAIXA<input type="text" name="frm_uni" value=" <?php echo $uni_caixa ?>" placeholder="UNIDADES POR CAIXA" >
<br> <input type="submit" value="Calcular" id="enviar">
</form>
<br>
<br>