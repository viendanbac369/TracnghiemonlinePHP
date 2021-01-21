-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 02, 2021 lúc 06:26 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quiz`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'muki', '1111');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `answer`
--

CREATE TABLE `answer` (
  `id` int(100) NOT NULL,
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `answer`
--

INSERT INTO `answer` (`id`, `qid`, `ansid`) VALUES
(4, '5b85857d00f34', '5b85857d0ab77'),
(5, '5b85857d333f0', '5b85857d391b2'),
(6, '5b85857d59559', '5b85857d69efd'),
(7, '5b85857d917d6', '5b85857d97980'),
(8, '5b85857db810f', '5b85857dbd701'),
(9, '5ff093cbed51c', '5ff093cc15727'),
(10, '5ff093cccde2e', '5ff093cce3a0b'),
(11, '5ff093cd30920', '5ff093cd46562'),
(12, '5ff094a283ece', '5ff094a2ab645'),
(13, '5ff094a354352', '5ff094a3bbe90'),
(14, '5ff094a4211fb', '5ff094a4344fa'),
(15, '5ff094a554bd2', '5ff094a55fb18'),
(16, '5ff09b2b5d37d', '5ff09b2b79b7a'),
(17, '5ff09b2c33293', '5ff09b2c52000'),
(18, '5ff09b2cb2c1c', '5ff09b2cc5b8a'),
(19, '5ff09b2ddb594', '5ff09b2de65e5');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `username`, `subject`, `feedback`, `date`, `time`) VALUES
('5b86784504039', 'pravin', 'fyvgh@vgyvy.in', 'ytiu', 'yty', '2018-08-29', '03:41:09pm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `history`
--

CREATE TABLE `history` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `correct` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `timestamp` bigint(50) NOT NULL,
  `status` varchar(40) NOT NULL,
  `score_updated` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `history`
--

INSERT INTO `history` (`id`, `username`, `eid`, `score`, `level`, `correct`, `wrong`, `date`, `timestamp`, `status`, `score_updated`) VALUES
(1, 'pravin', '5b85847bbe794', 3, 5, 2, 3, '2018-08-29 10:37:59', 1535538968, 'finished', 'true'),
(2, 'mugunth', '5b85847bbe794', 11, 5, 4, 1, '2018-08-29 10:39:42', 1535539122, 'finished', 'true'),
(3, 'mung', '5b85847bbe794', 4, 5, 2, 2, '2021-01-02 15:38:04', 1609601847, 'finished', 'true'),
(4, 'mung', '5ff093a092987', 10, 2, 1, 1, '2021-01-02 15:41:15', 1609602056, 'finished', 'true'),
(12, 'mung', '5ff0946e2dafb', -28, 4, -3, -1, '2021-01-02 16:19:47', 1609604367, 'finished', 'true'),
(17, 'mung', '5ff09b01da5e6', 18, 4, 2, 1, '2021-01-02 16:31:29', 1609605069, 'finished', 'true');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `options`
--

CREATE TABLE `options` (
  `id` int(100) NOT NULL,
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `options`
--

INSERT INTO `options` (`id`, `qid`, `option`, `optionid`) VALUES
(13, '5b85857d00f34', ' Hello World!Hello World!', '5b85857d0ab77'),
(14, '5b85857d00f34', ' Hello World! * 2', '5b85857d0af5f'),
(15, '5b85857d00f34', 'Hello World!', '5b85857d0b347'),
(16, '5b85857d00f34', 'None of the above.', '5b85857d0b72f'),
(17, '5b85857d333f0', '( \'abcd\', 786 , 2.23, \'john\', 70.2 )', '5b85857d389e2'),
(18, '5b85857d333f0', 'abcd', '5b85857d38dca'),
(19, '5b85857d333f0', '(786, 2.23)', '5b85857d391b2'),
(20, '5b85857d333f0', 'None of the above.', '5b85857d3959a'),
(21, '5b85857d59559', 'int(x [,base])', '5b85857d69b15'),
(22, '5b85857d59559', 'long(x [,base] )', '5b85857d69efd'),
(23, '5b85857d59559', 'float(x)', '5b85857d6a2e5'),
(24, '5b85857d59559', 'str(x)', '5b85857d6a6cd'),
(25, '5b85857d917d6', 'unichr(x)', '5b85857d97980'),
(26, '5b85857d917d6', 'ord(x)', '5b85857d97d68'),
(27, '5b85857d917d6', 'hex(x)', '5b85857d98150'),
(28, '5b85857d917d6', 'oct(x)', '5b85857d98538'),
(29, '5b85857db810f', 'choice(seq)', '5b85857dbd701'),
(30, '5b85857db810f', 'randrange ([start,] stop [,step])', '5b85857dbdae9'),
(31, '5b85857db810f', 'random()', '5b85857dbded1'),
(32, '5b85857db810f', 'seed([x])', '5b85857dbe2b9'),
(33, '5ff093cbed51c', '1', '5ff093cc15727'),
(34, '5ff093cbed51c', '2', '5ff093cc15735'),
(35, '5ff093cbed51c', '3', '5ff093cc15739'),
(36, '5ff093cbed51c', '4', '5ff093cc1573d'),
(37, '5ff093cccde2e', '1', '5ff093cce3a04'),
(38, '5ff093cccde2e', '2', '5ff093cce3a0b'),
(39, '5ff093cccde2e', '3', '5ff093cce3a0c'),
(40, '5ff093cccde2e', '4', '5ff093cce3a0e'),
(41, '5ff093cd30920', '1', '5ff093cd46551'),
(42, '5ff093cd30920', '2', '5ff093cd4655f'),
(43, '5ff093cd30920', '3', '5ff093cd46562'),
(44, '5ff093cd30920', '4', '5ff093cd46565'),
(45, '5ff094a283ece', '1', '5ff094a2ab645'),
(46, '5ff094a283ece', '2', '5ff094a2ab657'),
(47, '5ff094a283ece', '3', '5ff094a2ab658'),
(48, '5ff094a283ece', '4', '5ff094a2ab65a'),
(49, '5ff094a354352', '1', '5ff094a3bbe81'),
(50, '5ff094a354352', '2', '5ff094a3bbe90'),
(51, '5ff094a354352', '3', '5ff094a3bbe94'),
(52, '5ff094a354352', '4', '5ff094a3bbe98'),
(53, '5ff094a4211fb', '1', '5ff094a4344e4'),
(54, '5ff094a4211fb', '2', '5ff094a4344f5'),
(55, '5ff094a4211fb', '3', '5ff094a4344fa'),
(56, '5ff094a4211fb', '4', '5ff094a4344fe'),
(57, '5ff094a554bd2', '1', '5ff094a55fb07'),
(58, '5ff094a554bd2', '2', '5ff094a55fb13'),
(59, '5ff094a554bd2', '3', '5ff094a55fb16'),
(60, '5ff094a554bd2', '4', '5ff094a55fb18'),
(61, '5ff09b2b5d37d', '1', '5ff09b2b79b7a'),
(62, '5ff09b2b5d37d', '2', '5ff09b2b79b88'),
(63, '5ff09b2b5d37d', '3', '5ff09b2b79b8b'),
(64, '5ff09b2b5d37d', '4', '5ff09b2b79b8e'),
(65, '5ff09b2c33293', '1', '5ff09b2c51ff0'),
(66, '5ff09b2c33293', '2', '5ff09b2c52000'),
(67, '5ff09b2c33293', '3', '5ff09b2c52005'),
(68, '5ff09b2c33293', '4', '5ff09b2c52009'),
(69, '5ff09b2cb2c1c', '1', '5ff09b2cc5b80'),
(70, '5ff09b2cb2c1c', '2', '5ff09b2cc5b89'),
(71, '5ff09b2cb2c1c', '3', '5ff09b2cc5b8a'),
(72, '5ff09b2cb2c1c', '4', '5ff09b2cc5b8c'),
(73, '5ff09b2ddb594', '1', '5ff09b2de65d1'),
(74, '5ff09b2ddb594', '2', '5ff09b2de65de'),
(75, '5ff09b2ddb594', '3', '5ff09b2de65e1'),
(76, '5ff09b2ddb594', '4', '5ff09b2de65e5');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `questions`
--

CREATE TABLE `questions` (
  `id` int(100) NOT NULL,
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `questions`
--

INSERT INTO `questions` (`id`, `eid`, `qid`, `qns`, `choice`, `sn`) VALUES
(4, '5b85847bbe794', '5b85857d00f34', 'What is the output of print str * 2 if str = \'Hello World!\'?', 4, 1),
(5, '5b85847bbe794', '5b85857d333f0', 'What is the output of print tuple[1:3] if tuple = ( \'abcd\', 786 , 2.23, \'john\', 70.2 )?', 4, 2),
(6, '5b85847bbe794', '5b85857d59559', 'Which of the following function convert a string to a long in python?', 4, 3),
(7, '5b85847bbe794', '5b85857d917d6', 'Which of the following function convert an integer to an unicode character in python?', 4, 4),
(8, '5b85847bbe794', '5b85857db810f', 'Which of the following function returns a random item from a list, tuple, or string?', 4, 5),
(9, '5ff093a092987', '5ff093cbed51c', '1', 4, 1),
(10, '5ff093a092987', '5ff093cccde2e', '2', 4, 2),
(11, '5ff093a092987', '5ff093cd30920', '3', 4, 3),
(12, '5ff0946e2dafb', '5ff094a283ece', '1', 4, 1),
(13, '5ff0946e2dafb', '5ff094a354352', '2', 4, 2),
(14, '5ff0946e2dafb', '5ff094a4211fb', '3', 4, 3),
(15, '5ff0946e2dafb', '5ff094a554bd2', '4', 4, 4),
(16, '5ff09b01da5e6', '5ff09b2b5d37d', '1', 4, 1),
(17, '5ff09b01da5e6', '5ff09b2c33293', '2', 4, 2),
(18, '5ff09b01da5e6', '5ff09b2cb2c1c', '3', 4, 3),
(19, '5ff09b01da5e6', '5ff09b2ddb594', '4', 4, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quiz`
--

CREATE TABLE `quiz` (
  `id` int(100) NOT NULL,
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `correct` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `quiz`
--

INSERT INTO `quiz` (`id`, `eid`, `title`, `correct`, `wrong`, `total`, `time`, `date`, `status`) VALUES
(2, '5b85847bbe794', 'Python', 3, 1, 5, 2, '2018-08-29 10:40:38', 'enabled'),
(3, '5ff093a092987', 'B1', 10, 0, 3, 3, '2021-01-02 15:40:02', 'enabled'),
(4, '5ff0946e2dafb', 'B2', 10, 2, 4, 3, '2021-01-02 15:43:36', 'enabled'),
(5, '5ff09b01da5e6', 'B2', 10, 2, 4, 4, '2021-01-02 16:11:29', 'enabled');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rank`
--

CREATE TABLE `rank` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `rank`
--

INSERT INTO `rank` (`id`, `username`, `score`, `time`) VALUES
(1, 'pravin', 3, '2018-08-29 10:37:59'),
(2, 'mugunth', 11, '2018-08-29 10:39:42'),
(3, 'mung', 4, '2021-01-02 16:31:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `upload`
--

CREATE TABLE `upload` (
  `id` text NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `size` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `txt` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `upload`
--

INSERT INTO `upload` (`id`, `name`, `date`, `size`, `txt`) VALUES
('5feb05bd363ae', 'Nguyen-Khac-Mung.xlsx', '2020-12-29 16:02:29', '289.70 KB', 'xlsx'),
('5feb05cbd94fb', 'Untitle.png', '2020-12-29 16:02:43', '4.53 KB', 'png'),
('5feb05d053b8e', 'NguyenKhacMung.docx', '2020-12-29 16:02:48', '131.23 KB', 'docx'),
('5feb387598141', 'yeu cau tuyen dung.docx', '2020-12-29 19:38:53', '100.27 KB', 'docx'),
('5ff0ac3b6c41e', 'BÁO-CÁO-STRUTS2 (2).docx', '2021-01-03 00:24:11', '1.15 MB', 'docx'),
('5ff0ac476e6b1', 'BÁO-CÁO-STRUTS2 (1).docx', '2021-01-03 00:24:23', '1.15 MB', 'docx'),
('5ff0ac4eb1c3f', 'TOPICS FOR.pptx', '2021-01-03 00:24:30', '1.76 MB', 'pptx'),
('5ff0ac57453c5', 'Test-requirement.docx', '2021-01-03 00:24:39', '18.50 KB', 'docx');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rollno` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phno` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `rollno`, `branch`, `gender`, `username`, `phno`, `password`) VALUES
(4, 'Kadhamburi', '732116104026', 'ECE', 'M', 'kadhu', 9887661361, 'b59c67bf196a4758191e42f76670ceba'),
(3, 'Kiran', '732116104022', 'CSE', 'M', 'kiran', 9876543212, 'b59c67bf196a4758191e42f76670ceba'),
(2, 'Mugunthan', '732116104036', 'CSE', 'M', 'mugunth', 9514444471, 'b59c67bf196a4758191e42f76670ceba'),
(6, 'Mung', '12345', 'CSE', 'M', 'mung', 123456, '202cb962ac59075b964b07152d234b70'),
(5, 'Pravin', '732116104049', 'CSE', 'M', 'pravin', 8769891099, 'c86da2729ab8f79d8f582e9abc469eb0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_answer`
--

CREATE TABLE `user_answer` (
  `id` int(100) NOT NULL,
  `qid` varchar(50) NOT NULL,
  `ans` varchar(50) NOT NULL,
  `correctans` varchar(50) NOT NULL,
  `eid` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user_answer`
--

INSERT INTO `user_answer` (`id`, `qid`, `ans`, `correctans`, `eid`, `username`) VALUES
(1, '58027e82e62e3', '58027e82f2412', '58027e82f2412', '5802790f793b1', 'sonudoo'),
(2, '58027e833dd54', '58027e8347514', '58027e8347514', '5802790f793b1', 'sonudoo'),
(3, '58027e8371483', '58027e838f19a', '58027e838f19a', '5802790f793b1', 'sonudoo'),
(4, '5b85857d00f34', '5b85857d0af5f', '5b85857d0ab77', '5b85847bbe794', 'pravin'),
(5, '5b85857d333f0', '5b85857d389e2', '5b85857d391b2', '5b85847bbe794', 'pravin'),
(6, '5b85857d59559', '5b85857d69efd', '5b85857d69efd', '5b85847bbe794', 'pravin'),
(7, '5b85857d917d6', '5b85857d97980', '5b85857d97980', '5b85847bbe794', 'pravin'),
(8, '5b85857db810f', '5b85857dbdae9', '5b85857dbd701', '5b85847bbe794', 'pravin'),
(9, '5b85857d00f34', '5b85857d0ab77', '5b85857d0ab77', '5b85847bbe794', 'mugunth'),
(10, '5b85857d333f0', '5b85857d391b2', '5b85857d391b2', '5b85847bbe794', 'mugunth'),
(11, '5b85857d59559', '5b85857d69efd', '5b85857d69efd', '5b85847bbe794', 'mugunth'),
(12, '5b85857d917d6', '5b85857d97980', '5b85857d97980', '5b85847bbe794', 'mugunth'),
(13, '5b85857db810f', '5b85857dbded1', '5b85857dbd701', '5b85847bbe794', 'mugunth'),
(14, '5b85857d00f34', '5b85857d0ab77', '5b85857d0ab77', '5b85847bbe794', 'mung'),
(15, '5b85857d333f0', '5b85857d391b2', '5b85857d391b2', '5b85847bbe794', 'mung'),
(16, '5b85857d917d6', '5b85857d97d68', '5b85857d97980', '5b85847bbe794', 'mung'),
(17, '5b85857db810f', '5b85857dbe2b9', '5b85857dbd701', '5b85847bbe794', 'mung'),
(18, '5ff093cbed51c', '5ff093cc15727', '5ff093cc15727', '5ff093a092987', 'mung'),
(19, '5ff093cccde2e', '5ff093cce3a0e', '5ff093cce3a0b', '5ff093a092987', 'mung'),
(33, '5ff09b2b5d37d', '5ff09b2b79b7a', '5ff09b2b79b7a', '5ff09b01da5e6', 'mung'),
(34, '5ff09b2c33293', '5ff09b2c52000', '5ff09b2c52000', '5ff09b01da5e6', 'mung'),
(35, '5ff09b2ddb594', '5ff09b2de65e1', '5ff09b2de65e5', '5ff09b01da5e6', 'mung');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `quiz`
--
ALTER TABLE `quiz`
  ADD UNIQUE KEY `id` (`id`);

--
-- Chỉ mục cho bảng `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Chỉ mục cho bảng `user_answer`
--
ALTER TABLE `user_answer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `history`
--
ALTER TABLE `history`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `options`
--
ALTER TABLE `options`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT cho bảng `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `rank`
--
ALTER TABLE `rank`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `user_answer`
--
ALTER TABLE `user_answer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
