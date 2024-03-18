<?php

$num1 = $_POST['numero1'];
$num2 = $_POST['numero2'];
$op = $_POST['operacao'];

include "header.php";
require_once "funcao.php";
$resultado = Calcular ($num1,$num2,$op);
echo "O resultado é:". $resultado;
include "footer.php";