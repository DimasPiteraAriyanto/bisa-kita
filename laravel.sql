-- -------------------------------------------------------------
-- TablePlus 4.7.1(428)
--
-- https://tableplus.com/
--
-- Database: laravel
-- Generation Time: 2022-07-27 14:14:00.4880
-- -------------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name_product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slugProduct` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi_product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_product` bigint unsigned NOT NULL,
  `domain` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `memberId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_id_product_foreign` (`id_product`),
  CONSTRAINT `posts_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `product_details` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_1` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_details_product_id_foreign` (`product_id`),
  CONSTRAINT `product_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_07_08_062147_create_sessions_table', 1),
(7, '2022_07_11_034513_create_products_table', 1),
(8, '2022_07_14_061907_create_product_details_table', 1),
(9, '2022_07_15_063037_create_posts_table', 1);

INSERT INTO `products` (`id`, `name_product`, `slugProduct`, `deskripsi_product`, `image_product`, `created_at`, `updated_at`) VALUES
(1, 'KOPI BONGKARR', 'kopi-bongkarr', 'BPOM MD 867009207575', 'products/1.png', '2022-07-20 11:21:36', '2022-07-20 11:22:01'),
(2, 'X-MEN', 'x-men', 'BPOM MD 867031426523', 'products/2.png', '2022-07-20 11:22:01', '2022-07-20 11:22:01'),
(3, 'JUZZLIM', 'juzzlim', 'BPOM MD 867009139575', 'products/3.png', '2022-07-20 11:22:01', '2022-07-20 11:22:01'),
(4, 'FIT PROPOLIS', 'fit-propolis', 'BPOM MD 213469531', 'products/4.png', '2022-07-20 11:22:01', '2022-07-20 11:22:01'),
(5, 'GAMAT KUNYIT', 'gamat-kunyit', 'BPOM MD 193330511', 'products/5.png', '2022-07-20 11:22:01', '2022-07-20 11:22:01'),
(6, 'ICHIBANG FEMININE HYGIENE', 'ichibang-feminine-hygiene', 'BPOM MD 18211600073', 'products/6.png', '2022-07-20 11:22:01', '2022-07-20 11:22:01'),
(7, 'ICHIBANG BLUECUT', 'ichibang-bluecut', 'BLUECUT GLASSES', 'products/7.png', '2022-07-20 11:22:01', '2022-07-20 11:22:01'),
(8, 'ICHIBANG BLUECROMIC', 'ichibang-bluecromic', 'BLUECUT GLASSES', 'products/8.png', '2022-07-20 11:22:01', '2022-07-20 11:22:01'),
(9, 'ICHIBANG INSOLE', 'ichibang-insole', 'FOOT SUPPORT', 'products/9.png', '2022-07-20 11:22:01', '2022-07-20 11:22:01');

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('080epv3mlz0KEIuMD5cPcxKXX5w9jG6c3E4Zi0lU', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:102.0) Gecko/20100101 Firefox/102.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNFAyaE1vek9iM0N0eFU3bFpPSFpDc2ZVbzFkc0w2TEhxVWxabEJHayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9raXRhLWJpc2EudGVzdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1658887370),
('aMTtAujRHFuIgdVyb8fPFj9X0GvppNk1b6AFkrkM', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:102.0) Gecko/20100101 Firefox/102.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiTzNDNUZ4eXcxQUtxRXUzOGJJY2pLUkZnQ3JXWDBRbmpXcTRrMkplbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9raXRhLWJpc2EudGVzdC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJFhpQjBtZS52SkxBN1EySmxFbmVoaGV1LmdGaWhFLjU0T0J4b3RNV1A1VGlKVXdwa3lVcktDIjt9', 1658889941),
('GxrcBgHp8apnhdSZULYm74oydhLjSc1zpDi1dqp7', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:102.0) Gecko/20100101 Firefox/102.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSmw0QnltbFNLRVVLbDJpazNmQUZKVTd0cGJKb3Z3MlhUcXFlQk91NCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjE6Imh0dHA6Ly9raXRhLWJpc2EudGVzdC8xMi8xL2RzbWFkL2tvcGktYm9uZ2thcnIvYmlzYWtpdGEuY28uaWQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJFhpQjBtZS52SkxBN1EySmxFbmVoaGV1LmdGaWhFLjU0T0J4b3RNV1A1VGlKVXdwa3lVcktDIjt9', 1658819165),
('ieAP1gaWkPrgTrQ1jmPc8JUZtySzxdjMworeEMXt', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:102.0) Gecko/20100101 Firefox/102.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoibmhZN1d6cVVVSzNnMkYwUmdVYnNMRGxXMFVTZERPdVlURmR1dzFmUyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjUzOiJodHRwOi8va2l0YS1iaXNhLnRlc3QvZ2VuZXJhdGUvMi9YLU1FTi9iaXNha2l0YS5jby5pZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkWGlCMG1lLnZKTEE3UTJKbEVuZWhoZXUuZ0ZpaEUuNTRPQnhvdE1XUDVUaUpVd3BreVVyS0MiO30=', 1658826691),
('kdStqQ961ttB3UtrShHWH2hajTTiORHqJdkgrILB', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:102.0) Gecko/20100101 Firefox/102.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoib1VhZzBjNjNOTlBxWnRKTkZJa25HQlJRcHZGRU5pblhmVkFvbjFsdiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0MToiaHR0cDovL2tpdGEtYmlzYS50ZXN0L3Bvc3QvYmlzYWtpdGEuY28uaWQiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0MToiaHR0cDovL2tpdGEtYmlzYS50ZXN0L3Bvc3QvYmlzYWtpdGEuY28uaWQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1658826658);

INSERT INTO `posts` (`id`, `id_product`, `domain`, `slug`, `name`, `image`, `whatsapp`, `memberId`, `created_at`, `updated_at`) VALUES
(11, 2, 'irene-Seulgi', 'irene-seulgi', 'irene', 'posts/iKLkERDQdzMJELMhCthW7nKCoY8Su81rqtwIV5GU.jpg', '12', '12', '2022-07-20 08:31:14', '2022-07-20 08:31:14'),
(12, 1, 'dsmad', 'dsmad', 'adsdsajn', 'posts/CztzTobbNplsVRjle96ql6ktasGq5co1M4kLygeU.jpg', 'dsnajn', 'dasjn', '2022-07-21 04:11:13', '2022-07-21 04:11:13');

INSERT INTO `product_details` (`id`, `product_id`, `title`, `image_1`, `content_1`, `created_at`, `updated_at`) VALUES
(1, 1, 'KOPI BONGKARR', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quidem quaerat vitae mollitia rerum iusto at. Corrupti veritatis labore, laboriosam eveniet rerum ut totam possimus aliquid quo voluptatibus provident! Fugiat.', NULL, NULL),
(2, 2, 'X-MEN', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quidem quaerat vitae mollitia rerum iusto at. Corrupti veritatis labore, laboriosam eveniet rerum ut totam possimus aliquid quo voluptatibus provident! Fugiat.', NULL, NULL),
(3, 3, 'JUZZLIM', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quidem quaerat vitae mollitia rerum iusto at. Corrupti veritatis labore, laboriosam eveniet rerum ut totam possimus aliquid quo voluptatibus provident! Fugiat.', NULL, NULL),
(4, 4, 'FIT PROPOLIS', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quidem quaerat vitae mollitia rerum iusto at. Corrupti veritatis labore, laboriosam eveniet rerum ut totam possimus aliquid quo voluptatibus provident! Fugiat.', NULL, NULL),
(5, 5, 'GAMAT KUNYIT', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quidem quaerat vitae mollitia rerum iusto at. Corrupti veritatis labore, laboriosam eveniet rerum ut totam possimus aliquid quo voluptatibus provident! Fugiat.', NULL, NULL),
(6, 6, 'ICHIBANG FEMININE HYGIENE', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quidem quaerat vitae mollitia rerum iusto at. Corrupti veritatis labore, laboriosam eveniet rerum ut totam possimus aliquid quo voluptatibus provident! Fugiat.', NULL, NULL),
(7, 7, 'ICHIBANG BLUECUT', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quidem quaerat vitae mollitia rerum iusto at. Corrupti veritatis labore, laboriosam eveniet rerum ut totam possimus aliquid quo voluptatibus provident! Fugiat.', NULL, NULL),
(8, 8, 'ICHIBANG BLUECROMIC', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quidem quaerat vitae mollitia rerum iusto at. Corrupti veritatis labore, laboriosam eveniet rerum ut totam possimus aliquid quo voluptatibus provident! Fugiat.', NULL, NULL),
(9, 9, 'ICHIBANG INSOLE', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quidem quaerat vitae mollitia rerum iusto at. Corrupti veritatis labore, laboriosam eveniet rerum ut totam possimus aliquid quo voluptatibus provident! Fugiat.', NULL, NULL);

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin@web.com', 'admin@web.com', NULL, '$2y$10$XiB0me.vJLA7Q2JlEnehheu.gFihE.54OBxotMWP5TiJUwpkyUrKC', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-19 09:37:34', '2022-07-19 09:37:34');



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;