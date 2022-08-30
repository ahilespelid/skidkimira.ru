/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE IF NOT EXISTS `couponcategory` (
  `id` bigint(19) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

/*!40000 ALTER TABLE `couponcategory` DISABLE KEYS */;
INSERT INTO `couponcategory` (`id`, `name`, `description`) VALUES
	(47, 'Еда', 'Еда'),
	(48, 'Путешествия & Туризм', 'Путешествия & Туризм'),
	(45, 'Цветы и подарки', 'Цветы и подарки'),
	(46, 'Компьютеры & Электроника', 'Компьютеры & Электроника'),
	(44, 'Обувь женская & мужская', 'Обувь женская & мужская'),
	(41, 'Товары для дома', 'Товары для дома'),
	(42, 'Спорт и отдых', 'Спорт и отдых'),
	(43, 'Одежда', 'Одежда'),
	(40, 'Детские товары', 'Детские товары'),
	(37, 'Мода & аксессуары', 'Мода & аксессуары'),
	(38, 'Красота & здоровье', 'Красота & здоровье'),
	(39, 'Часы', 'Часы');
/*!40000 ALTER TABLE `couponcategory` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
