/*
 * config/full_calendar.sql
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_type_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `all_day` tinyint(1) NOT NULL DEFAULT '1',
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Scheduled',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;


CREATE TABLE events (
	id INT PRIMARY KEY auto_increment, 
	event_type_id INT, INDEC(event_type_id), 
	title VARCHAR(255), 
	details TEXT, 
	course_id INT, INDEX(course_id), 
	user_id INT, INDEX(user_id),
	`start` DATETIME, /* alkaa */ 
	`end` DATETIME,  /* päättyy */
	all_day TINYINT(1) DEFAULT 1, 
	active TINYINT(1) DEFAULT 1,
	crated DATETIME, 
	modified DATETIME, 
	FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE, 
	FOREIGN KEY (course_id) REFERENCES courses(id) ON DELETE CASCADE, 
	FOREIGN KEY (event_type_id) REFERENCES event_types(id) ON DELETE CASCADE
) ENGINE=INNODB;


-- --------------------------------------------------------

--
-- Table structure for table `event_types`
--

CREATE TABLE IF NOT EXISTS `event_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`), 
	
) ENGINE=INNODB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;
