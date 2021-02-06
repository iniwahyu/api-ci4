/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 5.7.24 : Database - sinauflu
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
  `level` varchar(100) DEFAULT NULL COMMENT 'Admin, User, Ambulance',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `auth` */

insert  into `auth`(`id`,`fullname`,`phone`,`password`,`sandi`,`ktp`,`level`,`created_at`,`updated_at`) values 
(1,'Jada Facers','12343242','$2y$10$2TZI8iA5WuhVL2cNvi16ZeNRyZoXeXaod5LH9Ch6tzV6nwLmxrJ5W','123',NULL,'User','2021-01-06 10:16:32','2021-01-31 20:02:40'),
(19,'Chrissy Costanza','6282313','$2y$10$AwYOKbgWYexUbiLds1KWRePEIoRbx/6d58T8BfqWdn4ESSCJxICK.','chrissy',NULL,'Admin','2021-01-31 20:19:20','2021-02-05 13:39:30');

/*Table structure for table `pelaporan` */

DROP TABLE IF EXISTS `pelaporan`;

CREATE TABLE `pelaporan` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_user` bigint(20) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `latitude` varchar(25) DEFAULT NULL,
  `longitude` varchar(25) DEFAULT NULL,
  `lokasi` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;

/*Data for the table `pelaporan` */

insert  into `pelaporan`(`id`,`id_user`,`image`,`latitude`,`longitude`,`lokasi`,`created_at`,`updated_at`) values 
(1,19,'d37d59f0-02b1-4065-aa12-7d321de72252.PNG','-6.2342255','106.9539327','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 15:55:08','2021-02-04 15:55:08'),
(2,19,'a7c078ab-4928-4476-8fa1-bca14f2b238b.png','-6.2342246','106.9539288','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 15:56:41','2021-02-04 15:56:41'),
(3,19,'e31d298a-6584-47fc-aa9d-058ab3a78380.png','-6.2342242','106.9539267','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 16:09:33','2021-02-04 16:09:33'),
(4,19,'81164dad-53f5-4e8f-adfb-3f5fb2d00a01.PNG','-6.2342255','106.9539327','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 16:11:05','2021-02-04 16:11:05'),
(5,19,'e0bddf9e-8e39-4270-8c2a-c4f6ae48e167.png','-6.2342246','106.953928','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 16:14:11','2021-02-04 16:14:11'),
(6,19,'2b9c3268-5861-4ec3-9ace-2faa9a2e210a.png','-6.2342257','106.9539317','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 16:18:43','2021-02-04 16:18:43'),
(7,19,'6c452cef-0746-4992-a242-7b6cb5404846.png','-6.2342253','106.9539294','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 16:19:42','2021-02-04 16:19:42'),
(8,19,'57831749-1feb-4516-a6dc-79cdb1024e9f.png','-6.2342255','106.9539326','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 16:21:59','2021-02-04 16:21:59'),
(9,19,'82b3d310-04e0-4d35-9f68-b89c8a29e109.png','-6.2342256','106.95393','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 18:12:24','2021-02-04 18:12:24'),
(10,19,'b3d3aefc-8aed-487c-a161-10b521662e0d.png','-6.2342255','106.9539317','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 18:16:06','2021-02-04 18:16:06'),
(11,19,'8926043b-8b50-4d18-8308-5e7fd682d543.PNG','-6.2342255','106.9539327','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 18:16:15','2021-02-04 18:16:15'),
(12,19,'81826e11-7e8f-4e8c-853c-0b152763f5fd.png','-6.2342253','106.9539294','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 18:38:47','2021-02-04 18:38:47'),
(13,19,'a2dfb386-07f6-4aa0-ae0d-cc08de2309a2.png','-6.2342241','106.9539255','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 18:46:12','2021-02-04 18:46:12'),
(14,19,'d0ea3466-de84-475f-a76e-88b76f8f7963.jpg','-6.2356016','106.9522777','No., Jl. Kumpi Nidan No.44, RT.008/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 19:15:26','2021-02-04 19:15:26'),
(15,19,'fc1e0148-14a7-49b2-a3c2-3894023cc7fa.jpg','-6.2356016','106.9522777','No., Jl. Kumpi Nidan No.44, RT.008/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 19:16:35','2021-02-04 19:16:35'),
(16,19,'e5c85462-ddce-4cc6-b2e7-a7e9e0148328.PNG','-6.2342255','106.9539327','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 19:54:05','2021-02-04 19:54:05'),
(17,19,'84cfbf9c-98c4-405b-bdcf-bb7798a436ae.jpg','-6.2356016','106.9522777','No., Jl. Kumpi Nidan No.44, RT.008/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 19:59:20','2021-02-04 19:59:20'),
(18,19,'7df113c3-60aa-4258-b2ee-f854bc0891ac.jpg','-6.2356016','106.9522777','No., Jl. Kumpi Nidan No.44, RT.008/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 19:59:40','2021-02-04 19:59:40'),
(19,19,'1e18c2d3-1c77-4021-8aca-e2d725b38082.jpg','-6.2342241','106.9539295','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 20:00:55','2021-02-04 20:00:55'),
(20,19,'cddfcced-83b3-4da0-bfd7-fbf599b8443c.jpg','-6.2356016','106.9522777','No., Jl. Kumpi Nidan No.44, RT.008/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 20:11:03','2021-02-04 20:11:03'),
(21,19,'ac80278d-8d55-48ae-9e76-4e625b27b6cf.jpg','-6.2356016','106.9522777','No., Jl. Kumpi Nidan No.44, RT.008/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 20:24:25','2021-02-04 20:24:25'),
(22,19,'7347d73a-81fe-4a7a-9a4a-13dedfd67953.433fad3f-a20e-47da-b632-37032c5108fe1617719690.jpg','-6.234224','106.9539281','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 20:27:02','2021-02-04 20:27:02'),
(23,19,'e682fb9e-3748-4fd4-bc07-263b78d4033e-433fad3f-a20e-47da-b632-37032c5108fe1617719690.jpg','-6.2342239','106.9539284','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 20:33:04','2021-02-04 20:33:04'),
(24,NULL,'f345d609-0b69-425b-bf3c-a94b528536b3-67b0dc61-fe0e-4271-bf30-bf4592e859305760890230268106318.jpg',NULL,NULL,NULL,'2021-02-04 20:38:02','2021-02-04 20:38:02'),
(25,NULL,'840b885a-0963-4ce1-a835-a89bdaedf3c9-433fad3f-a20e-47da-b632-37032c5108fe1617719690.jpg',NULL,NULL,NULL,'2021-02-04 20:38:40','2021-02-04 20:38:40'),
(26,NULL,'23431fa4-d568-4ec5-9de0-2680c4cb5b95-46d59da4-cec4-4e2c-9887-a548005f3bb9742271260413434676.jpg',NULL,NULL,NULL,'2021-02-04 20:39:06','2021-02-04 20:39:06'),
(27,NULL,'878c26ff-220f-43a6-aa85-266235e4416d-0ae5518b-2ce1-4f03-bb9d-1749c957fb907503694618492906963.jpg',NULL,NULL,NULL,'2021-02-04 20:39:35','2021-02-04 20:39:35'),
(28,NULL,'ae05807b-1fd0-437d-9bd6-f63f426a8d3b-21a13b89-9254-475a-8297-7d121573eb252866535610329325484.jpg',NULL,NULL,NULL,'2021-02-04 20:42:01','2021-02-04 20:42:01'),
(29,NULL,'c5ded5e9-e570-4cfa-8657-c1962075120e.jpg',NULL,NULL,NULL,'2021-02-04 20:42:30','2021-02-04 20:42:30'),
(30,NULL,'2f0a45e5-74cf-4955-9638-c164341ab860.jpg',NULL,NULL,NULL,'2021-02-04 20:42:30','2021-02-04 20:42:30'),
(31,NULL,'7a8f232a-ac45-4a65-87e1-1048b21d2abb.jpg',NULL,NULL,NULL,'2021-02-04 20:42:37','2021-02-04 20:42:37'),
(32,NULL,'223037fc-cc5a-47b0-a160-fa39d23b7b4b.jpg',NULL,NULL,NULL,'2021-02-04 20:44:03','2021-02-04 20:44:03'),
(33,19,'e7dc8377-bf03-4d1b-844c-7f1a9e40ccb1.jpg','-6.234224','106.9539281','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 20:44:57','2021-02-04 20:44:57'),
(34,19,'61aec81d-e89e-4137-9fd0-a355070f6329.jpg','-6.2342239','106.9539284','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 20:49:02','2021-02-04 20:49:02'),
(35,19,'f941876b-1235-4267-80f3-1a6d6ea17bc5.jpg','-6.2342243','106.9539264','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 20:50:32','2021-02-04 20:50:32'),
(36,19,'cdf6f6ef-cb73-4b88-b0fc-9f9ee4b98ce1.jpg','-6.2356016','106.9522777','No., Jl. Kumpi Nidan No.44, RT.008/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 20:54:02','2021-02-04 20:54:02'),
(37,19,'4938d9f5-94c4-4f31-a00a-78c6e167dd7d.jpg','-6.2356016','106.9522777','No., Jl. Kumpi Nidan No.44, RT.008/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 20:55:24','2021-02-04 20:55:24'),
(38,19,'e8f80f25-0811-457d-b448-483a25251f82.jpg','-6.2356016','106.9522777','No., Jl. Kumpi Nidan No.44, RT.008/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 20:56:30','2021-02-04 20:56:30'),
(39,19,'ef94d1f3-21ed-40f6-82be-b4211fc88d27.jpg','-6.234224','106.9539273','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 20:59:21','2021-02-04 20:59:21'),
(40,19,'296f51b6-c277-4305-8898-0f5d1ad13ac2.jpg','-6.2342249','106.9539301','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 22:34:25','2021-02-04 22:34:25'),
(41,19,'782d7b14-474b-420e-a76b-5730c66bcb21.jpg','-6.2342255','106.953932','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 23:01:58','2021-02-04 23:01:58'),
(42,19,'d4790f61-44d4-4c27-b34d-d9220e89f42b.jpg','-6.2342254','106.9539338','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 23:09:04','2021-02-04 23:09:04'),
(43,19,'cfb80a7a-87cb-4549-b823-e1140b544f9e.jpg','-6.2342254','106.9539338','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 23:09:41','2021-02-04 23:09:41'),
(44,19,'677b20df-2da5-436b-a154-0ef51952178b.jpg','-6.2342308','106.9539346','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 23:19:11','2021-02-04 23:19:11'),
(45,19,'42df6974-6fff-46db-9fa3-bbe1e1e14284.jpg','-6.2342241','106.9539265','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 23:21:38','2021-02-04 23:21:38'),
(46,19,'17b48a91-0430-4270-b167-836fc8086085.jpg','-6.2342242','106.9539267','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 23:22:39','2021-02-04 23:22:39'),
(47,19,'fd7d3ef8-e746-40f7-9fb9-2172b6420fc1.jpg','-6.2356016','106.9522777','No., Jl. Kumpi Nidan No.44, RT.008/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 23:32:01','2021-02-04 23:32:01'),
(48,19,'a9815f17-3b49-4133-81e8-0adc3f649fd0.jpg','-6.2342256','106.9539312','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 23:33:49','2021-02-04 23:33:49'),
(49,19,'603508c7-4700-4af5-866e-0c595ec5a7e2.jpg','-6.2342255','106.9539304','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 23:35:18','2021-02-04 23:35:18'),
(50,19,'571cdbe1-26f9-4211-8a62-5bc9d7dd9c54.jpg','-6','110','jonggol','2021-02-04 23:44:18','2021-02-04 23:44:18'),
(51,19,'9a5a8b96-fa0b-4885-9a85-a5420f5328ac.jpg','-6.2342255','106.9539314','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-04 23:44:19','2021-02-04 23:44:19'),
(52,19,'45238418-6d5e-4899-b771-390a7f8c9932.jpg','-6','110','jonggol','2021-02-04 23:44:20','2021-02-04 23:44:20'),
(53,19,'41600a9c-edfb-432e-be45-741ca59946eb.jpg','-6.2342242','106.9539267','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-05 00:15:30','2021-02-05 00:15:30'),
(54,19,'a30d8535-85a8-4e2c-8b56-ee7ffde6c55c.jpg','-6.2342239','106.9539277','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-05 00:23:45','2021-02-05 00:23:45'),
(55,19,'efb3de23-ca3a-4f43-82af-014aaaa0c244.jpg','-6.2342243','106.9539261','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-05 00:27:47','2021-02-05 00:27:47'),
(56,19,'3403e7e1-58a2-4757-9fb2-92e3719c87e0.jpg','-6.2342243','106.9539286','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-05 00:35:47','2021-02-05 00:35:47'),
(57,19,'83858ed9-410b-4c86-8e73-d1bd65ca90b7.jpg','-6','110','jonggol','2021-02-05 00:37:45','2021-02-05 00:37:45'),
(58,19,'3897e569-c2b6-49f6-a547-e5e1cd914e42.jpg','-6','110','jonggol','2021-02-05 00:40:28','2021-02-05 00:40:28'),
(59,19,'5fb76b1d-fd45-4bf6-83bc-a03ed94ce9ba.jpg','-6','110','jonggol','2021-02-05 00:44:56','2021-02-05 00:44:56'),
(60,19,'167b40c5-78f5-4036-b94d-b5aedd961040.jpg','-6.234224','106.9539267','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-05 00:50:59','2021-02-05 00:50:59'),
(61,19,'817be493-66e2-46c1-882a-d807e6195d5c.jpg','-6.2356016','106.9522777','No., Jl. Kumpi Nidan No.44, RT.008/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-05 00:55:00','2021-02-05 00:55:00'),
(62,19,'b7d0077d-f93a-4d1b-a8fe-3a78a29d9877.jpg','-6.2342243','106.9539261','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-05 00:58:43','2021-02-05 00:58:43'),
(63,19,'041575ee-466d-49fd-8ea2-a2614c93913d.jpg','-6.2341966','106.9539286','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-05 07:51:10','2021-02-05 07:51:10'),
(64,19,'1f14e251-792e-43d3-9823-4cdcfab81710.jpg','-6','110','jonggol','2021-02-05 07:52:00','2021-02-05 07:52:00'),
(65,19,'e1cea65e-4278-437a-b04c-c914be1beccf.jpg','-6','110','jonggol','2021-02-05 07:53:34','2021-02-05 07:53:34'),
(66,19,'5a54103c-90eb-4ece-961d-42bca248d356.PNG','-6.2342255','106.9539327','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-05 07:54:30','2021-02-05 07:54:30'),
(67,19,'fef0be2b-c619-4be3-8d1e-0df8ff5efa49.jpg','-6','110','jonggol','2021-02-05 07:56:19','2021-02-05 07:56:19'),
(68,19,'c48e8ef9-7d14-42a6-b2fd-09f2195afad3.jpg','-6','110','jonggol','2021-02-05 07:57:26','2021-02-05 07:57:26'),
(69,19,'23e44367-ae84-49c3-ba2b-4057382db407.jpg','-6','110','jonggol','2021-02-05 07:57:33','2021-02-05 07:57:33'),
(70,19,'e2306bd3-a186-46ee-b5a2-342814645874.jpg','-6','110','jonggol','2021-02-05 07:58:15','2021-02-05 07:58:15'),
(71,19,'9d871f43-1ded-428b-9b99-c7471d969c58.jpg','-6','110','jonggol','2021-02-05 07:58:26','2021-02-05 07:58:26'),
(72,19,'179886ae-3803-45b8-918c-b18969e32043.jpg','-6','110','jonggol','2021-02-05 07:59:04','2021-02-05 07:59:04'),
(73,19,'ca6c4d49-9a04-4b71-8a8e-e219288719a7.jpg','-6','110','jonggol','2021-02-05 07:59:11','2021-02-05 07:59:11'),
(74,19,'586fb3f6-b2c6-4b76-8c4c-7e608ca5f1b9.jpg','-6.2342246','106.9539276','Jl. Kumpi Nidan No.7, RT.005/RW.001, Bintara Jaya, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17136, Indonesia','2021-02-05 08:06:24','2021-02-05 08:06:24');

/*Table structure for table `pendukung` */

DROP TABLE IF EXISTS `pendukung`;

CREATE TABLE `pendukung` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` text,
  `latitude` varchar(50) DEFAULT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `jenis` varchar(50) DEFAULT NULL COMMENT 'Rumah Sakit, Kantor Polisi',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `pendukung` */

insert  into `pendukung`(`id`,`nama`,`alamat`,`latitude`,`longitude`,`jenis`,`created_at`,`updated_at`) values 
(1,'RS Jiwa Sehat','Los Angeles','-7.0336367','110.4672381','RS','2021-01-31 16:41:10','2021-01-31 17:42:53'),
(2,'Gelombang 5','Jl. Imam Bonjol No.207, Pendrikan Kidul, Semarang Tengah, Kota Semarang, Jawa Tengah 50131','-7.0882547','110.4376863','RS','2021-01-31 17:49:02','2021-01-31 20:09:40');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
