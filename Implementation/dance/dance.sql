-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 10:03 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dance`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `name` varchar(100) NOT NULL,
  `venue` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`name`, `venue`, `date`, `size`) VALUES
('Parakram ', 'hall A', '2020-01-01', '200'),
('', 'hall A', '', ''),
('abc', 'hall A', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `dance_style` varchar(200) NOT NULL,
  `description_of_dance_style` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `image`, `name`, `gender`, `email`, `phone`, `dance_style`, `description_of_dance_style`, `time`) VALUES
(1, 'Maria Kary.jpgimages', 'Maria Kary', 'Female', 'kary@gmail.com', '9898877665', 'Hip-Hop', 'Hip-hop dance refers to street dance styles primarily performed to hip-hop music or that have evolved as part of hip-hop culture.', 'Monday and Wednesday (7:30-8:30)'),
(2, 'Maddie_Ziegler.jpgimages', 'Maddie Ziegler', 'Female', 'maddie@gmail.com', '9876543212', 'Ballet', 'A classical dance form characterized by grace and precision of movement and by elaborate formal gestures, steps, and poses.  A theatrical presentation of group or solo dancing to a musical accompanime', 'Monday and Wednesday (8:30-9:30)'),
(3, 'devesh.jpgimages', 'Devesh Mirchandani', 'Male', 'devesh@gmai.com', '9816252426', 'Bollywood', 'The Bollywood dance style is a beautiful blend of all Indian dance styles be it classical Indian dance, folk Indian dance or the more current R&B, hip hop music.', 'Wednesday to Friday(5pm-6pm)'),
(4, 'rach.JPGimages', 'Rachel Caldwell', 'Female', 'rachel@gmail.com', '9835346332', 'Tap Dance', 'Tap dance, style of dance in which a dancer wearing shoes fitted with heel and toe taps sounds out audible beats by rhythmically striking the floor or any other hard surface.', 'Wednesday to Friday(3:30pm-4:40pm)');

-- --------------------------------------------------------

--
-- Table structure for table `uniforms`
--

CREATE TABLE `uniforms` (
  `id` int(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dance_type` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uniforms`
--

INSERT INTO `uniforms` (`id`, `image`, `name`, `dance_type`, `gender`, `price`) VALUES
(5, 'camisole leotard.jpgimages', 'Camisole leotard', 'TutuTots, KindiBallet, KindiCombo & Ballet', 'For Female', '$22-$28'),
(6, 'black tap shoes.jpgimages', 'black tap shoes ', 'TutuTots, KindiBallet, KindiCombo & Ballet', 'For Female', '$30'),
(7, 'tank or burn-out.jpgimages', 'Tank or burn-out	', 'Street Hip Hop', 'For Female', '$17-$26'),
(8, 'sneakers.jpgimages', 'Sneakers', 'Street Hip Hop', 'For both Male and Female', '$40'),
(9, 'logo tee.jpgimages', ' Tee', 'Hip hop', 'For Male', '$17'),
(10, 'hip hop shorts or sweatpants.jpgimages', ' hip hop shorts or sweatpants', 'Hip hop ', 'For Male', '$18-$28'),
(11, 'black oxford tap shoes.jpegimages', 'black oxford tap shoes', 'Tap dance', 'For Male', '	$35'),
(12, 'inter.jpgimages', 'Salsa Dress', 'Salsa', 'For both Male and Female', '$20 ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `re-password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `Gender`, `email`, `phone`, `dob`, `username`, `password`, `re-password`) VALUES
(8, 'Parakram', 'Male', 'abc@gmail.com', '987654', '2019-07-17', 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uniforms`
--
ALTER TABLE `uniforms`
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
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `uniforms`
--
ALTER TABLE `uniforms`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
