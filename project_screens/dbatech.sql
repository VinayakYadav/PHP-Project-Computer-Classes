-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2018 at 06:09 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbatech`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(100) NOT NULL,
  `user_email` varchar(500) NOT NULL,
  `user_pass` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `user_email`, `user_pass`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `bid` int(100) NOT NULL,
  `bname` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`bid`, `bname`, `description`) VALUES
(2, 'Nalasopara-WEST', 'Company Operated'),
(3, 'test', 'Company Operated');

-- --------------------------------------------------------

--
-- Table structure for table `branch_admins`
--

CREATE TABLE `branch_admins` (
  `id` int(100) NOT NULL,
  `name` varchar(500) NOT NULL,
  `user_email` varchar(500) NOT NULL,
  `user_pass` varchar(500) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `contact_no` varchar(500) NOT NULL,
  `adhar_no` varchar(500) NOT NULL,
  `DOJ` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `InTime` varchar(500) NOT NULL,
  `OutTime` varchar(500) NOT NULL,
  `CTC` float NOT NULL,
  `role` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `photo` varchar(500) DEFAULT 'admin.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch_admins`
--

INSERT INTO `branch_admins` (`id`, `name`, `user_email`, `user_pass`, `branch_id`, `contact_no`, `adhar_no`, `DOJ`, `InTime`, `OutTime`, `CTC`, `role`, `status`, `photo`) VALUES
(1, 'Test Test', 'test@gmail.com', 'test', 2, '32132', '32123', '2018-05-06 10:44:14', '10', '10', 122, 1, 1, 'admin.png'),
(3, 'test', 'test@g.com', '1', 2, '2231', '111', '2018-05-31 00:00:00', '10am', '5pm', 0, 2, 1, 'Shaurya.jpg'),
(4, 'root', 'tiwarishriniwas@gmail.com', '1', 2, '2231', '111', '2018-05-10 00:00:00', '10am', '5pm', 0, 2, 0, 'Shaurya.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `branch_admins_copy`
--

CREATE TABLE `branch_admins_copy` (
  `id` int(100) NOT NULL,
  `name` varchar(500) NOT NULL,
  `user_email` varchar(500) NOT NULL,
  `user_pass` varchar(500) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `contact_no` varchar(500) NOT NULL,
  `adhar_no` varchar(500) NOT NULL,
  `DOJ` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `InTime` varchar(500) NOT NULL,
  `OutTime` varchar(500) NOT NULL,
  `CTC` float NOT NULL,
  `role` int(100) NOT NULL,
  `status` int(100) NOT NULL DEFAULT '0',
  `photo` varchar(500) DEFAULT 'admin.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `c_id` int(100) NOT NULL,
  `c_name` varchar(500) NOT NULL,
  `duration` varchar(500) NOT NULL,
  `fee` float NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`c_id`, `c_name`, `duration`, `fee`, `description`) VALUES
(1, 'Computer Basics', '3 Months', 3000, 'For Computer Beginers');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `enq_id` int(100) NOT NULL,
  `name` varchar(500) NOT NULL,
  `contact` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `course` varchar(500) NOT NULL,
  `fee` varchar(500) NOT NULL,
  `branch` int(11) NOT NULL,
  `note` varchar(500) NOT NULL,
  `adm_st` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`enq_id`, `name`, `contact`, `email`, `address`, `course`, `fee`, `branch`, `note`, `adm_st`) VALUES
(1, 'admin', '2231', 'tiwarishriniwas@gmail.com', 'xxASsSxxczxczxc', 'Java', '3000', 2, 'tomm', 1),
(2, 'enq', '123', 'eng@g.com', '<p>eseakhesaas</p>', 'Java', '3000', 3, '<p>dasdsadasdsajdhasjkdsa</p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `notes_id` int(100) NOT NULL,
  `notes_name` varchar(500) NOT NULL,
  `notes_descrption` varchar(500) NOT NULL,
  `path_to_PDF` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(100) NOT NULL,
  `notice` varchar(500) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `notice`, `status`) VALUES
(1, 'It is requested to all our Student\'s, Please take your admission ID from your respective branch, and start API Login for Student Portal', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(100) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `role` varchar(500) NOT NULL,
  `timing` varchar(500) NOT NULL,
  `branch` int(11) NOT NULL,
  `salary` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `name`, `email`, `dob`, `gender`, `address`, `role`, `timing`, `branch`, `salary`) VALUES
(1, 'Shaurya', 'shaurya@gmail.com', '0000-00-00', '2013-03-15', 'dsdsdsad\r\nsad\r\nsadsadsad', 'CEO', '10am', 2, 65656);

-- --------------------------------------------------------

--
-- Table structure for table `staff_role`
--

CREATE TABLE `staff_role` (
  `staff_role_id` int(100) NOT NULL,
  `staff_id` int(100) NOT NULL,
  `role_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_role`
--

INSERT INTO `staff_role` (`staff_role_id`, `staff_id`, `role_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `students_project`
--

CREATE TABLE `students_project` (
  `project_id` int(100) NOT NULL,
  `project_title` varchar(500) NOT NULL,
  `project_description` varchar(500) NOT NULL,
  `project_category` varchar(500) NOT NULL,
  `branch` varchar(500) NOT NULL,
  `project_screen` varchar(500) NOT NULL,
  `student_email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_project`
--

INSERT INTO `students_project` (`project_id`, `project_title`, `project_description`, `project_category`, `branch`, `project_screen`, `student_email`) VALUES
(1, 'ABC', '<p>Test</p>', 'animation', 'Nalasopara WEST', 'WW2.jpg', 'test@gmail.com'),
(2, 'Software Project', '<p>snajss</p>\r\n<p>aSAs</p>\r\n<p>Sa</p>', 'Software', 'Nalasopara WEST', 'hlp_small.png', ''),
(3, 'Tally Project', '<p>zxmnz,mzxzxz</p>\r\n<p>x</p>\r\n<p>zxZ</p>', 'Tally', 'Nalasopara WEST', 'WW3.jpg', ''),
(4, 'Demo', '<p>My <strong>Demo</strong> Project</p>', 'Software', 'Nalasopara WEST', 'img4.png', ''),
(5, 'Software Project', '<p>asasasA</p>', 'Software', 'Nalasopara WEST', 'hlp_small.png', ''),
(6, 'Software Project', '<p>sdadasdas</p>', 'Software', 'Nalasopara WEST', 'hlp_small.png', 'test@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `student_courses`
--

CREATE TABLE `student_courses` (
  `st_course_id` int(100) NOT NULL,
  `student_id` int(100) NOT NULL,
  `course_id` int(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fees` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_courses`
--

INSERT INTO `student_courses` (`st_course_id`, `student_id`, `course_id`, `date`, `fees`) VALUES
(1, 3, 1, '2018-04-08 13:52:57', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `student_fee_details`
--

CREATE TABLE `student_fee_details` (
  `s_fee_id` int(100) NOT NULL,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `amount` float NOT NULL,
  `branch_id` int(100) NOT NULL,
  `cashier` varchar(500) NOT NULL,
  `pay_type` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_fee_details`
--

INSERT INTO `student_fee_details` (`s_fee_id`, `student_id`, `course_id`, `date`, `amount`, `branch_id`, `cashier`, `pay_type`) VALUES
(1, 3, 1, '2018-04-14 16:51:41', 2000, 2, 'test@gmail.com', 'Part Pay');

-- --------------------------------------------------------

--
-- Table structure for table `student_register`
--

CREATE TABLE `student_register` (
  `id` int(100) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `branch` varchar(500) NOT NULL,
  `adm_id` int(100) NOT NULL,
  `status` int(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_register`
--

INSERT INTO `student_register` (`id`, `name`, `email`, `password`, `branch`, `adm_id`, `status`) VALUES
(1, 'test', 'test', '123', '2', 1, 1),
(3, 'ts', 'test@gmail.com', '123', '2', 123, 1),
(4, 'admin', 'test@gmail.com', 'asa', '2', 11, 0),
(5, 'admin', 'test@gmail.com', 'aa', '2', 111, 0);

-- --------------------------------------------------------

--
-- Table structure for table `super_admins`
--

CREATE TABLE `super_admins` (
  `id` int(100) NOT NULL,
  `user_email` varchar(500) NOT NULL,
  `user_pass` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `super_admins`
--

INSERT INTO `super_admins` (`id`, `user_email`, `user_pass`) VALUES
(1, 'tiwarishaurya@gmail.com', 'sh@ury@'),
(2, 'tiwarishriniwas@gmail.com', 'shr!n!w@$');

-- --------------------------------------------------------

--
-- Table structure for table `users_type`
--

CREATE TABLE `users_type` (
  `users_type_id` int(100) NOT NULL,
  `type` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_type`
--

INSERT INTO `users_type` (`users_type_id`, `type`, `description`) VALUES
(1, 'admin', 'Full Access on Project'),
(2, 'manager', 'Partial Access on Project'),
(3, 'Teaching Staff', 'Back Office'),
(4, 'Marketing Staff', 'Front Office');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ukemail` (`user_email`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `branch_admins`
--
ALTER TABLE `branch_admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `b_uk` (`user_email`);

--
-- Indexes for table `branch_admins_copy`
--
ALTER TABLE `branch_admins_copy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `b_uk` (`user_email`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`enq_id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`notes_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `staff_role`
--
ALTER TABLE `staff_role`
  ADD PRIMARY KEY (`staff_role_id`);

--
-- Indexes for table `students_project`
--
ALTER TABLE `students_project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `student_courses`
--
ALTER TABLE `student_courses`
  ADD PRIMARY KEY (`st_course_id`);

--
-- Indexes for table `student_fee_details`
--
ALTER TABLE `student_fee_details`
  ADD PRIMARY KEY (`s_fee_id`);

--
-- Indexes for table `student_register`
--
ALTER TABLE `student_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `super_admins`
--
ALTER TABLE `super_admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_type`
--
ALTER TABLE `users_type`
  ADD PRIMARY KEY (`users_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `bid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `branch_admins`
--
ALTER TABLE `branch_admins`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `branch_admins_copy`
--
ALTER TABLE `branch_admins_copy`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `c_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `enq_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `notes_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff_role`
--
ALTER TABLE `staff_role`
  MODIFY `staff_role_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students_project`
--
ALTER TABLE `students_project`
  MODIFY `project_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_courses`
--
ALTER TABLE `student_courses`
  MODIFY `st_course_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_fee_details`
--
ALTER TABLE `student_fee_details`
  MODIFY `s_fee_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_register`
--
ALTER TABLE `student_register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `super_admins`
--
ALTER TABLE `super_admins`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_type`
--
ALTER TABLE `users_type`
  MODIFY `users_type_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
