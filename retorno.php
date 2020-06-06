<?php

include('divisao.php');
$obj_divisao = new Funcoes();
echo $obj_divisao->divisao($_POST["numerador"], $_POST["denominador"]);

// echo "O denominador deve ser diferente de 0.";
// echo "$i";