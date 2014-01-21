SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(25) NOT NULL,
  `comments_container_id` varchar(20) NOT NULL,
  `branch` int(11) NOT NULL DEFAULT '0',
  `comment` blob NOT NULL,
  `date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

CREATE TABLE IF NOT EXISTS `objectives` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` int(11) NOT NULL,
  `objective` varchar(300) COLLATE utf32_unicode_ci NOT NULL,
  `dashboard_id` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` enum('open','closed') COLLATE utf32_unicode_ci NOT NULL DEFAULT 'open',
  `steps` blob NOT NULL,
  `teacher_email` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `assignment_id` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci AUTO_INCREMENT=18 ;

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `project_id` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `date` int(10) NOT NULL,
  `title` text COLLATE utf32_unicode_ci NOT NULL,
  `description` blob NOT NULL,
  `github_link` varchar(1024) COLLATE utf32_unicode_ci NOT NULL,
  `local_link` varchar(300) COLLATE utf32_unicode_ci NOT NULL,
  `staging_link` varchar(300) COLLATE utf32_unicode_ci NOT NULL,
  `production_link` varchar(300) COLLATE utf32_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `hash` varchar(20) COLLATE utf32_unicode_ci NOT NULL,
  `project_id` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `project_title` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `elapsed_time` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `timezone` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `assignment_hash` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `student_name` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci AUTO_INCREMENT=11 ;

CREATE TABLE IF NOT EXISTS `statistics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `assignment_hash` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `synopsis_hash` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `tasks` int(11) NOT NULL,
  `elapsed_time` int(11) NOT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `synopsis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `assignment_id` varchar(11) COLLATE utf32_unicode_ci NOT NULL,
  `synopsis_id` varchar(11) COLLATE utf32_unicode_ci NOT NULL,
  `elapsed_time` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('in_progress','submitted','returned','completed') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'in_progress',
  `student_name` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `report_url` varchar(200) COLLATE utf32_unicode_ci NOT NULL,
  `timezone` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci AUTO_INCREMENT=16 ;

CREATE TABLE IF NOT EXISTS `task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `session` int(10) NOT NULL,
  `time` int(10) NOT NULL,
  `position` int(11) NOT NULL,
  `task` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci AUTO_INCREMENT=41 ;

CREATE TABLE IF NOT EXISTS `tracker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `referer` varchar(255) NOT NULL DEFAULT '',
  `referer_is_local` tinyint(4) NOT NULL DEFAULT '0',
  `url` varchar(255) NOT NULL DEFAULT '',
  `page_title` varchar(255) NOT NULL DEFAULT '',
  `search_terms` varchar(255) NOT NULL DEFAULT '',
  `img_search` tinyint(4) NOT NULL DEFAULT '0',
  `browser_family` varchar(255) NOT NULL DEFAULT '',
  `browser_version` varchar(15) NOT NULL DEFAULT '',
  `os` varchar(255) NOT NULL DEFAULT '',
  `os_version` varchar(255) NOT NULL DEFAULT '',
  `ip` varchar(15) NOT NULL DEFAULT '',
  `user_agent` varchar(255) NOT NULL DEFAULT '',
  `exec_time` float NOT NULL DEFAULT '0',
  `num_queries` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=302 ;

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_email` varchar(255) NOT NULL DEFAULT '',
  `user_pass` varchar(60) NOT NULL DEFAULT '',
  `user_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_last_login` datetime DEFAULT NULL,
  `user_hash` varchar(255) DEFAULT NULL,
  `user_level` enum('user','administrator') NOT NULL DEFAULT 'user',
  `user_timezone` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `remember` varchar(20) NOT NULL,
  `product` enum('half','full') NOT NULL DEFAULT 'half',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;
