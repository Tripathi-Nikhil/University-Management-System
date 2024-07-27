-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 01:58 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ums`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `studid` text NOT NULL,
  `total_due` text NOT NULL,
  `course` text NOT NULL,
  `hostel` text NOT NULL,
  `transport` text NOT NULL,
  `library` text NOT NULL,
  `totalpaid` text NOT NULL,
  `pay1` text NOT NULL,
  `pay2` text NOT NULL,
  `pay3` text NOT NULL,
  `pay4` text NOT NULL,
  `pay5` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `studid`, `total_due`, `course`, `hostel`, `transport`, `library`, `totalpaid`, `pay1`, `pay2`, `pay3`, `pay4`, `pay5`, `time`) VALUES
(1, 'DIVY7575', '111800', '4241', '0', '0', '0', '4241', 'Rs. 0 on 2021-06-28 11:54:03pm', 'Rs. 0 on 2021-06-28 11:54:15pm', 'Rs. 0 on 2021-06-28 11:54:24pm', 'Rs. 0 on 2021-06-28 11:54:27pm', 'Rs. 0 on 2021-06-28 11:54:29pm', '2021-06-28 18:24:29'),
(10, 'NIKH4714', '39205', '25', '0', '10', '0', '35', 'Rs. 10 on 2021-06-29 12:01:36pm', 'Rs. 25 on 2021-07-04 11:05:08am by UPI', '', '', '', '2021-07-04 05:35:08'),
(11, 'DIVY4180', '112000', '100', '110', '0', '0', '210', 'Rs. 113 on 2021-06-29 05:43:31pm', 'Rs. 7 on 2021-06-29 06:04:40pm', 'Rs. 80 on 2021-06-29 06:05:26pm', 'Rs. 3 on 2021-06-30 10:50:40am by Amazon Pay', 'Rs. 7 on 2021-06-30 10:51:27am by Cash', '2021-06-30 05:21:27'),
(12, 'ADIT8795', '123960', '10', '20', '30', '0', '60', 'Rs. 60 on 2021-06-30 02:11:14am', '', '', '', '', '2021-06-29 20:41:14'),
(13, 'DIVY2039', '250', '7', '0', '0', '0', '7', 'Rs. 0 on 2021-06-30 11:09:28pm by Amazon Pay', 'Rs. 7 on 2021-07-04 12:20:10pm by Amazon Pay', '', '', '', '2021-07-04 06:50:10'),
(14, 'SHIV4490', '250', '250', '0', '0', '0', '250', 'Rs. 2 on 2021-06-30 11:10:43pm by UPI', 'Rs. 248 on 2021-06-30 11:11:29pm by PayTm', 'Rs. 21 on 2021-06-30 11:12:20pm by PayTm', 'Rs. -21 on 2021-06-30 11:12:33pm by PayTm', '', '2021-06-30 17:42:33'),
(15, 'NEET4727', '43910', '20', '0', '60', '50', '130', 'Rs. 130 on 2021-07-07 11:00:52pm by Cash', '', '', '', '', '2021-07-07 17:30:52');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_teacher`
--

CREATE TABLE `attendance_teacher` (
  `id` int(11) NOT NULL,
  `teacherid` text NOT NULL,
  `teachername` text NOT NULL,
  `department` text NOT NULL,
  `gender` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `filter_date` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance_teacher`
--

INSERT INTO `attendance_teacher` (`id`, `teacherid`, `teachername`, `department`, `gender`, `date`, `filter_date`, `status`) VALUES
(9, 'AKAN8021', 'Akanksha Tripathi', 'Dpharma', 'Female', '2021-07-07 17:25:56', '07-07-2021', 0),
(10, 'ADIT7867', 'Aditya Prakash Tripathi', 'BTech', 'Male', '2021-07-07 17:25:49', '07-07-2022', 1),
(11, 'ADIT7867', 'Aditya Prakash Tripathi', 'BTech', 'Male', '2021-07-07 17:25:42', '07-07-2021', 1),
(12, 'ADIT7867', 'Aditya Prakash Tripathi', 'BTech', 'Male', '2021-07-08 06:37:55', '08-07-2021', 0),
(13, 'AKAN8021', 'Akanksha Tripathi', 'Dpharma', 'Female', '2021-07-08 06:54:46', '08-07-2021', 0);

-- --------------------------------------------------------

--
-- Table structure for table `branchinfo`
--

CREATE TABLE `branchinfo` (
  `id` int(11) NOT NULL,
  `department` text NOT NULL,
  `branch` text NOT NULL,
  `course` text NOT NULL,
  `Fees` text NOT NULL,
  `concat` int(11) NOT NULL,
  `concatT` int(11) NOT NULL,
  `subject1` text NOT NULL,
  `subjectcode` text NOT NULL,
  `year` text NOT NULL,
  `sem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branchinfo`
--

INSERT INTO `branchinfo` (`id`, `department`, `branch`, `course`, `Fees`, `concat`, `concatT`, `subject1`, `subjectcode`, `year`, `sem`) VALUES
(1, 'Bachelor', 'Mechanical', 'BBA', '40000', 9, 3, 'C LANGUAGE', '2', '1', '1'),
(2, 'Master', 'Computer Science', 'BCA', '40000', 2, 3, 'C++', '2', '1', '2'),
(3, 'BTech', 'Information Technology', 'BJ', '35000', 3, 3, 'WEB DEVLOPMENT', '2', '1', '1'),
(4, 'Bpharma', 'Civil', 'MBA', '45000', 9, 3, 'DATA STRUCTURE', '5', '1', '1'),
(5, 'Dpharma', 'Bpharma', 'BTech CS', '63500', 2, 4, 'ACCOUNTING', '1', '1', '1'),
(6, 'Polytechnic', 'Dpharma', 'BTech ME', '60000', 1, 5, 'HR MANAGEMENT', '4', '1', '1'),
(9, '', 'Others', 'BTech Civil', '84000', 4, 6, 'EARTHQUAKE ENGINEERING', '10', '1', '1'),
(10, '', '', 'Polytecnic Civil', '48000', 4, 0, 'PHARMACEUTICS', '13', '2', '2'),
(11, '', '', 'Polytechnic Mechanical', '45000', 1, 0, '', '', '', ''),
(12, '', '', 'Bpharma', '111800', 5, 0, '', '', '', ''),
(13, '', '', 'Dpharma', '250', 6, 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `fine`
--

CREATE TABLE `fine` (
  `id` int(11) NOT NULL,
  `studid` varchar(255) NOT NULL,
  `fine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fine`
--

INSERT INTO `fine` (`id`, `studid`, `fine`) VALUES
(2, 'NIKH4714', 605),
(3, 'NEET4727', 3500);

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `id` int(11) NOT NULL,
  `roomname` varchar(255) NOT NULL,
  `category` text NOT NULL,
  `roomtype` text NOT NULL,
  `building` text NOT NULL,
  `block` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`id`, `roomname`, `category`, `roomtype`, `building`, `block`, `status`) VALUES
(5, 'Room 201', 'Boys', 'A.C Room', 'Building 2', 'Block 1', 'Open'),
(7, 'Room 103', 'Boys', 'A.C Room', 'Building 1', 'Block 1', 'Reserved'),
(8, 'Room 104', 'Girls', 'Basic', 'Building 2', 'Block 1', 'Open'),
(9, 'Room 105', 'Girls', 'A.C Room', 'Building 2', 'Block 1', 'Not Ready'),
(11, 'Room 107', 'Boys', 'Basic', 'Building 1', 'Block 2', 'Open'),
(12, 'Room 108', 'Girls', 'A.C Room', 'Building 1', 'Block 2', 'Not Ready'),
(13, 'Room 109', 'Girls', 'Basic', 'Building 1', 'Block 2', 'Not Ready'),
(14, 'Room 106', 'Boys', 'A.C Room', 'Building 2', 'Block 2', 'Reserved');

-- --------------------------------------------------------

--
-- Table structure for table `hostelregister`
--

CREATE TABLE `hostelregister` (
  `id` int(11) NOT NULL,
  `studentid` text NOT NULL,
  `intime` text NOT NULL,
  `outtime` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hostelregister`
--

INSERT INTO `hostelregister` (`id`, `studentid`, `intime`, `outtime`) VALUES
(1, 'DIVY4180', '2021-06-19 04:26:01pm', '2021-06-18 11:06:27pm'),
(2, 'DIVY4181', '2021-06-19 04:25:40pm', '2021-06-18 11:12:28pm'),
(4, 'DIVY4182', '2021-06-19 03:51:24pm', '2021-06-19 03:45:57pm'),
(5, 'DIVY4180', '2021-06-19 11:23:50pm', '2021-06-19 04:26:01pm'),
(6, 'VIKA5656', '2021-06-19 05:22:16pm', '2021-06-19 05:12:16pm'),
(7, 'VIKA5656', '2021-06-19 05:22:16pm', '2021-06-19 05:12:16pm'),
(8, 'DIVY4180', '2021-06-19 11:23:50pm', '2021-06-19 06:10:11pm'),
(9, 'DIVY4180', '2021-06-19 11:23:50pm', '2021-06-19 06:10:11pm'),
(10, 'DIVY4180', '2021-06-19 11:23:50pm', '2021-06-19 06:10:11pm'),
(11, 'DIVY4180', '2021-06-19 11:23:50pm', '2021-06-19 06:10:11pm'),
(12, 'DIVY4180', '2021-06-19 11:23:50pm', '2021-06-19 06:10:11pm'),
(13, 'DIVY4180', '2021-06-19 11:23:50pm', '2021-06-19 06:10:11pm'),
(14, 'DIVY4180', '2021-06-19 11:23:50pm', '2021-06-19 06:10:11pm'),
(15, 'DIVY4180', '2021-06-19 11:23:50pm', '2021-06-19 06:10:11pm'),
(16, 'DIVY4180', '2021-06-19 11:23:50pm', '2021-06-19 06:10:11pm'),
(17, 'DIVY4180', '2021-06-19 11:23:50pm', '2021-06-19 06:10:11pm'),
(18, 'DIVY4180', '2021-06-19 11:23:50pm', '2021-06-19 07:06:14pm'),
(19, 'DIVY4180', '', '21'),
(20, 'DIVY4180', '2021-06-19 11:23:50pm', '2021-06-19 09:31:03pm'),
(21, 'DIVY4180', '2021-06-19 11:23:50pm', '2021-06-19 09:38:25pm'),
(22, 'DIVY4180', '2021-06-19 11:23:50pm', '2021-06-19 09:42:42pm'),
(23, 'DIVY4181', '2021-06-19 11:23:30pm', '2021-06-19 09:42:54pm'),
(24, 'DIVY4180', '2021-06-19 11:23:50pm', '2021-06-19 09:42:59pm'),
(25, 'DIVY4180', '2021-07-07 10:48:12pm', '2021-07-07 10:46:49pm');

-- --------------------------------------------------------

--
-- Table structure for table `issuebook`
--

CREATE TABLE `issuebook` (
  `studid` text NOT NULL,
  `studname` text NOT NULL,
  `bookid` text NOT NULL,
  `author` text NOT NULL,
  `adhaar` text NOT NULL,
  `contact` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issuebook`
--

INSERT INTO `issuebook` (`studid`, `studname`, `bookid`, `author`, `adhaar`, `contact`, `date`, `id`) VALUES
('DIVY4180', 'Divya prakash tripathi', 'BOOK2223', 'Author 2', '', '', '2021-07-05 11:56:24', 32);

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `bookid` varchar(40) NOT NULL,
  `bookname` text NOT NULL,
  `edition` text NOT NULL,
  `author` text NOT NULL,
  `pages` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `category` text NOT NULL,
  `branch` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`bookid`, `bookname`, `edition`, `author`, `pages`, `quantity`, `category`, `branch`) VALUES
('BOOK2223', 'Book 1', '1st Edition', 'Author 2', '460', 74, 'Category 2', '45'),
('BOOK6009', 'Book 2', '2nd Edition', 'Author 2', '460', 89, 'Category 2', 'Branch 2'),
('BOOK6066', 'Book 3', '3rd Edition', 'Author 3', '460', 85, 'Category 3', 'Branch 3'),
('BOOK6835', 'Book 6', '3rd Edition', 'Nikhil Tripathi', '56', 60, 'Computer', 'Computer Science'),
('BOOK7321', 'Book 1', '1st Edition', 'Author 1', '460', 80, 'Category 1', 'Branch 1');

-- --------------------------------------------------------

--
-- Table structure for table `notifywork`
--

CREATE TABLE `notifywork` (
  `id` int(11) NOT NULL,
  `subject1` text NOT NULL,
  `teacherid` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `quesans`
--

CREATE TABLE `quesans` (
  `id` int(11) NOT NULL,
  `branch` text NOT NULL,
  `ques` text NOT NULL,
  `exques` text NOT NULL,
  `studid` text NOT NULL,
  `ans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quesans`
--

INSERT INTO `quesans` (`id`, `branch`, `ques`, `exques`, `studid`, `ans`) VALUES
(1, '', 'What is Full Form Of Php?', 'Explain?', '', 'Tyme na Hai'),
(3, '', '<p>What is Php?</p>\r\n', '<p>ffunction</p>\r\n', '', '<p>askjashckjbckjikcaskcjbasuikc</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `roomalloc`
--

CREATE TABLE `roomalloc` (
  `id` int(11) NOT NULL,
  `studid` text NOT NULL,
  `name` text NOT NULL,
  `fathername` text NOT NULL,
  `mothername` text NOT NULL,
  `gender` text NOT NULL,
  `adhaar` text NOT NULL,
  `laddress` text NOT NULL,
  `paddress` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `studentphone` text NOT NULL,
  `fatherphone` text NOT NULL,
  `roomname` text NOT NULL,
  `fees` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roomalloc`
--

INSERT INTO `roomalloc` (`id`, `studid`, `name`, `fathername`, `mothername`, `gender`, `adhaar`, `laddress`, `paddress`, `city`, `state`, `studentphone`, `fatherphone`, `roomname`, `fees`) VALUES
(21, 'DIVY4180', 'Divya prakash tripathi', 'Ravi Prakash Tripathi', 'Prem Lata Tripathi', 'Male', '795137559488', 'H.no 784b Ravi prakash tripath\r\nBichhiya saraswatipuram\r\nNear p.a.c campus', 'H.no 784b Ravi prakash tripath\r\nBichhiya saraswatipuram\r\nNear p.a.c campus', 'Gorakhpur', 'Uttar Pradesh', '7985515422', '7985515422', 'Room 106', '72000'),
(22, 'ADIT8795', 'Aditya Prakash Tripathi', 'R. P Tripathi', 'Prema Devi', 'Male', '798551542279855154', 'H.no 784b Ravi prakash tripath\r\nBichhiya saraswatipuram\r\nNear p.a.c campus456', 'H.no 784b Ravi prakash tripath\r\nBichhiya saraswatipuram\r\nNear p.a.c campus456', 'Gorakhpur', 'Uttar Pradesh', '9792515422', '9492515422', 'Room 103', '72000');

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `fathername` text NOT NULL,
  `mothername` text NOT NULL,
  `adhaar` text NOT NULL,
  `dob` text NOT NULL,
  `gender` text NOT NULL,
  `studentcontact` text NOT NULL,
  `fathercontact` text NOT NULL,
  `mothercontact` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `regid` varchar(25) NOT NULL,
  `address` text NOT NULL,
  `pin` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `hsboard` text NOT NULL,
  `hspercent` text NOT NULL,
  `hspassyear` text NOT NULL,
  `imboard` text NOT NULL,
  `impercent` text NOT NULL,
  `impassyear` text NOT NULL,
  `gboard` text NOT NULL,
  `gpercent` text NOT NULL,
  `gpassyear` text NOT NULL,
  `branch` text NOT NULL,
  `course` text NOT NULL,
  `year` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `fees` text NOT NULL,
  `passwords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`id`, `name`, `fathername`, `mothername`, `adhaar`, `dob`, `gender`, `studentcontact`, `fathercontact`, `mothercontact`, `email`, `regid`, `address`, `pin`, `city`, `state`, `hsboard`, `hspercent`, `hspassyear`, `imboard`, `impercent`, `impassyear`, `gboard`, `gpercent`, `gpassyear`, `branch`, `course`, `year`, `image`, `fees`, `passwords`) VALUES
(19, 'Divya prakash tripathi', '', '', '', '2021-06-16', 'Male', '', '', '', 'nikhiltripathi243@gmail.com', 'DIVY4180', '', '273016', 'Gorakhpur', 'Uttar Pradesh', 'lk', 'hui', '2019', 'hk', 'hkj', '2017', '6', 'hk', '2019', 'Computer Science', 'BCA', 1, '49145-Red Book Playful Pop of Color Education Logo.gif', '40000', '123456789'),
(20, 'nikhil', '', '', '', '2021-05-31', 'Male', '', '', '', 'abc@gmail.com', 'NIKH4714', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Information Technology', 'BCA', 1, '33515-pawel-czerwinski-d5TBzrddHMk-unsplash (1).jpg', '35000', '123'),
(21, 'Divya Prakash Tripathi', 'Ravi Prakash Tripathi', 'Prem Lata Tripathi', '795137559488', '1999-10-03', 'Male', '7985515422', '7985515422', '7985515422', 'a@gmail.com', 'DIVY7575', '', '273014', 'Gorakhpur', 'Uttar Pradesh', 'cbse', '100%', '2016', 'cbse', '110%', '2018', '', '', '', 'Computer Science', 'BCA', 1, '52980-2021-05-03 (10).png', '40000', ''),
(22, 'Aditya Prakash Tripathi', 'R. P Tripathi', 'Prema Devi', '121212121212121', '2001-07-01', 'Male', '7985515422', '7985515422', '7985515422', 'nikhiltripathi243@gmail.com', 'ADIT8795', '', '273014', 'Gorakhpur', 'Uttar Pradesh', 'up board', '54%', '2112', 'cbse board', '68', '5454', '', '', '5454', 'Civil', 'Polytecnic Civil', 1, '37024-tenor.gif', '48000', ''),
(23, 'Divya prakash tripathi', 'dsgsdg', 'sdgsdg', 'asfsdg', '2021-06-09', 'Male', '7985515422', '5436556656', '7985515422', 'nikhiltripathi243@gmail.com', 'DIVY2039', '', '4564564545', 'Gorakhpur', 'Uttar Pradesh', 'UP Board', '', '2000', 'UP Board', '', '2000', 'DDU', '', '2000', 'Dpharma', 'Dpharma', 1, '68350-194831033_4011985218885914_159778473357120236_n-removebg-preview.png', '250', '1234'),
(24, 'Shivam Singh', 'SSSS', 'SSSSS', '84984', '2021-06-24', 'Male', '7985515422', '1585656545', '5454545455', 'shivam@gmail.com', 'SHIV4490', 'H.no 784b Ravi prakash tripath\r\nBichhiya saraswatipuram\r\nNear p.a.c campus456', '4564564545', 'Gorakhpur', 'Uttar Pradesh', 'CBSE BOARD', '54', '2000', 'CBSE BOARD', 'hkj', '2000', 'DDU', '', '2000', 'Dpharma', 'Dpharma', 1, '8546-2021-05-03 (3).png', '250', ''),
(25, 'Shivani Dubey', 'qwdqwd', 'qwdqw', 'qwdqwdqwd', '2021-06-20', 'Female', '4645646545', '7988646515', '8764354564', 'dqwdqw', 'SSS6904', '', 'wdqwd', 'asd', 'aSa', 'UP Board', '', '2000', 'UP Board', '', '2000', 'DDU', '', '2000', 'Computer Science', 'BCA', 1, '89854-khetkhaliyan.png', '40000', ''),
(26, 'Neeteesh Mishra', 'Rama Maharajganj', 'Sita Maharajganj', '', '1999-10-02', 'Male', '7217655288', '8974561230', '8745896521', 'neeteeshmrj5523@gmail.com', 'NEET4727', 'maharajganj', '273207', 'Gorakhpur', 'Uttar Pradesh', 'UP Board', '47', '2021', 'UP Board', '53', '2021', 'DDU', '110', '2021', 'Computer Science', 'BCA', 1, '88240-pngwing.com.png', '40000', '1234'),
(27, 'Nikhil Tripathi', 'ravi prakash', '', '', '2021-07-08', 'Male', '7985515422', '7985515422', '7985515422', 'nikhiltripathi243@gmail.com', 'NIKH4589', '', '273014', 'Gorakhpur', 'Uttar Pradesh', 'UP Board', '', '2000', 'UP Board', '', '2000', 'DDU', '', '2000', 'Computer Science', 'BCA', 0, '22459-pawel-czerwinski-d5TBzrddHMk-unsplash (1).jpg', '40000', '');

-- --------------------------------------------------------

--
-- Table structure for table `studwork`
--

CREATE TABLE `studwork` (
  `id` int(11) NOT NULL,
  `studid` text NOT NULL,
  `studname` text NOT NULL,
  `course` text NOT NULL,
  `year` text NOT NULL,
  `studsub` text NOT NULL,
  `a1` text NOT NULL,
  `a2` text NOT NULL,
  `a3` text NOT NULL,
  `a4` text NOT NULL,
  `a5` text NOT NULL,
  `hw1` text NOT NULL,
  `hw2` text NOT NULL,
  `hw3` text NOT NULL,
  `hw4` text NOT NULL,
  `hw5` text NOT NULL,
  `ct1` text NOT NULL,
  `ct2` text NOT NULL,
  `ct3` text NOT NULL,
  `ct4` text NOT NULL,
  `ct5` text NOT NULL,
  `mp1` text NOT NULL,
  `mp2` text NOT NULL,
  `mp3` text NOT NULL,
  `mp4` text NOT NULL,
  `mp5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studwork`
--

INSERT INTO `studwork` (`id`, `studid`, `studname`, `course`, `year`, `studsub`, `a1`, `a2`, `a3`, `a4`, `a5`, `hw1`, `hw2`, `hw3`, `hw4`, `hw5`, `ct1`, `ct2`, `ct3`, `ct4`, `ct5`, `mp1`, `mp2`, `mp3`, `mp4`, `mp5`) VALUES
(1, 'DIVY4180', 'Divya prakash tripathi', 'BCA', '1', 'C++', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'NIKH4714', 'nikhil', 'BCA', '1', 'C++', '1', '', '', '', '', '1', '', '', '', '', '1', '', '', '', '', '', '', '', '', ''),
(3, 'DIVY7575', 'Divya Prakash Tripathi', 'BCA', '1', 'C++', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'check1', '', '', '', 'C++', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'check2', '', '', '', 'C++', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'DIVY2039', 'Divya prakash tripathi', 'Dpharma', '1', 'PHARMACEUTICS', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'SHIV4490', 'Shivam Singh', 'Dpharma', '1', 'PHARMACEUTICS', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 'SSS6904', 'Shivani Dubey', 'BCA', '1', 'C++', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subteacher`
--

CREATE TABLE `subteacher` (
  `id` int(11) NOT NULL,
  `subject1` text NOT NULL,
  `teacherid` text NOT NULL,
  `stime` text NOT NULL,
  `course` text NOT NULL,
  `year` text NOT NULL,
  `syllabus` text NOT NULL,
  `assign1` text NOT NULL,
  `assign2` text NOT NULL,
  `assign3` text NOT NULL,
  `assign4` text NOT NULL,
  `assign5` text NOT NULL,
  `hw1` text NOT NULL,
  `hw2` text NOT NULL,
  `hw3` text NOT NULL,
  `hw4` text NOT NULL,
  `hw5` text NOT NULL,
  `ct1` text NOT NULL,
  `ct2` text NOT NULL,
  `ct3` text NOT NULL,
  `ct4` text NOT NULL,
  `ct5` text NOT NULL,
  `mp1` text NOT NULL,
  `mp2` text NOT NULL,
  `mp3` text NOT NULL,
  `mp4` text NOT NULL,
  `mp5` text NOT NULL,
  `assigndate` text NOT NULL,
  `hwdate` text NOT NULL,
  `ctdate` text NOT NULL,
  `mpdate` text NOT NULL,
  `c_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subteacher`
--

INSERT INTO `subteacher` (`id`, `subject1`, `teacherid`, `stime`, `course`, `year`, `syllabus`, `assign1`, `assign2`, `assign3`, `assign4`, `assign5`, `hw1`, `hw2`, `hw3`, `hw4`, `hw5`, `ct1`, `ct2`, `ct3`, `ct4`, `ct5`, `mp1`, `mp2`, `mp3`, `mp4`, `mp5`, `assigndate`, `hwdate`, `ctdate`, `mpdate`, `c_date`) VALUES
(6, 'C++', 'ADIT7867', '09:05', 'BCA', '1', '67', '<p>Java is a highly effective and popular programming language that is used in almost every field. With the help of Java, we can create Mobile Apps, Desktop Software, Games, Web Applications, Scientific Applications and more. In 2020, Java is the second most popular language in the world according to the TIOBE Index and the third most popular language in the world according to the Redmonk Index.</p>\n\n<h2>1.&nbsp;Head First Java: A Brain-Friendly Guide, 2nd Edition</h2>\n\n<table cellspacing=\"0\" style=\"border-collapse:collapse; width:610px\">\n	<tbody>\n		<tr>\n			<td style=\"border-bottom:0px; border-left:0px; border-right:0px; border-top:0px; text-align:center; vertical-align:baseline\"><a href=\"https://draft.blogger.com/blog/post/edit/6098680995920284372/1048530249804906907#\"><img alt=\"Head first java book\" src=\"https://lh3.googleusercontent.com/-sVnwCDG2rxA/X3C6r4f-LrI/AAAAAAAAAN8/Lg7Os9eI6Dw8CiFcF6AKMQzAYkEeij4QQCLcBGAsYHQ/w253-h320/image.png\" style=\"height:320px; width:253px\" /></a></td>\n		</tr>\n		<tr>\n			<td style=\"border-bottom:0px; border-left:0px; border-right:0px; border-top:0px; text-align:center; vertical-align:baseline\">&nbsp;</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>&nbsp;</p>\n\n<p>लेखक :&nbsp;Kathy Sierra और&nbsp;Bert Bates</p>\n\n<p>Rating : 4.3 / 5&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><a href=\"https://draft.blogger.com/blog/post/edit/6098680995920284372/1048530249804906907#\">Buy Now</a></p>\n\n<p>&nbsp;</p>\n\n<p>Head First Java&nbsp;<strong>Kathy Sierra और&nbsp;Bert Bates&nbsp;</strong>द्वारा लिखी हुई पुस्तक है।&nbsp; अमेज़न पर इस Book की Rating 4.3/5 है।&nbsp; यह बुक Paperback और Amazon Kindle दोनों editions&nbsp;में उब्लब्ध है।&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<h2>2.&nbsp;Beginning Programming with Java For Dummies</h2>\n\n<p><a href=\"https://draft.blogger.com/blog/post/edit/6098680995920284372/1048530249804906907#\"><img alt=\"\" src=\"https://lh3.googleusercontent.com/-CVcnsew9jng/X3DFeyh-njI/AAAAAAAAAOI/Uzw-r2sZMwkjg_R3XiZ2bf3BRYkDNXGZACLcBGAsYHQ/image.png\" style=\"height:240px; width:192px\" /></a></p>\n\n<p>&nbsp;</p>\n\n<p>लेखक :&nbsp;Barry Burd&nbsp;</p>\n\n<p>Rating : 4.5 / 5&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><a href=\"https://draft.blogger.com/blog/post/edit/6098680995920284372/1048530249804906907#\">Buy Now</a></p>\n\n<p>&nbsp;</p>\n\n<h2>3.&nbsp;Core Java Volume I &ndash; Fundamentals</h2>\n\n<p><a href=\"https://draft.blogger.com/blog/post/edit/6098680995920284372/1048530249804906907#\"><img alt=\"\" src=\"https://lh3.googleusercontent.com/-dPb36V1qMis/X3DGmyrOxAI/AAAAAAAAAOU/WFCk0fLMMiYg0RGTnse1WKQuDyb4yar-gCLcBGAsYHQ/image.png\" style=\"height:240px; width:184px\" /></a></p>\n\n<p>&nbsp;</p>\n\n<p>लेखक :&nbsp;Cay Horstmann</p>\n\n<p>Rating : 4.7 / 5&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><a href=\"https://draft.blogger.com/blog/post/edit/6098680995920284372/1048530249804906907#\">Buy Now</a></p>\n\n<h2>4.&nbsp;&nbsp;Java: Programming Basics for Absolute Beginners: Volume 1 (Step By Step Beginners Guide)</h2>\n\n<p><a href=\"https://draft.blogger.com/blog/post/edit/6098680995920284372/1048530249804906907#\"><img alt=\"\" src=\"https://lh3.googleusercontent.com/-Yyflo3BzVmc/X3DHM9FV12I/AAAAAAAAAOc/5F3VWGQwWIAjR_E5mCiu3WbO82pl4NsnACLcBGAsYHQ/image.png\" style=\"height:240px; width:160px\" /></a></p>\n\n<p>&nbsp;</p>\n\n<p>लेखक :&nbsp;Nathan Clark</p>\n\n<p>Rating : 4.2 / 5&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><a href=\"https://draft.blogger.com/blog/post/edit/6098680995920284372/1048530249804906907#\">Buy Now</a></p>\n\n<p>&nbsp;</p>\n\n<h2>5.&nbsp;Java: A Beginner&#39;s Guide, Eighth Edition</h2>\n\n<p><a href=\"https://draft.blogger.com/blog/post/edit/6098680995920284372/1048530249804906907#\"><img alt=\"\" src=\"https://lh3.googleusercontent.com/-ZNLvrjYDtRY/X3DIV5-Gk1I/AAAAAAAAAOo/pe0LxVnpeIku8xBmbAho08XZ2BnAN2fZwCLcBGAsYHQ/image.png\" style=\"height:240px; width:194px\" /></a></p>\n\n<p>&nbsp;</p>\n\n<p>लेखक :&nbsp;Herbert Schildt</p>\n\n<p>Rating : 4.4 / 5&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><a href=\"https://draft.blogger.com/blog/post/edit/6098680995920284372/1048530249804906907#\">Buy Now</a></p>\n\n<p>&nbsp;</p>\n\n<p>दोस्तों अगर आपको इस लिस्ट में से कोई भी बुक purchase करनी है तो आप बुक ने निचे दिए गए Buy Now के बटन पर क्लिक करके purchase कर सकते हैं।&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>अगर आपको कोई सवाल है इस पोस्ट के related तो आप मुझसे कमेंट कर के पूछ सकते हैं।&nbsp;</p>\n', '<p><strong>Assignment - 2 is updated once again</strong></p>\r\n', '<p><strong>Assignment 3</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p>assignment 4</p>\r\n', '', '<p>HomeWork - 1</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-07-07 11:28:50', '', '', '', '2021-07-08 06:16:18'),
(11, 'WEB DEVLOPMENT', 'ADIT7867', '13:00', 'BCA', '1', '21', '<p><em>Assignment 1</em></p>\r\n', '', '', '', '', '<p>HW 1</p>\r\n', '', '', '', '', '', '', '', '', '<p>class test %</p>\r\n', '', '', '', '', '', '2021-07-06 17:46:17', '', '', '', '2021-07-08 06:16:18'),
(12, 'B LANGUAGE', 'ADIT7867', '23:04', 'BBA', '1', '60', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-07-08 06:16:18'),
(13, 'C LANGUAGE', 'ADIT7867', '00:00', 'BBA', '1', '78', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-07-08 06:16:18'),
(14, 'C LANGUAGE', 'ADIT7867', '11:04', 'BBA', '1', '78', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-07-08 06:16:18'),
(15, 'DATA STRUCTURE', 'AKAN8021', '11:04', 'Dpharma', '1', '12', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-07-08 06:16:18'),
(28, 'PHARMACEUTICS', 'AKAN8021', '00:18', 'Dpharma', '1', '23', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-07-08 06:16:18'),
(29, 'EARTHQUAKE ENGINEERING', 'AKAN8021', '05:24', 'Polytechnic Mechanical', '1', '63', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-07-08 06:16:18'),
(30, 'C LANGUAGE', 'AKAN8021', '12:20', 'BBA', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-07-08 06:16:18'),
(31, 'C LANGUAGE', 'AKAN8021', '15:19', 'Polytechnic Mechanical', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-07-08 06:16:18'),
(32, 'C LANGUAGE', 'AKAN8021', '02:20', 'BBA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-07-08 06:16:18'),
(33, 'DATA STRUCTURE', 'NEET9802', '22:39', 'BCA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-07-08 06:16:18'),
(34, 'DATA STRUCTURE', 'NEET9802', '22:39', 'BCA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-07-08 06:16:18');

-- --------------------------------------------------------

--
-- Table structure for table `teacherdetails`
--

CREATE TABLE `teacherdetails` (
  `id` int(11) NOT NULL,
  `teachername` text NOT NULL,
  `fathername` text NOT NULL,
  `adhaaar` text NOT NULL,
  `dob` text NOT NULL,
  `contact1` text NOT NULL,
  `contact2` text NOT NULL,
  `email` text NOT NULL,
  `regid` varchar(255) NOT NULL,
  `gender` text NOT NULL,
  `address` text NOT NULL,
  `pin` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `department` text NOT NULL,
  `branch` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `passwords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacherdetails`
--

INSERT INTO `teacherdetails` (`id`, `teachername`, `fathername`, `adhaaar`, `dob`, `contact1`, `contact2`, `email`, `regid`, `gender`, `address`, `pin`, `city`, `state`, `department`, `branch`, `image`, `passwords`) VALUES
(17, 'Aditya Prakash Tripathi', '5454', '54545454545454545', '2001-07-01', '4554545454', '4545454545', 'nikhiltripathi243@gmail.com', 'ADIT7867', 'Male', 'H.no 784b Ravi prakash tripath\r\nBichhiya saraswatipuram\r\nNear p.a.c campus456', '4564564545', 'Gorakhpur', 'Uttar Pradesh', 'BTech', 'Computer Science', 'ADIT194831033_4011985218885914_159778473357120236_n-removebg-preview.png', '1234'),
(18, 'Akanksha Tripathi', 'Durgesh Mishra', '854632569874', '1999-05-07', '9597515422', '9597515422', 'akanksha@gmail.com', 'AKAN8021', 'Female', '', '', '', '', 'Dpharma', 'Dpharma', 'AKANRed Book Playful Pop of Color Education Logo.gif', '2345'),
(19, 'Neeteesh', 'Ram', '79855154227', '2021-06-30', '5656545456', '4545454545', 'neeteesh@gmail.com', 'NEET9802', 'Male', 'lkjhdiagduiboi', '6156156', 'gorakhpur', 'uttarpradesh', 'BTech', 'Computer Science', 'NEETicons8-school-bus-96.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `timetransport`
--

CREATE TABLE `timetransport` (
  `id` int(11) NOT NULL,
  `vnum` text NOT NULL,
  `driverid` text NOT NULL,
  `pp0` text NOT NULL,
  `pp1` text NOT NULL,
  `pp2` text NOT NULL,
  `pp3` text NOT NULL,
  `pp4` text NOT NULL,
  `pt0` text NOT NULL,
  `pt1` text NOT NULL,
  `pt2` text NOT NULL,
  `pt3` text NOT NULL,
  `pt4` text NOT NULL,
  `k0` text NOT NULL,
  `k1` text NOT NULL,
  `k2` text NOT NULL,
  `k3` text NOT NULL,
  `k4` text NOT NULL,
  `starttime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timetransport`
--

INSERT INTO `timetransport` (`id`, `vnum`, `driverid`, `pp0`, `pp1`, `pp2`, `pp3`, `pp4`, `pt0`, `pt1`, `pt2`, `pt3`, `pt4`, `k0`, `k1`, `k2`, `k3`, `k4`, `starttime`) VALUES
(1, '55', ',mnkj', 'padribazar', 'asuran', 'dharmshala', 'golghar', 'shashtri chowk', '09:23', '09:32', '09:37', '09:42', '09:47', '20', '17', '15', '12', '11', '2021-06-27 16:47:32'),
(2, '12345', '', 'Delhi', 'Agra', 'Lucknow', 'Faizabaad', 'Khalilabaad', '07:20', '11:42', '15:03', '16:42', '17:48', '827', '550', '278', '140', '35', '2021-06-27 16:47:32');

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `id` int(11) NOT NULL,
  `userid` text NOT NULL,
  `work` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`id`, `userid`, `work`, `time`) VALUES
(87, '', 'End Call', '2021-07-07 17:37:16'),
(89, '', 'work 1', '2021-07-08 09:08:36');

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `id` int(11) NOT NULL,
  `vname` text NOT NULL,
  `vnum` text NOT NULL,
  `dname` text NOT NULL,
  `driverid` text NOT NULL,
  `dcontact` text NOT NULL,
  `dadhar` text NOT NULL,
  `route` text NOT NULL,
  `via` text NOT NULL,
  `stime` text NOT NULL,
  `etime` text NOT NULL,
  `type` text NOT NULL,
  `capacity` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`id`, `vname`, `vnum`, `dname`, `driverid`, `dcontact`, `dadhar`, `route`, `via`, `stime`, `etime`, `type`, `capacity`) VALUES
(2, 'Vehicle 2', '12345', 'ShyamSunder', 'KHhjk', '123456789', '1234546789123', 'Delhi', 'Lucknow', '07:20', '18:25', 'bus', '40'),
(3, 'transport1', '55', 'Nikhil', 'NIKH5610', '6331', '45', 'padribazar', 'asuran', '00:21', '12:22', 'bus', '1');

-- --------------------------------------------------------

--
-- Table structure for table `transtudent`
--

CREATE TABLE `transtudent` (
  `id` int(11) NOT NULL,
  `studentname` text NOT NULL,
  `studid` text NOT NULL,
  `contact` text NOT NULL,
  `homecontact` text NOT NULL,
  `gender` text NOT NULL,
  `vnum` text NOT NULL,
  `fromm` text NOT NULL,
  `fees` text NOT NULL,
  `stime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transtudent`
--

INSERT INTO `transtudent` (`id`, `studentname`, `studid`, `contact`, `homecontact`, `gender`, `vnum`, `fromm`, `fees`, `stime`) VALUES
(13, 'Divya Prakash Tripathi', 'DIVY4180', '7985515422', '7985515422', 'Male', '12345', 'Delhi', '', '2021-06-27 17:13:50'),
(14, 'Aditya Prakash Tripathi', 'NIKH4714', '7985515422', '7985515422', 'Male', '55', 'padribazar', '3600', '2021-06-27 18:39:04'),
(15, 'Aditya Prakash Tripathi', 'ADIT8795', '7985515422', '7985515422', 'Male', '55', 'asuran', '3960', '2021-06-27 18:04:41'),
(16, 'Neeteesh Mishra', 'NEET4727', '7985515422', '7985515422', 'Male', '55', 'golghar', '2160', '2021-07-07 17:24:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_teacher`
--
ALTER TABLE `attendance_teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branchinfo`
--
ALTER TABLE `branchinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fine`
--
ALTER TABLE `fine`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `studid` (`studid`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roomname` (`roomname`);

--
-- Indexes for table `hostelregister`
--
ALTER TABLE `hostelregister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issuebook`
--
ALTER TABLE `issuebook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `notifywork`
--
ALTER TABLE `notifywork`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quesans`
--
ALTER TABLE `quesans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomalloc`
--
ALTER TABLE `roomalloc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studwork`
--
ALTER TABLE `studwork`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subteacher`
--
ALTER TABLE `subteacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacherdetails`
--
ALTER TABLE `teacherdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetransport`
--
ALTER TABLE `timetransport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transtudent`
--
ALTER TABLE `transtudent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `attendance_teacher`
--
ALTER TABLE `attendance_teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `branchinfo`
--
ALTER TABLE `branchinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `fine`
--
ALTER TABLE `fine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hostel`
--
ALTER TABLE `hostel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hostelregister`
--
ALTER TABLE `hostelregister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `issuebook`
--
ALTER TABLE `issuebook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `notifywork`
--
ALTER TABLE `notifywork`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quesans`
--
ALTER TABLE `quesans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roomalloc`
--
ALTER TABLE `roomalloc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `studentdetails`
--
ALTER TABLE `studentdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `studwork`
--
ALTER TABLE `studwork`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subteacher`
--
ALTER TABLE `subteacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `teacherdetails`
--
ALTER TABLE `teacherdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `timetransport`
--
ALTER TABLE `timetransport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transtudent`
--
ALTER TABLE `transtudent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
