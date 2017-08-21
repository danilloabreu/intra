<?php
$path = $_SERVER['DOCUMENT_ROOT'];
require "$path/intra/model/php/Telefone.php";
require "$path/intra/controller/php/conexao.php";

$listaTelefone= Telefone::read($conexao);


$html="<table id='tabelaRamais' class='table table-hover' cellspacing='0' width='100%'>";
$html.='<thead>';
$html.='<tr>';
$html.="<th class='text-center'>Descrição</th>";
$html.="<th class='text-center'>Número</th>";
$html.="</tr>";
$html.="</thead>";
$html.="<tbody>";
    for ($i = 0; $i < count ($listaTelefone); $i++) {
    $html.="<tr>";
    $html.="<td class='text-center'>".$listaTelefone[$i]->getDescricao()."</td>";
    $html.="<td class='text-center'>".$listaTelefone[$i]->getNumero()."</td>";   
    $html.="</tr>";
}
$html.="</tbody>";
$html.="</table>";

echo $html;