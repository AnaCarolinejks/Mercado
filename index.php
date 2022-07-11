<?php
include("Produto.php");
include("Venda.php");

$venda = new Venda();
$venda->gerarP();
$venda->calcularVenda();

echo"</br>";
echo $venda->imprimir();
?>