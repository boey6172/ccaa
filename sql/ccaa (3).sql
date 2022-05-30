-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2022 at 10:13 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccaa`
--
CREATE DATABASE IF NOT EXISTS `ccaa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ccaa`;

-- --------------------------------------------------------

--
-- Table structure for table `achievement`
--

CREATE TABLE `achievement` (
  `id` int(100) NOT NULL,
  `season` varchar(255) NOT NULL,
  `athlete` varchar(255) NOT NULL,
  `event_id` int(100) NOT NULL,
  `school` varchar(255) NOT NULL,
  `rank` varchar(255) NOT NULL,
  `crt_date` datetime(6) NOT NULL,
  `season_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `s_achievement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `highlight` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `event_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `season_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `athlete`
--

CREATE TABLE `athlete` (
  `id` int(100) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `suffix` varchar(45) DEFAULT NULL,
  `birthday` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `cnum` varchar(20) NOT NULL,
  `street` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `city_municipality` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `psa` varchar(255) DEFAULT NULL,
  `coe` varchar(255) DEFAULT NULL,
  `waiver` varchar(255) DEFAULT NULL,
  `cog` varchar(255) DEFAULT NULL,
  `medical` varchar(255) DEFAULT NULL,
  `gender` varchar(12) NOT NULL,
  `school` varchar(12) NOT NULL,
  `event_id` int(100) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `season_id` int(100) NOT NULL,
  `crt_date` datetime(6) DEFAULT NULL,
  `crt_by` char(36) DEFAULT NULL,
  `type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `athlete`
--

INSERT INTO `athlete` (`id`, `fname`, `mname`, `lname`, `suffix`, `birthday`, `email`, `cnum`, `street`, `barangay`, `city_municipality`, `province`, `psa`, `coe`, `waiver`, `cog`, `medical`, `gender`, `school`, `event_id`, `cat_id`, `season_id`, `crt_date`, `crt_by`, `type`) VALUES
(1, 'DANIEL MEYNARD', 'ABAO', 'MABUNGA', '', '1990-02-28', 'mabungadaniel@gmail.com', '123', 'asd', '123', '123', '123', '20220530230454278980132_531232188703787_8025402684577039245_n.jpg', NULL, NULL, NULL, NULL, '1', '1', 1, 1, 1, '2022-05-30 21:17:33.000000', '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 1),
(2, 'DANIEL MEYNARD', 'ABAO', 'MABUNGA', '', '2022-05-30', 'mabungadaniel@gmail.com', '1123', 'asd', '123', '123', '123', NULL, NULL, NULL, NULL, NULL, '1', '2', 1, 1, 1, '2022-05-30 21:19:31.000000', '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 0),
(3, 'Deanriel', 'Sia', 'Hernandez', '', '2222-02-05', 'g@gmail.com', '09095463923', 'Corregiddor st.', 'SMV', 'Calapan City', 'Oriental Mindoro', NULL, NULL, NULL, NULL, NULL, '1', '1', 1, 1, 1, '2022-05-30 21:41:49.000000', '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 0);

-- --------------------------------------------------------

--
-- Table structure for table `authassignment`
--

CREATE TABLE `authassignment` (
  `id` int(11) NOT NULL,
  `itemname` varchar(120) NOT NULL,
  `userid` char(36) NOT NULL,
  `bizrule` text NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authassignment`
--

INSERT INTO `authassignment` (`id`, `itemname`, `userid`, `bizrule`, `data`) VALUES
(1, 'rxAdmin', '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', '', ''),
(21, 'rxClient', '8a7075a7-969b-11e9-b5fb-201a06cad960', '', ''),
(23, 'school-co', 'b656f230-df27-11ec-8602-d45d644622db', '', ''),
(24, 'Co-Admin', '6d73fb2d-df38-11ec-8602-d45d644622db', '', ''),
(25, 'school-co', '6fbf08a2-df59-11ec-8602-d45d644622db', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `authitem`
--

CREATE TABLE `authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authitem`
--

INSERT INTO `authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
(' Auth Assignments Manager', 2, 'Manages Role Assignments. RBAM required role.', NULL, 'N;'),
('Auth Items Manager', 2, 'Manages Auth Items. RBAM required role.', NULL, 'N;'),
('Authenticated', 2, 'Default role for users that are logged in. RBAC default role.', 'return !Yii::app()->getUser()->getIsGuest();', 'N;'),
('Co-Admin', 2, NULL, NULL, NULL),
('Gii', 2, '', NULL, 'N;'),
('Gii:Default', 1, '', NULL, 'N;'),
('Gii:Default:Error', 0, '', NULL, 'N;'),
('Gii:Default:Index', 0, '', NULL, 'N;'),
('Gii:Default:Login', 0, '', NULL, 'N;'),
('Gii:Default:Logout', 0, '', NULL, 'N;'),
('Guest', 2, 'Default role for users that are not logged in. RBAC default role.', 'return Yii::app()->getUser()->getIsGuest();', 'N;'),
('RBAC Manager', 2, 'Manages Auth Items and Role Assignments. RBAM required role.', NULL, 'N;'),
('rxAdmin', 2, 'Site Administrator', NULL, 'N;'),
('rxClient', 2, 'Site Client', NULL, 'N;'),
('school-co', 2, NULL, NULL, NULL),
('Site', 1, '', NULL, 'N;'),
('Site:Captcha', 0, '', NULL, 'N;'),
('Site:CCaptchaAction', 0, '', NULL, 'N;'),
('Site:Contact', 0, '', NULL, 'N;'),
('Site:Error', 0, '', NULL, 'N;'),
('Site:Index', 0, '', NULL, 'N;'),
('Site:Login', 0, '', NULL, 'N;'),
('Site:Logout', 0, '', NULL, 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `authitemchild`
--

CREATE TABLE `authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authitemchild`
--

INSERT INTO `authitemchild` (`parent`, `child`) VALUES
('Authenticated', 'rxAdmin'),
('Gii', 'Gii:Default'),
('Gii:Default', 'Gii:Default:Error'),
('Gii:Default', 'Gii:Default:Index'),
('Gii:Default', 'Gii:Default:Login'),
('Gii:Default', 'Gii:Default:Logout'),
('RBAC Manager', ' Auth Assignments Manager'),
('RBAC Manager', 'Auth Items Manager'),
('rxAdmin', ' Auth Assignments Manager'),
('Site', 'Site:Captcha'),
('Site', 'Site:CCaptchaAction'),
('Site', 'Site:Contact'),
('Site', 'Site:Error'),
('Site', 'Site:Index'),
('Site', 'Site:Login'),
('Site', 'Site:Logout');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `event_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `event_id`) VALUES
(1, 'Sword and Dagger', 6),
(2, 'Men Individual', 2),
(3, 'Women Individual', 2),
(4, 'Mixed Pair', 2),
(5, 'Basketball Men', 5),
(6, 'Basketball Women', 5);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `crt_date` int(11) NOT NULL,
  `crt_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `name`, `crt_date`, `crt_by`) VALUES
(1, 'test', 2022, 573),
(2, 'Taekwondo', 2022, 573),
(3, 'Badminton', 2022, 573),
(4, 'Table Tennis', 2022, 573),
(5, 'Basketball', 2022, 573),
(6, 'Arnis', 2022, 573);

-- --------------------------------------------------------

--
-- Table structure for table `file_types`
--

CREATE TABLE `file_types` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_types`
--

INSERT INTO `file_types` (`id`, `name`) VALUES
(1, 'psa'),
(2, 'coe'),
(3, 'waiver'),
(4, 'cog'),
(5, 'medical');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id`, `name`) VALUES
(1, 'Male'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(100) NOT NULL,
  `user` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `crt_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user`, `action`, `crt_date`) VALUES
(1, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Created new Event', '2022-05-30'),
(2, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Created new Category', '2022-05-30'),
(3, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Created new School', '2022-05-30'),
(4, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Created new School', '2022-05-30'),
(5, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Created new Athlete', '2022-05-30'),
(6, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Created new School', '2022-05-30'),
(7, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Created new Athlete', '2022-05-30'),
(8, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Created new Athlete', '2022-05-30'),
(9, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Created new School', '2022-05-30'),
(10, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Created new Event', '2022-05-30'),
(11, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Created new Category', '2022-05-30'),
(12, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Created new Category', '2022-05-30'),
(13, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Created new Category', '2022-05-30'),
(14, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Created new Event', '2022-05-30'),
(15, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Created new Event', '2022-05-30'),
(16, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Created new Event', '2022-05-30'),
(17, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Created new Category', '2022-05-30'),
(18, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Created new Category', '2022-05-30'),
(19, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Created new Event', '2022-05-30'),
(20, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Updated Category', '2022-05-30'),
(21, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Created new School', '2022-05-30'),
(22, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Created new School', '2022-05-30'),
(23, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Updated School', '2022-05-30'),
(24, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Updated School', '2022-05-30'),
(25, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Updated School', '2022-05-30'),
(26, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Created new School', '2022-05-30'),
(27, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Created new Season event', '2022-05-30'),
(28, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Created new Season event', '2022-05-30'),
(29, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Created new Season event', '2022-05-30'),
(30, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Created new Season event', '2022-05-30'),
(31, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Created new Season event', '2022-05-30'),
(32, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Created new Season School', '2022-05-30'),
(33, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Created new Season School', '2022-05-30'),
(34, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Created new Season School', '2022-05-30'),
(35, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Created new Season School', '2022-05-30'),
(36, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Created new Season School', '2022-05-30'),
(37, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Created new Season School', '2022-05-30'),
(38, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Created new Schedule', '2022-05-30'),
(39, '573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'Updated Schedule', '2022-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(100) NOT NULL,
  `event_id` int(100) NOT NULL,
  `datetime_sched` varchar(12) DEFAULT NULL,
  `time` varchar(10) DEFAULT NULL,
  `cat_id` int(100) NOT NULL,
  `school_1` int(100) NOT NULL,
  `school_2` int(100) NOT NULL,
  `venue` varchar(100) NOT NULL,
  `season_id` int(100) NOT NULL,
  `crt_date` datetime(6) DEFAULT NULL,
  `crt_by` char(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `event_id`, `datetime_sched`, `time`, `cat_id`, `school_1`, `school_2`, `venue`, `season_id`, `crt_date`, `crt_by`) VALUES
(1, 5, '05/05/2022', '10:00 AM', 5, 1, 2, 'Calapan Pavillion', 2, '2022-05-30 22:11:00.000000', '573f2a83-498c-11e6-b7eb-40f02ff9b3e5');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `acr` varchar(10) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `crt_date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `name`, `acr`, `logo`, `address`, `crt_date`) VALUES
(1, 'Luna Goco Colleges', 'LGC', '20220530224809278980132_531232188703787_8025402684577039245_n.jpg', 'Lalud', '0000-00-00 00:00:00.000000'),
(2, 'Mindoro State University', 'MINSU', 'Minsu', 'Masipit ', '0000-00-00 00:00:00.000000'),
(3, 'City College of Calapan ', 'CCC', 'ccc', 'Guinubatan', '0000-00-00 00:00:00.000000'),
(4, 'Divine World College of Calapan', 'DWCC', 'DWCC', 'Infantado st.', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `seasons`
--

CREATE TABLE `seasons` (
  `id` int(100) NOT NULL,
  `number` int(100) NOT NULL,
  `theme` varchar(255) NOT NULL,
  `crt_date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seasons`
--

INSERT INTO `seasons` (`id`, `number`, `theme`, `crt_date`) VALUES
(1, 1, '1', '0000-00-00 00:00:00.000000'),
(2, 16, 'Fly As One', '0000-00-00 00:00:00.000000'),
(3, 17, 'We live as one', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `season_athlete`
--

CREATE TABLE `season_athlete` (
  `id` int(11) NOT NULL,
  `season` int(11) NOT NULL,
  `athlete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `season_athlete`
--

INSERT INTO `season_athlete` (`id`, `season`, `athlete`) VALUES
(1, 3, 1),
(2, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `season_event`
--

CREATE TABLE `season_event` (
  `id` int(11) NOT NULL,
  `event` int(11) NOT NULL,
  `season` int(11) NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `season_event`
--

INSERT INTO `season_event` (`id`, `event`, `season`, `category`) VALUES
(1, 2, 3, 2),
(2, 2, 3, 3),
(3, 2, 3, 4),
(4, 3, 3, 2),
(5, 4, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `season_school`
--

CREATE TABLE `season_school` (
  `id` int(11) NOT NULL,
  `season` int(11) NOT NULL,
  `school` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `season_school`
--

INSERT INTO `season_school` (`id`, `season`, `school`) VALUES
(1, 3, 1),
(2, 3, 2),
(3, 3, 3),
(4, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` char(36) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `profile_pic` longtext,
  `first_name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `department` varchar(36) NOT NULL,
  `is_activated` tinyint(1) NOT NULL DEFAULT '0',
  `school` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `profile_pic`, `first_name`, `surname`, `department`, `is_activated`, `school`) VALUES
('497f2b49-df59-11ec-8602-d45d644622db', 'testing', '$2y$13$32TKQxBfRgxeJONBBokwmeec4Ln1iDHkWJAC6h7Sr/Qwsesk5Qz4i', '9olF+UnK2AZ/TcMYYfiO1zc2QG3H7GJ/XIX6OLvnkz2oc60qavxbG9reoaTOEtAoh1+Mi8zJ2ekh6mFQJg4qIw==', NULL, 'gGfWkucYwBlmjhaIhXEgSkvqpEVBoezhbb3AB1rmZx+VwZFVISVdOcC9zoTTeqXbSKl+RRErD9QlXi1q+rmOow==', 'lBV+W2G+rdQs6j5FHGIYNtlto62N1Mg13d7u1PNU/hMTc1mg/18hPJAqjSo0szWLrHE5vPhSsW21VL0sbYTqwQ==', '', 1, NULL),
('573f2a83-498c-11e6-b7eb-40f02ff9b3e5', 'admin', '$2y$13$T6XEapAvpzQIRgQVvVAqO.kC6aXfwf/zydieBlJf8o6zBHiaBQX0i', 'SgdQQodASxXDiwREXFjOc+pyuqKpP1Sf91vTZ8KLkQe6671q3SIfeNrVxT2pBD3o5byijPlUI3XEQZoyNE6b/A==', 'data:image/png;base64,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', '2f78f4f8-d3b9-11e5-a3e3-00155d0a2909', 1, NULL),
('6d73fb2d-df38-11ec-8602-d45d644622db', 'coadmin', '$2y$13$8RkOcHl09hFvjrfsYAsrzuzWZCoQiy3Wcc4B/UTcNpofQ79YIMe1O', 'YOnOQCVMjs4xY2m3DNenYr/REbbR+e4cTHYHerXwozubPROr80cyosWMwwkjm/cgmbRmaqVDsXvnOqJdbVlIhQ==', NULL, '4B+GUnX8UKWPB8RY14RKcnQ9yHsPeal8zwHS/F0drgX5FQrNFHqqCT7++8MhJWhVj4xj5m+VrmDgE1uDhaSttA==', 'Y0s0RysisEjEIEFFF8yQhYsyw9AK1oVw+ML8K0J+0UkvGMUd13KLXi3dlBtZuu73CtHrU6ibyjnJPhAoaB8sDA==', '', 1, NULL),
('6fbf08a2-df59-11ec-8602-d45d644622db', 'test', '$2y$13$w84vh0KkfnpWQ8P5gH8xauUKngWrPbVFRrLREplNfgTu4OVsmGP.y', 'LeWmcqc8NTmNe2RsJw06NjvXQDwURHyodzp5Iq4iPdHPrwqXBaVTKMVt8FjmhUedk6kggSavT3KSxkmPWJcuSA==', NULL, 'X4uxsjNF4qibeU7NQnFaK07170doTXcrtz/YX+MWe+lp/L/4v212+L7fWgIFYG3seZEgPOrRsatdab3Z6Lfa+Q==', 'Gwdr8w/NeL3VhEy8OBZvmX7n6ntw40ULVnGHcPZ4OVLh/LE1kbCYiMSvpnmd4eP0+CDNevcxeAk2VaSPQsslAQ==', '', 1, NULL),
('8a7075a7-969b-11e9-b5fb-201a06cad960', 'daniel', '$2y$13$T6XEapAvpzQIRgQVvVAqO.kC6aXfwf/zydieBlJf8o6zBHiaBQX0i', 'NXWUBrx4i/pUGSbxBH8r0VJS5ANIuxlubWISespulRDPu5EBs9e5Z6fxIWF9zdZVGXDuYSpGagSKAmUrx7w/qA==', '', 'pnBdd12Rbwz1KyhrV8Mt3upjqC6Xk0Ggxlof/V5A6o/rDSkZMYhdx/6f/H4mWT2F8gbVDFaNQzge7xOmOaRNGA==', 'FLfz67QrYAKW9dLDoqDxeUAy5ulXNFleT6xynRIl1/BR3D2KISEVK3vU72xfRj4N8zXYEfQrOMvfpAyHtZ8qqg==', '2f78f4f8-d3b9-11e5-a3e3-00155d0a2909', 1, NULL),
('b656f230-df27-11ec-8602-d45d644622db', 'schoolco', '$2y$13$VurLDgozFKOo20MPL1aaru0Xe8YBIPEXsjbK.paSeufV5NLQsRjQW', 'AuLifH1YGUWZBrWYP3Jfv9amPoJHKvop+QW9etW/Lb8EdHK9ZXhXfNz1dhhuhzPPXYX9Lb5Y6uiVhEcTCMokMA==', NULL, 'wL23AYYQsmP4i41zXplPWH4ggbqiiCrCkrrSGZYeguM12/FDTZMwiW3iBg3XDNcxBgGGbPvFsp/9GMnhOF/xlQ==', 'AfmG9aDocm1bMi5BeTzBm8LwsyOAtQ4BeXRX2vWVmNtq/edA7NZ8BK0wmoncV3Dyn7BI0TEn8vkpKIo2AQXc/Q==', '', 1, 1),
('c78cac66-df57-11ec-8602-d45d644622db', 'testing', '$2y$13$TTuNe6NsqZx0Pc1CA9K4feTAWusLIYGtfagM5U1k.HETnwHYYQ8YO', 'KJG61GNa9SoB5AkEyhh7CwheVmiBnB/DfT3gQ8UnIZGuy2p8+yOHxZezQ48eaYWOvzS51BACYMZ5pShSlKJlZw==', NULL, '9qoTgs73qOz7gDhGJowol3bjYmiUz02/pxbSJ1gBWKYeeK5o63hkmig+GoTtZGPLt1bzvs8wZ3yFaYPJzBdzyg==', 'lcq17TLv7yoLDxllZ486xQ9Z2vJK1AMW4ek61hwAiV0BXWCpmIazJPNZr2jVRaoYbYtwzMWwK/vnCGm1IKskjg==', '', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(100) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `suffix` varchar(10) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `req_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `athlete`
--
ALTER TABLE `athlete`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authassignment`
--
ALTER TABLE `authassignment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `itemname` (`itemname`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `authitem`
--
ALTER TABLE `authitem`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `authitemchild`
--
ALTER TABLE `authitemchild`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_types`
--
ALTER TABLE `file_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seasons`
--
ALTER TABLE `seasons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `season_athlete`
--
ALTER TABLE `season_athlete`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `season_event`
--
ALTER TABLE `season_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `season_school`
--
ALTER TABLE `season_school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievement`
--
ALTER TABLE `achievement`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `athlete`
--
ALTER TABLE `athlete`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `authassignment`
--
ALTER TABLE `authassignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `file_types`
--
ALTER TABLE `file_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seasons`
--
ALTER TABLE `seasons`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `season_athlete`
--
ALTER TABLE `season_athlete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `season_event`
--
ALTER TABLE `season_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `season_school`
--
ALTER TABLE `season_school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
