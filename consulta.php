<?php
include "connect.php";

$sql = mysqli_query($connectdb, "select * from automovel");
while ($linha = mysqli_fetch_array($sql)) {
$nome = $linha['nome'];
$cor = $linha['cor'];
$marca = $linha['marca'];
$val = $linha['valor'];

echo "Nome: $nome<br>";
echo "Cor: $cor<br>";
echo "Marca: $marca<br>";
echo "Valor: $val<br>";

}

?>