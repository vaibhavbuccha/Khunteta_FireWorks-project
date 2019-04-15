-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2019 at 07:10 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fireworks`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(1) NOT NULL,
  `about` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about`) VALUES
(1, 'Butâ€¦how the heck do you get started? Thereâ€™s so much info out there on the web, and everyoneâ€™s telling you to do different things. Who do you listen to? Whereâ€™s the starting point? Damnit, maybe you should just forget it â€“ itâ€™s too confusing! Well, hold up. I used to be a blogging newbie too. I had the same problems. I started my blog (BloggingBasics101.com) way back in 2006, and I knew less than nothing about blogging. In fact, it was only the week before Iâ€™d learned what a blog was.Now I know a ton about them, and my blogâ€™s doing pretty well â€“ I receive more than 300,000 unique visitors per month which makes me consider myself someone you could listen to and learn from when it comes to building your own blog. Iâ€™m not some sort of Guru, but I certainly do know the basics. I promise itâ€™ll be simple, relatively easy, and definitely easy to understand (no stupid jargon). Sound good? Awesome, letâ€™s move on.');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `admin_blog`
--

CREATE TABLE `admin_blog` (
  `id` int(20) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `blog` varchar(5000) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_blog`
--

INSERT INTO `admin_blog` (`id`, `title`, `blog`, `img`) VALUES
(1, 'The story behind the story: Amped life', 'Half of Amped lifeâ€™s inspiration is history. In 1973, NASA faced the first labour dispute in space. Skylab 4â€™s three-man crew was micromanaged through an over-ambitious schedule, and communication between mission control and the astronauts became so fraught that an unscheduled radio silence in October was characterized by the press as a mutiny', 'image/programmer.gif'),
(2, ' The story behind the story: Amped life', '\r\nHalf of Amped lifeâ€™s inspiration is history. In 1973, NASA faced the first labour dispute in space. Skylab 4â€™s three-man crew was micromanaged through an over-ambitious schedule, and communication between mission control and the astronauts became so fraught that an unscheduled radio silence in October was characterized by the press as a mutiny', 'image/th.jfif'),
(3, 'The story behind the story: Amped life', '\r\nHalf of Amped lifeâ€™s inspiration is history. In 1973, NASA faced the first labour dispute in space. Skylab 4â€™s three-man crew was micromanaged through an over-ambitious schedule, and communication between mission control and the astronauts became so fraught that an unscheduled radio silence in October was characterized by the press as a mutiny', 'image/programmer.gif');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `blog` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `name`, `title`, `blog`, `date`, `photo`) VALUES
(4, 'vaibhav', 'IDEAL FIREWORKS FOR LAST MINUTE DISPLAYS', 'Are you throwing a party and looking for some last minute entertainment? Fireworks are a great way to crank up the party and you can put on a good show even on the last moment. You just need to shop for the ideal fireworks for last minute displays: Single Ignition Boxes. Single Ignition Boxes, or SIBs, are the perfect way to organise a last-minute fireworks display. These boxes have it all â€“ they often last at least a minute, shooting over 100 fireworks in varying effects and colours. You simply have to buy a box or two and light them up! Itâ€™s a simple and affordable way to add that firework magic to your party. Here are some of our favourite SIBs to keep in mind.', '0000-00-00', 'image/Untitled6.png'),
(5, 'admin', ' here is somthing', 'Half of Amped lifeâ€™s inspiration is history. In 1973, NASA faced the first labour dispute in space. Skylab 4â€™s three-man crew was micromanaged through an over-ambitious schedule, and communication between mission control and the astronauts became so fraught that an unscheduled radio silence in October was characterized by the press as a mutiny', '0000-00-00', '../client/image/2000881-Joel-Spolsky-Quote-It-s-harder-to-read-code-than-to-write-it.jpg'),
(6, 'vaibhav', 'web designer', 'Are you throwing a party and looking for some last minute entertainment? Fireworks are a great way to crank up the party and you can put on a good show even on the last moment. You just need to shop for the ideal fireworks for last minute displays: Single Ignition Boxes. Single Ignition Boxes, or SIBs, are the perfect way to organise a last-minute fireworks display. These boxes have it all â€“ they often last at least a minute, shooting over 100 fireworks in varying effects and colours. You simply have to buy a box or two and light them up! Itâ€™s a simple and affordable way to add that firework magic to your party. Here are some of our favourite SIBs to keep in mind.', '0000-00-00', 'image/programmer.gif');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(250) NOT NULL,
  `content` varchar(500) NOT NULL,
  `blog_id` int(250) NOT NULL,
  `username` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`) VALUES
(1, '../client/image/IMG_0511.JPG'),
(2, '../client/image/IMG_0512.JPG'),
(3, '../client/image/BEMZ5132.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `content` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`) VALUES
(9, 'this is title ', 'this is content'),
(10, 'this is title 2', 'this is content 3\r\n'),
(11, 'this is new 3', 'content3');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(30) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image`) VALUES
(1, 'product', 'image/programmer.gif'),
(2, 'product', 'image/2000881-Joel-Spolsky-Quote-It-s-harder-to-read-code-than-to-write-it.jpg'),
(3, 'product', 'image/th.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'vaibhav', 'jainvaibhav415@gmail.com', '310a87565a48526e9d096f917007dbfe'),
(2, 'ankit', 'ankitgupta011298@gmail.com', '447d2c8dc25efbc493788a322f1a00e7'),
(3, 'aman', 'amanjainkdl@gmail.com', 'ccda1683d8c97f8f2dff2ea7d649b42c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_blog`
--
ALTER TABLE `admin_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_blog`
--
ALTER TABLE `admin_blog`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
