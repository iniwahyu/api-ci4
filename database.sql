/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.3.27-MariaDB-cll-lve : Database - pmbmasuk_sin
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `auth` */

DROP TABLE IF EXISTS `auth`;

CREATE TABLE `auth` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `sandi` varchar(100) DEFAULT NULL,
  `ktp` varchar(100) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL COMMENT 'Admin, User, Ambulance',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `auth` */

insert  into `auth`(`id`,`fullname`,`phone`,`password`,`sandi`,`ktp`,`level`,`created_at`,`updated_at`) values 
(1,'Jada Facer','6281232132132','$2y$10$qc3rNx2aYg44VOeXhccV8enyyJZWbU3SrSp3nYniuxyK6O3hK0KTu','123',NULL,NULL,'2021-01-06 10:16:32','2021-01-06 10:16:32'),
(9,'Aku','0843243242','$2y$10$57FAfW2zkd305El7UJmel.PJ.Enk/e4cihiOhqKUdPSW7kfmloynq','haha',NULL,NULL,'2021-01-17 16:04:50','2021-01-17 16:04:50'),
(10,NULL,NULL,'$2y$10$yzHUsnqgYFOn9CutagMMXuf.YXfuG24alJ8WdrvI70p0OkgAWip1S',NULL,NULL,NULL,'2021-01-17 16:05:13','2021-01-17 16:05:13'),
(11,NULL,NULL,'$2y$10$w0LFvHSZ4xzJErK0o0BOcevQd6T5wXOoj5AMeX8tNfY.Q5vXrej.q',NULL,NULL,NULL,'2021-01-17 16:05:35','2021-01-17 16:05:35'),
(12,NULL,NULL,'$2y$10$3wenP3EPKXcsby7ZCIkpmupHtlnM9nZcxi6ZBPeqggKGvFnTJFKZq',NULL,NULL,NULL,'2021-01-17 16:08:28','2021-01-17 16:08:28'),
(13,'null','628123456789','$2y$10$wQ/JAeAB04eredAJqqle4u32egUYavl5tw0k14BhRV2lP63MItQQa','asdqwe123',NULL,NULL,'2021-01-17 16:12:52','2021-01-17 16:12:52'),
(14,'null','628123456789','$2y$10$rWZ/1NiRbVuj306Z.8WBBesKzruU6rNYl3GD0qli5SG3vSViOCS6W','asdqwe123',NULL,NULL,'2021-01-17 16:18:12','2021-01-17 16:18:12'),
(15,'null','628123456789','$2y$10$VDxy0Sa4TxRCghglbpds.unf2tqpGgmcBo/jDY49XBEy9Ddi3/btq','asdqwe123',NULL,NULL,'2021-01-17 16:18:41','2021-01-17 16:18:41'),
(16,'beng beng','62809764321','$2y$10$BRh4BKQzjDuZpapa4OQy6u1dwkcpgCYLpXxpnYMIW9IY1EJSkH1wi','asdqwe123',NULL,NULL,'2021-01-17 16:27:13','2021-01-17 16:27:13'),
(17,'bambang','081312345678','$2y$10$7yuLppgRjWBzg0/lj9Dw8uRWmTvx1ese9dwtJ33NIsSzZbAsYu6Py','asdqwe123',NULL,NULL,'2021-01-17 16:27:42','2021-01-17 16:27:42'),
(18,'aku jaka	','4545435','$2y$10$.gwIgmLp.Y5L8DlqQmwvOOptRBjbJQ1w7wN4zM.kV4k7b9.H82hQq','1234',NULL,NULL,'2021-01-17 16:28:56','2021-01-17 16:28:56'),
(19,'den','0813987654','$2y$10$orKDZ4kpgq6t7yUbRXdr7uUjfHcWFpuASE/oZE8BnQiOFlFq7WXui','asdqwe123',NULL,NULL,'2021-01-17 16:41:44','2021-01-23 12:24:31');

/*Table structure for table `pelaporan` */

DROP TABLE IF EXISTS `pelaporan`;

CREATE TABLE `pelaporan` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_user` bigint(20) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `latitude` varchar(25) DEFAULT NULL,
  `longitude` varchar(25) DEFAULT NULL,
  `lokasi` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pelaporan` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
