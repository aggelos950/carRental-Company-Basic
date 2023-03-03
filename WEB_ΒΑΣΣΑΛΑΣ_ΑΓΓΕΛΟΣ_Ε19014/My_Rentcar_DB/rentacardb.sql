-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: localhost
-- Χρόνος δημιουργίας: 23 Ιουν 2022 στις 12:15:19
-- Έκδοση διακομιστή: 10.4.21-MariaDB
-- Έκδοση PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `rentacardb`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `clients`
--

CREATE TABLE `clients` (
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `clients`
--

INSERT INTO `clients` (`username`, `name`, `email`) VALUES
('dodger', 'ereherhe', 'ehrere'),
('dreary', 'ryrryr', 'fyfd'),
('erger', 'egre', 'rge'),
('rgt5et', '5y55', '5y5'),
('qw', 'eqw', 'ewweewqwe');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `messages`
--

CREATE TABLE `messages` (
  `name` varchar(50) NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `messages`
--

INSERT INTO `messages` (`name`, `phone_number`, `email`, `subject`, `message`) VALUES
('trh', 'rrht', 'thrhr', 'rat', 'rthrhrhr'),
('rerger', 'erhrte', 'ergrt', 'ergrt', 'ehrthrth'),
('rerger', 'erhrte', 'ergrt', 'ergrt', 'ehrthrth'),
('rerger', 'erhrte', 'ergrt', 'ergrt', 'ehrthrth'),
('3erfw', 'w4te4t', '4te45te', '4te4t', '4t4t4t4te4');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
