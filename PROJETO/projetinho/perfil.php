<?php
    session_start();
    include './funcoes/db.php';

    // Lida com o logoff
if (isset($_POST['logoff'])) {
    session_destroy(); // Destroi a sessão
    header("Location: index.html"); // Redireciona para a página de login
    exit();
}
    $sql = "SELECT j.id, j.titulo, j.descricao, j.imagem FROM rel_usuario_jogo rel INNER JOIN jogos j ON rel.jogo_id=j.id WHERE rel.usuario_id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_SESSION['id']]);

    $jogosFav = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Jogos</title>
    <link rel="stylesheet" href="./styles/perfil.css">
    <link rel="stylesheet" href="./styles/lista_jogos.css">
    <style>
        .fundo_gif {
            background-image: url('./assets/fundo.gif');    /* Coloque o caminho do seu GIF aqui */
            background-size: cover;                         /* Cobre toda a tela com o GIF */
            background-position: center;                    /* Centraliza o GIF */
            background-repeat: no-repeat;                   /* Evita repetição do GIF */
            background-attachment: fixed;                   /* Mantém o fundo fixo ao rolar a página */
        }
        
        .jogos{
            display: none;
        }
    </style>
    <script type="text/javascript">
        function obterTitulo(jogoId) {
            // Obtém o título do elemento com ID 'titulo-' + jogoId
            var titulo = document.getElementById('titulo-' + jogoId).textContent;

            // Cria a requisição AJAX
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "./funcoes/desfavoritar.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            // Define o que fazer após a resposta do servidor
           
            // Envia o título para o servidor
            xhr.send("jogo_titulo=" + encodeURIComponent(titulo));
        }
    </script>
    <script type="text/javascript">function refreshPage() {
        setTimeout(function() {
            location.reload(); // Recarrega a página
        }, 1000); // 1 segundo de espera
    }</script>
    
</head>

<body class="fundo_gif">

    <header class="cabecalho">
        <nav class="cabecalho__menu">
            <ul class="cabecalho__menu">
                <li><a class="menu__links" href="home.html">Home</a></li>
                <li><a class="menu__links" href="lista_jogos.php">Lista de jogos</a></li>
                <li><a class="menu__links__destaque" href="perfil.php">Perfil</a></li>
                <li><a class="menu__links" href="contatos.html">Contatos</a></li>
            </ul>
        </nav>
    </header>
    <div class="caixa_perfil">
        <div class="perfil">
            <h2>Perfil do Usuário</h2>
            <img src="assets/perfil.jpg" alt="Imagem de Perfil" class="imagem-perfil">
            <p class="nick"><?php echo htmlspecialchars($_SESSION['nomeUsuario']); ?></p>
            <form method="POST">
                <button type="submit" name="logoff">Fazer Logoff</button>
            </form>
        </div>
    </div>
        <br><br><br>
        <main>
            <div class="categoria">
            <div class="titulo" onclick="toggleJogos('favoritos')">FAVORITOS</div>
            <ul class="jogos" id="fav">
                <?php foreach ($jogosFav as $jogo): ?>
                    
                    <li class="jogo">
                        <div class="card">
                            <img src="<?php echo htmlspecialchars($jogo['imagem']); ?>" alt="<?php echo htmlspecialchars($jogo['titulo']); ?>">
                            <h3 id="titulo-<?php echo $jogo['id']; ?>"><?php echo htmlspecialchars($jogo['titulo']); ?></h3>
                            <div class="avaliacao">
                                <input type="radio" id="star5-<?php echo $jogo['id']; ?>" name="rating-<?php echo $jogo['id']; ?>" value="5">
                                <label for="star5-<?php echo $jogo['id']; ?>" title="5 estrelas">★</label>
                                <input type="radio" id="star4-<?php echo $jogo['id']; ?>" name="rating-<?php echo $jogo['id']; ?>" value="4">
                                <label for="star4-<?php echo $jogo['id']; ?>" title="4 estrelas">★</label>
                                <input type="radio" id="star3-<?php echo $jogo['id']; ?>" name="rating-<?php echo $jogo['id']; ?>" value="3">
                                <label for="star3-<?php echo $jogo['id']; ?>" title="3 estrelas">★</label>
                                <input type="radio" id="star2-<?php echo $jogo['id']; ?>" name="rating-<?php echo $jogo['id']; ?>" value="2">
                                <label for="star2-<?php echo $jogo['id']; ?>" title="2 estrelas">★</label>
                                <input type="radio" id="star1-<?php echo $jogo['id']; ?>" name="rating-<?php echo $jogo['id']; ?>" value="1">
                                <label for="star1-<?php echo $jogo['id']; ?>" title="1 estrela">★</label>
                            </div>
                            <p class="descricao"><?php echo htmlspecialchars($jogo['descricao']); ?></p>
                            <a href="perfil.php"><button class="btn" onclick="obterTitulo('<?php echo $jogo['id']; ?>')">Desfavoritar</button></a>
                        </div>
                        
                    </li>
                    
                <?php endforeach; ?>
            </ul>
        </div>
    
            <script>
                function toggleJogos(categoriaId) {
                    const jogos = document.getElementById('fav');
                    jogos.style.display = jogos.style.display === "none" ? "flex" : "none";
                }
            </script>
        </main>
</body>

</html>