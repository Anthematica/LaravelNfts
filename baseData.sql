-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: nfts
-- ------------------------------------------------------
-- Server version	8.0.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `collections`
--

DROP TABLE IF EXISTS `collections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `collections` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `author_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `collections_author_id_foreign` (`author_id`),
  CONSTRAINT `collections_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `collections`
--

LOCK TABLES `collections` WRITE;
/*!40000 ALTER TABLE `collections` DISABLE KEYS */;
INSERT INTO `collections` VALUES (1,1,'Constellation','The universe','2022-04-07 01:13:03','2022-04-07 01:13:03'),(2,2,'Rick and Morty','All related to Rick and Morty','2022-04-07 09:45:55','2022-04-07 09:45:55'),(3,4,'programming languages','All related to programing lenguage','2022-04-09 14:50:42','2022-04-09 14:50:42'),(4,4,'Planets','All related to planets','2022-04-09 14:51:13','2022-04-09 14:51:13');
/*!40000 ALTER TABLE `collections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `likes`
--

DROP TABLE IF EXISTS `likes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `likes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `likeable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `likeable_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `likes_user_id_foreign` (`user_id`),
  KEY `likes_likeable_type_likeable_id_index` (`likeable_type`,`likeable_id`),
  CONSTRAINT `likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `likes`
--

LOCK TABLES `likes` WRITE;
/*!40000 ALTER TABLE `likes` DISABLE KEYS */;
INSERT INTO `likes` VALUES (1,1,'App\\Models\\Nft',1,'2022-04-07 02:06:44','2022-04-07 02:06:44'),(4,3,'nft',2,'2022-04-07 04:27:09','2022-04-07 04:27:09'),(7,5,'nft',2,'2022-04-07 04:56:22','2022-04-07 04:56:22'),(8,5,'nft',2,'2022-04-07 04:57:58','2022-04-07 04:57:58'),(22,1,'nft',2,'2022-04-07 09:40:33','2022-04-07 09:40:33'),(25,5,'nft',4,'2022-04-07 12:58:44','2022-04-07 12:58:44'),(27,3,'nft',4,'2022-04-07 21:57:58','2022-04-07 21:57:58'),(28,3,'nft',5,'2022-04-08 00:09:34','2022-04-08 00:09:34'),(29,3,'nft',1,'2022-04-08 00:16:41','2022-04-08 00:16:41'),(30,2,'nft',5,'2022-04-08 03:22:18','2022-04-08 03:22:18'),(31,2,'nft',4,'2022-04-08 04:00:20','2022-04-08 04:00:20'),(32,2,'nft',2,'2022-04-08 04:03:19','2022-04-08 04:03:19'),(33,2,'nft',3,'2022-04-08 04:07:08','2022-04-08 04:07:08'),(36,2,'nft',1,'2022-04-08 04:12:50','2022-04-08 04:12:50'),(38,1,'nft',3,'2022-04-08 04:45:27','2022-04-08 04:45:27'),(45,1,'nft',1,'2022-04-08 04:58:32','2022-04-08 04:58:32'),(46,5,'nft',3,'2022-04-09 05:40:20','2022-04-09 05:40:20'),(47,5,'nft',5,'2022-04-09 05:40:55','2022-04-09 05:40:55'),(49,1,'nft',4,'2022-04-09 05:52:07','2022-04-09 05:52:07'),(50,1,'nft',5,'2022-04-09 05:53:23','2022-04-09 05:53:23'),(55,4,'nft',1,'2022-04-09 11:09:04','2022-04-09 11:09:04');
/*!40000 ALTER TABLE `likes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2022_04_01_014521_create_collections_table',1),(6,'2022_04_01_014522_create_nfts_table',1),(7,'2022_04_05_173649_create_likes_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nfts`
--

DROP TABLE IF EXISTS `nfts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nfts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `author_id` bigint unsigned NOT NULL,
  `owner_id` bigint unsigned NOT NULL,
  `collection_id` bigint unsigned NOT NULL,
  `img_src` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint unsigned NOT NULL,
  `royalty` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nfts_author_id_foreign` (`author_id`),
  KEY `nfts_owner_id_foreign` (`owner_id`),
  KEY `nfts_collection_id_foreign` (`collection_id`),
  CONSTRAINT `nfts_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`),
  CONSTRAINT `nfts_collection_id_foreign` FOREIGN KEY (`collection_id`) REFERENCES `collections` (`id`),
  CONSTRAINT `nfts_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nfts`
--

LOCK TABLES `nfts` WRITE;
/*!40000 ALTER TABLE `nfts` DISABLE KEYS */;
INSERT INTO `nfts` VALUES (1,1,1,1,'image/2O2NZ0XPV8jOkDGoV0g9kmuXfYt753qcxJodKnrP.jpg','Orion the hunter','The universe',200,2.00,'2022-04-07 01:13:42','2022-04-07 01:13:42'),(2,2,2,1,'image/tBdL2UWEG82OCQJB4aM62M1aprx2hBLtDqQDbPFl.jpg','Canis Mayoris','The universe',300,1.00,'2022-04-07 04:06:56','2022-04-07 04:06:56'),(3,2,2,1,'image/b9aio4zMzxO5QOw0B1xPGIcNTKPWSSZlszB54dMo.jpg','Sagitarius','All related to science',150,2.00,'2022-04-07 09:45:06','2022-04-07 09:45:06'),(4,2,2,2,'image/6BCqc2MVuOhcj2hVQhK2ZX0wNK43sE8LU6GY7aXd.jpg','Rick and Morty','All related to Rick',230,2.00,'2022-04-07 09:47:14','2022-04-07 09:47:14'),(5,5,5,1,'image/AgWKPf2ao4fVOj7vpYL8ZYkgkPg40G2gLpfrQpMx.jpg','Leo','One the best constellation, contains Rigulus inside',500,2.00,'2022-04-07 13:00:30','2022-04-07 13:00:30'),(7,4,4,4,'image/lOXl2gnSmUQ2Sxeu9emqQVUW6B70CZAM69Ts9V4R.jpg','Venus','Venus es el segundo planeta del sistema solar en orden de proximidad al Sol y el tercero en cuanto a tamaño en orden ascendente después de Mercurio y Marte',800,1.00,'2022-04-09 14:55:51','2022-04-09 14:55:51'),(9,4,4,4,'image/ezoVcq2pwM5tyi1mg6lpu1K5Hi30qUr7MdIK8o8r.jpg','Mars','​Mars is the fourth planet from the Sun – a dusty, cold, desert world with a very thin atmosphere',900,1.00,'2022-04-09 14:59:11','2022-04-09 14:59:11'),(10,1,1,4,'image/ptpiQiN3zSWDvtLvla6CKFLaxwwxbYZgkiSKU6I8.jpg','Jupiter','Júpiter es el planeta más grande del sistema solar y el quinto en orden de lejanía al Sol.​ Es un gigante gaseoso que forma parte de los denominados planetas exteriores',1000,1.00,'2022-04-09 15:01:11','2022-04-09 15:01:11'),(11,1,1,4,'image/ZiHvTTNgLkNDDlQ9Bo1ILSORblNUEl9FfytosGYU.jpg','Saturn','Saturno es el sexto planeta del sistema solar contando desde el Sol, el segundo en tamaño y masa después de Júpiter y el único con un sistema de anillos visible desde la Tierra.',800,1.00,'2022-04-09 15:02:59','2022-04-09 15:02:59'),(12,1,1,2,'image/TNf1qL3UvcigBDXmEqery9YDl6ZBMa6Q8odncPkp.jpg','Morty angry','Morty angry because of the life',500,1.00,'2022-04-09 15:06:39','2022-04-09 15:06:39'),(13,1,1,2,'image/EAXia47p7s7tZk8SC472PWlzltSmH4tjW1wfKChJ.jpg','Rick and Mory lost','Rick and morty',1200,1.00,'2022-04-09 15:09:09','2022-04-09 15:09:09'),(14,1,1,2,'image/fCXKUtaNBZZWxg6bjeMnmUaffg66UxsKlu9Lri1i.png','007 Rick and Morty','Nothing',5000,1.00,'2022-04-09 15:12:31','2022-04-09 15:12:31');
/*!40000 ALTER TABLE `nfts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Anthony Morales','fernando21112000@gmail.com',NULL,'$2y$10$UbzoeV0nRauxLwjoAuGxoOTa8ZJGjzMOIyFGKX4RbTdBIRYDQNv06',NULL,'2022-04-07 01:12:16','2022-04-07 01:12:16'),(2,'Hosmel Quintana','hosmel@gmail.com',NULL,'$2y$10$JvCmTfMvsS7aqfKjjwIGse8ltZtdn7KI7q42rq66K6p/AMv7sGeoG',NULL,'2022-04-07 04:06:17','2022-04-07 04:06:17'),(3,'Xavi Gonzales','xavi@gmail.com',NULL,'$2y$10$30m8.xm9uLRcgO52ifQ0fuXn/2rg0HjX9aNlwUR4q7EnuIkFgEP8e',NULL,'2022-04-07 04:11:56','2022-04-07 04:11:56'),(4,'Rene Nieto','rene@gmail.com',NULL,'$2y$10$1b7HrSOkIZDnVb7DMDJVnO1gvgu25YtOoHHOFa3M.dYF9ytKQ0zXu',NULL,'2022-04-07 04:28:21','2022-04-07 04:28:21'),(5,'Oscar','oscar@gmail.com',NULL,'$2y$10$9pWRKN11NgmKMSARajWtSOzaTuMvOEvw5oREHJVCjP2fzHCsXS.9y',NULL,'2022-04-07 04:49:10','2022-04-07 04:49:10');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-11 14:04:50
