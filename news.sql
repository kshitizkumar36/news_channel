-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 11:58 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `heading` varchar(4444) NOT NULL,
  `news` varchar(9999) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `heading`, `news`, `photo`, `date`) VALUES
(2, 'event1', 'At HT Leadership Summit, Himanta Biswa Sarma slammed his former party, the Congress, for electing Mallikarjun Kharge as its chief and said if Shashi Tharoor would have won the polls for the post, he would have said democracy has arrived in the Congress.', '1668417730Capture.jpg', '2022-11-14 09:22:10');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `location`) VALUES
(1, 'India ');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `post_by` varchar(11) NOT NULL,
  `news_category` int(11) NOT NULL,
  `heading` mediumtext NOT NULL,
  `content` mediumtext NOT NULL,
  `postdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `photo` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `post_by`, `news_category`, `heading`, `content`, `postdate`, `photo`, `video`, `status`) VALUES
(1, '1', 1, '‘Already coordinating clo', '\r\nPrime Minister Narendra Modi is expected to hold a meeting with leaders of several other participating countries on the sidelines of the G20 summit\r\nPrime Minister Narendra Modi interacts with French President Emmanuel Macron during the G20 Summit, in Bali, Indonesia, Tuesday, Nov. 15, 2022.(Twitter / @PMOIndia)', '2022-11-15 07:03:52', '1668495832Capture.PNG', '', 1),
(2, '1', 3, 'How is AAP facing the twin challenges of Gujarat election and Delhi civic polls?', 'By Ashutosh Mishra: After winning the Delhi Assembly election with a massive majority, taking Punjab and opening its account in Goa, the Aam Aadmi Party (AAP) led by Arvind Kejriwal says its morale is high, though it failed to register its presence in Uttar Pradesh and Uttarakhand.\r\n\r\nWith a larger ambition to expand its political base by hard selling its governance model, the AAP has entered the Gujarat Assembly election fray and also fielded candidates in the Himachal Pradesh polls. The AAP was primarily focusing on Gujarat with all its resources and announced a local OBC face as the chief ministerial candidate following its strategy in Punjab.', '2022-11-15 07:08:13', '1668496093dfsa.JPG', '', 1),
(3, '1', 4, 'Owaisi greeted with ‘Modi Modi’ chants, black flags in poll-bound Gujarat’s Surat', 'By Divyesh Singh: AIMIM chief Asaduddin Owaisi was greeted with black flags and chants of ‘Modi Modi’ while attending a public meeting in poll-bound Gujarat’s Surat on Sunday.\r\n\r\nOwaisi was in the city to campaign for the AIMIM candidate contesting the upcoming Gujarat assembly election from the Surat East constituency. He was slated to address a gathering on Sunday evening with former MLA Warish Pathan.', '2022-11-15 07:09:16', '1668496156asdfsa.JPG', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_category`
--

CREATE TABLE `news_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_category`
--

INSERT INTO `news_category` (`id`, `category_name`) VALUES
(1, 'Election News'),
(2, 'Weather News'),
(3, 'Science'),
(4, 'Religion');

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `id` int(11) NOT NULL,
  `heading` mediumtext NOT NULL,
  `story` mediumtext NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`id`, `heading`, `story`, `pic`) VALUES
(1, 'Isaac Newton', 'Isaac Newton was born in Lincolnshire, England in 1643, where he grew up on a farm. When he was a boy, he made lots of brilliant inventions like a windmill to grind corn, a water clock and a sundial. However, Isaac didn’t get brilliant marks at school. When he was 18, Isaac went to study at Cambridge University. He was very interested in physics, mathematics and astronomy. But in 1665 the Great Plague, which was a terrible disease, spread in England, and Cambridge University had to close down. Isaac returned home to the farm. Isaac continued studying and experimenting at home. One day he was drinking a cup of tea in the garden. He saw an apple fall from a tree. ‘Why do apples fall down instead of up?’ From this, he formed the theory of gravity. Gravity is an invisible force which pulls objects towards the Earth and keeps the planets moving around the Sun. Isaac was fascinated by light. He discovered that white light is in fact made up of all the colours of the rainbow. Isaac also invented a special reflecting telescope, using mirrors. It was much more powerful than other telescopes. Isaac made another very important discov', '1668412129isaac-newton-thumbnail.png'),
(2, 'My favourite clothes', '‘What are you doing, Mum?’ ‘I’m taking your old clothes to the charity shop.’ ‘Wait! They still fit me. Look. Grandma knitted this jumper for me. It’s my favourite. ‘The slippers are still OK though. Peter bought me these for my birthday. ‘OK. Well, the trousers are fine. I got these for Christmas.’ ‘Yes. Christmas 2002.’ ‘Oh, why did I grow so much? I love these clothes. OK. You can take them.’ Fifteen minutes later ‘I didn’t take the clothes to the shop.’ ‘Why not?’ ‘On the way I found someone who really needed some new clothes.’', '1668412207my-favourite-clothes-2012_0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `mobile`, `dob`, `address`, `password`, `creation_date`) VALUES
(1, 'kshitiz kumar', 'kshitiz.ranchi@gmail.com', '9006042011', '1999-12-10', 'Karam chowk harmu ranchi', 'password', '2022-11-12 07:41:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_category`
--
ALTER TABLE `news_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news_category`
--
ALTER TABLE `news_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
