<?php
$nome = $_POST['frm_nome'];
$email = $_POST['frm_email'];
$mensagem = $_POST['frm_msg'];






$resp = $_POST['frm_cor'];  
if ($resp == "Azul") {          
 
 ?>
<div class="exibe"><?php echo $nome .'<br>'. $email . '<br>' . $mensagem . '<br>' ; ?></div>




    
    <style>
        body{
            background-color: blue;

        
         
        }

        .exibe{
    background-color: white;
    opacity: 100%;
    width: 50vh;
    height: 50vh;
}
    </style>

 <?php
}

if ($resp == "Verde") {          

   ?>
<div class="exibe"><?php echo $nome .'<br>'. $email . '<br>' . $mensagem . '<br>' ; ?></div>
   <style>
       *{
           background-color: green;
       }
           .exibe{
    background-color: white;
    opacity: 100%;
    width: 50vh;
    height: 50vh;
}
   </style>

<?php
}


if ($resp == "Amarelo") {          

   ?>
<div class="exibe"><?php echo $nome .'<br>'. $email . '<br>' . $mensagem . '<br>' ; ?></div>
   <style>
       *{
           background-color: yellow;
         
       }

       .exibe{
    background-color: white;
    opacity: 100%;
    width: 50vh;
    height: 50vh;
}
   </style>

<?php
}

?>