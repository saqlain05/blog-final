-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2020 at 08:05 PM
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
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `blogtext` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `blogername` varchar(50) NOT NULL,
  `blogtext2` text NOT NULL,
  `blogtext3` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `blogtext`, `image`, `blogername`, `blogtext2`, `blogtext3`, `status`) VALUES
(10, 'saqlain nasim', '<p>safs<strong>nafdi<em>sdkfjsdsd</em></strong><em>fsdf</em></p>', '509322034_screencapture-localhost-php-LiveProjectUpdate-admin-manage-product-php-2020-06-24-14_19_25.png', 'sdfkj', 'afsij', 'kjsd', 1),
(11, 'Mera name', '<p>Pull in Bootstrap&rsquo;s&nbsp;<strong>source files</strong>&nbsp;into nearly any project with some of the most popular package managers. No matter the package manager, Bootstrap will&nbsp;<strong>require a Sass compiler and&nbsp;<a href=\"https://github.com/postcss/autoprefixer\">Autoprefixer</a></strong>&nbsp;for a setup that matches our official compiled versions.</p>', '980614645_screencapture-localhost-php-LiveProjectUpdate-admin-manage-product-php-2020-06-24-14_19_25.png', 'msarkljkle', 'Pull in Bootstrapâ€™s source files into nearly any project with some of the most popular package managers. No matter the package manager, Bootstrap will require a Sass compiler and Autoprefixer for a setup that matches our official compiled versions.', 'Pull in Bootstrapâ€™s source files into nearly any project with some of the most popular package managers. No matter the package manager, Bootstrap will require a Sass compiler and Autoprefixer for a setup that matches our official compiled versions.', 1),
(12, 'Saqlain', '<p>my name is <a href=\"https://www.google.com\"><em>md saqlan nasim</em></a> my best friend name is <strong>shahzadi parveen</strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi amet quidem incidunt perspiciatis nesciunt aspernatur, animi iusto cumque quaerat reiciendis sint recusandae labore totam illum repellat dicta dolores natus quis.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi amet quidem incidunt perspiciatis nesciunt aspernatur, animi iusto cumque quaerat reiciendis sint recusandae labore totam illum repellat dicta dolores natus quis.</strong></p>\r\n<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi amet quidem incidunt perspiciatis nesciunt aspernatur, animi iusto cumque quaerat reiciendis sint recusandae labore totam illum repellat dicta dolores natus quis.</p>', '658897842_background-blur-clean-clear-531880 (1).jpg', 'Saqlain', '<p>my name is <a href=\"https://www.google.com\"><em>md saqlan nasim</em></a> my best friend name is <strong>shahzadi parveen</strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi amet quidem incidunt perspiciatis nesciunt aspernatur, animi iusto cumque quaerat reiciendis sint recusandae labore totam illum repellat dicta dolores natus quis.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi amet quidem incidunt perspiciatis nesciunt aspernatur, animi iusto cumque quaerat reiciendis sint recusandae labore totam illum repellat dicta dolores natus quis.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi amet quidem incidunt perspiciatis nesciunt aspernatur, animi iusto cumque quaerat reiciendis sint recusandae labore totam illum repellat dicta dolores natus quis.</strong></p>', '<p>my name is <a href=\"https://www.google.com\"><em>md saqlan nasim</em></a> my best friend name is <strong>shahzadi parveen</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi amet quidem incidunt perspiciatis nesciunt aspernatur, animi iusto cumque quaerat reiciendis sint recusandae labore totam illum repellat dicta dolores natus quis.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi amet quidem incidunt perspiciatis nesciunt aspernatur, animi iusto cumque quaerat reiciendis sint recusandae labore totam illum repellat dicta dolores natus quis.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi amet quidem incidunt perspiciatis nesciunt aspernatur, animi iusto cumque quaerat reiciendis sint recusandae labore totam illum repellat dicta dolores natus quis.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi amet quidem incidunt perspiciatis nesciunt aspernatur, animi iusto cumque quaerat reiciendis sint recusandae labore totam illum repellat dicta dolores natus quis.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi amet quidem incidunt perspiciatis nesciunt aspernatur, animi iusto cumque quaerat reiciendis sint recusandae labore totam illum repellat dicta dolores natus quis.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi amet quidem incidunt perspiciatis nesciunt aspernatur, animi iusto cumque quaerat reiciendis sint recusandae labore totam illum repellat dicta dolores natus quis.</p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`id`, `email`) VALUES
(2, 'saqlain@gmail.cpm'),
(4, 'saqlainnasim@gmail.com'),
(5, 'roseisred9821@gmail.com'),
(7, 'shama@gmail.com'),
(8, 'sadain@gmail.com'),
(9, 'meraname@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
