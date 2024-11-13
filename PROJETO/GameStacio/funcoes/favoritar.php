<?php
session_start(); // Inicia a sessão

// Verifica se a requisição foi feita via método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Verifica se o usuário está autenticado
        if (!isset($_SESSION['id'])) {
            echo "Usuário não autenticado."; // Retorna uma mensagem de erro
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

        // 2. Verifica se o jogo já está favoritado pelo usuário.
        $sql = "SELECT 1 FROM rel_usuario_jogo WHERE usuario_id = ? AND jogo_id = ?";
        $stmt = $pdo->prepare($sql); // Prepara a nova query.
        $stmt->execute([$idUsuario, $jogoId]); // Executa a query com os IDs do usuário e do jogo.

        // Se a consulta retornar um resultado, o jogo já está favoritado.
        if ($stmt->fetch()) {
            echo "Este jogo já está favoritado."; // Mensagem de retorno.
            exit; // Encerra o script.
        }

        // 3. Insere o relacionamento entre o usuário e o jogo na tabela `rel_usuario_jogo`.
        $sql = "INSERT INTO rel_usuario_jogo (usuario_id, jogo_id) VALUES (?, ?)";
        $stmt = $pdo->prepare($sql); // Prepara a query de inserção.
        $stmt->execute([$idUsuario, $jogoId]); // Executa a query com os parâmetros de ID.

        // Se a inserção for bem-sucedida, retorna uma mensagem de sucesso.
        echo "Jogo adicionado aos favoritos com sucesso!";
    } catch (Exception $e) {
        // Captura exceções e registra no log do servidor para depuração.
        error_log("Erro ao processar a inserção: " . $e->getMessage());
        echo "Erro ao processar: " . $e->getMessage(); // Retorna a mensagem de erro.
    }
} else {
    // Retorna uma mensagem de erro se a requisição não for do tipo POST.
    echo "Método de requisição inválido.";
}
?>
