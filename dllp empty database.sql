-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 25, 2021 at 06:15 AM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dllp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(20) NOT NULL,
  `a_username` varchar(200) NOT NULL,
  `a_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `a_username`, `a_password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(10) NOT NULL,
  `course_name` varchar(200) NOT NULL,
  `course_duration` varchar(200) NOT NULL,
  `course_fees` varchar(45) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_document`
--

CREATE TABLE `course_document` (
  `document_id` int(20) NOT NULL,
  `upload_date` varchar(100) NOT NULL,
  `course_id` int(20) NOT NULL,
  `document_title` varchar(200) NOT NULL,
  `document_description` varchar(500) NOT NULL,
  `document_path` varchar(300) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_meeting`
--

CREATE TABLE `course_meeting` (
  `meeting_id` int(20) NOT NULL,
  `meeting_date` varchar(45) NOT NULL,
  `course_id` int(20) NOT NULL,
  `course_name` varchar(200) NOT NULL,
  `meeting_time` varchar(45) NOT NULL,
  `meeting_zoomid` varchar(500) NOT NULL,
  `meeting_password` varchar(200) NOT NULL,
  `meeting_link` varchar(500) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_registration`
--

CREATE TABLE `course_registration` (
  `registration_id` int(20) NOT NULL,
  `registration_date` varchar(100) NOT NULL,
  `student_name` varchar(200) NOT NULL,
  `mobile_no` varchar(45) NOT NULL,
  `email_id` varchar(200) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `full_address` varchar(2000) NOT NULL,
  `status` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `demo_video`
--

CREATE TABLE `demo_video` (
  `demo_video_id` int(20) NOT NULL,
  `upload_date` varchar(100) NOT NULL,
  `course_id` int(20) NOT NULL,
  `video_title` varchar(200) NOT NULL,
  `video_description` varchar(500) NOT NULL,
  `video_path` varchar(300) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `exam_id` int(20) NOT NULL,
  `student_id` int(20) NOT NULL,
  `test_id` int(20) NOT NULL,
  `exam_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `fee_id` int(20) NOT NULL,
  `paid_date` varchar(200) NOT NULL,
  `selected_course_id` int(20) NOT NULL,
  `course_id` int(20) NOT NULL,
  `registration_id` int(20) NOT NULL,
  `total_fees` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lecture_video`
--

CREATE TABLE `lecture_video` (
  `lecture_video_id` int(20) NOT NULL,
  `upload_date` varchar(100) NOT NULL,
  `course_id` int(20) NOT NULL,
  `video_title` varchar(200) NOT NULL,
  `video_description` varchar(500) NOT NULL,
  `video_path` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notification_id` int(20) NOT NULL,
  `upload_date` varchar(100) NOT NULL,
  `text_message` varchar(500) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(20) NOT NULL,
  `test_id` int(20) NOT NULL,
  `question` varchar(500) NOT NULL,
  `option_a` varchar(500) NOT NULL,
  `option_b` varchar(500) NOT NULL,
  `option_c` varchar(500) NOT NULL,
  `option_d` varchar(500) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `mark` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `result_id` int(20) NOT NULL,
  `exam_id` int(20) NOT NULL,
  `student_id` int(20) NOT NULL,
  `result_date` varchar(200) NOT NULL,
  `total_question` varchar(200) NOT NULL,
  `correct_answer` varchar(200) NOT NULL,
  `worng_answer` varchar(200) NOT NULL,
  `total_marks` varchar(200) NOT NULL,
  `outof_marks` varchar(200) NOT NULL,
  `percentage` varchar(200) NOT NULL,
  `grade` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `saved_answer`
--

CREATE TABLE `saved_answer` (
  `save_id` int(20) NOT NULL,
  `exam_id` int(20) NOT NULL,
  `test_id` int(20) NOT NULL,
  `question_id` int(20) NOT NULL,
  `saved_option` varchar(20) NOT NULL,
  `correct_answer` varchar(20) NOT NULL,
  `marks` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `selected_course`
--

CREATE TABLE `selected_course` (
  `selected_course_id` int(20) NOT NULL,
  `registration_id` int(20) NOT NULL,
  `course_id` int(20) NOT NULL,
  `course_name` varchar(200) NOT NULL,
  `course_fee` varchar(200) NOT NULL,
  `selected_date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(20) NOT NULL,
  `upload_date` varchar(100) NOT NULL,
  `image_path` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `submit_work`
--

CREATE TABLE `submit_work` (
  `student_id` int(20) NOT NULL,
  `lecture_video_id` int(20) NOT NULL,
  `upload_date` varchar(100) NOT NULL,
  `course_id` int(20) NOT NULL,
  `video_title` varchar(200) NOT NULL,
  `video_description` varchar(500) NOT NULL,
  `video_path` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(20) NOT NULL,
  `create_date` varchar(100) NOT NULL,
  `exam_title` varchar(200) NOT NULL,
  `subject_name` varchar(200) NOT NULL,
  `no_of_question` varchar(200) NOT NULL,
  `total_marks` varchar(200) NOT NULL,
  `exam_timing` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
