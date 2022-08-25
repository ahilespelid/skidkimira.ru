/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE IF NOT EXISTS `advertising` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `place` varchar(50) DEFAULT NULL,
  `value` text,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

INSERT INTO `advertising` (`id`, `place`, `value`, `description`) VALUES
	(1, 'top_fullwidth', '<!-- Yandex.RTB R-A-141647-12 -->\r\n<div id="yandex_rtb_R-A-141647-12"></div>\r\n<script>window.yaContextCb.push(()=>{\r\n  Ya.Context.AdvManager.render({\r\n    renderTo: \'yandex_rtb_R-A-141647-12\',\r\n    blockId: \'R-A-141647-12\'\r\n  })\r\n})</script>', 'Верхний баннер на всю ширину'),
	(2, 'catalog_item', '', 'Рекламный блок в элементе каталога, под меню'),
	(3, 'center_fullwidth', '<!-- Yandex.RTB R-A-141647-16 -->\r\n<div id="yandex_rtb_R-A-141647-16"></div>\r\n<script>window.yaContextCb.push(()=>{\r\n  Ya.Context.AdvManager.render({\r\n    renderTo: \'yandex_rtb_R-A-141647-16\',\r\n    blockId: \'R-A-141647-16\'\r\n  })\r\n})</script>', 'Центральный блок во всю ширину в каталоге'),
	(4, 'left_undermenu', '', 'Блок слева ПОД меню'),
	(5, 'right_banners', '<!-- Yandex.RTB R-A-141647-7 -->\r\n<div id="yandex_rtb_R-A-141647-7"></div>\r\n<script type="text/javascript">\r\n    (function(w, d, n, s, t) {\r\n        w[n] = w[n] || [];\r\n        w[n].push(function() {\r\n            Ya.Context.AdvManager.render({\r\n                blockId: "R-A-141647-7",\r\n                renderTo: "yandex_rtb_R-A-141647-7",\r\n                async: true\r\n            });\r\n        });\r\n        t = d.getElementsByTagName("script")[0];\r\n        s = d.createElement("script");\r\n        s.type = "text/javascript";\r\n        s.src = "//an.yandex.ru/system/context.js";\r\n        s.async = true;\r\n        t.parentNode.insertBefore(s, t);\r\n    })(this, this.document, "yandexContextAsyncCallbacks");\r\n</script>', 'Правые баннеры небоскреб'),
	(6, 'details_top', '<!-- Yandex.RTB R-A-141647-6 -->\r\n<div id="yandex_rtb_R-A-141647-6"></div>\r\n<script type="text/javascript">\r\n    (function(w, d, n, s, t) {\r\n        w[n] = w[n] || [];\r\n        w[n].push(function() {\r\n            Ya.Context.AdvManager.render({\r\n                blockId: "R-A-141647-6",\r\n                renderTo: "yandex_rtb_R-A-141647-6",\r\n                async: true\r\n            });\r\n        });\r\n        t = d.getElementsByTagName("script")[0];\r\n        s = d.createElement("script");\r\n        s.type = "text/javascript";\r\n        s.src = "//an.yandex.ru/system/context.js";\r\n        s.async = true;\r\n        t.parentNode.insertBefore(s, t);\r\n    })(this, this.document, "yandexContextAsyncCallbacks");\r\n</script>', 'Блок в описании слева от логотипа'),
	(7, 'footer_counters', '        <script>\r\n            (function (i, s, o, g, r, a, m) {\r\n                i[\'GoogleAnalyticsObject\'] = r;\r\n                i[r] = i[r] || function () {\r\n                    (i[r].q = i[r].q || []).push(arguments)\r\n                }, i[r].l = 1 * new Date();\r\n                a = s.createElement(o),\r\n                        m = s.getElementsByTagName(o)[0];\r\n                a.async = 1;\r\n                a.src = g;\r\n                m.parentNode.insertBefore(a, m)\r\n            })(window, document, \'script\', \'//www.google-analytics.com/analytics.js\', \'ga\');\r\n\r\n            ga(\'create\', \'UA-51972527-1\', \'auto\');\r\n            ga(\'send\', \'pageview\');\r\n\r\n        </script>', 'Счетчики в футер'),
	(8, 'underlogo_detail', '<!-- Yandex.RTB R-A-141647-11 -->\r\n<div id="yandex_rtb_R-A-141647-11"></div>\r\n<script>window.yaContextCb.push(()=>{\r\n  Ya.Context.AdvManager.render({\r\n    renderTo: \'yandex_rtb_R-A-141647-11\',\r\n    blockId: \'R-A-141647-11\'\r\n  })\r\n})</script>', 'Блок под лого в деталях'),
	(9, 'mobile_catalogitem', '<!-- Yandex.RTB R-A-141647-15 -->\r\n<div id="yandex_rtb_R-A-141647-15"></div>\r\n<script>window.yaContextCb.push(()=>{\r\n  Ya.Context.AdvManager.render({\r\n    renderTo: \'yandex_rtb_R-A-141647-15\',\r\n    blockId: \'R-A-141647-15\'\r\n  })\r\n})</script>', 'Блок в каталоге в мобильной версии'),
	(10, 'mobile_catalogitem2', '<!-- Yandex.RTB R-A-141647-8 -->\r\n<div id="yandex_rtb_R-A-141647-8"></div>\r\n<script type="text/javascript">\r\n    (function(w, d, n, s, t) {\r\n        w[n] = w[n] || [];\r\n        w[n].push(function() {\r\n            Ya.Context.AdvManager.render({\r\n                blockId: "R-A-141647-8",\r\n                renderTo: "yandex_rtb_R-A-141647-8",\r\n                async: true\r\n            });\r\n        });\r\n        t = d.getElementsByTagName("script")[0];\r\n        s = d.createElement("script");\r\n        s.type = "text/javascript";\r\n        s.src = "//an.yandex.ru/system/context.js";\r\n        s.async = true;\r\n        t.parentNode.insertBefore(s, t);\r\n    })(this, this.document, "yandexContextAsyncCallbacks");\r\n</script>', 'Блок 2 в каталоге в мобильной версии и после "похожие предложения"'),
	(11, 'mobile_brands', '', 'Блок в брендах после буквы М и перед "текщие акции"'),
	(12, 'allpages_header', '', 'На всех страницах в самом верху'),
	(14, 'mobile_catalogitem3', '<!-- Yandex.RTB R-A-141647-9 -->\r\n<div id="yandex_rtb_R-A-141647-9"></div>\r\n<script type="text/javascript">\r\n    (function(w, d, n, s, t) {\r\n        w[n] = w[n] || [];\r\n        w[n].push(function() {\r\n            Ya.Context.AdvManager.render({\r\n                blockId: "R-A-141647-9",\r\n                renderTo: "yandex_rtb_R-A-141647-9",\r\n                async: true\r\n            });\r\n        });\r\n        t = d.getElementsByTagName("script")[0];\r\n        s = d.createElement("script");\r\n        s.type = "text/javascript";\r\n        s.src = "//an.yandex.ru/system/context.js";\r\n        s.async = true;\r\n        t.parentNode.insertBefore(s, t);\r\n    })(this, this.document, "yandexContextAsyncCallbacks");\r\n</script>', 'Блок 3 в каталоге в мобильной версии и в компании'),
	(15, 'left_innermenu', '', 'Блок внутри левого меню'),
	(16, 'top_rightheader', '', 'Блок около заголовка');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
