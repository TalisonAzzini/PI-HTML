<?php
    include 'db.php';
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        
        // Verificar se o login existe
        $sql = "SELECT * FROM usuarios WHERE nick = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$login]);
        
        if ($stmt->rowCount() > 0) {
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            
            // Verifica se a senha está correta
            if (password_verify($senha, $usuario['senha'])) {
                $_SESSION['autenticado'] = true;
                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nomeUsuario'] = $usuario['nome'];
                header("Location: ../home.html?status=loginSucesso"); // Redireciona para o perfil (Autenticação feita)
                exit();
            } else {    // Senha incorreta
                header("Location: ../login.html?status=senhaIncorreta");
                exit();
            }
        } else {    // Falha na autenticação
            header("Location: ../login.html?status=usuarioNaoEncontrado");
            exit();
        }
    }
?>
