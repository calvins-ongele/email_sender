-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 12, 2026 at 02:35 PM
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
-- Database: `mizizimu_classifieds`
--

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
(2130, 'calvinsongele@gmail.com logged into the system at 2024-07-04, 21:40:54| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 287, 'Account', '1720118454'),
(2131, 'calvinsongele@gmail.com logged into the system at 2024-07-05, 11:16:23| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 287, 'Account', '1720167383'),
(2132, 'calvinsongele@gmail.com logged into the system at 2024-07-05, 16:40:13| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 287, 'Account', '1720186813'),
(2133, 'calvinsongele@gmail.com logged into the system at 2024-07-07, 18:00:54| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 287, 'Account', '1720364454'),
(2134, 'calvinsongele@gmail.com logged into the system at 2024-07-07, 21:01:07| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 287, 'Account', '1720375267'),
(2135, 'johndoe1s@gmail.com signup into the system at 2024-07-07, 23:18:17| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 1718, 'Account', '1720383497'),
(2136, 'calvinsongele@gmail.com logged into the system at 2024-07-07, 23:24:10| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 287, 'Account', '1720383850'),
(2137, 'calvinnalexo@gmail.com logged into the system at 2024-07-08, 16:36:28| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 1, 'Account', '1720445788'),
(2138, 'calvinsongele@gmail.com logged into the system at 2024-07-08, 23:38:31| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 287, 'Account', '1720471111'),
(2139, 'calvinsongele@gmail.com logged into the system at 2024-07-09, 11:49:10| <br> Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Mobile Safari/537.36', 287, 'Account', '1720514950'),
(2140, 'calvinsongele@gmail.com logged into the system at 2024-07-09, 12:54:31| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 287, 'Account', '1720518871'),
(2141, 'calvinsongele@gmail.com logged into the system at 2024-07-09, 12:59:16| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 287, 'Account', '1720519156'),
(2142, 'calvinsongele@gmail.com logged into the system at 2024-07-09, 16:56:23| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 287, 'Account', '1720533383'),
(2143, 'calvinsongele@gmail.com logged into the system at 2024-07-15, 18:17:28| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 287, 'Account', '1721056648'),
(2144, 'calvinsongele@gmail.com logged into the system at 2024-07-23, 23:04:56| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 287, 'Account', '1721765096'),
(2145, 'calvinsongele@gmail.com logged into the system at 2024-07-25, 01:13:45| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 287, 'Account', '1721859225'),
(2146, 'calvinsongele@gmail.com logged into the system at 2024-07-25, 13:27:03| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 287, 'Account', '1721903223'),
(2147, 'calvinsongele@gmail.com logged into the system at 2024-07-25, 17:18:08| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 287, 'Account', '1721917088'),
(2148, 'calvinsongele@gmail.com logged into the system at 2024-07-25, 17:21:53| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 287, 'Account', '1721917313'),
(2149, 'calvinsongele@gmail.com logged into the system at 2024-07-25, 21:05:54| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 287, 'Account', '1721930754'),
(2150, 'calvinsongele@gmail.com logged into the system at 2024-07-26, 02:04:22| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 287, 'Account', '1721948662'),
(2151, 'calvinsongele@gmail.com logged into the system at 2024-07-26, 09:34:26| <br> Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Mobile Safari/537.36', 287, 'Account', '1721975666'),
(2152, 'calvinsongele@gmail.com logged into the system at 2024-07-26, 10:59:51| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 287, 'Account', '1721980791'),
(2153, 'calvinsongele@gmail.com logged into the system at 2024-07-26, 14:38:35| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 287, 'Account', '1721993915'),
(2154, 'calvinsongele@gmail.com logged into the system at 2024-07-26, 20:38:16| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 287, 'Account', '1722015496'),
(2155, 'calvinsongele@gmail.com logged into the system at 2024-07-26, 23:07:01| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 287, 'Account', '1722024421'),
(2156, 'calvinsongele@gmail.com logged into the system at 2024-07-27, 01:11:43| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 287, 'Account', '1722031903'),
(2157, 'calvinsongele@gmail.com logged into the system at 2024-07-27, 01:29:48| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 287, 'Account', '1722032988'),
(2158, 'calvinsongele@gmail.com logged into the system at 2024-07-27, 02:49:37| <br> Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Mobile Safari/537.36', 287, 'Account', '1722037777'),
(2159, 'calvinsongele@gmail.com logged into the system at 2024-07-27, 13:37:15| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 287, 'Account', '1722076635'),
(2160, 'calvinsongele@gmail.com logged into the system at 2024-07-27, 20:36:58| <br> Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Mobile Safari/537.36', 287, 'Account', '1722101818'),
(2161, 'calvinsongele@gmail.com logged into the system at 2024-07-28, 00:38:11| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 287, 'Account', '1722116291'),
(2162, 'calvinsongele@gmail.com logged into the system at 2024-07-28, 14:22:34| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 287, 'Account', '1722165754'),
(2163, 'calvinnalexo@gmail.com logged into the system at 2024-07-28, 14:51:37| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 1, 'Account', '1722167497'),
(2164, 'calvinsongele@gmail.com logged into the system at 2024-07-28, 20:39:53| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 287, 'Account', '1722188393'),
(2165, 'calvinsongele@gmail.com logged into the system at 2024-07-28, 20:43:29| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 287, 'Account', '1722188609'),
(2166, 'calvinsongele@gmail.com logged into the system at 2024-07-29, 00:42:13| <br> Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Mobile Safari/537.36', 287, 'Account', '1722202933'),
(2167, 'calvinsongele@gmail.com logged into the system at 2024-07-29, 01:20:23| <br> Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Mobile Safari/537.36', 287, 'Account', '1722205223'),
(2168, 'calvinsongele@gmail.com logged into the system at 2024-07-29, 17:29:59| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 287, 'Account', '1722263399'),
(2169, 'calvinsongele@gmail.com logged into the system at 2024-07-29, 18:05:14| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 287, 'Account', '1722265514'),
(2170, 'calvinsongele@gmail.com logged into the system at 2024-07-29, 21:56:27| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 287, 'Account', '1722279387'),
(2171, 'calvinsongele@gmail.com logged into the system at 2024-07-30, 05:52:31| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 287, 'Account', '1722307951'),
(2172, 'calvinsongele@gmail.com logged into the system at 2024-07-31, 00:46:25| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 287, 'Account', '1722375985'),
(2173, 'calvinsongele@gmail.com logged into the system at 2024-07-31, 15:07:53| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 287, 'Account', '1722427673'),
(2174, 'calvinsongele@gmail.com logged into the system at 2024-07-31, 17:05:03| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 287, 'Account', '1722434703'),
(2175, 'calvinsongele@gmail.com logged into the system at 2024-07-31, 22:55:47| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 287, 'Account', '1722455747'),
(2176, 'calvinsongele@gmail.com logged into the system at 2024-07-31, 23:32:07| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 287, 'Account', '1722457927'),
(2177, 'calvinsongele@gmail.com completed a password reset at 2024-08-01, 07:28:49| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', NULL, 'Account', '1722486529'),
(2178, 'calvinsongele@gmail.com logged into the system at 2024-08-01, 07:28:59| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 287, 'Account', '1722486539'),
(2179, 'calvinsongele@gmail.com logged into the system at 2024-08-03, 15:40:23| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 287, 'Account', '1722688823'),
(2180, 'calvinsongele@gmail.com logged into the system at 2024-08-05, 17:46:30| <br> Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Mobile Safari/537.36', 287, 'Account', '1722869190'),
(2181, 'calvinsongele@gmail.com logged into the system at 2024-08-08, 17:51:49| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 287, 'Account', '1723128709'),
(2182, 'calvinsongele@gmail.com logged into the system at 2024-08-16, 00:05:54| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 287, 'Account', '1723755954'),
(2183, 'calvinsongele@gmail.com logged into the system at 2024-08-16, 01:50:01| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 287, 'Account', '1723762201'),
(2184, 'calvinsongele@gmail.com logged into the system at 2024-08-16, 09:30:15| <br> Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Mobile Safari/537.36', 287, 'Account', '1723789815'),
(2185, 'calvinsongele@gmail.com logged into the system at 2024-08-16, 09:50:38| <br> Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Mobile Safari/537.36', 287, 'Account', '1723791038'),
(2186, 'calvinsongele@gmail.com logged into the system at 2024-08-16, 10:21:10| <br> Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Mobile Safari/537.36', 287, 'Account', '1723792870'),
(2187, 'calvinsongele@gmail.com logged into the system at 2024-08-16, 16:52:25| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 287, 'Account', '1723816345'),
(2188, 'calvinsongele@gmail.com logged into the system at 2024-08-20, 13:38:56| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 287, 'Account', '1724150336'),
(2189, 'calvinsongele@gmail.com logged into the system at 2024-08-20, 17:02:06| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 287, 'Account', '1724162526'),
(2190, 'calvinsongele@gmail.com logged into the system at 2024-08-20, 23:20:52| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 287, 'Account', '1724185252'),
(2191, 'calvinsongele@gmail.com logged into the system at 2024-09-02, 22:57:28| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 287, 'Account', '1725307048'),
(2192, 'calvinsongele@gmail.com logged into the system at 2024-09-02, 23:16:15| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 287, 'Account', '1725308175'),
(2193, 'calvinsongele@gmail.com logged into the system at 2024-09-02, 23:18:18| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 287, 'Account', '1725308298'),
(2194, 'calvinsongele@gmail.com logged into the system at 2024-09-02, 23:19:00| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 287, 'Account', '1725308340'),
(2195, 'calvinsongele@gmail.com logged into the system at 2024-09-02, 23:25:50| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 287, 'Account', '1725308750'),
(2196, 'calvinsongele@gmail.com logged into the system at 2024-09-03, 11:37:11| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 287, 'Account', '1725352631'),
(2197, 'calvinsongele@gmail.com logged into the system at 2024-09-03, 16:23:17| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 287, 'Account', '1725369797'),
(2198, 'calvinsongele@gmail.com logged into the system at 2024-09-04, 20:55:15| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 287, 'Account', '1725472515'),
(2199, 'calvinsongele@gmail.com logged into the system at 2024-09-21, 15:10:31| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 287, 'Account', '1726920631'),
(2200, 'calvinsongele@gmail.com logged into the system at 2024-09-21, 15:10:55| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 287, 'Account', '1726920655'),
(2201, 'calvinsongele@gmail.com logged into the system at 2024-09-22, 09:57:53| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 287, 'Account', '1726988273'),
(2202, 'calvinsongele@gmail.com logged into the system at 2024-09-24, 00:36:00| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 287, 'Account', '1727127360'),
(2203, 'calvinsongele@gmail.com logged into the system at 2024-09-24, 15:15:41| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 287, 'Account', '1727180141'),
(2204, 'calvinnalexo@gmail.com logged into the system at 2024-09-30, 14:15:52| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 1, 'Account', '1727694952'),
(2205, 'calvinsongele@gmail.com logged into the system at 2024-09-30, 21:34:52| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 287, 'Account', '1727721292'),
(2206, 'calvinsongele@gmail.com logged into the system at 2024-10-01, 11:21:08| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 287, 'Account', '1727770868'),
(2207, 'calvinsongele@gmail.com logged into the system at 2024-10-24, 12:19:55| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 287, 'Account', '1729761595'),
(2208, 'calvinsongele@gmail.com subscribed to newsletter at 2025-06-17, 13:44:01', NULL, 'Account', '1750157041'),
(2209, 'calvinsongele@gmail.com subscribed at 2025-06-17, 13:44:01', NULL, 'Company', '1750157041'),
(2210, 'hills1997h@gmail.com signup into the system at 2025-12-22, 19:33:27| <br> Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Mobile Safari/537.36', 1775, 'Account', '1766421207'),
(2211, 'hills1997h@gmail.com logged into the system at 2025-12-23, 00:29:10| <br> Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Mobile Safari/537.36', 1775, 'Account', '1766438950'),
(2212, 'hills1997h@gmail.com logged into the system at 2025-12-23, 17:36:23| <br> Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Mobile Safari/537.36', 1775, 'Account', '1766500583'),
(2213, 'calvinsongele@gmail.com logged into the system at 2026-03-30, 15:28:13| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Safari/537.36', 287, 'Account', '1774873693'),
(2214, 'peterblake2022@gmail.com signup into the system at 2026-06-05, 10:49:29| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36', 1779, 'Account', '1780645769'),
(2215, 'peterblake2022@gmail.com logged into the system at 2026-06-05, 10:51:09| <br> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36', 1779, 'Account', '1780645869');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`l_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `l_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2216;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
