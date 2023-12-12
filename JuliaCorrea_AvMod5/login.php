<?php

// Validação dos dados do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["loginuser"];
    $password = $_POST["loginPassword"];

    // Implemente a lógica de autenticação conforme necessário
    if ($username == "usuario" && $password == "senha") {
        // Defina variável de sessão para limitar o acesso
        session_start();
        $_SESSION["user"]=$username;

        // Redireciona para a página restrita ou faça o que for necessário
        header("Location: restrita.php");
        exit();
    } else {
        // Tratamento de erro de login
        echo "Erro no login. Usuário ou senha incorretos.";
    }
}
?>
