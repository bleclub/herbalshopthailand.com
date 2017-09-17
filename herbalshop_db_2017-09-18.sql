# ************************************************************
# Sequel Pro SQL dump
# Version 4499
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.42)
# Database: herbalshop_db
# Generation Time: 2017-09-17 19:35:26 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table bt_contactus
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bt_contactus`;

CREATE TABLE `bt_contactus` (
  `contact_id` int(20) NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(500) NOT NULL,
  `contact_email` varchar(500) NOT NULL,
  `contact_phone` varchar(20) NOT NULL,
  `contact_message` text NOT NULL,
  `contact_createdate` datetime NOT NULL,
  `contact_status` varchar(20) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table bt_content
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bt_content`;

CREATE TABLE `bt_content` (
  `content_id` int(20) NOT NULL AUTO_INCREMENT,
  `content_categories` varchar(100) DEFAULT NULL,
  `content_subject_th` text,
  `content_subject_en` text,
  `content_title_th` text,
  `content_title_en` text,
  `content_detail_th` text,
  `content_detail_en` text,
  `content_createdate` datetime DEFAULT NULL,
  `content_lastupdate` datetime DEFAULT NULL,
  `content_view` int(20) DEFAULT NULL,
  `content_status` enum('publish','unpublish') DEFAULT 'unpublish',
  `content_link` varchar(200) DEFAULT NULL,
  `officeID` int(20) NOT NULL,
  `userID` int(20) NOT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

LOCK TABLES `bt_content` WRITE;
/*!40000 ALTER TABLE `bt_content` DISABLE KEYS */;

INSERT INTO `bt_content` (`content_id`, `content_categories`, `content_subject_th`, `content_subject_en`, `content_title_th`, `content_title_en`, `content_detail_th`, `content_detail_en`, `content_createdate`, `content_lastupdate`, `content_view`, `content_status`, `content_link`, `officeID`, `userID`)
VALUES
	(1,'about','ประวัติความเป็นมา','ประวัติความเป็นมา',NULL,NULL,'<p>องค์การเภสัชกรรม ซึ่งเป็นรัฐวิสาหกิจในการกำกับดูแลของกระทรวงสาธารณสุขหลังจากที่ได้ประสบความ สำเร็จในการผลิตยาแผนปัจจุบันมาแล้ว ได้ทำการวิจัยและพัฒนาสมุนไพรเพื่อใช้เป็นยาและผลิตภัณฑ์เสริมอาหาร อย่างต่อเนื่อง และขยายผลการวิจัยและพัฒนาไปสู่การผลิตผลิตภัณฑ์สมุนไพรเชิงอุตสาหกรรม โดยใช้แทคโนโลยี และกรรมวิธีผลิตที่ดี (GMP) และระบบคุณภาพ ISO 9002 รวมทั้งมาตรฐานการควบคุมคุณภาพ อย่างไรก็ดี ปริมาณการผลิตยังไม่เพียงพอกับความต้องการของประชาชน<br />\r\n<br />\r\nดังนั้นในปี พ.ศ. 2538<br />\r\nองค์การเภสัชกรรมจึงได้สนองนโยบายของรัฐบาลในการส่งเสริมสมุนไพรไทยให้แพร่ หลายยิ่งขึ้น โดยการร่วมทุนกับภาคเอกชนจัดตั้ง บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด พร้อมกับก่อสร้างโรงงาน ผลิตผลิตภัณฑ์ดังกล่าวขึ้นโดยเฉพาะ ซึ่งองค์การเภสัชกรรมเป็นผู้ถือหุ้นรายใหญ่ โรงงานผลิตผลิตภัณฑ์สมุนไพรไทยตั้งอยู่ที่นิคมอุตสาหกรรมวังจุฬา อ.วังน้อย จังหวัดพระนครศรีอยุธยา ได้ก่อสร้างแล้วเสร็จและเริ่มผลิตยา และผลิตภัณฑ์เสริมอาหารจากสมุนไพร ตั้งแต่เดือนสิงหาคม 2541 เป็นต้นมา โดยได้รับการถ่ายทอดเทคโนโลยีการผลิตจากองค์การเภสัชกรรม ซึ่งตั้งแต่เดือนกรกฎาคม 2542 โรงงาน สามารถผลิตยาและผลิตภัณฑ์เสริมอาหารได้จำนวน 22 รายการ และมีแผนการเพิ่มจำนวนรายการให้มากขึ้นตามความต้องการของตลาดในอนาคต ผลิตภัณฑ์ทุกรายการได้รับก</p>\r\n\r\n<h3>บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด กับ มาตรฐานสากล หลักเกณฑ์วิธีการที่ดีในการผลิตยา (Good Manufacturing Practice:GMP) *1</h3>\r\n\r\n<p>หลักเกณฑ์วิธีการที่ดีในการผลิต (GMP) คือ ข้อกำหนด ระเบียบ แบบแผน และวิธีปฏิบัติที่นำมาใช้ในการผลิตที่ดีและได้สินค้าที่มีคุณภาพมาตรฐาน ซึ่งครอบคลุมถึง สถานที่ผลิตอุปกรณ์เครื่องจักร บุคลากร วัสดุ เอกสารต่าง ๆ และสิ่งอื่นที่เกี่ยวข้องกับกระบวนการการผลิตทุกขั้นตอน ตั้งแต่การนำวัตถุดิบเข้าในสถานที่ผลิต ผ่านขั้นตอนการผลิตต่าง ๆ และการตรวจสอบคุณภาพ การบรรจุ การเข้าหีบห่อ ตลอดจนการจัดเก็บ จนได้เป็นสินค้าสำเร็จรูปและออกจำหน่าย แก่ประชาชน GMP มีหลักการผลิตยาด้วยความมั่นใจว่า ได้มาตรฐานตรงตามที่กำหนดไว้ เรียกว่า &quot; ผลิตอย่างมีคุณภาพที่ตรวจสอบได้&quot; หรือ &quot;Quality that must be built-in and tested &quot; สำหรับสินค้ายา คุณภาพ หมายถึง ยาสำเร็จรูปที่มีปริมาณตัวยา รูปแบบ การปลดปล่อยตัวยา ความคงสภาพ ประสิทธิผลการรักษา ฯลฯ ตรงตามที่ได้ขึ้นทะเบียนไว้กับกระทรวงสาธารณสุขซึ่งผู้ประกอบการผลิตยา จะต้องทำได้ตามนั้นทุกครั้ง ซึ่งน่าจะเป็นมาตรฐานที่กำหนดมากกว่าจะเรียกเป็นคุณภาพ แต่คุณภาพตัวยาตามความเข้าใจของประชาชนหมายถึง ยารักษาโรคให้หายได้ ขณะที่แพทย์ อย. และหน่วยงานจัดซื้อจะใช้ GMP เป็นสื่อกลางแสดงถึงซึ่งคุณภาพมาตรฐานของยาที่ผลิตได้<br />\r\n<br />\r\nข้อมูลอ้างอิง *1 คณะกรรมการ โครงการศึกษาวิเคราะห์ระบบยาของประเทศไทย &ldquo;ระบบยาของประเทศไทย&rdquo; 2545 หน้า 475-477</p>\r\n','<p>องค์การเภสัชกรรม ซึ่งเป็นรัฐวิสาหกิจในการกำกับดูแลของกระทรวงสาธารณสุขหลังจากที่ได้ประสบความ สำเร็จในการผลิตยาแผนปัจจุบันมาแล้ว ได้ทำการวิจัยและพัฒนาสมุนไพรเพื่อใช้เป็นยาและผลิตภัณฑ์เสริมอาหาร อย่างต่อเนื่อง และขยายผลการวิจัยและพัฒนาไปสู่การผลิตผลิตภัณฑ์สมุนไพรเชิงอุตสาหกรรม โดยใช้แทคโนโลยี และกรรมวิธีผลิตที่ดี (GMP) และระบบคุณภาพ ISO 9002 รวมทั้งมาตรฐานการควบคุมคุณภาพ อย่างไรก็ดี ปริมาณการผลิตยังไม่เพียงพอกับความต้องการของประชาชน<br />\r\n<br />\r\nดังนั้นในปี พ.ศ. 2538<br />\r\nองค์การเภสัชกรรมจึงได้สนองนโยบายของรัฐบาลในการส่งเสริมสมุนไพรไทยให้แพร่ หลายยิ่งขึ้น โดยการร่วมทุนกับภาคเอกชนจัดตั้ง บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด พร้อมกับก่อสร้างโรงงาน ผลิตผลิตภัณฑ์ดังกล่าวขึ้นโดยเฉพาะ ซึ่งองค์การเภสัชกรรมเป็นผู้ถือหุ้นรายใหญ่ โรงงานผลิตผลิตภัณฑ์สมุนไพรไทยตั้งอยู่ที่นิคมอุตสาหกรรมวังจุฬา อ.วังน้อย จังหวัดพระนครศรีอยุธยา ได้ก่อสร้างแล้วเสร็จและเริ่มผลิตยา และผลิตภัณฑ์เสริมอาหารจากสมุนไพร ตั้งแต่เดือนสิงหาคม 2541 เป็นต้นมา โดยได้รับการถ่ายทอดเทคโนโลยีการผลิตจากองค์การเภสัชกรรม ซึ่งตั้งแต่เดือนกรกฎาคม 2542 โรงงาน สามารถผลิตยาและผลิตภัณฑ์เสริมอาหารได้จำนวน 22 รายการ และมีแผนการเพิ่มจำนวนรายการให้มากขึ้นตามความต้องการของตลาดในอนาคต ผลิตภัณฑ์ทุกรายการได้รับก</p>\r\n\r\n<h3>บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด กับ มาตรฐานสากล หลักเกณฑ์วิธีการที่ดีในการผลิตยา (Good Manufacturing Practice:GMP) *1</h3>\r\n\r\n<p>หลักเกณฑ์วิธีการที่ดีในการผลิต (GMP) คือ ข้อกำหนด ระเบียบ แบบแผน และวิธีปฏิบัติที่นำมาใช้ในการผลิตที่ดีและได้สินค้าที่มีคุณภาพมาตรฐาน ซึ่งครอบคลุมถึง สถานที่ผลิตอุปกรณ์เครื่องจักร บุคลากร วัสดุ เอกสารต่าง ๆ และสิ่งอื่นที่เกี่ยวข้องกับกระบวนการการผลิตทุกขั้นตอน ตั้งแต่การนำวัตถุดิบเข้าในสถานที่ผลิต ผ่านขั้นตอนการผลิตต่าง ๆ และการตรวจสอบคุณภาพ การบรรจุ การเข้าหีบห่อ ตลอดจนการจัดเก็บ จนได้เป็นสินค้าสำเร็จรูปและออกจำหน่าย แก่ประชาชน GMP มีหลักการผลิตยาด้วยความมั่นใจว่า ได้มาตรฐานตรงตามที่กำหนดไว้ เรียกว่า &quot; ผลิตอย่างมีคุณภาพที่ตรวจสอบได้&quot; หรือ &quot;Quality that must be built-in and tested &quot; สำหรับสินค้ายา คุณภาพ หมายถึง ยาสำเร็จรูปที่มีปริมาณตัวยา รูปแบบ การปลดปล่อยตัวยา ความคงสภาพ ประสิทธิผลการรักษา ฯลฯ ตรงตามที่ได้ขึ้นทะเบียนไว้กับกระทรวงสาธารณสุขซึ่งผู้ประกอบการผลิตยา จะต้องทำได้ตามนั้นทุกครั้ง ซึ่งน่าจะเป็นมาตรฐานที่กำหนดมากกว่าจะเรียกเป็นคุณภาพ แต่คุณภาพตัวยาตามความเข้าใจของประชาชนหมายถึง ยารักษาโรคให้หายได้ ขณะที่แพทย์ อย. และหน่วยงานจัดซื้อจะใช้ GMP เป็นสื่อกลางแสดงถึงซึ่งคุณภาพมาตรฐานของยาที่ผลิตได้<br />\r\n<br />\r\nข้อมูลอ้างอิง *1 คณะกรรมการ โครงการศึกษาวิเคราะห์ระบบยาของประเทศไทย &ldquo;ระบบยาของประเทศไทย&rdquo; 2545 หน้า 475-477</p>\r\n','2017-09-18 02:24:30','2017-09-18 02:24:30',NULL,'unpublish','',1200,1);

/*!40000 ALTER TABLE `bt_content` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table bt_gallery
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bt_gallery`;

CREATE TABLE `bt_gallery` (
  `gallery_id` int(20) NOT NULL AUTO_INCREMENT,
  `gallery_filename` varchar(200) NOT NULL,
  `news_id` int(20) NOT NULL,
  `content_id` int(20) NOT NULL,
  PRIMARY KEY (`gallery_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Dump of table bt_loginfo
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bt_loginfo`;

CREATE TABLE `bt_loginfo` (
  `log_id` int(20) NOT NULL AUTO_INCREMENT,
  `log_type` varchar(100) NOT NULL,
  `log_typeID` int(20) DEFAULT NULL,
  `log_detail` varchar(200) NOT NULL,
  `log_date` datetime NOT NULL,
  `log_ip` varchar(150) NOT NULL,
  `log_user` varchar(100) NOT NULL,
  `log_user_id` int(11) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

LOCK TABLES `bt_loginfo` WRITE;
/*!40000 ALTER TABLE `bt_loginfo` DISABLE KEYS */;

INSERT INTO `bt_loginfo` (`log_id`, `log_type`, `log_typeID`, `log_detail`, `log_date`, `log_ip`, `log_user`, `log_user_id`)
VALUES
	(1,'News',4,'เพิ่ม event','2017-09-18 00:22:53','::1','vanlop',1),
	(2,'News',0,'แก้ไข event','2017-09-18 00:26:08','::1','vanlop',1),
	(3,'News',0,'แก้ไข event','2017-09-18 00:26:14','::1','vanlop',1),
	(4,'News',5,'เพิ่ม event','2017-09-18 00:33:30','::1','vanlop',1),
	(5,'News',6,'เพิ่มข่าวnews','2017-09-18 01:09:32','::1','vanlop',1),
	(6,'News',0,'แก้ไข news','2017-09-18 01:18:47','::1','vanlop',1),
	(7,'News',0,'แก้ไข news','2017-09-18 01:21:19','::1','vanlop',1),
	(8,'News',0,'แก้ไข news','2017-09-18 01:27:18','::1','vanlop',1),
	(9,'News',0,'แก้ไข news','2017-09-18 01:27:49','::1','vanlop',1),
	(10,'News',0,'แก้ไข news','2017-09-18 01:27:56','::1','vanlop',1),
	(11,'News',0,'แก้ไข event','2017-09-18 01:28:06','::1','vanlop',1),
	(12,'News',0,'แก้ไข event','2017-09-18 01:28:15','::1','vanlop',1),
	(13,'News',7,'เพิ่ม event','2017-09-18 01:34:29','::1','vanlop',1),
	(14,'News',8,'เพิ่มข่าวnews','2017-09-18 01:35:28','::1','vanlop',1),
	(15,'News',9,'เพิ่ม event','2017-09-18 01:36:33','::1','vanlop',1),
	(16,'News',0,'แก้ไข event','2017-09-18 01:43:54','::1','vanlop',1),
	(17,'News',10,'เพิ่ม event','2017-09-18 01:46:08','::1','vanlop',1),
	(18,'News',11,'เพิ่ม event','2017-09-18 01:48:31','::1','vanlop',1),
	(19,'News',12,'เพิ่ม event','2017-09-18 01:49:27','::1','vanlop',1),
	(20,'News',13,'เพิ่ม event','2017-09-18 01:51:37','::1','vanlop',1),
	(21,'News',14,'เพิ่ม event','2017-09-18 01:53:23','::1','vanlop',1),
	(22,'News',15,'เพิ่ม event','2017-09-18 02:01:45','::1','vanlop',1),
	(23,'News',16,'เพิ่มข่าวnews','2017-09-18 02:04:33','::1','vanlop',1),
	(24,'News',17,'เพิ่มข่าวnews','2017-09-18 02:06:23','::1','vanlop',1),
	(25,'News',18,'เพิ่มข่าวnews','2017-09-18 02:08:36','::1','vanlop',1),
	(26,'Content',1,'แก้ไข ประวัติความเป็นมา','2017-09-18 02:24:15','::1','vanlop',1),
	(27,'Content',1,'แก้ไข ประวัติความเป็นมา','2017-09-18 02:24:30','::1','vanlop',1);

/*!40000 ALTER TABLE `bt_loginfo` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table bt_media
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bt_media`;

CREATE TABLE `bt_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `media_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `filename` text COLLATE utf8_unicode_ci NOT NULL,
  `createdate` datetime NOT NULL,
  `content_id` int(20) DEFAULT NULL,
  `news_id` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

LOCK TABLES `bt_media` WRITE;
/*!40000 ALTER TABLE `bt_media` DISABLE KEYS */;

INSERT INTO `bt_media` (`id`, `name`, `media_type`, `filename`, `createdate`, `content_id`, `news_id`)
VALUES
	(5,'company_value_img03','media','company_value_img03_566ab13934d72f7a554b6345fd7012d3.png','2017-09-17 16:28:16',NULL,NULL),
	(6,'company_value_img04','media','company_value_img04_566ab13934d72f7a554b6345fd7012d3.png','2017-09-17 16:28:16',NULL,NULL),
	(7,'company_value_img02','media','company_value_img02_566ab13934d72f7a554b6345fd7012d3.png','2017-09-17 16:28:16',NULL,NULL),
	(8,'company_value_img01','media','company_value_img01_566ab13934d72f7a554b6345fd7012d3.png','2017-09-17 16:28:16',NULL,NULL),
	(9,'news_img01','media','news_img01_fa4ed5d5a2c7d491f39f0f845c4f75c9.jpg','2017-09-17 16:33:46',NULL,NULL),
	(10,'news_img03','media','news_img03_fa4ed5d5a2c7d491f39f0f845c4f75c9.jpg','2017-09-17 16:33:46',NULL,NULL),
	(11,'news_img04','media','news_img04_fa4ed5d5a2c7d491f39f0f845c4f75c9.jpg','2017-09-17 16:33:46',NULL,NULL),
	(12,'news_img05','media','news_img05_fa4ed5d5a2c7d491f39f0f845c4f75c9.jpg','2017-09-17 16:33:46',NULL,NULL),
	(13,'news_img06','media','news_img06_fa4ed5d5a2c7d491f39f0f845c4f75c9.jpg','2017-09-17 16:33:46',NULL,NULL),
	(14,'news_img02','media','news_img02_fa4ed5d5a2c7d491f39f0f845c4f75c9.jpg','2017-09-17 16:33:46',NULL,NULL),
	(15,'news_img08','media','news_img08_fa4ed5d5a2c7d491f39f0f845c4f75c9.jpg','2017-09-17 16:33:46',NULL,NULL),
	(16,'news_img07','media','news_img07_fa4ed5d5a2c7d491f39f0f845c4f75c9.jpg','2017-09-17 16:33:46',NULL,NULL),
	(17,'news_update02','media','news_update02_a7e4e21d990060ab79547939d8574a9d.jpg','2017-09-18 02:34:25',NULL,NULL),
	(18,'news_update05','media','news_update05_a7e4e21d990060ab79547939d8574a9d.jpg','2017-09-18 02:34:25',NULL,NULL),
	(19,'news_update01','media','news_update01_a7e4e21d990060ab79547939d8574a9d.jpg','2017-09-18 02:34:25',NULL,NULL),
	(20,'news_update07','media','news_update07_a7e4e21d990060ab79547939d8574a9d.jpg','2017-09-18 02:34:25',NULL,NULL),
	(21,'news_update03','media','news_update03_a7e4e21d990060ab79547939d8574a9d.jpg','2017-09-18 02:34:25',NULL,NULL),
	(22,'news_update04','media','news_update04_a7e4e21d990060ab79547939d8574a9d.jpg','2017-09-18 02:34:25',NULL,NULL),
	(23,'news_update08','media','news_update08_a7e4e21d990060ab79547939d8574a9d.jpg','2017-09-18 02:34:25',NULL,NULL);

/*!40000 ALTER TABLE `bt_media` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table bt_news
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bt_news`;

CREATE TABLE `bt_news` (
  `news_id` int(20) NOT NULL AUTO_INCREMENT,
  `news_categories` varchar(100) DEFAULT NULL,
  `news_subject_th` varchar(200) DEFAULT NULL,
  `news_subject_en` varchar(200) DEFAULT NULL,
  `news_title_th` text,
  `news_title_en` text,
  `news_content_th` text,
  `news_content_en` text,
  `news_photo` varchar(200) DEFAULT NULL,
  `news_photoslide` varchar(200) DEFAULT NULL,
  `news_date` date DEFAULT NULL,
  `news_createdate` datetime DEFAULT NULL,
  `news_lastupdate` datetime DEFAULT NULL,
  `news_view` int(20) DEFAULT NULL,
  `news_slide` enum('publish','unpublish') DEFAULT 'unpublish',
  `news_order` int(20) DEFAULT NULL,
  `news_link` varchar(200) DEFAULT NULL,
  `officeID` int(20) NOT NULL,
  `userID` int(20) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

LOCK TABLES `bt_news` WRITE;
/*!40000 ALTER TABLE `bt_news` DISABLE KEYS */;

INSERT INTO `bt_news` (`news_id`, `news_categories`, `news_subject_th`, `news_subject_en`, `news_title_th`, `news_title_en`, `news_content_th`, `news_content_en`, `news_photo`, `news_photoslide`, `news_date`, `news_createdate`, `news_lastupdate`, `news_view`, `news_slide`, `news_order`, `news_link`, `officeID`, `userID`)
VALUES
	(1,'news','ยาน่ารู้','','ยาน่ารู้   วารสารของเภสัชกรรมสมาคมแห่งประเทศไทย ในพระบรมราชูปถัมภ์','','<p><span style=\"font-size:14px\">ยาน่ารู้&nbsp;&nbsp; วารสารของเภสัชกรรมสมาคมแห่งประเทศไทย ในพระบรมราชูปถัมภ์</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>&quot; พบกับบทสัมภาษณ์ ของ <span style=\"background-color:rgb(255, 255, 255)\">ภก.ดร.สุวิทย์&nbsp; ธีรกุลชน</span>&nbsp; ผู้อำนวยการ&nbsp; บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด ที่น่าประทับใจ และได้สาระประโยชน์มากมาย &quot;</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>จุดประกาย ความหวังให้เกิดการเปลี่ยนแปลง พลิกโฉม ยาสมุนไพรไทย สร้างคุณค่าและการยอมรับทั้งในระดับชาติและระดับสากล</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\">ข่าวสารเพื่อวงการเภสัชกรไทย ปีที่ 60 ฉบับที่ 2/2560 เมษายน - มิถุนายน 2560<br />\r\n<strong>บทสัมภาษณ์โดย : </strong>ภญ.ศศิมา&nbsp; อาจสงคราม<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ประธานฝ่ายประชาสัมพันธ์&nbsp; เภสัชกรรมสมาคมแห่งประเทศไทยฯ<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; บรรณาธิการ&nbsp; วารสาร&nbsp; &quot;ยาน่ารู้&quot;</span></p>','',NULL,'201709171746271.jpg','2017-09-14','2017-09-17 17:46:27','2017-09-18 01:27:18',NULL,'',0,'',1200,1),
	(2,'news','รางวัลพัฒนาการโลจิสติกส์อุตสาหกรรมดีเด่น ปี2560','','กระทรวงอุตสาหกรรม โดย กรมอุตสากรรม พื้นฐาน และ การเหมืองแร่ ขอมอบรางวัล พัฒนาการโลจิสติกส์อุตสาหกรรมดีเด่น ปี2560 ด้านความมุ่งมั่นพัฒนาโลจิสติกส์ในองค์กร แด่  บริษัทผลิตภัณฑ์สมุนไพรไทย จำกัด','','<p>กระทรวงอุตสาหกรรม โดย กรมอุตสากรรม พื้นฐาน และ การเหมืองแร่ ขอมอบรางวัล พัฒนาการโลจิสติกส์อุตสาหกรรมดีเด่น ปี2560 ด้านความมุ่งมั่นพัฒนาโลจิสติกส์ในองค์กร แด่&nbsp; บริษัทผลิตภัณฑ์สมุนไพรไทย จำกัด</p>','',NULL,'201709171803119.jpg','2017-09-13','2017-09-17 17:50:39','2017-09-18 01:21:19',NULL,'',0,'',1200,1),
	(3,'news','ฉลองเปิดร้านใหม่ สาขา JJ Mall','','บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด (บริษัทร่วมทุนขององค์การเภสัชกรรม) จะมีพิธีเปิดศูนย์จำหน่ายผลิตภัณฑ์สมุนไพรไทย ที่ห้อง 378-380 ชั้น G ศูนย์การค้า JJ Mall ตลาดนัดจตุจักร วันที่ 18 สิงหาคม 60 เพื่อเป็นศูนย์กลางการส่งออกผลิตภัณฑ์สมุนไพรไทย รวมทั้งจำหน่ายผลิตภัณฑ์ให้กับชาวต่างชาติ นักท่องเที่ยว และประชาชนทั่วไป','','<p>บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด (บริษัทร่วมทุนขององค์การเภสัชกรรม) จะมีพิธีเปิดศูนย์จำหน่ายผลิตภัณฑ์สมุนไพรไทย ที่ห้อง 378-380 ชั้น G ศูนย์การค้า JJ Mall ตลาดนัดจตุจักร วันที่ 18 สิงหาคม 60 เพื่อเป็นศูนย์กลางการส่งออกผลิตภัณฑ์สมุนไพรไทย รวมทั้งจำหน่ายผลิตภัณฑ์ให้กับชาวต่างชาติ นักท่องเที่ยว และประชาชนทั่วไป</p>','',NULL,'201709180005120.jpg','2017-09-15','2017-09-18 00:05:12','2017-09-18 01:27:49',NULL,'',0,'',1200,1),
	(4,'event','การประชุมเชิงปฏิบัติการระหว่างองค์การเภสัชกรรมและบริษัทร่วมทุน ก้าวสู่ Thailand 4.0','','การประชุมเชิงปฏิบัติการระหว่างองค์การเภสัชกรรมและบริษัทร่วมทุน ก้าวสู่ Thailand 4.0','','<p>การประชุมเชิงปฏิบัติการระหว่างองค์การเภสัชกรรมและบริษัทร่วมทุน ก้าวสู่ Thailand 4.0 เพื่อให้มีการบริหารจัดการที่เป็นเลิศ สอดคล้องกับนโยบายของรับบาลยุทธศาสตร์ชาติระยะ 20 ปี และแผนแม่บทแห่งชาติว่าด้วยการพัฒนาสมุนไพรไทย</p>','',NULL,'201709180022536.jpg','2017-09-05','2017-09-18 00:22:53','2017-09-18 01:28:15',NULL,'',0,'',1200,1),
	(5,'event','บริจาคยาสมุนไพร เพื่อช่วยผู้ประสบภัยน้ำท่วม จ.สกลนคร','','บริจาคยาสมุนไพร เพื่อช่วยผู้ประสบภัยน้ำท่วม จ.สกลนคร','','<p>บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด กับ กรมการแพทย์แผนไทยและการแพทย์ทางเลือก ได้ร่วมบริจาคยาสมุนไพร ได้แก่ ยาอมมะแว้ง , โลชั่นกันยุงตะไคร้หอม และ ยาสมุนไพรอื่นๆ เพื่อไปช่วยเหลือผู้ประสบอุทกภัยน้ำท่วม จังหวัดสกลนคร</p>','',NULL,'201709180033301.jpg','2017-09-11','2017-09-18 00:33:30','2017-09-18 01:28:06',NULL,'',0,'',1200,1),
	(6,'news','ความร่วมมือกับกรมแพทย์แผนไทยและแพทย์ทางเลือก','','ความร่วมมือกับกรมแพทย์แผนไทยและแพทย์ทางเลือก','','<p>ตามยุทธศาสตร์แผนแม่บทแห่งชาติว่าด้วยการพัฒนาสุนไพร ฉบับที่ ๑ พ.ศ. ๒๕๖๐-๒๕๖๔<br />\r\nเรื่อง การพัฒนาอุตสาหกรรมและการตลาดสมุนไพรให้มีคุณภาพระดับสากล<br />\r\nโดยมีมาตรการและแผนงานในการเพิ่มผลิตภาพของสถานประกอบการผลิต<br />\r\nยกระดับคุณภาพและความหลากหลายของผลิตภัณฑ์และยกระดับความรู้บุคลากร<br />\r\nกรมแพทย์แผนไทยและการแพทย์ทางเลือกจึงมีการแต่งตั้ง คณะทำงานวิชาการ ร่วมกันร่าง<br />\r\n<strong>หนังสือเทคโนโลยีเภสัชกรรมสำหรับการผลิตยาสมุนไพร</strong> และ <strong>บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด</strong><br />\r\nได้รับเลือกให้เข้าร่วมเป็นคณะทำงานในการร่างหนังสือฉบับนี้ด้วย</p>','',NULL,'201709180109320.jpg','2017-09-18','2017-09-18 01:09:32','2017-09-18 01:27:56',NULL,'',0,'',1200,1),
	(7,'event','นักศึกษามหาวิทยาลัยสุโขทัยธรรมาธิราชเข้าเยี่ยมชม บริษัท','','นักศึกษามหาวิทยาลัยสุโขทัยธรรมาธิราชเข้าเยี่ยมชม บริษัท','','<p>มหาวิทยาลัยสุโขทัยะรรมมาธิราชร่วมกับสาขาวิชาวิทยาศาสตร์สุขภาพ กำหนดให้มีการปฏิบัติเสริมทักษะนักศักษาหลักสูตรแพทย์แผนไทยบัณฑิต ในการฝึกปฏิบัติเสริมทักษะดังกล่าว นักศึกษามีความจำเป็นทีีต้องศึกษาดุงานการปรุงยาในรูปแบบต่างๆที่ได้มาตรฐาน ซึ่งบริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด มีความพร้อมและมีความเหมาะสมที่จะใช้เป็นที่ศึกษาดูงานการปรุงยาอย่างดี เนื่องจากมีมาตรฐานรับรองการบริษัทมากมาย</p>','',NULL,'201709180143541.jpg','2017-06-20','2017-09-18 01:34:29','2017-09-18 01:43:54',NULL,'',0,'',1200,1),
	(8,'news','สนค. กระทรวงพาณิชย์ เข้าเยี่ยมชมกระบวนการผลิตของบริษัท','','สนค. กระทรวงพาณิชย์ เข้าเยี่ยมชมกระบวนการผลิตของบริษัท','','<p>สำนักงานนโยบายและยุทธศาสตร์การค้า (สนค.) กระทรวงพาณิชย์ จัดโครงการเพิ่มศักยภาพการตลาดสมุนไพรและผลิตภัณฑ์แปรรูปสู่สากล โดยมีกิจกรรมย่อยคือกิจกรรมสำรวจศักยภาพสมุนไพรไทย มีความประสงค์จะขอเข้าศึกษาดูงานกับทาง บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด เพื่อนำผู้แทนหน่วยงานรัฐ เอกชน เจ้าหน้าที่จากสถานเอกอัครราชฑูตประเทศต่างๆ และ สื่อมวลชน เข้าชมศักยภาพในการผลิตและการแปรรูปผลิตภัณฑ์</p>','',NULL,'201709180135281.jpg','2017-07-09','2017-09-18 01:35:28','2017-09-18 01:35:28',NULL,'',0,'',1200,1),
	(9,'event','บริจาคยาสมุนไพร สถานสงเคราะห์บ้านพระพร','','บริจาคยาสมุนไพร สถานสงเคราะห์บ้านพระพร','','<p>มูลนิธิพันธกิจเรือนจำคริสเตียน โดยเปิดบ้านพระพร ช่วยเหลือผู้ด้อยโอกาส เยาวชนจากสถานพินิจ และอุปการะลูกผู้ต้องขัง เนื่องจากมีเด็กจำนวนมากที่ป่วยด้วยอาการไข้หวัด จึงขอความอนุเคราะห์บริจาคยาสมุนไพรฟ้าทะลายโจร ให้กับเด็กที่ป่วยเป็นไข้ตัวร้อนและมีอาการหวัด ซึ่งทางมูลนิธิเคยได้รับบริจาคยาสมุนไพรดังกล่าว แล้ว อาการป่วยของเด็กๆดีขึ้น</p>','',NULL,'201709180136335.jpg','2017-06-21','2017-09-18 01:36:33','2017-09-18 01:36:33',NULL,'',0,'',1200,1),
	(10,'event','สถาบันวิจัยสมุนไพร กรมวิทยาศาสตร์การแพทย์ เข้าเยี่ยมชมโรงงานผลิต','','สถาบันวิจัยสมุนไพร กรมวิทยาศาสตร์การแพทย์ เข้าเยี่ยมชมโรงงานผลิต','','<p>สถาบันวิจัยสมุนไพร กรมวิทยาศาสตร์การแพทย์ ได้มีการจัดโครงการ Training on GMP Production ให้แก่ผู้รับทุนฝึกอบรมขององค์การอนามัยโลกจากประเทศเมียนมาร์ จึงได้มีการขอความอนุเคราะห์เข้าเยี่ยมชม บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด โดย คณะผู้ศึกษาดูงานประกอบด้วยผู้บริหาร นักวิทยาศาตร์การแพทย์ เภสัชกร และเจ้าหน้าที่ ผู้เกี่ยวข้อง</p>','',NULL,'201709180146088.jpg','2017-06-01','2017-09-18 01:46:08','2017-09-18 01:46:08',NULL,'',0,'',1200,1),
	(11,'event','การประกวดตั้งชื่อผลิตภัณฑ์ใหม่ Phyto Gold','','การประกวดตั้งชื่อผลิตภัณฑ์ใหม่ Phyto Gold','','<p>เพื่อให้พนักงานทุกคนได้มีส่วนร่วมในชื่อสินค้าผลิตภัณฑ์ใหม่ของบริษัทฯ จึงได้มีการจัดให้มีการประกวดตั้งชื่อผลิตภัณฑ์ใหม่ <span style=\"color:rgb(0, 100, 0)\"><span style=\"color:#daa520\">Phyto Gold</span> สารสกัดใบหม่อน</span> โดยชื่อที่ได้รับคัดเลือกจะได้รับเงินรางวัล และ ของที่ระลึก จากทางบริษัทฯ</p>','',NULL,'201709180148310.jpg','2017-05-18','2017-09-18 01:48:31','2017-09-18 01:48:31',NULL,'',0,'',1200,1),
	(12,'event','กิจกรรม CSR ประจำปี 2560','','กิจกรรม CSR ประจำปี 2560','','<p>กิจกรรม CSR ประจำปี 2560 จัดกิจกรรมและจัดเลี้ยงอาหารกลางวัน ณ สถานสงเคราะห์บ้านพักคนชราวาสนะเวศม์ วันที่ 24 เมษายน 2560</p>','',NULL,'201709180149278.jpg','2017-05-03','2017-09-18 01:49:27','2017-09-18 01:49:27',NULL,'',0,'',1200,1),
	(13,'event','การสัมมนาหลักสูตร สมุนไพรในร้านขายยา','','การสัมมนาหลักสูตร สมุนไพรในร้านขายยา','','<p><strong><span style=\"font-size:18px\">การสัมมนาหลักสูตร สมุนไพรในร้านขายยา</span></strong><br />\r\nพื้นฐานเภสัชกรรมแผนไทย<br />\r\nจัดโดย สมาคมร้านขายยา<br />\r\nวันที่ 22 มกราคม 2560<br />\r\nณ โรงแรม เดอะทวินทาวเวอร์</p>','',NULL,'201709180151376.jpg','2017-02-22','2017-09-18 01:51:37','2017-09-18 01:51:37',NULL,'',0,'',1200,1),
	(14,'event','นักศึกษาเข้าเยี่ยมชม บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด','','นักศึกษาเข้าเยี่ยมชม บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด','','<p>นักศึกษาสาขาวิชาแพทย์แผนไทย คณะวิทยาศาตร์ มหาวิทยาลัยรามคำแหง เข้าเยี่ยมชมกระบวนการผลิตของ บริษัทผลิตภัณฑ์สมุนไพรไทย จำกัด เพื่อศึกษาหลักเกณฑ์ที่ดีในการผลิตยา (GMP) คณะนักศึกษาพร้อมด้วยคณะอาจารย์ รวม ๔๔ ท่าน</p>','',NULL,'201709180153233.jpg','2017-05-03','2017-09-18 01:53:23','2017-09-18 01:53:23',NULL,'',0,'',1200,1),
	(15,'event','ออกร้าน งานตลาดน้ำอโยธยา','','ออกร้าน งานตลาดน้ำอโยธยา','','<p>ประชาสัมพันธ์ เรื่อง งานออกร้าน ตลาดน้ำอโธยา โดย บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด ได้เข้าร่วมกิจกรรมออกร้าน ในวันที่ 3-4 มิถุนายน 2560 สถานที่จัดงาน K-village สุขุมวิท 26 ภายในงานท่านจะได้พบกับ โปรโมรชั่นสุดพิเศษเพื่อคนรักสมุนไพร</p>\r\n\r\n<p>คิดถึงสมุนไพร คิดถึงไฟโตแคร์</p>','',NULL,'201709180201453.jpg','2017-05-27','2017-09-18 02:01:45','2017-09-18 02:01:45',NULL,'',0,'',1200,1),
	(16,'news','รางวัล อย. ควอลิตี้ อวอร์ด ประจำปี 2557','','รางวัล อย. ควอลิตี้ อวอร์ด ประจำปี 2557','','<p>คุณภีมภัทร ตาละลักษมณ์ กรรมการผู้จัดการบริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด ให้การต้อนรับ นพ.บุญชัย สมบูรณ์สุข เลขาธิการคณะกรรมการอาหารและยา เยี่ยมชมบูธของบริษัท ในโอกาสที่บริษัทได้รับรางวัล อย.ควอลิตี้ อวอร์ด ประจำปี 2557 ในฐานะเป็นผู้ประกอบการด้านการผลิตยาที่มีการดำเนินการอย่างมีคุณภาพ มีจริยธรรม และประกอบการด้วยความรับผิดชอบต่อสังคม ตามมาตรฐาน GMP ณ โรงแรมมิราเคิล แกรนด์ คอนแวนชั่น เมื่อวันที่ 17 มีนาคม 2557</p>','',NULL,'201709180204334.jpg','2017-03-26','2017-09-18 02:04:33','2017-09-18 02:04:33',NULL,'',0,'',1200,1),
	(17,'news','รางวัล อย. ควอลิตี้ อวอร์ด ประจำปี 2557','','รางวัล อย. ควอลิตี้ อวอร์ด ประจำปี 2557','','<p>คุณภีมภัทร ตาละลักษมณ์ กรรมการผู้จัดการบริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด และทีมงาน รับมอบรางวัล อย. ควอลิตี้ อวอร์ด ประจำปี 2557 โดยมีคุณสุนันทา ตันสิริเสริญกุล ผู้อำนวยการศูนย์วิจัยพัฒนาและประกันคุณภาพ ของบริษัท เป็นตัวแทนรับรางวัลจากนพ.บุญชัย สมบูรณ์สุข เลขาธิการคณะกรรมการอาหารและยา ในฐานะเป็นผู้ประกอบการด้านการผลิตยาที่มีการดำเนินการอย่างมีคุณภาพ มีจริยธรรม และประกอบการด้วยความรับผิดชอบต่อสังคม ตามมาตรฐาน GMP ณ โรงแรมมิราเคิล แกรนด์ คอนเวนชั่น เมื่อวันที่ 17 มีนาคม 2557</p>','',NULL,'201709180206232.jpg','2014-03-17','2017-09-18 02:06:23','2017-09-18 02:06:23',NULL,'',0,'',1200,1),
	(18,'news','40 สุดยอดสถานประกอบการดี จริยธรรมเด่น','','40 สุดยอดสถานประกอบการดี จริยธรรมเด่น','','<p>40 สุดยอดสถานประกอบการดี จริยธรรมเด่น รับรางวัล อย. คอวลิตี้ อวอร์ด ประจำปี 2557</p>','',NULL,'201709180208360.jpg','2014-05-28','2017-09-18 02:08:36','2017-09-18 02:08:36',NULL,'',0,'',1200,1);

/*!40000 ALTER TABLE `bt_news` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table bt_office
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bt_office`;

CREATE TABLE `bt_office` (
  `officeID` int(11) NOT NULL,
  `officeNameTH` varchar(200) DEFAULT NULL,
  `officeNameEN` varchar(200) DEFAULT NULL,
  `officeShortname` varchar(30) DEFAULT NULL,
  `officeShortnameEN` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`officeID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

LOCK TABLES `bt_office` WRITE;
/*!40000 ALTER TABLE `bt_office` DISABLE KEYS */;

INSERT INTO `bt_office` (`officeID`, `officeNameTH`, `officeNameEN`, `officeShortname`, `officeShortnameEN`)
VALUES
	(1200,'herbalshopthailand.com','herbalshopthailand.com','herbalshopthailand.com','herbalshopthailand.com');

/*!40000 ALTER TABLE `bt_office` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table bt_statview
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bt_statview`;

CREATE TABLE `bt_statview` (
  `stat_id` int(20) NOT NULL AUTO_INCREMENT,
  `stat_year` varchar(11) DEFAULT NULL,
  `stat_month` varchar(20) DEFAULT NULL,
  `stat_view` int(20) DEFAULT NULL,
  `officeID` int(11) DEFAULT NULL,
  PRIMARY KEY (`stat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

LOCK TABLES `bt_statview` WRITE;
/*!40000 ALTER TABLE `bt_statview` DISABLE KEYS */;

INSERT INTO `bt_statview` (`stat_id`, `stat_year`, `stat_month`, `stat_view`, `officeID`)
VALUES
	(1,'2560','07',9,1200),
	(2,'2560','08',96,1200),
	(3,'2560','09',149,1200);

/*!40000 ALTER TABLE `bt_statview` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table bt_title
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bt_title`;

CREATE TABLE `bt_title` (
  `title_id` int(11) NOT NULL AUTO_INCREMENT,
  `title_nameTH` varchar(50) DEFAULT NULL,
  `title_nameEN` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`title_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

LOCK TABLES `bt_title` WRITE;
/*!40000 ALTER TABLE `bt_title` DISABLE KEYS */;

INSERT INTO `bt_title` (`title_id`, `title_nameTH`, `title_nameEN`)
VALUES
	(1,'นาย','Mr.'),
	(2,'นางสาว','Ms.'),
	(3,'นาง','Mrs.'),
	(4,'พ.ต.อ.','Pol.Col.'),
	(5,'พ.ต.ท.','Pol.Lt.Col.'),
	(6,'พ.ต.ต.','Pol.Maj.'),
	(7,'ร.ต.อ.','Pol.Capt.'),
	(8,'ร.ต.ท.','Pol.Lt.'),
	(9,'ร.ต.ต.','Pol.Sub.Lt.'),
	(10,'พ.อ.','Col.'),
	(11,'พ.ท.','Lt.Col.'),
	(12,'พ.ต.','Maj.'),
	(13,'ร.อ.','Capt.'),
	(14,'ร.ท.','Lt.'),
	(15,'ร.ต.','Sub.Lt.'),
	(16,'พล.อ.','Gen.'),
	(17,'ดร.','Dr.'),
	(18,'รศ.ดร.','Assoc.Prof.Dr.'),
	(19,'พล.ต.อ.','Pol.Gen.');

/*!40000 ALTER TABLE `bt_title` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table bt_translate
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bt_translate`;

CREATE TABLE `bt_translate` (
  `translate_id` int(20) NOT NULL AUTO_INCREMENT,
  `translate_th` varchar(200) DEFAULT NULL,
  `translate_en` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`translate_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table bt_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bt_user`;

CREATE TABLE `bt_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userID` varchar(20) NOT NULL,
  `title_id` int(11) DEFAULT NULL,
  `firstnameTH` varchar(200) DEFAULT NULL,
  `lastnameTH` varchar(200) DEFAULT NULL,
  `firstnameEN` varchar(200) DEFAULT NULL,
  `lastnameEN` varchar(200) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `groupID` int(11) DEFAULT NULL,
  `officeID` int(11) DEFAULT NULL,
  `position` varchar(250) DEFAULT NULL,
  `paccEmail` varchar(200) DEFAULT NULL,
  `personalEmail` varchar(200) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `createdate` datetime DEFAULT NULL,
  `profilePicture` varchar(150) DEFAULT NULL,
  `userType` enum('user','admin','superadmin','editor') DEFAULT 'user',
  `status` enum('enable','disable') DEFAULT 'enable',
  `userOrder` int(20) NOT NULL,
  `managementOrder` int(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `userID` (`userID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

LOCK TABLES `bt_user` WRITE;
/*!40000 ALTER TABLE `bt_user` DISABLE KEYS */;

INSERT INTO `bt_user` (`id`, `userID`, `title_id`, `firstnameTH`, `lastnameTH`, `firstnameEN`, `lastnameEN`, `username`, `password`, `groupID`, `officeID`, `position`, `paccEmail`, `personalEmail`, `telephone`, `mobile`, `createdate`, `profilePicture`, `userType`, `status`, `userOrder`, `managementOrder`)
VALUES
	(1,'1-1014-01128-94-4',1,'วัลลภ','นิลคูหา','Vanlop','Ninkhuha','vanlop','2d1413e78399d9eaaa9cbae7b387be43',37,1200,'ทดสอบระบบ','vanlop@pacc.go.th','vanlop.n@gmail.com','022912365','(061) 624-5147','2016-01-09 12:17:20','201601091217206.jpg','superadmin','enable',20,0),
	(2,'0-0000-00000-00-0',1,'admin','admin','Admin','Admin','admin','25255a1c32d44845ecbfdafecf8535b3',37,1200,NULL,NULL,NULL,NULL,NULL,NULL,'201601091217206.jpg','superadmin','enable',0,0);

/*!40000 ALTER TABLE `bt_user` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table bt_userlog
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bt_userlog`;

CREATE TABLE `bt_userlog` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_user` varchar(100) DEFAULT NULL,
  `login_password` varchar(200) DEFAULT NULL,
  `login_date` datetime DEFAULT NULL,
  `login_ip` varchar(150) DEFAULT NULL,
  `login_status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

LOCK TABLES `bt_userlog` WRITE;
/*!40000 ALTER TABLE `bt_userlog` DISABLE KEYS */;

INSERT INTO `bt_userlog` (`login_id`, `login_user`, `login_password`, `login_date`, `login_ip`, `login_status`)
VALUES
	(1,'vanlop','Logout','2017-07-17 01:56:11','::1','true'),
	(2,'vanlop','13325234e1d78d8f2f72e25706d455d7','2017-07-17 01:56:48','::1','true'),
	(3,'vanlop','Logout','2017-07-17 01:57:14','::1','true'),
	(4,'vanlop','13325234e1d78d8f2f72e25706d455d7','2017-07-17 01:57:16','::1','false'),
	(5,'vanlop','9bbf0455a7a42c01d3bbcf04449fc164','2017-07-17 01:57:18','::1','true'),
	(6,'vanlop','Logout','2017-07-17 01:58:56','::1','true'),
	(7,'vanlop','13325234e1d78d8f2f72e25706d455d7','2017-08-02 00:56:19','::1','true'),
	(8,'vanlop','13325234e1d78d8f2f72e25706d455d7','2017-08-02 23:28:45','::1','true'),
	(9,'vanlop','13325234e1d78d8f2f72e25706d455d7','2017-09-15 22:22:21','::1','true'),
	(10,'vanlop','2d1413e78399d9eaaa9cbae7b387be43','2017-09-16 16:45:52','::1','true'),
	(11,'vanlo','2d1413e78399d9eaaa9cbae7b387be43','2017-09-16 16:45:59','::1','false'),
	(12,'vanlop','2d1413e78399d9eaaa9cbae7b387be43','2017-09-16 16:47:23','::1','true'),
	(13,'vanlop','Logout','2017-09-16 16:48:45','::1','true'),
	(14,'vanlop','2d1413e78399d9eaaa9cbae7b387be43','2017-09-16 16:55:31','::1','true'),
	(15,'vanlop','Logout','2017-09-16 16:57:15','::1','true'),
	(16,'vanlop','2d1413e78399d9eaaa9cbae7b387be43','2017-09-16 17:06:02','::1','true'),
	(17,'vanlop','Logout','2017-09-16 17:08:19','::1','true'),
	(18,'vanlop','2d1413e78399d9eaaa9cbae7b387be43','2017-09-16 17:09:24','::1','true'),
	(19,'vanlop','Logout','2017-09-16 17:09:36','::1','true'),
	(20,'vanlop','2d1413e78399d9eaaa9cbae7b387be43','2017-09-16 17:21:19','::1','true'),
	(21,'vanlop','2d1413e78399d9eaaa9cbae7b387be43','2017-09-17 14:30:03','::1','true'),
	(22,'vanlop','2d1413e78399d9eaaa9cbae7b387be43','2017-09-17 15:21:22','::1','true'),
	(23,'vanlop','2d1413e78399d9eaaa9cbae7b387be43','2017-09-17 23:15:28','::1','true'),
	(24,'vanlop','Logout','2017-09-18 02:33:49','::1','true'),
	(25,'admin','25255a1c32d44845ecbfdafecf8535b3','2017-09-18 02:33:54','::1','true');

/*!40000 ALTER TABLE `bt_userlog` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table btview_content
# ------------------------------------------------------------

DROP VIEW IF EXISTS `btview_content`;

CREATE TABLE `btview_content` (
   `content_id` INT(20) NOT NULL DEFAULT '0',
   `content_categories` VARCHAR(100) NULL DEFAULT NULL,
   `content_subject_th` TEXT NULL DEFAULT NULL,
   `content_subject_en` TEXT NULL DEFAULT NULL,
   `content_title_th` TEXT NULL DEFAULT NULL,
   `content_title_en` TEXT NULL DEFAULT NULL,
   `content_detail_th` TEXT NULL DEFAULT NULL,
   `content_detail_en` TEXT NULL DEFAULT NULL,
   `content_createdate` DATETIME NULL DEFAULT NULL,
   `content_lastupdate` DATETIME NULL DEFAULT NULL,
   `content_view` INT(20) NULL DEFAULT NULL,
   `content_status` ENUM('publish','unpublish') NULL DEFAULT 'unpublish',
   `content_link` VARCHAR(200) NULL DEFAULT NULL,
   `officeID` INT(20) NOT NULL,
   `userID` INT(20) NOT NULL,
   `officeNameTH` VARCHAR(200) NULL DEFAULT NULL,
   `officeNameEN` VARCHAR(200) NULL DEFAULT NULL,
   `officeShortname` VARCHAR(30) NULL DEFAULT NULL,
   `firstnameTH` VARCHAR(200) NULL DEFAULT NULL,
   `lastnameTH` VARCHAR(200) NULL DEFAULT NULL,
   `firstnameEN` VARCHAR(200) NULL DEFAULT NULL,
   `lastnameEN` VARCHAR(200) NULL DEFAULT NULL,
   `title_nameTH` VARCHAR(50) NULL DEFAULT NULL,
   `title_nameEN` VARCHAR(50) NULL DEFAULT NULL,
   `officeShortnameEN` VARCHAR(30) NULL DEFAULT NULL
) ENGINE=MyISAM;



# Dump of table btview_news
# ------------------------------------------------------------

DROP VIEW IF EXISTS `btview_news`;

CREATE TABLE `btview_news` (
   `firstnameTH` VARCHAR(200) NULL DEFAULT NULL,
   `lastnameTH` VARCHAR(200) NULL DEFAULT NULL,
   `officeNameTH` VARCHAR(200) NULL DEFAULT NULL,
   `officeNameEN` VARCHAR(200) NULL DEFAULT NULL,
   `officeShortname` VARCHAR(30) NULL DEFAULT NULL,
   `title_nameTH` VARCHAR(50) NULL DEFAULT NULL,
   `news_id` INT(20) NOT NULL DEFAULT '0',
   `news_categories` VARCHAR(100) NULL DEFAULT NULL,
   `news_subject_th` VARCHAR(200) NULL DEFAULT NULL,
   `news_subject_en` VARCHAR(200) NULL DEFAULT NULL,
   `news_title_th` TEXT NULL DEFAULT NULL,
   `news_title_en` TEXT NULL DEFAULT NULL,
   `news_content_th` TEXT NULL DEFAULT NULL,
   `news_content_en` TEXT NULL DEFAULT NULL,
   `news_photo` VARCHAR(200) NULL DEFAULT NULL,
   `news_photoslide` VARCHAR(200) NULL DEFAULT NULL,
   `news_date` DATE NULL DEFAULT NULL,
   `news_createdate` DATETIME NULL DEFAULT NULL,
   `news_lastupdate` DATETIME NULL DEFAULT NULL,
   `news_view` INT(20) NULL DEFAULT NULL,
   `news_slide` ENUM('publish','unpublish') NULL DEFAULT 'unpublish',
   `officeID` INT(20) NOT NULL,
   `userID` INT(20) NOT NULL,
   `news_order` INT(20) NULL DEFAULT NULL,
   `news_link` VARCHAR(200) NULL DEFAULT NULL
) ENGINE=MyISAM;



# Dump of table btview_user
# ------------------------------------------------------------

DROP VIEW IF EXISTS `btview_user`;

CREATE TABLE `btview_user` (
   `id` INT(11) NOT NULL DEFAULT '0',
   `userID` VARCHAR(20) NOT NULL,
   `title_id` INT(11) NULL DEFAULT NULL,
   `firstnameTH` VARCHAR(200) NULL DEFAULT NULL,
   `lastnameTH` VARCHAR(200) NULL DEFAULT NULL,
   `firstnameEN` VARCHAR(200) NULL DEFAULT NULL,
   `lastnameEN` VARCHAR(200) NULL DEFAULT NULL,
   `username` VARCHAR(100) NULL DEFAULT NULL,
   `password` VARCHAR(100) NULL DEFAULT NULL,
   `groupID` INT(11) NULL DEFAULT NULL,
   `officeID` INT(11) NULL DEFAULT NULL,
   `position` VARCHAR(250) NULL DEFAULT NULL,
   `paccEmail` VARCHAR(200) NULL DEFAULT NULL,
   `personalEmail` VARCHAR(200) NULL DEFAULT NULL,
   `telephone` VARCHAR(20) NULL DEFAULT NULL,
   `mobile` VARCHAR(20) NULL DEFAULT NULL,
   `createdate` DATETIME NULL DEFAULT NULL,
   `profilePicture` VARCHAR(150) NULL DEFAULT NULL,
   `userType` ENUM('user','admin','superadmin','editor') NULL DEFAULT 'user',
   `status` ENUM('enable','disable') NULL DEFAULT 'enable',
   `officeNameTH` VARCHAR(200) NULL DEFAULT NULL,
   `officeNameEN` VARCHAR(200) NULL DEFAULT NULL,
   `officeShortname` VARCHAR(30) NULL DEFAULT NULL,
   `title_nameTH` VARCHAR(50) NULL DEFAULT NULL,
   `title_nameEN` VARCHAR(50) NULL DEFAULT NULL,
   `userOrder` INT(20) NOT NULL,
   `officeShortnameEN` VARCHAR(30) NULL DEFAULT NULL,
   `managementOrder` INT(20) NOT NULL
) ENGINE=MyISAM;





# Replace placeholder table for btview_content with correct view syntax
# ------------------------------------------------------------

DROP TABLE `btview_content`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `btview_content`
AS SELECT
   `bt_content`.`content_id` AS `content_id`,
   `bt_content`.`content_categories` AS `content_categories`,
   `bt_content`.`content_subject_th` AS `content_subject_th`,
   `bt_content`.`content_subject_en` AS `content_subject_en`,
   `bt_content`.`content_title_th` AS `content_title_th`,
   `bt_content`.`content_title_en` AS `content_title_en`,
   `bt_content`.`content_detail_th` AS `content_detail_th`,
   `bt_content`.`content_detail_en` AS `content_detail_en`,
   `bt_content`.`content_createdate` AS `content_createdate`,
   `bt_content`.`content_lastupdate` AS `content_lastupdate`,
   `bt_content`.`content_view` AS `content_view`,
   `bt_content`.`content_status` AS `content_status`,
   `bt_content`.`content_link` AS `content_link`,
   `bt_content`.`officeID` AS `officeID`,
   `bt_content`.`userID` AS `userID`,
   `bt_office`.`officeNameTH` AS `officeNameTH`,
   `bt_office`.`officeNameEN` AS `officeNameEN`,
   `bt_office`.`officeShortname` AS `officeShortname`,
   `bt_user`.`firstnameTH` AS `firstnameTH`,
   `bt_user`.`lastnameTH` AS `lastnameTH`,
   `bt_user`.`firstnameEN` AS `firstnameEN`,
   `bt_user`.`lastnameEN` AS `lastnameEN`,
   `bt_title`.`title_nameTH` AS `title_nameTH`,
   `bt_title`.`title_nameEN` AS `title_nameEN`,
   `bt_office`.`officeShortnameEN` AS `officeShortnameEN`
FROM (((`bt_content` join `bt_office` on((`bt_content`.`officeID` = `bt_office`.`officeID`))) join `bt_user` on((`bt_content`.`userID` = `bt_user`.`id`))) join `bt_title` on((`bt_user`.`title_id` = `bt_title`.`title_id`)));


# Replace placeholder table for btview_news with correct view syntax
# ------------------------------------------------------------

DROP TABLE `btview_news`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `btview_news`
AS SELECT
   `bt_user`.`firstnameTH` AS `firstnameTH`,
   `bt_user`.`lastnameTH` AS `lastnameTH`,
   `bt_office`.`officeNameTH` AS `officeNameTH`,
   `bt_office`.`officeNameEN` AS `officeNameEN`,
   `bt_office`.`officeShortname` AS `officeShortname`,
   `bt_title`.`title_nameTH` AS `title_nameTH`,
   `bt_news`.`news_id` AS `news_id`,
   `bt_news`.`news_categories` AS `news_categories`,
   `bt_news`.`news_subject_th` AS `news_subject_th`,
   `bt_news`.`news_subject_en` AS `news_subject_en`,
   `bt_news`.`news_title_th` AS `news_title_th`,
   `bt_news`.`news_title_en` AS `news_title_en`,
   `bt_news`.`news_content_th` AS `news_content_th`,
   `bt_news`.`news_content_en` AS `news_content_en`,
   `bt_news`.`news_photo` AS `news_photo`,
   `bt_news`.`news_photoslide` AS `news_photoslide`,
   `bt_news`.`news_date` AS `news_date`,
   `bt_news`.`news_createdate` AS `news_createdate`,
   `bt_news`.`news_lastupdate` AS `news_lastupdate`,
   `bt_news`.`news_view` AS `news_view`,
   `bt_news`.`news_slide` AS `news_slide`,
   `bt_news`.`officeID` AS `officeID`,
   `bt_news`.`userID` AS `userID`,
   `bt_news`.`news_order` AS `news_order`,
   `bt_news`.`news_link` AS `news_link`
FROM (((`bt_news` join `bt_office` on((`bt_news`.`officeID` = `bt_office`.`officeID`))) join `bt_user` on((`bt_news`.`userID` = `bt_user`.`id`))) join `bt_title` on((`bt_title`.`title_id` = `bt_user`.`title_id`)));


# Replace placeholder table for btview_user with correct view syntax
# ------------------------------------------------------------

DROP TABLE `btview_user`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `btview_user`
AS SELECT
   `bt_user`.`id` AS `id`,
   `bt_user`.`userID` AS `userID`,
   `bt_user`.`title_id` AS `title_id`,
   `bt_user`.`firstnameTH` AS `firstnameTH`,
   `bt_user`.`lastnameTH` AS `lastnameTH`,
   `bt_user`.`firstnameEN` AS `firstnameEN`,
   `bt_user`.`lastnameEN` AS `lastnameEN`,
   `bt_user`.`username` AS `username`,
   `bt_user`.`password` AS `password`,
   `bt_user`.`groupID` AS `groupID`,
   `bt_user`.`officeID` AS `officeID`,
   `bt_user`.`position` AS `position`,
   `bt_user`.`paccEmail` AS `paccEmail`,
   `bt_user`.`personalEmail` AS `personalEmail`,
   `bt_user`.`telephone` AS `telephone`,
   `bt_user`.`mobile` AS `mobile`,
   `bt_user`.`createdate` AS `createdate`,
   `bt_user`.`profilePicture` AS `profilePicture`,
   `bt_user`.`userType` AS `userType`,
   `bt_user`.`status` AS `status`,
   `bt_office`.`officeNameTH` AS `officeNameTH`,
   `bt_office`.`officeNameEN` AS `officeNameEN`,
   `bt_office`.`officeShortname` AS `officeShortname`,
   `bt_title`.`title_nameTH` AS `title_nameTH`,
   `bt_title`.`title_nameEN` AS `title_nameEN`,
   `bt_user`.`userOrder` AS `userOrder`,
   `bt_office`.`officeShortnameEN` AS `officeShortnameEN`,
   `bt_user`.`managementOrder` AS `managementOrder`
FROM ((`bt_user` join `bt_office` on((`bt_user`.`officeID` = `bt_office`.`officeID`))) join `bt_title` on((`bt_user`.`title_id` = `bt_title`.`title_id`)));

/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
