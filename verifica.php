<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $comentarios = $_POST["comentarios"];
        $erro = 0;
        // Verifica se campo NOME não está em branco
        if (empty($nome)) {
            echo "<p>Favor digitar seu nome corretamente.</p>";
            $erro = 1;
        }
        // Verifica se campo EMAIL não está em branco
        if (empty($email) || strpos($email, '@') === false) {
            echo "<p>Favor digitar seu email corretamente.</p>";
            $erro = 1;
        }
        //Verifica se campo CIDADE está em branco
        if (empty($cidade)) {
            echo "<p>Favor digitar sua cidade.</p>";
            $erro = 1;
        }
        //Verifica se campo ESTADO está preenchido com dos dígitos
        if (strlen($estado) != 2) {
            echo "<p>Favor digitar seu estado corretamente.</p>";
            $erro = 1;
        }
        //Verifica se campo COMENTARIOS está vazio
        if (empty($comentarios)) {
            echo "<p>Favor entrar com algum comentário.</p>";
            $erro = 1;
        }
        // Verifica se houve erro
        if ($erro == 0) {
            echo "<p>Todos os dados foram digitados corretamente.</p>";
            include 'insere.inc';
        }
        ?>
    </main>
</body>

</html>