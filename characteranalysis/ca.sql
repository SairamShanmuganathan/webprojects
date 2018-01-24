-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2017 at 10:04 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ca`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `count` int(10) NOT NULL,
  `question` varchar(2000) NOT NULL,
  `opt1` varchar(100) NOT NULL,
  `opt2` varchar(100) NOT NULL,
  `opt3` varchar(100) NOT NULL,
  `opt4` varchar(100) NOT NULL,
  `ans` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`count`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `ans`) VALUES
(1, 'In a group, I like to ', 'Find a quiet corner.', 'Sit Silently', 'I would like to initiate myself', 'I like to draw attention to myself', ''),
(2, 'I am seen as more of', 'Remain Silent', 'Listener', 'Talker', 'Listen and Talk accordingly', ''),
(3, 'In discussion I tend to', 'Take more of a back seat initially', 'Sit Silently in  the discussion', 'Get involved straight away', 'Listen and react according to the situation', ''),
(4, 'I am Described as', 'Introvert', 'Reserved', 'Extrovert', 'Outgoing', ''),
(5, 'I tend to ', 'Keep things myself', 'Don\'t express at the right but will wait for the time', 'Say what I think never mind how others feel', 'Express thoughts in a very productive way', ''),
(6, 'I tend to prefer', 'Thinking a lot about me', 'Thinking how to work productively', 'Active ', 'Having energetic time with people', ''),
(7, 'I prefer', 'Sitting behind the four walls', 'Being all alone thinking creatively', 'Meeting new people', 'Going around and meeting new people and creating productive thoughts', ''),
(8, 'I prefer', 'Discussing a new, unconsidered issue', 'Never bother on other\'s issues', 'Minding my own work and my issues', 'Considering the others work and my work and the related issues', ''),
(9, 'I prefer', 'Being more reserved', 'Expressing only the important than being introvert', 'Very much extrovert', 'Being at the centre of things', ''),
(10, 'I work best with', 'Abstract ideas', 'Already proven Facts', 'Extraordinary Facts', 'Concrete facts', ''),
(11, 'I am ', 'Future oriented', 'Present enjoyable person', 'Thinking everything in a positive way', 'Practical man', ''),
(12, 'My way of approach is ', 'blindly speak out', 'Consider the issues and analyse solutions without considering the future impacts', 'Organise step-by-step information', 'Look at the whole picture and analyse them clearly', ''),
(13, 'I value more', 'The existing one', 'The familiar', 'The unknowns', 'The new trending', ''),
(14, 'I tend to adopt', 'A creative way of approach', 'A confused way', 'A Systematic path', 'Practical-What comes to me, I ll Face', ''),
(15, 'I prefer', 'Using uneffective methods', 'Using known facts', 'Creative thinking', 'Trying to implement a newer one', ''),
(16, 'I have', 'Thinking about the past', 'Thinking about the past and rectifying how to overcome it', 'All thinking both about future and present', 'Living in the present and working for the future', ''),
(17, 'I work best with', 'Theortical knowledge', 'Applying theortical to practical', 'Details and practical knowledge', 'Create new ideas and implement them', ''),
(18, 'I tend to prefer', 'Factual information', 'Original thought\r\n', 'Philosopher\'s thought', 'My own way of leading things', ''),
(19, 'I am seen as having a ', 'Unkind person', 'Kind person', 'Favorable to all', 'Practical person', ''),
(20, 'My focus tends to be', 'Me and mine only', 'Not considering others issue', 'Consider others issues', 'Doing my works and then considering the people\'s', ''),
(21, 'I would choose____ at critical situations', 'Lieing', 'Blame others', 'Arrange unreal situations', 'Tell truth and face situations', ''),
(22, 'I tend to prefer', 'My friends and relatives ambition', 'My seniors way of living in ambition', 'My parents ideas in ambition', 'Consider my ambition and work for it', ''),
(23, 'I prefer', 'Being a lonely person ', 'Accept the blame', 'Being thought of as a feeling person', 'Being a reasonable person', ''),
(24, 'I prefer', 'Helping others in expressing how alone they are', 'Giving company to the lonely person by not telling their loneliness', 'Help make understand their logical skills', 'Help make others explore their feelings', ''),
(25, 'I prefer', 'Using common sense', 'Using conviction to make decisions', 'Using Information and analysis them', 'Using information and find the exact reason to come out of the situation', ''),
(26, 'I tend to value', 'Motivation', 'Inspiration', 'Appreciation', 'Respect', ''),
(27, 'I prefer', 'Feeling people', 'Dishonest people', 'Honest people', 'Logical People', ''),
(28, 'I am most comfortable with', 'Keeping my options open', 'Analysing others decisions', 'Keeping extrovert', 'Make my own decisions getting advice from the elders', ''),
(29, 'I prefer to ', 'Plan', 'Work', 'Act', 'Execute', ''),
(30, 'I prefer my thought processes would be ', 'Quite confusing', 'Maendering', 'Good, but not planned ', 'Structured', ''),
(31, 'I prefer', 'Decisiveness', 'Adaptive', 'FLexible', 'Practical', ''),
(32, 'I tend to', 'Avoid setting schedules and deadlines', 'Never mind about the schedules and work on them', 'Consider the schedule and not implementing', 'Creating a schedule and stick on to it', ''),
(33, 'I prefer', 'Go without 0 preparation', 'Get nervous at the spot without preparation', 'Think at the spot', 'Prepare priorily and get ready atleast in the basic', ''),
(34, 'I prefer', 'Being free to do things in advance but do not know what for am I doing them', 'Doing things in advance but knowing what for it is', 'Being clear about what I am going to do', 'Prepare a plan on how to work with the future and present', ''),
(35, 'I make friends easily', 'Very rare', 'Rare', 'Easy', 'Happy go person and find friends where I go', ''),
(36, 'I worry about things', 'Very Rare', 'Rare', 'At some occasions', 'Often', ''),
(37, 'I believe in the importance of art', 'Strongly Disagree', 'Disagree', 'Agree', 'Strongly Agree', ''),
(38, 'I get angry easily', 'Very often', 'Often', 'Sometimes', 'Rare', ''),
(39, 'I experience my emotions intensely.', 'Very Rare', 'Rare', 'Sometimes', 'Often', ''),
(40, 'I prefer variety to routine.', 'Very Rare', 'Rare', 'Sometimes', 'Often', ''),
(41, 'I like to solve complex problems.', 'Very rare', 'Rare', 'Often ', 'Very Often', ''),
(42, 'I radiate joy.', 'At rare occasions', 'Sometimes', 'Often', 'Everytime', ''),
(43, 'I panic easily', 'Rare', 'Sometimes', 'Often', 'Very Often', ''),
(44, 'I trust others.', 'Rare', 'Very Rare', 'Often', 'Sometimes', ''),
(45, 'I would cheat on my Works.', 'Very Rare', 'Rare', 'Sometimes', 'Very often', ''),
(46, 'I make people feel welcome.', 'Rare', 'Often', 'Sometimes', 'Everytime', ''),
(47, 'I am easy to satisfy.', 'Rarely', 'Often', 'Sometimes', 'Everytime', ''),
(48, 'I dislike being the center of attention.', 'Rarely', 'Often', 'Sometimes', 'Everytime', ''),
(49, 'I complete tasks successfully.', 'Rarely', 'Often', 'Occasionally', 'Everytime', ''),
(50, 'I try to follow the rules.', 'Rarely', 'Occasionally', 'Sometimes', 'Everytime', ''),
(51, 'I go straight for the goal.', 'Never bother on the goal', 'Work On what is present', 'Future minded and working for it', 'Everytime', ''),
(52, 'I get chores done right away.', 'Never', 'Leave others do my job', 'DO some works and help', 'Everyday', ''),
(53, 'I avoid mistakes.', 'Everytime', 'Occasionally', 'Very Rare', 'Rare', ''),
(54, 'I fear for the worst.', 'Everytime', 'Occasionally', 'Often', 'Think in a positive way', ''),
(55, 'I do not get irritated easily.', 'Rarely', 'Very rare', 'Often', 'Everytime', ''),
(56, 'I dislike myself.', 'Everytime', 'SOmetimes', 'Often', 'Rarely', ''),
(57, 'I am afraid that I will do the wrong thing.', 'Everytime', 'Sometimes', 'Often', 'Never', ''),
(58, 'I don\'t know why I do some of the things I do.', 'Never thought of this', 'Sometimes I would think but never bother', 'Keep thinking always', 'Kept thinking and then finding apt solutions for it', ''),
(59, 'I become overwhelmed by events.', 'Rarely', 'Very often', 'Sometimes', 'Everytime', ''),
(60, 'I warm up quickly to others.', 'Rarely\r\n', 'Very Rare', 'Quickly', 'Everytime', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`count`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `count` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
