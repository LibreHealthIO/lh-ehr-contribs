CREATE TABLE IF NOT EXISTS pqrs_form_total_knee_replacement (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `pid` bigint(20) DEFAULT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `groupname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `authorized` tinyint(4) DEFAULT NULL,
  `activity` tinyint(4) DEFAULT NULL, 
  `purpose` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Total_Knee_Replacement0130` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Total_Knee_Replacement0226` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Total_Knee_Replacement0350` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Total_Knee_Replacement0351` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Total_Knee_Replacement0352` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Total_Knee_Replacement0353` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `recommendation` longtext COLLATE utf8_unicode_ci NOT NULL,
  `finalize` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
)
