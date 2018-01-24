-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2017 at 11:03 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mq`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `count` int(10) NOT NULL AUTO_INCREMENT,
  `question` varchar(10000) NOT NULL,
  `opt1` varchar(100) NOT NULL,
  `opt2` varchar(100) NOT NULL,
  `opt3` varchar(100) NOT NULL,
  `opt4` varchar(100) NOT NULL,
  `ans` varchar(100) NOT NULL,
  PRIMARY KEY (`count`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`count`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `ans`) VALUES
(1, 'What is the next prime number after 7?', '10', '11', '8', '7', '11'),
(2, 'The perimeter of a circle is also known as what?', 'Circumference', 'Area', 'Square of area', 'None', 'Circumference'),
(3, '65 – 43 = ?', '21', '42', '22', '46', '22'),
(4, 'True or false? A convex shape curves outwards', 'True', 'False', 'Partially True', 'Partially False', 'True'),
(5, 'What does the square root of 144 equal?', '13', '12', '15', '11', '12'),
(6, 'True or false? Pi can be correctly written as a fraction.', 'True', 'False', 'Partially True', 'Partially False', 'False'),
(7, 'What comes after a million, billion and trillion?', 'tetramillion', 'quadrillion', 'tetrabillion', 'quadbillion', 'quadrillion'),
(8, '52 divided by 4 equals what?', '13', '15', '14', '12', '13'),
(9, 'What is the bigger number, a googol or a billion?', 'googol', 'billion', 'both', 'none', 'googol'),
(10, 'True or false? Opposite angles of a parallelogram are equal.', 'True', 'False', 'Partially True', 'Partially False', 'True'),
(11, '87 + 56 = ?', '143', '144', '141', '140', '143'),
(12, 'How many sides does a nonagon have?', 'eight', 'seven', 'nine', 'six', 'nine'),
(13, 'True or false? -2 is an integer.', 'True', 'False', 'Partially True', 'Partially False', 'True'),
(14, 'What is the next number in the sequence: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, ?', '53', '57', '55', '58', '55'),
(15, '7 x 9 = ?', '64', '63', '66', '65', '63'),
(16, 'True or false? In an isosceles triangle all sides are unequal.', 'True', 'False', 'Partially True', 'Partially False', 'True'),
(17, 'In statistics, the middle value of an ordered set of values is called what?', 'Median', 'Mode', 'Average', 'Mean', 'Median'),
(18, 'What does 3 squared equal?', '27', '8', '9', '17', '9'),
(19, 'True or false? -4 is a natural number.', 'True', 'False', 'Partially True', 'Partially False', 'False'),
(20, '5 to the power of 0 equals what?', '1', '5', '0', 'none', '1');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `count` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) NOT NULL,
  `points` int(10) NOT NULL,
  PRIMARY KEY (`count`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
