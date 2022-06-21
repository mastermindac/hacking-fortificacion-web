CREATE DATABASE IF NOT EXISTS `tutorial` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tutorial`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `username`, `name`, `password`) VALUES
(1, 'paco', 'Paco', '1234');