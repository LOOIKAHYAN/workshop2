DROP TABLE admin;DROP TABLE feedback;DROP TABLE role;DROP TABLE localpeople;DROP TABLE logs;DROP TABLE passwordupdatelogs;

CREATE TABLE `localpeople` (
  `localpplid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` char(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneno` varchar(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`localpplid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO localpeople VALUES("1","Looi","Kah Yan","F","looikahyan0202@gmail.com","0169316170","localppl001","12345678");





CREATE TABLE `feedback` (
  `feedbackid` int(11) NOT NULL AUTO_INCREMENT,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `type` varchar(30) NOT NULL,
  `comments` varchar(150) DEFAULT NULL,
  `localpplid` int(11) DEFAULT NULL,
  PRIMARY KEY (`feedbackid`),
  KEY `localpplid` (`localpplid`),
  CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`localpplid`) REFERENCES `localpeople` (`localpplid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;





CREATE TABLE `role` (
  `roleid` int(11) NOT NULL,
  `rolename` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`roleid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO role VALUES("1","ADMIN","Personnel responsible for the management of feedback and complaint");
INSERT INTO role VALUES("2","KKM","Personnel responsible for the management of dengue cases and statistics");
INSERT INTO role VALUES("3","CPBV","Personnel responsible for taking the sample of dengue cases from particular location");





CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `adminname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `roleid` int(11) NOT NULL,
  PRIMARY KEY (`adminid`),
  KEY `roleid` (`roleid`),
  CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`roleid`) REFERENCES `role` (`roleid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO admin VALUES("1","admin001","12345678","1");
INSERT INTO admin VALUES("2","kkm001","12345678","2");
INSERT INTO admin VALUES("3","cpbv001","12345678","3");





CREATE TABLE `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `localpplid` int(11) DEFAULT NULL,
  `action` varchar(20) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO logs VALUES("1","1","Inserted","2023-06-22 06:15:39");





CREATE TABLE `passwordupdatelogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adminid` int(11) DEFAULT NULL,
  `oldpassword` varchar(30) DEFAULT NULL,
  `newpassword` varchar(30) DEFAULT NULL,
  `action` varchar(20) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;





CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `adminname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `roleid` int(11) NOT NULL,
  PRIMARY KEY (`adminid`),
  KEY `roleid` (`roleid`),
  CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`roleid`) REFERENCES `role` (`roleid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO admin VALUES("1","admin001","12345678","1");
INSERT INTO admin VALUES("2","kkm001","12345678","2");
INSERT INTO admin VALUES("3","cpbv001","12345678","3");





CREATE TABLE `feedback` (
  `feedbackid` int(11) NOT NULL AUTO_INCREMENT,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `type` varchar(30) NOT NULL,
  `comments` varchar(150) DEFAULT NULL,
  `localpplid` int(11) DEFAULT NULL,
  PRIMARY KEY (`feedbackid`),
  KEY `localpplid` (`localpplid`),
  CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`localpplid`) REFERENCES `localpeople` (`localpplid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;





CREATE TABLE `localpeople` (
  `localpplid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` char(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneno` varchar(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`localpplid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO localpeople VALUES("1","Looi","Kah Yan","F","looikahyan0202@gmail.com","0169316170","localppl001","12345678");





CREATE TABLE `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `localpplid` int(11) DEFAULT NULL,
  `action` varchar(20) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO logs VALUES("1","1","Inserted","2023-06-22 06:15:39");





CREATE TABLE `passwordupdatelogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adminid` int(11) DEFAULT NULL,
  `oldpassword` varchar(30) DEFAULT NULL,
  `newpassword` varchar(30) DEFAULT NULL,
  `action` varchar(20) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;





CREATE TABLE `role` (
  `roleid` int(11) NOT NULL,
  `rolename` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`roleid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO role VALUES("1","ADMIN","Personnel responsible for the management of feedback and complaint");
INSERT INTO role VALUES("2","KKM","Personnel responsible for the management of dengue cases and statistics");
INSERT INTO role VALUES("3","CPBV","Personnel responsible for taking the sample of dengue cases from particular location");



