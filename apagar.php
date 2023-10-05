<?php

$var = $_GET['a'];
$base = mysqli_connect('localhost', 'root', '', 'bdexemplo') or die("erro de conexão");

$apagar = "DELETE FROM cadastro WHERE nome = '$var'";

mysqli_query($base, $apagar);

echo ("Registro excluído com sucesso! <br>");
include 'lista.inc';