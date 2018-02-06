<?php 

require './lib/autoload.php';

$smarty = new Template();

//valores para o template
$smarty->assign('NOME', 'TESTE');

$smarty->display('index.tpl');
 
 ?>