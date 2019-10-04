-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2019 at 09:11 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drappoinment`
--

-- --------------------------------------------------------

--
-- Table structure for table `assistant`
--

CREATE TABLE `assistant` (
  `id` int(11) NOT NULL,
  `name` varchar(240) NOT NULL,
  `password` varchar(240) NOT NULL,
  `assis_id` int(20) NOT NULL,
  `email` varchar(240) NOT NULL,
  `degree` varchar(240) NOT NULL,
  `age` int(20) NOT NULL,
  `phone` int(20) NOT NULL,
  `bio` varchar(240) NOT NULL,
  `address` varchar(240) NOT NULL,
  `gender` text NOT NULL,
  `img` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assistant`
--

INSERT INTO `assistant` (`id`, `name`, `password`, `assis_id`, `email`, `degree`, `age`, `phone`, `bio`, `address`, `gender`, `img`) VALUES
(1, 'Saber Ahmed Saimun', '1234', 14, 'saber@name.com', '200000000', 22, 1685310779, 'vrsty  ', 'Chandgaon,Chittagong', 'Female', ''),
(5, 'Saber Ahmed Saimun', '1234', 0, 'saimu4869@gmail.com', '1685310779', 38, 1685310779, 'csdfsfmnvkk', 'Chandgaon,Chittagong', 'Female', ''),
(7, 'Saber Ahmed Saimun', '338499440', 0, 'saber@admin.com', '1685310779', 34, 1685310779, 'wqdd', 'Chandgaon,Chittagong', 'Male', ''),
(9, 'Saber Ahmed Saimun', '098765', 0, 'saber@gmail.com', '1685310779', 34, 1685310779, 'csdfsfmnvkk', 'Chandgaon,Chittagong', 'Male', 's6.jpg'),
(10, 'Saber Ahmed Saimun', '1234', 234, 'saber@assistant.com', '1685310779', 45, 1685310779, 'i am nurse    ', 'Chandgaon,Chittagong', 'Male', 's8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `assistive_data`
--

CREATE TABLE `assistive_data` (
  `assistive_id` int(11) NOT NULL,
  `patient_id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `address` varchar(999) NOT NULL,
  `blood` varchar(20) NOT NULL,
  `systolic` varchar(20) NOT NULL,
  `diastolic` varchar(20) NOT NULL,
  `problem` varchar(999) NOT NULL,
  `disease` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assistive_data`
--

INSERT INTO `assistive_data` (`assistive_id`, `patient_id`, `first_name`, `last_name`, `email`, `phone`, `gender`, `age`, `address`, `blood`, `systolic`, `diastolic`, `problem`, `disease`, `body`, `weight`, `date`) VALUES
(8, 2, 'Saber', 'Saimun', 'saber@yahoo.com', '1685310779', 'Female', '44', ' bahaddarhat, chandgaon  ', 'B+', '60', '110', 'asd asd asd', 'fbfghngf', '90', '53', '2019-08-31'),
(9, 3, 'patient', 'one', 'asd@gmail.com', '12345678901', 'Male', '21', ' fbgfb  ', 'AB', '60', '120', 'cough ', 'synous ', '100', '53', '2019-08-31'),
(10, 5, 'tusi', 'shaorin', 'tusi@gmail.com', '123456789', 'Male', '21', ' fbgfb  ', 'AB', '80', '120', 'asd asd asd', 'cough', '102', '53', '2019-09-01'),
(11, 5, 'tusi', 'shaorin', 'tusi@gmail.com', '123456789', 'Male', '21', ' fbgfb  ', 'AB', '70', '100', 'cannt eat  vomiting ', 'cough', '100', '60', '2019-08-14'),
(12, 5, 'tusi', 'shaorin', 'tusi@gmail.com', '123456789', 'Male', '21', ' fbgfb  ', 'ab', '60', '110', 'cannt eat  vomiting ', 'synous ', '100', '60', '2019-08-08'),
(13, 5, 'tusi', 'shaorin', 'tusi@gmail.com', '123456789', 'Male', '21', ' fbgfb  ', 'O+', '80', '150', 'asd asd asd', 'cough', '100', '60', '2019-09-03');

-- --------------------------------------------------------

--
-- Table structure for table `a_dmin`
--

CREATE TABLE `a_dmin` (
  `id` int(20) NOT NULL,
  `user_name` varchar(240) NOT NULL,
  `email` varchar(240) NOT NULL,
  `password` varchar(240) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(240) NOT NULL,
  `degree` varchar(240) NOT NULL,
  `govt_reg` varchar(240) NOT NULL,
  `gender` varchar(240) NOT NULL,
  `phone` int(20) NOT NULL,
  `p_status` varchar(240) NOT NULL,
  `attached_h` varchar(240) NOT NULL,
  `bio` varchar(240) NOT NULL,
  `spaciality` varchar(240) NOT NULL,
  `address` varchar(240) NOT NULL,
  `img` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a_dmin`
--

INSERT INTO `a_dmin` (`id`, `user_name`, `email`, `password`, `date`, `name`, `degree`, `govt_reg`, `gender`, `phone`, `p_status`, `attached_h`, `bio`, `spaciality`, `address`, `img`) VALUES
(1, 'Dr. Tushi Shaorin', 'dr@gmail.com', '12345', '2019-05-23', 'Dr. Tushi shaorin', 'Degree: M.B.B.S(Chittagong);MCPS(Radio Therapy);FCPS(RadioTherapy)s', '12345', 'Female', 1812345678, 'Assistant Professor,Radiotherapy,Dept Ward 6s', 'Chattagram Ma-Shishu Medical College Hospitals', 'I am a doctor ofs', '123', '1675/A,O.R Nizam Road,West Gate of CMCH,Chittagongs', 's10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_prescription`
--

CREATE TABLE `doctor_prescription` (
  `id` int(11) NOT NULL,
  `press_id` varchar(240) NOT NULL,
  `p_test` varchar(240) NOT NULL,
  `t_report` varchar(240) NOT NULL,
  `prescribe` varchar(240) NOT NULL,
  `advice` varchar(240) NOT NULL,
  `refer` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_prescription`
--

INSERT INTO `doctor_prescription` (`id`, `press_id`, `p_test`, `t_report`, `prescribe`, `advice`, `refer`) VALUES
(1, '22', 'saki', 'assa', 'napa', 'lhil', ',m,m'),
(2, '34', 'analk', 'assa', 'napa', 'sd', 'cd');

-- --------------------------------------------------------

--
-- Table structure for table `patientregistration`
--

CREATE TABLE `patientregistration` (
  `patient_id` int(11) NOT NULL,
  `first_name` varchar(240) NOT NULL,
  `last_name` varchar(240) NOT NULL,
  `email` varchar(240) NOT NULL,
  `password` varchar(240) NOT NULL,
  `phone` varchar(240) NOT NULL,
  `gender` text NOT NULL,
  `age` int(20) NOT NULL,
  `address` varchar(240) NOT NULL,
  `t_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientregistration`
--

INSERT INTO `patientregistration` (`patient_id`, `first_name`, `last_name`, `email`, `password`, `phone`, `gender`, `age`, `address`, `t_img`) VALUES
(1, 'Saber', 'Saimun', 'saber@gmail.com', '12345', '1685310779', 'Male', 34, 'Chandgaon,Chittagong', 's1.jpg'),
(2, 'Saber', 'Saimun', 'saber@yahoo.com', '12345', '1685310779', 'Female', 44, 'bahaddarhat, chandgaon', 's6.jpg'),
(3, 'patient', 'one', 'asd@gmail.com', '12345', '12345678901', 'Male', 21, 'fbgfb', '24852078_917149051772840_508043966633780554_n.jpg'),
(4, 'new ', 'one', 'poiu@gmail.com', '12345', '12345678901', 'Male', 32, '1asdfg', '26907705_543498042674519_9149647128242401234_n.jpg'),
(5, 'tusi', 'shaorin', 'tusi@gmail.com', 'tusi', '123456789', 'Male', 21, 'fbgfb', '26994024_3829584660703623_8590947822988760575_n.jpg'),
(6, 'asd', 'asd', 'zxc@gmail.com', '123456', '1230456785', 'Male', 32, 'asfddfg', '26907705_543498042674519_9149647128242401234_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `pres_id` int(11) NOT NULL,
  `patient_id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `age` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `blood` varchar(240) NOT NULL,
  `systolic` varchar(240) NOT NULL,
  `diastolic` varchar(240) NOT NULL,
  `problem` varchar(240) NOT NULL,
  `disease` varchar(240) NOT NULL,
  `body` varchar(240) NOT NULL,
  `weight` varchar(240) NOT NULL,
  `date` date NOT NULL,
  `p_test` varchar(240) NOT NULL,
  `t_report` varchar(240) NOT NULL,
  `prescribe` varchar(240) NOT NULL,
  `advice` varchar(240) NOT NULL,
  `daily` text NOT NULL,
  `refer` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`pres_id`, `patient_id`, `first_name`, `last_name`, `email`, `phone`, `gender`, `age`, `address`, `blood`, `systolic`, `diastolic`, `problem`, `disease`, `body`, `weight`, `date`, `p_test`, `t_report`, `prescribe`, `advice`, `daily`, `refer`) VALUES
(1, 22, '', '', '', '', '', '', '', 'B+', 'ni', 'pi', 'klanzl', 'kank', '22', '22', '0000-00-00', 'lkj', 'lkj', 'lk', 'lkj', '2', 'lkj'),
(2, 33, '', '', '', '', '', '', '', 'B+', 'tuy', 'jh', 'jhl', 'kank', '22', '58', '0000-00-00', 'analk', 'assa', 'napa', 'lhil', '3', 'cd'),
(3, 23, '', '', '', '', '', '', '', 'A-', '80', '120', 'bfgnfgn', 'asd', '90', 'asdf', '2019-08-22', '', '', '', '', '', ''),
(4, 3, 'patient', 'one', 'asd@gmail.com', '12345678901', 'Male', '21', '  fbgfb    ', 'AB ', '60 ', '120 ', 'cough  ', 'synous  ', '100 ', '53 ', '2019-08-31', 'asd', 'asd', 'asd', 'asd', '1', 'asd'),
(8, 2, 'Saber', 'Saimun', 'saber@yahoo.com', '1685310779', 'Female', '44', '  bahaddarhat, chandgaon    ', 'B+ ', '60 ', '110 ', 'asd asd asd ', 'fbfghngf ', '90 ', '53 ', '0000-00-00', '', '', '', '', '1', ''),
(12, 5, 'tusi', 'shaorin', 'tusi@gmail.com', '123456789', 'Male', '21', '  fbgfb    ', 'AB ', '80 ', '120 ', 'asd asd asd ', 'cough ', '102 ', '53 ', '2019-09-01', 'uti', 'ut infection ', 'mebolin ', 'drink more water ', '2', 'dr anwara ');

-- --------------------------------------------------------

--
-- Table structure for table `prescription_new`
--

CREATE TABLE `prescription_new` (
  `pres_id` int(11) NOT NULL,
  `patient_id` int(255) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `age` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `blood` varchar(20) NOT NULL,
  `systolic` varchar(20) NOT NULL,
  `diastolic` varchar(20) NOT NULL,
  `problem` varchar(255) NOT NULL,
  `disease` varchar(255) NOT NULL,
  `body` varchar(20) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `p_test` varchar(255) NOT NULL,
  `t_report` varchar(255) NOT NULL,
  `prescribe` varchar(255) NOT NULL,
  `advice` varchar(255) NOT NULL,
  `daily` varchar(20) NOT NULL,
  `refer` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription_new`
--

INSERT INTO `prescription_new` (`pres_id`, `patient_id`, `first_name`, `last_name`, `email`, `phone`, `gender`, `age`, `address`, `blood`, `systolic`, `diastolic`, `problem`, `disease`, `body`, `weight`, `date`, `p_test`, `t_report`, `prescribe`, `advice`, `daily`, `refer`) VALUES
(1, 5, 'tusi', 'shaorin', 'tusi@gmail.com', '123456789', 'Male', '21', '  fbgfb    ', 'ab ', '60 ', '110 ', 'cannt eat  vomiting  ', 'synous  ', '100 ', '60 ', '2019-08-08', 'uti', 'ut infection ', 'mebolin ', 'drink more water ', '1', 'dr anwara '),
(2, 5, 'tusi', 'shaorin', 'tusi@gmail.com', '123456789', 'Male', '21', '  fbgfb    ', 'AB ', '80 ', '120 ', 'asd asd asd ', 'cough ', '102 ', '53 ', '2019-09-01', 'new', 'new', 'Tab.napadol ', 'zxcv', '1', 'dr.didar'),
(3, 5, 'tusi', 'shaorin', 'tusi@gmail.com', '123456789', 'Male', '21', '  fbgfb    ', 'AB ', '80 ', '120 ', 'asd asd asd ', 'cough ', '102 ', '53 ', '2019-09-01', 'new', 'new', 'Tab.napadol ', 'zxcv', '1', 'dr.didar'),
(4, 5, 'tusi', 'shaorin', 'tusi@gmail.com', '123456789', 'Male', '21', '  fbgfb    ', 'AB ', '80 ', '120 ', 'asd asd asd ', 'cough ', '102 ', '53 ', '2019-09-01', 'new', 'new', 'new', 'new', '3', 'lkj'),
(5, 5, 'tusi', 'shaorin', 'tusi@gmail.com', '123456789', 'Male', '21', '  fbgfb    ', 'AB ', '80 ', '120 ', 'asd asd asd ', 'cough ', '102 ', '53 ', '2019-09-01', 'new', 'new', 'new', 'new', '3', 'lkj'),
(6, 5, 'tusi', 'shaorin', 'tusi@gmail.com', '123456789', 'Male', '21', '  fbgfb    ', 'ab ', '60 ', '110 ', 'cannt eat  vomiting  ', 'synous  ', '100 ', '60 ', '2019-08-08', 'ecg', 'heart ', 'mebolin ', 'sleep more', '1', 'zxcv'),
(7, 5, 'tusi', 'shaorin', 'tusi@gmail.com', '123456789', 'Male', '21', '  fbgfb    ', 'ab ', '60 ', '110 ', 'cannt eat  vomiting  ', 'synous  ', '100 ', '60 ', '2019-08-08', 'ecg', 'heart ', 'mebolin ', 'sleep more', '1', 'zxcv'),
(8, 2, 'Saber', 'Saimun', 'saber@yahoo.com', '1685310779', 'Female', '44', '  bahaddarhat, chandgaon    ', 'B+ ', '60 ', '110 ', 'asd asd asd ', 'fbfghngf ', '90 ', '53 ', '2019-08-31', 'ecg', 'all good', 'zxcv', 'donnot worry  at all', '1', 'dr.rj'),
(9, 3, 'patient', 'one', 'asd@gmail.com', '12345678901', 'Male', '21', '  fbgfb    ', 'AB ', '60 ', '120 ', 'cough  ', 'synous  ', '100 ', '53 ', '2019-08-31', 'allergy', 'good', 'deslor', 'avoid allergic food', '2', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `serial`
--

CREATE TABLE `serial` (
  `serial_id` int(11) NOT NULL,
  `patient_id` int(255) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serial`
--

INSERT INTO `serial` (`serial_id`, `patient_id`, `date`, `email`) VALUES
(1, 5, '2019-09-02', 'tusi@gmail.com'),
(2, 5, '2019-09-02', 'tusi@gmail.com'),
(3, 5, '2019-09-02', 'tusi@gmail.com'),
(4, 4, '2019-09-02', 'poiu@gmail.com'),
(5, 1, '2019-09-02', 'saber@gmail.com'),
(6, 1, '2019-09-02', 'saber@gmail.com'),
(7, 1, '2019-09-02', 'saber@gmail.com'),
(8, 1, '2019-09-02', 'saber@gmail.com'),
(9, 1, '2019-09-02', 'saber@gmail.com'),
(10, 1, '2019-09-02', 'saber@gmail.com'),
(11, 5, '2019-09-03', 'tusi@gmail.com'),
(12, 5, '2019-09-03', 'tusi@gmail.com'),
(13, 5, '2019-09-03', 'tusi@gmail.com'),
(14, 5, '2019-09-03', 'tusi@gmail.com'),
(15, 5, '2019-09-03', 'tusi@gmail.com'),
(16, 5, '2019-09-03', 'tusi@gmail.com'),
(21, 5, '2019-09-21', 'tusi@gmail.com'),
(30, 5, '2019-09-25', 'tusi@gmail.com'),
(31, 5, '2019-09-26', 'tusi@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assistant`
--
ALTER TABLE `assistant`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `assistive_data`
--
ALTER TABLE `assistive_data`
  ADD PRIMARY KEY (`assistive_id`);

--
-- Indexes for table `a_dmin`
--
ALTER TABLE `a_dmin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `doctor_prescription`
--
ALTER TABLE `doctor_prescription`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `press_id` (`press_id`);

--
-- Indexes for table `patientregistration`
--
ALTER TABLE `patientregistration`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`pres_id`),
  ADD UNIQUE KEY `press_id` (`patient_id`);

--
-- Indexes for table `prescription_new`
--
ALTER TABLE `prescription_new`
  ADD PRIMARY KEY (`pres_id`);

--
-- Indexes for table `serial`
--
ALTER TABLE `serial`
  ADD PRIMARY KEY (`serial_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assistant`
--
ALTER TABLE `assistant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `assistive_data`
--
ALTER TABLE `assistive_data`
  MODIFY `assistive_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `a_dmin`
--
ALTER TABLE `a_dmin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctor_prescription`
--
ALTER TABLE `doctor_prescription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patientregistration`
--
ALTER TABLE `patientregistration`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `pres_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `prescription_new`
--
ALTER TABLE `prescription_new`
  MODIFY `pres_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `serial`
--
ALTER TABLE `serial`
  MODIFY `serial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
