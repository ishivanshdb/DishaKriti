-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 03, 2019 at 09:29 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mssg` varchar(300) NOT NULL,
  `cdate` date NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ordrs`
--

CREATE TABLE IF NOT EXISTS `ordrs` (
  `myid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `addr` varchar(200) NOT NULL,
  `ordr` varchar(200) NOT NULL,
  `pr` varchar(20) NOT NULL,
  `sts` varchar(20) NOT NULL,
  `cdate` date NOT NULL,
  PRIMARY KEY (`myid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `ordrs`
--

INSERT INTO `ordrs` (`myid`, `uid`, `img`, `name`, `mobile`, `email`, `addr`, `ordr`, `pr`, `sts`, `cdate`) VALUES
(40, 4, 'img/50.jpg', 'Axis Institute Of Te', '7275934202', 'aaa@gmail.com', '105/696 Bhannana Purwa, Kalpi Road, Kanpur Nagar.', 'Basics of Python', 'Rs. 375', 'Dispatched', '2018-12-09'),
(39, 4, 'img/48.jpg', 'Shivansh Dubey', '8303557710', 'shivanshdb10@gmail.com', '105/696 Bhannana Purwa, Kalpi Road, Kanpur Nagar.', 'PHP Development', 'Rs. 150', 'Pending', '2018-12-09'),
(41, 7, 'img/52.jpg', 'Shivansh Dubey', '8303557710', 'shivanshdb10@gmail.com', '105/696 Bhannana Purwa, Kalpi Road, Kanpur Nagar.', 'Big Data Hadoop', 'Rs. 700', 'Pending', '2019-01-02'),
(36, 4, 'img/53.jpg', 'Shivansh Dubey', '8303557710', 'shivanshdb10@gmail.com', '105/696 Bhannana Purwa, Kalpi Road, Kanpur Nagar.', 'Cloud Computing', 'Rs. 550', 'Pending', '2018-12-08'),
(37, 6, 'img/52.jpg', 'Shivansh Dubey', '8303557710', 'shivanshdb10@gmail.com', '105/696 Bhannana Purwa, Kalpi Road, Kanpur Nagar.', 'Big Data Hadoop', 'Rs. 700', 'Pending', '2018-12-09'),
(38, 6, 'img/53.jpg', 'Shivansh Dubey', '8303557710', 'shivanshdb10@gmail.com', '105/696 Bhannana Purwa, Kalpi Road, Kanpur Nagar.', 'Cloud Computing', 'Rs. 550', 'Pending', '2018-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `des` varchar(150) NOT NULL,
  `pr` varchar(20) NOT NULL,
  `cdate` varchar(20) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `img`, `name`, `des`, `pr`, `cdate`) VALUES
(23, 'img/3.jpg', 'Complete CSS ', 'Course on Cascading Style Sheets', 'Rs. 250', '2018-11-16'),
(15, 'img/29.jpg', 'JavaScript', 'Best JS courses', 'Rs. 200', '2018-11-16'),
(16, 'img/35.jpg', 'PHP ', 'PHP training courses', 'Rs. 400', '2018-11-16'),
(13, 'img/12.jpg', 'HTML Course', 'Learn website framing', 'Rs. 200', '2018-11-16'),
(18, 'img/32.jpg', 'Blogger', 'Blogger course', 'Rs. 200', '2018-11-19'),
(2, 'img/20.jpg', 'CSS ', 'Learn Cascading Style', 'Rs. 200', '2018-11-16'),
(11, 'img/1.jpg', 'Photoshop', 'Best Photoshop training courses ', 'Rs. 100', '2018-11-16'),
(25, 'img/46.jpg', 'Advanced', 'JavaScrip Advanced Curses', 'Rs. 500', '2018-12-1'),
(26, 'img/25.jpg', 'Ad HTML ', 'Learn new HTML course', 'Rs. 300', '2018-11-10'),
(27, 'img/39.jpeg', 'Photoshop 7', 'Complete Adobe Photoshop Course', 'Rs. 400', '2018-11-16'),
(28, 'img/34.jpg', 'HTML 5', 'A Complete Course for HTML 5', 'Rs. 300', '2018-11-16'),
(40, 'img/3.jpg', 'CSS Course', 'Complete CSS 3 Course', 'Rs. 300', '2018-11-16'),
(41, 'img/40.jpg', 'Big Data Analytics', 'Complete Big Data Analysis ', 'Rs. 500', '2018-12-08'),
(42, 'img/41.jpg', 'React Native', 'Full Stack Development in React', 'Rs. 400', '2018-12-08'),
(43, 'img/42.jpg', 'Machine Learning', 'A Course in Machine Learning', 'Rs. 450', '2018-12-08'),
(44, 'img/43.jpg', 'Artificial Intelligence ', 'Complete AI Course', 'Rs. 600', '2018-12-08'),
(45, 'img/44.jpg', 'IOS Development', 'Become an IOS Developer', 'Rs. 500', '2018-12-08'),
(46, 'img/45.jpg', 'Android', 'Learn Android Development', 'Rs. 550', '2018-12-08'),
(47, 'img/46.jpg', 'Learning R Programming', 'Learn R Programming', 'Rs. 300', '2018-12-08'),
(48, 'img/47.jpg', 'Big Data', 'Big Data Course', 'Rs. 525', '2018-12-08'),
(49, 'img/48.jpg', 'PHP Development', 'BEcome a PHP Developer', 'Rs. 150', '2018-12-08'),
(50, 'img/49.jpg', 'Ruby on Rails', 'Programming of Ruby on Rails', 'Rs. 425', '2018-12-08'),
(51, 'img/50.jpg', 'Basics of Python', 'Learn Python', 'Rs. 375', '2018-12-08'),
(52, 'img/51.jpg', 'Kivy', 'Learn Kivy Framework', 'Rs. 275', '2018-12-08'),
(53, 'img/52.jpg', 'Big Data Hadoop', 'Big Data with Hadoop', 'Rs. 700', '2018-12-08'),
(54, 'img/53.jpg', 'Cloud Computing', 'A complete course on cloud computing', 'Rs. 550', '2018-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(15) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `joining_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `joining_date`) VALUES
(1, 'admin', 'admin@example.com', 'admin123', '2017-10-15 11:33:28'),
(6, 'SH', 'EXAMPLE@123.COM', '123456', '2018-12-09 15:30:27'),
(7, 'irishabh007', 'irishabh007@gmail.com', 'iSHUKLA@007', '2019-01-02 09:59:57'),
(4, 'aaa', 'aaa@gmail.com', 'abc123', '2018-12-08 10:01:52'),
(5, 'bbb', 'bbb@gmail.com', 'aaaaaa', '2018-12-08 10:02:30');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
