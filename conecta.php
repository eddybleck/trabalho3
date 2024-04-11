<?php
    $servername = "localhost";
    $database = "trabalho3";
    $username = "root";
    $password = "YES";


    $conn = mysqli_connect($servername, $database, $username, $password);

    if (!$conn) {
        die("Conexão falhou. Erro: " . mysqli_connect_error());
    }
?>