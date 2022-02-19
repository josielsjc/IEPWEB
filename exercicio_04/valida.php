
<?php

        $nome= $_POST['frm_nome'];
        $cpf = $_POST['frm_cpf'];
        $login = $_POST['frm_login'];
        $senha = $_POST['frm_senha'];




?>

<br>
<br>

<table>
    <tr></tr>
    <th>
  Nome
    </th>
    <th>
  CPF
    </th>
   Login
    <th>
      Senha
    </th>
    <tr>

    </tr>
    <td>
    <?php echo  $nome ?>
    </td>
    <td>
    <?php echo $cpf ?>
    </td>
    <td>
    <?php echo $login ?>
    </td>
    <td>
    <?php echo $senha ?>
    </td>
   
</table>
<hr>


<br>