-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09/11/2024 às 22:13
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `jogos`
--

CREATE TABLE `jogos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `imagem` text NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `jogos`
--

INSERT INTO `jogos` (`id`, `titulo`, `categoria`, `imagem`, `descricao`) VALUES
(1, 'Resident Evil 4 REMAKE', 'Survival horror', 'https://image.api.playstation.com/vulcan/ap/rnd/202210/0712/BiS5QP6h4506JHyJlZlVzK9D.jpg', 'Resident Evil 4 Remake segue Leon enfrentando monstros e resgatando a filha do presidente.'),
(2, 'Moonlighter', 'RPG', 'https://cdn1.epicgames.com/offer/bec822fb982843c3be794d440728336b/Moonlighter_Landscape_Image_2560x1440_2560x1440-f29e5f2829eee173e9d0605d6715d8c0', '\r\nMoonlighter é um RPG onde você explora masmorras, coleta itens e os vende em sua loja.'),
(10, 'cod black ops cold war', 'acao', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.smartworld.it%2Fwp-content%2Fuploads%2F2020%2F09%2FCall-of-Duty-Black-Ops-Cold-War-multiplayer-11.jpg&f=1&nofb=1&ipt=7b2a7b2e0928432407053de21825285e5e138a845618f16161d653582333f002&ipo=images', 'Black Ops Cold War: Guerra Fria, missão de caçar espião, multiplayer e modo zumbi intensos.'),
(13, 'Age of Empires IV', 'estrategia', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fassets-prd.ignimgs.com%2F2021%2F12%2F29%2Fage-of-empires-iv-key-1640816210070.jpg&f=1&nofb=1&ipt=8eea518c5296e695a49e13e91e5adeaa3fa101ad3d632daaa702924281976620&ipo=images', 'Conquiste o mundo com uma civilização medieval, gerenciando recursos e tropas.\r\n'),
(15, 'Forza Horizon 5', 'corrida', 'https://http2.mlstatic.com/D_NQ_NP_859998-MLA51424555459_092022-O.webp', 'Mundo aberto de corridas com carros reais e paisagens deslumbrantes.'),
(16, 'Mortal Kombat 11', 'luta', 'https://upload.wikimedia.org/wikipedia/en/7/7e/Mortal_Kombat_11_cover_art.png', 'Combate brutal com fatalities e personagens icônicos em lutas sangrentas.'),
(17, 'The Witcher 3: Wild Hunt', 'RPG', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSb0luKkWyzTO6oBg_DBlhrjJQlYTD9Z3FoBw&s', 'Geralt de Rivia caça monstros e busca sua filha adotiva em um vasto mundo aberto e sombrio.'),
(18, 'Elden Ring', 'RPG', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTL9x_j3hcvdngtuJ2PGuRdT9zp7m7RH3iQgw&s', 'Aventure-se por um mundo aberto de fantasia sombria, enfrentando inimigos e desafiando deuses.'),
(19, 'Cyberpunk 2077', 'RPG', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgK020HdJlnxesOkODk-1vJc7aVnM0aBd6Eg&s', 'Explore a distópica Night City, completando missões e enfrentando conspirações e escolhas morais.'),
(20, 'Final Fantasy XV', 'RPG', 'https://upload.wikimedia.org/wikipedia/pt/d/d3/Final_Fantasy_XV_capa.png', 'Comando de Noctis e seus amigos em uma jornada épica para salvar o reino em um vasto mundo aberto.'),
(21, 'Persona 5 Royal', 'RPG', 'https://store-images.s-microsoft.com/image/apps.6937.14482474285447263.b2785fbb-9099-42c3-b705-629a79ac7e4a.1b3fdd25-f787-4146-8551-d00ad4d5be21', 'Estudante de dia, ladrão de corações de noite. RPG japonês com narrativa e batalhas táticas.'),
(22, 'Monster Hunter: World', 'RPG', 'https://upload.wikimedia.org/wikipedia/pt/3/34/Monster_Hunter_World_capa.jpg', 'Caçe gigantescos monstros em um mundo aberto, criando equipamentos e completando missões épicas.'),
(23, 'silent hill 2 remake', 'Survival horror', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRViM4IjS_zlkbzbx_xOTkyVicY_W28MnCjqQ&s', 'Terror psicológico com atmosfera sombria e um mistério perturbador em uma cidade amaldiçoada.'),
(24, 'Amnesia: The Dark Descent', 'Survival horror', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZ8cs4m17HhttVaWs4TXJe7w3ISByY0ADKwQ&s', 'Explore um castelo sombrio, resolva mistérios e evite horrores com mecânicas de sobrevivência.'),
(25, 'Outlast', 'Survival horror', 'https://cdn1.epicgames.com/offer/78f42129096d4233bccc527733debfbd/EGS_Outlast_RedBarrels_S2_1200x1600-b02ebdfb4bcd3b1d608ab5b87257b3c4', 'Sobreviva a um asilo abandonado, evitando inimigos aterradores e descobrindo segredos sinistros.'),
(26, 'Alien: Isolation', 'Survival horror', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcrVgVTS3dhkqXNcQjIhHP_giBKF8rSf1N1w&s', 'Sobreviva a uma estação espacial aterrorizada por um alienígena implacável e altamente inteligente.'),
(27, 'DOOM Eternal', 'acao', 'https://assets.xboxservices.com/assets/34/0a/340ada26-49f7-48f1-a572-b27dd6ec766b.jpg?n=DOOM-Eternal_GLP-Page-Hero-0_1083x609_02.jpg', 'Ação intensa com combate brutal contra demônios, movendo-se rapidamente por cenários apocalípticos.'),
(28, 'God of War', 'acao', 'https://image.api.playstation.com/vulcan/img/rnd/202010/2217/LsaRVLF2IU2L1FNtu9d3MKLq.jpg', 'Kratos e seu filho Atreus enfrentam deuses nórdicos em uma jornada épica de paternidade e vingança.'),
(29, 'Spider-Man', 'acao', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSU0CXQW3CNDOftOamFF5UPRE-h4kjpz38e-g&s', 'Jogue como Peter Parker em Nova York, enfrentando vilões e explorando a cidade com agilidade.'),
(30, 'Hades', 'acao', 'https://upload.wikimedia.org/wikipedia/pt/8/80/Hades_capa.jpg', 'Escape do submundo em combate rápido e desafiador, com enredo dinâmico e poderes dos deuses.'),
(31, 'Dragon Ball FighterZ', 'luta', 'https://upload.wikimedia.org/wikipedia/pt/f/f4/Dragon_Ball_FighterZ_capa_digital.jpg', 'Lutas rápidas e coloridas com personagens de Dragon Ball em um estilo visual animado.'),
(32, 'Guilty Gear Strive', 'luta', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrqYGm30gotOeqgBAkHadxhfI_vSFgW2m-Jw&s', 'Combos fluidos e uma trilha sonora marcante em duelos de alta velocidade.'),
(33, 'Street Fighter 6', 'luta', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPbSmOxxTSwU8F8f9FbT9Q3ispbLkQldxY-Q&s', 'Batalhas 2D com gráficos modernos, novos personagens e mecânicas de combate inovadoras.'),
(34, 'Tekken 8', 'luta', 'https://image.api.playstation.com/vulcan/ap/rnd/202308/0312/aff71a0ced271048f5079b1fcf715bcb45110efc13e9704a.png', 'Lutas intensas com novos movimentos e gráficos de última geração, focando na história de Kazuya e Jin.'),
(35, 'Total War: Warhammer III', 'estrategia', 'https://cdn1.epicgames.com/dda64c2956b54f1ba3cd97f6aaee775f/offer/EGS_TotalWarWARHAMMERIII_CreativeAssembly_S5-1920x1080-b286583ad1b5dfd733097a2af8f883b7.jpg', 'Mistura de batalhas em tempo real e gerenciamento de impérios no universo de Warhammer.\r\n\r\n'),
(36, 'StarCraft II', 'estrategia', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoTJc4qkADA7wxkWTXDXvcP_gb9GY969IL8Q&s', 'Lute pela supremacia galáctica em intensas batalhas de estratégia em tempo real.'),
(37, 'XCOM 2', 'estrategia', 'https://cdn1.epicgames.com/offer/7ec453d446194b8f8afe82aaa9561211/XCOM2_Set_Up_Assets_1200x1600_1200x1600-4b0c6e42af847235877992095e154563_1200x1600-4b0c6e42af847235877992095e154563', 'Lidere um esquadrão de resistência em batalhas táticas contra uma invasão alienígena.'),
(38, 'Company of Heroes 3', 'estrategia', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLwWsIjovFBzu6jS7jBMdiJPw2bGWlF_1llQ&s', 'Jogo de estratégia militar com foco em táticas realistas na Segunda Guerra Mundial.'),
(39, 'Iron Harvest', 'estrategia', 'https://cdn1.epicgames.com/f312bc218b1d46f7921619cc9f3bf3c7/offer/IH_tall-510x680-103c530e3b4d46872f751573330b8ba9.png', 'Combinação de estratégia em tempo real e mechas gigantes, ambientado em uma realidade alternativa pós-Primeira Guerra Mundial.'),
(40, 'Gran Turismo 7', 'corrida', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQv_q2zXerc_ClXNmThOS6rImCExJjr5LhuSQ&s', 'Simulação realista de corridas, com um enorme catálogo de carros e pistas detalhadas.'),
(41, 'Need for Speed: Unbound', 'corrida', 'https://store-images.s-microsoft.com/image/apps.31585.14329152328871129.15deab2a-237c-449c-880e-7926330dab80.cbfd82b1-535b-4234-989d-2d04127f0529', 'Corridas de rua rápidas e intensas com um estilo visual único e personalização de carros.'),
(42, 'F1 23', 'corrida', 'https://store-images.s-microsoft.com/image/apps.59851.13807378106780361.8a115783-cbb5-4535-8490-7cd4bfae3e22.3b8029b5-5051-41b5-929f-0aa95482cb28', 'Simulação oficial da Fórmula 1, com equipes e pilotos reais, além de modos de carreira.'),
(43, 'Mario Kart 8 Deluxe', 'corrida', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvWnMXi0ib1pUP29KDTFRk5oY2hHMvBsguQA&s', 'Corridas divertidas e malucas com itens especiais, personagens da Nintendo e pistas criativas.'),
(44, 'WRC Generations', 'corrida', 'https://pizzafria.ig.com.br/wp-content/uploads/2022/10/wrc-generations.jpg', 'Simulação realista do Campeonato Mundial de Rally, com diferentes superfícies e condições.'),
(45, 'Dirt 5', 'corrida', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPUjtqg8y-Y8YsvLnqGo57UpoERVtoPeSowQ&s', 'Corridas off-road emocionantes, com terrenos desafiadores e modo multiplayer robusto.'),
(46, 'Dead Cells', 'indie', 'https://cdn2.unrealengine.com/egs-deadcells-motiontwin-s1-2560x1440-312502186.jpg', 'Rogue-like de ação com combate rápido e exploração em um mundo gerado proceduralmente.'),
(47, 'Slay the Spire', 'indie', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRjOwhVhO_oiC9S19fVfP-sckcmKVox_WKjA&s', 'Jogo de cartas com mecânicas de roguelike, onde você deve montar seu deck e vencer inimigos.'),
(48, 'Hollow Knight', 'indie', 'https://upload.wikimedia.org/wikipedia/en/0/04/Hollow_Knight_first_cover_art.webp', 'Exploração e combate desafiador em um mundo sombrio, com mecânica \"Metroidvania\".'),
(49, 'The Witness', 'indie', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYccKdjVyfurBaMmR6wNjwqVtB0FMtYoczWQ&s', 'Puzzle em primeira pessoa, onde você resolve enigmas para desbloquear a história.'),
(50, 'Rayman Legends', 'plataforma', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuxAv6F_RILZ6rRvyLqfzy-CtifUCwIRmDUw&s', 'Jogo de plataforma com gráficos incríveis, fases criativas e um gameplay divertido em co-op.'),
(51, 'Shovel Knight', 'plataforma', 'https://upload.wikimedia.org/wikipedia/en/c/c8/Shovel_knight_cover.jpg', 'Uma homenagem aos clássicos 8-bit, com jogabilidade de plataforma e combates desafiadores.'),
(52, 'Super Mario Bros. U Deluxe', 'plataforma', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBBYpcQPrYwIpikUpCrWN_Aa97T9mpsWRU0Q&s', 'Mario e seus amigos enfrentam desafios em um mundo colorido, com novos poderes e fases criativas.'),
(53, 'Crash Bandicoot 4', 'plataforma', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlpBcI5EMej0SCbjKu-wbRpXmy9dmvRwmsfA&s', 'Aventura com Crash e Coco em um mundo cheio de ação, saltos e mecânicas inovadoras.'),
(54, 'FIFA 23', 'esportes', 'https://img.odcdn.com.br/wp-content/uploads/2022/07/fifa-23-2.jpg', 'Simulação realista de futebol com times e ligas oficiais, além de modos como FUT.'),
(55, 'NBA 2K23', 'esportes', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTI0RORtmKmAVdr0ibvD8YmROW05T-Nwp_SOQ&s', 'Simulação de basquete com jogabilidade realista e modos de carreira imersivos.'),
(56, 'Tony Hawk\'s Pro Skater 1+2', 'esportes', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6053Wp8o-O5FKbfMCju896PMsgnMdStl2Bw&s', 'Remasterização dos clássicos jogos de skate, com movimentos fluidos e nostalgia.'),
(57, 'Rocket League', 'esportes', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJANR1OZtB3WTef1I80MZGu8t93BEfj5BfXg&s', 'Futebol com carros! Jogo de ação arcade com partidas rápidas e muita diversão.'),
(58, 'Gris', 'indie', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwQe-UiBlJVbhi_uD7CzFSfT8OKqUi96-gzQ&s', 'Jogo de aventura emocional com belos gráficos e uma história sobre superação e perda.'),
(60, 'Super Meat Boy', 'plataforma', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2qBkL0uhdEEYV6_Kqji1orRJudwKtkGJQTA&s', 'Plataforma desafiadora com níveis rápidos, onde você controla um pedaço de carne em busca de resgatar sua amada.'),
(61, 'WWE 2K23', 'esportes', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyKKx4ysKdZYI0LkVJGiNTmw2ulAyxko7S0A&s', 'Lutas e shows de wrestling com estrelas da WWE, com modos de combate e personalização.');

-- --------------------------------------------------------

--
-- Estrutura para tabela `rel_usuario_jogo`
--

CREATE TABLE `rel_usuario_jogo` (
  `usuario_id` int(11) NOT NULL,
  `jogo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `rel_usuario_jogo`
--

INSERT INTO `rel_usuario_jogo` (`usuario_id`, `jogo_id`) VALUES
(9, 23),
(9, 24),
(9, 18),
(10, 1),
(10, 28),
(9, 2),
(9, 2),
(9, 2),
(9, 2),
(9, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `nick` varchar(15) NOT NULL,
  `senha` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `nick`, `senha`) VALUES
(9, 'Rafael', 'Naiin', '$2y$10$E1niOwEU8KZhEOEnWoWl5.ggaEtoCu0.XaSb8cpwGikazaPDx2tKG'),
(10, 'Talison', 'OficialAzzini', '$2y$10$816pp.G.S/jjt37WB2IqoeG0BNFmK19PK78N21Hj3Cv6JWtBAa2ce'),
(11, 'pedro', 'prdroka', '$2y$10$q1JVqwsao/FHKYa./Xm73uXkBjzY.zo3Q53wjVCMsQrlDPFeF9Kou'),
(17, ' ', 'casa', '$2y$10$jW57nNnUMx/E/fNnZxbhTejAU0tNMis.BNAXN4iMN0UAu8yaSFPYK'),
(18, ' ', 'casas', '$2y$10$77eYc11S9.GiU9FdJr4AQexBOEibBsbteBdhktT/IrlOVLFfpKgce'),
(19, 'Talison Rodrigues Azzini Lopes', 'teste', '$2y$10$L5A1rwhkwojj2UfpOGJhAOgt54fOh0IfrCzDfEByLsoiaAzr3Af0i');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `jogos`
--
ALTER TABLE `jogos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `titulo` (`titulo`);

--
-- Índices de tabela `rel_usuario_jogo`
--
ALTER TABLE `rel_usuario_jogo`
  ADD KEY `fk_usuarios_id` (`usuario_id`),
  ADD KEY `fk_jogos_id` (`jogo_id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nick` (`nick`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `jogos`
--
ALTER TABLE `jogos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `rel_usuario_jogo`
--
ALTER TABLE `rel_usuario_jogo`
  ADD CONSTRAINT `fk_jogos_id` FOREIGN KEY (`jogo_id`) REFERENCES `jogos` (`id`),
  ADD CONSTRAINT `fk_usuarios_id` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
