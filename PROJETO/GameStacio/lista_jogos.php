<?php
    include './funcoes/db.php';
    include './funcoes/jogos.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto integrador - Home</title>
    <link rel="stylesheet" href="./styles/lista_jogos.css">
    <script type="text/javascript">
        function obterTitulo(jogoId) {
            // Obtém o título do elemento com ID 'titulo-' + jogoId
            var titulo = document.getElementById('titulo-' + jogoId).textContent;

            // Cria a requisição AJAX
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "./funcoes/favoritar.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            // Define o que fazer após a resposta do servidor
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    alert(xhr.responseText);
                }
            };

            // Envia o título para o servidor
            xhr.send("jogo_titulo=" + encodeURIComponent(titulo));
        }
    </script>
    <style>
        .fundo_gif {
            background-image: url('./assets/fundo.gif');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .jogos {
            display: none; /* Inicialmente oculto */
        }
    </style>
</head>

<body class="fundo_gif">
    <header class="cabecalho">
        <nav class="cabecalho__menu">
            <ul class="cabecalho__menu">
                <li><a class="menu__links" href="home.html">Home</a></li>
                <li><a class="menu__links__destaque" href="lista_jogos.php">Lista de jogos</a></li>
                <li><a class="menu__links" href="perfil.php">Perfil</a></li>
                <li><a class="menu__links" href="contatos.html">Contatos</a></li>
            </ul>
        </nav>
    </header>

    <main class="main_jogos">
        <h2 class="main_titulo">Explore nossa coleção de jogos organizados por categorias.</h2>

        <div class="categoria">
            <div class="titulo" onclick="toggleJogos('RPG')">RPG</div>
            <ul class="jogos" id="RPG">
                <?php foreach ($jogos as $jogo): ?>
                    <?php if ($jogo['categoria'] === 'RPG'): ?>
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
                            <button class="btn" onclick="obterTitulo('<?php echo $jogo['id']; ?>')">Favoritar</button>
                        </div>
                    </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="categoria">     
            <div class="titulo" onclick="toggleJogos('Survival horror')">Survival horror</div>
            <ul class="jogos" id="Survival horror">
                <?php foreach ($jogos as $jogo): ?>
                    <?php if ($jogo['categoria'] === 'Survival horror'): ?>
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
                            <button onclick="obterTitulo('<?php echo $jogo['id']; ?>')">Favoritar</button>
                        </div>
                    </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
        
        <div class="categoria">     
            <div class="titulo" onclick="toggleJogos('acao')">Açao</div>
            <ul class="jogos" id="acao">
                <?php foreach ($jogos as $jogo): ?>
                    <?php if ($jogo['categoria'] === 'acao'): ?>
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
                            <button onclick="obterTitulo('<?php echo $jogo['id']; ?>')">Favoritar</button>
                        </div>
                    </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
        
        <div class="categoria">
            <div class="titulo" onclick="toggleJogos('luta')">luta</div>
            <ul class="jogos" id="luta">
                <?php foreach ($jogos as $jogo): ?>
                    <?php if ($jogo['categoria'] === 'luta'): ?>
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
                            <button onclick="obterTitulo('<?php echo $jogo['id']; ?>')">Favoritar</button>
                        </div>
                    </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
        
        <div class="categoria">
            <div class="titulo" onclick="toggleJogos('estrategia')">Estratégia</div>
            <ul class="jogos" id="estrategia">
                <?php foreach ($jogos as $jogo): ?>
                    <?php if ($jogo['categoria'] === 'estrategia'): ?>
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
                            <button onclick="obterTitulo('<?php echo $jogo['id']; ?>')">Favoritar</button>
                        </div>
                    </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
        
        <div class="categoria">
            <div class="titulo" onclick="toggleJogos('corrida')">corrida</div>
            <ul class="jogos" id="corrida">
                <?php foreach ($jogos as $jogo): ?>
                    <?php if ($jogo['categoria'] === 'corrida'): ?>
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
                            <button onclick="obterTitulo('<?php echo $jogo['id']; ?>')">Favoritar</button>
                        </div>
                    </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
        
        <div class="categoria">
            <div class="titulo" onclick="toggleJogos('indie')">Indie</div>
            <ul class="jogos" id="indie">
                <?php foreach ($jogos as $jogo): ?>
                    <?php if ($jogo['categoria'] === 'indie'): ?>
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
                            <button onclick="obterTitulo('<?php echo $jogo['id']; ?>')">Favoritar</button>
                        </div>
                    </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
        
        <div class="categoria">
            <div class="titulo" onclick="toggleJogos('plataforma')">Plataforma</div>
            <ul class="jogos" id="plataforma">
                <?php foreach ($jogos as $jogo): ?>
                    <?php if ($jogo['categoria'] === 'plataforma'): ?>
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
                            <button onclick="obterTitulo('<?php echo $jogo['id']; ?>')">Favoritar</button>
                        </div>
                    </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
        
        <div class="categoria">
            <div class="titulo" onclick="toggleJogos('esportes')">Esportes</div>
            <ul class="jogos" id="esportes">
                <?php foreach ($jogos as $jogo): ?>
                    <?php if ($jogo['categoria'] === 'esportes'): ?>
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
                            <button onclick="obterTitulo('<?php echo $jogo['id']; ?>')">Favoritar</button>
                        </div>
                    </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>

        <script>
                function toggleJogos(categoriaId) {
                    // Seleciona o elemento da categoria de jogos pelo ID
                    const jogos = document.getElementById(categoriaId);

                    // Verifica o estado atual de exibição do elemento e altera para mostrar ou esconder
                    if (jogos.style.display === "none" || jogos.style.display === "") {
                        jogos.style.display = "flex"; // Altera para 'flex' para manter os itens em linha
                    } else {
                        jogos.style.display = "none"; // Esconde o elemento
                    }
                }
            </script>
            
    </main>
</body>
</html>