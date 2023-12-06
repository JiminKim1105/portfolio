-- --------------------------------------------------------
-- 호스트:                          127.0.0.1
-- 서버 버전:                        10.4.25-MariaDB - mariadb.org binary distribution
-- 서버 OS:                        Win64
-- HeidiSQL 버전:                  12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- phpdb 데이터베이스 구조 내보내기
DROP DATABASE IF EXISTS `phpdb`;
CREATE DATABASE IF NOT EXISTS `phpdb` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `phpdb`;

-- 테이블 phpdb.board 구조 내보내기
DROP TABLE IF EXISTS `board`;
CREATE TABLE IF NOT EXISTS `board` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `writer` varchar(20) DEFAULT NULL,
  `title` varchar(60) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `regtime` varchar(20) DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- 테이블 데이터 phpdb.board:~2 rows (대략적) 내보내기
DELETE FROM `board`;
INSERT INTO `board` (`num`, `writer`, `title`, `content`, `regtime`, `hits`) VALUES
	(1, '김지민', '후기1', '후기1', '2022-11-30 14:51:52', 0),
	(2, '홍길동', '후기2', '후기2', '2022-11-30 14:52:08', 0);

-- 테이블 phpdb.member 구조 내보내기
DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `id` varchar(20) NOT NULL,
  `pw` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 테이블 데이터 phpdb.member:~2 rows (대략적) 내보내기
DELETE FROM `member`;
INSERT INTO `member` (`id`, `pw`, `name`) VALUES
	('qwer123', 'qwe123', '홍길동'),
	('sea657821', '657821', '김지민');

-- 테이블 phpdb.notice 구조 내보내기
DROP TABLE IF EXISTS `notice`;
CREATE TABLE IF NOT EXISTS `notice` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `writer` varchar(20) DEFAULT NULL,
  `title` varchar(60) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `regtime` varchar(20) DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- 테이블 데이터 phpdb.notice:~3 rows (대략적) 내보내기
DELETE FROM `notice`;
INSERT INTO `notice` (`num`, `writer`, `title`, `content`, `regtime`, `hits`) VALUES
	(1, '대표', '공지1', '글의 내용 1', '2022-07-30 10:10:11', 0),
	(2, '대표', '공지2', '글의 내용 2', '2022-10-30 10:10:12', 0),
	(3, '대표', '공지3', '글의 내용 3', '2022-11-30 10:10:13', 0);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
