-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2024 年 6 月 30 日 11:25
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `favorites_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `visit_date` date NOT NULL,
  `place_type` varchar(50) NOT NULL,
  `facility_name` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `slider1` int(11) NOT NULL,
  `slider2` int(11) NOT NULL,
  `slider3` int(11) NOT NULL,
  `slider4` int(11) NOT NULL,
  `slider5` int(11) NOT NULL,
  `slider6` int(11) NOT NULL,
  `slider7` int(11) NOT NULL,
  `slider8` int(11) NOT NULL,
  `slider9` int(11) NOT NULL,
  `slider10` int(11) NOT NULL,
  `free_text` text DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `favorites`
--

INSERT INTO `favorites` (`id`, `visit_date`, `place_type`, `facility_name`, `location`, `slider1`, `slider2`, `slider3`, `slider4`, `slider5`, `slider6`, `slider7`, `slider8`, `slider9`, `slider10`, `free_text`, `image_path`) VALUES
(1, '2024-06-30', 'restaurant', NULL, NULL, 50, 70, 50, 50, 50, 20, 50, 50, 50, 70, NULL, 'uploads/burdies.png');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
