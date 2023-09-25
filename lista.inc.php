<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar dados do banco</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php
        $base = mysqli_connect('localhost', 'root', '', 'bdexemplo') or die("erro de conexão");

        $regra1 = "SELECT * FROM cadastro WHERE estado = 'SP' order by nome";
        $regra2 = "SELECT * FROM cadastro WHERE estado <> 'SP' ORDER BY nome";

        $res = mysqli_query($base, $regra1); //Executa comando SQL, no caso para pegar todos os dados e retornar o valor da consulta em uma variável $res
        ?>
        <h2>Cadastro de usuários do estado de SP</h2>
        <table>
            <tr>
                <td>Nome</td>
                <td>E-mail</td>
                <td>Cidade</td>
                <td>Comentário</td>
            </tr>
            <?php
            //Enquanto houver dados na tabela para serem mostrados, execute o que está dentro do while
            while ($mostrar = mysqli_fetch_array($res)) {
                echo "<tr>
            <td>" . $mostrar['nome'] . "</td>
            <td>" . $mostrar['email'] . "</td>
            <td>" . $mostrar['cidade'] . "</td>
            <td>" . $mostrar['comentario'] . "</td>
            <td> <a href='apagar.php?a=" . $mostrar['nome'] . "'>apagar</a></td>
                <td> <a href='alterar.php?a=" . $mostrar['nome'] . "'>editar</a></td>
            </tr>";
            }
            ?>
        </table>

        <?php
        $res2 = mysqli_query($base, $regra2); //Executa comando SQL para pegar todos os dados e retornar valor de consulta numa variavel $res
        ?>

        <h2>Cadastro de Usuários de Outros Estados</h2>

        <table>
            <tr>
                <td>Nome</td>
                <td>E-mail</td>
                <td>Cidade</td>
                <td>Comentário</td>
                <td></td>
                <td></td>
            </tr>

            <?php
            //Enquanto houver dados na tabela para serem mostrados, execute o qque está dentro do while

            while ($mostrar = mysqli_fetch_array($res2)) {
                echo "<tr>
                <td>" . $mostrar['nome'] . "</td>
                <td>" . $mostrar['email'] . "</td>
                <td>" . $mostrar['cidade'] . "</td>
                <td>" . $mostrar['comentario'] . "</td>
                <td> <a href='apagar.php?a=" . $mostrar['nome'] .   "'>apagar</a></td>
                <td> <a href='alterar.php?a=" . $mostrar['nome'] . "'>editar</a></td>
            </tr>";
            }
            ?>
        </table>
    </main>

</body>

</html>