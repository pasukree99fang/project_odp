-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2020 at 01:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `odp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_affiliation`
--

CREATE TABLE `tb_affiliation` (
  `afft_id` int(11) NOT NULL,
  `afft_user_id` int(50) NOT NULL,
  `afft_position_id` int(50) NOT NULL,
  `afft_department_id` int(50) NOT NULL,
  `afft_sub_department_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_affiliation`
--

INSERT INTO `tb_affiliation` (`afft_id`, `afft_user_id`, `afft_position_id`, `afft_department_id`, `afft_sub_department_id`) VALUES
(1, 1, 3, 1, 1),
(2, 2, 2, 1, 1),
(3, 3, 3, 1, 1),
(4, 4, 1, 0, 0),
(5, 0, 0, 0, 0),
(6, 0, 0, 0, 0),
(7, 0, 0, 0, 0),
(8, 0, 0, 0, 0),
(9, 0, 0, 0, 0),
(10, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_approval`
--

CREATE TABLE `tb_approval` (
  `aval_id` int(11) NOT NULL,
  `aval_approve` varchar(50) NOT NULL,
  `aval_specify` varchar(100) NOT NULL,
  `aval_date_time` varchar(50) NOT NULL,
  `aval_approver_id` int(50) NOT NULL,
  `aval_document_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_approver`
--

CREATE TABLE `tb_approver` (
  `aver_id` int(11) NOT NULL,
  `aver_affiliation_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_company`
--

CREATE TABLE `tb_company` (
  `cpn_id` int(11) NOT NULL,
  `cpn_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_company`
--

INSERT INTO `tb_company` (`cpn_id`, `cpn_name`) VALUES
(1, '2YOU');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `ct_id` int(11) NOT NULL,
  `ct_firstname` varchar(50) NOT NULL,
  `ct_lastname` varchar(50) NOT NULL,
  `ct_email` varchar(50) NOT NULL,
  `ct_company` varchar(100) NOT NULL,
  `ct_contact_company` varchar(300) NOT NULL,
  `ct_admin_number` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_department`
--

CREATE TABLE `tb_department` (
  `dpm_id` int(11) NOT NULL,
  `dpm_name` varchar(100) NOT NULL,
  `dpm_company_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_department`
--

INSERT INTO `tb_department` (`dpm_id`, `dpm_name`, `dpm_company_id`) VALUES
(1, 'IT', 1),
(17, 'Infra', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_document`
--

CREATE TABLE `tb_document` (
  `doc_id` int(11) NOT NULL,
  `doc_date_time` varchar(50) NOT NULL,
  `doc_document` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `doc_form_id` varchar(50) NOT NULL,
  `doc_user_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_document`
--

INSERT INTO `tb_document` (`doc_id`, `doc_date_time`, `doc_document`, `doc_form_id`, `doc_user_id`) VALUES
(1, '21/05/2020 07:22', NULL, '16', 'sit60130500063'),
(2, '21/05/2020 07:24', NULL, '14', 'sit60130500063'),
(3, '21/05/2020 07:38', NULL, '1', 'sit60130500107'),
(4, '21/05/2020 07:56', NULL, '1', 'sit60130500107'),
(5, '15/09/2020 11:49', NULL, '1', 'sit60130500063'),
(6, '23/09/2020 09:34', NULL, '1', 'sit60130500006'),
(7, '23/09/2020 09:56', NULL, '16', 'sit60130500063'),
(8, '26/09/2020 08:30', NULL, '14', 'sit60130500006'),
(9, '26/09/2020 11:49', NULL, '17', 'sit60130500063');

-- --------------------------------------------------------

--
-- Table structure for table `tb_form`
--

CREATE TABLE `tb_form` (
  `for_id` int(11) NOT NULL,
  `for_form_code` varchar(50) NOT NULL,
  `for_form_element_id` int(50) NOT NULL,
  `for_user_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_form_element`
--

CREATE TABLE `tb_form_element` (
  `ele_id` int(11) NOT NULL,
  `ele_title` varchar(50) DEFAULT NULL,
  `ele_type` varchar(50) DEFAULT NULL,
  `ele_version_id` varchar(50) DEFAULT NULL,
  `ele_data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`ele_data`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_form_element`
--

INSERT INTO `tb_form_element` (`ele_id`, `ele_title`, `ele_type`, `ele_version_id`, `ele_data`) VALUES
(1, NULL, NULL, 'unicorn.jpg', NULL),
(6, NULL, NULL, 'logo.png', NULL),
(7, NULL, NULL, '0_f5541_1fbf206_XXXL.jpg', NULL),
(8, NULL, NULL, '0_f5541_1fbf206_XXXL.jpg', NULL),
(9, NULL, NULL, 'S__4308996.jpg', NULL),
(10, NULL, NULL, 'ktbpasu.jpg', NULL),
(14, 'PackageDG', NULL, 'PackageDG.png', NULL),
(15, 'PackageDG', NULL, 'cdg000.png', NULL),
(16, 'pasukree', NULL, 'Untitled Diagram.png', NULL),
(17, '123456789', NULL, 'cdg000.png', NULL),
(18, '', NULL, 'PackageDG.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_notification`
--

CREATE TABLE `tb_notification` (
  `noti_id` int(11) NOT NULL,
  `noti_user_id` int(50) NOT NULL,
  `noti_status_id` int(50) NOT NULL,
  `member_token` varchar(100) DEFAULT NULL,
  `msg_text` varchar(100) DEFAULT NULL,
  `msg_status` int(50) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_position`
--

CREATE TABLE `tb_position` (
  `pst_id` int(11) NOT NULL,
  `pst_name` varchar(100) NOT NULL,
  `pst_sub_department_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_position`
--

INSERT INTO `tb_position` (`pst_id`, `pst_name`, `pst_sub_department_id`) VALUES
(1, 'CEO', 0),
(2, 'Manager', 1),
(3, 'Employee', 1),
(11, 'Support', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `tus_id` int(11) NOT NULL,
  `tus_document_id` int(50) NOT NULL,
  `tus_approver_id` int(50) NOT NULL,
  `tus_level` int(50) NOT NULL,
  `tus_status` varchar(50) NOT NULL,
  `tus_date_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_step_approver`
--

CREATE TABLE `tb_step_approver` (
  `sapp_id` int(11) NOT NULL,
  `sapp_form_id` varchar(50) NOT NULL,
  `sapp_approver_id` varchar(50) NOT NULL,
  `sapp_level` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_step_approver`
--

INSERT INTO `tb_step_approver` (`sapp_id`, `sapp_form_id`, `sapp_approver_id`, `sapp_level`) VALUES
(1, 'PackageDG', 'sit60130500006', 1),
(2, 'PackageDG', 'sit60130500006', 1),
(3, 'pasukree', 'sit60130500006', 1),
(4, '123456789', 'sit60130500006', 1),
(5, '', 'sit60130500006', 1),
(6, 'form', 'sit60130500063', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sub_department`
--

CREATE TABLE `tb_sub_department` (
  `sub_id` int(11) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_department_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_sub_department`
--

INSERT INTO `tb_sub_department` (`sub_id`, `sub_name`, `sub_department_id`) VALUES
(1, 'Security', 1),
(10, 'System check', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `us_id` int(11) NOT NULL,
  `us_username` varchar(50) NOT NULL,
  `us_password` varchar(50) NOT NULL,
  `us_firstname` varchar(50) NOT NULL,
  `us_lastname` varchar(50) NOT NULL,
  `us_email` varchar(50) NOT NULL,
  `us_password_approve` varchar(50) NOT NULL,
  `us_manager_id` varchar(50) NOT NULL,
  `us_manager` varchar(50) DEFAULT NULL,
  `us_isadmin` varchar(50) NOT NULL,
  `us_isapproval` varchar(50) NOT NULL,
  `us_company_id` int(50) NOT NULL,
  `us_photo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`us_id`, `us_username`, `us_password`, `us_firstname`, `us_lastname`, `us_email`, `us_password_approve`, `us_manager_id`, `us_manager`, `us_isadmin`, `us_isapproval`, `us_company_id`, `us_photo`) VALUES
(1, 'sit60130500063', '60130500063', 'Pasukree', 'Khodnarin', 'pasukree.khodnarin@gmail.com', 'pasu99', 'sit60130500006', 'no', 'yes', 'no', 1, 'pasu.jpg'),
(2, 'sit60130500006', '60130500006', 'Kemchira', 'Paengnuch', 'kemchira.pangk@mail.kmutt.ac.th', 'kemji99', '', 'yes', 'no', 'no', 1, NULL),
(3, 'sit60130500107', '60130500107', 'Yanisa', 'Kanchai', 'yanisa.18ns@mail.kmutt.ac.th', 'yani99', 'sit60130500006', 'no', 'no', 'no', 1, NULL),
(4, 'sit60130500000', '60130500000', 'Siri', 'Mongkhon', 'pasukree.money@gmai.com', 'siri99', '', 'yes', 'no', 'yes', 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_affiliation`
--
ALTER TABLE `tb_affiliation`
  ADD PRIMARY KEY (`afft_id`);

--
-- Indexes for table `tb_approval`
--
ALTER TABLE `tb_approval`
  ADD PRIMARY KEY (`aval_id`);

--
-- Indexes for table `tb_approver`
--
ALTER TABLE `tb_approver`
  ADD PRIMARY KEY (`aver_id`);

--
-- Indexes for table `tb_company`
--
ALTER TABLE `tb_company`
  ADD PRIMARY KEY (`cpn_id`);

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`ct_id`);

--
-- Indexes for table `tb_department`
--
ALTER TABLE `tb_department`
  ADD PRIMARY KEY (`dpm_id`);

--
-- Indexes for table `tb_document`
--
ALTER TABLE `tb_document`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `tb_form`
--
ALTER TABLE `tb_form`
  ADD PRIMARY KEY (`for_id`);

--
-- Indexes for table `tb_form_element`
--
ALTER TABLE `tb_form_element`
  ADD PRIMARY KEY (`ele_id`);

--
-- Indexes for table `tb_notification`
--
ALTER TABLE `tb_notification`
  ADD PRIMARY KEY (`noti_id`);

--
-- Indexes for table `tb_position`
--
ALTER TABLE `tb_position`
  ADD PRIMARY KEY (`pst_id`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`tus_id`);

--
-- Indexes for table `tb_step_approver`
--
ALTER TABLE `tb_step_approver`
  ADD PRIMARY KEY (`sapp_id`);

--
-- Indexes for table `tb_sub_department`
--
ALTER TABLE `tb_sub_department`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`us_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_affiliation`
--
ALTER TABLE `tb_affiliation`
  MODIFY `afft_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_approval`
--
ALTER TABLE `tb_approval`
  MODIFY `aval_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_approver`
--
ALTER TABLE `tb_approver`
  MODIFY `aver_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_company`
--
ALTER TABLE `tb_company`
  MODIFY `cpn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `ct_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_department`
--
ALTER TABLE `tb_department`
  MODIFY `dpm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_document`
--
ALTER TABLE `tb_document`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_form`
--
ALTER TABLE `tb_form`
  MODIFY `for_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_form_element`
--
ALTER TABLE `tb_form_element`
  MODIFY `ele_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_notification`
--
ALTER TABLE `tb_notification`
  MODIFY `noti_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_position`
--
ALTER TABLE `tb_position`
  MODIFY `pst_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `tus_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_step_approver`
--
ALTER TABLE `tb_step_approver`
  MODIFY `sapp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_sub_department`
--
ALTER TABLE `tb_sub_department`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
