CREATE DATABASE IF NOT EXISTS `Ghp02FgpuqfbeO` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `Ghp02FgpuqfbeO`;

CREATE TABLE `emails` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `fullname` varchar(56) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(56) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(56) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(56) COLLATE utf8mb4_unicode_ci NOT NULL,
  `received` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;