<?php
//Cria conexão com bando de dados 'bdexemplo' através do arquivo 'conecta_mysql.inc'
$conexao = mysqli_connect('localhost', 'root', '', 'bdexemplo');

//Ajusta charset de comunicação entre aplicação e banco de dados
mysqli_set_charset($conexao, 'utf8');

//Verifica conexão
if ($conexao->connect_error) { die("Flaha ao realizar a conexão: " . $conexao->connect_error); }
