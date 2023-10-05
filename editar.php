<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar registro</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php
        $var = $_GET['a'];
        $base = mysqli_connect('localhost', 'root', '', 'bdexemplo') or die("erro de conexão");
        $regra = "SELECT * FROM cadastro WHERE nome = '$var'";
        $res = mysqli_query($base, $regra);
        $mostrar = mysqli_fetch_array($res);
        echo "<br>Altere os dados do seu cadastro.";
        echo "<br>";
        echo "<br>Nome: $var";
        ?>
        <form action="editar1.php" method="post">
            <!-- Nome -->
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" size="35" maxlength="256" value="<?= $mostrar['nome'] ?>"
                readonly="true">
            <!-- Email -->
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" size="35" maxlength="256" value="<?= $mostrar['email'] ?>">
            <!-- Cidade -->
            <label for="cidade">Cidade:</label>
            <input type="text" name="cidade" id="cidade" size="35" maxlength="256" value="<?= $mostrar['cidade'] ?>">
            <!-- Estado -->
            <label for="estado">Estado:</label>
            <input type="text" name="estado" id="estado" size="2" maxlength="2" value="<?= $mostrar['estado'] ?>">
            <input type="submit" value="Atualizar Cadastro" name="enviar">
        </form>
    </main>
</body>

</html>