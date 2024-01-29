-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2016 at 03:46 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bill`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id` int(12) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `secretcode` int(23) NOT NULL,
  `amountofbirr` int(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `first_name`, `last_name`, `branch`, `secretcode`, `amountofbirr`, `date`) VALUES
(3, 'tom', 'tem', 'cbe', 1571, 200, '2016-05-29'),
(4, 'kas', 'alem', 'dashin', 1234, 2000, '2016-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `FName` char(20) NOT NULL,
  `MName` char(20) NOT NULL,
  `LName` char(20) NOT NULL,
  `Gender` char(20) NOT NULL,
  `EIDNO` varchar(20) NOT NULL,
  `JobClass` char(50) NOT NULL,
  `Education` char(20) NOT NULL,
  `DepartmentName` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`FName`, `MName`, `LName`, `Gender`, `EIDNO`, `JobClass`, `Education`, `DepartmentName`) VALUES
('Meselu', 'Truneh', 'Enyew', 'M', 'emplo/001/07', 'RegesirarOfficer', 'MSDegree', 'FainancalMGT'),
('Yisimaw', 'Gizachew', 'Reda', 'M', 'emplo/100/01', 'DininigOfficer', 'Digree', 'FoodManagement'),
('Adiss', 'Gizachew', 'Reda', 'M', 'emplo/101/01', 'Studentserviceoffice', 'Digree', 'FainancialManagement'),
('Alebel', 'Yasabneh', 'Melaku', 'M', 'emplo/102/01', 'Cumpussecurityofficer', 'MSDegree', 'ResourceManagiment'),
('Alebache', 'Mersie', 'Taye', 'M', 'emplo/103/01', 'StudentCouncil', 'MSDegree', 'psychology'),
('Mulu', 'Beza', 'Wondim', 'F', 'emplo/104/01', 'studnetserviceofficer', 'Digree', 'IndustrialChemistry'),
('Bantalem', 'Anley', 'Awoke', 'M', 'emplo/113/04', 'CourseCordinator', 'MSDegree', 'electrical'),
('Alehegn', 'Agegnew', 'Alamineh', 'M', 'emplo/114/04', 'CourseCordinator', 'Digree', 'mechanical'),
('Animaw', 'Wibishet', 'Tegegne', 'M', 'emplo/121/04', 'CollegeDean', 'MSDegree', 'COTOM'),
('Yirgaem', 'Teklay', 'Enyew', 'M', 'emplo/122/01', 'CourseCordinator', 'MSDegree', 'chemical'),
('Yesigat', 'Desalew', 'Zeleke', 'M', 'emplo/123/05', 'CourseCordinator', 'Degree', 'Computitional'),
('Yimegn', 'Wale', 'Tilehun', 'F', 'emplo/123/06', 'BookStoreOfficer', 'Degree', 'ResourceManagiment'),
('Matebie', 'Belay', 'Reda', 'M', 'emplo/124/02', 'MainLibraryOfficer', 'Degree', 'LibraryManagement'),
('Asichale', 'Tilahun', 'Simegn', 'M', 'emplo/124/03', 'CourseCordinator', 'Degree', 'Economics'),
('Dires', 'Kindie', 'Kebede', 'M', 'emplo/125/02', 'SportMasterOfficer', 'Degree', 'Accountingandfainance'),
('Yilkal', 'Bayley', 'Chekol', 'M', 'emplo/126/03', 'CollegeDean', 'MSDegree', 'computing'),
('Adane', 'Kindie', 'Kebede', 'M', 'emplo/127/02', 'CourseCordinator', 'MSDegree', 'IT'),
('Abebaw', 'Tilahune', 'Simegn', 'M', 'emplo/127/03', 'CourseCordinator', 'Degree', 'Management'),
('Melaku', 'Zegeye', 'Emirie', 'M', 'emplo/128/03', 'CourseCordinator', 'Degree', 'CS'),
('Simie', 'Workie', 'Mengistu', 'M', 'emplo/129/02', 'CourseCordinator', 'Degree', 'IS'),
('Yibelital', 'Teketay', 'Jemeberie', 'M', 'emplo/129/04', 'CollegeDean', 'MSDegree', 'FBE'),
('Yihun', 'Beley', 'Zegeye', 'M', 'emplo/129/05', 'CollegeDean', 'Degree', 'othersocial'),
('Awoke', 'Tilahun', 'Simegn', 'M', 'emplo/130/03', 'CourseCordinator', 'Degree', 'Accounting'),
('Enyew', 'Mekonen', 'Chekol', 'M', 'emplo/131/02', 'CollegeDean', 'MSDegree', 'Engineering'),
('Alehegn', 'Ragaw', 'Temesigun', 'M', 'emplo/132/02', 'CollegeDean', 'MsDegree', 'Agriculture'),
('Diress', 'Kassa', 'Aragaw', 'M', 'emplo/133/02', 'CollegeDean', 'MSDegree', 'Health'),
('Walie', 'Tilahun', 'Simegn', 'M', 'emplo/136/05', 'DormatoryOfficer', 'Degree', 'ResourceManagement'),
('Dejen', 'Andualem', 'Mengistu', 'M', 'emplo/202/04', 'CourseCordinator', 'MSDegree', 'Maths'),
('Limenih', 'Gashaw', 'Aniteneh', 'M', 'emplo/203/04', 'CourseCordinator', 'MSDegree', 'physics'),
('Yemata', 'Tilahun', 'Lakachew', 'M', 'emplo/204/04', 'CourseCordinator', 'MSDegree', 'biology'),
('Afework', 'Adimasie', 'Asefa', 'M', 'emplo/205/04', 'CourseCordinator', 'Degree', 'Chemistry'),
('Denekew', 'Bawoke', 'Teshale', 'M', 'emplo/206/04', 'CollegeDean', 'MSDegree', 'Mathimatics'),
('Yihunie', 'Kassa', 'Mekonen', 'M', 'emplo/207/04', 'CourseCordinator', 'Degree', 'Nursing'),
('Minbale', 'Tereche', 'Tamiru', 'M', 'emplo/208/04', 'CourseCordinator', 'Degree', 'Mudwifre'),
('Teshome', 'Amare', 'Melisew', 'M', 'emplo/210/04', 'CourseCordinator', 'Degree', 'HO'),
('Belayneh', 'Awoke', 'Yimer', 'M', 'emplo/211/04', 'CourseCordinator', 'MSDegree', 'COTM'),
('Tesfaye', 'Anteneh', 'Nigatu', 'M', 'emplo/212/04', 'CourseCordinator', 'MSDegree', 'Civil'),
('Ayehu', 'Bayley', 'Chekol', 'F', 'emplo/213/03', 'CollegeDean', 'MSDegree', 'agriculture');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `date` date NOT NULL,
  `secretcode` int(20) NOT NULL,
  `amountofbirr` int(20) NOT NULL,
  `service_type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`date`, `secretcode`, `amountofbirr`, `service_type`) VALUES
('2016-05-29', 1571, 100, 'electric bill'),
('2016-05-29', 1571, 26, 'water bill'),
('2016-05-29', 1571, 26, 'water bill'),
('2016-05-29', 1571, 26, 'water bill'),
('2016-05-29', 1571, 20, 'water bill'),
('2016-05-30', 1571, 80, 'electric bill');

-- --------------------------------------------------------

--
-- Table structure for table `preparebill`
--

CREATE TABLE `preparebill` (
  `date` varchar(35) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(32) NOT NULL,
  `address` varchar(35) NOT NULL,
  `billNO` int(34) NOT NULL,
  `currentreading` int(34) NOT NULL,
  `amountofbirr` int(34) NOT NULL,
  `servicetype` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `preparebill`
--

INSERT INTO `preparebill` (`date`, `fname`, `lname`, `address`, `billNO`, `currentreading`, `amountofbirr`, `servicetype`) VALUES
('2016-05-29', 'gfg', 'gg', 'gg', 77, 777, 777, 'electric bill'),
('2016-03-27', 'temesgen', 'tameire', 'arbaminch', 233, 4555, 5677, 'telephone bill'),
('2016-03-22', 'kas', 'alem', 'arbaminch', 777, 890, 1234, 'electric bill');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `date` date NOT NULL,
  `user_id` int(30) NOT NULL,
  `fname` varchar(32) NOT NULL,
  `lname` varchar(35) NOT NULL,
  `address` varchar(34) NOT NULL,
  `house_no` int(23) NOT NULL,
  `phone_no` varchar(34) NOT NULL,
  `servicetype` varchar(34) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`date`, `user_id`, `fname`, `lname`, `address`, `house_no`, `phone_no`, `servicetype`) VALUES
('2016-05-29', 19, 'asss', 'ass', 'sss', 23, '233', 'water billing'),
('2016-05-29', 20, 'asss', 'ass', 'sss', 23, '233', 'water billing'),
('2016-05-29', 21, 'tom', 'tem', 'amu', 12, '123456', 'water billing'),
('2016-05-29', 22, 'tom', 'tem', 'amu', 12, '123456', 'water billing');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `date` varchar(25) NOT NULL,
  `user_id` varchar(35) NOT NULL,
  `fname` varchar(35) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `address` varchar(32) NOT NULL,
  `amountofbirr` int(35) NOT NULL,
  `phone_No` varchar(34) NOT NULL,
  `servicetype` varchar(34) NOT NULL,
  `report` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`date`, `user_id`, `fname`, `lname`, `address`, `amountofbirr`, `phone_No`, `servicetype`, `report`) VALUES
('2016-05-30', 'tem/123/23', 'temu', 'tem', 'arbaminch', 234, '6555', 'electric billing', 'this report is for electric bill'),
('2016-05-29', 'ttm/788/98', 'ffd', 'ffd', 'fff', 66, '66', 'water billing', 'ffggggfg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `FName` char(20) NOT NULL,
  `MName` char(20) NOT NULL,
  `LName` char(20) NOT NULL,
  `SIDNO` varchar(20) NOT NULL,
  `Gender` char(10) NOT NULL,
  `School` char(20) NOT NULL,
  `Department` char(20) NOT NULL,
  `ClassYear` char(20) NOT NULL,
  `Program` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`FName`, `MName`, `LName`, `SIDNO`, `Gender`, `School`, `Department`, `ClassYear`, `Program`) VALUES
('Ayehu', 'Limenih', 'Gashaw', 'APS/060/02', 'F', 'Agriculture', 'PlantScince', '2nd', 'Regular'),
('Dires', 'Kassa', 'Aragaw', 'chnr/015/04', 'M', 'Health Science', 'Nursing', '1st', 'Regular'),
('Kasahun', 'Amare', 'Burie', 'compr/045/04', 'M', 'Computing', 'IT', '4th', 'Regular'),
('Ashenafi', 'Kirub', 'melese', 'compr/110/04', 'M', 'Computing', 'IT', '4th', 'Regular'),
('Asinake', 'Mulu', 'Melew', 'compr/111/04', 'M', 'Computing', 'IT', '4th', 'Regular'),
('Dejen', 'Anley', 'Truneh', 'compr/119/04', 'M', 'Computing', 'IT', '4th', 'Regular'),
('Mohumed', 'Ali', 'Ahmed', 'compr/136/04', 'M', 'Computing', 'IT', '4th', 'Regular'),
('Tegegn', 'Ababay', 'Abebe', 'compr/143/04', 'M', 'Computing', 'IT', '4th', 'Regular'),
('Banitalem', 'Anley', 'Mekonnen', 'engr/040/04', 'M', 'Engineering', 'Electrical', '4th', 'Regular'),
('Belaynesh', 'Kindie', 'Awoke', 'ncsr/012/05', 'F', 'Natural and Computat', 'biology', '3rd', 'Regular');

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Role` char(20) NOT NULL,
  `SIDNO` varchar(20) DEFAULT NULL,
  `EIDNO` varchar(20) DEFAULT NULL,
  `Status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`UserName`, `Password`, `Role`, `SIDNO`, `EIDNO`, `Status`) VALUES
('bank/111/08', 'dG9t', 'bank', NULL, NULL, 1),
('lab/000/00', 'Y3VzdG9tZXI=', 'customer', NULL, NULL, 1),
('lab/000/01', 'ZW1wbG95ZWU=', 'employee', NULL, NULL, 1),
('lab/000/02', 'YWRtaW4=', 'Administrator', NULL, NULL, 1),
('rrrr/567/56', 'MTI=', 'employee', NULL, NULL, 1),
('tee/789/90', 'MTIz', 'employee', NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EIDNO`);

--
-- Indexes for table `preparebill`
--
ALTER TABLE `preparebill`
  ADD PRIMARY KEY (`billNO`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`SIDNO`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`UserName`),
  ADD KEY `SIDNO` (`SIDNO`),
  ADD KEY `EIDNO` (`EIDNO`),
  ADD KEY `EIDNO_2` (`EIDNO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `preparebill`
--
ALTER TABLE `preparebill`
  MODIFY `billNO` int(34) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=778;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `user_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD CONSTRAINT `useraccount_ibfk_1` FOREIGN KEY (`SIDNO`) REFERENCES `student` (`SIDNO`),
  ADD CONSTRAINT `useraccount_ibfk_2` FOREIGN KEY (`EIDNO`) REFERENCES `employee` (`EIDNO`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
