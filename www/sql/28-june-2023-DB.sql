/*
SQLyog Professional v13.1.1 (64 bit)
MySQL - 8.0.30 : Database - test_karmamediaent
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`test_karmamediaent` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `test_karmamediaent`;

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `jobs` */

DROP TABLE IF EXISTS `jobs`;

CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `jobs` */

insert  into `jobs`(`id`,`queue`,`payload`,`attempts`,`reserved_at`,`available_at`,`created_at`) values 
(4,'default','{\"uuid\":\"0b326310-c992-442f-aa85-84a63ec218f5\",\"displayName\":\"App\\\\Mail\\\\TempleteCreateNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:35:\\\"App\\\\Mail\\\\TempleteCreateNotification\\\":4:{s:13:\\\"PRACTICE_NAME\\\";s:7:\\\"Laravel\\\";s:4:\\\"USER\\\";s:19:\\\"rabi@mailinator.com\\\";s:6:\\\"params\\\";a:1:{s:5:\\\"email\\\";s:19:\\\"rabi@mailinator.com\\\";}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}',0,NULL,1687162181,1687162181),
(5,'default','{\"uuid\":\"4f97f043-d486-442f-9b01-25c107883f9d\",\"displayName\":\"App\\\\Mail\\\\TempleteCreateNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:35:\\\"App\\\\Mail\\\\TempleteCreateNotification\\\":4:{s:13:\\\"PRACTICE_NAME\\\";s:11:\\\"Karma Media\\\";s:4:\\\"USER\\\";s:19:\\\"rabi@mailinator.com\\\";s:6:\\\"params\\\";a:1:{s:5:\\\"email\\\";s:19:\\\"rabi@mailinator.com\\\";}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}',0,NULL,1687774287,1687774287),
(6,'default','{\"uuid\":\"896a3ee7-f6e1-414c-99e9-d1a56a8c8ffa\",\"displayName\":\"App\\\\Mail\\\\TempleteCreateNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:35:\\\"App\\\\Mail\\\\TempleteCreateNotification\\\":4:{s:13:\\\"PRACTICE_NAME\\\";s:11:\\\"Karma Media\\\";s:4:\\\"USER\\\";s:19:\\\"rabi@mailinator.com\\\";s:6:\\\"params\\\";a:1:{s:5:\\\"email\\\";s:19:\\\"rabi@mailinator.com\\\";}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}',0,NULL,1687774297,1687774297);

/*Table structure for table `mail_templates` */

DROP TABLE IF EXISTS `mail_templates`;

CREATE TABLE `mail_templates` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `template_code` varchar(255) DEFAULT NULL,
  `template_name` varchar(255) DEFAULT NULL,
  `mailable` varchar(255) NOT NULL,
  `subject` text,
  `html_template` longtext NOT NULL,
  `text_template` longtext,
  `template_type` enum('SMS','EMAIL','WHATS_APP') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'EMAIL',
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `mail_templates` */

insert  into `mail_templates`(`id`,`template_code`,`template_name`,`mailable`,`subject`,`html_template`,`text_template`,`template_type`,`created_at`,`created_by`,`updated_at`,`updated_by`,`deleted_at`,`deleted_by`) values 
(19,'create_user_notification','Create user notification','App\\Mail\\UserCreateNotification','User Create Notification','<p>Hello {{NAME}}</p>\r\n\r\n<p>We have created your account in {{PRACTICE_NAME}} backen and below is the login details.</p>\r\n\r\n<p>Username: {{USER}}</p>\r\n\r\n<p>Password: {{PASSWORD}}</p>\r\n\r\n<p>{{LOGIN}}</p>\r\n\r\n<p>Regards,<br />\r\n{{PRACTICE_NAME}}</p>\r\n\r\n<p><span style=\"color:#e74c3c\"><strong>DO NOT REPLY TO THIS E-MAIL</strong></span><br />\r\nThis is an automated e-mail message sent from our support system.<br />\r\nDo not reply to this e-mail as we will not receive your reply!</p>','Hello \\n \\n I am inviting you to a video consultation session. Please click below to join the consultation (no account needed) \\n \\nVideo consultation time: {time} \\n \\nVideo consultation link: {URL} \\n \\nBest Regards,\\n{PRACTICE_NAME}','EMAIL',NULL,NULL,'2021-09-30 07:52:54',NULL,NULL,NULL),
(21,'reset_password_notification','Reset Password Notification','App\\Mail\\ResetPasswordMail','Reset Password Notification','<p>You are receiving this email because we received a password reset request for your account.</p>\r\n\r\n<p>{{RESET}}</p>\r\n\r\n<p>This password reset link will expire in 60 minutes.</p>\r\n\r\n<p>If you did not request a password reset, no further action is required.</p>\r\n\r\n<p>Regards,<br />\r\n{{PRACTICE_NAME}}</p>\r\n\r\n<p><span style=\"color:#e74c3c\"><strong>DO NOT REPLY TO THIS E-MAIL</strong></span><br />\r\nThis is an automated e-mail message sent from our support system.<br />\r\nDo not reply to this e-mail as we will not receive your reply!</p>','Hello \\n \\n I am inviting you to a video consultation session. Please click below to join the consultation (no account needed) \\n \\nVideo consultation time: {time} \\n \\nVideo consultation link: {URL} \\n \\nBest Regards,\\n{PRACTICE_NAME}','EMAIL',NULL,NULL,'2022-01-27 07:31:15',NULL,NULL,NULL),
(40,'templete_create_notification','Templete Create Notification','App\\Mail\\TempleteCreateNotification','Templete Create Notification','<p>Templete Create Notification</p>',NULL,'EMAIL',NULL,NULL,'2023-06-13 05:11:46',NULL,NULL,NULL);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
(5,'2023_06_12_063403_create_permission_tables',2);

/*Table structure for table `model_has_permissions` */

DROP TABLE IF EXISTS `model_has_permissions`;

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `model_has_permissions` */

/*Table structure for table `model_has_roles` */

DROP TABLE IF EXISTS `model_has_roles`;

CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `model_has_roles` */

insert  into `model_has_roles`(`role_id`,`model_type`,`model_id`) values 
(1,'App\\Models\\User',1),
(2,'App\\Models\\User',7);

/*Table structure for table `movie_photos` */

DROP TABLE IF EXISTS `movie_photos`;

CREATE TABLE `movie_photos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `movie_id` int DEFAULT NULL,
  `filename` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `original_filename` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `movie_photos` */

/*Table structure for table `movies` */

DROP TABLE IF EXISTS `movies`;

CREATE TABLE `movies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` enum('MOVIE','WEBSERIES') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title` text COLLATE utf8mb4_general_ci,
  `slug` text COLLATE utf8mb4_general_ci,
  `directed_by` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `produced_by` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `main_cast` text COLLATE utf8mb4_general_ci,
  `release_date` date DEFAULT NULL,
  `logo` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `youtube_trailer_link` text COLLATE utf8mb4_general_ci,
  `poster_landscape` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `poster_potrait` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gallery` text COLLATE utf8mb4_general_ci,
  `facebook` text COLLATE utf8mb4_general_ci,
  `instagram` text COLLATE utf8mb4_general_ci,
  `youtube` text COLLATE utf8mb4_general_ci,
  `twitter` text COLLATE utf8mb4_general_ci,
  `netflix` text COLLATE utf8mb4_general_ci,
  `amazon_prime` text COLLATE utf8mb4_general_ci,
  `zee5` text COLLATE utf8mb4_general_ci,
  `alt_balaji` text COLLATE utf8mb4_general_ci,
  `hotstar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `eros_now` text COLLATE utf8mb4_general_ci,
  `mx_player` text COLLATE utf8mb4_general_ci,
  `status` enum('RELEASED','UPCOMING') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'UPCOMING',
  `is_clickable` enum('Y','N') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'Y',
  `is_recent` enum('N','Y') COLLATE utf8mb4_general_ci DEFAULT 'N',
  `is_active` enum('Y','N') COLLATE utf8mb4_general_ci DEFAULT 'Y',
  `created_at` datetime DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `movies` */

insert  into `movies`(`id`,`type`,`title`,`slug`,`directed_by`,`produced_by`,`main_cast`,`release_date`,`logo`,`youtube_trailer_link`,`poster_landscape`,`poster_potrait`,`gallery`,`facebook`,`instagram`,`youtube`,`twitter`,`netflix`,`amazon_prime`,`zee5`,`alt_balaji`,`hotstar`,`eros_now`,`mx_player`,`status`,`is_clickable`,`is_recent`,`is_active`,`created_at`,`created_by`,`updated_at`,`updated_by`,`deleted_at`,`deleted_by`) values 
(1,'WEBSERIES','Coffee King','coffee-king',NULL,NULL,NULL,NULL,NULL,NULL,'G3WtwfiMtgWNhUNkSpHP75szeBvMLwIVCzJuILg4.png','CCFL8fvR81rIptiuJmG1AOaFTcXnzS7euGzsrdNS.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'RELEASED','Y','N','Y','2023-06-26 16:18:43',1,'2023-06-26 16:18:43',1,NULL,NULL),
(2,'WEBSERIES','Lootere','lootere',NULL,'Shaailesh R Singh',NULL,NULL,NULL,NULL,'rzJ4Axnz71Xnu4wBItR7hyrlnO05mE2uYKk2SINV.png','hjVOxMstqlbTB9pg8A0kesdiyEXIAbxwlWNEn5CP.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'RELEASED','N','N','Y','2023-06-26 16:22:04',1,'2023-06-26 16:22:04',1,NULL,NULL),
(3,'WEBSERIES','Mukbir','mukbir',NULL,'Shaailesh R Singh',NULL,NULL,NULL,NULL,'ncAO0DhesDxodxjNCjRzeBbvhKUl8HWLcVe2dxW1.jpg','cNGSZQ8p8QQRdfzLauyfAmW5TmxI78AEBd6MlVSF.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'RELEASED','N','N','Y','2023-06-26 16:23:08',1,'2023-06-26 16:23:08',1,NULL,NULL),
(4,'WEBSERIES','Suburban Tales','suburban-tale',NULL,'Shaailesh R Singh',NULL,NULL,NULL,NULL,'kKUuuhabqFqyJejR7iw9T9eM022Hdw8heTybHF2g.jpg','WxlAbGFUrPGYJ9t55ZArszwhKfn6iELq0ZNwvfS8.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'RELEASED','N','N','Y','2023-06-26 16:26:04',1,'2023-06-26 16:26:04',1,NULL,NULL),
(5,'WEBSERIES','The Tatas','tatas',NULL,NULL,NULL,NULL,NULL,NULL,'P8BpWhGxK2eIEqWl5p1g8hlQpsHls9faPxL65oX8.png','tqq13nV0t9W7uotWvilY0G4Ll7exuQ9iNxTtarNv.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'RELEASED','Y','N','Y','2023-06-26 16:27:19',1,'2023-06-26 16:27:19',1,NULL,NULL),
(6,'MOVIE','16 Sixteen','16-sixteen','Raj Purohit','Vishwas Joshi and Shailesh R. Singh','Mehak Manwani, Izabelle Leite, Wamiqa Gabbi, Rohan Mehra, Keith Sequeira','2012-07-12',NULL,NULL,'MZTD3FtwRkel6CGBt1qjUcReekIvsSjVLIFfQOG8.png','j3rMcTxoZe42E2L2BYiLOSQQ3ptr89kTJvIcyeCG.png',NULL,NULL,NULL,NULL,NULL,NULL,'https://www.primevideo.com/dp/amzn1.dv.gti.12d8ab48-9c8f-4aed-a570-98a80958db7a?autoplay=0&ref_=atv_cf_strg_wb','https://www.zee5.com/movies/details/sixteen/0-0-145744?utm_source=google_web&utm_medium=watchaction&utm_campaign=google_watch&utm_content=sixteen',NULL,NULL,NULL,'https://www.mxplayer.in/movie/watch-sixteen-movie-online-69d10bd26cacd730003a743001a80997?watch=true&utm_source=google_web&utm_medium=watchaction','RELEASED','Y','N','Y','2023-06-26 16:34:32',1,'2023-06-26 16:34:32',1,NULL,NULL),
(7,'MOVIE','Aligarh','aligarh','Hansal Mehta','Shaailesh R Singh, Sunil Lulla, Sandip Ssingh','Manoj Bajpayee & Rajkummar Rao','2016-02-26','2eakNFyZSO9xZpNphqTJkxxDxoQ5dKkPcOVtdmY7.png','https://www.youtube.com/embed/S97g7hGsBy8','ngqSPXjGd8MUHsXGuJz1NsSktxg5XxukUMVQ6V7l.jpg','nUMKW6n5gq0R6bJ0OgHTI3tDLfK33m1yntkzpXZL.jpg','[\"5eZuOysOpBraZ23Mklee1ZS0NanhFijKOGVCwOhg.jpg\",\"QChetPTKp8WmS7bGkzSC23E475OEPDcujZRIsd2R.jpg\",\"ogB4aAwXrAIh2d2Q7jOJa5k5MFeKPUcOdPejq6Go.jpg\",\"ba03h1HLWcOmW2pGPyf0JvasM4DR8AFOIo7PfnhV.jpg\",\"1J3Wz5iT7uKuauNMOFQKlYw2dE3VSkHiUT7JaFcQ.jpg\"]',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'https://erosnow.com/movie/watch/1048711/aligarh',NULL,'RELEASED','Y','N','Y','2023-06-26 16:39:23',1,'2023-06-26 16:39:23',1,NULL,NULL),
(8,'MOVIE','Bas Ek Pal','bas-ek-pal','Onir','Manohar P. Kanungo & Shailesh R. Singh','Juhi Chawla, Urmila Matondkar, Jimmy Sheirgill, Sanjay Suri, Rehaan Engineer, Yashpal Sharma','2006-09-15',NULL,NULL,'TV575RVstiYT9HAsGqMR8DNdJuCodmMh5ObTVvdZ.png','fqguHFO6uWCJuSa01gQ7XsKuG69zeT2SoDqGi4GK.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'RELEASED','Y','N','Y','2023-06-26 16:46:08',1,'2023-06-26 16:46:09',1,NULL,NULL),
(9,'MOVIE','Dedh Bhiga Zameen','dedh-bhiga-zameen','Pulkit',NULL,'Pratik Gandhi Khushali Kumar',NULL,'puJtfQp4ykBiusTI46YVSz5Np89olEewbatEQcfY.png',NULL,'wCtjJqye1MW1JsoUAdmzKk3x58F1ksUMZ0kwM7XV.png','W6H6zuW4ymfYkjHTAVGX4lz0bBFRKnB1amOJ8hzk.png','[\"P5vinLJyTrqQKHVjIuhZ8l1xprkKdeoKGihioWMI.png\"]',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'UPCOMING','N','N','Y','2023-06-26 17:01:36',1,'2023-06-26 17:01:44',1,NULL,NULL),
(10,'MOVIE','Dil Kabaddi','dil-kabaddi','Anil Sharma','Shaailesh R Singh','Irrfan Khan, Rahul Bose, Rahul Khanna, Konkona Sen Sharma, Soha Ali Khan & Payal Rohatgi','2008-12-05','mcDvg4UgZylwK1MEVE3XxH3RJ51LiRDSVsKPx43a.png','https://www.youtube.com/embed/magRxkrMXB0','OvKXMdFPBPGiMh3a3Nys4Mji1oD3fAbNZCjyedYh.jpg','CcHbByJFCcgp3XaLG2cuTzAYxf8a7UE8ToYA0YTm.jpg','[\"Bhaua12or6yKzL6d1epPXIwhJvqEYXIZ52Ijm8no.jpg\",\"UwDzFHoZzqiEU69HDYPuCRUFFsD9I4l6m4onNtrn.jpg\",\"KQOIVGCP6nLj6pzEN5fWJ83jWaiaEl0R9Z6sJ2k5.jpg\",\"MSi4mjwGGDoua4qerVlxJsciIT3AXVUIhIuzatAq.jpg\",\"nOpQ7h7w0i8r69RAn2UC3bkXXXQcOmz79sdhQcni.jpg\",\"1OPrRKBgQr62yu99A6li10OYzvxJjaoc8YRcTIto.jpg\",\"SELlB83faC02lwVDeekqhdJCm9fMFYbq9t86lfKX.jpg\"]',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'RELEASED','Y','N','Y','2023-06-26 17:09:21',1,'2023-06-26 17:09:21',1,NULL,NULL),
(11,'MOVIE','Hurdang','hurdang','Nikhil Bhatt','Shaailesh R Singh','Sunny Kaushal, Nushrat Bharucha and Vijay Varma','2022-04-08','FTZlALlHDWm5MnrLlQcvOCNdTbOgwJCLTJlhqAZ3.png','https://www.youtube.com/embed/o1oKxDxz1WQ','vWMtKisWVXJDV6h18znaIMgKWCD0vMMdmJGqcszy.png','XlIUcddOKW54H4ZU6v29FkbzvHsxnsRePXZfVp0N.png','[\"81wOyih8Dcft8KaNsaywWoYtrYj26934zydT6Mi8.jpg\"]','https://www.facebook.com/KarmaMediaEnt/','https://www.instagram.com/karmamediaent/',NULL,'https://twitter.com/KarmaMediaEnt',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'RELEASED','Y','Y','Y','2023-06-26 17:33:20',1,'2023-06-27 11:34:40',1,NULL,NULL),
(12,'MOVIE','Issaq','issaq','Manish Tiwary','Dhaval Gada, Shailesh R Singh','Prateik Babbar, Amyra Dastur, Ravi Kishan, Makarand Deshpande, Neena Gupta, Prashant Narayanan','2013-07-26',NULL,NULL,'AnHAsQLJ3GoWne4RRJnHmxhd82BvrBcEJgGhzNXV.png','LCuB2EJehPrvYV6rJoyFyr8XuqLRtq0oyGLgiN4G.png',NULL,NULL,NULL,'https://youtu.be/CZUQ0pv6wH4',NULL,NULL,NULL,'https://www.zee5.com/movies/details/issaq/0-0-2423?utm_source=google_web&utm_medium=watchaction&utm_campaign=google_watch&utm_content=issaq',NULL,NULL,NULL,NULL,'RELEASED','Y','N','Y','2023-06-26 17:35:54',1,'2023-06-26 17:35:54',1,NULL,NULL),
(13,'MOVIE','Jabariya Jodi','jabariya-jodi','Prashant Singh','Shaailesh R Singh, Ekta Kapoor & Shobha Kapoor','Sidharth Malhotra & Parineeti Chopra','2019-08-09','L3Z0tJ9ZaOnGeMgsthjpZ31KJFHPRhvPcSTPtjTM.png','https://www.youtube.com/embed/SXAqEbLJYPY','S5fsJHSr1f3r5tDWf7WKUWe6Vyv0aNXQby3DSo92.jpg','cpImsj2fOjV6uLKl6nZS6MHvXnzWU7Ba3CahDS8F.jpg','[\"bek5mSvuLwgPl6BKDYLoSfdtChRLDoAEZtOtrLx9.jpg\",\"huukOX29c75JbB1hjMMLF5JMB5Z1jl2sRe4bSYH8.jpg\",\"FDzcLDaPcSVwXiRHjjgLwoVYhKbFMmvZ1d1XLrmh.jpg\",\"IuxyvWvUywgCcEUfEVvoINziySXJQjXPFMumpg6g.jpg\",\"aIrGKNHI7N4zBJc66T1myUoO6e0o52n3L2RlxPmU.jpg\"]','http://www.karmamediaent.com','http://www.karmamediaent.com','http://www.karmamediaent.com','http://www.karmamediaent.com',NULL,NULL,'https://www.zee5.com/movies/details/jabariya-jodi/0-0-86035',NULL,NULL,NULL,NULL,'RELEASED','Y','Y','Y','2023-06-26 17:39:37',1,'2023-06-27 11:34:32',1,NULL,NULL),
(14,'MOVIE','Judgementall Hai Kya','Judgementall-Hai-Kya','Prakash Kovelamudi','Shaailesh R Singh, Ekta Kapoor & Shobha Kapoor','Rajkummar Rao & Kangana Ranaut','2019-07-26','gvPx1aVHg0P5A3qFtkUHqRLirgvtjYVuMnvWF6Q2.png','https://www.youtube.com/embed/BywLe4m2j2I','ilKE3xMhmG0hhVx0OORmp0DPBHSTmPtI538gMawZ.jpg','ur0N5sNPHsSYdWsZDnWmpbM0BOy2YFsm7k5kJf7l.jpg','[\"1CvFT3UDd9CYb1LbS03n3US9hHQdWxsKwLRMNTF4.jpg\",\"MrMgT0keB5ChCHZutw8JDNQ6oh9TouDmuOXs6iZ2.jpg\",\"5XoyWw4CzCCbEe3BgfR2klgqib7yXuxkhHD0dMLh.jpg\",\"nAydQVrIIEmMmGdDHCUyrajhe6bDDq44hi4w1iFp.jpg\",\"A7sGyE4lOSWCzCjfI5rBdrKNxV5yP7fTKS5JNiBN.jpg\"]','https://www.facebook.com/KarmaMediaEnt/','https://www.instagram.com/karmamediaent/',NULL,'https://twitter.com/KarmaMediaEnt',NULL,NULL,'https://www.zee5.com/movies/details/judgementall-hai-kya/0-0-85174',NULL,NULL,NULL,NULL,'RELEASED','Y','Y','Y','2023-06-26 17:43:49',1,'2023-06-27 11:33:58',1,NULL,NULL),
(15,'MOVIE','Junoon','junoon','Kanishk Verma','Shaailesh R Singh','Vidyut Jammwal',NULL,NULL,NULL,'YGAp5DlAPWChNEEHdKeLGykyNob59xyt1SOzSSGm.jpg','oyTkxGJi2KhGD0XMaqjEWymbNro6GJxwMRggij3f.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'RELEASED','N','N','Y','2023-06-26 17:45:45',1,'2023-06-26 17:45:45',1,NULL,NULL),
(16,'MOVIE','Ladkykiller','ladkykiller','Ajay Bahl','Shailesh R. Singh, Bhushan Kumar','Arjun Kapoor, Bhumi Pednekar',NULL,'glBP184KQrJKuAHJf4ObzqIy3MC8VtoAt1098kRp.png',NULL,'ft21LwFSvVrEf6gEr8zA31TZzy8nMq9QHRrAppD8.png','hrl699IqY4v91gK72bgOH8Fu9ozLkjodqSqVgexQ.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'UPCOMING','N','N','Y','2023-06-26 17:47:14',1,'2023-06-26 17:47:14',1,NULL,NULL),
(17,'MOVIE','Madaari','madaari','Nishikant Kamat','Shaailesh R Singh, Madan Paliwal, Sutapa Sikdar & Shailja Kejriwal','Irrfan Khan, Vishesh Bansal, Jimmy Sheirgill, Tushar Dalvi, Nitesh Pandey & Sadhil Kapoor','2016-07-22','cyCINowI01tE1jewnfnUgvEsThIH84Qctz8bHF6u.png','https://www.youtube.com/embed/smBU0WCH-yA','bdcE7eX32TF8247K083RirAXd3RmjgGA2bIXwCIw.jpg','l9o5Uc3dOS953AWr5Tdc6OLBbUpkQYicmtaQDKF0.jpg','[\"KH7ijS7kv8d2AWNVCajiRwhTo991F1VnwGxvJf5q.jpg\",\"RxfRAEiJDhwyMKC036pG2uak1JOTYiuxkhJMNPXx.jpg\",\"9a8cNV8TWOGqDI7qSuK5hBPgVkDKD6cakm5qHfdW.jpg\",\"MNJVLLV5fUEunWekVzJkZ3KGxrxBLwgm5tFUfeqe.jpg\",\"2X8uqaYUWWwb8zreDgnZT6u5MvVExe88GDfOqmHS.jpg\"]','https://www.facebook.com/MadaariOfficial/','https://www.instagram.com/madaariofficial/',NULL,'https://twitter.com/madaariofficial','https://www.netflix.com/in/title/80123910',NULL,NULL,NULL,NULL,NULL,NULL,'RELEASED','Y','N','Y','2023-06-26 17:50:26',1,'2023-06-26 17:50:26',1,NULL,NULL),
(18,'MOVIE','Not a Love Story','not-love-story','Ram Gopal Verma','Nitish Sharma, Shailesh R Singh, Kiran Kumar Koneru','Mahie Gill, Deepak Dobriyal, Nitish Sharma, Ajay Gehi','2021-08-19',NULL,NULL,'sytagULdhtyyeNAktBiORmlpQkMMrlsZypXpR0Lm.png','5E9bBp9TMfuqzqbVOB4U2pg7GJryhUpHMluYshVA.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'RELEASED','Y','N','Y','2023-06-26 17:56:53',1,'2023-06-26 17:56:59',1,NULL,NULL),
(19,'MOVIE','Omerta','omerta','Hansal Mehta','Shaailesh R Singh & Nahid Khan','Rajkummar Rao','2018-05-04','rbRIGiZlizBtnLJBSNGshgq2T2s6PVAgwTIMOZE0.png',NULL,'cyL6HmtNWI66A6A0aBeYUUQf6qB7f7ixSUsGFbcz.jpg','vd7y8KbewRixcMTPJkTmd6oqIQVJuqBSp21SpzCw.jpg','[\"cjXc25wowlhbMN2VP3rrgcq3OLLIK5v0fxJ4S8eW.jpg\",\"z6VjB50og2s4vOoN1UiQjTvgklHzh7PijEUN2Thj.jpg\",\"yD4LMSYV4yUliZzMfVGIsAlPxPk4F08bjjyjSiiE.jpg\",\"pQjqWgEECbxHzLanz7YJqFMtNwSlq53z7OWYwuqM.jpg\",\"yztgfYMo38s1BTwktZpAsONWrOWelOIySv9tvA8O.jpg\"]','https://www.facebook.com/Omerta2018/','https://www.instagram.com/omerta_2018/','https://www.youtube.com/channel/UCkhSyh4LJARf19jMGiPg9HA','https://twitter.com/Omerta2018',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'RELEASED','Y','N','Y','2023-06-26 18:00:17',1,'2023-06-26 18:00:17',1,NULL,NULL),
(20,'MOVIE','Setu','setu','Vishal Chaturvedi','Shailesh R. Singh',NULL,NULL,NULL,NULL,'4vW7pL5gKiifdevNGzPmwEpgBG2Jkt7zbc13gmOh.png','q6ZFzVYaTsPMF15APpQbuPqTx38QsT20XbzXKbEc.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'UPCOMING','N','N','Y','2023-06-26 18:03:42',1,'2023-06-26 18:03:42',1,NULL,NULL),
(21,'MOVIE','Shahid','shahid','Hansal Mehta','Shaailesh R Singh, Ronnie Screwvala & Siddharth Roy Kapur','Rajkummar Rao, Tigmanshu Dhulia, Kay Kay Menon, Prabhleen Sandhu, Prabal Panjabi','2013-10-18','CeCXE7obEGmLE9ckIZ7ykYH4xb7N52tVE7NHhF26.png','https://www.youtube.com/embed/ug27zn-7zF8','HowDk9sTnusLJuLfA5JDMzUNmejc2lVIMQFZKfKQ.jpg','ssiJncd80f6FFPhl2fQIPhh2LNkSLh5kji2D0Cyg.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'RELEASED','N','N','Y','2023-06-26 18:05:36',1,'2023-06-27 13:01:50',1,NULL,NULL),
(22,'MOVIE','Shaitan','shaitan','Bejoy Nambiar',NULL,'Rajkummar Rao, Rajeev Khandelwal, Kalki Koechlin, Pawan Malhotra, Shiv Panditt, Gulshan Devaiah, Neil Bhoopalam, Kirti Kulhari, Rukhsaar Rehman Rajit Kapoor, Sheetal Menon','2011-06-10',NULL,NULL,'VooQ6K5FcuTY8gkyhl3aqvP7QN5w2ARRwkWKCbZD.png','SM1YNj6ExV6QfR4gzWJLwkaUptVTkA6JPLfTv66u.png',NULL,NULL,NULL,NULL,NULL,'https://www.netflix.com/in/title/80165855',NULL,NULL,NULL,NULL,NULL,NULL,'RELEASED','Y','N','Y','2023-06-26 18:07:37',1,'2023-06-26 18:07:37',1,NULL,NULL),
(23,'MOVIE','Simran','simran','Hansal Mehta','Shaailesh R Singh, Bhushan Kumar & Krishan Kumar',NULL,'2017-09-15','OcjG0imkVmZigKpMOcclSuYyzvS7JeBPjHMdmo6T.png','https://www.youtube.com/embed/_LUe4r6eeQA','0L2zNsjaqFYJkqRkTpaynGG0ySLhrHaNvR5PGCGf.jpg','LM3RHFWhmAi1H6UlNNh6y16at61psdOzJqxDg3Ac.jpg','[\"35KRuxEsl3xNX8WxxRKNXcjEGUCv5sIUhEOIgiEm.png\",\"W6Lmoq9j20WQSN4rJbwzymEJCgcTvWrdNAF1luYm.jpg\",\"ISjy8YvCwyX4CWfSBRtkU64iGmWIsVs5xebRVj3X.jpg\",\"RzmTE0oSZf9U71ISnqlku4nHxztrzxmrx5PSEIrW.jpg\",\"yc3fryXV0cz1jYR38HGBXR94qVLNHaFBN9cV34sV.jpg\"]','https://www.facebook.com/SimranMovie/','https://www.instagram.com/simranmovie/','https://www.youtube.com/watch?v=jglS2VPfxA4','https://twitter.com/SimranMovie',NULL,'https://www.primevideo.com/detail/Simran/0TIUA4XD0RR3BSDBX0X9ZYCPIC',NULL,NULL,NULL,NULL,NULL,'RELEASED','Y','N','Y','2023-06-26 18:10:57',1,'2023-06-26 18:10:57',1,NULL,NULL),
(24,'MOVIE','Tanu Weds Manu','tanu-weds-manu','Aanand L. Rai','Shaailesh R Singh & Vinod Bachan','Madhavan, Kangana Ranaut & Jimmy Sheirgill','2011-02-25','uj2TDmHTlJxncBTSTg9Cc91i4pZVFmPvOQeKQtIu.png','https://www.youtube.com/embed/Sc0Kr9JEVXs','q5rLyffoFvllAqMiWKNrat6AAHUMKBrtsPtnJkKZ.jpg','3L0rR0GSox8HezJGreL6ZQVjjxUaC4tGvanSmFYH.jpg','[\"BdKrvnQWLqt8KSmNjea3DQcubyfg07PyKGBShJ1Z.jpg\",\"XE1Fw5gzjcljTCGTUZXR6YYP1fDU149WEcPkCUPr.jpg\",\"XfOEDvJtJvGDUV2PsT6KDoJvOXlEdcUHRZZaa69w.jpg\",\"26CVRLM0p2N9ipSi3qfLoeDalJ8moZFpPa5Z0w90.jpg\",\"efQATneVXmQQhWpPVDpGgEnVShBssk7naYhuka0h.jpg\"]',NULL,NULL,NULL,NULL,'https://www.netflix.com/in/title/70176968',NULL,NULL,NULL,NULL,NULL,NULL,'RELEASED','Y','N','Y','2023-06-26 18:17:04',1,'2023-06-26 18:17:04',1,NULL,NULL),
(25,'MOVIE','Thalaivii','jaylalitha-biopic','A L Vijay','Shaailesh R Singh & Vishnu Vardhan Induri','Kangana Ranaut','2021-09-10','VakmuC3OgfamoOJP0GWic8FfvOuVPeaaLX4nvohY.png','https://www.youtube.com/embed/aHk6s6dOXhw','nDvpMnTIyVztJOYg8T18e2P55zg2CCmSsEvsFQCq.png','V82tKNzUKPcyNhxKKCEIUjjkNisMlrDJCfnqhSvf.png','[\"MuqwrkUYBLagVS3LazLduvUIipUXnynYMPyDkQjQ.jpg\",\"cyfE5fpxtGbcAduFLbmaWq9tRyQLlnolhPltqHcm.jpg\",\"30xAbb1nWOkw0Co1YCrJQgTMUSBQ4ez8mNmdL5ui.jpg\",\"ljfXHtOSk33B1SV2zcDbBSZ2XOtkjNgBfWZFuScd.jpg\",\"SP0SmaHorAwE8ymMYaen9COYR1miu0lKDQNISaGy.jpg\"]','https://www.facebook.com/KarmaMediaEnt/','https://www.instagram.com/karmamediaent/','https://www.youtube.com/channel/UCDt3IC3FUadmisEI1VhUc8A','https://twitter.com/KarmaMediaEnt','https://www.netflix.com/search?q=thalaivii&jbv=81220676',NULL,NULL,NULL,NULL,NULL,NULL,'RELEASED','Y','Y','Y','2023-06-26 18:21:22',1,'2023-06-27 11:34:57',1,NULL,NULL);

/*Table structure for table `news` */

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_general_ci,
  `slug` text COLLATE utf8mb4_general_ci,
  `photo` text COLLATE utf8mb4_general_ci,
  `link` text COLLATE utf8mb4_general_ci,
  `is_published` enum('Y','N') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'N',
  `is_active` enum('Y','N') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'Y',
  `order` int DEFAULT NULL,
  `month` int DEFAULT NULL,
  `year` int DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `news` */

insert  into `news`(`id`,`title`,`slug`,`photo`,`link`,`is_published`,`is_active`,`order`,`month`,`year`,`created_at`,`created_by`,`updated_at`,`updated_by`,`deleted_at`,`deleted_by`) values 
(1,'What To Expect From Nushrat Bharucha\'s Upcoming Movie \'Hurdang\'','what-expect-nushrat-bharuchas-upcoming-movie-hurdang','Cgq8TIwxF8nGeWwQfik7bcOYdGBaK51XrGfNm0JM.png','https://www.republicworld.com/entertainment-news/bollywood-news/nushrat-bharuchas-upcoming-movie-hurdang-what-to-expect.html','Y','Y',NULL,5,2020,'2023-06-22 19:04:24',1,'2023-06-23 11:55:10',1,NULL,NULL),
(2,'Title- Hansal Mehta & Jai Mehta To Reportedly Make A Web Series On Somalian Pirates','title-hansal-mehta-jai-mehta-reportedly-make-web-series-somalian-pirates','juD34eVU06tM2t1cqHe7vDyK0hgYnZ2TtQg5T0Xs.png','https://www.missmalini.com/2021/11/29/hansal-mehta-jai-mehta-to-reportedly-make-a-web-series-on-somalian-pirates/','N','Y',NULL,11,2021,'2023-06-22 19:05:28',1,'2023-06-23 12:16:01',1,NULL,NULL),
(3,'The Lady Killer: Bhumi Pednekar And Arjun Kapoor Pose Together For Some ‘Killer’ Pictures!','lady-killer-bhumi-pednekar-and-arjun-kapoor-pose-together-some-killer-pictures','3NoFXh7vym9weO2kDzdQaxwjkM4HjuVkBG1baouf.png','https://www.latestly.com/socially/entertainment/bollywood/the-lady-killer-bhumi-pednekar-and-arjun-kapoor-pose-together-for-some-killer-pictures-3828875.html','Y','Y',NULL,NULL,NULL,'2023-06-22 19:06:36',1,'2023-06-22 19:06:36',NULL,NULL,NULL),
(4,'The Lady Killer Wrapped-up: Arjun Kapoor-Bhumi Pednekar look promising new pair in photos','lady-killer-wrapped-arjun-kapoor-bhumi-pednekar-look-promising-new-pair-photos','TaJka0HhvgGnGPiidknKE1WwYXWwR7AF8V3oYAGV.png','https://en.janbharattimes.com/entertainment/the-lady-killer-wrapped-up-arjun-kapoor-bhumi-pednekar-photos','Y','Y',NULL,6,2023,'2023-06-22 19:07:17',1,'2023-06-23 12:15:30',1,NULL,NULL),
(5,'Sunny Kaushal, Nushrat Bharucha and Vijay Varma to star in Shailesh R Singh\'s Hurdang','sunny-kaushal-nushrat-bharucha-and-vijay-varma-star-shailesh','Ev4ltg2omvogzzMp6Xyb4wmkKcNUH0zqNX9WNWoR.jpg','https://www.indiatoday.in/movies/bollywood/story/sunny-kaushal-nushrat-bharucha-and-vijay-varma-to-star-in-shailesh-r-singh-s-hurdang-1551811-2019-06-19','Y','Y',NULL,6,2019,'2023-06-22 19:08:08',1,'2023-06-23 11:58:42',1,NULL,NULL),
(6,'Shailesh R Singh announces his 20th film, Setu','shailesh-r-singh-announces-his-20th-film-setu','VBhPeqxZh1KPLEdrkp1eD8S9BBe3qYGcwwFbfDPG.png','https://www.hindustantimes.com/entertainment/bollywood/shailesh-r-singh-announces-his-20th-film-setu-101654168575518.html','Y','Y',NULL,6,2023,'2023-06-22 19:08:51',1,'2023-06-23 11:58:08',1,NULL,NULL),
(7,'Shaailesh Singh: Controversies don’t bring audiences to cinema halls','shaailesh-singh-controversies-dont-bring-audiences-cinema-halls','mfDwwVJRFUQdNEb8R397DBZQkMuDLcpmtkTNvUoe.jpg','https://indianexpress.com/article/entertainment/bollywood/judgementall-hai-kya-producer-shaailesh-singh-interview-5914111/','N','Y',NULL,8,2019,'2023-06-22 19:11:07',1,'2023-06-23 11:57:37',1,NULL,NULL),
(8,'Pratik Gandhi’s film with Hansal Mehta is titled Dedh Bigha Zameen, see first poster','pratik-gandhis-film-hansal-mehta-titled-dedh-bigha-zameen-see-first-poster','BOayNEFFROKOzYVNSBEoorCZn7UN8JrD2hDsJClr.png','https://indianexpress.com/article/entertainment/bollywood/dedh-bigha-zameen-pratik-gandhi-starrer-hansal-mehta-film-get-a-title-see-the-first-look-poster-as-the-shoot-commences-7459172/','Y','Y',NULL,8,2021,'2023-06-22 19:12:06',1,'2023-06-23 11:57:01',1,NULL,NULL),
(9,'People in Chennai are excited to see Kangana Ranaut as J Jayalalithaa','people-chennai-are-excited-see-kangana-ranaut-j-jayalalithaa','36X8MyNrPcET05WMvoMp04uOozvuJDxBcB9rCxoq.jpg','https://www.cinemaexpress.com/stories/interviews/2019/aug/06/producer-shaailesh-r-singh-people-in-chennai-are-excited-to-see-kangana-rananut-as-j-jayalalithaa-13467.html','N','Y',NULL,8,2019,'2023-06-22 19:14:38',1,'2023-06-23 11:56:34',1,NULL,NULL),
(11,'Kangana Ranaut Pays Tribute To \'Thalavi\' Jayalalithaa On Her Death Anniversary','kangana-ranaut-pays-tribute-thalavi-jayalalithaa-her-death-anniversary','gT4asps4eDlSbWsJxQeCknKkYAZ1J5vh0OEg5kQN.png','https://www.republicworld.com/entertainment-news/bollywood-news/kangana-ranaut-pays-tribute-to-thalavi-jayalalithaa-on-her-death-ann.html','Y','Y',NULL,12,2019,'2023-06-22 19:16:40',1,'2023-06-23 11:56:09',1,NULL,NULL),
(12,'Kangana Ranaut celebrates Padma Shri honour with Thalaivi team','kangana-ranaut-celebrates-padma-shri-honour-thalaivi-team','7hfOOpYqodPN60tDehQyT6uZwXY2Liat09fYiFhE.png','https://www.hindustantimes.com/bollywood/kangana-ranaut-celebrates-padma-shri-honour-with-thalaivi-team-in-chennai-cuts-huge-cake/story-3XFbbwj7LUQKVgkvDzo9WL.html','Y','Y',NULL,6,2023,'2023-06-22 19:18:51',1,'2023-06-23 11:55:45',1,NULL,NULL),
(13,'Jisshu Sengupta to play Sobhan Babu in Jayalalithaa biopic Thalaivi','jisshu-sengupta-play-sobhan-babu-jayalalithaa-biopic-thalaivi','a8R3GkQcbheXqIR2NuMdcyiut1lnITYzc1uOkaXG.png','https://www.hindustantimes.com/regional-movies/bengali-actor-jisshu-sengupta-to-play-sobhan-babu-in-jayalalithaa-biopic-thalaivi/story-eVkaPMW6KulVo9wIPEpOwO.html','Y','Y',NULL,2,2020,'2023-06-23 10:15:21',1,'2023-06-23 12:54:14',1,NULL,NULL),
(14,'It\'s A Dubbing Wrap! Vijay Verma shares photos of Hurdang','its-dubbing-wrap-vijay-verma-shares-photos-hurdang','mX9ICD0L7bDfnBlMhHBhUGUb2ZfqMiC1XtN4v1YI.png','https://www.mid-day.com/entertainment/bollywood-news/article/its-dubbing-wrap-for-vijay-verma-on-hurdang-see-photos-23187178','N','Y',NULL,8,2021,'2023-06-23 10:16:06',1,'2023-06-23 12:53:34',1,NULL,NULL),
(15,'Hurdang Trailer: Sunny Kaushal, Nushrratt Bharuccha & Vijay Varma\'s Film Looks Thrillingly \'Gajab\'','hurdang-trailer-sunny-kaushal-nushrratt-bharuccha-vijay-varmas-film-looks-thrillingly-gajab','Nx0HsCqPb4HtXiXg9oLiV2Axr4Xp9JjP3b222VyK.png','https://www.missmalini.com/2022/03/30/hurdang-trailer-sunny-kaushal-nushrratt-bharuccha-vijay-varmas-film-looks-thrillingly-gajab/','Y','Y',NULL,5,2022,'2023-06-23 10:17:18',1,'2023-06-23 12:53:12',1,NULL,NULL),
(16,'Hurdang Trailer: Sunny Kaushal-Nushrratt Bharuccha\'s Love Saga Gets Caught In The Middle Of Vijay Varma\'s Politics','hurdang-trailer-sunny-kaushal-nushrratt-bharucchas-love-saga-gets-caught-middle-vijay-varmas-politics','TxFuryGuqsSSRedWoE3jVYQZWvVBH4lD7aBf9pLm.png','https://www.ottplay.com/news/hurdang-trailer-sunny-kaushal-nushrratt-bharucchas-love-saga-gets-caught-up-in-vijay-varmas-politics/c8ae51ce34737','Y','Y',NULL,3,2022,'2023-06-23 10:18:05',1,'2023-06-23 18:46:13',1,NULL,NULL),
(17,'Biopic on Cafe Coffee Day founder VG Siddhartha in the works, to bring out unknown facets of entrepreneur\'s life','biopic-cafe-coffee-day-founder-vg-siddhartha-works-bring-out-unknown-facets-entrepreneurs-life .','PqMEOcT8LpCLP2eJd7LRvA02LFtSb8WsRORjX5AB.png','https://economictimes.indiatimes.com/magazines/panache/biopic-on-cafe-coffee-day-founder-vg-siddhartha-in-the-works-to-bring-out-unknown-facets-of-entrepreneurs-life/articleshow/92273932.cms','Y','Y',NULL,6,2022,'2023-06-23 10:24:52',1,'2023-06-23 12:52:17',1,NULL,NULL),
(18,'Dedh Bigha Zameen: Khushali Kumar visits Jhansi ahead of her shoot schedule to prepare for her character','dedh-bigha-zameen-khushali-kumar-visits-jhansi-ahead-her-shoot-schedule-prepare-her-character','8r7Y7IniN5bmbqqyVvuu0mIpoQaqTAfDhGsnpWDo.png','https://www.pinkvilla.com/entertainment/news/dedh-bhiga-zameen-khushali-kumar-visits-jhansi-ahead-her-shoot-schedule-prepare-her-character-878088','Y','Y',NULL,NULL,NULL,'2023-06-23 10:25:30',1,'2023-06-23 10:25:30',NULL,NULL,NULL),
(19,'Biopic On ‘The Tata Family’','biopic-tata-family','VKpCMgwxZ7mVvsS1iPCLsokEDleMbPMqD8llBbv2.png','https://www.indiaherald.com/Viral/Read/994504163/Biopic-On-The-Tata-Family','Y','Y',NULL,6,2023,'2023-06-23 10:26:26',1,'2023-06-23 12:50:50',1,NULL,NULL),
(20,'Bhumi joins the lady killer with arjun kapoor','bhumi-joins-lady-killer-arjun-kapoor','AyAQ3fejoIWrdIng8BWon8rwfptvQKnFwOuMlIKx.png','https://www.newindianexpress.com/entertainment/english/2022/jan/13/bhumi-joinsthe-ladykiller-witharjun-kapoor-2406091.html','Y','Y',NULL,1,2022,'2023-06-23 10:31:07',1,'2023-06-23 18:46:08',1,NULL,NULL),
(21,'Arjun Kapoor, Bhumi Pednekar’s ‘The Lady Killer’ goes on floors','arjun-kapoor-bhumi-pednekars-lady-killer-goes-floors','h6hUsLvGQZaJtZFj10YwYMpcIqEU1Sy7FHDPfkxL.png','https://www.zee5.com/articles/arjun-kapoor-bhumi-pednekars-the-lady-killer-goes-on-floors','Y','Y',NULL,4,2019,'2023-06-23 10:31:42',1,'2023-06-23 18:46:05',1,NULL,NULL);

/*Table structure for table `oauth_access_tokens` */

DROP TABLE IF EXISTS `oauth_access_tokens`;

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `client_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_access_tokens` */

insert  into `oauth_access_tokens`(`id`,`user_id`,`client_id`,`name`,`scopes`,`revoked`,`created_at`,`updated_at`,`expires_at`) values 
('31bb1a8908b16e117f9264f69b6965b76a6718645c8551102266628a6a6dfe50f64aa3a67eb22c40',1,2,'Laravel Password Grant Client','[]',0,'2023-06-14 12:13:29','2023-06-14 12:13:29','2024-06-14 12:13:29'),
('35b36b3f27766c2d5c52c8680742a6e267c3039d7672e6536e0eeafd253b8f499c1f918ca90db470',1,2,'Laravel Password Grant Client','[]',0,'2023-06-14 06:25:34','2023-06-14 06:25:34','2024-06-14 06:25:34'),
('56c32661d902e2bca9fd6d9aed4add06f48645c7706891d77e8b40bd975e135a09f9af68423124dc',1,2,'Laravel Password Grant Client','[]',0,'2023-06-14 06:26:31','2023-06-14 06:26:31','2024-06-14 06:26:31'),
('d69e378adbbf31f04a26c6860f1b7214e5f5e32d24daf86723b491bd2f7566a4ff1ef30bd895ab99',1,2,'Laravel Password Grant Client','[]',0,'2023-06-14 06:27:00','2023-06-14 06:27:00','2024-06-14 06:27:00');

/*Table structure for table `oauth_auth_codes` */

DROP TABLE IF EXISTS `oauth_auth_codes`;

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `client_id` bigint unsigned NOT NULL,
  `scopes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_auth_codes` */

/*Table structure for table `oauth_clients` */

DROP TABLE IF EXISTS `oauth_clients`;

CREATE TABLE `oauth_clients` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_clients` */

insert  into `oauth_clients`(`id`,`user_id`,`name`,`secret`,`provider`,`redirect`,`personal_access_client`,`password_client`,`revoked`,`created_at`,`updated_at`) values 
(2,NULL,'yes','9ZabvHEPOnZmTR4efhAtHcmylEruxqsfwvoacOwZ',NULL,'http://localhost',1,0,0,'2023-06-14 06:24:29','2023-06-14 06:24:29');

/*Table structure for table `oauth_personal_access_clients` */

DROP TABLE IF EXISTS `oauth_personal_access_clients`;

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `client_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_personal_access_clients` */

insert  into `oauth_personal_access_clients`(`id`,`client_id`,`created_at`,`updated_at`) values 
(2,2,'2023-06-14 06:24:29','2023-06-14 06:24:29');

/*Table structure for table `oauth_refresh_tokens` */

DROP TABLE IF EXISTS `oauth_refresh_tokens`;

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_refresh_tokens` */

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

insert  into `password_resets`(`email`,`token`,`created_at`) values 
('admin@mailinator.com','$2y$10$hA1nNRBj/610N5OjHRYSie66JKL0a0CxVH3Qi.iJ6S6.D2iVYB5U2','2023-06-15 06:04:10'),
('adminn1234@mailinator.com','$2y$10$yTwLiYFEee6fNSP7KfFLPuLecLxYmIBDAyFcm2.LW/nv5oDC.bogW','2023-06-15 06:06:23'),
('sete@mailinator.com','$2y$10$Woe.yDkCXfvdGCrK2IMvUedaka4E9uQkHEIoTjX5HuVVE.veZiRuy','2023-06-15 06:07:02');

/*Table structure for table `permissions` */

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `permission_label` varchar(255) DEFAULT NULL,
  `guard_name` varchar(255) NOT NULL,
  `is_active` enum('Y','N') DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `permissions` */

insert  into `permissions`(`id`,`title`,`name`,`permission_label`,`guard_name`,`is_active`,`created_at`,`updated_at`) values 
(1,'Dashboard','home','Dashboard','web','Y','2021-09-30 06:06:57','2023-06-12 11:58:16'),
(2,'Settings','setting.index','Site configuration show','web','Y','2021-09-30 06:06:57','2021-09-30 06:06:57'),
(3,'Settings','emailtemplate.index','Email template show','web','Y','2021-09-30 06:06:57','2021-09-30 06:06:57'),
(4,'Settings','emailtemplates.create','Email edit','web','Y','2021-09-30 06:06:57','2021-09-30 06:06:57'),
(5,'User and role management','usermanagements.index','User show','web','Y','2021-09-30 06:06:57','2021-09-30 06:06:57'),
(6,'User and role management','usermanagements.create','User create','web','Y','2021-09-30 06:06:57','2021-09-30 06:06:57'),
(7,'User and role management','usermanagements.edit','User edit','web','Y','2021-09-30 06:06:57','2021-09-30 06:06:57'),
(8,'User and role management','usermanagements.destroy','User delete','web','Y','2021-09-30 06:06:57','2021-09-30 06:06:57'),
(9,'User and role management','roles.index','Role show','web','Y','2021-09-30 06:06:57','2021-09-30 06:06:57'),
(10,'User and role management','roles.create','Role create','web','Y','2021-09-30 06:06:57','2021-09-30 06:06:57'),
(11,'User and role management','roles.edit','Role edit','web','Y','2021-09-30 06:06:57','2021-09-30 06:06:57'),
(12,'User and role management','roles.destroy','Role delete','web','Y','2021-09-30 06:06:57','2021-09-30 06:06:57');

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `role_has_permissions` */

DROP TABLE IF EXISTS `role_has_permissions`;

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `role_has_permissions` */

insert  into `role_has_permissions`(`permission_id`,`role_id`) values 
(1,1),
(2,1),
(3,1),
(4,1),
(5,1),
(6,1),
(7,1),
(8,1),
(9,1),
(10,1),
(11,1),
(12,1),
(1,2),
(2,2),
(3,2),
(4,2),
(5,2),
(6,2),
(7,2),
(9,2),
(10,2),
(11,2);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `show_while_creating_user` enum('YES','NO') DEFAULT 'YES',
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`guard_name`,`show_while_creating_user`,`created_at`,`created_by`,`updated_at`,`updated_by`,`deleted_at`,`deleted_by`) values 
(1,'Super Admin','web','YES','2021-09-30 06:02:37',NULL,'2021-09-30 06:02:37',NULL,NULL,NULL),
(2,'Admin','web','YES','2021-09-30 06:02:38',NULL,'2021-09-30 06:02:38',NULL,NULL,NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_code` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_expires_at` datetime DEFAULT NULL,
  `two_factor_code_resend_attempt` int NOT NULL DEFAULT '0',
  `logins` int NOT NULL DEFAULT '0',
  `last_login_ip` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login_at` datetime DEFAULT NULL,
  `login_attempt` int NOT NULL DEFAULT '0',
  `is_account_locked` enum('Y','N') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `account_locked_at` datetime DEFAULT NULL,
  `is_active` enum('Y','N') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_at` int DEFAULT NULL,
  `deleted_by` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`mobile`,`email`,`email_verified_at`,`password`,`avatar`,`remember_token`,`two_factor_code`,`two_factor_expires_at`,`two_factor_code_resend_attempt`,`logins`,`last_login_ip`,`last_login_at`,`login_attempt`,`is_account_locked`,`account_locked_at`,`is_active`,`created_at`,`created_by`,`updated_at`,`updated_by`,`deleted_at`,`deleted_by`) values 
(1,'Admin','9898989890','admin@mailinator.com',NULL,'$2y$10$N7kd/MtjMQXxqPUHGpPKm.2rTMnKRke.gKXo05uOnFdxpKAORiAJS','BLJCzrCer3XsDhr8U2y9dl7bk6nEVOzVkL3hNtNS.jpgkk','jYLQPwZtVnbzkDyqFyEtaVlO2RYpCFK0klJ5Fr0ggGrEP8cARsQ94MKvQxYd',NULL,'2023-06-19 13:43:35',0,108,'127.0.0.1','2023-06-27 10:33:25',0,'N',NULL,'Y','2023-06-07 09:35:31',NULL,'2023-06-27 10:33:25',NULL,NULL,NULL),
(7,'Liberty Day','9898989898','sete@mailinator.com',NULL,'$2y$10$N7kd/MtjMQXxqPUHGpPKm.2rTMnKRke.gKXo05uOnFdxpKAORiAJS',NULL,NULL,'152326','2023-06-13 06:47:30',0,1,'127.0.0.1','2023-06-13 06:37:30',0,'N',NULL,'Y','2023-06-12 09:01:04',NULL,'2023-06-13 06:37:30',NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
