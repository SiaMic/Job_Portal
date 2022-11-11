-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 27, 2018 at 12:00 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";




--
-- Database: `job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `applied`
--

CREATE TABLE `applied` (
  `ID` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `resume` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `jobs_id` int(11) NOT NULL,
  `status` text NOT NULL,
  `date_time` varchar(20) NOT NULL,
  `reading` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applied`
--

INSERT INTO `applied` (`ID`, `user_id`, `resume`, `category`, `job_title`, `jobs_id`, `status`, `date_time`, `reading`) VALUES
(1, 4, 'resume', 'category', 'php software developer', 1, 'aafdaf asdfasdfdsafsd', '2018-05-26 10:8 PM', 0),
(2, 2, 'resume', 'category', 'job_title', 11, 'status', 'date_time', 0),
(3, 2, 'resume', 'category', 'job_title', 11, 'status', 'date_time', 0),
(4, 4, 'resume', 'Design and Art', 'Photoshop Designer', 2, 'your Description has pending - you will get Description as soon as possible.', '2018-05-27 11:57 AM', 0),
(5, 4, 'resume', 'Design and Art', 'Photoshop Designer', 2, 'your Description has pending - you will get Description as soon as possible.', '2018-05-27 03:29 PM', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `name`, `img`) VALUES
(1, 'IT Engineer', '4263feature01.png'),
(2, 'Management', '9664feature03.png'),
(3, 'Digital & Creative', '9327jobdetail.jpg'),
(4, 'Accounting', '5383feature02.png'),
(5, 'Sales & marketing', '3588feature04.png'),
(6, 'Legal Job', '6669feature04.png'),
(7, 'Banking', '2957feature03.png'),
(8, 'Design and Art', '7605feature02.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `name`, `mobile`, `email`, `message`) VALUES
(1, 'shahid husen', '983485898', 'email@gmail.com', 'jasfjsakjf kadsjfdsffs');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `ID` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_desc` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `location` text NOT NULL,
  `vacancies` int(11) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `shift` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `skills` text NOT NULL,
  `date_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`ID`, `type`, `title`, `company_name`, `company_desc`, `category`, `salary`, `location`, `vacancies`, `qualification`, `experience`, `shift`, `description`, `skills`, `date_time`) VALUES
(1, 'Full Time', 'Software Developements', 'logicunion technology', 'Logic Union is a professional web designing, web development and software development company in India. As one of the premier web designing and web development company, we specialize in Custom Web Design Services, E-Commerce Web Development, Website Maintenance and Re-engineering, Android Mobile Application Development, ERP Software,Internet Marketing Through Social Media etc. We provide website that fits your specific and customized needs. At Logic Union Technology we believe that creativity is about conceptualising new ideas and creating innovative solutions that enhance our clientsâ€™ business. Our distinctive customer centric approach sets us apart. We are always open to listening to our clients and working closely with them to provide world-class solutions that are not only creative but have a positive impact on the their business outcomes.', 'IT Engineer', '10000 - 15000', 'Mumbai', 10, 'BCA,MCA,BE,MSC', '2 Year Experience', 'Morning', 'At Logic Union Technology we focus on providing quality, cost effective solutions to small and medium enterprises worldwide. We specialize in delivering solutions and products in Business Process Automation, Customized Application Development and Web based Applications. Our diverse software development team consisting of software engineers, designers and programmers who bring their professional experience, expertise, and creativity to produce world- class solutions. Adopting quality custom software will enable businesses to become more flexible & easier to manage thus ensuring success in every venture.', 'PHP,MYSQL', '2018-05-26 03:17 pm'),
(2, 'Part Time', 'Photoshop Designer', 'Khandesh  IIT Arts & Design', 'https://www.w3schools.com/sql/sql_distinct.asp\r\nThe SQL SELECT DISTINCT Statement. The SELECT DISTINCT statement is used to return only distinct (different) values. Inside a table, a column often ...', 'Design and Art', '15000 - 20000', 'dhule', 2, '10th ,12th', 'fresher', 'Morning', 'https://www.w3schools.com/sql/sql_distinct.asp\r\nThe SQL SELECT DISTINCT Statement. The SELECT DISTINCT statement is used to return only distinct (different) values. Inside a table, a column often ...', 'photshop cs3,cs4,cs6,corel draw', '2018-05-26 07:31 pm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `resume` varchar(100) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `name`, `qualification`, `city`, `mobile`, `email`, `password`, `resume`, `skills`, `type`) VALUES
(1, 'Job Portal Admin', 'MCA', 'Dhule', '9226926292', 'admin@gmail.com', '123456', 'resume.doc', 'PHP,MySQl,Html,Jquery', 'admin'),
(3, 'sakir shaikh', 'bca', 'dhule', '93478593847', 'sakir@gmail.com', '123456', '1882sample-corporate-resume.pdf', 'PHP,MYSQL', 'user'),
(4, 'Arshuddin chiraguddin shaikh', 'BCA,MCA,BE,MSC', 'dhule', '9226926295', 'logicunion17@gmail.com', 'admin', '66052018 shaikh sir project list', 'PHP,MYSQL', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applied`
--
ALTER TABLE `applied`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applied`
--
ALTER TABLE `applied`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;


