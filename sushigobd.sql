/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.18-MariaDB : Database - sushigobd
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `categories` */

insert  into `categories`(`id`,`category`,`created_at`,`updated_at`) values 
(1,'PLATE COLOR: BLUE',NULL,NULL),
(2,'PLATE COLOR: GREY',NULL,NULL),
(3,'PLATE COLOR: GREEN',NULL,NULL),
(4,'PLATE COLOR: RED',NULL,NULL),
(5,'À LA CARTE MENU',NULL,NULL),
(6,'DRINKS',NULL,NULL),
(7,'DESSERTS',NULL,NULL),
(8,'ICE CREAM SUNDAE',NULL,NULL);

/*Table structure for table `food_items` */

DROP TABLE IF EXISTS `food_items`;

CREATE TABLE `food_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `food_items` */

insert  into `food_items`(`id`,`category_id`,`title`,`description`,`price`,`image`,`created_at`,`updated_at`) values 
(1,1,'Miso Soup',NULL,150,NULL,NULL,NULL),
(2,1,'Cucumber Hoso Maki',NULL,150,NULL,NULL,NULL),
(3,1,'Avocado Hoso Maki',NULL,150,NULL,NULL,NULL),
(4,1,'Teriyaki Chicken',NULL,150,NULL,NULL,NULL),
(5,1,'Crab Salad Hoso Maki',NULL,150,NULL,NULL,NULL),
(6,1,'California Roll',NULL,150,NULL,NULL,NULL),
(7,1,'Green Salad Hoso Maki',NULL,150,NULL,NULL,NULL),
(8,1,'Seasonal Veg Roll',NULL,150,NULL,NULL,NULL),
(9,2,'Cream Cheese Crab Roll ',NULL,200,NULL,NULL,NULL),
(10,2,'Salmon Spicy Roll',NULL,200,NULL,NULL,NULL),
(11,2,'Ebi Tempura Roll',NULL,200,NULL,NULL,NULL),
(12,2,'Dragon Roll',NULL,200,NULL,NULL,NULL),
(13,2,'Chicken Salad',NULL,200,NULL,NULL,NULL),
(14,2,'Avocado Nigiri',NULL,200,NULL,NULL,NULL),
(15,2,'Cuttle Fish Maki',NULL,200,NULL,NULL,NULL),
(16,2,'Tamago Maki',NULL,200,NULL,NULL,NULL),
(17,2,'Chicken Tempura',NULL,200,NULL,NULL,NULL),
(18,3,'Salmon Hoso Maki',NULL,300,NULL,NULL,NULL),
(19,3,'Panko Ebi Maki',NULL,300,NULL,NULL,NULL),
(20,3,'Cream Cheese Salmon Roll',NULL,300,NULL,NULL,NULL),
(21,3,'Tuna Spicy Roll',NULL,300,NULL,NULL,NULL),
(22,3,'Alaskan Roll',NULL,300,NULL,NULL,NULL),
(23,3,'Baby Corn Gunkan',NULL,300,NULL,NULL,NULL),
(24,3,'Tuna Hoso Maki',NULL,300,NULL,NULL,NULL),
(25,4,'Prawn Tempura',NULL,350,NULL,NULL,NULL),
(26,4,'Tuna Nigiri',NULL,350,NULL,NULL,NULL),
(27,4,'Shiromi Nigiri',NULL,350,NULL,NULL,NULL),
(28,4,'Prawn Nigiri',NULL,350,NULL,NULL,NULL),
(29,4,'Cuttlefish Tempura',NULL,350,NULL,NULL,NULL),
(30,4,'Crab Nigiri',NULL,350,NULL,NULL,NULL),
(31,4,'Chicken Katsu	',NULL,350,NULL,NULL,NULL),
(32,4,'Funky Maki',NULL,350,NULL,NULL,NULL),
(33,5,'Edamame',NULL,350,NULL,NULL,NULL),
(34,5,'Tobiko Gunkan',NULL,300,NULL,NULL,NULL),
(35,5,'Salmon Gunkan',NULL,450,NULL,NULL,NULL),
(36,5,'Tuna Gunkan',NULL,450,NULL,NULL,NULL),
(37,5,'Beef Maki Roll',NULL,350,NULL,NULL,NULL),
(38,5,'Salmon Nigiri',NULL,450,NULL,NULL,NULL),
(39,5,'Salmon Salad',NULL,400,NULL,NULL,NULL),
(40,5,'Crab Salad',NULL,450,NULL,NULL,NULL),
(41,5,'Mixed Salad',NULL,450,NULL,NULL,NULL),
(42,5,'Tuna Salad',NULL,500,NULL,NULL,NULL),
(43,5,'Beef Salad',NULL,550,NULL,NULL,NULL),
(44,5,'Chilli Garlic Edamame',NULL,550,NULL,NULL,NULL),
(45,5,'Chicken Nanban ',NULL,550,NULL,NULL,NULL),
(46,5,'Beef Nori Taco',NULL,700,NULL,NULL,NULL),
(47,5,'Bento Box (Small)',NULL,1600,NULL,NULL,NULL),
(48,5,'Bento Box (Large)',NULL,2000,NULL,NULL,NULL),
(49,6,'Aquafina Water ',NULL,15,NULL,NULL,NULL),
(50,6,'Fountain Soda	 (Coke/Sprite/Fanta)',NULL,90,NULL,NULL,NULL),
(51,6,'Canned Soda (Pepsi/Diet Pepsi/7Up/7Up Lite/Mirinda/Mountain Dew)',NULL,50,NULL,NULL,NULL),
(52,7,'Brownie ',NULL,150,NULL,NULL,NULL),
(53,7,'Fruit Tart',NULL,150,NULL,NULL,NULL),
(54,7,'Fruit Pie ',NULL,150,NULL,NULL,NULL),
(55,7,'Black Forest Cake ',NULL,300,NULL,NULL,NULL),
(56,7,'Classic Cheesecake ',NULL,400,NULL,NULL,NULL),
(57,7,'Red Velvet Cake',NULL,350,NULL,NULL,NULL),
(58,8,'Chocolate',NULL,160,NULL,NULL,NULL),
(59,8,'Vanilla',NULL,160,NULL,NULL,NULL),
(60,8,'Strawberry',NULL,175,NULL,NULL,NULL),
(61,8,'Mango',NULL,175,NULL,NULL,NULL),
(62,8,'Blueberry',NULL,250,NULL,NULL,NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`email`,`password`,`role`,`created_at`,`updated_at`) values 
(1,'admin@gmail.com','$2y$10$1q6CzgAz73o95zE.iiQIZuM0MmCciOlySeBlNuoLW/cRKVtdrUx2y',1,NULL,'2022-09-27 07:37:59'),
(2,'test3@gmail.com','$2y$10$4Bpb02IENMKM0oqUSoszWuH/CsSxEKCl7FxXrWdrI1kcF2W7bv1qC',1,'2022-09-27 07:45:29','2022-09-27 07:59:48'),
(3,'test2@gmail.com','$2y$10$1y5TX.y9cLHNMKmiaZCq0uYEJyCTr2zp27fzHJWdM.TFM6P7Gc0JW',1,'2022-09-27 07:51:55','2022-09-27 07:51:55');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
