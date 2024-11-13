<?php
session_start(); // Inicia a sessão para acessar variáveis de sessão, como o ID do usuário.

// Verifica se a requisição foi feita via método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Verifica se o usuário está autenticado, ou seja, se o ID do usuário está na sessão.
        if (!isset($_SESSION['id'])) {
            echo "Usuário não autenticado."; // Retorna uma mensagem de erro se o usuário não estiver autenticado.
            exit; // Encerra o script para evitar continuar a execução.
        }

        // Captura o título do jogo enviado pelo script JavaScript via POST.
        $titulo = isset($_POST['jogo_titulo']) ? trim($_POST['jogo_titulo']) : '';
        
        // Verifica se o título foi fornecido e não está vazio.
        if (empty($titulo)) {
            echo "O título do jogo não foi fornecido."; // Retorna um erro se o título estiver vazio.
            exit; // Encerra o script.
        }

        // Inclui o arquivo que estabelece a conexão com o banco de dados.
        require_once 'db.php';

        // Captura o ID do usuário a partir da variável de sessão.
        $idUsuario = $_SESSION['id'];

        // 1. Consulta para buscar o ID do jogo com base no título fornecido.
        $sql = "SELECT id FROM jogos WHERE titulo LIKE ?";
        $stmt = $pdo->prepare($sql); // Prepara a query SQL.
        $stmt->execute(["%$titulo%"]); // Executa a query com o parâmetro de título.

        // Recupera o resultado da consulta.
        $jogo = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$jogo) {
            echo "Jogo não encontrado."; // Retorna uma mensagem de erro se o jogo não for encontrado.
            exit; // Encerra o script.
        }

        // Captura o ID do jogo encontrado.
        $jogoId = $jogo['id'];

        // 2. Verifica se o jogo está favoritado pelo usuário (se existe o relacionamento).
        $sql = "SELECT 1 FROM rel_usuario_jogo WHERE usuario_id = ? AND jogo_id = ?";
        $stmt = $pdo->prepare($sql); // Prepara a query.
        $stmt->execute([$idUsuario, $jogoId]); // Executa a query com os parâmetros.

        // Se o jogo não estiver favoritado, retorna uma mensagem de erro.
        if (!$stmt->fetch()) {
            echo "Este jogo não está favoritado."; // Mensagem de erro se o jogo não for favoritado.
            exit; // Encerra o script.
        }

        // 3. Remove o relacionamento entre o usuário e o jogo na tabela `rel_usuario_jogo`.
        $sql = "DELETE FROM rel_usuario_jogo WHERE usuario_id = ? AND jogo_id = ?";
        $stmt = $pdo->prepare($sql); // Prepara a query de exclusão.
        $stmt->execute([$idUsuario, $jogoId]); // Executa a query para deletar o relacionamento.

        // Se a remoção for bem-sucedida, retorna uma mensagem de sucesso.
        
        
    } catch (Exception $e) {
        // Captura exceções e registra no log do servidor para depuração.
        error_log("Erro ao processar a remoção: " . $e->getMessage());
        echo "Erro ao processar: " . $e->getMessage(); // Retorna a mensagem de erro.
    }
} else {
    // Retorna uma mensagem de erro se a requisição não for do tipo POST.
    echo "Método de requisição inválido.";
}
?>
