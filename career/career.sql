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
-- Database: `career`
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
(1, 'Keep my thoughts to myself.', 'Very Inaccurate, not like me at all.', 'Moderately inaccurate, not like me.', 'Moderately accurate, like me.', 'Very accurate, much like me.', ''),
(2, 'Am the life of the party.', 'Very Inaccurate, not like me at all.', 'Moderately inaccurate, not like me', 'Moderately accurate, like me', 'Very accurate, much like me', ''),
(3, 'Talk to a lot of different people at parties.', 'Very Inaccurate, not like me at all.', 'Moderately inaccurate, not like me.', 'Moderately accurate, like me.', 'Very accurate, much like me.', ''),
(4, 'Which seems to be more natural and satisfying', 'Frequent periods of quiet and concentration by yourself ', 'Extroverted', 'Private concern on issues', 'Frequent socializing and interaction with others ', ''),
(5, 'Choose the best word that describes you the most', 'Extrovert', 'Private', 'Exotic', 'Extrovert', ''),
(6, 'Are you drawn more work that deals with', 'Possibilities', 'Imaginations', 'Creativeness', 'Realities', ''),
(7, 'You would describe yourself as', 'Questioning', 'Motivating', 'Appreciating', 'Practical', ''),
(8, 'If you fix deadlines, what is your view on deadlines', 'No need such', 'Needed if essential', 'SOmetimes', 'Everytime', ''),
(9, 'You make decisions by', 'Asking others view', 'Get to know what the others decision are', 'Start accepting your parents decision', 'Make my own decision', ''),
(10, 'Do you read directions', 'Never', 'Sometimes', 'Often', 'EVerytime', ''),
(11, 'What would you tell about others', 'Talk back about others', 'Never mind others', 'Tell them the wrong among the crowd', 'Calling them alone and expressing their wrong', ''),
(12, 'Do you tend to more persuaded by', 'Facts', 'Data', 'Enthusiasm', 'Sin1cereity', ''),
(13, 'When conducting business,you are more formal with', 'Formal speech', 'Just a smile', 'Handshake', 'A formal entity', ''),
(14, 'WHat do you do in your leisure time', 'Music', 'Sleeping', 'Reading', 'Sports', ''),
(15, 'How you view your life', 'Literal', 'Boring', 'Appreciative', 'Practical', ''),
(16, 'During conversations with associates how would you react', 'Act too much', 'Act like you know everything', 'Act like I know something', 'Act like I dont know anything even if I know', ''),
(17, 'Are you more likely to conduct a meeting that is', 'Improper', 'PLanned but not to the executable level', 'Planned and can be implemented', 'Implementing and finding the best results out of it.', ''),
(18, 'At work are you more naturally inclined to focus on the', 'Here and now', 'Present and Past', 'Present and Future', 'Only Future', ''),
(19, 'In a meeting you are apt to', 'Hold your tongue and Listen', 'Remain silent forever', 'GO get people\'s attention', 'SPeak up', ''),
(20, '\r\nyou have the tendency to', '\r\nTake action first ', 'Discuss and ask questions first', 'Plan First', 'Implement the plan', ''),
(21, 'Others generally consider you to be more', 'Private', 'Introvert', 'Extrovert', 'OUTgoing', ''),
(22, 'You tend to be more', 'Easy going', 'Free spirited', 'Serious', 'Self-Disciplined', ''),
(23, 'When faced with a challenge in the work, you rely on', 'Instinct on it', 'Try to overcome them', 'Tell reasons', 'Experience to get through it', ''),
(24, 'You consider yourself a person that likes to focus on', 'What is ', 'What happened', 'What would have happen', 'All', ''),
(25, 'When meeting with others are you more likely to', 'Draw up a conclusion ', 'Gather information about the people priorily and compare yourself', 'Gaather some knowledge after the meet', 'GAther information priorily', ''),
(26, 'At a business function with many strangers, would you most likely', 'Sit alone', 'Mingle with selected gang', 'Mingle with few', 'Mingle with all', ''),
(27, 'You view yourself as', 'Animated ', 'Contained', 'Composed', 'Spirited', ''),
(28, 'you welcome work that', 'Firmly grounded with today', 'Doesnt matter the opportunities, matters only interest', 'Keep searching for the opportunities', 'Plan what would be my profit out of it and decide what to do', ''),
(29, 'you would more likely compliment someone for their', 'Apology', 'Sorrow', 'Insight', 'Compassion', ''),
(30, 'In general, You are more', 'Soft hearted', 'Skilled', 'Goal Oriented', 'Strong willed', ''),
(31, 'In a group of new co-workers are you initially inclined to', 'Only Observe', 'Keep Yourself a distinct position and stay there forever not involving', 'Jump and get involved', 'Drag others attention', ''),
(32, 'Choose the word that describes you the most', 'Structured ', 'Flexible', 'Practical', 'Tactical', ''),
(33, 'With unfamiliar colleagues are you more prone to', 'Mind my own business', 'Try to start up a conversation', 'Try catching their attraction', 'Help them', ''),
(34, 'What is more satisfying at work', 'Planning', 'Action', 'Going with the flow', 'Organising', ''),
(35, 'Do you generally prefer making day to day decisions', 'Often', 'Rare', 'Sometimes', 'Everytime', ''),
(36, 'How do you think and speak in terms of', 'Facts', 'Data', 'Generalities', 'Specifics', ''),
(37, 'It is a greater fault to', 'Lack reason', 'Lack knowing the issues', 'Lack feelings', 'Lack emotions', ''),
(38, 'Are you a person that is more inclined to', 'TO obey others Word though it would be wrong', 'Ask for many people and decide', 'Be in control', 'Be adaptable', ''),
(39, 'In your daily work routine do you find more comfort in', 'Sticking to somewhat similar tasks and routines', 'Doing the regular duties', 'Thinking Creatively', 'Regularly doing something very different ', ''),
(40, 'What is more enjoyable to you', 'Completing an existing project', 'Wishing new ideas from others', 'Creating a new idea', 'Creating a new idea and implementing them', ''),
(41, 'In general, do you have more of a tendency to be', 'Introspective', 'Up-front', 'Straight forward', 'Reflective', ''),
(42, 'Are you more content with your day when', 'You mostly allow it to unfold', 'You make different plans', 'You rely on different strategic and tactical plans', 'You make specific plans', ''),
(43, 'How do you find yourself', 'Feeling', 'Thinking', 'Creative', 'Implementive', ''),
(44, 'You consider the notions of a dreamer to be', 'A waste of time and energy unless there is a practical purpose ', 'A more Time wasting approach and their works are considered waste at last', 'Motivating', 'Inspirational and enlightening ', ''),
(45, 'Learn how the body functions.', 'Not Interested', 'Slightly Interested', 'Interested', 'Very Interested', ''),
(46, 'Conduct experiments and make observations.', 'Not Interested', 'Slightly Interested', 'Interested', 'Very Interested', ''),
(47, 'Advise people about healthy lifestyle habits.', 'Not Interested', 'Slightly Interested', 'Interested', 'Very Interested', ''),
(48, 'Learn how a business operates.', 'Not interested', 'Slightly Interested', 'Interested', 'Very interested', ''),
(49, 'Take care of people even strangers.', 'Not Interested', 'Interested', 'Slightly Interested', 'Very Interested', ''),
(50, 'Troubleshooting Technological Issues', 'Not interested', 'Slightly interested', 'Interested', 'Very Interested', ''),
(51, 'A career that takes less than 2 years of education', 'Not Interested', 'Interested', 'Slightly Inyterested', 'Very Interested', ''),
(52, 'Serve the community and keep it safe', 'Not interested', 'Slightly Interested', 'Interested', 'Very interested', ''),
(53, 'Help people during a natural disaster or emergency', 'Not Interested ', 'SLightly interested', 'Interested', 'Very Interested', ''),
(54, 'Ensure federal,state, and local laws are abided by', 'Not Interested', 'Slightly interested', 'Interested', 'Very Interested', ''),
(55, 'Supervise, hire and mentor others', 'Not Interested', 'Slightly Interested', 'Interested', 'Not interested', ''),
(56, 'Critique art,music or performance', 'Not interested', 'Slightly Interested', 'Interested', 'Very Interested', ''),
(57, 'Learn how to invest money', 'Not Interested ', 'Slightly interested', 'Interested', 'Very Interested', ''),
(58, 'Design works of art for others to enjoy.', 'Not Interested', 'Slightly Interested', 'Interested', 'Very Interested', ''),
(59, 'Teach people new skills', 'Not Interested ', 'Interested ', 'Slightly Interested', 'Very Interested', ''),
(60, 'Motivate and help others fulfill their goals', 'Not Interested', 'Slightly Interested', 'Interested', 'Very Interested', '');

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
