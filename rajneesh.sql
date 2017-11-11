-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2017 at 02:13 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rajneesh`
--

-- --------------------------------------------------------

--
-- Table structure for table `repositories`
--

CREATE TABLE `repositories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `git_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `repositories`
--

INSERT INTO `repositories` (`id`, `name`, `full_name`, `size`, `updated_at`, `git_url`) VALUES
(1, 'behat-webapi-demo', 'KnpLabs/behat-webapi-demo', 99, '2017-01-01', 'git://github.com/KnpLabs/behat-webapi-demo.git'),
(2, 'chips.js', 'KnpLabs/chips.js', 2903, '2017-09-22', 'git://github.com/KnpLabs/chips.js.git'),
(3, 'Ciboulette', 'KnpLabs/Ciboulette', 95, '2016-07-29', 'git://github.com/KnpLabs/Ciboulette.git'),
(4, 'ConsoleServiceProvider', 'KnpLabs/ConsoleServiceProvider', 40, '2017-10-10', 'git://github.com/KnpLabs/ConsoleServiceProvider.git'),
(5, 'ControllerBehaviors', 'KnpLabs/ControllerBehaviors', 263, '2016-04-01', 'git://github.com/KnpLabs/ControllerBehaviors.git'),
(6, 'DictionaryBundle', 'KnpLabs/DictionaryBundle', 162, '2017-10-05', 'git://github.com/KnpLabs/DictionaryBundle.git'),
(7, 'dmFloodControlPlugin', 'KnpLabs/dmFloodControlPlugin', 100, '2015-09-17', 'git://github.com/KnpLabs/dmFloodControlPlugin.git'),
(8, 'dmRatablePlugin', 'KnpLabs/dmRatablePlugin', 120, '2015-09-17', 'git://github.com/KnpLabs/dmRatablePlugin.git'),
(9, 'DoctrineBehaviors', 'KnpLabs/DoctrineBehaviors', 584, '2017-11-03', 'git://github.com/KnpLabs/DoctrineBehaviors.git'),
(10, 'fixtures', 'KnpLabs/fixtures', 167, '2015-07-08', 'git://github.com/KnpLabs/fixtures.git'),
(11, 'FriendlyContexts', 'KnpLabs/FriendlyContexts', 726, '2017-11-10', 'git://github.com/KnpLabs/FriendlyContexts.git'),
(12, 'Gaufrette', 'KnpLabs/Gaufrette', 1931, '2017-11-09', 'git://github.com/KnpLabs/Gaufrette.git'),
(13, 'geekweek12', 'KnpLabs/geekweek12', 2217, '2016-09-14', 'git://github.com/KnpLabs/geekweek12.git'),
(14, 'gitbot', 'KnpLabs/gitbot', 27, '2017-09-22', 'git://github.com/KnpLabs/gitbot.git'),
(15, 'hubot-scripts', 'KnpLabs/hubot-scripts', 152, '2013-01-04', 'git://github.com/KnpLabs/hubot-scripts.git'),
(16, 'jenkins-commentator', 'KnpLabs/jenkins-commentator', 102, '2013-10-23', 'git://github.com/KnpLabs/jenkins-commentator.git'),
(17, 'knoodle-react', 'KnpLabs/knoodle-react', 1122, '2017-05-29', 'git://github.com/KnpLabs/knoodle-react.git'),
(18, 'knoodle-react-api', 'KnpLabs/knoodle-react-api', 8, '2016-06-28', 'git://github.com/KnpLabs/knoodle-react-api.git'),
(19, 'knoodle-rest-api', 'KnpLabs/knoodle-rest-api', 18, '2017-05-24', 'git://github.com/KnpLabs/knoodle-rest-api.git'),
(20, 'knp-components', 'KnpLabs/knp-components', 348, '2017-11-02', 'git://github.com/KnpLabs/knp-components.git'),
(21, 'KnpBundles', 'KnpLabs/KnpBundles', 5708, '2017-11-10', 'git://github.com/KnpLabs/KnpBundles.git'),
(22, 'KnpConsoleAutocompleteBundle', 'KnpLabs/KnpConsoleAutocompleteBundle', 123, '2017-02-08', 'git://github.com/KnpLabs/KnpConsoleAutocompleteBundle.git'),
(23, 'knpDeployPlugin', 'KnpLabs/knpDeployPlugin', 104, '2015-05-21', 'git://github.com/KnpLabs/knpDeployPlugin.git'),
(24, 'KnpDisqusBundle', 'KnpLabs/KnpDisqusBundle', 88, '2017-09-14', 'git://github.com/KnpLabs/KnpDisqusBundle.git'),
(25, 'knpDmRackspacePlugin', 'KnpLabs/knpDmRackspacePlugin', 96, '2015-05-21', 'git://github.com/KnpLabs/knpDmRackspacePlugin.git'),
(26, 'knpDoctrineVersionPlugin', 'KnpLabs/knpDoctrineVersionPlugin', 96, '2015-09-17', 'git://github.com/KnpLabs/knpDoctrineVersionPlugin.git'),
(27, 'KnpGaufretteBundle', 'KnpLabs/KnpGaufretteBundle', 154, '2017-10-20', 'git://github.com/KnpLabs/KnpGaufretteBundle.git'),
(28, 'KnpInvoice', 'KnpLabs/KnpInvoice', 211, '2016-11-04', 'git://github.com/KnpLabs/KnpInvoice.git'),
(29, 'KnpInvoiceBundle', 'KnpLabs/KnpInvoiceBundle', 93, '2016-04-18', 'git://github.com/KnpLabs/KnpInvoiceBundle.git'),
(30, 'KnpIpsum', 'KnpLabs/KnpIpsum', 759, '2017-10-30', 'git://github.com/KnpLabs/KnpIpsum.git');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`) VALUES
(1, 'Rajneesh', 'abcd', 'rajneeshabcd'),
(2, 'pratik', 'wxyz', 'pratikwxyz'),
(3, 'justaname', 'justalastname', 'justausername'),
(4, 'endfirstname', 'endlastname', 'endusername'),
(5, 'Bhuvnesh', 'kumar', 'bhuvneshkumar'),
(6, 'Hemant', 'Solanki', 'hemsol'),
(7, 'Jasprit', 'Tank', 'jastank'),
(8, 'Suresh', 'kumar', 'sureshkumar'),
(9, 'Pushpinder', 'Donga', 'pushpinderdonga'),
(10, 'Chris', 'Adams', 'chrisadams');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `repositories`
--
ALTER TABLE `repositories`
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
-- AUTO_INCREMENT for table `repositories`
--
ALTER TABLE `repositories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
