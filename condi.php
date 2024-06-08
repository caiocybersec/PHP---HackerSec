<!DOCTYPE html>
<html>
<head>
	<title>Condições PHP</title>
</head>
<body>
<?php

$a = 10;
$b = 10;

$soma = $a + $b;

if($soma == 20){
	echo "igual";
}else{
	echo "diferente";
}


$usuario = "hacker";
$senha = "sec";

if($usuario == "hacker" && $senha == "sec"){
	echo "Acesso liberado para $usuario";
}else{
	echo "Acesso negado para %usuario, verifique os erros de validação";
}

$n1 = 10;
$n2 = 100;
$soma = $n1 + $n2;

if($soma < 200){
	echo "menor";
}else{
	echo "maior";
}
 
?>


</body>
</html>