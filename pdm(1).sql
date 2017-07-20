-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2016 at 04:15 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `lecture_name` varchar(200) NOT NULL,
  `lec_id` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `S_Regno` varchar(30) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `password` varchar(15) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Hall_Number` varchar(100) NOT NULL,
  `Venue` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Subject` varchar(20) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Email`, `Subject`, `Message`) VALUES
('hhklh', 'l@gmail.com', 'gjjkagd', 'kjgakjgau'),
('klfkf', 'l@gmail.com', 'gjjkagd', 'ffdd'),
('sachini', 'thennakoon@gmail.com', 'pdm', 'hfjlfhjlh'),
('hsdhd', 'dnldn@gmail.com', 'dejj', 'nmeek'),
('hsdhd', 'dnldn@gmail.com', 'dejj', 'nmeek'),
('wjdk', 'wwbdkh@gmau', 'Sudd', 'Messagedcdc'),
('sachini', 'ka@gmail.com', 'hudh', 'sgsh'),
('sachini', 'ka@gmail.com', 'hudh', 'sgsh'),
('lahiru', 'l@gmail.com', 'feijoi', 'fkjpi'),
('lahiru', 'l@gmail.com', 'feijoi', 'fkjpi'),
('dilan', 'l@gmail.com', 'online', '123'),
('dasun', 'd@gmail.com', '123', '123'),
('madura', 'k@gmial.com', 'Subject', '1233'),
('sachini', '', 'Subject', 'Message');

-- --------------------------------------------------------

--
-- Table structure for table `hallarrangement`
--

CREATE TABLE `hallarrangement` (
  `Subject` varchar(15) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hallarrangement`
--

INSERT INTO `hallarrangement` (`Subject`, `Date`, `Time`, `Number`) VALUES
('', '0000-00-00', '00:00:00', ''),
('', '0000-00-00', '00:00:00', ''),
('', '0000-00-00', '00:00:00', ''),
('', '0000-00-00', '00:00:00', ''),
('fwfc', '2016-09-13', '00:00:00', 'fef'),
('fdsf', '2016-09-14', '00:00:00', 'fdfsd'),
('hjjk', '2016-09-06', '00:00:04', '4'),
('ITP', '2016-09-29', '00:00:00', 'A03'),
('PDM', '2016-09-29', '00:00:00', 'H004'),
('java', '2016-09-29', '00:00:00', 'H004'),
('english', '2016-10-31', '00:00:00', 'b-1');

-- --------------------------------------------------------

--
-- Table structure for table `lecture`
--

CREATE TABLE `lecture` (
  `lecture_name` varchar(200) NOT NULL,
  `lec_id` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(25) NOT NULL,
  `type` varchar(20) NOT NULL,
  `subject` varchar(12) NOT NULL,
  `bday` date NOT NULL,
  `contnum` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecture`
--

INSERT INTO `lecture` (`lecture_name`, `lec_id`, `email`, `address`, `password`, `type`, `subject`, `bday`, `contnum`) VALUES
('lecturer1', '123', 'l@gmail.com', 'colombo', 'lecturer1', 'Sineor Lecturer', 'English-1', '2016-11-23', 712546987),
('Mis Amali Jayasumana', 'LE123', 'amali@gmail.com', 'colombo', 'amali123', 'Sineor Lecturer', 'SPD', '1980-10-28', 771234567),
('Ranawira', 'LE12839', 'r@gmail.com', 'maradana', 'r123', 'Assitent Lecturer', 'SPD', '1980-11-01', 710986263);

-- --------------------------------------------------------

--
-- Table structure for table `myadmin`
--

CREATE TABLE `myadmin` (
  `userid` int(6) NOT NULL,
  `name` varchar(12) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myadmin`
--

INSERT INTO `myadmin` (`userid`, `name`, `password`) VALUES
(1, 'admin1', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `S_Regno` varchar(10) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `course` varchar(100) NOT NULL,
  `Address` varchar(60) DEFAULT NULL,
  `Email` varchar(25) DEFAULT NULL,
  `Age` date DEFAULT NULL,
  `contact` int(10) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`S_Regno`, `Name`, `course`, `Address`, `Email`, `Age`, `contact`, `password`) VALUES
('123', 'kasun Kumara', 'Faculty of Business', 'ampra', 'k@gmail.com', '2016-10-26', 1746295, '123'),
('13', 'student1', 'Faculty of Computing', 'colombo', 'a@gmail.com', '2016-11-17', 11256987, 'student1'),
('BS1234', 'Saranga', 'Faculty of Medicing', 'Gall', 's@gmail.com', '2016-11-26', 912344565, 's123'),
('EN123456', 'Damith Chathuranga', 'Faculty of Engineering', 'ampara', 'd@gmail.com', '1993-10-27', 712486795, 'damith123'),
('IT14132056', 'Dilan Madura', 'Faculty of Computing', 'Mathugama', 'ddmdilan@gmail.com', '1991-07-30', 714519661, 'dilan123');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `table_id` int(6) NOT NULL,
  `course` text NOT NULL,
  `year` varchar(15) NOT NULL,
  `semester` varchar(15) NOT NULL,
  `subject` text NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `mesage` varchar(50) NOT NULL,
  `hall` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`table_id`, `course`, `year`, `semester`, `subject`, `date`, `time`, `mesage`, `hall`) VALUES
(5, 'Faculty Of Enginerering', '4th Year', '1st Semester', 'SPD', '2016-10-19', '10:00:00.000000', 'Online Exam', 'A005'),
(6, 'Faculty Of Business', '2nd Year', '2nd Semester', 'DBMS-1', '2016-10-13', '13:59:00.000000', 'Extra Lecures', 'B004'),
(7, 'Faculty Of Computring', '1st Year', '1st Semester', 'DBMS-1', '0000-00-00', '10:15:00.000000', 'Online Exam', '13 th'),
(13, 'Faculty Of Business', '1st Year', '2nd Semester', 'ITA', '2016-11-30', '13:58:00.000000', 'Online Exam', 'hall123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(4) NOT NULL,
  `user_num` text NOT NULL,
  `user_name` text NOT NULL,
  `type` text NOT NULL,
  `email` text NOT NULL,
  `address` varchar(40) NOT NULL,
  `b_day` date NOT NULL,
  `cont_num` int(10) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_num`, `user_name`, `type`, `email`, `address`, `b_day`, `cont_num`, `password`) VALUES
(5, '', 'sara', '', '', '', '0000-00-00', 0, ''),
(6, '', 'sara', '17', '', '', '0000-00-00', 0, ''),
(7, 'IT13111052', 'admin', 'admin', 'admin@admin.com', '135/209/02 Gampaha', '2016-09-07', 1001, 'admin'),
(8, '', 'poorni', '', '', '', '0000-00-00', 0, '12345'),
(12, '', 'sachi', '', '', '', '0000-00-00', 0, '123'),
(13, 'madura', '', '', '', '', '0000-00-00', 0, ''),
(14, '', 'lahiru', '', '', '', '0000-00-00', 0, '123'),
(15, 'gd', '', '', '', '', '0000-00-00', 0, ''),
(113, 'id22', 'samira', 'student', 's@gmail.com', 'colombo', '2016-09-07', 712398087, '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lecture`
--
ALTER TABLE `lecture`
  ADD PRIMARY KEY (`lec_id`);

--
-- Indexes for table `myadmin`
--
ALTER TABLE `myadmin`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`S_Regno`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`table_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myadmin`
--
ALTER TABLE `myadmin`
  MODIFY `userid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `table_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
