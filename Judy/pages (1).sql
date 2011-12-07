-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 07, 2011 at 09:02 AM
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
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `webpage` varchar(10000) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `username`, `webpage`) VALUES
(1, 'Exec', ''),
(2, 'LargeGroup', '<h1 style="text-align: left;">Large Group</h1>						<h2>Vision Statement</h2> 						<p>BLAH BLAH</p>						<h2>Meeting Times</h2> 						<p>Weekly large groups are held on Friday nights from 7:30 - 9:00 pm in Harvard Hall 104. Click here for directions.</p> 						<h2>This Week </h2> 						<p>BLAH BLAH</p> 						<h2>Contact Us</h2> 						<p>We''d love to hear from you!</p>						<p>Sharon Song ''12: sssong@fas.harvard.edu<br>Helen Jing ''12: hjing@fas.harvard.edu<br>Ted An ''12: tedan@fas.harvard.edu<br>Stephanie Choi ''13: schoi13@college.harvard.edu<br>Tim Kim ''13: timothykim@college.harvard.edu</p>'),
(3, 'FroshTeam', '<strong>Freshman Study:</strong><br><br>Frosh Study is co-ed and meets on Tuesday and Wednesday from 7-9 pm in Memorial Hall 302 (back of Annenburg and up the elevator). These meetings are one of the best ways to get plugged into the AACF community. Plus, Frosh Team plans some awesome events annually just for the frosh, such as apple-picking, karaoke, and outlet shopping in Wrentham!<br><br>Email froshteam@hraacf.org if you have any questions!'),
(4, 'SophStudy', '<strong>Sophomore Study:</strong><br><br>Soph Study is co-ed and meets on Tuesdays from 7-9 pm in the Mather Small Dining Alcove. Email sophteam@hraacf.org if you have any questions!'),
(5, 'JuniorStudy', '<strong>Junior Class Study:</strong><br><br>Junior Study is co-ed and meets on Thursday 7-9 in the SOCH. Email juniorteam@hraacf.org if you have any questions!'),
(6, 'SeniorStudy', '<font style="font-size: 18px; "><span style="font-size: 17px; "><font style="font-size: 18px; "><strong>Senior Study:<br></strong><font style="font-size: 13px; "><br>Senior Men''s Small Group meets Monday, 6:30 - 8pm in Dunster K-22.<br>Senior Ladies'' Small Group meets Tuesday 6:30 - 8:30pm in Cabot C-43.<br><br>Don''t forget about 2012 weekly lunches on Fridays from 12-1pm in Quincy Dining Hall!<br></font><br><br></font><br></span></font>'),
(7, 'Prayer', '<h1>Prayer Ministry</h1>						<h2>Vision Statement</h2> 						<p>Prayer ministry seeks to emphasize prayer as a central pillar of the fellowship. Its members aim to create and reinforce a culture of prayer within AACF by gathering the fellowship in weekly meetings for corporate prayer and by supporting its other ministries and members through intercession.</p>						<h2>Meeting Times</h2> 						<p>Weekly evening prayer meetings are held on Monday nights from 8:30 - 9:30 pm in the Wigglesworth D Music Room. Click here for directions.</p> 						<h2>Contact Us</h2> 						<p>We''d love to hear from you!</p>						<p>Matthew Tung ''12: mtung@fas.harvard.edu<br>Judy Park ''13: jpark@college.harvard.edu<br>Nathan Kim ''13: gwkim@college.harvard.edu<br>Jeremy Yang ''12: jdyang@fas.harvard.edu</p>'),
(8, 'Roots', '<strong>						Roots Ministry:</strong><br><br>Friday, 4:00 - 5:00 pm<br>Adams Coolidge Room<br>(entrance by H-entryway)<br><br>ROOTS sessions are open to anyone interested in spiritual leadership. We will be going over basic theology and how to articulate our Christian faith. The attendance of all AACF leaders is expected at ROOTS sessions.<br><br>Contact: joychoi@fas.harvard.edu'),
(9, 'PBJ', '<span style="font-size: 11px; line-height: normal; "><strong><font style="color: #00ff80; background-color: #ffffff; ">PBJ:&nbsp;</font></strong><br><br><span style="font-family: Verdana, sans-serif;">(Praise Band for Jesus), the praise band leads us in worship at large groups, meets weekly outside of large group for small group fellowship and sharing, and rehearses Friday afternoon in preparation for large group.</span><br><br><br><strong><font style="color: #ff007f; ">This Week''s Music:</font></strong><br><br><a href="http://www.youtube.com/watch?v=_dohj2QAdzs">Reign in Us</a><br><a href="http://www.youtube.com/watch?v=nmzygXtbSSI">Rejoice in the Lord</a></span>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
