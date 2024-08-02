-- MySQL dump 10.13  Distrib 8.3.0, for macos14.2 (arm64)
--
-- Host: 127.0.0.1    Database: db_eti
-- ------------------------------------------------------
-- Server version	5.7.39

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `logo` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (1,'Tekno Solusi Digital Solution',NULL,'client1.png',0,'2024-07-30 15:39:25',NULL,NULL),(2,'Sun East',NULL,'client2.png',0,'2024-07-30 15:39:25',NULL,NULL),(3,'GTP Development',NULL,'client3.png',0,'2024-07-30 15:39:25',NULL,NULL),(4,'Bogazici',NULL,'client4.png',1,'2024-07-30 15:39:25',NULL,NULL),(5,'Condor',NULL,'client5.png',1,'2024-07-30 15:39:25',NULL,NULL),(6,'Hisense',NULL,'client6.png',1,'2024-07-30 15:39:25',NULL,NULL),(7,'Safariland',NULL,'client7.png',1,'2024-07-30 15:39:25',NULL,NULL),(8,'STM',NULL,'client8.png',1,'2024-07-30 15:39:25',NULL,NULL),(9,'Drone Volt',NULL,'client9.png',1,'2024-07-30 15:39:25',NULL,NULL);
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;

--
-- Table structure for table `company_profiles`
--

DROP TABLE IF EXISTS `company_profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `company_profiles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_indo` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_profiles`
--

/*!40000 ALTER TABLE `company_profiles` DISABLE KEYS */;
INSERT INTO `company_profiles` VALUES (1,'name','Four Technologies Indonesia','Empat Teknologi Indonesia','2024-07-30 15:39:25',NULL,NULL),(2,'nickname','ETI','ETI','2024-07-30 15:39:25',NULL,NULL),(3,'legal_name','PT. Empat Teknologi Indonesia','PT. Empat Teknologi Indonesia','2024-07-30 15:39:25',NULL,NULL),(4,'vision','Leading the way as a security solution provider.','Menjadi terdepan dalam menjadi penyedia solusi keamanan.','2024-07-30 15:39:25',NULL,NULL),(5,'mission','Build quality infrastructure and effective scope of work. deliver quality, fast, economical and reliable products and services.','Membangun infrastruktur yang berkualitas dan lingkup pekerjaan yang effektif. Memberikan produk dan jasa yang berkualitas, cepat, hemat dan handal.','2024-07-30 15:39:25',NULL,NULL),(6,'website','www.etindonesia.id',NULL,'2024-07-30 15:39:25',NULL,NULL),(7,'email','admin@etindonesia.id',NULL,'2024-07-30 15:39:25',NULL,NULL),(8,'phone','6287822726644',NULL,'2024-07-30 15:39:25',NULL,NULL),(9,'address_one','Office 8 Building, floor 18A. Jl. Senopati No 18 SCBD, Jakarta 12910 - Indonesia','','2024-07-30 15:39:25',NULL,NULL),(10,'address_two','Jl. Pendidikan No 17 - Cilandak, Jakarta 12430 - Indonesia','','2024-07-30 15:39:25',NULL,NULL),(11,'about','Established in 2014, we are an international technology company engaged in various programs, especially in the field of defense and security. We develop and supply products and systems for defense, security and commercial applications. defense, security and also apply to commercial needs.','PT Empat Teknologi Indonesia berdiri di Tahun 2014, Kami adalah perusahaan teknologi Internasional yang bergerak dalam berbagai program, terutama dibidang pertahanan dan keamanan. Kami mengembangkan dan memasok produk dan sistem untuk kebutuhan pertahanan, keamanan dan juga aplikasikan untuk kebutuhan komersil.','2024-07-30 15:39:25',NULL,NULL),(12,'logo','logo.png','','2024-07-30 15:39:25',NULL,NULL),(13,'logo-secondary','logo_secondary.png','','2024-07-30 15:39:25',NULL,NULL),(14,'about_image','about_img.webp','','2024-07-30 15:39:25',NULL,NULL),(15,'productservice_image','productservice_img.jpg','','2024-07-30 15:39:25',NULL,NULL),(16,'product_description','We are proud to introduce our superior range of products and services designed to meet your needs with the highest quality. With our dedication to innovation and excellence, we are committed to providing a satisfying experience for every customer.','Kami bangga memperkenalkan rangkaian produk dan layanan unggulan kami yang dirancang untuk memenuhi kebutuhan Anda dengan kualitas terbaik. Dengan dedikasi kami terhadap inovasi dan keunggulan, kami berkomitmen untuk memberikan pengalaman yang memuaskan bagi setiap pelanggan.','2024-07-30 15:39:25',NULL,NULL),(17,'maps_one','https://maps.app.goo.gl/HR1DCsjiupb4JjM46','','2024-07-30 15:39:25',NULL,NULL),(18,'maps_two','https://maps.app.goo.gl/uES3t16z9WNRPbcp6','','2024-07-30 15:39:25',NULL,NULL),(19,'gallery_subtitle','we do magic','kami melakukan sulap','2024-07-30 15:39:25',NULL,NULL),(20,'gallery_header','CHASE YOUR PASSION','KEJAR HASRAT ANDA','2024-07-30 15:39:25',NULL,NULL);
/*!40000 ALTER TABLE `company_profiles` ENABLE KEYS */;

--
-- Table structure for table `core_values`
--

DROP TABLE IF EXISTS `core_values`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `core_values` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `nama` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `core_values`
--

/*!40000 ALTER TABLE `core_values` DISABLE KEYS */;
INSERT INTO `core_values` VALUES (1,'CUSTOMER FOCUSED','We adapt to our customers needs and respond to them with affordable, operationally proven, comprehensive solutions that offer qualitative performance advantages.','FOKUS PADA PELANGGAN','Kami beradaptasi dengan kebutuhan pelanggan kami dan meresponsnya dengan solusi yang terjangkau, terbukti secara operasional, dan komprehensif yang menawarkan keunggulan kinerja kualitatif.','2024-07-30 15:39:25',NULL,NULL),(2,'EMPLOYEE EXCELLENCE','Great people are key to achieving our vision. We employ a workforce that is motivated, team-minded, and create a dynamic atmosphere where employees can thrive and reach their highest potential. their highest potential.','KEUNGGULAN KARYAWAN','Orang-orang hebat adalah kunci untuk mencapai visi kami. Kami mempekerjakan tenaga kerja yang termotivasi, berjiwa tim, dan menciptakan suasana dinamis di mana karyawan dapat berkembang dan mencapai potensi tertinggi mereka. potensi tertinggi mereka.','2024-07-30 15:39:25',NULL,NULL),(3,'INNOVATION AND CREATIVITY','We foster an environment that nurtures innovation, creativity and leardership.','INOVASI DAN KREATIVITAS','Kami memupuk lingkungan yang memupuk inovasi, kreativitas, dan kepemimpinan.','2024-07-30 15:39:25',NULL,NULL),(4,'TEAMWORK AND SYNERGY','Personal interactions and mutual trust form the basis for achieving our goals. In our complex world, cooperation and teamwork lead to synergy.','KERJA SAMA DAN SINERGI TIM','Interaksi pribadi dan rasa saling percaya menjadi dasar untuk mencapai tujuan kami. Dalam dunia kita yang kompleks, kerja sama dan kerja sama tim menghasilkan sinergi.','2024-07-30 15:39:25',NULL,NULL),(5,'RESPONSIBILITY AND ACCOUNTABILITY','We are committed to the success of our company through personal responsibility and leadership.','TANGGUNG JAWAB DAN AKUNTABILITAS','Kami berkomitmen terhadap kesuksesan perusahaan kami melalui tanggung jawab pribadi dan kepemimpinan.','2024-07-30 15:39:25',NULL,NULL),(6,'HONESTY AND ETHICS','Honesty, respect and integrity are the key principles that guide us.','KEJUJURAN DAN ETIKA','Kejujuran, rasa hormat, dan integritas adalah prinsip-prinsip utama yang memandu kami.','2024-07-30 15:39:25',NULL,NULL);
/*!40000 ALTER TABLE `core_values` ENABLE KEYS */;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
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

/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `faqs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faqs`
--

/*!40000 ALTER TABLE `faqs` DISABLE KEYS */;
/*!40000 ALTER TABLE `faqs` ENABLE KEYS */;

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `galleries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `nama` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries`
--

/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_100000_create_password_reset_tokens_table',1),(2,'2019_08_19_000000_create_failed_jobs_table',1),(3,'2019_12_14_000001_create_personal_access_tokens_table',1),(4,'2024_02_08_013803_create_company_profiles_table',1),(5,'2024_02_08_013940_create_clients_table',1),(6,'2024_02_08_013955_create_core_values_table',1),(7,'2024_02_08_014014_create_products_table',1),(8,'2024_02_08_014015_create_product_categories_table',1),(9,'2024_02_08_014025_create_faqs_table',1),(10,'2024_02_23_221909_create_permission_tables',1),(11,'2024_02_23_222408_create_users_table',1),(12,'2024_05_10_233347_create_portfolios_table',1),(13,'2024_05_10_233352_create_news_table',1),(14,'2024_06_18_091108_create_product_types_table',1),(15,'2024_06_18_091337_create_product_type_galleries_table',1),(16,'2024_06_18_091344_create_product_category_galleries_table',1),(17,'2024_07_14_161737_create_galleries_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

/*!40000 ALTER TABLE `news` DISABLE KEYS */;
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'view_users','web','2024-07-30 15:39:25','2024-07-30 15:39:25'),(2,'create_users','web','2024-07-30 15:39:25','2024-07-30 15:39:25'),(3,'edit_users','web','2024-07-30 15:39:25','2024-07-30 15:39:25'),(4,'delete_users','web','2024-07-30 15:39:25','2024-07-30 15:39:25');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
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

/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

--
-- Table structure for table `portfolios`
--

DROP TABLE IF EXISTS `portfolios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `portfolios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `description_two` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `portfolios`
--

/*!40000 ALTER TABLE `portfolios` DISABLE KEYS */;
/*!40000 ALTER TABLE `portfolios` ENABLE KEYS */;

--
-- Table structure for table `product_categories`
--

DROP TABLE IF EXISTS `product_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) unsigned NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `nama` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_categories_product_id_foreign` (`product_id`),
  CONSTRAINT `product_categories_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_categories`
--

/*!40000 ALTER TABLE `product_categories` DISABLE KEYS */;
INSERT INTO `product_categories` VALUES (1,1,'Soldier Supplies','Explore our extensive catalog of soldier supplies, meticulously curated to meet the rigorous demands of military life. From durable combat uniforms and footwear engineered for performance to advanced tactical gear designed for optimal functionality, our products are crafted with precision and tested for reliability in the field.','Perlengkapan Prajurit','Jelajahi katalog lengkap perlengkapan prajurit kami, yang dikuratori dengan cermat untuk memenuhi tuntutan kehidupan militer yang ketat. Dari seragam tempur tahan lama dan alas kaki yang dirancang untuk kinerja hingga perlengkapan taktis canggih yang dirancang untuk fungsionalitas optimal, produk kami dibuat dengan presisi dan diuji keandalannya di lapangan.','category1.png','2024-07-30 15:39:26',NULL,NULL),(2,1,'Warfare Technology','','Teknologi Peperangan','','category2.jpg','2024-07-30 15:39:26',NULL,NULL),(3,1,'Electro Optical','','Elektro Optik','','category3.png','2024-07-30 15:39:26',NULL,NULL),(4,1,'Digital Combat Systems','','Sistem Tempur Digital','','category4.png','2024-07-30 15:39:26',NULL,NULL),(5,2,'Hospitality Service','','Layanan Perhotelan','','category5.png','2024-07-30 15:39:26',NULL,NULL),(6,2,'Fivto STB','','Fivto STB','','category6.png','2024-07-30 15:39:26',NULL,NULL);
/*!40000 ALTER TABLE `product_categories` ENABLE KEYS */;

--
-- Table structure for table `product_category_galleries`
--

DROP TABLE IF EXISTS `product_category_galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_category_galleries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `nama` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_category_galleries_category_id_foreign` (`category_id`),
  CONSTRAINT `product_category_galleries_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `product_categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_category_galleries`
--

/*!40000 ALTER TABLE `product_category_galleries` DISABLE KEYS */;
INSERT INTO `product_category_galleries` VALUES (1,1,'SOLDIER SUPPLIES - UNIFORMS & BATTLEFIELD PROTECTION','ETI is a national asset that will contribute to the needs of the forces with its capability to complete military operations. As much as possible, in line with military strategy expectations and user needs. Your mission is our mission, your protection choice is our responsibility. By producing comfortable tactical gear while prioritizing military defense standards specifically.','PERSEDIAAN TENTARA - SERAGAM & PERLINDUNGAN MEDAN PERANG','ETI merupakan aset nasional yang akan memberikan kontribusi terhadap kebutuhan kekuatan dengan kemampuannya dalam menyelesaikan operasi militer. Sebisa mungkin sejalan dengan ekspektasi strategi militer dan kebutuhan pengguna. Misi Anda adalah misi kami, pilihan perlindungan Anda adalah tanggung jawab kami. Dengan memproduksi perlengkapan taktis yang nyaman dengan tetap mengedepankan standar pertahanan militer secara khusus.','ctgGallery1.png','2024-07-30 15:39:26',NULL,NULL),(2,3,'DUAL LASER POINTER & ILLUMINATOR (DLIRIL MR)','<p>DLIRIL MR combines four unique functions in one body: visible red laser, infrared (IR) laser, infrared (IR) illuminator, and visible tactical flashlight. The tactical flashlight has an extremely strong illumination power of 500 Lumens. DLIRIL MR comes with high or low power modes.</p><ul><li>4 Technologies in One Body Including visible red laser, infrared (IR) laser, infrared (IR) illuminator, and visible tactical flashlight</li><li>Aligned Visible and Infrared Lasers Lasers aligned for the most precise use</li><li>User-Activated Strobe Function Offers a strobe feature to disorient enemies</li><li>Compact and Functional Design Compact body with functional design to meet the demands of the most elite users</li><li>Robust and Reliable Body Design Robust and reliable design to maintain functionality, usability, ergonomics, and performance in harsh conditions</li></ul>','POINTER & ILLUMINATOR LASER GANDA (DLIRIL MR)','<p>DLIRIL MR menggabungkan empat fungsi unik dalam satu tubuh: laser merah tampak, laser inframerah (IR), iluminator inframerah (IR), dan senter taktis tampak. Senter taktis memiliki kekuatan penerangan yang sangat kuat sebesar 500 Lumens. DLIRIL MR hadir dengan mode daya tinggi atau rendah.</p><ul><li>4 Teknologi dalam Satu Bodi Termasuk laser merah tampak, laser inframerah (IR), iluminator inframerah (IR), dan senter taktis tampak</li><li>Laser Tampak dan Inframerah yang Disejajarkan Laser yang disejajarkan untuk penggunaan yang paling tepat</li><li>Fungsi Strobo yang Diaktifkan Pengguna Menawarkan fitur strobo untuk membingungkan musuh</li><li>Desain Ringkas dan Fungsional Bodi yang ringkas dengan desain fungsional untuk memenuhi kebutuhan pengguna yang paling elit</li><li>Desain Bodi yang Kuat dan Andal Desain yang kuat dan andal untuk mempertahankan fungsionalitas, kegunaan, ergonomis, dan kinerja dalam kondisi yang keras</li></ul>','ctgGallery2.png','2024-07-30 15:39:26',NULL,NULL),(3,3,'MONOCULAR LASER RANGEFINDER (MLRF-S)','<p>MLRF-S is designed to enhance your vision and provide monocular power in a laser rangefinder. It is a robust and modern laser rangefinder integrated with premium glass optics. It has a range of up to 2500+ meters on reflective targets with a Class I eye-safe laser and optimized beam divergence for maximum reliability on small targets.</p><ul><li>High-Quality Optical Components High-quality optics for outstanding performance in low light conditions</li><li>High Light Transmission Excellent image quality with high light transmission across the spectral range</li><li>Lightweight and Compact Design Lightweight and compact design for ease of use</li><li>Accurate and Reliable High-precision laser technology for the most accurate and reliable results</li><li>Eye-Safe Operation Equipped with Class I eye-safe laser according to IEC 60825-1</li></ul>','PENCARI LASER MONOKULAR (MLRF-S)','<p>MLRF-S dirancang untuk meningkatkan penglihatan Anda dan memberikan kekuatan monokuler dalam pengintai laser. Ini adalah pengintai laser yang kuat dan modern yang terintegrasi dengan optik kaca premium. Ia memiliki jangkauan hingga 2500+ meter pada target reflektif dengan laser Kelas I yang aman untuk mata dan divergensi sinar yang dioptimalkan untuk keandalan maksimum pada target kecil.</p><ul><li>Komponen Optik Berkualitas Tinggi Optik berkualitas tinggi untuk performa yang luar biasa dalam kondisi cahaya redup</li><li>Transmisi Cahaya Tinggi Kualitas gambar yang sangat baik dengan transmisi cahaya tinggi di seluruh rentang spektral</li><li>Desain Ringan dan Ringkas Desain yang ringan dan ringkas untuk kemudahan penggunaan</li><li>Akurat dan Andal Teknologi laser presisi tinggi untuk hasil yang paling akurat dan andal</li><li>Pengoperasian yang Aman bagi Mata Dilengkapi dengan laser yang aman bagi mata Kelas I menurut IEC 60825-1</li></ul>','ctgGallery3.png','2024-07-30 15:39:26',NULL,NULL),(4,3,'ELECTRO OPTICAL - TACTICAL FLASHLIGHT AND IR/VIS LASER POINTER (PLF)','<p>PLF is designed as a low-profile, functional design to meet the demands of the most elite users. Equipped with 500 Lumens white LED technology, visible red laser, and infrared laser. It is one of the most compact devices in its class, combining these three technologies.</p><ul><li>Low-Profile and Functional Design Designed with a low profile and functional design to meet the demands of the most elite users</li><li>3 Technologies in One Body Featuring 500 Lumens white LED technology, visible red laser, and infrared laser</li><li>User-Activated Strobe Function Offers a strobe feature to disorient enemies</li><li>Homogeneous Light Distribution Offers homogeneous light distribution for the best focus</li><li>Robust and Reliable Body Design Robust and reliable design to maintain functionality, usability, ergonomics, and performance in harsh conditions</li></ul>','ELEKTRO OPTIK - SENTER TAKTIS DAN IR/VIS LASER POINTER (PLF)','<p>PLF dirancang sebagai desain sederhana dan fungsional untuk memenuhi permintaan sebagian besar pengguna elit. Dilengkapi dengan teknologi LED putih 500 Lumens, laser merah tampak, dan laser inframerah. Ini adalah salah satu perangkat paling ringkas di kelasnya, yang menggabungkan ketiga teknologi tersebut.</p><ul><li>Desain yang Rendah Profil dan Fungsional Dirancang dengan desain yang rendah profil dan fungsional untuk memenuhi permintaan pengguna yang paling elit</li><li>3 Teknologi dalam Satu Badan Menampilkan teknologi LED putih 500 Lumens, laser merah yang terlihat, dan laser inframerah</li><li>Fungsi Strobo yang Diaktifkan Pengguna Menawarkan fitur strobo untuk membingungkan musuh</li><li>Distribusi Cahaya Homogen Menawarkan distribusi cahaya yang homogen untuk fokus terbaik</li><li>Desain Bodi yang Kuat dan Andal Desain yang kuat dan andal untuk mempertahankan fungsionalitas, kegunaan, ergonomis, dan kinerja dalam kondisi yang keras</li></ul>','ctgGallery4.png','2024-07-30 15:39:26',NULL,NULL),(5,6,'ANDROID HOSPITALITY CONTENT MANAGEMENT SYSTEM','<ul><li>FivTo Play is a cloud-based customized system that maximizes your current content for customer experience, making it smart, easy to use, and cost-effective.</li><li>Capable of UPGRADING/CHANGING non-smart TVs to Android TVs with Hospitality Content Management System</li><li>As a Business, FivTo Play is a MANAGED SERVICE that can generate RECURRING REVENUE for Companies.</li><li>Customizable and adjustable according to the needs and demands of the Hospitality Industry</li><li>Helps reduce hotel property capital expenditure through a monthly subscription plan.</li><li>Supports local and international TV channels (89 channels in total) &amp; OTT Media Services (Netflix, Disney+, HBO GO, etc.)</li><li>Back-End Data Integration with local PMS through API.</li><li>Hotel Guest Data Analytics and management through FivTo Play server.</li></ul>','SISTEM MANAJEMEN KONTEN PERHOTELAN ANDROID','<ul><li>FivTo Play adalah sistem khusus berbasis cloud yang memaksimalkan konten Anda saat ini untuk pengalaman pelanggan, menjadikannya cerdas, mudah digunakan, dan hemat biaya.</li><li>Mampu MENINGKATKAN/MENGUBAH TV non-smart TV ke TV Android dengan Sistem Manajemen Konten Perhotelan</li><li>Sebagai Bisnis, FivTo Play adalah LAYANAN TERKELOLA yang dapat menghasilkan PENDAPATAN BERULANG untuk Perusahaan.</li><li>Dapat disesuaikan dan disesuaikan dengan kebutuhan dan permintaan Industri Perhotelan</li><li>Membantu mengurangi belanja modal properti hotel melalui paket berlangganan bulanan.</li><li>Mendukung saluran TV lokal dan internasional (total 89 saluran) &amp; Layanan Media OTT (Netflix, Disney+, HBO GO, dll.)</li><li>Integrasi Data Back-End dengan PMS lokal melalui API.</li><li>Analisis dan manajemen data tamu hotel melalui server FivTo Play.</li></ul>','ctgGallery5.png','2024-07-30 15:39:26',NULL,NULL);
/*!40000 ALTER TABLE `product_category_galleries` ENABLE KEYS */;

--
-- Table structure for table `product_type_galleries`
--

DROP TABLE IF EXISTS `product_type_galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_type_galleries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `nama` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_type_galleries_type_id_foreign` (`type_id`),
  CONSTRAINT `product_type_galleries_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `product_types` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_type_galleries`
--

/*!40000 ALTER TABLE `product_type_galleries` DISABLE KEYS */;
INSERT INTO `product_type_galleries` VALUES (1,1,'ATTACK DRONE','<p>Combat Proven Rotary Wing Loitering Munition System</p><p>KARGU is a portable rotary wing loitering munition system designed to provide tactical ISR and precision strike capabilities for ground forces. KARGU can perform missions planned on the ground with STM control station software. This platform is capable of performing precision strikes with low signature for beyond line of sight targets.</p><ul><li>Combat Proven</li><li>Vertical Takeoff and Landing</li><li>Fast preparation time, less than 1 minute.</li><li>Day &amp; Night Mission Capability</li><li>Beyond Line of sight Precision Strike with minimum collateral damage</li><li>Low RCS (Radar Cross Section) Platform Design</li><li>Mulitple Warhead Options</li><li>High perfomance navigation and flight control system</li><li>Operable by single personnel</li><li>Mission abort and return home capabilities</li><li>Promitixy fuse</li><li>Automatic target recognition system</li></ul>','DRONE SERANGAN','<p>Sistem Munisi Rotary Wing Loitering yang Telah Terbukti dalam Pertempuran</p><p>KARGU adalah sistem amunisi rotary wing loitering portabel yang dirancang untuk memberikan ISR taktis dan kemampuan serangan presisi untuk pasukan darat. KARGU dapat melakukan misi yang direncanakan di darat dengan perangkat lunak stasiun kendali STM. Platform ini mampu melakukan serangan presisi dengan tanda tangan rendah untuk target di luar garis pandang.</p><ul><li>Terbukti dalam Pertempuran</li><li>Lepas Landas dan Pendaratan Vertikal</li><li>Waktu persiapan yang cepat, kurang dari 1 menit.</li><li>Kemampuan Misi Siang &amp; Malam</li><li>Serangan presisi di luar garis pandang dengan kerusakan jaminan minimum</li><li>Desain Platform RCS (Penampang Radar) Rendah</li><li>Opsi Hulu Ledak Mulitple</li><li>Sistem navigasi dan kontrol penerbangan berkinerja tinggi</li><li>Dapat dioperasikan oleh satu personel</li><li>Kemampuan membatalkan misi dan kembali ke rumah</li><li>Sekering promitixy</li><li>Sistem pengenalan target otomatis</li></ul>','typeGallery1.png','2024-07-30 15:39:26',NULL,NULL),(2,1,'MORTAR DRONE','<p>Multi-Rotor Combat UAS with Mortar Payload</p><p>Boyga is designed to be used in tactical areas to drop 81mm mortars onto targets from the air. Boyga carries 81mm mortars and drops them onto targets selected by the user. It has a ballistic estimation algorithm that helps the user see where the mortar will hit the ground. The user can drop the mortar manually after seeing the target point indicator.</p><ul><li>Vertical take-off and landing</li><li>Quick preparation time, less than 1 minute</li><li>Beyond line of sight attack</li><li>Beyond line of sight attack</li><li>Low Radar Cross Section (RCS) platform design</li><li>Optical target tracking</li><li>High-performance flight control and navigation system</li><li>Operable by a single personnel</li><li>Mission abort and return-to-base capability</li><li>Ballistic position estimation algorithm and coordinated attack</li></ul>','DRONE MORTIR','<p>UAS Tempur Multi-Rotor dengan Muatan Mortir</p><p>Boyga dirancang untuk digunakan di area taktis untuk menjatuhkan mortir 81mm ke target dari udara. Boyga membawa mortir 81mm dan menjatuhkannya ke target yang dipilih oleh pengguna. Ia memiliki algoritma estimasi balistik yang membantu pengguna melihat di mana mortir akan menghantam tanah. Pengguna dapat menjatuhkan mortir secara manual setelah melihat indikator titik target.</p><ul><li>Lepas landas dan pendaratan vertikal</li><li>Waktu persiapan yang cepat, kurang dari 1 menit</li><li>Serangan di luar garis pandang</li><li>Serangan di luar garis pandang</li><li>Desain platform Penampang Radar Rendah (RCS)</li><li>Pelacakan target optik</li><li>Sistem kontrol penerbangan dan navigasi berkinerja tinggi</li><li>Dapat dioperasikan oleh satu personel</li><li>Kemampuan membatalkan misi dan kembali ke pangkalan</li><li>Algoritme estimasi posisi balistik dan serangan terkoordinasi</li></ul>','typeGallery2.png','2024-07-30 15:39:26',NULL,NULL),(3,1,'SURVEILLANCE DRONE','<p>Multi-Rotor UAS for Tactical Surveillance and Reconnaissance</p><p>TOGAN is a multi-rotor UAS designed to carry on tactical surveillance and reconnaissance missions. TOGAN incorporates a payload using a 30x zoom lens, enabling imaging of distant targets and threats. TOGAN employs advanced image processing capabilities, enabling the detection and classification of threats that are difficult to spot with human eye. TOGAN is capable of tracking and following fast moving objects.</p><ul><li>Vertical takeoff and landing</li><li>Fast prepation time (less than 1 minute)</li><li>Day &amp; night mission capability</li><li>Low RCS (Radar Cross Section) platform design</li><li>High perfomance navigation and flight control system</li><li>Operable by single personnel</li><li>Mission planning and autonomous mission execution</li><li>Mission abort and return home capabilities</li><li>30x optical zoom capability</li><li>Advanced image processing capabilities</li><li>Ability to follow moving targets</li><li>Target coordinate estimation</li><li>Interopability with KARGU, aiding recognition of threats &amp; targets and enhanching tactical situational awarness</li><li>Automatic mission take-over capability, enabling uninterrupted surveillance</li><li>Ability to take off from land</li></ul>','DRONE PENGINTAI','<p>UAS Multi-Rotor untuk Pengawasan dan Pengintaian Taktis</p><p>TOGAN adalah UAS multi-rotor yang dirancang untuk menjalankan misi pengawasan dan pengintaian taktis. TOGAN menggabungkan muatan menggunakan lensa zoom 30x, memungkinkan pencitraan target dan ancaman yang jauh. TOGAN menggunakan kemampuan pemrosesan gambar yang canggih, memungkinkan deteksi dan klasifikasi ancaman yang sulit dikenali dengan mata manusia. TOGAN mampu melacak dan mengikuti objek yang bergerak cepat.</p><ul><li>Lepas landas dan mendarat secara vertikal</li><li>Waktu persiapan yang cepat (kurang dari 1 menit)</li><li>Kemampuan misi siang &amp; malam</li><li>Desain platform RCS (Radar Cross Section) yang rendah</li><li>Sistem navigasi dan kontrol penerbangan berkinerja tinggi</li><li>Dapat dioperasikan oleh satu personel</li><li>Perencanaan misi dan pelaksanaan misi otonom</li><li>Kemampuan menggagalkan misi dan kembali ke rumah</li><li>Kemampuan zoom optik 30x</li><li>Kemampuan pemrosesan gambar tingkat lanjut</li><li>Kemampuan untuk mengikuti target yang bergerak</li><li>Estimasi koordinat target</li><li>Interopabilitas dengan KARGU, membantu mengenali ancaman &amp; target dan meningkatkan kesadaran situasional taktis</li><li>Kemampuan pengambilalihan misi secara otomatis, memungkinkan pengawasan tanpa gangguan</li><li>Kemampuan untuk lepas landas dari darat</li></ul>','typeGallery3.png','2024-07-30 15:39:26',NULL,NULL),(4,2,'MANPACK METER','<p>MERTER Man-Pack Portable Electronic Attack System disrupts target communication from a distance using modern techniques in the VHF band. MERTER provides versatile protection, from patrols to wider ranges. The system facilitates cooperative electronic warfare and simultaneous RF detection and jamming techniques. Control via PC or tablet allows monitoring and adjustment, with power options from rechargeable batteries or AC input. MERTER, the modern human-pack electronic attack system, is designed to withstand tactical field conditions. The system is equipped with infrastructure to meet the comprehensive needs for next-generation cognitive electronic warfare. Using a wideband RF receiver, the system detects multiple targets with diverse features and applies reactive electronic attack techniques in dynamic scenarios.</p><ul><li>Continuous Look &amp; Jamming Techniques</li><li>Signal Detection, Jamming &amp; Spoofing Capability</li><li>Simultaneous Application of Different Jamming Techniques</li><li>Intelligent Target-Specific Electronic Attack</li><li>Options for Omnidirectional &amp; Directional Antenna Use</li><li>Simultaneous Reactive Jamming Capability with Multiple Synchronized EA Systems</li></ul>','METER MANPACK','<p>Sistem Serangan Elektronik Portabel MERTER Man-Pack mengganggu komunikasi target dari jarak jauh menggunakan teknik modern dalam pita VHF. MERTER memberikan perlindungan serbaguna, mulai dari patroli hingga jangkauan yang lebih luas. Sistem ini memfasilitasi peperangan elektronik kooperatif serta teknik deteksi dan jamming RF secara simultan. Kontrol melalui PC atau tablet memungkinkan pemantauan dan penyesuaian, dengan opsi daya dari baterai yang dapat diisi ulang atau input AC. MERTER, sistem serangan elektronik paket manusia modern, dirancang untuk tahan terhadap kondisi lapangan taktis. Sistem ini dilengkapi dengan infrastruktur untuk memenuhi kebutuhan komprehensif peperangan elektronik kognitif generasi mendatang. Dengan menggunakan penerima RF pita lebar, sistem mendeteksi banyak target dengan beragam fitur dan menerapkan teknik serangan elektronik reaktif dalam skenario dinamis.</p><ul><li>Teknik Pengamatan &amp; Gangguan Berkelanjutan</li><li>Kemampuan Deteksi Sinyal, Gangguan &amp; Spoofing</li><li>Penerapan Berbagai Teknik Jamming Secara Bersamaan</li><li>Serangan Elektronik Cerdas Khusus Target Tertentu</li><li>Opsi untuk Penggunaan Antena Omnidirectional &amp; Directional</li><li>Kemampuan Gangguan Reaktif Secara Simultan dengan Beberapa Sistem EA Tersinkronisasi</li></ul>','typeGallery4.jpg','2024-07-30 15:39:26',NULL,NULL),(5,2,'STATIC – ILTER J350','<p>ILTER J350, designed by Bogazici, comes as an advanced solution in the field of Drone Detection and Neutralization Systems, meticulously crafted to protect critical infrastructure and uphold security in various environments. With a diverse array of system components and advanced technical features, ILTER J350 is unmatched in its capacity to detect and swiftly counter unauthorized drone activity.</p><ul><li>Variable output power up to 800 Watts.</li><li>Protocol-based detection technology capable of identifying up to 30 threats.</li><li>Versatile operation in automatic or manual modes.</li><li>Centralized command control of all sensors and effectors.</li><li>Quick setup in less than 5 minutes with only one operator.</li><li>24-hour continuous operation in any weather conditions.</li></ul>','STATIC – ILTER J350','<p>ILTER J350, dirancang oleh Bogazici, hadir sebagai solusi canggih di bidang Sistem Deteksi dan Netralisasi Drone, dibuat dengan cermat untuk melindungi infrastruktur penting dan menjunjung keamanan di berbagai lingkungan. Dengan beragam komponen sistem dan fitur teknis canggih, ILTER J350 tidak tertandingi dalam kapasitasnya untuk mendeteksi dan dengan cepat melawan aktivitas drone yang tidak sah.</p><ul><li>Daya output variabel hingga 800 Watt.</li><li>Teknologi deteksi berbasis protokol yang mampu mengidentifikasi hingga 30 ancaman.</li><li>Pengoperasian serbaguna dalam mode otomatis atau manual.</li><li>Kontrol perintah terpusat dari semua sensor dan efektor.</li><li>Penyiapan cepat dalam waktu kurang dari 5 menit dengan hanya satu operator.</li><li>Pengoperasian terus menerus selama 24 jam dalam kondisi cuaca apa pun.</li></ul>','typeGallery5.png','2024-07-30 15:39:26',NULL,NULL),(6,3,'ACADEMY','<ul><li>With a three-stage learning program, basic cybersecurity components are learned step-by-step and skills are gradually developed.</li><li>Guided and detailed information and explanations are provided, contributing to the experience and development process of experts.</li></ul>','AKADEMI','<ul><li>Dengan program pembelajaran tiga tahap, komponen keamanan siber dasar dipelajari selangkah demi selangkah dan keterampilan dikembangkan secara bertahap.</li><li>Informasi dan penjelasan yang dipandu dan terperinci disediakan, memberikan kontribusi pada pengalaman dan proses pengembangan para ahli.</li></ul>','typeGallery6.png','2024-07-30 15:39:26',NULL,NULL),(7,3,'SCENARIO','<ul><li>Realistic and immersive scenarios allow theoretical knowledge to be put into practice.</li><li>Various scenarios suitable for different skill levels appeal to cybersecurity experts of all levels.</li><li>Creating an environment to experience real-world security challenges, test competencies, and develop analytical thinking skills.</li></ul>','SKENARIO','<ul><li>Skenario yang realistis dan mendalam memungkinkan pengetahuan teoretis untuk dipraktikkan.</li><li>Berbagai skenario yang cocok untuk berbagai tingkat keahlian menarik bagi para ahli keamanan siber dari semua tingkatan.</li><li>Menciptakan lingkungan untuk merasakan tantangan keamanan dunia nyata, menguji kompetensi, dan mengembangkan keterampilan berpikir analitis.</li></ul>','typeGallery7.png','2024-07-30 15:39:26',NULL,NULL),(8,3,'LABORATORY','<ul><li>To specialize in certain cybersecurity fields, laboratories offer focused modules.</li><li>Knowledge and skills are tested in penetration testing, incident response, network security, and more.</li><li>Challenging and practical exercises reinforce theoretical knowledge and enhance cybersecurity readiness.</li></ul>','LABORATORIUM','<ul><li>Untuk mengkhususkan diri dalam bidang keamanan siber tertentu, laboratorium menawarkan modul-modul yang terfokus.</li><li>Pengetahuan dan keterampilan diuji dalam pengujian penetrasi, respons insiden, keamanan jaringan, dan banyak lagi.</li><li>Latihan yang menantang dan praktis memperkuat pengetahuan teoretis dan meningkatkan kesiapan keamanan siber.</li></ul>','typeGallery8.png','2024-07-30 15:39:26',NULL,NULL),(9,3,'CYBER RANGE','<ul><li>The Cyber Range area, which includes advanced technology, offers opportunities to test capabilities on dynamic platforms resembling real-world systems and networks.</li><li>Realistic scenarios and live exercises allow experts to experience real-world pressure and learn how to protect critical assets.</li><li>In an environment where vulnerabilities and malware specifically prepared for scenarios will be detected, experts cybersecurity knowledge is maximized.</li><li>Red and blue teams are given the opportunity to compete against each other in the same environment and real cyber-attack simulations are created.</li><li>With the Cyber Range area, the teamwork and communication skills of experts are enhanced.</li></ul>','JANGKAUAN SIBER','<ul><li>Area Cyber Range, yang mencakup teknologi canggih, menawarkan kesempatan untuk menguji kemampuan pada platform dinamis yang menyerupai sistem dan jaringan dunia nyata.</li><li>Skenario realistis dan latihan langsung memungkinkan para ahli untuk mengalami tekanan dunia nyata dan mempelajari cara melindungi aset penting.</li><li>Dalam lingkungan di mana kerentanan dan malware yang secara khusus dipersiapkan untuk skenario akan terdeteksi, pengetahuan keamanan siber para ahli akan dimaksimalkan.</li><li>Tim merah dan biru diberi kesempatan untuk bersaing satu sama lain di lingkungan yang sama dan simulasi serangan siber yang nyata dibuat.</li><li>Dengan area Cyber Range, kerja sama tim dan keterampilan komunikasi para ahli ditingkatkan.</li></ul>','typeGallery9.png','2024-07-30 15:39:26',NULL,NULL),(10,4,'Rectangular Pool Frame','','Bingkai Kolam Renang Persegi Panjang','','typeGallery10.png','2024-07-30 15:39:26',NULL,NULL),(11,4,'Robotic Pool Cleaner','','Pembersih Kolam Renang Robotik','','typeGallery11.png','2024-07-30 15:39:26',NULL,NULL),(12,4,'Filters','','Filter','','typeGallery12.png','2024-07-30 15:39:26',NULL,NULL),(13,4,'Pumps','','Pompa','','typeGallery13.png','2024-07-30 15:39:26',NULL,NULL),(14,4,'Smart Pool Analyzer','','Penganalisis Kolam Renang Cerdas','','typeGallery14.png','2024-07-30 15:39:26',NULL,NULL),(15,5,'Interactive Digital Board','','Papan Digital Interaktif','','typeGallery15.png','2024-07-30 15:39:26',NULL,NULL),(16,5,'Video Wall','','Dinding Video','','typeGallery16.png','2024-07-30 15:39:26',NULL,NULL),(17,5,'Digital Signage','','Papan Tanda Digital','','typeGallery17.png','2024-07-30 15:39:26',NULL,NULL),(18,5,'All in one LED Display','','Semua dalam satu Tampilan LED','','typeGallery18.png','2024-07-30 15:39:26',NULL,NULL),(19,5,'Hospitality TV','','TV Perhotelan','','typeGallery19.png','2024-07-30 15:39:26',NULL,NULL),(20,6,'AC Products','','Produk AC','','typeGallery20.png','2024-07-30 15:39:26',NULL,NULL),(21,6,'Washing Machine','','Mesin Cuci','','typeGallery21.png','2024-07-30 15:39:26',NULL,NULL),(22,6,'Home Kitchen Appliances','','Peralatan Dapur Rumah Tangga','','typeGallery22.png','2024-07-30 15:39:26',NULL,NULL),(23,6,'Home Entertainment System','','Sistem Hiburan Rumah','','typeGallery23.png','2024-07-30 15:39:26',NULL,NULL),(24,6,'Vacuum Cleaners','','Penyedot Debu','','typeGallery24.png','2024-07-30 15:39:26',NULL,NULL),(25,7,'Chinese Cooking Equipment','','Peralatan Memasak Cina','','typeGallery25.png','2024-07-30 15:39:26',NULL,NULL),(26,7,'Pizza Oven','','Oven Pizza','','typeGallery26.png','2024-07-30 15:39:26',NULL,NULL),(27,7,'Griddle','','Wajan','','typeGallery27.png','2024-07-30 15:39:26',NULL,NULL),(28,7,'Commercial Stove','','Kompor Komersial','','typeGallery28.png','2024-07-30 15:39:26',NULL,NULL),(29,7,'Chiller & Freezer','','Pendingin & Pembeku','','typeGallery29.png','2024-07-30 15:39:26',NULL,NULL),(30,7,'Portable Induction Cooker','','Kompor Induksi Portabel','','typeGallery30.png','2024-07-30 15:39:26',NULL,NULL),(31,7,'Electric Deck Ovens','','Oven Dek Listrik','','typeGallery31.png','2024-07-30 15:39:26',NULL,NULL),(32,7,'Display & Showcase','','Pajangan & Etalase','','typeGallery32.png','2024-07-30 15:39:26',NULL,NULL),(33,7,'Slush Machine','','Mesin Lumpur','','typeGallery33.png','2024-07-30 15:39:26',NULL,NULL),(34,7,'Electric Proofer Cabinet','','Lemari Proofer Listrik','','typeGallery34.png','2024-07-30 15:39:26',NULL,NULL),(35,7,'Juice Dispenser','','Dispenser Jus','','typeGallery35.png','2024-07-30 15:39:26',NULL,NULL),(36,7,'Commercial Blender','','Blender Komersial','','typeGallery36.png','2024-07-30 15:39:26',NULL,NULL),(37,7,'Pastry Equipment','','Peralatan Kue','','typeGallery37.png','2024-07-30 15:39:26',NULL,NULL),(38,7,'Deep Fryer','','Penggorengan','','typeGallery38.png','2024-07-30 15:39:26',NULL,NULL),(39,7,'Wine Cooler','','Pendingin Anggur','','typeGallery39.png','2024-07-30 15:39:26',NULL,NULL);
/*!40000 ALTER TABLE `product_type_galleries` ENABLE KEYS */;

--
-- Table structure for table `product_types`
--

DROP TABLE IF EXISTS `product_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `nama` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_types_category_id_foreign` (`category_id`),
  CONSTRAINT `product_types_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `product_categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_types`
--

/*!40000 ALTER TABLE `product_types` DISABLE KEYS */;
INSERT INTO `product_types` VALUES (1,2,'UAV Systems','','Sistem UAV','','type1.png','2024-07-30 15:39:26',NULL,NULL),(2,2,'Anti-Drone','','Anti-Drone','','type2.png','2024-07-30 15:39:26',NULL,NULL),(3,2,'Cyber Security','','Cyber Security','','type3.png','2024-07-30 15:39:26',NULL,NULL),(4,5,'Pool','','Kolam Renang','','type4.png','2024-07-30 15:39:26',NULL,NULL),(5,5,'Display','','Tampilan','','type5.png','2024-07-30 15:39:26',NULL,NULL),(6,5,'Electronic','','Elektronik','','type6.png','2024-07-30 15:39:26',NULL,NULL),(7,5,'Kitchen','','Dapur','','type7.png','2024-07-30 15:39:26',NULL,NULL);
/*!40000 ALTER TABLE `product_types` ENABLE KEYS */;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `nama` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Defense','','Pertahanan','','product1.png','2024-07-30 15:39:26',NULL,NULL),(2,'Commercial','','Komersial','','product2.png','2024-07-30 15:39:26',NULL,NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (1,2);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'superadmin','web','2024-07-30 15:39:25','2024-07-30 15:39:25'),(2,'admin','web','2024-07-30 15:39:25','2024-07-30 15:39:25');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Super Admin','123721532223','Pasuruan','superadmin@gmail.com',NULL,'$2y$12$0JDkQ4rjfPRgqJVi9ZREruIWJ0YofAPGGsSx6ozw2M9Kd81g0zTXC',NULL,'2024-07-30 15:39:25',NULL,NULL),(2,2,'Admin','123721532233','Jakarta','admin@gmail.com',NULL,'$2y$12$7BDPcmt4N/DWYn.I.SHB6e3SE6s91WcknDe1EkcYrujT4uKhuPeDG',NULL,'2024-07-30 15:39:26',NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

--
-- Dumping routines for database 'db_eti'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-08-02 16:54:32
