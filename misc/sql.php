CREATE TABLE IF NOT EXISTS `steps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `step` varchar(500) COLLATE utf32_unicode_ci NOT NULL,
  `date` int(11) NOT NULL,
  `dashboard_id` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `assignment_id` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci AUTO_INCREMENT=16 ;