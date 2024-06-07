<?php
$user = $_POST['user'];
$pass = $_POST['pass'];

if($user == "hackersec" && $pass == "sec"){
	echo "Acesso permitido";
}else{
	echo "Acesso negado";
}

?>