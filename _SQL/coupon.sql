/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE IF NOT EXISTS `coupon` (
  `id` bigint(19) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `advid` bigint(19) DEFAULT NULL,
  `startDate` date NOT NULL,
  `finishDate` date DEFAULT NULL,
  `viewUrl` varchar(500) NOT NULL,
  `thumbnailUrl` varchar(500) NOT NULL,
  `addDate` date NOT NULL,
  `addUserId` bigint(19) NOT NULL,
  `couponTypeId` bigint(19) NOT NULL,
  `couponCategoryId` bigint(19) NOT NULL,
  `couponAdvCampaignId` bigint(19) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `startDate` (`startDate`),
  KEY `finishDate` (`finishDate`),
  KEY `FKCoupon16840` (`addUserId`),
  KEY `FKCoupon477723` (`couponTypeId`),
  KEY `FKCoupon340324` (`couponAdvCampaignId`),
  KEY `FKCoupon19149` (`couponCategoryId`)
) ENGINE=MyISAM AUTO_INCREMENT=215 DEFAULT CHARSET=utf8;

/*!40000 ALTER TABLE `coupon` DISABLE KEYS */;
/*!40000 ALTER TABLE `coupon` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

