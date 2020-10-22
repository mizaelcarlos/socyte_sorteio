-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.27-log - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura para tabela socyte.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela socyte.failed_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;


-- Copiando estrutura para tabela socyte.jogador
CREATE TABLE IF NOT EXISTS `jogador` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  `goleiro` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela socyte.jogador: ~16 rows (aproximadamente)
/*!40000 ALTER TABLE `jogador` DISABLE KEYS */;
INSERT INTO `jogador` (`id`, `nome`, `nivel`, `goleiro`, `created_at`, `updated_at`) VALUES
	(1, 'Ronaldo Jovaneli', 5, 0, '2020-10-18 19:04:53', '2020-10-21 00:42:52'),
	(2, 'Diego Alves', 4, 1, '2020-10-18 19:29:16', '2020-10-18 19:29:16'),
	(3, 'Ronaldinho', 5, 0, '2020-10-18 19:29:35', '2020-10-18 19:29:35'),
	(4, 'Belete', 4, 0, '2020-10-18 19:29:46', '2020-10-18 19:29:46'),
	(5, 'Romário', 5, 0, '2020-10-18 19:29:55', '2020-10-18 19:29:55'),
	(6, 'Dôdô', 3, 0, '2020-10-18 19:30:15', '2020-10-18 19:30:15'),
	(7, 'Tafarell', 5, 1, '2020-10-18 19:30:25', '2020-10-18 19:30:25'),
	(8, 'Gatuso', 3, 0, '2020-10-18 19:30:41', '2020-10-21 00:10:46'),
	(9, 'Zidande', 5, 0, '2020-10-18 19:31:08', '2020-10-18 19:31:08'),
	(10, 'Cristiano Ronaldo', 5, 0, '2020-10-18 19:31:27', '2020-10-18 19:31:27'),
	(11, 'Messi', 5, 0, '2020-10-18 19:31:41', '2020-10-18 19:31:41'),
	(12, 'Materazzi', 4, 0, '2020-10-18 19:32:04', '2020-10-18 19:32:04'),
	(13, 'Robson', 2, 0, '2020-10-19 00:17:37', '2020-10-19 00:17:37'),
	(14, 'Cesar', 1, 1, '2020-10-20 00:08:28', '2020-10-20 00:08:28'),
	(15, 'Cleiton', 3, 0, '2020-10-20 13:08:55', '2020-10-20 13:08:55'),
	(16, 'Gabigol', 4, 0, '2020-10-20 23:56:15', '2020-10-20 23:56:15');
/*!40000 ALTER TABLE `jogador` ENABLE KEYS */;


-- Copiando estrutura para tabela socyte.jogador_partida
CREATE TABLE IF NOT EXISTS `jogador_partida` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `jogador_id` int(10) unsigned NOT NULL,
  `partida_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela socyte.jogador_partida: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `jogador_partida` DISABLE KEYS */;
/*!40000 ALTER TABLE `jogador_partida` ENABLE KEYS */;


-- Copiando estrutura para tabela socyte.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela socyte.migrations: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(13, '2020_10_18_150057_create_jogador_table', 1),
	(23, '2014_10_12_000000_create_users_table', 2),
	(24, '2014_10_12_100000_create_password_resets_table', 2),
	(25, '2019_08_19_000000_create_failed_jobs_table', 2),
	(26, '2020_10_18_154621_create_jogador_table', 2),
	(27, '2020_10_18_180621_create_partida_table', 2),
	(28, '2020_10_18_181155_create_jogador_partida_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


-- Copiando estrutura para tabela socyte.partida
CREATE TABLE IF NOT EXISTS `partida` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `quantidade_jogadores_time` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela socyte.partida: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `partida` DISABLE KEYS */;
INSERT INTO `partida` (`id`, `data`, `quantidade_jogadores_time`, `created_at`, `updated_at`) VALUES
	(1, '2020-10-24', 4, '2020-10-18 18:51:32', '2020-10-18 18:51:32'),
	(3, '2020-10-24', 5, '2020-10-20 22:41:38', '2020-10-20 22:41:38'),
	(4, '2020-10-25', 6, '2020-10-20 23:55:19', '2020-10-20 23:55:19'),
	(5, '2020-10-09', 6, '2020-10-21 00:38:43', '2020-10-21 00:38:43');
/*!40000 ALTER TABLE `partida` ENABLE KEYS */;


-- Copiando estrutura para tabela socyte.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela socyte.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;


-- Copiando estrutura para tabela socyte.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela socyte.users: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
