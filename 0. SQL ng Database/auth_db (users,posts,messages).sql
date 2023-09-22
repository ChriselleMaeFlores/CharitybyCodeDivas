-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2023 at 05:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auth_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 474973, 931659, 'Hi Chris, I\'m selle'),
(2, 931659, 474973, 'Hi selle, I\'m Chris'),
(3, 474973, 931659, 'Hi'),
(4, 474973, 931659, 'What u doin selle?'),
(5, 931659, 474973, 'coding'),
(6, 931659, 474973, 'how bout u?'),
(7, 474973, 931659, 'me too'),
(8, 931659, 474973, 'What you doin now?'),
(9, 474973, 931659, 'chatting with u?'),
(10, 931659, 474973, 'right lol'),
(11, 931659, 474973, 'bye now chris'),
(12, 931659, 474973, 'Hi chrisss'),
(13, 474973, 931659, 'helllooooooooooo'),
(14, 931659, 474973, 'how r u?'),
(15, 474973, 931659, 'finee'),
(16, 931659, 474973, 'alright');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `location` varchar(50) NOT NULL,
  `content` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `date`, `time`, `location`, `content`, `image`) VALUES
(1, 'Event 1', '2023-06-30', '13:00:00.000000', 'MOA Arena, J.W. Diokno Boulevard, Pasay, Metro Man', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non mauris dictum, commodo eros quis, convallis libero. Proin a condimentum leo. Sed blandit id metus eu gravida. Vestibulum consequat feugiat elit ac vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque mattis pretium est eget placerat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla id neque at nisl tincidunt hendrerit eg', 'upload/ev1.jpg'),
(2, 'Event 2', '2023-06-16', '14:05:00.000000', 'Intramuros, Manila', 'Morbi accumsan sit amet tortor vel varius. Fusce blandit varius vehicula. Fusce dapibus tortor dui. Cras eu odio condimentum, efficitur tortor et, vehicula nulla. Duis eu consequat nibh. Phasellus ullamcorper urna eget magna rhoncus, ac fermentum purus rutrum. Vivamus sagittis egestas leo vel fermentum. Duis feugiat dui condimentum magna dignissim efficitur. Morbi porttitor facilisis magna, eget dapibus ligula sagittis id. Aliquam ultricies lacus vitae ex pulvinar eleifend. Vestibulum pulvinar n', 'upload/ev2.jpeg'),
(3, 'Event 3', '2023-08-18', '15:30:00.000000', 'Parksville, BC, Canada', 'Parksville is a city on Vancouver Island in British Columbia, Canada. As of the 2021 Census, Parksville\'s population was 13,642, representing a 9.5% increase over the 2016 Census. Parksville is well known for its large, sandy beaches at Parksville Bay and Craig Bay.', 'upload/ev2.jpg'),
(4, 'Event 4', '2023-09-15', '06:30:00.000000', 'Mall of Asia Complex, J.W. Diokno Blvd, Pasay, 130', 'SM Mall of Asia has a 2-storey entertainment complex with world-class movie theatres and contains the country\'s first Olympic-sized ice-skating rink. The extensive selection of shops and dining establishments, from fast food to gourmet, can be a bit overwhelming.', 'upload/ev2.jpeg'),
(5, 'Event 5', '2023-09-15', '18:30:00.000000', 'P68M+2P6, Chandragiri 44619, Nepal', 'Chandragiri is a municipality in Kathmandu District in Bagmati Province of Nepal that was declared as municipality on 2 December 2014 by merging the former Village Development Committees Baad Bhanjyang, Balambu, Dahachok, Mahadevsthan, Machhegaun, Matatirtha, Naikap Naya Bhanjyang, Naikap Purano Bhanjyang, Satungal, Thankot and Tinthana.[2][3] The urban administration is located in Old-Balambu.[citation needed] The city\'s main attractions include Chandragiri Hill, Nepal with its Cable Car.[4]', 'upload/ev5.jpg'),
(6, 'Tin\'s Birthday', '2001-09-30', '06:00:00.000000', '81 Anahaw, Makati, 1217 Metro Manila', 'You are invited to my Birthday. See youuuuuu', 'upload/tin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `unique_id` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `loginas` varchar(255) NOT NULL,
  `pp` varchar(255) NOT NULL DEFAULT 'default-pp.png',
  `statuses` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `unique_id`, `fname`, `username`, `password`, `loginas`, `pp`, `statuses`) VALUES
(1, 474973, 'chriselleflores.101301@gmail.com', 'Chriselle101301', '$2y$10$IbL3gPPZ0/ewynjU4fqIKOQTxCqXkD7dDtfLWYWfU7gIf7ky1aZtq', 'Contributor', 'Chriselle101301648d2bb90a0f26.32126015.jpg', 'Offline now'),
(2, 931659, 'fchriselle4@gmail.com', 'chris', '$2y$10$aPY/L/0vZ0Hd5JEpadJ1D.M.cHSkPM2LdA/Jfvn2901pto6b7xFRO', 'Volunteer', 'chris6480f4e0882ea3.41413166.png', 'Offline now'),
(3, 497848, 'chaeyungflores@gmail.com', 'Chaeyung', '$2y$10$ZaWKZlj1NVr.6lXOif0F1O/f9/UlcL2nwch03B5NQieyM0In9tyDi', 'Volunteer', 'Chaeyung6484be6464e4c9.63511148.jpg', 'Offline now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
