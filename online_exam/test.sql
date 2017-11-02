-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2017 at 12:34 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `topic` varchar(20) NOT NULL,
  `questions` varchar(300) NOT NULL,
  `A` varchar(200) NOT NULL,
  `B` varchar(200) NOT NULL,
  `C` varchar(200) NOT NULL,
  `D` varchar(200) NOT NULL,
  `ans` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `topic`, `questions`, `A`, `B`, `C`, `D`, `ans`) VALUES
(3, 'android', 'What are the layouts available in android?', 'Linear Layout', 'Frame Layout', 'Table Layout', 'All of above', 'D'),
(5, 'android', 'How many sizes are supported by Android?', ' Android supported all sizes', 'Android does not support all sizes', 'Android supports small,normal, large and extra-large sizes', 'Size is undefined in android', 'C'),
(6, 'android', ' What is broadcast receiver in android?', ' It will react on broadcast announcements.', 'It will do background functionalities as services.', 'It will pass the data between activities.', 'None of the Above', 'A'),
(7, 'android', 'What is the use of content provider in android?', 'To send the data from an application to another application', 'To share the data between applications', 'To store the data in a database', 'None of the above.', 'B'),
(8, 'android', 'Which features are considered while creating android application?', 'Screen Size', 'Input configuration', 'Platform Version', ' All of above', 'D'),
(9, 'android', 'How many ports are allocated for new emulator?', '2', '10', '0', 'none of the above', 'A'),
(10, 'android', 'What does httpclient.execute() returns in android?', 'Http entity', 'Http response', 'Http result', 'None of the above.\r\n\r\nShow Answer\r\n', 'B'),
(11, 'android', 'What is fragment in android?', 'JSON', 'Peace of Activity', 'Layout', 'None of the above', 'B'),
(12, 'android', 'Why don\'t we give MIN SDK as 1 in android?', 'Android deprecated version', 'There is no value for 1', 'Android doesn\'t allow min version 1', 'None of the above', 'A'),
(13, 'android', 'How many sizes are supported by Android?', ' Android supported all sizes', ' Android does not support all sizes', ' Android supports small,normal, large and extra-large sizes', 'Size is undefined in android', 'C'),
(14, 'maths', '3+5', '5', '6', '7', '8', 'D'),
(15, 'maths', '1+2', '1', '2', '3', '4', 'C'),
(16, 'maths', 'sin(30)', '1', '1/2', '0', '10', 'B'),
(17, 'maths', '5/0', '5', '1', '0', 'infinity', 'D'),
(18, 'maths', 'area of a square', 'a', 'a*a*a', 'a*a', '1', 'C'),
(19, 'maths', 'which is a prime', '9', '15', '22', '7', 'D'),
(20, 'maths', 'sin/cos', 'tan', 'sec', 'cosec', 'cot', 'A'),
(21, 'maths', 'ramanujan number', '1723', '1729', '1826', '3142', 'B'),
(22, 'maths ', 'how many millennium problems are there ?', '3', '5', '9', '7', 'D'),
(23, 'maths', 'opposite sides of a rectangle are', 'parallel', 'perpendicular', 'equal', 'equal and parallel', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `student_ques`
--

CREATE TABLE `student_ques` (
  `id` int(11) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `ques_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_ques`
--

INSERT INTO `student_ques` (`id`, `stud_id`, `subject`, `ques_no`) VALUES
(186, 1, 'maths', 23);

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(11) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `topic` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `stud_id`, `topic`, `score`, `time`, `date`) VALUES
(1, 1, 'android', 2, '18:06:45', 'October 18, 2017'),
(2, 1, 'android', 0, '18:06:54', 'October 18, 2017'),
(3, 2, 'android', 0, '18:30:32', 'October 18, 2017'),
(4, 2, 'android', 1, '18:33:52', 'October 18, 2017'),
(5, 2, 'maths', 9, '21:47:25', 'October 18, 2017'),
(6, 2, 'android', 2, '00:19:45', 'October 19, 2017'),
(7, 1, 'android', 1, '00:22:13', 'October 19, 2017');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `attempting` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `fname`, `lname`, `email`, `phone`, `address`, `username`, `password`, `attempting`) VALUES
(1, 'Akash', 'Thomas', 'akash012345@gmail.com', '8547513282', 'Thakidipurath (h)', 'aka_th', 'akash123', 0),
(2, 'Rahul', 'Roy', 'Rahulroy@gmail.com', '67529369', 'kothamangalam', 'Rahul', 'rahul', 0),
(3, 'admin', 'admin', 'none', 'none', 'none', 'admin', 'admin', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_ques`
--
ALTER TABLE `student_ques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `student_ques`
--
ALTER TABLE `student_ques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;
--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
