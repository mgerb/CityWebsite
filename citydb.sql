-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2015 at 06:07 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `citydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE IF NOT EXISTS `announcements` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `announcement` varchar(5000) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`row_id`, `title`, `announcement`, `date`) VALUES
(6, 'Announcement 2', 'The Grand Meadow City Council and the water/sewer department would like to remind you DO NOT put rags and or clothing in the sewer system. This has been an ongoing issue in the city and as of the last 2 months has been extremely costly to the city. The pump in the Pheasant Run area has needed work done 3 times in the last 2 months, and if this persists the cost could be accessed to the residents. This reminder is for all Grand Meadow residents regardless of location.', '2015-04-26'),
(7, 'Announcement 3', 'The City of Grand Meadow is asking itâ€™s water customers to monitor the temperature of their water and to continue to monitor the temperature through March. The reason for this is that the frost level in the ground is at a depth not seen in the last 20 to 30 years. To test, run your cold water line from a faucet for 5 minutes then check the temperature of the water. If the water temperature gets below 40 degrees Fahrenheit, you should start running a pencil-width stream of water from the faucet. \r\nAfter you start running the water please contact City Hall so that the city can monitor the issue city wide.', '2015-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE IF NOT EXISTS `credentials` (
  `row_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`row_id`, `username`, `password`) VALUES
(1, 'username', 'password');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
