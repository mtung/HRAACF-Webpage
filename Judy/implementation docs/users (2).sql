-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 07, 2011 at 09:01 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hraacf webpage`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `exec` int(1) NOT NULL,
  `ministry` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `approved` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `hash`, `exec`, `ministry`, `name`, `email`, `approved`) VALUES
(0, 'Guest', '', 0, 0, '', '', 0),
(1, 'Exec', '$1$If5.xF/.$mViNVoW2ktrCL2DbHBiRH/', 1, 1, 'Exec', 'exec@hraacf.org', 1),
(2, 'LargeGroup', '$1$If5.xF/.$mViNVoW2ktrCL2DbHBiRH/', 0, 2, 'Large Group', 'lg@hraacf.org', 1),
(3, 'FroshTeam', '$1$If5.xF/.$mViNVoW2ktrCL2DbHBiRH/', 0, 3, 'Freshman Study', 'froshteam@hraacf.org', 1),
(4, 'SophStudy', '$1$If5.xF/.$mViNVoW2ktrCL2DbHBiRH/', 0, 4, 'Sophomore Study', 'sophteam@hraacf.org', 1),
(5, 'JuniorStudy', '$1$If5.xF/.$mViNVoW2ktrCL2DbHBiRH/', 0, 5, 'Junior Study', 'juniorteam@hraacf.org', 1),
(6, 'SeniorStudy', '$1$If5.xF/.$mViNVoW2ktrCL2DbHBiRH/', 0, 6, 'Senior Study', 'tshen@fas.harvard.edu', 1),
(7, 'Prayer', '$1$SM3.zv5.$wJsSKseOf3rNlUHMGU7Ky.', 0, 7, 'Prayer Ministry', 'mtung@fas.harvard.edu', 1),
(8, 'Roots', '$1$If5.xF/.$mViNVoW2ktrCL2DbHBiRH/', 0, 8, 'Roots', 'roots@hraacf.org', 1),
(9, 'PBJ', '$1$If5.xF/.$mViNVoW2ktrCL2DbHBiRH/', 0, 9, 'PBJ', 'estherwu@college.harvard.edu', 1),
(20, 'mtung', '$1$iv5.Dy1.$dy9HmHOxFGkVSbIRcZWu7.', 0, 0, 'Matthew Tung', 'matthew.tung.1@gmail.com', 1),
(22, 'estherwu', '$1$gL/.pq4.$1VMS0WBTMHYmyhL2u7.oz1', 0, 0, 'Esther Wu', 'estherwu09@gmail.com', 1),
(23, 'jkoh', '$1$MH0.l.1.$QJ7raN67MDdWY7cOPA0MS1', 0, 0, 'Justin Koh', 'jkoh@fas.harvard.edu', 1),
(24, 'tedan', '$1$KA0.LG3.$Bj3IDCS8RCjF4U3r0PhQU/', 0, 0, 'Ted An', 'syphiroth@gmail.com', 1),
(32, 'john', '$1$NA/.Sz4.$Fu.SU2LIN07Ivv6/blQ.E1', 0, 0, 'John Smith', 'jsmith@fas.harvard.edu', 0),
(33, 'jsmith2', '$1$6O5.VU/.$eS7xhp9xlz7EfOLy3i/PL0', 0, 0, 'Jane Smith', 'jsmith@fas.harvard.edu', 0),
(34, 'jsmith3', '$1$4F..5M3.$VDS70bpbTVmwlK/stKcZP1', 0, 0, 'Jim Smith', 'jsmith3@fas.harvard.edu', 0),
(36, 'unregistered', '$1$oW2.Rn5.$8BVL7FfqF24IvtrzW6x681', 0, 0, 'The Guy', 'email@server.com', 0),
(40, 'jpark', '$1$JT2.ej0.$WLrQ.AACjMMGfWP12HA/g0', 0, 0, 'Judy Park', 'jpark@college.harvard.edu', 1),
(46, 'happyman', '$1$WH0.n/2.$0/uOQ8EUWS52hN7AjZa3b1', 0, 0, 'Happy Man', 'hman@fas.harvard.edu', 1),
(49, 'jyang', '$1$Ad5.Je4.$D6HSV6sWQ18s9lXcHUGtg1', 0, 0, 'Jeremy Yang', 'jesusfreak@gmail.com', 0),
(50, 'alin', '$1$sK4.Fy..$AaAmwna.u.8/ALB3bzvEN/', 0, 0, 'Andrew Lin', 'alin@fas.harvard.edu', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
