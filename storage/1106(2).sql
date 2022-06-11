-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 11, 2022 at 02:25 PM
-- Server version: 8.0.13-4
-- PHP Version: 7.2.24-0ubuntu0.18.04.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `t5IRcSIzBd`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_dist`
--

CREATE TABLE `auth_dist` (
  `id` int(38) NOT NULL,
  `user_id` int(38) NOT NULL,
  `product_id` int(38) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth_dist`
--

INSERT INTO `auth_dist` (`id`, `user_id`, `product_id`) VALUES
(3, 1, 0),
(2, 1, 1),
(5, 1, 100),
(12, 8, 2),
(14, 8, 4),
(10, 8, 5),
(8, 13, 2),
(6, 19, 2),
(7, 23, 4),
(13, 24, 4),
(11, 24, 5);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `short_note` text,
  `size` decimal(11,2) NOT NULL,
  `price` double(11,2) NOT NULL,
  `type` varchar(250) DEFAULT NULL,
  `img` varchar(250) NOT NULL,
  `rating` decimal(4,1) NOT NULL,
  `developer` varchar(30) NOT NULL,
  `dwn_link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `short_note`, `size`, `price`, `type`, `img`, `rating`, `developer`, `dwn_link`) VALUES
(1, 'Sublime Text', 'Sublime Text is a commercial source code editor. It natively supports many programming languages and markup languages. Users can expand its functionality with plugins, typically community-built and maintained under free-software licenses.', 'Sublime Text is a sophisticated text editor for code, markup and prose', '18.26', 0.00, 'IDE', 'assets/svg/sublime-text.svg', '4.6', 'Sublime HQ', 'https://download.sublimetext.com/sublime_text_build_4126_x64_setup.exe'),
(2, 'MS Excel', 'Microsoft Excel is a spreadsheet developed by Microsoft for Windows, macOS, Android and iOS. It features calculation or computation capabilities, graphing tools, pivot tables, and a macro programming language called Visual Basic for Applications.', 'Microsoft Excel is the industry leading spreadsheet software program, a powerful data visualization and analysis tool.', '726.00', 5299.00, 'spreadsheet package', 'assets/svg/excel.svg', '4.7', 'Microsoft Corporation', 'http://toolhubs.herokuapp.com/admin/edit-product.php?id=2'),
(3, 'XAMPP', 'XAMPP is a free and open-source cross-platform web server solution stack package developed by Apache Friends, consisting mainly of the Apache HTTP Server, MariaDB database, and interpreters for scripts written in the PHP and Perl programming languages.', 'XAMPP is a completely free, easy to install Apache distribution containing MariaDB, PHP, and Perl.', '164.00', 0.00, 'server', 'assets/svg/xampp.svg', '4.6', 'Apache Friends', 'https://downloadsapachefriends.global.ssl.fastly.net/8.1.6/xampp-windows-x64-8.1.6-0-VS16-installer.exe?from_af=true'),
(4, 'Adobe Photoshop', 'Adobe Photoshop is a raster graphics editor developed and published by Adobe Inc. for Windows and macOS. It was originally created in 1988 by Thomas and John Knoll. Since then, the software has become the industry standard not only in raster graphics editing, but in digital art as a whole.', 'Create Beautiful Images, Graphics, Paintings, And 3D Artwork On Your Desktop And iPad. If You Can Dream It', '1260.00', 19158.95, 'designing software', 'assets/svg/photoshop.svg', '4.1', 'Adobe Systems Incorporated', 'http://toolhubs.herokuapp.com/admin/edit-product.php?id=4'),
(5, 'Microsoft Office', 'What is MS Office and its uses? Microsoft Office is a suite of applications designed to help with productivity and completing common tasks on a computer. You can create and edit documents containing text and images work with data in spreadsheets and databases and create presentations and posters.', 'Collaborate for free with online versions of Microsoft Word, PowerPoint, Excel, and OneNote. Save documents, workbooks, and presentations online', '1894.40', 4899.00, '', 'assets/svg/office-365.svg', '4.4', 'Microsoft Corporation', 'http://toolhubs.herokuapp.com/admin/edit-product.php?id=5'),
(6, 'AnyDesk', 'AnyDesk is a closed source remote desktop application distributed by AnyDesk Software GmbH. The proprietary software program provides platform independent remote access to personal computers and other devices running the host application', 'Access any device at any time. From anywhere. Always secure and fast', '3.65', 0.00, 'Remote Control', 'assets/svg/anydesk.svg', '4.5', 'ANYDESK SOFTWARE GMBH', 'http://toolhubs.herokuapp.com/admin/edit-product.php?id=6'),
(7, 'WhatsApp Desktop', 'With WhatsApp on the desktop, you can seamlessly sync all of your chats to your computer so that you can chat on whatever device is most convenient to you.', 'With WhatsApp on the desktop, you can seamlessly sync all of your chats to your computer so that you can chat on whatever device is most convenient to you.', '403.08', 0.00, 'social', 'assets/svg/whatsapp.svg', '3.8', 'WhatsApp Inc.', 'https://web.whatsapp.com/desktop/windows/release/x64/WhatsAppSetup.exe'),
(8, 'sketch', 'Sharing and building on each other&#039;s work is the ultimate form of learning and retaining knowledge. Since 2012, we&#039;re curating some of the best resources to help you design, prototype, and collaborate better and faster.', 'a', '100.00', 100.00, '1', 'assets/sketch.jfif', '4.1', 'Sketch', 'http://toolhubs.herokuapp.com/admin/edit-product.php?id=8'),
(11, 'Bluestack', 'BlueStacks is an American technology company known for the BlueStacks App Player and other cloud-based cross-platform products. The BlueStacks App Player allows Android applications to run on PCs running Microsoft Windows and macOS.', 'BlueStacks is an American technology company known for the BlueStacks App Player and other cloud-based cross-platform products. The BlueStacks App Player allows Android applications to run on PCs running Microsoft Windows and macOS.', '1638.40', 0.00, NULL, 'assets/uploads/bluestack.jpg', '4.3', 'BlueStacks', 'https://cloud.bluestacks.com/api/getdownloadnow?platform=win&amp;win_version=10&amp;mac_version=&amp;client_uuid=280e0fed-cf83-42d6-b453-bd2e4b31eeee&amp;app_pkg=&amp;platform_cloud=%257B%2522description%2522%253A%2522Chrome%2520101.0.4951.67%2520on%2520Windows%252010%252064-bit%2522%252C%2522layout%2522%253A%2522Blink%2522%252C%2522manufacturer%2522%253Anull%252C%2522name%2522%253A%2522Chrome%2522%252C%2522prerelease%2522%253Anull%252C%2522product%2522%253Anull%252C%2522ua%2522%253A%2522Mozilla%252F5.0%2520(Windows%2520NT%252010.0%253B%2520Win64%253B%2520x64)%2520AppleWebKit%252F537.36%2520(KHTML%252C%2520like%2520Gecko)%2520Chrome%252F101.0.4951.67%2520Safari%252F537.36%2522%252C%2522version%2522%253A%2522101.0.4951.67%2522%252C%2522os%2522%253A%257B%2522architecture%2522%253A64%252C%2522family%2522%253A%2522Windows%2522%252C%2522version%2522%253A%252210%2522%257D%257D&amp;preferred_lang=en&amp;utm_source=&amp;utm_medium=&amp;gaCookie=&amp;gclid=&amp;clickid=&amp;msclkid=&amp;affilia'),
(12, 'WinToUsb', 'WinToUSB is a tool that allows the installation of a Windows operating system from a removable drive such as a pendrive or an external hard drive.With this program, any user can copy the ISO image of the original CD to the external drive to make it the installation source instead of using a physical disc.This program is a great way to keep the Windows installer on a USB so you can have it with you at all times, or run it from computers that no longer have the CD reader. You only have to copy it onto the removable drive and insert it into any computer.', 'WinToUSB is a tool that allows the installation of a Windows operating system from a removable drive such as a pendrive or an external hard drive.With this program, any user can copy the ISO image of the original CD to the external drive to make it the installation source instead of using a physical disc.This program is a great way to keep the Windows installer on a USB so you can have it with you at all times, or run it from computers that no longer have the CD reader. You only have to copy it onto the removable drive and insert it into any computer.', '5.60', 0.00, NULL, 'assets/uploads/pngaaa.com-7116352.png', '4.2', 'Hasleo Software', 'http://toolhubs.herokuapp.com/admin/edit-product.php?id=12'),
(13, 'Noxplayer', 'Nox App Player is a powerful Android emulator for Windows. Now your Windows PC can run any of the hundreds of apps originally created just for Android -- the most widely used smartphone operating system in the world.', 'Nox App Player is a powerful Android emulator for Windows. Now your Windows PC can run any of the hundreds of apps originally created just for Android -- the most widely used smartphone operating system in the world.', '503.00', 0.00, NULL, 'assets/uploads/download.jpg', '4.3', 'Bignox.com', 'http://toolhubs.herokuapp.com/admin/edit-product.php?id=13'),
(14, 'Steam For Windows', 'We have thousands of games from Action to Indie and everything in-between. Enjoy exclusive deals, automatic game updates and other great perks.Meet new people, join game groups, form clans, chat in-game and more! With over 100 million potential friends (or enemies), the fun never stops.', 'We have thousands of games from Action to Indie and everything in-between. Enjoy exclusive deals, automatic game updates and other great perks.Meet new people, join game groups, form clans, chat in-game and more! With over 100 million potential friends (or enemies), the fun never stops.', '1.70', 0.00, NULL, 'assets/uploads/pngaaa.com-5638806.png', '4.1', 'Value', 'http://toolhubs.herokuapp.com/admin/edit-product.php?id=14'),
(15, 'CandyCrushSaga', 'Start playing Candy Crush Saga today – a legendary puzzle game loved by millions of players around the world.Switch and match Candies in this tasty puzzle adventure to progress to the next level for that sweet winning feeling! Solve puzzles with quick thinking and smart moves, and be rewarded with delicious rainbow-colored cascades and tasty candy combos! Plan your moves by matching 3 or more candies in a row, using boosters wisely in order to overcome those extra sticky puzzles', 'Start playing Candy Crush Saga today – a legendary puzzle game loved by millions of players around the world.Switch and match Candies in this tasty puzzle adventure to progress to the next level for that sweet winning feeling! Solve puzzles with quick thinking and smart moves, and be rewarded with delicious rainbow-colored cascades and tasty candy combos! Plan your moves by matching 3 or more candies in a row, using boosters wisely in order to overcome those extra sticky puzzles', '90.40', 0.00, NULL, 'assets/uploads/saga.jpg', '4.2', 'King.com', 'http://toolhubs.herokuapp.com/admin/edit-product.php?id=15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(38) DEFAULT NULL,
  `email` varchar(38) NOT NULL,
  `password` text NOT NULL,
  `bod` date DEFAULT NULL,
  `mobile` bigint(15) NOT NULL,
  `state` text NOT NULL,
  `city` text NOT NULL,
  `area` text NOT NULL,
  `block` text NOT NULL,
  `st_no` text NOT NULL,
  `h_no` text NOT NULL,
  `landmark` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `bod`, `mobile`, `state`, `city`, `area`, `block`, `st_no`, `h_no`, `landmark`) VALUES
(7, 'mohit', 'mohit@amol.com', '$2y$10$esqGepqLde42f6sTf0TWh.Ug0sqXltQSgJetnRNP9ulSC5axiVH3C', '2022-04-07', 1112223333, 'punjab', 'ludhiana', 'mdel town', 'D', '2', '123', 'clock town'),
(8, 'test', 'test@gmail.com', '$2y$10$oy30xvGxAMEZXHody5Sns.Zf7xGK909Ds1iLJIJvu5P4efSYs2VEG', '2022-04-30', 987218988, 'leh', 'ladakh', 'meadow', '69', '102', '346', 'temple'),
(13, 'mayank', 'mayank@amol.com', '$2y$10$IgvruSjRLgI5kQ7cmckAZeDFTFOCURu5lT.0d7U5ItZWBo6z1kJjG', '2022-04-04', 1112223333, 'punjab', 'ludhiana', 'arya', 'IT', '1', 'lab3', 'Dandi swami'),
(14, 'john', 'john@amol.com', '$2y$10$ZIxG52wHX75vpFn/v8jQQ.VBhg0QC6RCXmXJ8Ll9YdReqdu.RG3eK', '2022-04-14', 4567891230, 'pun', 'liu', 'jk', '1', 'j', '23', 'shop'),
(15, 'YasirKhan', 'yasir@mail.com', '$2y$10$nY3uCqJAXHWFpWAmusp5I.dR8VsD3rLq8JVkuUo7XI16oQZsTkrbK', '2022-04-25', 9875526341, 'Punjab', 'Hoshiyar', 'Model Town, Kashor nagar', 'A', '238', '607-a', 'Near R.D. mall'),
(19, 'rahul', 'rahul@gmail.com', '$2y$10$9jFcdHg/YWhRAXa3iU.6ue8VNc4SHNY.cLP2Zw1rUSr6.So5Syqvi', '2019-06-18', 8565359874, 'punjab', 'ludhiana', 'civil lines', '12', '23', '145', 'near Arya College'),
(23, 'karan', 'karan@ncc.com', '$2y$10$1pDROpH8U6.nGEXemPhv0.bkil19qbwcw7n4piPb472my35dkXkbe', '2022-05-01', 7894651230, 'punjab', 'ludhiana', 'model tow', 'E', '342', '420', 'mitra da dabba'),
(24, 'admin', 'admin@gmail.com', '$2y$10$KPXanWGGDKqB/6e4cXe3DO6CAuuViZUnn76uSkEVmyUPVu446qiEm', '2001-03-12', 9872218344, 'Punjab', 'Ludhiana', 'Model town', 'D', '2', '857', 'Jain Mandir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_dist`
--
ALTER TABLE `auth_dist`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`,`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_dist`
--
ALTER TABLE `auth_dist`
  MODIFY `id` int(38) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
