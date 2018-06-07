SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
--
-- Database: `Lavanderia`
--
-- --------------------------------------------------------

CREATE TABLE `orders` (
  `id_order` int(11) PRIMARY KEY AUTO_INCREMENT,
  `name_clients` varchar(40) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `street` varchar(255) NOT NULL,
  `district` varchar(80) NOT NULL,
  `city` varchar(80) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `datei` date NOT NULL,
  `datef` date NOT NULL,
  `houri` time NOT NULL,
  `hourf` time NOT NULL,
  `item` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`name_clients`, `mail`, `tel`, `street`, `district`, `city`, `msg`, `datei`, `datef`, `houri`, `hourf`, `item`, `status`) VALUES
('Luiz Neves', 'mail@test.com', 089412561374994, '884 Ut, Street', 'Districy here', 'New York', 'Hello World', '2018-01-03', '2018-01-02', '05:38:51', '05:40:51', 'Package 1', '0');
