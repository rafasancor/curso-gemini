<?php

$senhaSimples = 'minhasenha123'; // Esta é a senha que o usuário digitou no formulário

// Cria o hash da senha
// PASSWORD_DEFAULT atualmente usa o algoritmo BCRYPT, que é uma boa escolha.
// Ele também gera um salt aleatório automaticamente.
$senhaHash = password_hash($senhaSimples, PASSWORD_DEFAULT);

echo "Senha simples: " . $senhaSimples . "<br>";
echo "Senha hash: " . $senhaHash . "<br>";

// Exemplo de como você verificaria essa senha no login:
$senhaDigitadaNoLogin = 'minhasenha123'; // Senha que o usuário digita ao tentar fazer login

if (password_verify($senhaDigitadaNoLogin, $senhaHash)) {
    echo "Login bem-sucedido! A senha está correta.";
} else {
    echo "Senha incorreta.";
}

?>