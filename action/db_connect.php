<?php
// definindo as variáveis de conexão
$servidor = "localhost:3307";
$usuario  = "root";
$senha    = "p@ssw0rd";
$banco    = "meusistema";

// criar conexão
$connect = new mysqli($servidor, $usuario, $senha, $banco);

// checar conexão
if($connect->connect_error) {
	die("conexão falhou : ".$connect->connect_error);
} else {
	echo "conexão realizada com sucesso!";
}
?>