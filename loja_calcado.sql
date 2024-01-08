-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 08, 2024 at 02:54 PM
-- Server version: 11.1.2-MariaDB-log
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loja_calcado`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
                                   `item_name` varchar(64) NOT NULL,
                                   `user_id` varchar(64) NOT NULL,
                                   `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
                                                                         ('admin', '1', 1704724092),
                                                                         ('admin', '11', 1704725137),
                                                                         ('admin', '2', 1704724233),
                                                                         ('cliente', '15', 1704725457),
                                                                         ('cliente', '16', 1704725556),
                                                                         ('cliente', '17', 1704725564),
                                                                         ('funcionario', '12', 1704725161);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
                             `name` varchar(64) NOT NULL,
                             `type` smallint(6) NOT NULL,
                             `description` text DEFAULT NULL,
                             `rule_name` varchar(64) DEFAULT NULL,
                             `data` blob DEFAULT NULL,
                             `created_at` int(11) DEFAULT NULL,
                             `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
                                                                                                             ('adicionarCarrinho_FO', 2, 'Adicionar Carrinho', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('adicionarFavorito_FO', 2, 'Adicionar Favoritos', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('admin', 1, NULL, NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('apagarAvaliacao_FO', 2, 'Apagar Avaliacao', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('apagarCarrinho_FO', 2, 'Apagar Carrinho', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('apagarCategorias', 2, 'Apagar Categorias', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('apagarFaturas', 2, 'Apagar Faturas', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('apagarProdutos', 2, 'Apagar Produtos', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('apagarPromocoes', 2, 'Apagar Promocoes', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('apagarUtilizadores', 2, 'Apagar Utilizadores', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('atualizarCarrinho_FO', 2, 'Atualizar Carrinho', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('atualizarCategorias', 2, 'Atualizar Categorias', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('atualizarFaturas', 2, 'Atualizar Faturas', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('atualizarProdutos', 2, 'Atualizar Produtos', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('atualizarPromocoes', 2, 'Atualizar Promocoes', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('atualizarUtilizador_FO', 2, 'Atualizar Perfil', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('atualizarUtilizadores', 2, 'Atualizar Utilizadores', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('cliente', 1, NULL, NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('criarCategorias', 2, 'Criar Categorias', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('criarFaturas', 2, 'Criar Faturas', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('criarProdutos', 2, 'Criar Produtos', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('criarPromocoes', 2, 'Criar Promocoes', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('criarUtilizadores', 2, 'Criar Utilizadores', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('editarAvaliacao_FO', 2, 'Editar Avaliacao', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('funcionario', 1, NULL, NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('gerirCarrinho_FO', 2, 'Gerir Carrinho', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('gerirCategorias', 2, 'Gerir Categorias', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('gerirFaturas', 2, 'Gerir Faturas', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('gerirFaturas_FO', 2, 'Gerir Faturas', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('gerirProdutos', 2, 'Gerir Produtos', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('gerirPromocoes', 2, 'Gerir Promocoes', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('gerirUtilizadores', 2, 'Gerir Utilizadores', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('listaAvaliacao_FO', 2, 'Listar Avaliacoes', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('mudarRoleUtilizador', 2, 'Mudar Role Utilizador', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('removerFavorito_FO', 2, 'Remover Favoritos', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('verCategorias', 2, 'Ver Categorias', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('verFaturas', 2, 'Ver Faturas', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('verFaturas_FO', 2, 'Ver Faturas', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('verProdutos', 2, 'Ver Produtos', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('verPromocoes', 2, 'Ver Promocoes', NULL, NULL, 1704724092, 1704724092),
                                                                                                             ('verUtilizadores', 2, 'Ver Utilizadores', NULL, NULL, 1704724092, 1704724092);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
                                   `parent` varchar(64) NOT NULL,
                                   `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
                                                      ('cliente', 'adicionarCarrinho_FO'),
                                                      ('cliente', 'adicionarFavorito_FO'),
                                                      ('cliente', 'apagarAvaliacao_FO'),
                                                      ('cliente', 'apagarCarrinho_FO'),
                                                      ('funcionario', 'apagarCategorias'),
                                                      ('admin', 'apagarFaturas'),
                                                      ('funcionario', 'apagarProdutos'),
                                                      ('funcionario', 'apagarPromocoes'),
                                                      ('admin', 'apagarUtilizadores'),
                                                      ('cliente', 'atualizarCarrinho_FO'),
                                                      ('funcionario', 'atualizarCategorias'),
                                                      ('admin', 'atualizarFaturas'),
                                                      ('funcionario', 'atualizarProdutos'),
                                                      ('funcionario', 'atualizarPromocoes'),
                                                      ('cliente', 'atualizarUtilizador_FO'),
                                                      ('funcionario', 'atualizarUtilizadores'),
                                                      ('funcionario', 'cliente'),
                                                      ('funcionario', 'criarCategorias'),
                                                      ('admin', 'criarFaturas'),
                                                      ('funcionario', 'criarProdutos'),
                                                      ('funcionario', 'criarPromocoes'),
                                                      ('admin', 'criarUtilizadores'),
                                                      ('cliente', 'editarAvaliacao_FO'),
                                                      ('admin', 'funcionario'),
                                                      ('cliente', 'gerirCarrinho_FO'),
                                                      ('funcionario', 'gerirCategorias'),
                                                      ('funcionario', 'gerirFaturas'),
                                                      ('cliente', 'gerirFaturas_FO'),
                                                      ('funcionario', 'gerirProdutos'),
                                                      ('funcionario', 'gerirPromocoes'),
                                                      ('funcionario', 'gerirUtilizadores'),
                                                      ('cliente', 'listaAvaliacao_FO'),
                                                      ('admin', 'mudarRoleUtilizador'),
                                                      ('cliente', 'removerFavorito_FO'),
                                                      ('funcionario', 'verCategorias'),
                                                      ('funcionario', 'verFaturas'),
                                                      ('cliente', 'verFaturas_FO'),
                                                      ('funcionario', 'verProdutos'),
                                                      ('funcionario', 'verPromocoes'),
                                                      ('funcionario', 'verUtilizadores');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
                             `name` varchar(64) NOT NULL,
                             `data` blob DEFAULT NULL,
                             `created_at` int(11) DEFAULT NULL,
                             `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `avaliacoes`
--

CREATE TABLE `avaliacoes` (
                              `id` int(11) NOT NULL,
                              `id_userdata` int(11) DEFAULT NULL,
                              `id_produto` int(11) DEFAULT NULL,
                              `nota` int(11) DEFAULT NULL,
                              `comentario` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carrinho`
--

CREATE TABLE `carrinho` (
                            `id` int(11) NOT NULL,
                            `id_userdata` int(11) NOT NULL,
                            `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carrinho_linhas`
--

CREATE TABLE `carrinho_linhas` (
                                   `id` int(11) NOT NULL,
                                   `id_carrinho` int(11) DEFAULT NULL,
                                   `id_produto` int(11) DEFAULT NULL,
                                   `quantidade` int(11) DEFAULT NULL,
                                   `preco` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
                              `id` int(11) NOT NULL,
                              `nome` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
                                            (1, 'Desporto'),
                                            (2, 'Ténis');

-- --------------------------------------------------------

--
-- Table structure for table `faturas`
--

CREATE TABLE `faturas` (
                           `id` int(11) NOT NULL,
                           `id_userdata` int(11) DEFAULT NULL,
                           `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faturas`
--

INSERT INTO `faturas` (`id`, `id_userdata`, `data`) VALUES
    (3, 2, '2024-01-07');

-- --------------------------------------------------------

--
-- Table structure for table `fatura_linhas`
--

CREATE TABLE `fatura_linhas` (
                                 `id` int(11) NOT NULL,
                                 `id_fatura` int(11) DEFAULT NULL,
                                 `id_produto` int(11) DEFAULT NULL,
                                 `quantidade` int(11) DEFAULT NULL,
                                 `preco` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fatura_linhas`
--

INSERT INTO `fatura_linhas` (`id`, `id_fatura`, `id_produto`, `quantidade`, `preco`) VALUES
                                                                                         (5, 3, 1, 3, 55.88),
                                                                                         (6, 3, 2, 1, 24.5);

-- --------------------------------------------------------

--
-- Table structure for table `favoritos`
--

CREATE TABLE `favoritos` (
                             `id` int(11) NOT NULL,
                             `id_userdata` int(11) DEFAULT NULL,
                             `id_produto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
                             `version` varchar(180) NOT NULL,
                             `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
                                                      ('m000000_000000_base', 1697379675),
                                                      ('m130524_201442_init', 1697379678),
                                                      ('m140506_102106_rbac_init', 1697800401),
                                                      ('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1697800401),
                                                      ('m180523_151638_rbac_updates_indexes_without_prefix', 1697800401),
                                                      ('m190124_110200_add_verification_token_column_to_user_table', 1697379678),
                                                      ('m200409_110543_rbac_update_mssql_trigger', 1697800401);

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
                            `id` int(11) NOT NULL,
                            `id_categoria` int(11) DEFAULT NULL,
                            `nome` varchar(45) DEFAULT NULL,
                            `descricao` varchar(255) DEFAULT NULL,
                            `preco` float DEFAULT NULL,
                            `stock` int(11) DEFAULT NULL,
                            `imagem` longtext DEFAULT NULL,
                            `marca` varchar(45) DEFAULT NULL,
                            `tamanho` varchar(255) DEFAULT NULL,
                            `cores` enum('Branco','Preto','Vermelho','Verde','Azul','Amarelo','Rosa','Laranja') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`id`, `id_categoria`, `nome`, `descricao`, `preco`, `stock`, `imagem`, `marca`, `tamanho`, `cores`) VALUES
                                                                                                                                (1, 1, 'Air Force 1 Low Retro', 'Lançadas em 1982 como uma peça essencial de basquetebol, as Air Force 1 tiveram realmente sucesso nos anos 90. O look simples das AF1 clássicas em branco sobre branco foi aprovado desde os campos de basquetebol até aos bairros e muito mais. Encontrando o ', 74.5, 7, 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/867af929-32e0-416f-8db1-5c2cb326dc2a/sapatilhas-air-force-1-low-retro-bXfnfX.png', 'Nike', '41', 'Branco'),
                                                                                                                                (2, 2, 'teste', 'Lançadas em 1982 como uma peça essencial de basquetebol, as Air Force 1 tiveram realmente sucesso nos anos 90. O look simples das AF1 clássicas em branco sobre branco foi aprovado desde os campos de basquetebol até aos bairros e muito mais. Encontrando o ', 24.5, 3, 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/867af929-32e0-416f-8db1-5c2cb326dc2a/sapatilhas-air-force-1-low-retro-bXfnfX.png', 'Nike', '41', 'Preto'),
                                                                                                                                (3, 2, 'teste 6', 'Lançadas em 1982 como uma peça essencial de basquetebol, as Air Force 1 tiveram realmente sucesso nos anos 90. O look simples das AF1 clássicas em branco sobre branco foi aprovado desde os campos de basquetebol até aos bairros e muito mais. Encontrando o ', 24.5, 0, 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/867af929-32e0-416f-8db1-5c2cb326dc2a/sapatilhas-air-force-1-low-retro-bXfnfX.png', 'Nike', '41', 'Preto'),
                                                                                                                                (4, 2, 'teste 5', 'Lançadas em 1982 como uma peça essencial de basquetebol, as Air Force 1 tiveram realmente sucesso nos anos 90. O look simples das AF1 clássicas em branco sobre branco foi aprovado desde os campos de basquetebol até aos bairros e muito mais. Encontrando o ', 24.5, 1, 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/867af929-32e0-416f-8db1-5c2cb326dc2a/sapatilhas-air-force-1-low-retro-bXfnfX.png', 'Nike', '41', 'Preto'),
                                                                                                                                (5, 2, 'teste 4', 'Lançadas em 1982 como uma peça essencial de basquetebol, as Air Force 1 tiveram realmente sucesso nos anos 90. O look simples das AF1 clássicas em branco sobre branco foi aprovado desde os campos de basquetebol até aos bairros e muito mais. Encontrando o ', 24.5, 0, 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/867af929-32e0-416f-8db1-5c2cb326dc2a/sapatilhas-air-force-1-low-retro-bXfnfX.png', 'Nike', '41', 'Preto'),
                                                                                                                                (6, 2, 'teste 3', 'Lançadas em 1982 como uma peça essencial de basquetebol, as Air Force 1 tiveram realmente sucesso nos anos 90. O look simples das AF1 clássicas em branco sobre branco foi aprovado desde os campos de basquetebol até aos bairros e muito mais. Encontrando o ', 24.5, 1, 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/867af929-32e0-416f-8db1-5c2cb326dc2a/sapatilhas-air-force-1-low-retro-bXfnfX.png', 'Nike', '41', 'Preto'),
                                                                                                                                (7, 2, 'teste 2', 'Lançadas em 1982 como uma peça essencial de basquetebol, as Air Force 1 tiveram realmente sucesso nos anos 90. O look simples das AF1 clássicas em branco sobre branco foi aprovado desde os campos de basquetebol até aos bairros e muito mais. Encontrando o ', 24.5, 0, 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/867af929-32e0-416f-8db1-5c2cb326dc2a/sapatilhas-air-force-1-low-retro-bXfnfX.png', 'Nike', '41', 'Preto');

-- --------------------------------------------------------

--
-- Table structure for table `promocoes`
--

CREATE TABLE `promocoes` (
                             `id` int(11) NOT NULL,
                             `id_produto` int(11) DEFAULT NULL,
                             `desconto` int(11) DEFAULT NULL,
                             `data_inicio` date DEFAULT NULL,
                             `data_termino` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `promocoes`
--

INSERT INTO `promocoes` (`id`, `id_produto`, `desconto`, `data_inicio`, `data_termino`) VALUES
    (4, 1, 25, '2024-01-07', '2024-01-08');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
                        `id` int(11) NOT NULL,
                        `username` varchar(255) NOT NULL,
                        `auth_key` varchar(32) NOT NULL,
                        `password_hash` varchar(255) NOT NULL,
                        `password_reset_token` varchar(255) DEFAULT NULL,
                        `email` varchar(255) NOT NULL,
                        `status` smallint(6) NOT NULL DEFAULT 10,
                        `created_at` int(11) NOT NULL,
                        `updated_at` int(11) NOT NULL,
                        `verification_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
                                                                                                                                                                    (1, 'Rodrigo', 'FfnNM3Xmth_2fD5XiSLGrmHDKlAOT-GA', '$2y$13$KIcnr55NIwQlP0XwCJFs1e1gshNYwLmCkjGekNLs2xiX3xD2FwXm6', NULL, 'Rodrigo@gmail.com', 10, 1697379940, 1697379940, 't3Vg7JpiM1RzaDbJaZScC6MoBBO9ZFrE_1697379940'),
                                                                                                                                                                    (2, 'Filipe', 'Kw11-yzWfLi7hPsD1Dc8__sHdMkuEHds', '$2y$13$qoa4tD1R7htI718M36HnnuYsP7RsFhI9vF1RFAacyduXSb02Lru9.', NULL, '2211921@my.ipleiria.pt', 10, 1697796992, 1704506534, 'tXK_G1FXri8NNYnSL1qAGVcbyD4Nim7z_1697796992'),
                                                                                                                                                                    (11, 'admin', 'u4mVpCuu4NbB-A0LfcmeWSfhyPgGEL-2', '$2y$13$B9sl6JtHcHJfQHYWa75GGOcgTS.djU3okqoF0mruF/jWFAm8d0IUa', NULL, 'admin@gmail.com', 10, 1704725137, 1704725137, NULL),
                                                                                                                                                                    (12, 'funcionario', '1KGrm3tDJpVRZ5JyavijfrFhxHUrs3ip', '$2y$13$L8etLfluUWM6hgK3YXIyh.sZuKWta0jXMBTE02C5YyOCzWUz.7/52', NULL, 'funcionario@gmail.com', 10, 1704725161, 1704725161, NULL),
                                                                                                                                                                    (15, 'cliente1', 'KdqMqFr1nQ61tdUEuc3YX9E71hHvkNLP', '$2y$13$iuUQSVcoe8EGYGOk7QbKWOY8OxgFdqFC7RRicWhODbfZMFeF8j.Wa', NULL, 'cliente1@gmail.com', 10, 1704725457, 1704725457, NULL),
                                                                                                                                                                    (16, 'cliente2', 'wCt-vuMiCmgYeJrecDJAQomHKy2npL7w', '$2y$13$RaG8UXgJlE8Awjmh1UBC3eut5amyhD.xANFwIQ4eEI5e7eJhV1vDW', NULL, 'cliente2@gmail.com', 10, 1704725488, 1704725488, NULL),
                                                                                                                                                                    (17, 'cliente3', 'aUX08qwBcHtKVbDvyBVODIGZHCcUX0mq', '$2y$13$DmrdbBeNEXO.ZzyDXMbO9uQKdK.k/IyxIxXP6nOjlGL893hbpYlV.', NULL, 'cliente3@gmail.com', 10, 1704725506, 1704725506, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
                            `id` int(11) NOT NULL,
                            `id_user` int(11) DEFAULT NULL,
                            `primeiroNome` varchar(45) DEFAULT NULL,
                            `ultimoNome` varchar(45) DEFAULT NULL,
                            `telemovel` int(11) DEFAULT NULL,
                            `morada` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `id_user`, `primeiroNome`, `ultimoNome`, `telemovel`, `morada`) VALUES
                                                                                                  (3, 2, 'Filipe', 'Marques', 913234265, 'Leiria'),
                                                                                                  (4, 1, 'Rodrigo', 'Luis', 913194666, 'Leiria'),
                                                                                                  (7, 11, 'Admin', 'Loja', 911111111, 'Leiria'),
                                                                                                  (8, 12, 'Funcionario', 'Loja', 911111112, 'Leiria'),
                                                                                                  (11, 15, 'Cliente1', 'Loja', 911111113, 'Leiria'),
                                                                                                  (12, 16, 'Cliente2', 'Loja', 911111114, 'Leiria'),
                                                                                                  (13, 17, 'Cliente3', 'Loja', 911111115, 'Leiria');

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
    ADD KEY `FK_produto_avaliacao_idx` (`id_produto`),
    ADD KEY `FK_userdata_avaliacao_idx` (`id_userdata`) USING BTREE;

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
    ADD KEY `FK_carrinho_carrinholinha_idx` (`id_carrinho`),
    ADD KEY `FK_produto_carrinholinha_idx` (`id_produto`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faturas`
--
ALTER TABLE `faturas`
    ADD PRIMARY KEY (`id`),
    ADD KEY `FK_userdata_faturas_idx` (`id_userdata`) USING BTREE;

--
-- Indexes for table `fatura_linhas`
--
ALTER TABLE `fatura_linhas`
    ADD PRIMARY KEY (`id`),
    ADD KEY `FK_fatura_faturalinhas_idx` (`id_fatura`),
    ADD KEY `FK_produto_faturalinhas_idx` (`id_produto`);

--
-- Indexes for table `favoritos`
--
ALTER TABLE `favoritos`
    ADD PRIMARY KEY (`id`),
    ADD KEY `FK_produto_favorito_idx` (`id_produto`),
    ADD KEY `FK_userdata_favorito_idx` (`id_userdata`) USING BTREE;

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
    ADD KEY `FK_categoria_produto_idx` (`id_categoria`);

--
-- Indexes for table `promocoes`
--
ALTER TABLE `promocoes`
    ADD PRIMARY KEY (`id`),
    ADD UNIQUE KEY `id_produto` (`id_produto`),
    ADD KEY `FK_produto_promocao_idx` (`id_produto`);

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
-- AUTO_INCREMENT for table `avaliacoes`
--
ALTER TABLE `avaliacoes`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carrinho`
--
ALTER TABLE `carrinho`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `carrinho_linhas`
--
ALTER TABLE `carrinho_linhas`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faturas`
--
ALTER TABLE `faturas`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fatura_linhas`
--
ALTER TABLE `fatura_linhas`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `favoritos`
--
ALTER TABLE `favoritos`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `promocoes`
--
ALTER TABLE `promocoes`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
    ADD CONSTRAINT `FK_produto_avaliacao` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
    ADD CONSTRAINT `FK_user_avaliacao` FOREIGN KEY (`id_userdata`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `carrinho`
--
ALTER TABLE `carrinho`
    ADD CONSTRAINT `FK_userdata_carrinho` FOREIGN KEY (`id_userdata`) REFERENCES `userdata` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `carrinho_linhas`
--
ALTER TABLE `carrinho_linhas`
    ADD CONSTRAINT `FK_carrinho_carrinholinha` FOREIGN KEY (`id_carrinho`) REFERENCES `carrinho` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
    ADD CONSTRAINT `FK_produto_carrinholinha` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `faturas`
--
ALTER TABLE `faturas`
    ADD CONSTRAINT `FK_user_faturas` FOREIGN KEY (`id_userdata`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `fatura_linhas`
--
ALTER TABLE `fatura_linhas`
    ADD CONSTRAINT `FK_fatura_faturalinha` FOREIGN KEY (`id_fatura`) REFERENCES `faturas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
    ADD CONSTRAINT `FK_produto_faturalinha` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `favoritos`
--
ALTER TABLE `favoritos`
    ADD CONSTRAINT `FK_produto_favorito` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
    ADD CONSTRAINT `FK_user_favorito` FOREIGN KEY (`id_userdata`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `produtos`
--
ALTER TABLE `produtos`
    ADD CONSTRAINT `FK_categoria_produto` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `promocoes`
--
ALTER TABLE `promocoes`
    ADD CONSTRAINT `FK_produto_promocao` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `userdata`
--
ALTER TABLE `userdata`
    ADD CONSTRAINT `FK_user_userdata` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
