-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2024 at 07:53 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `institute`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `sno` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`sno`, `username`, `password`) VALUES
(1, 'manojmeghwanshi@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `caddcard&del`
--

CREATE TABLE `caddcard&del` (
  `sno` int(11) NOT NULL,
  `headline` text NOT NULL,
  `paragraph` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cheadline&para`
--

CREATE TABLE `cheadline&para` (
  `sno` int(230) NOT NULL,
  `headline` text NOT NULL,
  `smallheadline` text NOT NULL,
  `colorheadline` text NOT NULL,
  `smallcheadline` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cheadline&para`
--

INSERT INTO `cheadline&para` (`sno`, `headline`, `smallheadline`, `colorheadline`, `smallcheadline`) VALUES
(1, 'OUR', 'Your Path To Exam Brilliance Begins Here – ', 'COURSES', 'Join Now!');

-- --------------------------------------------------------

--
-- Table structure for table `hbannerimg`
--

CREATE TABLE `hbannerimg` (
  `sno` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hbannerimg`
--

INSERT INTO `hbannerimg` (`sno`, `image`) VALUES
(1, 'Coursess.png');

-- --------------------------------------------------------

--
-- Table structure for table `hbtn1`
--

CREATE TABLE `hbtn1` (
  `sno` int(11) NOT NULL,
  `btnlabel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hbtn1`
--

INSERT INTO `hbtn1` (`sno`, `btnlabel`) VALUES
(1, 'Join us Now!');

-- --------------------------------------------------------

--
-- Table structure for table `hbtn2`
--

CREATE TABLE `hbtn2` (
  `sno` int(11) NOT NULL,
  `btnlabel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hbtn2`
--

INSERT INTO `hbtn2` (`sno`, `btnlabel`) VALUES
(1, 'Explore Courses');

-- --------------------------------------------------------

--
-- Table structure for table `hbtn3`
--

CREATE TABLE `hbtn3` (
  `sno` int(11) NOT NULL,
  `btnlabel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hbtn3`
--

INSERT INTO `hbtn3` (`sno`, `btnlabel`) VALUES
(1, 'Send Message');

-- --------------------------------------------------------

--
-- Table structure for table `hdcoursebannerheadline`
--

CREATE TABLE `hdcoursebannerheadline` (
  `sno` int(11) NOT NULL,
  `title` text NOT NULL,
  `para` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hdcoursebannerheadline`
--

INSERT INTO `hdcoursebannerheadline` (`sno`, `title`, `para`) VALUES
(1, 'An Interactive Learning Adventure Awaits!', 'Our Perfromance Courses');

-- --------------------------------------------------------

--
-- Table structure for table `hdmissionheadline&para`
--

CREATE TABLE `hdmissionheadline&para` (
  `sno` int(11) NOT NULL,
  `headline` text NOT NULL,
  `paragraph` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hdmissionheadline&para`
--

INSERT INTO `hdmissionheadline&para` (`sno`, `headline`, `paragraph`) VALUES
(1, 'Our Mission', 'At the heart of our endeavor lies a steadfast commitment: to provide quality education to students and pave the way for their brighter futures. Our mission is rooted in the belief that education is not just a privilege but a fundamental right that every young mind deserves to access. With unwavering dedication, we strive to create an environment where knowledge flourishes, curiosity thrives, and dreams take flight.');

-- --------------------------------------------------------

--
-- Table structure for table `hdslideimg`
--

CREATE TABLE `hdslideimg` (
  `sno` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hdslideimg`
--

INSERT INTO `hdslideimg` (`sno`, `image`) VALUES
(23, 'Frontend developer (1).png'),
(28, 'CLC.png');

-- --------------------------------------------------------

--
-- Table structure for table `hdtopheaderimag`
--

CREATE TABLE `hdtopheaderimag` (
  `sno` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hdtopheaderimag`
--

INSERT INTO `hdtopheaderimag` (`sno`, `img`) VALUES
(1, 'banner-right-image.png');

-- --------------------------------------------------------

--
-- Table structure for table `hdvisonheadline&para`
--

CREATE TABLE `hdvisonheadline&para` (
  `sno` int(11) NOT NULL,
  `headline` text NOT NULL,
  `paragraph` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hdvisonheadline&para`
--

INSERT INTO `hdvisonheadline&para` (`sno`, `headline`, `paragraph`) VALUES
(1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hformheadline`
--

CREATE TABLE `hformheadline` (
  `sno` int(11) NOT NULL,
  `headline` longtext NOT NULL,
  `paragraph` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hformheadline`
--

INSERT INTO `hformheadline` (`sno`, `headline`, `paragraph`) VALUES
(1, 'Say Hello ', 'Please fill out the form below to get in touch with us:');

-- --------------------------------------------------------

--
-- Table structure for table `hheadline`
--

CREATE TABLE `hheadline` (
  `sno` int(11) NOT NULL,
  `Content` text NOT NULL,
  `paragraph` text NOT NULL,
  `Content 2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hheadline`
--

INSERT INTO `hheadline` (`sno`, `Content`, `paragraph`, `Content 2`) VALUES
(1, 'Unlocking Your ', 'Welcome To Vanni Coaching', 'Learning');

-- --------------------------------------------------------

--
-- Table structure for table `hmissionimg`
--

CREATE TABLE `hmissionimg` (
  `sno` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hmissionimg`
--

INSERT INTO `hmissionimg` (`sno`, `img`) VALUES
(1, 'norbert-braun-uU8n5LuzpTc-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hslidecourseheadline`
--

CREATE TABLE `hslidecourseheadline` (
  `sno` int(11) NOT NULL,
  `headline` text NOT NULL,
  `Colorheadline` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hslidecourseheadline`
--

INSERT INTO `hslidecourseheadline` (`sno`, `headline`, `Colorheadline`) VALUES
(1, 'Our', 'Courses');

-- --------------------------------------------------------

--
-- Table structure for table `hvisionimg`
--

CREATE TABLE `hvisionimg` (
  `sno` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hvisionimg`
--

INSERT INTO `hvisionimg` (`sno`, `img`) VALUES
(1, '948560_OE7IMX0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sociallinks`
--

CREATE TABLE `sociallinks` (
  `sno` int(11) NOT NULL,
  `fb` text NOT NULL,
  `insta` text NOT NULL,
  `linkdn` text NOT NULL,
  `yt` text NOT NULL,
  `twitter` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `caddcard&del`
--
ALTER TABLE `caddcard&del`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `cheadline&para`
--
ALTER TABLE `cheadline&para`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `hbannerimg`
--
ALTER TABLE `hbannerimg`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `hbtn1`
--
ALTER TABLE `hbtn1`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `hbtn2`
--
ALTER TABLE `hbtn2`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `hbtn3`
--
ALTER TABLE `hbtn3`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `hdcoursebannerheadline`
--
ALTER TABLE `hdcoursebannerheadline`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `hdmissionheadline&para`
--
ALTER TABLE `hdmissionheadline&para`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `hdslideimg`
--
ALTER TABLE `hdslideimg`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `hdtopheaderimag`
--
ALTER TABLE `hdtopheaderimag`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `hdvisonheadline&para`
--
ALTER TABLE `hdvisonheadline&para`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `hformheadline`
--
ALTER TABLE `hformheadline`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `hheadline`
--
ALTER TABLE `hheadline`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `hmissionimg`
--
ALTER TABLE `hmissionimg`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `hslidecourseheadline`
--
ALTER TABLE `hslidecourseheadline`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `hvisionimg`
--
ALTER TABLE `hvisionimg`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `sociallinks`
--
ALTER TABLE `sociallinks`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `caddcard&del`
--
ALTER TABLE `caddcard&del`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cheadline&para`
--
ALTER TABLE `cheadline&para`
  MODIFY `sno` int(230) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hbannerimg`
--
ALTER TABLE `hbannerimg`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hbtn1`
--
ALTER TABLE `hbtn1`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hbtn2`
--
ALTER TABLE `hbtn2`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hbtn3`
--
ALTER TABLE `hbtn3`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hdcoursebannerheadline`
--
ALTER TABLE `hdcoursebannerheadline`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hdmissionheadline&para`
--
ALTER TABLE `hdmissionheadline&para`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hdslideimg`
--
ALTER TABLE `hdslideimg`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `hdtopheaderimag`
--
ALTER TABLE `hdtopheaderimag`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hdvisonheadline&para`
--
ALTER TABLE `hdvisonheadline&para`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hformheadline`
--
ALTER TABLE `hformheadline`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hheadline`
--
ALTER TABLE `hheadline`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hmissionimg`
--
ALTER TABLE `hmissionimg`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hslidecourseheadline`
--
ALTER TABLE `hslidecourseheadline`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hvisionimg`
--
ALTER TABLE `hvisionimg`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sociallinks`
--
ALTER TABLE `sociallinks`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
