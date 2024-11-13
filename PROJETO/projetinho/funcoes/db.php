<?php
$host = 'localhost';        // Endereço do servidor do banco de dados (normalmente 'localhost' se estiver rodando no próprio computador)
$dbname = 'banco';     // Nome do banco de dados que você criou
$username = 'root';         // Nome de usuário para conectar ao banco de dados (no XAMPP, o padrão é 'root')
$password = '';             // Senha para o banco de dados (no XAMPP, a senha padrão do 'root' é vazia)

// Tentativa de conexão ao banco de dados
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);        // Cria um objeto PDO, que representa a conexão ao banco de dados
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);      // Configura o PDO para lançar exceções em caso de erro
}
catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());        // Caso a conexão falhe, exibe uma mensagem de erro e encerra o script
}
?>