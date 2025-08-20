-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: isste_db
-- ------------------------------------------------------
-- Server version	8.0.39

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!50503 SET NAMES utf8 */
;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */
;
/*!40103 SET TIME_ZONE='+00:00' */
;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */
;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */
;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */
;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */
;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */
;
/*!50503 SET character_set_client = utf8mb4 */
;
CREATE TABLE `comments` (
    `comments_id` int NOT NULL AUTO_INCREMENT,
    `user_id` int NOT NULL,
    `resource_id` int DEFAULT NULL,
    `subject_id` int DEFAULT NULL,
    `text` varchar(250) NOT NULL,
    `created_at` datetime DEFAULT(CURRENT_TIMESTAMP),
    PRIMARY KEY (`comments_id`),
    KEY `user_id` (`user_id`),
    KEY `resource_id` (`resource_id`),
    KEY `subject_id` (`subject_id`),
    CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
    CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`resource_id`) REFERENCES `resources` (`resources_id`),
    CONSTRAINT `comments_ibfk_3` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`subject_id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */
;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */
;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */
;
UNLOCK TABLES;

--
-- Table structure for table `grades`
--

DROP TABLE IF EXISTS `grades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */
;
/*!50503 SET character_set_client = utf8mb4 */
;
CREATE TABLE `grades` (
    `grades_id` int NOT NULL AUTO_INCREMENT,
    `student_id` int NOT NULL,
    `subject_id` int NOT NULL,
    `grade` decimal(5, 2) NOT NULL,
    PRIMARY KEY (`grades_id`),
    KEY `student_id` (`student_id`),
    KEY `subject_id` (`subject_id`),
    CONSTRAINT `grades_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `users` (`user_id`),
    CONSTRAINT `grades_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`subject_id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */
;

--
-- Dumping data for table `grades`
--

LOCK TABLES `grades` WRITE;
/*!40000 ALTER TABLE `grades` DISABLE KEYS */
;
/*!40000 ALTER TABLE `grades` ENABLE KEYS */
;
UNLOCK TABLES;

--
-- Table structure for table `participations`
--

DROP TABLE IF EXISTS `participations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */
;
/*!50503 SET character_set_client = utf8mb4 */
;
CREATE TABLE `participations` (
    `participations_id` int NOT NULL AUTO_INCREMENT,
    `student_id` int NOT NULL,
    `subject_id` int NOT NULL,
    `description` varchar(200) DEFAULT NULL,
    `date` date DEFAULT NULL,
    PRIMARY KEY (`participations_id`),
    KEY `student_id` (`student_id`),
    KEY `subject_id` (`subject_id`),
    CONSTRAINT `participations_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `users` (`user_id`),
    CONSTRAINT `participations_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`subject_id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */
;

--
-- Dumping data for table `participations`
--

LOCK TABLES `participations` WRITE;
/*!40000 ALTER TABLE `participations` DISABLE KEYS */
;
/*!40000 ALTER TABLE `participations` ENABLE KEYS */
;
UNLOCK TABLES;

--
-- Table structure for table `resources`
--

DROP TABLE IF EXISTS `resources`;
/*!40101 SET @saved_cs_client     = @@character_set_client */
;
/*!50503 SET character_set_client = utf8mb4 */
;
CREATE TABLE `resources` (
    `resources_id` int NOT NULL AUTO_INCREMENT,
    `name` varchar(100) NOT NULL,
    `type` varchar(50) NOT NULL,
    `quantity` int NOT NULL,
    `assigned_to` int DEFAULT NULL,
    PRIMARY KEY (`resources_id`),
    KEY `assigned_to` (`assigned_to`),
    CONSTRAINT `resources_ibfk_1` FOREIGN KEY (`assigned_to`) REFERENCES `users` (`user_id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */
;

--
-- Dumping data for table `resources`
--

LOCK TABLES `resources` WRITE;
/*!40000 ALTER TABLE `resources` DISABLE KEYS */
;
/*!40000 ALTER TABLE `resources` ENABLE KEYS */
;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */
;
/*!50503 SET character_set_client = utf8mb4 */
;
CREATE TABLE `role` (
    `role_id` int NOT NULL AUTO_INCREMENT,
    `name` varchar(20) NOT NULL,
    `description` varchar(200) DEFAULT NULL,
    PRIMARY KEY (`role_id`)
) ENGINE = InnoDB AUTO_INCREMENT = 6 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */
;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */
;
INSERT INTO
    `role`
VALUES (
        1,
        'Administrador',
        'Acceso completo al sistema'
    ),
    (
        2,
        'Usuario',
        'Usuario regular del sistema'
    ),
    (
        3,
        'Profesor',
        'Acceso a funciones de docente'
    ),
    (
        4,
        'Coordinador',
        'Coordinador académico'
    ),
    (
        5,
        'Invitado',
        'Acceso limitado como invitado'
    );
/*!40000 ALTER TABLE `role` ENABLE KEYS */
;
UNLOCK TABLES;

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */
;
/*!50503 SET character_set_client = utf8mb4 */
;
CREATE TABLE `subjects` (
    `subject_id` int NOT NULL AUTO_INCREMENT,
    `name` varchar(100) NOT NULL,
    `description` varchar(200) DEFAULT NULL,
    `teacher_id` int NOT NULL,
    PRIMARY KEY (`subject_id`),
    KEY `teacher_id` (`teacher_id`),
    CONSTRAINT `subjects_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `users` (`user_id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */
;

--
-- Dumping data for table `subjects`
--

LOCK TABLES `subjects` WRITE;
/*!40000 ALTER TABLE `subjects` DISABLE KEYS */
;
/*!40000 ALTER TABLE `subjects` ENABLE KEYS */
;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */
;
/*!50503 SET character_set_client = utf8mb4 */
;
CREATE TABLE `users` (
    `user_id` int NOT NULL AUTO_INCREMENT,
    `role_id` int DEFAULT NULL,
    `name_user` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL,
    `password` varchar(100) NOT NULL,
    PRIMARY KEY (`user_id`),
    UNIQUE KEY `email` (`email`),
    KEY `role_id` (`role_id`),
    CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`)
) ENGINE = InnoDB AUTO_INCREMENT = 3 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */
;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */
;
INSERT INTO
    `users`
VALUES (
        1,
        1,
        'Mishell',
        'mishellr239@gmail.com',
        '$2y$10$n8yDVbybcoPiSfnSYG4lMOBuElKmIiG.PNihGMfOEPeC1WfjS7MuO'
    );
/*!40000 ALTER TABLE `users` ENABLE KEYS */
;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */
;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */
;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */
;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */
;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */
;

-- Dump completed on 2025-08-20  0:28:51