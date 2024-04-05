-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2024 at 10:35 AM
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
-- Database: `olympic`
--

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `otp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `otp`
--

INSERT INTO `otp` (`otp`) VALUES
(745),
(336),
(387),
(277);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` varchar(5000) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `image`) VALUES
(12, 'Paris 2024 unveils Olympic and Paralympic Week dates', 'Test SuccessfulParis 2024 has revealed the dates of the 2018 Olympic and Paralympic Week, during a major event held at the Salon de lEducation.\r\n\r\nParis 2024 President Tony Estanguet joined Minister of Education Jean-Michel Blanquer, Minister of Sports Laura Flessel, CNOSF President Denis Masseglia and CPSF Secretary General Tanguy de la Forest to reveal that the 2018 Olympic and Paralympic Schools Week would run between 27 January and 3 February, following a successful inaugural edition in 2017.\r\n\r\nThe week-long event, brought into the national curriculum during Paris 2024s Host City Bid, sees Olympic and Paralympic sport takeover schools across the country. For children of all ages, the Week invites them to try out new sports, engage with athletes, and understand the values of Olympism.\r\n\r\nNotably, the Olympic and Paralympic Week will also be the first major event carried out by the future Paris 2024 Organising Committee, which is likely to be formed in January 2018.\r\n\r\nThe event continues Paris 2024s commitment to engage the French youth in the Olympic and Paralympic Movements, and to use the Games as a catalyst to boost participation in sport among children.\r\n\r\nPresident of Paris 2024, Tony Estanguet, said: A major legacy of the bidding phase, the Olympic and Paralympic Week offers the opportunity for young people to discover Olympism, to change their perception of disability, and to discover new skills.\r\n\r\nParis 2024 is committed to build a more active, and more inclusive generation. That is why we are mobilizing all of our stakeholders in the world of sport and education behind this cause, and we will continue to drive towards this ambition.\r\n\r\nMinister of Education, Jean-Michel Blanquer, added: The Ministry of National Education is wholly engaged in increasing participation and prominence of sport in schools before, during and after the Games of 2024.\r\n\r\nTogether with all the stakeholders of school sport, we are committed to developing sport as a tool to teach and promote the positive values in the school environment, in particular to combat the growing reluctance to activity of young people. We want to promote learning through the values of sport. These values are the values of the Republic and are widely shared in schools.\r\n\r\nMinister of Sports, Laura Flessel, said: We are seven years from Paris 2024. In these seven years, we have the honour of bringing to France the beautiful adventure of the Olympic and Paralympic Games. We want to mobilise the people of this nation from a very young age, because its the youngsters of today who will become the 2024 Generation. The Olympic and Paralympic Week is an amazing opportunity to raise awareness of the values of sport and Olympism. The National Day of Sport, which will be celebrated every September 13th, will also be an important moment for our national to focus on the Games.\r\n\r\nDenis Masseglia, President of the French National Olympic Committee (CNOSF), added: This second edition of Olympic and Paralympic Week brings together the sports movement and with the Ministry of National Education. The educational and social values of Olympism are at the heart of our work towards Paris 2024. Continuing on from the good work to bring Olympism to schools throughout 2017, the CNOSF will again mobilise the sports movement in 2018 and will continue its commitment alongside Paris 2024 to deliver on this special project.\r\n\r\nEmmanuelle Assmann, President of the French Paralympic Committee (CPSF), said: Through this week of discovery, children around France will have a new perception of the issues of disability they will become familiar with the sport aspect of disability, as well as the universal values of Olympism. The 2024 generation must be one of inclusion and unity and I am convinced that the Olympic and Paralympic Week is an exceptional promotional tool.\r\n', 'event4.jpg'),
(13, 'Paralympic and Olympic Week take over France', '\r\nThe second edition of the Olympic and Paralympic week will take place all over France between Saturday, January 27, and February 3. During one week, more than 300 schools will get involved in various activities, including visits from some Paralympians, Olympians, and ambassadors of the Paris 2024 Games.\r\n\r\nThe Olympic and Paralympic week is the first official initiative involving the new Paris 2024 Organizing Committee of the Olympic and Paralympic Games (OCOG). The official launch will take place in Vanves, near Paris, in a school that took part in the Paris 2024 campaign.\r\n\r\nDuring the week, three-time Paralympic champion Marie-Amelie le Fur will meet schoolchildren to share her story and talk about Paralympic sports. Le Fur won gold in the womens 100m T44 at London 2012 and in the womens long jump T44 and 400m T44 at Rio 2016.\r\n\r\nRio 2016 womens 100m T13 gold medallist Nantenin Keita will take part in the presentation of the Paris 2024 objectives in terms of education through sport. The presentation will take place on Monday, 29 January, and will count with the President of the Paris 2024 OCOG, Tony Estanguet, and the French ministers for Education, Sport, and Persons with Disabilities.\r\n\r\nSeveral schools have worked on the values, history, athletes, and messages of the Games and will conclude their projects during this week. Other schools will introduce Olympic and Paralympic sports to students. While teachers will use the Games in classes like Maths, Geography, History, and Biology.\r\n\r\nParis 2024 wants the Olympic and Paralympic week to be seen as a project that goes beyond the frontiers of sport to have an impact on society in terms of education, gender equality, and accessibility.\r\n\r\n\r\n\r\n\r\n', 'event5.jpg'),
(16, 'Eleven new sports and disciplines apply for Paris 2024', 'The International Paralympic Committee (IPC) has confirmed that eight new sports and three sport disciplines have expressed an interest in applying for inclusion in the Paris 2024 Paralympic Games sport programme.\r\n\r\nAs part of a 14-month exercise by the IPC to determine the final sports programme for Paris 2024, recognised international federations of summer sports not yet on the Paralympic programme had until 21 November to notify the IPC whether they wanted to be considered for inclusion.\r\n\r\nEight international federations - International Federation of CP Football, International Federation of Powerchair Football, International Golf Federation, International Surfing Association, World Armwrestling Federation, World Karate Federation, World Para Dance Sport and World Sailing - all expressed an interest to be included.\r\n\r\nBy 21 November, existing international federations with sports and disciplines on the Tokyo 2020 Paralympic Games sports programme were also free to suggest additional sports and disciplines for inclusion in the 2024 Games.\r\n\r\nThe International Wheelchair Basketball Federation has put forward the 3x3 discipline of the sport, World Taekwondo has expressed an interest in including the Poomsae discipline of Para taekwondo and World Shooting Para Sport has proposed the inclusion of Para trap shooting.\r\n\r\nAndrew Parsons, IPC President, said: “We truly believe that the application process to be included in the Paris 2024 Paralympic Games sport programme will be the most competitive yet and this is reflected with the number of sports and disciplines expressing an interest for inclusion.\r\n\r\n“No sport is guaranteed a place at Paris 2024 and the IPC will now analyse these applications to determine which sports and disciplines go forward to the next phase. In the second phase of this exercise the level of competition will increase dramatically as sports already on the Paralympic programme will enter the race.”\r\n\r\nOn 27 January 2018, the IPC Governing Board will meet in Bonn, Germany, to decide which new sports and disciplines from those who have expressed an interest are eligible to enter Phase 2 of the application process.\r\n\r\nFrom February 2018, the 22 established Paralympic sports, plus those additional sports and disciplines approved by the Governing Board, will be invited to complete a comprehensive application pack by July 2018. The pack features a series of questions that aims to give the IPC detailed information regarding each sport’s governance, rules and regulations, associated costs, anti-doping programme compliance and activities, worldwide reach, quadrennial competition programme and procedures to ensure athlete welfare.\r\n\r\nFollowing a thorough review of all applications, including full agreement from the IOC and Paris 2024, the IPC Governing Board will announce its final decision on the Paris 2024 Paralympic Games sport programme in early 2019.\r\n\r\nThe first Paralympic Games took place in Rome, Italy, in 1960 and featured 400 athletes from 23 countries who competed in eight sports - archery, athletics, dartchery, snooker, swimming, table tennis, wheelchair fencing and wheelchair basketball.\r\n\r\n\r\n\r\n\r\n', 'event3.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `olympicGames` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `first_name`, `last_name`, `address`, `city`, `country`, `phone`, `email`, `olympicGames`) VALUES
(13, 'tivra', 'tivra', 'tivra', 'tivra', 'tivra', 'tivra', 'tivra@gmail.com', 'Tennis');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `password`) VALUES
(13, 'Asbin', 'Asbin', 'Asbin', '75993bd1876191e3a9188f9d01bf25d3'),
(15, 'tivra', 'tivra', 'tivra', '0677a0e26962699724bc2a2283ebc92a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
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
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
