/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE IF NOT EXISTS `city` (
  `id` bigint(19) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `nameWhere` varchar(30) NOT NULL,
  `subDomain` varchar(10) NOT NULL,
  `countryId` bigint(19) NOT NULL,
  `nameWhich` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FKCity727696` (`countryId`),
  KEY `name` (`name`),
  KEY `name_2` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

/*!40000 ALTER TABLE `city` DISABLE KEYS */;
INSERT INTO `city` (`id`, `name`, `nameWhere`, `subDomain`, `countryId`, `nameWhich`) VALUES
	(1, 'Москва', 'Москве', '', 1, 'Москвы'),
	(2, 'Санкт-Петербург', 'Санкт-Петербурге', 'spb', 1, 'Санкт-Петербурга'),
	(3, 'Екатеринбург', 'Екатеринбурге', 'ekb', 1, 'Екатеринбурга'),
	(4, 'Нижний Новгород', 'Н. Новгороде', 'nn', 1, 'Н. Новгорода'),
	(5, 'Новосибирск', 'Новосибирске', 'nsk', 1, 'Новосибирска'),
	(6, 'Челябинск', 'Челябинске', 'chel', 1, 'Челябинска'),
	(7, 'Самара', 'Самаре', 'samara', 1, 'Самары'),
	(8, 'Казань', 'Казани', 'kazan', 1, 'Казани'),
	(9, 'Калининград', 'Калининграде', 'kgrad', 1, 'Калининграда'),
	(10, 'Пермь', 'Перми', 'perm', 1, 'Перми'),
	(11, 'Оренбург', 'Оренбурге', 'orenburg', 1, 'Оренбурга'),
	(12, 'Уфа', 'Уфе', 'ufa', 1, 'Уфы'),
	(13, 'Тула', 'Туле', 'tula', 1, 'Тулы'),
	(14, 'Красноярск', 'Красноярске', 'krasnoyrsk', 1, 'Красноярска'),
	(15, 'Ставрополь', 'Ставрополе', 'stavropol', 1, 'Ставрополя'),
	(16, 'Владивосток', 'Владивостоке', 'vladik', 1, 'Владивостока'),
	(17, 'Тверь', 'Твери', 'tver', 1, 'Твери'),
	(18, 'Краснодар', 'Краснодаре', 'krasnodar', 1, 'Краснодара'),
	(19, 'Чебоксары', 'Чебоксарах', 'cheboksary', 1, 'Чебоксар'),
	(20, 'Ростов-на-Дону', 'Ростове-на-Дону', 'rostov', 1, 'Ростова-на-Дону'),
	(21, 'Тольятти', 'Тольятти', 'tolyatti', 1, 'Тольятти'),
	(22, 'Волгоград', 'Волгограде', 'volgograd', 1, 'Волгограда'),
	(23, 'Киров', 'Кирове', 'kirov', 1, 'Кирова'),
	(24, 'Саратов', 'Саратове', 'saratov', 1, 'Саратова'),
	(25, 'Владимир', 'Владимире', 'vladimir', 1, 'Владимира'),
	(26, 'Омск', 'Омске', 'omsk', 1, 'Омска'),
	(27, 'Киев', 'Киеве', 'kiev', 2, 'Киева'),
	(28, 'Воронеж', 'Воронеже', 'voronej', 1, 'Воронежа'),
	(29, 'Минск', 'Минске', 'minsk', 3, 'Минска'),
	(30, 'Хабаровск', 'Хабаровске', 'habarovsk', 1, 'Хабаровска'),
	(31, 'Харьков', 'Харькове', 'kharkov', 2, 'Харькова'),
	(32, 'Иркутск', 'Иркутске', 'irkutsk', 1, 'Иркутска'),
	(33, 'Кемерово', 'Кемерове', 'kemerovo', 1, 'Кемерова'),
	(34, 'Барнаул', 'Барнауле', 'barnaul', 1, 'Барнаула'),
	(35, 'Ярославль', 'Ярославле', 'yaroslavl', 1, 'Ярославля'),
	(36, 'Томск', 'Томске', 'tomsk', 1, 'Томска'),
	(37, 'Пенза', 'Пензе', 'penza', 1, 'Пензы'),
	(38, 'Тюмень', 'Тюмени', 'tyumen', 1, 'Тюмени'),
	(39, 'Одесса', 'Одессе', 'odessa', 2, 'Одессы'),
	(51, 'Ульяновск', 'Ульяновске', 'ulyanovsk', 1, 'Ульяновска'),
	(43, 'Ижевск', 'Ижевске', 'ijevsk', 1, 'Ижевска'),
	(44, 'Сыктывкар', 'Сыктывкаре', 'siktivkar', 1, 'Сыктывкара'),
	(52, 'Липецк', 'Липецке', 'lipeck', 1, 'Липецка'),
	(53, 'Рязань', 'Рязане', 'ryazani', 1, 'Рязани'),
	(55, 'Могилев', 'Могилеве', 'mogilev', 3, 'Могилева'),
	(57, 'Астрахань', 'Астрахани', 'astrahan', 1, 'Астрахани'),
	(58, 'Смоленск', 'Смоленске', 'smolensk', 1, 'Смоленска');
/*!40000 ALTER TABLE `city` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
