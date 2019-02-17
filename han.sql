

DROP TABLE IF EXISTS `comenzi`;
CREATE TABLE `comenzi` (
  `nume` varchar(50) NOT NULL DEFAULT '',
  `telefon` varchar(15) NOT NULL DEFAULT '0',
  `adresa` varchar(50) NOT NULL DEFAULT '',
  `meniu` varchar(30) NOT NULL,
  PRIMARY KEY (`telefon`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `comenzi` VALUES ('Irimie Daniel','0258979797','Bd Ferdinand','50, 60');



DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE `newsletter` (
  `email` varchar(30) NOT NULL,
  `telefon` varchar(15) NOT NULL DEFAULT '0',
  PRIMARY KEY (`telefon`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `newsletter` VALUES ('test@email.com','0258979797');



DROP TABLE IF EXISTS `rezervari`;
CREATE TABLE `rezervari` (
  `nume` varchar(50) NOT NULL DEFAULT '',
  `telefon` varchar(15) NOT NULL DEFAULT '0',
  `data` varchar(10) NOT NULL DEFAULT '0000-00-00',
  `ora` time NOT NULL,
  `email` varchar(50) DEFAULT '',
  `pers` int(1) DEFAULT NULL,
  PRIMARY KEY (`telefon`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `rezervari` VALUES ('Irimie Daniel','0258979797','09/10/2018','20:30:00','test@email.com',10);
