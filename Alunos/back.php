<?php
$escolha = @$_POST['cadastro']; // Usado @, já que vai ser testado em seguida.

if isempty( $escolha ) $pagina='URL da pagina padrao...';
else if $escolha == 'cadastro' $pagina= 'URL da pagina um';
else if $escolha == 'cadastrado' $pagina= 'URL da pagina dois';
else if $escolha == 'tres' $pagina= 'URL da pagina tres';
else $pagina = 'URL da pagina padrao, ou de erro';

?>