

-- Register User

CREATE TABLE IF NOT EXISTS `user_iformation` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `userName` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(55) NOT NULL,
  `gender` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- Administartors

CREATE TABLE IF NOT EXISTS `admin_information` (  
  `username` varchar(200) NOT NULL,  
  `password` varchar(200) NOT NULL,  
  PRIMARY KEY (`username`)  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `feedback` (  
  `username` varchar(200) NOT NULL,  
  `student_feedback` varchar(500) NOT NULL
) ;


CREATE TABLE IF NOT EXISTS `complaints` (  
  `username` varchar(200) NOT NULL,  
  `student_complaint` varchar(500) NOT NULL
   
) ;

