-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 10:57 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toolhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_dist`
--

CREATE TABLE `auth_dist` (
  `id` int(38) NOT NULL,
  `user_id` int(38) NOT NULL,
  `product_id` int(38) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth_dist`
--

INSERT INTO `auth_dist` (`id`, `user_id`, `product_id`, `created_at`) VALUES
(2, 1, 1, '0000-00-00 00:00:00'),
(3, 1, 0, '2022-05-12 02:57:02'),
(5, 1, 100, '2022-05-12 03:33:31'),
(6, 19, 2, '2022-05-12 03:53:51'),
(7, 23, 4, '2022-05-12 04:18:32'),
(8, 13, 2, '2022-05-12 09:28:02'),
(10, 8, 5, '2022-05-14 11:32:55'),
(11, 24, 5, '2022-05-26 09:23:14');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `short_note` text DEFAULT NULL,
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
(1, 'Sublime Text', 'Sublime Text is a commercial source code editor. It natively supports many programming languages and markup languages. Users can expand its functionality with plugins, typically community-built and maintained under free-software licenses.', 'Sublime Text is a sophisticated text editor for code, markup and prose', '18.26', 0.00, 'IDE', 'assets/svg/sublime-text.svg', '4.6', 'Sublime HQ', ''),
(2, 'MS Excel', 'Microsoft Excel is a spreadsheet developed by Microsoft for Windows, macOS, Android and iOS. It features calculation or computation capabilities, graphing tools, pivot tables, and a macro programming language called Visual Basic for Applications.', 'Microsoft Excel is the industry leading spreadsheet software program, a powerful data visualization and analysis tool.', '726.00', 5299.00, 'spreadsheet package', 'assets/svg/excel.svg', '4.7', 'Microsoft Corporation', ''),
(3, 'XAMPP', 'XAMPP is a free and open-source cross-platform web server solution stack package developed by Apache Friends, consisting mainly of the Apache HTTP Server, MariaDB database, and interpreters for scripts written in the PHP and Perl programming languages.', 'XAMPP is a completely free, easy to install Apache distribution containing MariaDB, PHP, and Perl.', '164.00', 0.00, 'server', 'assets/svg/xampp.svg', '4.6', 'Apache Friends', ''),
(4, 'Adobe Photoshop', 'Adobe Photoshop is a raster graphics editor developed and published by Adobe Inc. for Windows and macOS. It was originally created in 1988 by Thomas and John Knoll. Since then, the software has become the industry standard not only in raster graphics editing, but in digital art as a whole.', 'Create Beautiful Images, Graphics, Paintings, And 3D Artwork On Your Desktop And iPad. If You Can Dream It', '1260.00', 19158.95, 'designing software', 'assets/svg/photoshop.svg', '4.1', 'Adobe Systems Incorporated', ''),
(5, 'Microsoft Office', 'What is MS Office and its uses? Microsoft Office is a suite of applications designed to help with productivity and completing common tasks on a computer. You can create and edit documents containing text and images work with data in spreadsheets and databases and create presentations and posters.', 'Collaborate for free with online versions of Microsoft Word, PowerPoint, Excel, and OneNote. Save documents, workbooks, and presentations online', '1894.40', 4899.00, '', 'assets/svg/office-365.svg', '4.4', 'Microsoft Corporation', 'https://51-75-145-213.xyz/Getintopc.com/Office_Pro_Plus_2021_v2109_Build_14430.20276.rar?md5=jfUjuCXsiztV1vsjnrbzEg&expires=1652075302'),
(6, 'AnyDesk', 'AnyDesk is a closed source remote desktop application distributed by AnyDesk Software GmbH. The proprietary software program provides platform independent remote access to personal computers and other devices running the host application', 'Access any device at any time. From anywhere. Always secure and fast', '3.65', 0.00, 'Remote Control', 'assets/svg/anydesk.svg', '4.5', 'ANYDESK SOFTWARE GMBH', 'https://dw.uptodown.com/dwn/6OyDApr17aLf_gDTdBElzwQjfCznpw52xowqISuW1U_gCouU4MU3iH84eb0EHBhAWHjiUhRJ9d7xBsrlFxMV4st45BaLnr4I9cctjLTZhzSEQcDdgqYIKCbWs5P_dz7P/1GdX-u3PqQ2IHkzmu_EQ9I7OABwZtIhV431s91Npcvjo2u45XqBfc4tCxlKqQIF7p5YT-Uk109S-DvkGoGBflIQX7FQ7yiiI9gcgYbaIpDV9QQxM2qwBE3KvQLfYawhF/E_ttx-NAq-EYV-J6p1YKVGY-xB3eG4lGh3wMFbREIC15Jdk3khNOtMghnJy_oAYc/'),
(7, 'WhatsApp Desktop', 'With WhatsApp on the desktop, you can seamlessly sync all of your chats to your computer so that you can chat on whatever device is most convenient to you.', 'With WhatsApp on the desktop, you can seamlessly sync all of your chats to your computer so that you can chat on whatever device is most convenient to you.', '403.08', 0.00, 'social', 'assets/svg/whatsapp.svg', '3.8', 'WhatsApp Inc.', 'https://web.whatsapp.com/desktop/windows/release/x64/WhatsAppSetup.exe'),
(8, 'sketch', 'a', 'a', '100.00', 0.00, '1', 'assets/sketch.jfif', '0.0', '', ''),
(9, 'amol', 'amol', 'amol', '100.00', 0.00, NULL, 'assets/uploads/ae.png', '4.5', 'gjod', 'http://amol.com'),
(10, 'test', 'amol', 'human', '100.00', 0.00, NULL, 'assets/uploads/CDE.png', '4.5', 'god', 'http://amol.com'),
(11, 'Bluestack', 'BlueStacks is an American technology company known for the BlueStacks App Player and other cloud-based cross-platform products. The BlueStacks App Player allows Android applications to run on PCs running Microsoft Windows and macOS.', 'BlueStacks is an American technology company known for the BlueStacks App Player and other cloud-based cross-platform products. The BlueStacks App Player allows Android applications to run on PCs running Microsoft Windows and macOS.', '1638.40', 0.00, NULL, 'assets/uploads/flow chat.png', '4.3', 'BlueStacks', 'https://cloud.bluestacks.com/api/getdownloadnow?platform=win&amp;win_version=10&amp;mac_version=&amp;client_uuid=280e0fed-cf83-42d6-b453-bd2e4b31eeee&amp;app_pkg=&amp;platform_cloud=%257B%2522description%2522%253A%2522Chrome%2520101.0.4951.67%2520on%2520Windows%252010%252064-bit%2522%252C%2522layout%2522%253A%2522Blink%2522%252C%2522manufacturer%2522%253Anull%252C%2522name%2522%253A%2522Chrome%2522%252C%2522prerelease%2522%253Anull%252C%2522product%2522%253Anull%252C%2522ua%2522%253A%2522Mozilla%252F5.0%2520(Windows%2520NT%252010.0%253B%2520Win64%253B%2520x64)%2520AppleWebKit%252F537.36%2520(KHTML%252C%2520like%2520Gecko)%2520Chrome%252F101.0.4951.67%2520Safari%252F537.36%2522%252C%2522version%2522%253A%2522101.0.4951.67%2522%252C%2522os%2522%253A%257B%2522architecture%2522%253A64%252C%2522family%2522%253A%2522Windows%2522%252C%2522version%2522%253A%252210%2522%257D%257D&amp;preferred_lang=en&amp;utm_source=&amp;utm_medium=&amp;gaCookie=&amp;gclid=&amp;clickid=&amp;msclkid=&amp;affilia'),
(12, 'WinToUsb', 'WinToUSB is a tool that allows the installation of a Windows operating system from a removable drive such as a pendrive or an external hard drive.With this program, any user can copy the ISO image of the original CD to the external drive to make it the installation source instead of using a physical disc.This program is a great way to keep the Windows installer on a USB so you can have it with you at all times, or run it from computers that no longer have the CD reader. You only have to copy it onto the removable drive and insert it into any computer.', 'WinToUSB is a tool that allows the installation of a Windows operating system from a removable drive such as a pendrive or an external hard drive.With this program, any user can copy the ISO image of the original CD to the external drive to make it the installation source instead of using a physical disc.This program is a great way to keep the Windows installer on a USB so you can have it with you at all times, or run it from computers that no longer have the CD reader. You only have to copy it onto the removable drive and insert it into any computer.', '5.60', 0.00, NULL, 'assets/uploads/cb317060-2112-46cf-a2fe-e8d04316c923.tmp', '4.2', 'Hasleo Software', 'https://dw.uptodown.com/dwn/Iwj0kjGMIfgqH5nnDIDF_X8kssA2eIdBaK9TIvWGQ1TSE7ddOVoTll8RCvjSpda7KsSRbesuUvZwIVtS-b3PSQVkWry1il4l4W5VFRJza82UO7mxwVTXGB5Z0KAXyan3/a7Ruoc_YnJQGSOwLKDezcMLqRNTx-pz6GUbCyKFvSpegWOkSrrVbayGsOhF0ZymyJwAtyjflsT44AQoEFFbYM20TXiULZ3Dau8wbEv0cKU6qlveRDnuEToGQPynl6Hdb/jmfjm1WKH6z_iVFkS8yGp49VbhQIHmBWIyamNg_zAGLpa5r9pVu_g7zUG1ja9TwI/'),
(13, 'Noxplayer', 'Nox App Player is a powerful Android emulator for Windows. Now your Windows PC can run any of the hundreds of apps originally created just for Android -- the most widely used smartphone operating system in the world.', 'Nox App Player is a powerful Android emulator for Windows. Now your Windows PC can run any of the hundreds of apps originally created just for Android -- the most widely used smartphone operating system in the world.', '503.00', 0.00, NULL, 'assets/uploads/download.jpg', '4.3', 'Bignox.com', 'https://dw.uptodown.com/dwn/Iwj0kjGMIfgqH5nnDIDF_X8kssA2eIdBaK9TIvWGQ1TPqEZATFLVkphRYUwpZ6fgP51ziZMTAjb3qliNsDgds7Zidt7vZyIUUEcUwRcbsO4ghuInU19G5LeOe_BDDWAK/84NJ4c_f97D0nVqCfXAE1XCp7OZ_IWyePjMNGC15cdLaNSuREZbVZHToHlMD9S9z5va-QUz8q3d4LrpvRjGlawIY4wwfMHE43T8yQrLgzssj5RKAOZ-kLKzxSIzszXOq/hgzEKy-BjSdWPQh86j77vJvL2sxW8TOYw61ySAeRFCujZQG8MHejSBvbzorcX7z0zYxmLuZl5mLOUQ8P0HIlSg==/'),
(14, 'SteamForWindows', 'We have thousands of games from Action to Indie and everything in-between. Enjoy exclusive deals, automatic game updates and other great perks.Meet new people, join game groups, form clans, chat in-game and more! With over 100 million potential friends (or enemies), the fun never stops.', 'We have thousands of games from Action to Indie and everything in-between. Enjoy exclusive deals, automatic game updates and other great perks.Meet new people, join game groups, form clans, chat in-game and more! With over 100 million potential friends (or enemies), the fun never stops.', '1.70', 0.00, NULL, 'assets/uploads/16120661.webp', '4.1', 'Value', 'https://files01.tchspt.com/temp/SteamSetup.exe'),
(15, 'CandyCrushSaga', 'Start playing Candy Crush Saga today – a legendary puzzle game loved by millions of players around the world.Switch and match Candies in this tasty puzzle adventure to progress to the next level for that sweet winning feeling! Solve puzzles with quick thinking and smart moves, and be rewarded with delicious rainbow-colored cascades and tasty candy combos! Plan your moves by matching 3 or more candies in a row, using boosters wisely in order to overcome those extra sticky puzzles', 'Start playing Candy Crush Saga today – a legendary puzzle game loved by millions of players around the world.Switch and match Candies in this tasty puzzle adventure to progress to the next level for that sweet winning feeling! Solve puzzles with quick thinking and smart moves, and be rewarded with delicious rainbow-colored cascades and tasty candy combos! Plan your moves by matching 3 or more candies in a row, using boosters wisely in order to overcome those extra sticky puzzles', '90.40', 0.00, NULL, 'assets/uploads/12c9dc1a120e03c8397edc55a95dafada5797e762d4a47dd7514c71803ffdb0c_200.webp', '4.2', 'King.com', 'https://dw.uptodown.com/dwn/Iwj0kjGMIfgqH5nnDIDF_X8kssA2eIdBaK9TIvWGQ1S2kjROGryCjiI2YROE_ZR2G4rSK83KNsJMCm84XfOB0ykK5w5FzWsJav0oyT6EI6KWAEgd_pMDakyL83d92Eyv/PTFFdBPhB-M61hX1lRcBQ_8_ra3S03ayjVvPzib9e6UZTCJb5J6Impjo26r4TZgHsA9FmsT8h_sb6ccg__FOPX6OdChU2FExNQtWCY0wPuRCBtO8XJ-4nyagI6TF1Y29/x36b2_LqoAsqiMOcAhNO-kXTQn2FovHwQiWr4hjWqDA6Que5kl1pwzeqzlBnNNqGMXcsamwcSQJp1DPagOzpN3Lyg7fpcv1sOSbUbqCm9hg=/');

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
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `bod`, `mobile`, `state`, `city`, `area`, `block`, `st_no`, `h_no`, `landmark`, `created_at`) VALUES
(7, 'mohit', 'mohit@amol.com', '$2y$10$esqGepqLde42f6sTf0TWh.Ug0sqXltQSgJetnRNP9ulSC5axiVH3C', '2022-04-07', 1112223333, 'punjab', 'ludhiana', 'mdel town', 'D', '2', '123', 'clock town', '2022-04-07 01:23:16'),
(8, 'test', 'test@gmail.com', '$2y$10$oy30xvGxAMEZXHody5Sns.Zf7xGK909Ds1iLJIJvu5P4efSYs2VEG', '2022-04-30', 987218988, 'leh', 'ladakh', 'meadow', '67', '102', '346', 'temple', '2022-04-07 01:35:56'),
(13, 'mayank', 'mayank@amol.com', '$2y$10$IgvruSjRLgI5kQ7cmckAZeDFTFOCURu5lT.0d7U5ItZWBo6z1kJjG', '2022-04-04', 1112223333, 'punjab', 'ludhiana', 'arya', 'IT', '1', 'lab3', 'Dandi swami', '2022-04-09 00:12:17'),
(14, 'john', 'john@amol.com', '$2y$10$ZIxG52wHX75vpFn/v8jQQ.VBhg0QC6RCXmXJ8Ll9YdReqdu.RG3eK', '2022-04-14', 4567891230, 'pun', 'liu', 'jk', '1', 'j', '23', 'shop', '2022-04-14 11:29:07'),
(15, 'YasirKhan', 'yasir@mail.com', '$2y$10$nY3uCqJAXHWFpWAmusp5I.dR8VsD3rLq8JVkuUo7XI16oQZsTkrbK', '2022-04-25', 9875526341, 'Punjab', 'Hoshiyar', 'Model Town, Kashor nagar', 'A', '238', '607-a', 'Near R.D. mall', '2022-04-25 23:59:24'),
(19, 'rahul', 'rahul@gmail.com', '$2y$10$9jFcdHg/YWhRAXa3iU.6ue8VNc4SHNY.cLP2Zw1rUSr6.So5Syqvi', '2019-06-18', 8565359874, 'punjab', 'ludhiana', 'civil lines', '12', '23', '145', 'near Arya College', '2022-04-26 00:44:10'),
(23, 'karan', 'karan@ncc.com', '$2y$10$YkozzQQZcSSMIuSkqXYn3e9okhyd1YTaOEcYH8j9/j9tQAVwg12NW', '2022-05-01', 7894651230, 'punjab', 'ludhiana', 'model tow', 'E', '342', '420', 'mitra da dabba', '2022-05-01 15:54:34'),
(24, 'admin', 'admin@gmail.com', '$2y$10$KPXanWGGDKqB/6e4cXe3DO6CAuuViZUnn76uSkEVmyUPVu446qiEm', '2001-03-12', 9872218344, 'Punjab', 'Ludhiana', 'Model town', 'D', '2', '857', 'Jain Mandir', '2022-05-25 13:58:54');

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
  MODIFY `id` int(38) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
