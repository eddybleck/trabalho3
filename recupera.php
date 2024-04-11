<?php
    require("conecta.php");

    $result = mysqli_query($conn, "SELECT * FROM prof");

    echo "<center><h1>Professores Cadastrados</h1>";
    echo "<table border='1'>";
    echo "<tr><th>NOME</th><th>SOBRENOME</th><th>EMAIL</th><th>TEL</th></tr>";

    while($row = mysqli_fetch_array($result)) {
        echo "<tr><td>".$row['nome']."</td><td>".$row['sobrenome']."</td><td>".$row['email']."</td><td>".$row['tel']."</td></tr>";
    }

    echo "</table>";
    echo "<a href='index.html'><input type='button' value='Voltar'></a></center>";
?>
