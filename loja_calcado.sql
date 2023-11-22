-- --------------------------------------------------------
-- Anfitrião:                    127.0.0.1
-- Versão do servidor:           11.1.2-MariaDB-log - mariadb.org binary distribution
-- SO do servidor:               Win64
-- HeidiSQL Versão:              12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- A despejar estrutura da base de dados para loja_calcado
CREATE DATABASE IF NOT EXISTS `loja_calcado` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `loja_calcado`;

-- A despejar estrutura para tabela loja_calcado.auth_assignment
CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  KEY `idx-auth_assignment-user_id` (`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- A despejar dados para tabela loja_calcado.auth_assignment: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela loja_calcado.auth_item
CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text DEFAULT NULL,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` blob DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- A despejar dados para tabela loja_calcado.auth_item: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela loja_calcado.auth_item_child
CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- A despejar dados para tabela loja_calcado.auth_item_child: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela loja_calcado.auth_rule
CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` blob DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- A despejar dados para tabela loja_calcado.auth_rule: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela loja_calcado.carrinho_compras
CREATE TABLE IF NOT EXISTS `carrinho_compras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_produto_carrinho_idx` (`id_produto`),
  CONSTRAINT `FK_produto_carrinho` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela loja_calcado.carrinho_compras: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela loja_calcado.faturas
CREATE TABLE IF NOT EXISTS `faturas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_user_faturas_idx` (`id_user`),
  CONSTRAINT `FK_user_faturas` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela loja_calcado.faturas: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela loja_calcado.fatura_linhas
CREATE TABLE IF NOT EXISTS `fatura_linhas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_fatura` int(11) DEFAULT NULL,
  `id_produto` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `preco` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_fatura_faturalinhas_idx` (`id_fatura`),
  KEY `FK_produto_faturalinhas_idx` (`id_produto`),
  CONSTRAINT `FK_fatura_faturalinha` FOREIGN KEY (`id_fatura`) REFERENCES `faturas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_produto_faturalinha` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela loja_calcado.fatura_linhas: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela loja_calcado.favoritos
CREATE TABLE IF NOT EXISTS `favoritos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `id_produto` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_user_favorito_idx` (`id_user`),
  KEY `FK_produto_favorito_idx` (`id_produto`),
  CONSTRAINT `FK_produto_favorito` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_user_favorito` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela loja_calcado.favoritos: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela loja_calcado.migration
CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela loja_calcado.migration: ~7 rows (aproximadamente)
INSERT INTO `migration` (`version`, `apply_time`) VALUES
	('m000000_000000_base', 1697379675),
	('m130524_201442_init', 1697379678),
	('m140506_102106_rbac_init', 1697800401),
	('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1697800401),
	('m180523_151638_rbac_updates_indexes_without_prefix', 1697800401),
	('m190124_110200_add_verification_token_column_to_user_table', 1697379678),
	('m200409_110543_rbac_update_mssql_trigger', 1697800401);

-- A despejar estrutura para tabela loja_calcado.produtos
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `preco` float DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `categoria` int(11) DEFAULT NULL,
  `imagem` longtext DEFAULT NULL,
  `marca` varchar(45) DEFAULT NULL,
  `tamanho` enum('41') DEFAULT NULL,
  `cores` enum('Branco','Preto') DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_categoria_produto_idx` (`categoria`),
  CONSTRAINT `FK_categoria_produto` FOREIGN KEY (`categoria`) REFERENCES `produtos_categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela loja_calcado.produtos: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela loja_calcado.produtos_avaliacoes
CREATE TABLE IF NOT EXISTS `produtos_avaliacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `id_produto` int(11) DEFAULT NULL,
  `nota` int(11) DEFAULT NULL,
  `comentario` longtext DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_user_avaliacao_idx` (`id_user`),
  KEY `FK_produto_avaliacao_idx` (`id_produto`),
  CONSTRAINT `FK_produto_avaliacao` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_user_avaliacao` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela loja_calcado.produtos_avaliacoes: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela loja_calcado.produtos_categorias
CREATE TABLE IF NOT EXISTS `produtos_categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela loja_calcado.produtos_categorias: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela loja_calcado.promocoes
CREATE TABLE IF NOT EXISTS `promocoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) DEFAULT NULL,
  `desconto` int(11) DEFAULT NULL,
  `data_inicio` datetime DEFAULT NULL,
  `data_termino` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_produto_promocao_idx` (`id_produto`),
  CONSTRAINT `FK_produto_promocao` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela loja_calcado.promocoes: ~0 rows (aproximadamente)

-- A despejar estrutura para tabela loja_calcado.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- A despejar dados para tabela loja_calcado.user: ~3 rows (aproximadamente)
INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
	(1, 'Rodrigo', 'FfnNM3Xmth_2fD5XiSLGrmHDKlAOT-GA', '$2y$13$KIcnr55NIwQlP0XwCJFs1e1gshNYwLmCkjGekNLs2xiX3xD2FwXm6', NULL, 'Rodrigo@gmail.com', 10, 1697379940, 1697379940, 't3Vg7JpiM1RzaDbJaZScC6MoBBO9ZFrE_1697379940'),
	(2, 'Filipe', 'Kw11-yzWfLi7hPsD1Dc8__sHdMkuEHds', '$2y$13$FhF8e1l1GFcBrhr8j2hBuOGWY7uXIjOAYgQ8L.JE7JxMyWvMrh0sG', NULL, '2211921@my.ipleiria.pt', 10, 1697796992, 1697796992, 'tXK_G1FXri8NNYnSL1qAGVcbyD4Nim7z_1697796992');

-- A despejar estrutura para tabela loja_calcado.userdata
CREATE TABLE IF NOT EXISTS `userdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `primeiroNome` varchar(45) DEFAULT NULL,
  `ultimoNome` varchar(45) DEFAULT NULL,
  `telemovel` int(11) DEFAULT NULL,
  `morada` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_user_userdata_idx` (`id_user`),
  CONSTRAINT `FK_user_userdata` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela loja_calcado.userdata: ~0 rows (aproximadamente)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
