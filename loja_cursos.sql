-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 16, 2024 at 03:46 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loja_cursos`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `user_id` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '1', 1732067944),
('admin', '2', 1733158081),
('admin', '7', 1733158662),
('cliente', '4', 1732067944),
('cliente', '5', 1732067944),
('cliente', '6', 1732067944),
('funcionario', '3', 1732067944);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `type` smallint NOT NULL,
  `description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `rule_name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int DEFAULT NULL,
  `updated_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('adicionarCarrinho_FO', 2, 'Adicionar Carrinho', NULL, NULL, 1732067944, 1732067944),
('adicionarFavorito_FO', 2, 'Adicionar Favoritos', NULL, NULL, 1732067944, 1732067944),
('admin', 1, NULL, NULL, NULL, 1732067944, 1732067944),
('apagarAvaliacoes', 2, 'Apagar Avaliacoes', NULL, NULL, 1732067944, 1732067944),
('apagarCarrinho_FO', 2, 'Apagar Carrinho', NULL, NULL, 1732067944, 1732067944),
('apagarCategorias', 2, 'Apagar Categorias', NULL, NULL, 1732067944, 1732067944),
('apagarCursos', 2, 'Apagar Cursos', NULL, NULL, 1732067944, 1732067944),
('apagarFaturas', 2, 'Apagar Faturas', NULL, NULL, 1732067944, 1732067944),
('apagarProdutos', 2, 'Apagar Produtos', NULL, NULL, 1732067944, 1732067944),
('apagarPromocoes', 2, 'Apagar Promocoes', NULL, NULL, 1732067944, 1732067944),
('apagarUtilizadores', 2, 'Apagar Utilizadores', NULL, NULL, 1732067944, 1732067944),
('atualizarAvaliacoes', 2, 'Atualizar Avaliacoes', NULL, NULL, 1732067944, 1732067944),
('atualizarCarrinho_FO', 2, 'Atualizar Carrinho', NULL, NULL, 1732067944, 1732067944),
('atualizarCategorias', 2, 'Atualizar Categorias', NULL, NULL, 1732067944, 1732067944),
('atualizarCursos', 2, 'Atualizar Cursos', NULL, NULL, 1732067944, 1732067944),
('atualizarFaturas', 2, 'Atualizar Faturas', NULL, NULL, 1732067944, 1732067944),
('atualizarProdutos', 2, 'Atualizar Produtos', NULL, NULL, 1732067944, 1732067944),
('atualizarPromocoes', 2, 'Atualizar Promocoes', NULL, NULL, 1732067944, 1732067944),
('atualizarUtilizador_FO', 2, 'Atualizar Perfil', NULL, NULL, 1732067944, 1732067944),
('atualizarUtilizadores', 2, 'Atualizar Utilizadores', NULL, NULL, 1732067944, 1732067944),
('checkoutCarrinho_FO', 2, 'Checkout Carrinho', NULL, NULL, 1732067944, 1732067944),
('cliente', 1, NULL, NULL, NULL, 1732067944, 1732067944),
('criarAvaliacoes', 2, 'Criar Avaliacoes', NULL, NULL, 1732067944, 1732067944),
('criarCategorias', 2, 'Criar Categorias', NULL, NULL, 1732067944, 1732067944),
('criarCursos', 2, 'Criar Cursos', NULL, NULL, 1732067944, 1732067944),
('criarFaturas', 2, 'Criar Faturas', NULL, NULL, 1732067944, 1732067944),
('criarProdutos', 2, 'Criar Produtos', NULL, NULL, 1732067944, 1732067944),
('criarPromocoes', 2, 'Criar Promocoes', NULL, NULL, 1732067944, 1732067944),
('criarUtilizadores', 2, 'Criar Utilizadores', NULL, NULL, 1732067944, 1732067944),
('enviarAvaliacao_FO', 2, 'Enviar Avaliação', NULL, NULL, 1732067944, 1732067944),
('funcionario', 1, NULL, NULL, NULL, 1732067944, 1732067944),
('gerirAvaliacoes', 2, 'Gerir Avaliacoes', NULL, NULL, 1732067944, 1732067944),
('gerirCarrinho_FO', 2, 'Gerir Carrinho', NULL, NULL, 1732067944, 1732067944),
('gerirCategorias', 2, 'Gerir Categorias', NULL, NULL, 1732067944, 1732067944),
('gerirCursos', 2, 'Gerir Cursos', NULL, NULL, 1732067944, 1732067944),
('gerirFaturas', 2, 'Gerir Faturas', NULL, NULL, 1732067944, 1732067944),
('gerirFaturas_FO', 2, 'Gerir Faturas', NULL, NULL, 1732067944, 1732067944),
('gerirProdutos', 2, 'Gerir Produtos', NULL, NULL, 1732067944, 1732067944),
('gerirPromocoes', 2, 'Gerir Promocoes', NULL, NULL, 1732067944, 1732067944),
('gerirUtilizadores', 2, 'Gerir Utilizadores', NULL, NULL, 1732067944, 1732067944),
('listaProdutos_FO', 2, 'Lista Produtos', NULL, NULL, 1732067944, 1732067944),
('mudarRoleUtilizador', 2, 'Mudar Role Utilizador', NULL, NULL, 1732067944, 1732067944),
('removerFavorito_FO', 2, 'Remover Favoritos', NULL, NULL, 1732067944, 1732067944),
('verAvaliacoes', 2, 'Ver Avaliacoes', NULL, NULL, 1732067944, 1732067944),
('verCategorias', 2, 'Ver Categorias', NULL, NULL, 1732067944, 1732067944),
('verCursos', 2, 'Ver Cursos', NULL, NULL, 1732067944, 1732067944),
('verFaturas', 2, 'Ver Faturas', NULL, NULL, 1732067944, 1732067944),
('verFaturas_FO', 2, 'Ver Faturas', NULL, NULL, 1732067944, 1732067944),
('verProdutos', 2, 'Ver Produtos', NULL, NULL, 1732067944, 1732067944),
('verProdutos_FO', 2, 'Ver Produtos', NULL, NULL, 1732067944, 1732067944),
('verPromocoes', 2, 'Ver Promocoes', NULL, NULL, 1732067944, 1732067944),
('verUtilizadores', 2, 'Ver Utilizadores', NULL, NULL, 1732067944, 1732067944);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `child` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('cliente', 'adicionarCarrinho_FO'),
('cliente', 'adicionarFavorito_FO'),
('funcionario', 'apagarAvaliacoes'),
('cliente', 'apagarCarrinho_FO'),
('funcionario', 'apagarCategorias'),
('funcionario', 'apagarCursos'),
('admin', 'apagarFaturas'),
('funcionario', 'apagarProdutos'),
('funcionario', 'apagarPromocoes'),
('admin', 'apagarUtilizadores'),
('funcionario', 'atualizarAvaliacoes'),
('cliente', 'atualizarCarrinho_FO'),
('funcionario', 'atualizarCategorias'),
('funcionario', 'atualizarCursos'),
('admin', 'atualizarFaturas'),
('funcionario', 'atualizarProdutos'),
('funcionario', 'atualizarPromocoes'),
('cliente', 'atualizarUtilizador_FO'),
('funcionario', 'atualizarUtilizadores'),
('cliente', 'checkoutCarrinho_FO'),
('funcionario', 'cliente'),
('funcionario', 'criarAvaliacoes'),
('funcionario', 'criarCategorias'),
('funcionario', 'criarCursos'),
('admin', 'criarFaturas'),
('funcionario', 'criarProdutos'),
('funcionario', 'criarPromocoes'),
('admin', 'criarUtilizadores'),
('cliente', 'enviarAvaliacao_FO'),
('admin', 'funcionario'),
('funcionario', 'gerirAvaliacoes'),
('cliente', 'gerirCarrinho_FO'),
('funcionario', 'gerirCategorias'),
('funcionario', 'gerirCursos'),
('funcionario', 'gerirFaturas'),
('cliente', 'gerirFaturas_FO'),
('funcionario', 'gerirProdutos'),
('funcionario', 'gerirPromocoes'),
('funcionario', 'gerirUtilizadores'),
('cliente', 'listaProdutos_FO'),
('admin', 'mudarRoleUtilizador'),
('cliente', 'removerFavorito_FO'),
('funcionario', 'verAvaliacoes'),
('funcionario', 'verCategorias'),
('funcionario', 'verCursos'),
('funcionario', 'verFaturas'),
('cliente', 'verFaturas_FO'),
('funcionario', 'verProdutos'),
('cliente', 'verProdutos_FO'),
('funcionario', 'verPromocoes'),
('funcionario', 'verUtilizadores');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int DEFAULT NULL,
  `updated_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `avaliacoes`
--

CREATE TABLE `avaliacoes` (
  `id` int NOT NULL,
  `nota` int DEFAULT NULL,
  `comentario` longtext,
  `userdata_id` int NOT NULL,
  `fatura_linhas_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carrinho`
--

CREATE TABLE `carrinho` (
  `id` int NOT NULL,
  `id_userdata` int NOT NULL,
  `data` date DEFAULT NULL,
  `total` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carrinho_linhas`
--

CREATE TABLE `carrinho_linhas` (
  `id` int NOT NULL,
  `quantidade` int DEFAULT NULL,
  `preco` float DEFAULT NULL,
  `produtos_id` int NOT NULL,
  `carrinho_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id` int NOT NULL,
  `nome` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(1, 'php'),
(2, 'php');

-- --------------------------------------------------------

--
-- Table structure for table `cursos`
--

CREATE TABLE `cursos` (
  `id` int NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `duracao` int NOT NULL,
  `conteúdo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faturas`
--

CREATE TABLE `faturas` (
  `id` int NOT NULL,
  `data` date DEFAULT NULL,
  `userdata_id` int NOT NULL,
  `total` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fatura_linhas`
--

CREATE TABLE `fatura_linhas` (
  `id` int NOT NULL,
  `quantidade` int DEFAULT NULL,
  `preco` float DEFAULT NULL,
  `produtos_id` int NOT NULL,
  `faturas_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favoritos`
--

CREATE TABLE `favoritos` (
  `id` int NOT NULL,
  `id_produto` int DEFAULT NULL,
  `userdata_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
  `id` int NOT NULL,
  `id_categoria` int DEFAULT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `preco` float DEFAULT NULL,
  `imagem` longtext,
  `favoritos_id` int NOT NULL,
  `promocoes_id` int NOT NULL,
  `cursos_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promocoes`
--

CREATE TABLE `promocoes` (
  `id` int NOT NULL,
  `desconto` int DEFAULT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_termino` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `auth_key` varchar(32) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` smallint NOT NULL DEFAULT '10',
  `created_at` int NOT NULL,
  `updated_at` int NOT NULL,
  `verification_token` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'admin', 'u4mVpCuu4NbB-A0LfcmeWSfhyPgGEL-2', '$2y$13$B9sl6JtHcHJfQHYWa75GGOcgTS.djU3okqoF0mruF/jWFAm8d0IUa', NULL, 'admin@gmail.com', 10, 1704725137, 1704725137, NULL),
(2, 'Rodrigo', 'FfnNM3Xmth_2fD5XiSLGrmHDKlAOT-GA', '$2y$13$KIcnr55NIwQlP0XwCJFs1e1gshNYwLmCkjGekNLs2xiX3xD2FwXm6', NULL, '2211919@my.ipleiria.pt', 0, 1697379940, 1733158581, NULL),
(3, 'funcionario', '1KGrm3tDJpVRZ5JyavijfrFhxHUrs3ip', '$2y$13$L8etLfluUWM6hgK3YXIyh.sZuKWta0jXMBTE02C5YyOCzWUz.7/52', NULL, 'funcionario@gmail.com', 10, 1704725161, 1704725161, NULL),
(4, 'cliente1', 'KdqMqFr1nQ61tdUEuc3YX9E71hHvkNLP', '$2y$13$iuUQSVcoe8EGYGOk7QbKWOY8OxgFdqFC7RRicWhODbfZMFeF8j.Wa', NULL, 'cliente1@gmail.com', 10, 1704725457, 1704725457, NULL),
(5, 'cliente2', 'wCt-vuMiCmgYeJrecDJAQomHKy2npL7w', '$2y$13$RaG8UXgJlE8Awjmh1UBC3eut5amyhD.xANFwIQ4eEI5e7eJhV1vDW', NULL, 'cliente2@gmail.com', 10, 1704725488, 1704725488, NULL),
(6, 'cliente3', 'aUX08qwBcHtKVbDvyBVODIGZHCcUX0mq', '$2y$13$DmrdbBeNEXO.ZzyDXMbO9uQKdK.k/IyxIxXP6nOjlGL893hbpYlV.', NULL, 'cliente3@gmail.com', 10, 1704725506, 1704725506, NULL),
(7, 'admin2', 'qrjM_UXkHkey3RRpqQNjtobqdDoB-BNc', '$2y$13$sKg7ElfsA7qePGdUUNZ/xOeAimtJh6bLYh.Pz9agQ4uZJoXCLL1iy', NULL, 'rodrigo@gmail.com', 10, 1733158662, 1733158662, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int NOT NULL,
  `id_user` int DEFAULT NULL,
  `primeiroNome` varchar(45) DEFAULT NULL,
  `ultimoNome` varchar(45) DEFAULT NULL,
  `telemovel` int DEFAULT NULL,
  `morada` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `id_user`, `primeiroNome`, `ultimoNome`, `telemovel`, `morada`) VALUES
(16, 7, 'Rodrigo', 'Luís', 911115245, 'Rua das flores');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `idx-auth_assignment-user_id` (`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_avaliacoes_userdata1_idx` (`userdata_id`),
  ADD KEY `fk_avaliacoes_fatura_linhas1_idx` (`fatura_linhas_id`);

--
-- Indexes for table `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_userdata` (`id_userdata`);

--
-- Indexes for table `carrinho_linhas`
--
ALTER TABLE `carrinho_linhas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_carrinho_linhas_produtos1_idx` (`produtos_id`),
  ADD KEY `fk_carrinho_linhas_carrinho1_idx` (`carrinho_id`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faturas`
--
ALTER TABLE `faturas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_faturas_userdata1_idx` (`userdata_id`);

--
-- Indexes for table `fatura_linhas`
--
ALTER TABLE `fatura_linhas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_fatura_linhas_produtos1_idx` (`produtos_id`),
  ADD KEY `fk_fatura_linhas_faturas1_idx` (`faturas_id`);

--
-- Indexes for table `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_produto_favorito_idx` (`id_produto`),
  ADD KEY `fk_favoritos_userdata1_idx` (`userdata_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_categoria_produto_idx` (`id_categoria`),
  ADD KEY `fk_produtos_favoritos1_idx` (`favoritos_id`),
  ADD KEY `fk_produtos_promocoes1_idx` (`promocoes_id`),
  ADD KEY `fk_produtos_cursos1_idx` (`cursos_id`);

--
-- Indexes for table `promocoes`
--
ALTER TABLE `promocoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_user_userdata_idx` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `promocoes`
--
ALTER TABLE `promocoes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD CONSTRAINT `fk_avaliacoes_fatura_linhas1` FOREIGN KEY (`fatura_linhas_id`) REFERENCES `fatura_linhas` (`id`),
  ADD CONSTRAINT `fk_avaliacoes_userdata1` FOREIGN KEY (`userdata_id`) REFERENCES `userdata` (`id`);

--
-- Constraints for table `carrinho_linhas`
--
ALTER TABLE `carrinho_linhas`
  ADD CONSTRAINT `fk_carrinho_linhas_carrinho1` FOREIGN KEY (`carrinho_id`) REFERENCES `carrinho` (`id`),
  ADD CONSTRAINT `fk_carrinho_linhas_produtos1` FOREIGN KEY (`produtos_id`) REFERENCES `produtos` (`id`);

--
-- Constraints for table `faturas`
--
ALTER TABLE `faturas`
  ADD CONSTRAINT `fk_faturas_userdata1` FOREIGN KEY (`userdata_id`) REFERENCES `userdata` (`id`);

--
-- Constraints for table `fatura_linhas`
--
ALTER TABLE `fatura_linhas`
  ADD CONSTRAINT `fk_fatura_linhas_faturas1` FOREIGN KEY (`faturas_id`) REFERENCES `faturas` (`id`),
  ADD CONSTRAINT `fk_fatura_linhas_produtos1` FOREIGN KEY (`produtos_id`) REFERENCES `produtos` (`id`);

--
-- Constraints for table `favoritos`
--
ALTER TABLE `favoritos`
  ADD CONSTRAINT `fk_favoritos_userdata1` FOREIGN KEY (`userdata_id`) REFERENCES `userdata` (`id`);

--
-- Constraints for table `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `FK_categoria_produto` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `fk_produtos_cursos1` FOREIGN KEY (`cursos_id`) REFERENCES `cursos` (`id`),
  ADD CONSTRAINT `fk_produtos_favoritos1` FOREIGN KEY (`favoritos_id`) REFERENCES `favoritos` (`id`),
  ADD CONSTRAINT `fk_produtos_promocoes1` FOREIGN KEY (`promocoes_id`) REFERENCES `promocoes` (`id`);

--
-- Constraints for table `userdata`
--
ALTER TABLE `userdata`
  ADD CONSTRAINT `FK_user_userdata` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
