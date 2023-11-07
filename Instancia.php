<?php
require "Conta.php";
require "Cliente.php";

$conta = new Conta(78975, "Marlon", 0.00);
$cliente = new Cliente(18, "000.000.000-00", $conta);

echo $cliente->retornarConta()->retornarNumero();