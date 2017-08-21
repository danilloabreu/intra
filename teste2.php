<?php
$path = $_SERVER['DOCUMENT_ROOT'];
require_once($path."/intra/model/php/LeituraMensagem.php");
require_once($path."/intra/model/php/Mensagem.php");
require_once($path."/intra/controller/php/conexao.php");
/*
$usuario="Danilo";
$senha="1234";
//var_dump($usuario);
//$resultado=Usuario::read($conexao);
//var_dump($resultado);
//var_dump($listaUsuario);
*/

//$resultado=Mensagem::read($conexao);

$resultado= LeituraMensagem::read($conexao,"id_usuario='1' AND is_read='0'");

var_dump($resultado);

$mensagem = Mensagem::read($conexao,"id=".$resultado[0]->getId_mensagem());

echo $mensagem[0]->getMensagem();

//echo $resultado[0]->getMensagem();


