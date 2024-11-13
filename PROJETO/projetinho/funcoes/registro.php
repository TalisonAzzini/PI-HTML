<?php
    include 'db.php';
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nomeUsuario'];
        $login = $_POST['loginUsuario'];
        $senha = password_hash($_POST['senhaUsuario'], PASSWORD_DEFAULT); // Criptografa a senha
        
        $verificaNick = "SELECT * FROM usuarios WHERE nick=?";
        $stmt = $pdo->prepare($verificaNick);
        $stmt->execute([$login]);
        
        if($stmt->rowCount()>0) {
            header("Location: ../registro.html?status=usuarioExiste");
            exit;
        }
        else{
            $sql = "INSERT INTO usuarios (nome, nick, senha) VALUES (?, ?, ?)";
            $stmt = $pdo->prepare($sql);

            if($stmt->execute([$nome, $login, $senha])) {
                header("Location: ../login.html?status=success");
                exit();
            }
            else {
                header("Location: ../registro.html?status=fail");
                exit();
            }
        }
    }
?>

