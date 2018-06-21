-- MySQL dump 10.16  Distrib 10.1.9-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: inv
-- ------------------------------------------------------
-- Server version	10.1.9-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `acc`
--

DROP TABLE IF EXISTS `acc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acc` (
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acc`
--

LOCK TABLES `acc` WRITE;
/*!40000 ALTER TABLE `acc` DISABLE KEYS */;
INSERT INTO `acc` VALUES ('admin','admin'),('user','user');
/*!40000 ALTER TABLE `acc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fg_laporan`
--

DROP TABLE IF EXISTS `fg_laporan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fg_laporan` (
  `lapor_num` int(3) NOT NULL,
  `tanggal` date NOT NULL,
  `stock_opname` int(1) NOT NULL,
  `awal` int(5) NOT NULL,
  `masuk` int(5) NOT NULL,
  `keluar` int(5) NOT NULL,
  `akhir` int(5) NOT NULL,
  `pelapor` varchar(30) NOT NULL,
  PRIMARY KEY (`tanggal`,`lapor_num`,`stock_opname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fg_laporan`
--

LOCK TABLES `fg_laporan` WRITE;
/*!40000 ALTER TABLE `fg_laporan` DISABLE KEYS */;
INSERT INTO `fg_laporan` VALUES (11,'2017-02-06',0,0,3,0,3,'admin'),(12,'2017-02-06',0,0,3,1,2,'admin'),(13,'2017-02-06',0,0,3,0,3,'admin'),(11,'2017-02-09',0,3,0,0,3,'admin'),(12,'2017-02-09',0,2,1,0,3,'admin'),(13,'2017-02-09',0,3,0,0,3,'admin'),(11,'2017-02-13',0,3,2,0,5,'admin'),(12,'2017-02-13',0,3,1,0,4,'admin'),(13,'2017-02-13',0,3,0,1,2,'admin');
/*!40000 ALTER TABLE `fg_laporan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fg_stok`
--

DROP TABLE IF EXISTS `fg_stok`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fg_stok` (
  `num` int(3) NOT NULL,
  `nama_item` varchar(50) NOT NULL,
  `merek` varchar(50) NOT NULL,
  `grade` int(1) NOT NULL,
  `satuan` varchar(5) NOT NULL,
  `jumlah` int(7) NOT NULL,
  PRIMARY KEY (`num`),
  UNIQUE KEY `num` (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fg_stok`
--

LOCK TABLES `fg_stok` WRITE;
/*!40000 ALTER TABLE `fg_stok` DISABLE KEYS */;
INSERT INTO `fg_stok` VALUES (11,'SHC 200 GO-JEK','GO-JEK',1,'Pcs',5),(12,'SHC 100 GO-JEK','GO-JEK',1,'Pcs',4),(13,'SHC 300 GO-JEK','GO-JEK',1,'Pcs',2);
/*!40000 ALTER TABLE `fg_stok` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plan_produksi`
--

DROP TABLE IF EXISTS `plan_produksi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plan_produksi` (
  `tanggal` date NOT NULL,
  `proses` varchar(50) NOT NULL,
  `item_proses` varchar(50) NOT NULL,
  `tipe` varchar(30) NOT NULL,
  `shift` int(1) NOT NULL,
  `satuan` varchar(5) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `pelapor` varchar(30) NOT NULL,
  PRIMARY KEY (`tanggal`,`proses`,`item_proses`,`shift`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plan_produksi`
--

LOCK TABLES `plan_produksi` WRITE;
/*!40000 ALTER TABLE `plan_produksi` DISABLE KEYS */;
INSERT INTO `plan_produksi` VALUES ('2017-02-09','ASSEMBLING','GO-JEK SHC-300','SHC 300 GO-JEK',1,'Pcs',2,'admin'),('2017-02-09','PASANG STIKER','PASANG STIKER GOJEK SHC 200','SHC 200',1,'Pcs',100,'admin'),('2017-02-13','ASSEMBLING','GO-JEK SHC-200','SHC-200 GO-JEK',2,'Pcs',55,'admin');
/*!40000 ALTER TABLE `plan_produksi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `raw_laporan`
--

DROP TABLE IF EXISTS `raw_laporan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `raw_laporan` (
  `lapor_num` int(3) NOT NULL,
  `tanggal` date NOT NULL,
  `stock_opname` int(1) NOT NULL,
  `awal` int(5) NOT NULL,
  `masuk` int(5) NOT NULL,
  `keluar` int(5) NOT NULL,
  `akhir` int(5) NOT NULL,
  `pelapor` varchar(30) NOT NULL,
  PRIMARY KEY (`tanggal`,`lapor_num`,`stock_opname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `raw_laporan`
--

LOCK TABLES `raw_laporan` WRITE;
/*!40000 ALTER TABLE `raw_laporan` DISABLE KEYS */;
/*!40000 ALTER TABLE `raw_laporan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `raw_stok`
--

DROP TABLE IF EXISTS `raw_stok`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `raw_stok` (
  `num` int(3) NOT NULL,
  `nama_item` varchar(50) NOT NULL,
  `merek` varchar(50) NOT NULL,
  `grade` int(1) NOT NULL,
  `satuan` varchar(5) NOT NULL,
  `jumlah` int(7) NOT NULL,
  PRIMARY KEY (`num`),
  UNIQUE KEY `num` (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `raw_stok`
--

LOCK TABLES `raw_stok` WRITE;
/*!40000 ALTER TABLE `raw_stok` DISABLE KEYS */;
/*!40000 ALTER TABLE `raw_stok` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wip_gojek_laporan`
--

DROP TABLE IF EXISTS `wip_gojek_laporan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wip_gojek_laporan` (
  `lapor_num` int(3) NOT NULL,
  `tanggal` date NOT NULL,
  `stock_opname` int(1) NOT NULL,
  `awal` int(5) NOT NULL,
  `masuk` int(5) NOT NULL,
  `keluar` int(5) NOT NULL,
  `akhir` int(5) NOT NULL,
  `pelapor` varchar(30) NOT NULL,
  PRIMARY KEY (`lapor_num`,`tanggal`,`stock_opname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wip_gojek_laporan`
--

LOCK TABLES `wip_gojek_laporan` WRITE;
/*!40000 ALTER TABLE `wip_gojek_laporan` DISABLE KEYS */;
INSERT INTO `wip_gojek_laporan` VALUES (1,'2017-02-06',0,4,0,3,1,'admin'),(1,'2017-02-06',1,0,5,3,2,'admin'),(1,'2017-02-11',0,1,3,0,4,'admin'),(1,'2017-02-13',0,2,0,1,1,'admin'),(2,'2017-02-06',0,1,0,0,1,'admin'),(2,'2017-02-06',1,0,0,0,0,'admin'),(2,'2017-02-11',0,1,0,0,1,'admin'),(2,'2017-02-13',0,0,1,0,1,'admin'),(3,'2017-02-06',0,3,0,0,3,'admin'),(3,'2017-02-06',1,0,2,0,2,'admin'),(3,'2017-02-11',0,3,0,0,3,'admin'),(3,'2017-02-13',0,2,0,0,2,'admin'),(4,'2017-02-06',0,1,0,0,1,'admin'),(4,'2017-02-06',1,0,1,0,1,'admin'),(4,'2017-02-11',0,1,0,0,1,'admin'),(4,'2017-02-13',0,1,0,0,1,'admin'),(5,'2017-02-06',0,0,0,0,0,'admin'),(5,'2017-02-06',1,0,0,0,0,'admin'),(5,'2017-02-11',0,0,0,0,0,'admin'),(5,'2017-02-13',0,0,0,0,0,'admin'),(6,'2017-02-06',0,0,0,0,0,'admin'),(6,'2017-02-06',1,0,0,0,0,'admin'),(6,'2017-02-11',0,0,0,0,0,'admin'),(6,'2017-02-13',0,0,0,0,0,'admin'),(7,'2017-02-06',0,0,0,0,0,'admin'),(7,'2017-02-06',1,0,0,0,0,'admin'),(7,'2017-02-11',0,0,0,0,0,'admin'),(7,'2017-02-13',0,0,0,0,0,'admin'),(8,'2017-02-06',0,0,0,0,0,'admin'),(8,'2017-02-06',1,0,0,0,0,'admin'),(8,'2017-02-11',0,0,0,0,0,'admin'),(8,'2017-02-13',0,0,0,0,0,'admin'),(9,'2017-02-06',0,0,0,0,0,'admin'),(9,'2017-02-06',1,0,0,0,0,'admin'),(9,'2017-02-11',0,0,0,0,0,'admin'),(9,'2017-02-13',0,0,0,0,0,'admin'),(10,'2017-02-06',0,0,0,0,0,'admin'),(10,'2017-02-06',1,0,0,0,0,'admin'),(10,'2017-02-11',0,0,0,0,0,'admin'),(10,'2017-02-13',0,0,0,0,0,'admin'),(11,'2017-02-06',0,0,0,0,0,'admin'),(11,'2017-02-06',1,0,0,0,0,'admin'),(11,'2017-02-11',0,0,0,0,0,'admin'),(11,'2017-02-13',0,0,0,0,0,'admin'),(12,'2017-02-06',0,0,0,0,0,'admin'),(12,'2017-02-06',1,0,0,0,0,'admin'),(12,'2017-02-11',0,0,0,0,0,'admin'),(12,'2017-02-13',0,0,0,0,0,'admin'),(13,'2017-02-06',0,0,0,0,0,'admin'),(13,'2017-02-06',1,0,0,0,0,'admin'),(13,'2017-02-11',0,0,0,0,0,'admin'),(13,'2017-02-13',0,0,0,0,0,'admin'),(14,'2017-02-06',0,0,0,0,0,'admin'),(14,'2017-02-06',1,0,0,0,0,'admin'),(14,'2017-02-11',0,0,0,0,0,'admin'),(14,'2017-02-13',0,0,0,0,0,'admin'),(15,'2017-02-06',0,0,0,0,0,'admin'),(15,'2017-02-06',1,0,0,0,0,'admin'),(15,'2017-02-11',0,0,0,0,0,'admin'),(15,'2017-02-13',0,0,0,0,0,'admin'),(16,'2017-02-06',0,0,0,0,0,'admin'),(16,'2017-02-06',1,0,0,0,0,'admin'),(16,'2017-02-11',0,0,0,0,0,'admin'),(16,'2017-02-13',0,0,0,0,0,'admin'),(17,'2017-02-06',0,0,0,0,0,'admin'),(17,'2017-02-06',1,0,0,0,0,'admin'),(17,'2017-02-11',0,0,0,0,0,'admin'),(17,'2017-02-13',0,0,0,0,0,'admin'),(18,'2017-02-06',0,0,0,0,0,'admin'),(18,'2017-02-06',1,0,0,0,0,'admin'),(18,'2017-02-11',0,0,0,0,0,'admin'),(18,'2017-02-13',0,0,0,0,0,'admin'),(19,'2017-02-06',0,0,0,0,0,'admin'),(19,'2017-02-06',1,0,0,0,0,'admin'),(19,'2017-02-11',0,0,0,0,0,'admin'),(19,'2017-02-13',0,0,0,0,0,'admin'),(20,'2017-02-06',0,0,0,0,0,'admin'),(20,'2017-02-06',1,0,0,0,0,'admin'),(20,'2017-02-11',0,0,0,0,0,'admin'),(20,'2017-02-13',0,0,0,0,0,'admin'),(21,'2017-02-06',0,0,0,0,0,'admin'),(21,'2017-02-06',1,0,0,0,0,'admin'),(21,'2017-02-11',0,0,0,0,0,'admin'),(21,'2017-02-13',0,0,0,0,0,'admin'),(22,'2017-02-06',0,0,0,0,0,'admin'),(22,'2017-02-06',1,0,0,0,0,'admin'),(22,'2017-02-11',0,0,0,0,0,'admin'),(22,'2017-02-13',0,0,0,0,0,'admin'),(23,'2017-02-06',0,0,0,0,0,'admin'),(23,'2017-02-06',1,0,0,0,0,'admin'),(23,'2017-02-11',0,0,0,0,0,'admin'),(23,'2017-02-13',0,0,0,0,0,'admin'),(24,'2017-02-06',0,0,0,0,0,'admin'),(24,'2017-02-06',1,0,0,0,0,'admin'),(24,'2017-02-11',0,0,0,0,0,'admin'),(24,'2017-02-13',0,0,0,0,0,'admin'),(25,'2017-02-06',0,0,0,0,0,'admin'),(25,'2017-02-06',1,0,0,0,0,'admin'),(25,'2017-02-11',0,0,0,0,0,'admin'),(25,'2017-02-13',0,0,0,0,0,'admin'),(26,'2017-02-06',0,0,0,0,0,'admin'),(26,'2017-02-06',1,0,0,0,0,'admin'),(26,'2017-02-11',0,0,0,0,0,'admin'),(26,'2017-02-13',0,0,0,0,0,'admin'),(27,'2017-02-06',0,0,0,0,0,'admin'),(27,'2017-02-06',1,0,0,0,0,'admin'),(27,'2017-02-11',0,0,0,0,0,'admin'),(27,'2017-02-13',0,0,0,0,0,'admin'),(28,'2017-02-06',0,0,0,0,0,'admin'),(28,'2017-02-06',1,0,0,0,0,'admin'),(28,'2017-02-11',0,0,0,0,0,'admin'),(28,'2017-02-13',0,0,0,0,0,'admin'),(29,'2017-02-06',0,0,0,0,0,'admin'),(29,'2017-02-06',1,0,0,0,0,'admin'),(29,'2017-02-11',0,0,0,0,0,'admin'),(29,'2017-02-13',0,0,0,0,0,'admin'),(30,'2017-02-06',0,0,0,0,0,'admin'),(30,'2017-02-06',1,0,0,0,0,'admin'),(30,'2017-02-11',0,0,0,0,0,'admin'),(30,'2017-02-13',0,0,0,0,0,'admin'),(31,'2017-02-06',0,0,0,0,0,'admin'),(31,'2017-02-06',1,0,0,0,0,'admin'),(31,'2017-02-11',0,0,0,0,0,'admin'),(31,'2017-02-13',0,0,0,0,0,'admin'),(32,'2017-02-06',0,0,0,0,0,'admin'),(32,'2017-02-06',1,0,0,0,0,'admin'),(32,'2017-02-11',0,0,0,0,0,'admin'),(32,'2017-02-13',0,0,0,0,0,'admin'),(33,'2017-02-06',0,0,0,0,0,'admin'),(33,'2017-02-06',1,0,0,0,0,'admin'),(33,'2017-02-11',0,0,0,0,0,'admin'),(33,'2017-02-13',0,0,0,0,0,'admin'),(34,'2017-02-06',0,0,0,0,0,'admin'),(34,'2017-02-06',1,0,0,0,0,'admin'),(34,'2017-02-11',0,0,0,0,0,'admin'),(34,'2017-02-13',0,0,0,0,0,'admin'),(35,'2017-02-06',0,0,0,0,0,'admin'),(35,'2017-02-06',1,0,0,0,0,'admin'),(35,'2017-02-11',0,0,0,0,0,'admin'),(35,'2017-02-13',0,0,0,0,0,'admin'),(36,'2017-02-06',0,0,0,0,0,'admin'),(36,'2017-02-06',1,0,0,0,0,'admin'),(36,'2017-02-11',0,0,0,0,0,'admin'),(36,'2017-02-13',0,0,0,0,0,'admin'),(37,'2017-02-06',0,0,0,0,0,'admin'),(37,'2017-02-06',1,0,0,0,0,'admin'),(37,'2017-02-11',0,0,0,0,0,'admin'),(37,'2017-02-13',0,0,0,0,0,'admin'),(38,'2017-02-06',0,0,0,0,0,'admin'),(38,'2017-02-06',1,0,0,0,0,'admin'),(38,'2017-02-11',0,0,0,0,0,'admin'),(38,'2017-02-13',0,0,0,0,0,'admin'),(39,'2017-02-06',0,0,0,0,0,'admin'),(39,'2017-02-06',1,0,0,0,0,'admin'),(39,'2017-02-11',0,0,0,0,0,'admin'),(39,'2017-02-13',0,0,0,0,0,'admin'),(40,'2017-02-06',0,0,0,0,0,'admin'),(40,'2017-02-06',1,0,0,0,0,'admin'),(40,'2017-02-11',0,0,0,0,0,'admin'),(40,'2017-02-13',0,0,0,0,0,'admin');
/*!40000 ALTER TABLE `wip_gojek_laporan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wip_gojek_stok`
--

DROP TABLE IF EXISTS `wip_gojek_stok`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wip_gojek_stok` (
  `num` int(3) NOT NULL,
  `nama_item` varchar(50) NOT NULL,
  `proses` varchar(15) NOT NULL,
  `bahan` varchar(50) NOT NULL,
  `satuan` varchar(5) NOT NULL,
  `jumlah` int(7) NOT NULL,
  PRIMARY KEY (`num`),
  UNIQUE KEY `num` (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wip_gojek_stok`
--

LOCK TABLES `wip_gojek_stok` WRITE;
/*!40000 ALTER TABLE `wip_gojek_stok` DISABLE KEYS */;
INSERT INTO `wip_gojek_stok` VALUES (1,'Kepala Depan','PUNCH SHC','','Pcs',1),(2,'Top Cushion','PUNCH SHC','','Pcs',1),(3,'Sayap R/L','PUNCH SHC','','Set',2),(4,'Jaring Ventilator','PUNCH SHC','','Pcs',1),(5,'Jaring Back','PUNCH SHC','','Set',0),(6,'V Back','PUNCH SHC','','Pcs',0),(7,'V Chinstrap','PUNCH SHC','','Pcs',0),(8,'Lam Chinstrap','PUNCH SHC','','Set',0),(9,'Vinyl Kawat R/L','PUNCH SHC','','Set',0),(10,'Kawat Ventilator','PUNCH SHC','','Set',0),(11,'Pres Kancing (PVC Kuping R)','PUNCH SHC 100','','Pcs',0),(12,'Pres Kancing (PVC Kuping L)','PUNCH SHC 100','','Pcs',0),(13,'Pres Kancing (PVC Shell R)','PUNCH SHC 100','','Pcs',0),(14,'Pres Kancing (PVC Shell L)','PUNCH SHC 100','','Pcs',0),(15,'Body Kuping R','PUNCH SHC 100','','Pcs',0),(16,'Body Kuping L','PUNCH SHC 100','','Pcs',0),(17,'Pres Kancing (PVC Kuping R)','PUNCH SHC 200','','Pcs',0),(18,'Pres Kancing (PVC Kuping L)','PUNCH SHC 200','','Pcs',0),(19,'Pres Kancing (PVC Shell R)','PUNCH SHC 200','','Pcs',0),(20,'Pres Kancing (PVC Shell L)','PUNCH SHC 200','','Pcs',0),(21,'Lidah Kuping R','PUNCH SHC 200','','Set',0),(22,'Lidah Kuping L','PUNCH SHC 200','','Pcs',0),(23,'Body Kuping R','PUNCH SHC 200','','Pcs',0),(24,'Body Kuping L','PUNCH SHC 200','','Pcs',0),(25,'Pres Kancing (PVC Kuping R)','PUNCH SHC 300','','Pcs',0),(26,'Pres Kancing (PVC Kuping L)','PUNCH SHC 300','','Pcs',0),(27,'Pres Kancing (PVC Shell R)','PUNCH SHC 300','','Pcs',0),(28,'Pres Kancing (PVC Shell L)','PUNCH SHC 300','','Pcs',0),(29,'Sewing Kepala + Back SHC 200','SEWING SHC','','Pcs',0),(30,'Sewing Kepala + Back SHC 300','SEWING SHC','','Pcs',0),(31,'Sewing Kuping R SHC 100','SEWING SHC','','Pcs',0),(32,'Sewing Kuping L SHC 100','SEWING SHC','','Pcs',0),(33,'Sewing Kuping R SHC 200','SEWING SHC','','Pcs',0),(34,'Sewing Kuping L SHC 200','SEWING SHC','','Pcs',0),(35,'Sewing Kuping R SHC 300','SEWING SHC','','Pcs',0),(36,'Sewing Kuping L SHC 300','SEWING SHC','','Pcs',0),(37,'Sewing Tali','SEWING SHC','','Set',0),(38,'Assy Styrofoam C100','SEWING SHC','','Pcs',0),(39,'Assy Styrofoam C200','SEWING SHC','','Pcs',0),(40,'Assy Styrofoam C300','SEWING SHC','','Pcs',0);
/*!40000 ALTER TABLE `wip_gojek_stok` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-02-14  5:16:18
