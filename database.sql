-- Base de donnees pour lapp web managol

-- creation de la bdd
CREATE DATABASE managol_db;

-- creation de la table des utilisateurs
CREATE TABLE users(
    user_id int(10) PRIMARY KEY,
    user_name varchar(60),
    email varchar(20),
    password varchar(60),
    role varchar(20)
);

-- creation de la table des exams
CREATE TABLE `managol_db`.`exam` ( `exam_id` INT(10) NOT NULL AUTO_INCREMENT , 
	`date` DATE NOT NULL , 
	`name` VARCHAR(60) NOT NULL , 
	`number` INT(11) NOT NULL , 
	PRIMARY KEY (`exam_id`)
	) ENGINE = InnoDB;

 -- creation de la table eleve
 CREATE TABLE `managol_db`.`student` ( `student_id` INT NOT NULL AUTO_INCREMENT , 
 	`firstname` VARCHAR(60) NOT NULL , 
 	`lastname` VARCHAR(60) NOT NULL , 
 	`email` VARCHAR(60) NOT NULL , 
 	`password` VARCHAR(60) NOT NULL , 
 	`dob` DATE NOT NULL ,
 	`sex` VARCHAR(10) NOT NULL , 
 	`address` VARCHAR(60) NOT NULL , 
 	`phone` VARCHAR(60) NOT NULL ,
 	 `date_of_join` DATE NOT NULL ,
 	  `parent_name` VARCHAR(60) NOT NULL ,
 	   `photo` DATE NOT NULL ,
 	    `scolarite` VARCHAR(250) NOT NULL , 
 	    PRIMARY KEY (`student_id`)
 	    ) ENGINE = InnoDB;


 -- creation de la table professeur
 CREATE TABLE `managol_db`.`teacher` ( `teacher_id` INT NOT NULL AUTO_INCREMENT , 
 	`email` VARCHAR(255) NOT NULL ,
 	 `password` VARCHAR(255) NOT NULL , 
 	 `name` VARCHAR(255) NOT NULL , 
 	 `dob` DATE NOT NULL , 
 	 `sex` VARCHAR(20) NOT NULL ,
 	  `address` VARCHAR(255) NOT NULL ,
 	   `phone` VARCHAR(255) NOT NULL , 
 	   `course` VARCHAR(255) NOT NULL , 
 	   PRIMARY KEY (`teacher_id`)
 	   ) ENGINE = InnoDB;

 -- creation de la table course
 CREATE TABLE `managol_db`.`courses` ( `course_id` INT NOT NULL AUTO_INCREMENT , 
 	`name` VARCHAR(255) NOT NULL , 
 	`grade` VARCHAR(255) NOT NULL , 
 	`fee` VARCHAR(255) NOT NULL , 
 	`date` DATE NOT NULL , 
 	`hour` VARCHAR(255) NOT NULL , 
 	`description` VARCHAR(255) NOT NULL , PRIMARY KEY (`course_id`))
 	 ENGINE = InnoDB;


 	-- creation de la table class
 	CREATE TABLE `managol_db`.`classe` ( `classe_id` INT NOT NULL AUTO_INCREMENT , 
 		`section` VARCHAR(255) NOT NULL , 
 		`total` INT(20) NOT NULL , 
 		`teacher_id` INT NOT NULL , PRIMARY KEY (`classe_id`))
 		 ENGINE = InnoDB;

 		 -- creation de la table timetable
 		 CREATE TABLE `managol_db`.`timetable` ( `tt_id` INT NOT NULL AUTO_INCREMENT , 
 		 	`day` VARCHAR(255) NOT NULL , 
 		 	`time` VARCHAR(255) NOT NULL , 
 		 	`subject` VARCHAR(255) NOT NULL , 
 		 	`teacher` VARCHAR(255) NOT NULL , 
 		 	PRIMARY KEY (`tt_id`)) 
 		 ENGINE = InnoDB;

 		 -- creation de la table fee
 		 CREATE TABLE `managol_db`.`fee` ( `fee_id` INT NOT NULL AUTO_INCREMENT , `amount` VARCHAR(255) NOT NULL ,
 		  `classe` VARCHAR(255) NOT NULL ,
 		   `year` VARCHAR(255) NOT NULL , 
 		   PRIMARY KEY (`fee_id`))
 		    ENGINE = InnoDB;

 		    -- creation de la table gallery
 		    CREATE TABLE `managol_db`.`gallery` ( `gal_id` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(255) NOT NULL , 
 		    	`image` VARCHAR(255) NOT NULL , 
 		    	`date` DATE NOT NULL , 
 		    	`description` VARCHAR(255) NOT NULL ,
 		    	 PRIMARY KEY (`gal_id`))
 		    	  ENGINE = InnoDB;


 		    	  -- creation de la note
 		    	  CREATE TABLE `managol_db`.`mark` ( `mark_id` INT NOT NULL AUTO_INCREMENT ,
 		    	   `subject` VARCHAR(255) NOT NULL ,
 		    	    `mark` VARCHAR(255) NOT NULL , 
 		    	    `date` DATE NOT NULL , 
 		    	    `description` VARCHAR(255) NOT NULL , 
 		    	    PRIMARY KEY (`mark_id`)) 
 		    	  ENGINE = InnoDB;
