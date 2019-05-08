-- MySQL dump 10.13  Distrib 5.7.26, for Win32 (AMD64)
--
-- Host: 127.0.0.1    Database: misiblog
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.37-MariaDB

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
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) DEFAULT NULL,
  `deleted` tinyint(4) DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'Home page','home','<div class=\"jumbotron\">\r\n<div class=\"container\">\r\n<h1>Hello, world!</h1>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pharetra dictum velit non faucibus. Curabitur bibendum quis orci vitae mattis. Morbi porta sagittis lacus, vel iaculis felis interdum quis. Sed rutrum porttitor nisl, sit amet elementum ante pellentesque quis.</p>\r\n\r\n<p><a class=\"btn btn-primary btn-lg\" href=\"#\">Learn more &raquo;</a></p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"container\"><!-- Example row of columns -->\r\n<div class=\"row\">\r\n<div class=\"col-md-4\">\r\n<h2>Heading</h2>\r\n\r\n<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>\r\n\r\n<p><a class=\"btn btn-secondary\" href=\"#\">View details &raquo;</a></p>\r\n</div>\r\n\r\n<div class=\"col-md-4\">\r\n<h2>Heading</h2>\r\n\r\n<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>\r\n\r\n<p><a class=\"btn btn-secondary\" href=\"#\">View details &raquo;</a></p>\r\n</div>\r\n\r\n<div class=\"col-md-4\">\r\n<h2>Heading</h2>\r\n\r\n<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>\r\n\r\n<p><a class=\"btn btn-secondary\" href=\"#\">View details &raquo;</a></p>\r\n</div>\r\n</div>\r\n\r\n<hr /></div>\r\n<!-- /container -->','2019-05-04 08:23:00',NULL,0,NULL,NULL),(6,'About Us','about-us','<div style=\"background-attachment:fixed; background-image:url(https://www.solodev.com/assets/hero/hero.jpg); height:400px; text-align:center; width:100%; z-index:-10\">\r\n<div style=\"color:#ffffff; font-size:50px; position:relative; text-align:center; top:45%; vertical-align:middle; width:100%; z-index:10\">\r\n<h2>What drives Us</h2>\r\n</div>\r\n</div>\r\n\r\n<div class=\"container text-center\">\r\n<h3>Lorem ipsum - dolor</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed libero vel ex maximus vulputate nec eu ligula. Vestibulum elementum nisi ut fermentum lobortis. Sed quis iaculis felis.</p>\r\n</div>\r\n\r\n<div class=\"container\">\r\n<div class=\"col-md-8 col-md-offset-2\">\r\n<h2>&nbsp;</h2>\r\n</div>\r\n\r\n<div class=\"ct-u-paddingBoth20 row\">\r\n<div class=\"col-md-4 col-xs-6\">\r\n<div class=\"company-icons-white\">\r\n<p>LOREM IPSUM</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-md-4 col-xs-6\">\r\n<div class=\"company-icons-white\">\r\n<p>DOLOR SIT AMET</p>\r\n\r\n<p>Praesent sed libero vel ex maximus vulputate nec eu ligula.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-md-4 col-xs-6\">\r\n<div class=\"company-icons-white\">\r\n<p>SED TRISTIQUE</p>\r\n\r\n<p>Vestibulum elementum nisi ut fermentum lobortis.</p>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"ct-u-paddingBoth20 row\">\r\n<div class=\"col-md-4 col-xs-6\">\r\n<div class=\"company-icons-white\">\r\n<p>SEMPER IPSUM</p>\r\n\r\n<p>Nullam bibendum felis non laoreet rutrum.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-md-4 col-xs-6\">\r\n<div class=\"company-icons-white\">\r\n<p>NEC MATTIS</p>\r\n\r\n<p>Etiam diam mi, lacinia eu sapien in, dapibus sodales erat.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-md-4 col-xs-6\">\r\n<div class=\"company-icons-white\">\r\n<p>CRAS MOLLIS</p>\r\n\r\n<p>Etiam varius porttitor tellus et aliquet.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<a class=\"ct-u-marginTop60 btn btn-solodev-red-reversed btn-fullWidth-sm ct-u-size19\" href=\"/#/\">Ready to Learn More?</a></div>\r\n\r\n<div class=\"container\">\r\n<div class=\"col-md-8 col-md-offset-2\">\r\n<h2>CUSTOMERS</h2>\r\n\r\n<h3>Trusted by some of the world&rsquo;s leading brands.</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed libero vel ex maximus vulputate nec eu ligula. Vestibulum elementum nisi ut fermentum lobortis. Sed quis iaculis felis.</p>\r\n</div>\r\n\r\n<div class=\"clearfix\">&nbsp;</div>\r\n</div>\r\n\r\n<div class=\"container ct-u-paddingBottom100 ct-u-paddingTop40\">\r\n<div class=\"row\">\r\n<div class=\"col-md-12 ct-content\">\r\n<div class=\"container\">\r\n<div class=\"clients-logos text-center\"><!-- starting row div -->\r\n<div class=\"row\">\r\n<div class=\"client-logos-repeater col-md-4\" style=\"float:left\"><a class=\"Zeina\" href=\"/path/to/detail/zeina.html\"><img alt=\"https://www.solodev.com/assets/clients/logo-zeina.png\" src=\"https://www.solodev.com/assets/clients/logo-zeina.png\" /></a>\r\n\r\n<div class=\"logo-title\">\r\n<div class=\"displayTable\">\r\n<div class=\"displayTableCell\">Zeina - 0</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"client-logos-repeater col-md-4\" style=\"float:left\"><a class=\"Logic\" href=\"/path/to/detail/logic.html\"><img alt=\"https://www.solodev.com/assets/clients/logic.png\" src=\"https://www.solodev.com/assets/clients/logic.png\" /></a>\r\n\r\n<div class=\"logo-title\">\r\n<div class=\"displayTable\">\r\n<div class=\"displayTableCell\">Logic</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"client-logos-repeater col-md-4\" style=\"float:left\"><a class=\"Smart\" href=\"/path/to/detail/smart.html\"><img alt=\"https://www.solodev.com/assets/clients/client3.png\" src=\"https://www.solodev.com/assets/clients/client3.png\" /></a>\r\n\r\n<div class=\"logo-title\">\r\n<div class=\"displayTable\">\r\n<div class=\"displayTableCell\">Smart</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"client-logos-repeater col-md-4\" style=\"float:left\"><a class=\"Softtech\" href=\"/path/to/detail/softtech.html\"><img alt=\"https://www.solodev.com/assets/clients/softtech.png\" src=\"https://www.solodev.com/assets/clients/softtech.png\" /></a>\r\n\r\n<div class=\"logo-title\">\r\n<div class=\"displayTable\">\r\n<div class=\"displayTableCell\">Softtech</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"client-logos-repeater col-md-4\" style=\"float:left\"><a class=\"Wheel\" href=\"/path/to/detail/wheel.html\"><img alt=\"https://www.solodev.com/assets/clients/logo-target.png\" src=\"https://www.solodev.com/assets/clients/logo-target.png\" /></a>\r\n\r\n<div class=\"logo-title\">\r\n<div class=\"displayTable\">\r\n<div class=\"displayTableCell\">Wheel</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"client-logos-repeater col-md-4\" style=\"float:left\"><a class=\"3designs\" href=\"/path/to/detail/3designs.html\"><img alt=\"https://www.solodev.com/assets/clients/designx.png\" src=\"https://www.solodev.com/assets/clients/designx.png\" /></a>\r\n\r\n<div class=\"logo-title\">\r\n<div class=\"displayTable\">\r\n<div class=\"displayTableCell\">3designs</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"client-logos-repeater col-md-4\" style=\"float:left\"><a class=\"Heart\" href=\"/path/to/detail/heart.html\"><img alt=\"https://www.solodev.com/assets/clients/client7.png\" src=\"https://www.solodev.com/assets/clients/client7.png\" /></a>\r\n\r\n<div class=\"logo-title\">\r\n<div class=\"displayTable\">\r\n<div class=\"displayTableCell\">Heart</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"client-logos-repeater col-md-4\" style=\"float:left\"><a class=\"Devtech\" href=\"/path/to/detail/devtech.html\"><img alt=\"https://www.solodev.com/assets/clients/devtech.png\" src=\"https://www.solodev.com/assets/clients/devtech.png\" /></a>\r\n\r\n<div class=\"logo-title\">\r\n<div class=\"displayTable\">\r\n<div class=\"displayTableCell\">Devtech</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"client-logos-repeater col-md-4\" style=\"float:left\"><a class=\"Chartz\" href=\"/path/to/detail/chartz.html\"><img alt=\"https://www.solodev.com/assets/clients/chartz.png\" src=\"https://www.solodev.com/assets/clients/chartz.png\" /></a>\r\n\r\n<div class=\"logo-title\">\r\n<div class=\"displayTable\">\r\n<div class=\"displayTableCell\">Chartz</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<!-- closing row div --></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n','2019-05-05 15:10:00',1,0,NULL,NULL);
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-08 20:57:16
