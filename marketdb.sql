SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


-- Database: `marketdb`

DROP DATABASE IF EXISTS marketdb;
CREATE DATABASE marketdb;
USE marketdb;


DROP TABLE IF EXISTS `user`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_fname` varchar(255) NOT NULL,
  `user_lname` varchar(255) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_phone` int(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  -- `user_photo` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `users` VALUES(
  1,'Liym-ntai', 'Ray', 'doalex4668@gmail.com', 670061463, '123', '20220712_133727.jpg'
);

DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(50) NOT NULL,
  `post_price` int(15) NOT NULL,
  `post_town` varchar(30) NOT NULL,
  `post_address` varchar(30) NOT NULL,
  `post_condition` varchar(10) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `post_user_email` varchar(50) NOT NULL,
  `post_image` text NOT NULL,
  `post_description` text NOT NULL
   PRIMARY KEY(`post_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  PRIMARY KEY(`cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


INSERT INTO `category` VALUES
(10, 'Cars'),
(11, 'Electrical'),
(12, 'PC'),
(13, 'Smartphone'),
(14, 'Housing and Renting'),
(15, 'Clothing');

DROP TABLE IF EXISTS `notification`;
CREATE TABLE `notification` (
  `note_id` int(11) NOT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `reciever_id` int(11) DEFAULT NULL,
  `post_id` int(11) NOT NULL,
  `note_date` timestamp NOT NULL DEFAULT current_timestamp(),
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
