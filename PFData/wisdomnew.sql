-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2020 at 02:55 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisdomnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcreate`
--

CREATE TABLE `addcreate` (
  `add_id` int(10) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `subtopic` varchar(100) NOT NULL,
  `image` mediumtext NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addcreate`
--

INSERT INTO `addcreate` (`add_id`, `topic`, `subtopic`, `image`, `description`) VALUES
(3, 'get A for combine mathematics', 'combine maths for everyone', 'uplords/add/product-school-ITF7fD0TSCY-unsplash.jpg', 'Mathematics (from Greek Î¼Î¬Î¸Î·Î¼Î± mÃ¡thÄ“ma, \"knowledge, study, learning\") includes the study of '),
(4, 'A for physics', 'physics', 'uplords/add/tim-gouw-KigTvXqetXA-unsplash.jpg', 'Mathematics (from Greek Î¼Î¬Î¸Î·Î¼Î± mÃ¡thÄ“ma, \"knowledge, study, learning\") includes the study of ');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `telephone` int(10) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `first_name`, `last_name`, `address`, `telephone`, `email`) VALUES
('896525478', 'kamani', 'perera', 'mahiyanganaya rd,badulla', 552849758, 'kp@gmail.com'),
('987625285', 'dushani', 'perera', 'N0:6 kappettipola rd, badulla', 552235105, 'dush@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `advertistment`
--

CREATE TABLE `advertistment` (
  `ad_id` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `admin_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(100) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendance_id`, `student_id`, `first_name`, `last_name`, `date_time`) VALUES
(3, ' 98', 'chapi', 'perera ', '2020-01-12 12:17:44'),
(4, ' 96', 'dush', 'perera ', '2020-01-12 12:18:27'),
(5, ' 968264273v', 'suresh', 'perera ', '2020-01-12 12:18:59'),
(6, ' 968264273v', 'suresh', 'perera ', '2020-01-12 12:19:59'),
(7, ' 98', 'chapi', 'perera ', '2020-01-12 15:14:56'),
(8, ' ', '', ' ', '2020-01-12 15:14:59'),
(9, ' 98', 'chapi', 'perera ', '2020-01-12 15:15:30'),
(10, ' 76', 'ree', 'fss ', '2020-01-12 15:16:29'),
(11, ' 98', 'chapi', 'perera ', '2020-01-12 15:18:20'),
(12, ' 98', 'chapi', 'perera ', '2020-01-12 15:19:08'),
(13, ' 968264273V', '', ' ', '2020-01-13 02:50:07'),
(14, ' 968264273V', '', ' ', '2020-01-13 02:51:06'),
(15, ' 968264273V', '', ' ', '2020-01-13 02:51:26'),
(16, ' 968264273V', '', ' ', '2020-01-13 02:51:40'),
(17, ' 968264273V', '', ' ', '2020-01-13 02:51:59'),
(18, ' 968264273V', '', ' ', '2020-01-13 02:54:09'),
(19, ' ', '', ' ', '2020-01-13 02:54:11'),
(20, ' 968264273V', '', ' ', '2020-01-13 02:54:18'),
(21, ' ', '', ' ', '2020-01-13 02:54:20'),
(22, ' 968264273V', '', ' ', '2020-01-13 02:54:26'),
(23, ' 968264273V', '', ' ', '2020-01-13 02:54:35'),
(24, ' ', '', ' ', '2020-01-13 02:54:37'),
(25, ' 968264273V', '', ' ', '2020-01-13 02:55:14'),
(26, ' 968264273V', '', ' ', '2020-01-13 02:55:36'),
(27, ' 968264273V', '', ' ', '2020-01-13 02:55:54'),
(28, ' ', '', ' ', '2020-01-13 02:55:56'),
(29, ' 968264273V', '', ' ', '2020-01-13 02:56:15'),
(30, ' ', '', ' ', '2020-01-13 02:56:16'),
(32, ' ', '', ' ', '2020-01-13 03:57:42'),
(33, ' ', '', ' ', '2020-01-13 03:57:44'),
(34, ' 968264273V', '', ' ', '2020-01-14 07:49:03'),
(35, ' 968264273V', '', ' ', '2020-01-14 07:49:54'),
(36, ' 968264273V', '', ' ', '2020-01-14 07:49:54'),
(37, ' 968264273V', '', ' ', '2020-01-14 07:50:33'),
(38, ' 968264273V', '', ' ', '2020-01-14 08:06:49'),
(39, ' 968264273V', '', ' ', '2020-01-14 08:07:19'),
(40, ' 98', '', ' ', '2020-01-14 19:24:06'),
(42, ' 968264273V', '', ' ', '2020-01-16 07:21:55'),
(43, ' 968264273V', '', ' ', '2020-01-16 07:25:39'),
(44, ' 968264273V', '', ' ', '2020-01-16 07:27:27'),
(45, ' 968264273V', '', ' ', '2020-01-16 08:24:48'),
(46, ' 968264273V', '', ' ', '2020-01-16 08:29:13'),
(47, ' 968264273V', '', ' ', '2020-01-16 08:30:32'),
(48, ' 968264273V', '', ' ', '2020-01-16 08:32:41'),
(49, ' 968264273V', '', ' ', '2020-01-16 09:13:47'),
(50, ' 968264273V', '', ' ', '2020-01-16 10:28:43'),
(51, ' 968264273V', '', ' ', '2020-01-16 10:48:00');

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `batch_id` int(10) NOT NULL,
  `batch_name` varchar(100) NOT NULL,
  `subject_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(12) NOT NULL,
  `category` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `category`) VALUES
(1, 'Maths'),
(6, 'Bio'),
(7, 'Art');

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE `description` (
  `description_id` varchar(50) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `user` varchar(50) NOT NULL,
  `forum_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(10) NOT NULL,
  `name` varchar(300) NOT NULL,
  `description` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `name`, `description`, `email`) VALUES
(1, 'dushani perera', 'I want to know about the further details?', 'dushaniperera96@gmail.com'),
(2, 'Anjali karunadasa', 'your institute has laborotary facilities?', 'ak@gmail.com'),
(3, 'amal', 'good', 'amal@gmail.com'),
(4, 'sandaru', 'good', 'sandaru@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `file_id` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `teacher_id` varchar(50) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `forum_id` varchar(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `teacher_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `subject_title` varchar(100) NOT NULL,
  `student_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `login_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `usertype`, `login_id`) VALUES
('dushani', 'dush', 'student', ''),
('dushani', '123', 'admin', ''),
(' amal', '123', 'student', '968264273v '),
(' ama', '123', 'student', '968264279v '),
(' chapi', '123', 'student', '968264279v '),
('kamani', '123', 'admin', '3265847v'),
('yasiru', 'abc', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `mark_id` varchar(50) NOT NULL,
  `subject_id` int(10) NOT NULL,
  `teacher_id` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `p_id` int(11) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `parent_name` varchar(25) NOT NULL,
  `type` varchar(20) NOT NULL,
  `telephone` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `another_children` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`p_id`, `student_id`, `parent_name`, `type`, `telephone`, `email`, `another_children`) VALUES
(48, '968264273v', 'sunil hewage', 'farther', 778168022, 'nimal@gmail.com', '15'),
(49, ' 998564521v', 'sriyalatha perera', 'mother', 771269618, 'dushani@gmail.com', '12 ');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `studentName` varchar(100) NOT NULL,
  `studentId` int(11) NOT NULL,
  `month` varchar(60) NOT NULL,
  `total_fee` float NOT NULL,
  `paid_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `studentName`, `studentId`, `month`, `total_fee`, `paid_at`) VALUES
(1, 'dushani', 96826427, 'September', 1000, '2020-01-16 11:03:45'),
(2, 'chathumal', 97545125, 'March', 1000, '2020-01-16 11:16:25');

-- --------------------------------------------------------

--
-- Table structure for table `slideimages`
--

CREATE TABLE `slideimages` (
  `id` int(10) NOT NULL,
  `image` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slideimages`
--

INSERT INTO `slideimages` (`id`, `image`) VALUES
(5, 'uplords/slideimages/tim-gouw-KigTvXqetXA-unsplash.jpg'),
(8, 'uplords/slideimages/caleb-woods-RIcMwDLk1wo-unsplash.jpg'),
(10, 'uplords/slideimages/photo-1497633762265-9d179a990aa6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` varchar(100) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(75) NOT NULL,
  `telephone` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `path` varchar(255) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'pending',
  `type` varchar(100) DEFAULT 'Full Payment'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `first_name`, `last_name`, `address`, `telephone`, `email`, `path`, `status`, `type`) VALUES
(' 998564521v', 'aruna', 'madusanka', 'No:26/2 gunathilaka road', 778168022, 'dushaniperera96@gmail.com ', NULL, 'pending', 'Full Payment'),
('132123', 'TEST', 'TEST', 'test', 0, 'test', 'test', 'pending', 'Full Payment'),
('968264273v', 'Dushanee', 'Perera', 'no:26/2 gunathilake rd,Panadura.', 778168022, 'dushani@gmail.com', '', 'pending', 'full payment');

-- --------------------------------------------------------

--
-- Table structure for table `student_batch`
--

CREATE TABLE `student_batch` (
  `student_id` varchar(100) NOT NULL,
  `batch_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_batch`
--

INSERT INTO `student_batch` (`student_id`, `batch_name`) VALUES
(' 132123', '2012 '),
(' 2', '2021 '),
(' 2121', '2021 '),
(' 212121', '2012 '),
(' 253434', '2012 '),
(' 30', '2012 '),
(' 31', '2012 '),
(' 54', '2012 '),
(' 654654', '2012 '),
(' 968547', '2021 '),
(' 98', ' '),
(' 998564521v', '2021 ');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `sub_title` varchar(100) NOT NULL,
  `sub_val` int(11) NOT NULL DEFAULT 10
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `sub_title`, `sub_val`) VALUES
(1, 'combine maths', 10),
(2, 'physics', 10),
(3, 'chemistry', 10),
(4, 'Accounting', 10),
(5, 'Business studies', 10),
(6, 'Economics', 10),
(7, 'Sinhala\r\n', 10),
(8, 'Political Science', 10),
(9, 'ICT', 10),
(10, 'Geography', 10),
(11, ' dfsfd ', 10),
(12, ' sycho ', 10),
(13, ' bio ', 10),
(14, ' bio ', 10);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) NOT NULL,
  `studentId` int(10) NOT NULL,
  `subjectName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `studentId`, `subjectName`) VALUES
(1, 12345678, 'Combined Maths'),
(2, 12345678, 'Physics'),
(3, 123456789, 'Combined Maths'),
(4, 123456789, 'Physics'),
(5, 123456, 'Combined Maths'),
(6, 123456, 'Physics'),
(7, 123456, 'Physics'),
(8, 1234, 'Combined Maths'),
(9, 1234, 'Physics'),
(10, 123, 'Combined Maths'),
(11, 456859685, 'Physics'),
(12, 96826427, 'Chemestry'),
(13, 2147483647, 'Combined Maths'),
(14, 97545125, 'Physics'),
(15, 132123, 'physics'),
(16, 132123, 'chemistry');

-- --------------------------------------------------------

--
-- Table structure for table `subject_student`
--

CREATE TABLE `subject_student` (
  `student_id` varchar(100) NOT NULL,
  `subject_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_student`
--

INSERT INTO `subject_student` (`student_id`, `subject_title`) VALUES
(' 132123', 'maths '),
(' 2', 'maths '),
(' 2121', 'maths,sinhala '),
(' 212121', 'maths '),
(' 253434', 'maths '),
(' 3', 'rdsfds '),
(' 30', 'maths '),
(' 31', 'maths,sinhala '),
(' 54', 'maths '),
(' 654654', 'maths '),
(' 968547', 'maths '),
(' 98', ' '),
(' 998564521v', 'combine maths '),
('968264273', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tblcomment`
--

CREATE TABLE `tblcomment` (
  `comment_Id` int(11) NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `post_Id` int(11) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `login_id` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblpost`
--

CREATE TABLE `tblpost` (
  `post_Id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `cat_id` int(12) DEFAULT NULL,
  `login_id` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `telephone` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `path` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `first_name`, `last_name`, `subject_name`, `address`, `telephone`, `email`, `path`) VALUES
(' 2132321', 'dushane', 'perera', 'dfsfd', 'No:26/2 gunathilaka road', 778168022, 'dushaniperera0@gmail.com ', NULL),
(' 434', 'chapi', 'perera', 'dfsfd', 'No:26/2 gunathilaka road', 778168022, 'dushaniperera96@gmail.com ', NULL),
(' 856524487v', 'amarabandu', 'rupasinghe', 'sycho', 'No:26/2 gunathilaka road', 778168022, 'amarabandu96@gmail.com ', NULL),
(' 965689654v', 'jagath', 'rathmayake', 'bio', 'No:26/2 gunathilaka road', 778168022, 'jagath@gmail.com ', NULL),
('968264785v', 'nimal', 'perera', '', 'panadura', 771269618, 'nimal@gmail.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcreate`
--
ALTER TABLE `addcreate`
  ADD PRIMARY KEY (`add_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `advertistment`
--
ALTER TABLE `advertistment`
  ADD PRIMARY KEY (`ad_id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `advertistment_ibfk_3` (`subject_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`batch_id`),
  ADD KEY `batch_sub_fk` (`subject_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`description_id`),
  ADD KEY `forum_id` (`forum_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`file_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`forum_id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`mark_id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `marks_ibfk_2` (`subject_id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slideimages`
--
ALTER TABLE `slideimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_batch`
--
ALTER TABLE `student_batch`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_student`
--
ALTER TABLE `subject_student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `tblcomment`
--
ALTER TABLE `tblcomment`
  ADD PRIMARY KEY (`comment_Id`),
  ADD KEY `student_id` (`login_id`),
  ADD KEY `post_Id` (`post_Id`),
  ADD KEY `student_id_2` (`login_id`);

--
-- Indexes for table `tblpost`
--
ALTER TABLE `tblpost`
  ADD PRIMARY KEY (`post_Id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `student_id` (`login_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcreate`
--
ALTER TABLE `addcreate`
  MODIFY `add_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `batch_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slideimages`
--
ALTER TABLE `slideimages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advertistment`
--
ALTER TABLE `advertistment`
  ADD CONSTRAINT `advertistment_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`),
  ADD CONSTRAINT `advertistment_ibfk_3` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`);

--
-- Constraints for table `batch`
--
ALTER TABLE `batch`
  ADD CONSTRAINT `batch_sub_fk` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`);

--
-- Constraints for table `description`
--
ALTER TABLE `description`
  ADD CONSTRAINT `description_ibfk_1` FOREIGN KEY (`forum_id`) REFERENCES `forum` (`forum_id`);

--
-- Constraints for table `file`
--
ALTER TABLE `file`
  ADD CONSTRAINT `file_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`);

--
-- Constraints for table `forum`
--
ALTER TABLE `forum`
  ADD CONSTRAINT `forum_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`),
  ADD CONSTRAINT `forum_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`);

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`);

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`),
  ADD CONSTRAINT `marks_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`);

--
-- Constraints for table `parent`
--
ALTER TABLE `parent`
  ADD CONSTRAINT `parent_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
