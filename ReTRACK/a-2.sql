-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 11, 2018 at 12:07 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a`
--

-- --------------------------------------------------------

--
-- Table structure for table `educationbg`
--

DROP TABLE IF EXISTS `educationbg`;
CREATE TABLE IF NOT EXISTS `educationbg` (
  `educ_id` int(11) NOT NULL AUTO_INCREMENT,
  `Alumni_id` int(11) NOT NULL,
  `baccalaureate_reason` varchar(255) NOT NULL,
  `grad_study_reason` varchar(255) NOT NULL,
  `scholarship` varchar(255) NOT NULL,
  `name_of_exam` varchar(255) NOT NULL,
  `date_taken` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `training_seminar_title` varchar(255) NOT NULL,
  `place_of_training_seminar` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `emp_status` varchar(255) NOT NULL,
  `fetch_id` varchar(50) NOT NULL,
  PRIMARY KEY (`educ_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educationbg`
--

INSERT INTO `educationbg` (`educ_id`, `Alumni_id`, `baccalaureate_reason`, `grad_study_reason`, `scholarship`, `name_of_exam`, `date_taken`, `rating`, `training_seminar_title`, `place_of_training_seminar`, `date`, `emp_status`, `fetch_id`) VALUES
(12, 25, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', '25'),
(11, 26, 'Good grades in high school in subjects related to the degree ,Influence of parents or relatives', ' asdasdasdasd', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', '26'),
(10, 25, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', '25'),
(9, 25, ' ', ' asdasdasdas', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 'Employed', '25'),
(7, 25, '1', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 'Employed', '25'),
(8, 21, 'Good grades in high school in subjects related to the degree ,Influence of parents or relatives, Peer influence,Inspired by a role model,Passion for the profession', 'For employment', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 'Employed', '21'),
(13, 27, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', '27');

-- --------------------------------------------------------

--
-- Table structure for table `general_info`
--

DROP TABLE IF EXISTS `general_info`;
CREATE TABLE IF NOT EXISTS `general_info` (
  `Alumni_id` int(11) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Middle_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `address_current` varchar(255) NOT NULL,
  `address_permanent` varchar(255) NOT NULL,
  `Mobile_num` varchar(255) NOT NULL,
  `Tel_num` varchar(255) NOT NULL,
  `Email_add` varchar(255) NOT NULL,
  `Birth_date` varchar(255) NOT NULL,
  `Age` varchar(255) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `idnumber` varchar(50) NOT NULL,
  PRIMARY KEY (`Alumni_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_info`
--

INSERT INTO `general_info` (`Alumni_id`, `First_name`, `Middle_name`, `Last_name`, `status`, `Gender`, `address_current`, `address_permanent`, `Mobile_num`, `Tel_num`, `Email_add`, `Birth_date`, `Age`, `batch`, `idnumber`) VALUES
(27, 'Sadam', 'Miller', 'Lastimosa', 'Single', 'Male', 'Sual, Pangasinan', 'Sual, Pangasinan', '0908534268', '5402030', 'sadam@gmail.com', '1998-05-03', '22', '2018', '15-LN-01218'),
(21, 'Joshua', '', '', 'Status', 'Male', '', '', '', '', '', '', '', '2010', '14-LN-1485'),
(26, '', '', '', 'Status', 'Male', '', '', '', '', '', '', '', '2010', '14-LN-1484'),
(25, 'Moy ', 'Palinar', 'Vargas', 'Single', 'Female', 'Magtaquing', 'we', '123', '09090909', '090909', '2222-02-22', '22', '2222', '14-LN-1486');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `user_ids` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `default_password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_ids`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_ids`, `username`, `password`, `default_password`) VALUES
(15, 'john', '$2y$10$i0plnWo1Tn56QOd/3BCH2O4/kHjQ0O3r426c4blhTJ78NNAcpUEDa', 'sheena'),
(16, 'one', '$2y$10$GAb8EZP.HHzco9LXoLdzc.X4XR.Z7YzHl3QFgH0PAlSUJCiZ0eX3O', 'one');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

DROP TABLE IF EXISTS `user_login`;
CREATE TABLE IF NOT EXISTS `user_login` (
  `user_ids` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `default_password` varchar(255) NOT NULL,
  `Alumni_id` varchar(50) NOT NULL,
  PRIMARY KEY (`user_ids`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`user_ids`, `username`, `password`, `default_password`, `Alumni_id`) VALUES
(21, 'one', '$2y$10$iUmtwbmyOyCmTeJrcd2I4.Db/kYG97Ta8JMEf7VTbT7MQ9J4/U4E.', 'one', '26'),
(22, 'orlie', '$2y$10$.mZ0KlCL1plbOYAg1aiA8u8UrRtn9cUSdSy8G0TpAs4shwrMqJipq', 'oliva', '26'),
(23, 'louie', '$2y$10$izDOnw/BFE75IxkbXPFhJOVEviaA.F6DHE3iVMkP8KLbkNL4R2CfC', 'bravo', '26'),
(24, 'nanadi', '$2y$10$846NkfKEGZP3MvxAc4szpuJL8p1V1C.tDKCML9e3wUv1f32fgQUv6', 'nanadi', '26'),
(25, 'moy', '$2y$10$fTHgC.n2PDhe4ywI.5d1ROy2Xe5EhdIKdwDQmGrQgyPv4RQlp0LDG', 'moymoys', '25'),
(26, 'john', '$2y$10$Te07rq2pcIhjcDIISuSzz.yWIk3BxrU0ExXlOYxlwMVPTJ1kwD0aa', 'louiebravo', '26'),
(27, '15-LN-01218', '$2y$10$rp/WdhhouDq/zZ0IVhN8xugpoRp0t6WfsJ0cH3xj7tKvWYSJGmdxC', '15-LN-01218', '27');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
