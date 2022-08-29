/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE IF NOT EXISTS `discount` (
  `id` bigint(19) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(1500) DEFAULT NULL,
  `nameTemplate` varchar(255) DEFAULT NULL,
  `descriptionTemplate` varchar(5000) DEFAULT NULL,
  `fullDescription` varchar(5000) DEFAULT NULL,
  `discount` int(2) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `oldPrice` float DEFAULT NULL,
  `newPrice` float DEFAULT NULL,
  `startDate` date NOT NULL,
  `finishDate` date DEFAULT NULL,
  `categoryId` bigint(19) NOT NULL,
  `companyId` bigint(19) NOT NULL,
  `cityId` bigint(19) NOT NULL,
  `cloned` tinyint(1) DEFAULT '0',
  `cloneSource` bigint(19) DEFAULT NULL,
  `cloneDate` date DEFAULT NULL,
  `htmlDescription` varchar(500) DEFAULT NULL,
  `htmlKeywords` varchar(500) DEFAULT NULL,
  `htmlCanonicalLink` varchar(500) DEFAULT NULL,
  `htmlTitle` varchar(500) DEFAULT NULL,
  `urlMore` varchar(500) DEFAULT NULL,
  `priority` int(11) NOT NULL,
  `addDate` date NOT NULL,
  `addUserId` bigint(19) NOT NULL,
  `moderated` tinyint(1) NOT NULL DEFAULT '0',
  `accepted` tinyint(1) NOT NULL DEFAULT '0',
  `declineMessage` varchar(255) DEFAULT NULL,
  `moderatorId` bigint(19) DEFAULT NULL,
  `moderateDate` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `startDate` (`startDate`),
  KEY `finishDate` (`finishDate`),
  KEY `FKDiscount519656` (`categoryId`),
  KEY `FKDiscount152149` (`companyId`),
  KEY `FKDiscount206095` (`cityId`),
  KEY `FKDiscountSiteUser` (`addUserId`),
  KEY `discount` (`discount`),
  KEY `oldPrice` (`oldPrice`),
  KEY `newPrice` (`newPrice`),
  KEY `moderated` (`moderated`),
  KEY `accepted` (`accepted`),
  KEY `discount_2` (`discount`),
  KEY `oldPrice_2` (`oldPrice`),
  KEY `newPrice_2` (`newPrice`),
  KEY `moderated_2` (`moderated`),
  KEY `accepted_2` (`accepted`),
  KEY `clonned` (`cloned`),
  KEY `cloneSource` (`cloneSource`),
  KEY `clonned_accepted` (`cloned`,`accepted`),
  KEY `cityid_accepted` (`cityId`,`accepted`),
  KEY `cityid_categoryid_accepted_finish` (`finishDate`,`categoryId`,`cityId`,`accepted`),
  KEY `city_finish_accepted` (`finishDate`,`cityId`,`accepted`),
  KEY `city_finish_accepted_company` (`finishDate`,`companyId`,`cityId`,`accepted`),
  KEY `discount_city` (`id`,`cityId`),
  KEY `id_companyId_moderatorId` (`id`,`companyId`,`moderatorId`),
  FULLTEXT KEY `namef` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=1041558 DEFAULT CHARSET=utf8;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
