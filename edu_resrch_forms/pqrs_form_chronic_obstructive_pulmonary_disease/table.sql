CREATE TABLE IF NOT EXISTS pqrs_form_chronic_obstructive_pulmonary_disease (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `pid` bigint(20) DEFAULT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `groupname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `authorized` tinyint(4) DEFAULT NULL,
  `activity` tinyint(4) DEFAULT NULL, 
  `purpose` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Chronic_Obstructive_Pulmonary_Disease0047` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Chronic_Obstructive_Pulmonary_Disease0051` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Chronic_Obstructive_Pulmonary_Disease0052` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Chronic_Obstructive_Pulmonary_Disease0110` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Chronic_Obstructive_Pulmonary_Disease0111` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Chronic_Obstructive_Pulmonary_Disease0130` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Chronic_Obstructive_Pulmonary_Disease0226` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `recommendation` longtext COLLATE utf8_unicode_ci NOT NULL,
  `finalize` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
)
