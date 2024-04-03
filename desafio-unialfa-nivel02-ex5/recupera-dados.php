<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];
    $hobbie = $_POST["hobbie"];

    if (strlen($nome) < 6) {
        die("O nome precisa ter no minimo 6 caracteres");

    }

    if ($idade < 18) {
        die("Precisa ter no minimo 18 anos para acessar");
    }

    echo "Nome: $nome<br>";
    echo "Email: $email<br>";
    echo "Idade: $idade<br>";
    echo "Hobbie: $hobbie<br>";
} else {
    die("Precisa ter o metodo post");
}

?>