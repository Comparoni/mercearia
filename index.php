<?php 

require './lib/autoload.php';

$smarty = new Template();
Rotas::get_pagina();

//valores para o template
$smarty->assign('NOME', 'TESTE');


$smarty->display('index.tpl');
 
 ?>