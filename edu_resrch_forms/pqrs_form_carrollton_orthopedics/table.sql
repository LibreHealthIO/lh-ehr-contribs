CREATE TABLE IF NOT EXISTS pqrs_form_carrollton_orthopedics (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `pid` bigint(20) DEFAULT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `groupname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `authorized` tinyint(4) DEFAULT NULL,
  `activity` tinyint(4) DEFAULT NULL, 
  `purpose` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Carrollton_Orthopedics0021` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Carrollton_Orthopedics023` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Carrollton_Orthopedics0039` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Carrollton_Orthopedics046` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Carrollton_Orthopedics0109` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Carrollton_Orthopedics0128` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Carrollton_Orthopedics0226` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Carrollton_Orthopedics0238` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Carrollton_Orthopedics0431` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `recommendation` longtext COLLATE utf8_unicode_ci NOT NULL,
  `finalize` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
)
