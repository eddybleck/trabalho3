<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualização de Professores</title>
</head>

<body>
    <center>
        <h1>Professores Cadastrados</h1>

        <table border="4">
            <tr>
                <td>NOME</td>
                <td>SOBRENOME</td>
                <td>EMAIL</td>
                <td>TEL</td>
            </tr>
            <?php
                require("conecta.php");

                $dados_select = mysqli_query($conn, "SELECT nome, sobrenome, email, tel FROM prof");

                while($dado = mysqli_fetch_array($dados_select)) {
                    echo '<tr>';
                    echo '<td>'.$dado['nome'].'</td>';
                    echo '<td>'.$dado['sobrenome'].'</td>';
                    echo '<td>'.$dado['email'].'</td>';
                    echo '<td>'.$dado['tel'].'</td>';
                    echo '</tr>';
                }
            ?>
        </table>
        <br />
        <a href="index.html"><input type="button" value="Voltar"></a>
    </center>
</body>

</html>
