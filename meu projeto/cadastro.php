<?php 

include 'conexao.php';

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$endereço = $_POST['endereço'];

$recebendo_cadastros = "INSERT INTO 
crud_pessoas
VALUES ('', '$nome', '$telefone', '$endereço')";
$query_cadastros = mysqli_query($connx, $recebendo_cadastros);

header('location: listagem.php');
?>