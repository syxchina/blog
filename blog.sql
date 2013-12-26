-- MySQL dump 10.13  Distrib 5.5.20, for Win32 (x86)
--
-- Host: localhost    Database: blog
-- ------------------------------------------------------
-- Server version	5.5.20

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
-- Table structure for table `bl_attr`
--

DROP TABLE IF EXISTS `bl_attr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bl_attr` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(10) NOT NULL DEFAULT '',
  `color` char(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bl_attr`
--

LOCK TABLES `bl_attr` WRITE;
/*!40000 ALTER TABLE `bl_attr` DISABLE KEYS */;
INSERT INTO `bl_attr` VALUES (1,'置顶','red'),(2,'推荐','blue'),(3,'精华','green');
/*!40000 ALTER TABLE `bl_attr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bl_blog`
--

DROP TABLE IF EXISTS `bl_blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bl_blog` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL DEFAULT '',
  `content` text,
  `time` int(10) unsigned NOT NULL DEFAULT '0',
  `click` int(10) unsigned NOT NULL DEFAULT '0',
  `cid` int(10) unsigned NOT NULL DEFAULT '0',
  `del` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bl_blog`
--

LOCK TABLES `bl_blog` WRITE;
/*!40000 ALTER TABLE `bl_blog` DISABLE KEYS */;
INSERT INTO `bl_blog` VALUES (5,'ni hao','<p>哈哈哈的哈大方的</p>',1388049551,100,7,0),(4,'test4','<p>HTMLLTTLT</p>',1388049290,100,1,0);
/*!40000 ALTER TABLE `bl_blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bl_blog_attr`
--

DROP TABLE IF EXISTS `bl_blog_attr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bl_blog_attr` (
  `bid` int(10) unsigned NOT NULL DEFAULT '0',
  `aid` int(10) unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bl_blog_attr`
--

LOCK TABLES `bl_blog_attr` WRITE;
/*!40000 ALTER TABLE `bl_blog_attr` DISABLE KEYS */;
INSERT INTO `bl_blog_attr` VALUES (4,1),(4,2);
/*!40000 ALTER TABLE `bl_blog_attr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bl_cate`
--

DROP TABLE IF EXISTS `bl_cate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bl_cate` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(15) NOT NULL DEFAULT '',
  `pid` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `sort` smallint(5) unsigned NOT NULL DEFAULT '100',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bl_cate`
--

LOCK TABLES `bl_cate` WRITE;
/*!40000 ALTER TABLE `bl_cate` DISABLE KEYS */;
INSERT INTO `bl_cate` VALUES (1,'HTML',0,1),(2,'DIV+CSS',0,2),(3,'JavaScript',0,3),(4,'PHP',0,4),(5,'MySql',0,5),(6,'Linux',0,6),(7,'其他',0,7),(8,'jQuery',3,1),(9,'Ajax',3,2),(10,'字符串',4,1),(11,'数组',4,2),(12,'对象',4,3),(13,'存储引擎',5,100),(14,'事务',5,100),(15,'视图',5,100),(16,'存储过程',5,100),(17,'基本配置',6,100),(18,'网络命令',6,100);
/*!40000 ALTER TABLE `bl_cate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bl_user`
--

DROP TABLE IF EXISTS `bl_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bl_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `logintime` int(10) unsigned NOT NULL DEFAULT '0',
  `loginip` char(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bl_user`
--

LOCK TABLES `bl_user` WRITE;
/*!40000 ALTER TABLE `bl_user` DISABLE KEYS */;
INSERT INTO `bl_user` VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3',1388036631,'127.0.0.1');
/*!40000 ALTER TABLE `bl_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-12-26 17:27:48
