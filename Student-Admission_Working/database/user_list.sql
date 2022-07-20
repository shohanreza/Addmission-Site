-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 23, 2022 at 06:20 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_list`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Table structure for table `deleteduser`
--

CREATE TABLE `deleteduser` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `deltime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `reciver` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `feedbackdata` varchar(500) NOT NULL,
  `attachment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `notiuser` varchar(50) NOT NULL,
  `notireciver` varchar(50) NOT NULL,
  `notitype` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `notiuser`, `notireciver`, `notitype`, `time`) VALUES
(18, 'ratul794@gmail.com', 'Admin', 'Create Account', '2022-01-14 13:47:00');

-- --------------------------------------------------------

--
-- Table structure for table `register_student`
--

CREATE TABLE `register_student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `pob` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `marital_status` varchar(255) DEFAULT NULL,
  `nid` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `quota` varchar(255) DEFAULT NULL,
  `hsc_exam` varchar(255) DEFAULT NULL,
  `hsc_board` varchar(255) DEFAULT NULL,
  `hsc_institute` varchar(255) DEFAULT NULL,
  `hsc_roll` varchar(255) DEFAULT NULL,
  `hsc_group` varchar(255) DEFAULT NULL,
  `hsc_division` varchar(255) DEFAULT NULL,
  `hsc_gpa` varchar(255) DEFAULT NULL,
  `hsc_gpa_without_4th` varchar(255) DEFAULT NULL,
  `hsc_marks` varchar(255) DEFAULT NULL,
  `hsc_exam_year` varchar(255) DEFAULT NULL,
  `ssc_exam` varchar(255) DEFAULT NULL,
  `ssc_board` varchar(255) DEFAULT NULL,
  `ssc_institute` varchar(255) DEFAULT NULL,
  `ssc_roll` varchar(255) DEFAULT NULL,
  `ssc_group` varchar(255) DEFAULT NULL,
  `ssc_division` varchar(255) DEFAULT NULL,
  `ssc_gpa` varchar(255) DEFAULT NULL,
  `ssc_gpa_without_4th` varchar(255) DEFAULT NULL,
  `ssc_marks` varchar(255) DEFAULT NULL,
  `ssc_exam_year` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_student`
--

INSERT INTO `register_student` (`id`, `name`, `dob`, `pob`, `nationality`, `language`, `gender`, `marital_status`, `nid`, `religion`, `blood_group`, `email`, `mobile`, `quota`, `hsc_exam`, `hsc_board`, `hsc_institute`, `hsc_roll`, `hsc_group`, `hsc_division`, `hsc_gpa`, `hsc_gpa_without_4th`, `hsc_marks`, `hsc_exam_year`, `ssc_exam`, `ssc_board`, `ssc_institute`, `ssc_roll`, `ssc_group`, `ssc_division`, `ssc_gpa`, `ssc_gpa_without_4th`, `ssc_marks`, `ssc_exam_year`) VALUES
(6, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tml_student`
--

CREATE TABLE `tml_student` (
  `id` int(11) NOT NULL,
  `hscRoll` varchar(50) NOT NULL,
  `hscPassingYear` varchar(50) NOT NULL,
  `hscBoard` varchar(50) NOT NULL,
  `sscRoll` varchar(50) NOT NULL,
  `sscPassingYear` varchar(50) NOT NULL,
  `sscBoard` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobNum` varchar(50) NOT NULL,
  `nidNum` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tml_student`
--

INSERT INTO `tml_student` (`id`, `hscRoll`, `hscPassingYear`, `hscBoard`, `sscRoll`, `sscPassingYear`, `sscBoard`, `email`, `mobNum`, `nidNum`) VALUES
(1, '765', '7456345', 'tgdgd', '54355', '543435', 'rfdsf', 'ratul794@gmail.com', '3423424', '4343434'),
(2, '765', '7456345', 'tgdgd', '54355', '543435', 'rfdsf', 'ratul794@gmail.com', '3423424', '4343434'),
(3, '53535', '535353', 'rer', '42322', '5355', 'fsfds', 'ratul794@gmail.com', '543535', '543535'),
(4, '53535', '535353', 'rer', '453434', '434', 'fsf', 'ratul794@gmail.com', '543535', '4343434'),
(5, '53535', '535353', 'rer', '54355', '5355', 'fsf', 'ratul794@gmail.com', '543535', '434344'),
(6, '53535', '535353', 'dhaka', '54355', '5355', 'dsds', 'ratul794@gmail.com', '543535', '434344');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `mobile`, `designation`, `image`, `status`) VALUES
(20, 'Atik Shahriar Ratul', 'ratul794@gmail.com', '2b1a381ee1532974601b40c686490ca1', 'Male', '01713525100', 'Software Engineer', 'luke-vodell-c7fxig9doau-unsplash.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deleteduser`
--
ALTER TABLE `deleteduser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_student`
--
ALTER TABLE `register_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tml_student`
--
ALTER TABLE `tml_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deleteduser`
--
ALTER TABLE `deleteduser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `register_student`
--
ALTER TABLE `register_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tml_student`
--
ALTER TABLE `tml_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
