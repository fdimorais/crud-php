<html>
<head><title>CRUD PHP</title>
<meta charset="utf-8">
</head>
<?php require_once 'action/db_connect.php'; ?>
<body>
<h1>CRUD PHP</h1>
<table border="1">
<tr>
<th>id</th> <!-- table header -->
<th>Nome</th>
<th>Razão Social</th>
<th>Telefone</th>
</tr>

<?php

$sql = "select * from clientes";
$result = $connect->query($sql);

while($row = $result->fetch_assoc())
{
	print_r($row);
}
?>
</table>


</body>
</html>
