-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 생성 시간: 17-04-03 02:33
-- 서버 버전: 10.1.19-MariaDB
-- PHP 버전: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `20170401`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `board`
--

CREATE TABLE `board` (
  `idx` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `category` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `m_idx` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `board`
--

INSERT INTO `board` (`idx`, `title`, `content`, `category`, `date`, `image`, `email`, `name`, `m_idx`) VALUES
(1, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(2, '123123', '123123123123123', 3, '2017-04-01 14:14:32', '', 'asdasd@naver.com', '강민우', 1),
(3, 'sdfsdfsdf', 'sdfsdfsfdsdfsdfsdf', 2, '2017-04-01 14:14:44', '', 'asdasd@naver.com', '강민우', 1),
(5, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(6, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(7, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(8, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(9, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(10, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(11, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(12, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(13, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(14, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(15, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(16, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(17, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(18, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(19, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(20, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(21, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(22, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(23, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(24, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(25, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(26, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(27, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(28, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(29, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(30, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(31, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(32, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(33, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(34, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(35, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(36, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(37, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(38, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(39, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(40, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(41, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(42, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(43, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(44, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(45, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(46, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(47, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(48, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(49, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(50, 'asdadasd', 'asdasdasdasd', 3, '2017-04-01 13:49:56', '58dfb0044f8dc.jpg', 'asdasd@naver.com', '강민우', 1),
(51, 'ㅁㄴㅇㅁㄴㅇ', 'ㅁㄴㅇㅁㄴㅇㅁㄴㅇㅁㄴㅇ', 2, '2017-04-01 14:28:44', '58dfb91c48a80.jpg', 'kmw@designgj.com', '다른사람', 3),
(52, 'ㅁㅇㅁㄴㅇㅁㄴㅇㅁㄴ', 'ㅁㄴㅇㅁㄴㅇ', 1, '2017-04-02 07:04:18', '58e0a272c32ba.jpg', 'kmw@designgj.com', '다른사람', 3);

-- --------------------------------------------------------

--
-- 테이블 구조 `category`
--

CREATE TABLE `category` (
  `idx` int(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `category`
--

INSERT INTO `category` (`idx`, `name`) VALUES
(1, '카테고리1'),
(2, '카테고리2'),
(3, '카테고리3'),
(4, '카테고리4'),
(5, '카테고리5');

-- --------------------------------------------------------

--
-- 테이블 구조 `comment`
--

CREATE TABLE `comment` (
  `idx` int(10) NOT NULL,
  `b_idx` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content` text NOT NULL,
  `m_idx` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `comment`
--

INSERT INTO `comment` (`idx`, `b_idx`, `name`, `email`, `date`, `content`, `m_idx`) VALUES
(2, 51, '다른사람', 'kmw@designgj.com', '2017-04-01 14:42:28', 'ㅁㄴㅇㅁㅇㅁㄴㅇ', 3),
(3, 51, '다른사람', 'kmw@designgj.com', '2017-04-01 14:42:31', '123123123123', 3);

-- --------------------------------------------------------

--
-- 테이블 구조 `member`
--

CREATE TABLE `member` (
  `idx` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `member`
--

INSERT INTO `member` (`idx`, `email`, `password`, `name`) VALUES
(1, 'asdasd@naver.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '강민우'),
(2, 'asdasd2@naver.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '강민우'),
(3, 'kmw@designgj.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '다른사람');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idx`),
  ADD UNIQUE KEY `email` (`email`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `board`
--
ALTER TABLE `board`
  MODIFY `idx` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- 테이블의 AUTO_INCREMENT `category`
--
ALTER TABLE `category`
  MODIFY `idx` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 테이블의 AUTO_INCREMENT `comment`
--
ALTER TABLE `comment`
  MODIFY `idx` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 테이블의 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `idx` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
