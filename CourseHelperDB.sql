-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 19, 2015 at 07:11 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Agricultural Sciences'),
(2, 'Biological Sciences'),
(3, 'Building & Construction Sciences'),
(4, 'Business & Commerce / Accounting'),
(5, 'Computer / Computing / IT and Information Sciences'),
(6, 'Education'),
(7, 'Engineering'),
(8, 'Environmental Sciences'),
(9, 'Food Science & Technology'),
(10, 'Health Sciences / Medical Studies'),
(11, 'Home Economics'),
(12, 'Hospitality & Tourism Management'),
(13, 'Humanities and Social Sciences'),
(14, 'Journalism & Media Studies / Mass communication'),
(15, 'Law / Legal'),
(16, 'Mathematical Sciences'),
(17, 'Natural Resources Management'),
(18, 'Physical Sciences'),
(19, 'Veterinary / Animal Sciences');

-- --------------------------------------------------------

--
-- Table structure for table `cat_subject`
--

CREATE TABLE IF NOT EXISTS `cat_subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `cat_subject`
--

INSERT INTO `cat_subject` (`id`, `cat_id`, `subject_id`, `group_id`, `option_id`) VALUES
(1, 5, 3, 0, 1),
(2, 5, 6, 0, 2),
(3, 5, 0, 2, 3),
(4, 5, 0, 5, 3),
(5, 5, 0, 2, 4),
(6, 5, 0, 5, 4),
(7, 5, 0, 6, 4),
(8, 5, 0, 9, 4),
(9, 7, 3, 0, 1),
(10, 7, 6, 0, 2),
(11, 7, 5, 0, 3),
(12, 7, 4, 0, 4),
(13, 7, 0, 5, 4),
(14, 7, 0, 6, 4),
(15, 7, 0, 9, 4),
(16, 4, 1, 0, 1),
(17, 4, 2, 0, 1),
(18, 4, 3, 0, 2),
(19, 4, 0, 2, 2),
(20, 4, 0, 5, 3),
(21, 4, 0, 2, 4),
(22, 4, 0, 5, 4),
(23, 4, 0, 6, 4),
(24, 4, 0, 9, 4);

-- --------------------------------------------------------

--
-- Table structure for table `clusterpts`
--

CREATE TABLE IF NOT EXISTS `clusterpts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cluster` varchar(10) NOT NULL,
  `year` varchar(5) NOT NULL,
  `degreecode` varchar(15) NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `clusterpts`
--

INSERT INTO `clusterpts` (`id`, `cluster`, `year`, `degreecode`, `cat_id`) VALUES
(3, '46.5', '2009', '11116', 7),
(4, '30', '2009', '12160', 6),
(5, '37.8', '2008', '11113', 18),
(6, '30', '2009', '12315', 6),
(7, '37.3', '2009', '15120', 18),
(8, '32.9', '2009', '14120', 18),
(9, '46.4', '2009', '15202', 2),
(10, '43.6', '2009', '14115', 5),
(11, '30', '2008', '12160', 6),
(12, '30', '2008', '12160', 6),
(13, '43.4', '2009', '11133', 4),
(14, '46.8', '2009', '11115', 5),
(15, '46.1', '2009', '11118', 7),
(16, '43.7', '2009', '12133', 4),
(17, '42.9', '2009', '12146', 4),
(18, '15115', '2009', '15115', 5),
(19, '41.0', '2009', '15232', 5),
(20, '43.3', '2009', '15309', 5),
(21, '46.5', '2009', '15116', 7),
(22, '44.8', '2009', '15118', 7),
(23, '47.4', '2009', '15197', 7),
(24, '43.5', '2009', '15133', 4),
(25, '47.4', '2009', '15107', 4),
(26, '0', '2009', '16309', 5),
(27, '43.6', '2009', '14115', 5),
(28, '39.7', '2009', '17232', 5),
(29, '44.5', '2009', '18205', 7),
(30, '42.8', '2009', '18390', 7),
(31, '41.6', '2009', '18133', 4),
(32, '42.1', '2009', '20133', 4),
(33, '40.5', '2009', '20197', 7),
(34, '37.6', '2009', '29232', 5),
(35, '44.2', '2009', '29197', 7),
(36, '40.7', '2009', '29133', 4),
(37, '40.7', '2009', '29115', 5),
(38, '37.1', '2009', '29309', 5);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(3000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `contact_us`
--


-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `cat_id` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `cat_id`) VALUES
(1, 'Bachelor of science(Civil Engineering)', '7'),
(2, 'Bachelor of Science(Geology)', '18'),
(3, 'Bachelor of Arts(Economics)', '4'),
(4, 'Bachelor of Education(Special Education )', '6'),
(5, 'Bachelor of  Film and Animation', '14'),
(6, 'Bachelor of Arts(Music)', '6'),
(7, 'Bachelor Of Science(B. SC)', '18'),
(8, 'Bachelor of Education(Physical Edication)', '6'),
(9, 'Bachelor Of Architecture', '3'),
(10, 'Bachelor of Education(Arts)', '6'),
(11, 'Bachelor Of Science(Botany)', '2'),
(12, 'Bachelor of Science(Computer Science)', '5'),
(13, 'Bachelor of Science(Information Technology)', '5'),
(14, 'Bachelor of Science(Mathematics and Computer science)', '5'),
(15, 'Bachelor of Science(Telecommunication and Information Engineering))', '7'),
(16, 'Bachelor of Science(Mechanical Engineering)', '7'),
(17, 'Bachelor of Economics', '4'),
(18, 'Bachelor of Commerce', '4'),
(19, 'Bachelor of Science(Actuarial Science)', '4');

-- --------------------------------------------------------

--
-- Table structure for table `course_code`
--

CREATE TABLE IF NOT EXISTS `course_code` (
  `degreecode` varchar(15) NOT NULL,
  `uni_id` varchar(15) NOT NULL,
  `course_id` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_code`
--

INSERT INTO `course_code` (`degreecode`, `uni_id`, `course_id`) VALUES
('11116', '1', '1'),
('12160', '2', '6'),
('15120', '3', '7'),
('15202', '3', '11'),
('12315', '2', '10'),
('11113', '1', '2'),
('14120', '4', '7'),
('14115', '4', '12'),
('11115', '1', '12'),
('15115', '3', '12'),
('29115', '7', '12'),
('29232', '7', '13'),
('15232', '3', '13'),
('17232', '6', '13'),
('15309', '3', '14'),
('16309', '5', '14'),
('29309', '7', '14'),
('15116', '3', '1'),
('18205', '8', '1'),
('11116', '1', '16'),
('15118', '3', '16'),
('18390', '8', '16'),
('15197', '3', '15'),
('20197', '9', '15'),
('29197', '7', '15'),
('11133', '1', '18'),
('12133', '2', '18'),
('15133', '3', '18'),
('29133', '7', '18'),
('11107', '1', '19'),
('15107', '3', '19'),
('15107', '3', '18'),
('20107', '9', '18'),
('18133', '8', '18'),
('20133', '9', '18'),
('11146', '1', '17'),
('12146', '2', '17'),
('18146', '8', '17');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE IF NOT EXISTS `grades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(11) NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `name`, `value`) VALUES
(1, 'A', 12),
(2, 'A-', 11),
(3, 'B+', 10),
(4, 'B', 9),
(5, 'B-', 8),
(6, 'C+', 7),
(7, 'C', 6),
(8, 'C-', 5),
(9, 'D+', 4),
(10, 'D', 3),
(11, 'D-', 2),
(12, 'E', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `indexno` varchar(20) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `indexno`, `dob`, `email`, `photo`, `gender`, `password`) VALUES
(1, 'James John', '202021012', '6/7/1992', 'jamesjohn@gmail.com', '', 'Male', 'f964a01913420b4c8fd5cb4cb2d01f403adcfff4'),
(2, 'Anita Jane', '507867024', '7/10/1993', 'anitajane1@gmail.com', '', 'female', '3d658e92fea03e9f170c82908e224aa2bb3b54ae'),
(3, 'Sylvia Kesho', '671234018', '2/2/1991', 'keshosyvia@yahoo.com', '', 'female', '705532da1e05b1b1621c0be5f86f819e241cd0b0'),
(4, 'Joan Kiriri', '102010025', '21/15/1998', 'kekd@gmail.com', '', 'Female', '8cb2237d0679ca88db6464eac60da96345513964'),
(5, 'Ken Mwangi', '939299292', '9/7/1995', 'kenmwangi@gmail.com', '5Ken Mwangiile ya eve sasa.png', 'Male', 'e92fe30d1fc7333bcf58241cab8a48f733f30331'),
(6, 'Joan gumbi', '341245', '2/6/1997', 'joangumbi@gmail.com', '6Joan gumbiDSC_1906-3.jpeg', 'Female', 'e0397393f2258e8c6ee68e35ceb46d86a4ac5382'),
(7, 'Mitchelle Hinga', '73302902', '25/10/1992', 'mitchinga@yahoo.com', '', 'Female', 'c5b6c1e81521201379673e3b5aa38f17e70c0cc8'),
(8, 'Ken Muli', '390339939', '8/3/1995', 'kenmuli@gmail.com', '', 'Male', '470bc578162732ac7f9d387d34c4af4ca6e1b6f7'),
(9, 'Carlton Wanga', '2990102', '9/7/1995', 'carltonwanga@gmail.com', '', 'Male', 'cf430c1dbdbe057fc0b561381212fa8146227160'),
(11, 'geoffrey mahugu', 'bus 242-020/2012', '29-02-1992', 'geoffreymahugu@gmail.com', '', 'Male', '4ad583af22c2e7d40c1c916b2920299155a46464');

-- --------------------------------------------------------

--
-- Table structure for table `student_grades`
--

CREATE TABLE IF NOT EXISTS `student_grades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `grade` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `student_grades`
--

INSERT INTO `student_grades` (`id`, `student_id`, `subject_id`, `grade`) VALUES
(1, 6, 1, 12),
(2, 6, 2, 11),
(3, 6, 3, 10),
(4, 6, 5, 10),
(5, 6, 4, 11),
(6, 6, 6, 10),
(7, 6, 7, 12),
(8, 6, 8, 9),
(25, 9, 16, 12),
(24, 9, 8, 12),
(23, 9, 6, 12),
(22, 9, 4, 12),
(21, 9, 5, 12),
(20, 9, 3, 12),
(19, 9, 2, 12),
(18, 9, 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `category` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `category`) VALUES
(1, 'English', 1),
(2, 'Kiswahili', 1),
(3, 'Mathematics', 1),
(4, 'Biology', 2),
(5, 'Chemistry', 2),
(6, 'Physics', 2),
(7, 'C.R.E', 5),
(8, 'Geography', 5),
(9, 'History', 5),
(10, 'French', 9),
(11, 'Agriculture', 6),
(12, 'Metal Work', 6),
(13, 'Art and Design', 6),
(14, 'Home Science', 6),
(15, 'Music', 9),
(16, 'Computer Studies', 6),
(17, 'Business Studies', 9),
(18, 'German', 9),
(19, 'Arabic', 9),
(20, 'Kenya Sign Language', 9),
(21, 'Woodwork', 6),
(22, 'Biulding Construction', 6),
(23, 'Power Mechanics', 6),
(24, 'Electricity', 6),
(25, 'Drawing and Design', 6),
(26, 'Aviation Technology', 6),
(27, 'I.R.E.', 5),
(28, 'H.R.E.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `subject_cat`
--

CREATE TABLE IF NOT EXISTS `subject_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `subject_cat`
--

INSERT INTO `subject_cat` (`id`, `name`) VALUES
(1, 'Group I: Compulsory'),
(2, 'Group II: Sciences'),
(5, 'Group III: Humanities'),
(6, 'Group IV: Applied '),
(9, 'Group V');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE IF NOT EXISTS `university` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `location` varchar(30) NOT NULL,
  `Website` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`id`, `name`, `location`, `Website`) VALUES
(1, 'University Of Nairobi', 'Nairobi', 'http://www.uonbi.ac.ke/'),
(2, 'Kenyattta University', 'Nairobi', 'http://www.ku.ac.ke/'),
(3, 'Jomo Kenyatta University of Agriculture &Technolog', 'Nairobi', 'http://www.jkuat.ac.ke/'),
(4, 'Egerton University', 'Rift Valley', 'http://www.egerton.ac.ke/'),
(5, 'Maseno University', 'Nyanza', 'http://maseno.ac.ke/index/'),
(6, 'Masinde Muliro University of Science & Technology', 'Western', 'http://www.mmust.ac.ke/'),
(7, 'Multimedia University of Kenya', 'Nairobi', 'http://www.mmu.ac.ke'),
(8, 'Technical University of Kenya', 'Nairobi', 'http://www.tukenya.ac.ke'),
(9, 'Dedan Kimathi University of Technology', 'Nyeri', 'http://www.dkut.ac.ke');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'Eve Wahome', 'evewahome@gmail.com', 'evewahome'),
(2, 'JJ Wahome', 'jjwahome@gmail.com', 'wahome');
