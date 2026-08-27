-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 27, 2026 at 05:06 PM
-- Server version: 10.11.18-MariaDB-cll-lve
-- PHP Version: 8.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mnsusnet_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `c_ID` int(11) NOT NULL,
  `c_name` varchar(100) DEFAULT NULL,
  `c_short_desc` varchar(100) DEFAULT NULL,
  `c_description` text DEFAULT NULL,
  `c_logo` varchar(100) DEFAULT NULL,
  `c_tel` varchar(100) DEFAULT NULL,
  `c_email` varchar(100) DEFAULT NULL,
  `c_year_established` int(11) DEFAULT NULL,
  `c_icon` varchar(20) DEFAULT NULL,
  `c_smtp_server` varchar(70) DEFAULT NULL,
  `c_send_from_password` varchar(100) DEFAULT NULL,
  `c_send_from` varchar(100) DEFAULT NULL,
  `c_primary_color` varchar(40) DEFAULT NULL,
  `user_loop_sequence` int(11) NOT NULL DEFAULT 24,
  `enable_maintenance_mode` int(11) DEFAULT 0,
  `c_address` varchar(100) DEFAULT NULL,
  `c_smtp_port` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`c_ID`, `c_name`, `c_short_desc`, `c_description`, `c_logo`, `c_tel`, `c_email`, `c_year_established`, `c_icon`, `c_smtp_server`, `c_send_from_password`, `c_send_from`, `c_primary_color`, `user_loop_sequence`, `enable_maintenance_mode`, `c_address`, `c_smtp_port`) VALUES
(1, 'Cashier Office', 'The Simpler, Safer way to pay and get paid', '', 'Screenshot_6-removebg-preview.png', '+254700000000', 'cashiers@mnsus.net', 2023, 'icon.jpg', 'mail.mnsus.net', 'Mnsu@2022', 'cashiers@mnsus.net', '#3cb043', 24, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `email_logs`
--

CREATE TABLE `email_logs` (
  `el_ID` int(11) NOT NULL,
  `recipient` varchar(70) DEFAULT NULL,
  `status` varchar(30) DEFAULT 'pending',
  `message` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `email_logs`
--

INSERT INTO `email_logs` (`el_ID`, `recipient`, `status`, `message`) VALUES
(53, 'calvinsongele@gmail.com', 'success', ''),
(54, 'calvinsongele@gmail.com', 'success', ''),
(55, 'calvinsongele@gmail.com', 'success', '');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `l_ID` int(20) NOT NULL,
  `l_message` text DEFAULT NULL,
  `l_by` int(11) DEFAULT NULL,
  `l_type` varchar(50) DEFAULT NULL,
  `l_date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`l_ID`, `l_message`, `l_by`, `l_type`, `l_date`) VALUES
(2225, 'admin@gmail.com logged into the system at 2026-08-27, 15:34:40| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/151.0.0.0 Safari/537.36', 1, 'Account', '1787834080');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_ID` int(11) NOT NULL,
  `user_fname` varchar(100) DEFAULT 'Fname',
  `user_email` varchar(100) NOT NULL,
  `user_tel` varchar(30) DEFAULT NULL,
  `user_pass` varchar(255) DEFAULT NULL,
  `user_status` varchar(10) DEFAULT 'Active',
  `user_kyc_compliant` varchar(10) DEFAULT 'no',
  `user_role` varchar(20) DEFAULT 'Customer',
  `user_dp` varchar(100) DEFAULT 'dp_default.jpg',
  `user_dob` varchar(100) DEFAULT '01/01/2000',
  `user_gender` varchar(10) DEFAULT 'M',
  `user_ID_number` varchar(50) DEFAULT NULL,
  `user_ID_passport` varchar(100) DEFAULT NULL,
  `user_country` varchar(100) DEFAULT NULL,
  `user_town` varchar(100) DEFAULT NULL,
  `user_address` varchar(100) DEFAULT NULL,
  `user_postal_address` varchar(50) DEFAULT '00',
  `user_taxpin` varchar(100) DEFAULT NULL,
  `user_datecreated` varchar(100) DEFAULT NULL,
  `user_tokens` varchar(20) DEFAULT '0',
  `user_token_currency` varchar(10) DEFAULT 'KES',
  `user_auth_token` text DEFAULT NULL,
  `user_auth_expiry` varchar(50) DEFAULT NULL,
  `user_loan_limit` int(11) NOT NULL,
  `user_last_login` varchar(40) DEFAULT NULL,
  `user_dateupdated` varchar(40) DEFAULT NULL,
  `user_url` varchar(40) DEFAULT NULL,
  `user_key` varchar(100) DEFAULT NULL,
  `user_key_web` varchar(70) DEFAULT NULL,
  `user_pin` varchar(255) DEFAULT NULL,
  `user_aff_code` varchar(70) DEFAULT NULL,
  `user_ref_by` varchar(70) DEFAULT NULL,
  `user_aff_status` varchar(15) DEFAULT NULL,
  `user_boost_package` int(11) DEFAULT 0,
  `user_tel_verified` int(11) DEFAULT 0,
  `user_email_verified` int(11) DEFAULT 0,
  `user_phone_xtra` varchar(50) DEFAULT NULL,
  `user_hold_status` int(5) DEFAULT 0,
  `uuid` varchar(100) DEFAULT uuid(),
  `login_id` varchar(50) DEFAULT NULL,
  `login_id_updated_at` varchar(50) DEFAULT NULL,
  `user_about` text DEFAULT NULL,
  `user_avg_rating` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_ID`, `user_fname`, `user_email`, `user_tel`, `user_pass`, `user_status`, `user_kyc_compliant`, `user_role`, `user_dp`, `user_dob`, `user_gender`, `user_ID_number`, `user_ID_passport`, `user_country`, `user_town`, `user_address`, `user_postal_address`, `user_taxpin`, `user_datecreated`, `user_tokens`, `user_token_currency`, `user_auth_token`, `user_auth_expiry`, `user_loan_limit`, `user_last_login`, `user_dateupdated`, `user_url`, `user_key`, `user_key_web`, `user_pin`, `user_aff_code`, `user_ref_by`, `user_aff_status`, `user_boost_package`, `user_tel_verified`, `user_email_verified`, `user_phone_xtra`, `user_hold_status`, `uuid`, `login_id`, `login_id_updated_at`, `user_about`, `user_avg_rating`) VALUES
(1, 'CA  ', 'admin@gmail.com', '254700000000', '$2y$10$nN8cdOfgCSgvNXMemOhqtuqh6dXoyqJhPPtPQA/upwKgpDi54XB8W', 'Active', 'yes', 'Admin', 'user_dp_pMBA8GmJHvXSZZgvtInG806507.jpeg', '2023-02-24T00:00:00.000', 'M', NULL, 'user_ID_passport_VuhwWjnAHGl3ZYJLKe7b441288.jpeg', 'Kenya', 'Nairobi', 'Nairobi County', '00', '', '1693699200', '-1', 'KES', NULL, NULL, 0, '1786347685', NULL, 'MdgD6LDSQiqWDMQazw2QSbw8B0YWb9', '45CmD1EYwABrdXzAMbTipJW91e9NyAEzYdbunLhF', 'em0bDfWW4WPt0Y8SZqePbyfHpOYluX1iC5EmetEv', '$2y$10$dvtfC0MGHoGUdwcKVPzfCuLEknN85X02nRSKeUnD.uLaCOQ0cMEpq', 'AMB-1', NULL, 'False', 0, 1, 1, NULL, 0, 'c3a126f0-8a6f-11f1-8196-08f1ea8e3e80', 'F8iE810V27yO8ocLsHsqFhLsrE1c5C', '1785239263', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`c_ID`);

--
-- Indexes for table `email_logs`
--
ALTER TABLE `email_logs`
  ADD PRIMARY KEY (`el_ID`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`l_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_ID`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `c_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `email_logs`
--
ALTER TABLE `email_logs`
  MODIFY `el_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `l_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2226;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1783;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
