<?php
// definindo as variáveis de conexão
$servidor = "";
$usuario  = "";
$senha    = "";
$banco    = "";

// criar conexão
$connect = new mysqli($servidor, $usuario, $senha, $banco);

// checar conexão
if($connect->connect_error) {
	die("conexão falhou : ".$connect->connect_error);
} else {
	echo "conexão realizada com sucesso!";
}
?>
