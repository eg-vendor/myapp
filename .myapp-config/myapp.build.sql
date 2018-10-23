-- Adminer 4.6.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE TABLE `myapp_user` (
  `user_Email` varchar(254) CHARACTER SET ascii NOT NULL,
  `user_Display_Name` varchar(64) NOT NULL,
  PRIMARY KEY (`user_Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `myapp_user` (`user_Email`, `user_Display_Name`) VALUES
('testuser@no.where',	'Mel & Sue');

-- 2018-09-11 10:12:55
