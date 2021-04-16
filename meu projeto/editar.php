<?php 

include 'conexao.php'; 

$id = $_POST['id'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$endereço = $_POST['endereço'];   

$recebendo_cadastros = " UPDATE crud_pessoas SET nome = '$nome', endereço = '$endereço', telefone = '$telefone' WHERE id = '$id' ";
$query_cadastros = mysqli_query($connx, $recebendo_cadastros);

header('location: listagem.php');
?>