-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2018-03-20 08:47:26
-- 服务器版本： 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jiudian`
--

-- --------------------------------------------------------

--
-- 表的结构 `fangjian`
--

CREATE TABLE `fangjian` (
  `huangguan` int(11) NOT NULL,
  `huanle` int(11) NOT NULL,
  `xiuxian` int(11) NOT NULL,
  `linhai` int(11) NOT NULL,
  `zhoushan` int(11) NOT NULL,
  `haijing` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `fangjian`
--

INSERT INTO `fangjian` (`huangguan`, `huanle`, `xiuxian`, `linhai`, `zhoushan`, `haijing`) VALUES
(8, 8, 4, 2, 4, 8);

-- --------------------------------------------------------

--
-- 表的结构 `pic`
--

CREATE TABLE `pic` (
  `id` int(11) NOT NULL,
  `src` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `pic`
--

INSERT INTO `pic` (`id`, `src`) VALUES
(6, '屏幕快照 2017-12-27 下午3.24.35.png'),
(7, '屏幕快照 2017-12-27 下午3.24.35.png');

-- --------------------------------------------------------

--
-- 表的结构 `pinglun`
--

CREATE TABLE `pinglun` (
  `id` int(11) NOT NULL,
  `words` varchar(30) NOT NULL,
  `user` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `pinglun`
--

INSERT INTO `pinglun` (`id`, `words`, `user`) VALUES
(8, 'dsafas', '123'),
(9, 'fdsafdasfdsaewqr', '123'),
(10, 'fdsafdasewqr', '123'),
(11, '大撒风大撒发的是', '123');

-- --------------------------------------------------------

--
-- 表的结构 `user_money`
--

CREATE TABLE `user_money` (
  `id` int(11) NOT NULL,
  `user` varchar(12) NOT NULL,
  `money` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user_money`
--

INSERT INTO `user_money` (`id`, `user`, `money`) VALUES
(1, '123', 3333);

-- --------------------------------------------------------

--
-- 表的结构 `vip`
--

CREATE TABLE `vip` (
  `id` int(11) NOT NULL,
  `user` varchar(11) NOT NULL,
  `mima` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `vip`
--

INSERT INTO `vip` (`id`, `user`, `mima`) VALUES
(8, '123', 'vip');

-- --------------------------------------------------------

--
-- 表的结构 `weizhifu`
--

CREATE TABLE `weizhifu` (
  `id` int(11) NOT NULL,
  `yonghu` char(12) CHARACTER SET utf8 NOT NULL,
  `hotel` text CHARACTER SET utf8 NOT NULL,
  `date` date NOT NULL,
  `tianshu` text CHARACTER SET utf8 NOT NULL,
  `chengren` int(11) NOT NULL,
  `xiaohai` int(11) NOT NULL,
  `zhifu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `weizhifu`
--

INSERT INTO `weizhifu` (`id`, `yonghu`, `hotel`, `date`, `tianshu`, `chengren`, `xiaohai`, `zhifu`) VALUES
(14, '123', '欢乐假日酒店', '2018-03-19', '2', 2, 2, 520),
(15, '123', '临海假日酒店', '2018-03-20', '2', 2, 2, 620),
(16, '123', '休闲假日酒店', '0000-00-00', '3', 21, 1, 321);

-- --------------------------------------------------------

--
-- 表的结构 `yiwancheng`
--

CREATE TABLE `yiwancheng` (
  `id` int(11) NOT NULL,
  `yonghu` char(12) CHARACTER SET utf8 NOT NULL,
  `hotel` text CHARACTER SET utf8 NOT NULL,
  `tianshu` text CHARACTER SET utf8 NOT NULL,
  `date` date NOT NULL,
  `chengren` int(11) NOT NULL,
  `xiaohai` int(11) NOT NULL,
  `zhifu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `yiwancheng`
--

INSERT INTO `yiwancheng` (`id`, `yonghu`, `hotel`, `tianshu`, `date`, `chengren`, `xiaohai`, `zhifu`) VALUES
(1, '123', '皇冠假日酒店', '3', '2018-03-13', 2, 2, 331),
(4, '123', '舟山假日酒店', '2', '0000-00-00', 1, 1, 455);

-- --------------------------------------------------------

--
-- 表的结构 `yonghu`
--

CREATE TABLE `yonghu` (
  `id` int(11) NOT NULL,
  `zhanghao` char(12) NOT NULL,
  `mima` char(12) NOT NULL,
  `phone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `yonghu`
--

INSERT INTO `yonghu` (`id`, `zhanghao`, `mima`, `phone`) VALUES
(1, '123', '123', '10');

-- --------------------------------------------------------

--
-- 表的结构 `yuding`
--

CREATE TABLE `yuding` (
  `id` int(11) NOT NULL,
  `yonghu` char(12) CHARACTER SET utf8 NOT NULL,
  `hotel` text CHARACTER SET utf8 NOT NULL,
  `date` date NOT NULL,
  `tianshu` text CHARACTER SET utf8 NOT NULL,
  `chengren` int(11) NOT NULL,
  `xiaohai` int(11) NOT NULL,
  `zhifu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `yuding`
--

INSERT INTO `yuding` (`id`, `yonghu`, `hotel`, `date`, `tianshu`, `chengren`, `xiaohai`, `zhifu`) VALUES
(1, '123', '皇冠假日酒店', '2018-03-21', '5', 2, 2, 331),
(2, '123', '皇冠假日酒店', '2018-03-06', '2', 1, 3, 320),
(4, '32', '皇冠假日酒店', '2018-03-13', '1', 3, 2, 555);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pic`
--
ALTER TABLE `pic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinglun`
--
ALTER TABLE `pinglun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_money`
--
ALTER TABLE `user_money`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vip`
--
ALTER TABLE `vip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weizhifu`
--
ALTER TABLE `weizhifu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `yiwancheng`
--
ALTER TABLE `yiwancheng`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yonghu`
--
ALTER TABLE `yonghu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yuding`
--
ALTER TABLE `yuding`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `pic`
--
ALTER TABLE `pic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- 使用表AUTO_INCREMENT `pinglun`
--
ALTER TABLE `pinglun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- 使用表AUTO_INCREMENT `user_money`
--
ALTER TABLE `user_money`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `vip`
--
ALTER TABLE `vip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- 使用表AUTO_INCREMENT `weizhifu`
--
ALTER TABLE `weizhifu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- 使用表AUTO_INCREMENT `yiwancheng`
--
ALTER TABLE `yiwancheng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `yonghu`
--
ALTER TABLE `yonghu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `yuding`
--
ALTER TABLE `yuding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
