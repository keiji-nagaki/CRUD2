-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-01-12 10:14:18
-- サーバのバージョン： 10.4.27-MariaDB
-- PHP のバージョン: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `valve`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `valve_data`
--

CREATE TABLE `valve_data` (
  `id` int(11) NOT NULL,
  `プラント名` varchar(128) NOT NULL,
  `号機` varchar(128) NOT NULL,
  `弁番号` varchar(128) NOT NULL,
  `弁名称` varchar(128) NOT NULL,
  `Jo` varchar(128) NOT NULL,
  `PAT` varchar(128) NOT NULL,
  `SIZE` varchar(128) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- テーブルのデータのダンプ `valve_data`
--

INSERT INTO `valve_data` (`id`, `プラント名`, `号機`, `弁番号`, `弁名称`, `Jo`, `PAT`, `SIZE`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, '新大分', '2', 'SV-1', '安全弁', 'B9292-001', '73008', '65', '2023-01-11 18:17:27', '2023-01-11 18:17:27', NULL),
(4, '新大分', '３', 'SV-1', '安全弁', '１２３４５', '２２２２２', '300', '2023-01-12 07:32:34', '2023-01-12 07:32:34', '2023-01-12 07:39:58'),
(5, '新大分', '３', 'SV-1', '安全弁', '１２３４５', '２２２２２', '１００', '2023-01-12 07:49:09', '2023-01-12 07:49:09', '2023-01-12 07:49:12'),
(6, '新大分', '３', 'SV-1', '安全弁', '１２３４５', '２２２２２', '１００', '2023-01-12 16:24:37', '2023-01-12 16:24:37', NULL);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `valve_data`
--
ALTER TABLE `valve_data`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `valve_data`
--
ALTER TABLE `valve_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
