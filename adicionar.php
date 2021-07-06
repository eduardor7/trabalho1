<?php
include 'connect.php';

$nome = $_POST['nome'];
$val = $_POST['valor'];
$cor = $_POST['cor'];
$marca = $_POST['marca'];

$inserir = mysqli_query($connectdb,"insert into automovel(nome,cor,valor,marca) values('$nome','$cor','$val','$marca')");

if($inserir){
 echo "Cadastrado com Sucesso!";
}else{
 echo "Erro ao Cadastrar";
}
?>