<?php
echo "Atualizando o cadastro!";
$nome = $_POST['nome'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$base = mysqli_connect('localhost', 'root', '', 'bdexemplo') or die("erro de conexão");

$regra = "UPDATE cadastro SET email='$email',cidade='$cidade', estado='$estado' WHERE nome='$nome'";

$res = mysqli_query($base, $regra) or die("deu errado");

include 'lista.inc.php';