# ************************************************************
# Sequel Pro SQL dump
# Version 4499
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.42)
# Database: herbalshop_db
# Generation Time: 2018-01-10 20:34:21 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table bt_category
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bt_category`;

CREATE TABLE `bt_category` (
  `category_id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_name_th` varchar(150) DEFAULT NULL,
  `category_name_en` varchar(150) DEFAULT NULL,
  `category_type` varchar(100) DEFAULT NULL,
  `category_status` enum('publish','unpublish') DEFAULT NULL,
  `category_datecreate` datetime DEFAULT NULL,
  `userID` int(20) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `bt_category` WRITE;
/*!40000 ALTER TABLE `bt_category` DISABLE KEYS */;

INSERT INTO `bt_category` (`category_id`, `category_name_th`, `category_name_en`, `category_type`, `category_status`, `category_datecreate`, `userID`)
VALUES
	(0,NULL,NULL,NULL,'unpublish','2018-01-10 02:23:10',1),
	(1,'ไพโตโกลด์','Phytogold','product','publish','2018-01-10 01:23:58',1),
	(2,'ไพโตแคร์','Phytocare','product','publish','2018-01-10 01:23:51',1),
	(4,'ตามอาการ','Symptoms','product','publish','2018-01-10 01:13:04',1);

/*!40000 ALTER TABLE `bt_category` ENABLE KEYS */;
UNLOCK TABLES;


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
	(1,'about','ประวัติความเป็นมา','Company Profile',NULL,NULL,'<p>องค์การเภสัชกรรม ซึ่งเป็นรัฐวิสาหกิจในการกำกับดูแลของกระทรวงสาธารณสุขหลังจากที่ได้ประสบความ สำเร็จในการผลิตยาแผนปัจจุบันมาแล้ว ได้ทำการวิจัยและพัฒนาสมุนไพรเพื่อใช้เป็นยาและผลิตภัณฑ์เสริมอาหาร อย่างต่อเนื่อง และขยายผลการวิจัยและพัฒนาไปสู่การผลิตผลิตภัณฑ์สมุนไพรเชิงอุตสาหกรรม โดยใช้แทคโนโลยี และกรรมวิธีผลิตที่ดี (GMP) และระบบคุณภาพ ISO 9002 รวมทั้งมาตรฐานการควบคุมคุณภาพ อย่างไรก็ดี ปริมาณการผลิตยังไม่เพียงพอกับความต้องการของประชาชน<br />\r\n<br />\r\nดังนั้นในปี พ.ศ. 2538<br />\r\nองค์การเภสัชกรรมจึงได้สนองนโยบายของรัฐบาลในการส่งเสริมสมุนไพรไทยให้แพร่ หลายยิ่งขึ้น โดยการร่วมทุนกับภาคเอกชนจัดตั้ง บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด พร้อมกับก่อสร้างโรงงาน ผลิตผลิตภัณฑ์ดังกล่าวขึ้นโดยเฉพาะ ซึ่งองค์การเภสัชกรรมเป็นผู้ถือหุ้นรายใหญ่ โรงงานผลิตผลิตภัณฑ์สมุนไพรไทยตั้งอยู่ที่นิคมอุตสาหกรรมวังจุฬา อ.วังน้อย จังหวัดพระนครศรีอยุธยา ได้ก่อสร้างแล้วเสร็จและเริ่มผลิตยา และผลิตภัณฑ์เสริมอาหารจากสมุนไพร ตั้งแต่เดือนสิงหาคม 2541 เป็นต้นมา โดยได้รับการถ่ายทอดเทคโนโลยีการผลิตจากองค์การเภสัชกรรม ซึ่งตั้งแต่เดือนกรกฎาคม 2542 โรงงาน สามารถผลิตยาและผลิตภัณฑ์เสริมอาหารได้จำนวน 22 รายการ และมีแผนการเพิ่มจำนวนรายการให้มากขึ้นตามความต้องการของตลาดในอนาคต ผลิตภัณฑ์ทุกรายการได้รับก</p>\r\n\r\n<h3>บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด กับ มาตรฐานสากล หลักเกณฑ์วิธีการที่ดีในการผลิตยา (Good Manufacturing Practice:GMP) *1</h3>\r\n\r\n<p>หลักเกณฑ์วิธีการที่ดีในการผลิต (GMP) คือ ข้อกำหนด ระเบียบ แบบแผน และวิธีปฏิบัติที่นำมาใช้ในการผลิตที่ดีและได้สินค้าที่มีคุณภาพมาตรฐาน ซึ่งครอบคลุมถึง สถานที่ผลิตอุปกรณ์เครื่องจักร บุคลากร วัสดุ เอกสารต่าง ๆ และสิ่งอื่นที่เกี่ยวข้องกับกระบวนการการผลิตทุกขั้นตอน ตั้งแต่การนำวัตถุดิบเข้าในสถานที่ผลิต ผ่านขั้นตอนการผลิตต่าง ๆ และการตรวจสอบคุณภาพ การบรรจุ การเข้าหีบห่อ ตลอดจนการจัดเก็บ จนได้เป็นสินค้าสำเร็จรูปและออกจำหน่าย แก่ประชาชน GMP มีหลักการผลิตยาด้วยความมั่นใจว่า ได้มาตรฐานตรงตามที่กำหนดไว้ เรียกว่า &quot; ผลิตอย่างมีคุณภาพที่ตรวจสอบได้&quot; หรือ &quot;Quality that must be built-in and tested &quot; สำหรับสินค้ายา คุณภาพ หมายถึง ยาสำเร็จรูปที่มีปริมาณตัวยา รูปแบบ การปลดปล่อยตัวยา ความคงสภาพ ประสิทธิผลการรักษา ฯลฯ ตรงตามที่ได้ขึ้นทะเบียนไว้กับกระทรวงสาธารณสุขซึ่งผู้ประกอบการผลิตยา จะต้องทำได้ตามนั้นทุกครั้ง ซึ่งน่าจะเป็นมาตรฐานที่กำหนดมากกว่าจะเรียกเป็นคุณภาพ แต่คุณภาพตัวยาตามความเข้าใจของประชาชนหมายถึง ยารักษาโรคให้หายได้ ขณะที่แพทย์ อย. และหน่วยงานจัดซื้อจะใช้ GMP เป็นสื่อกลางแสดงถึงซึ่งคุณภาพมาตรฐานของยาที่ผลิตได้<br />\r\n<br />\r\nข้อมูลอ้างอิง *1 คณะกรรมการ โครงการศึกษาวิเคราะห์ระบบยาของประเทศไทย &ldquo;ระบบยาของประเทศไทย&rdquo; 2545 หน้า 475-477</p>\r\n','<p>Thai Herbal Products Co.,Ltd. has produced herbal products since 1999 in phytopharmaceutical style under Herbal Medicinal Products of GMP standard and ISO 9001 version 2008. Manufacturing technology transferred from Research and Development Institute of the Government Pharmaceutical Organization. We are specialist in capsule, tablet, cream, gel, oral liquid and aroma technology</p>\r\n\r\n<p><br />\r\nThe Government Pharmaceutical Organization (GPO), a state enterprise under the Ministry of Public Health, has been successful in manufacturing various modern drugs, has also been engaged in continuous research of Thai herbs used as drugs and health supplements.<br />\r\n<br />\r\nWe are a revolution in manufacturing herbal products has occurred in Thailand, led by advanced research and development (R&amp;D), Good Manufacturing Practices (GMP), International Standard Organization 9002 (ISO 9002) as well as the quality control measures of the GPO.<br />\r\n<br />\r\nThe GPO, in 1995 in accordance with the governmental policy to globalize the market for Thai herbal products, formed the Thai Herbal Products Co., Ltd. as a joint venture between the GPO and the private sector.<br />\r\n<br />\r\nThai Herbal Products Co., Ltd has produced herbal products since 1990 in phytopharmaceutical style under Herbal Medicinal Products of GMP standard and ISO 9001 version 2008. Manufacturing technology transferred from Research and Development institute of the Government Pharmaceutical Organization. We are specialist in capsule, tablet, cream, gel, oral liquid and aroma technology, quality control start from plantation to consumer<br />\r\n<br />\r\nThe Thai Herbal Products Company factory, which manufactures the brand name &ldquo;PHYTO CARE&rdquo; products, is located at Wang-Chula industrial estate in Ayuthaya province. Its main activity is producing herbal medicines and health food supplements, under the GMP. The number of products manufactured will be increased more than the present 22 items in order to meet the expected future demand.<br />\r\n<br />\r\nThe factory adheres to strict QC methods from raw materials to the finished products at the similar degree as for modern drugs, for example; the gamma ray radiation is used in neutralizing any bacteria or fungal materials which may accumulate, analyzing of active compounds in each product to ensure meeting strict requirements, and a hygienic operating site, along with strict rules governing the sterility of the finished products to meet superior quality standard.<br />\r\n<br />\r\nThe efficacy of products under the group brand &ldquo;PHYTO CARE&rdquo; is ensured by clinical data from specialist doctors. Moreover, these high quality herbal products have been approved and evaluated by the Thai FDA for the specified indications ensuring consumers of the safety and efficacy of their products.</p>\r\n','2017-10-24 02:23:10','2017-10-24 02:23:10',NULL,'unpublish','',1200,1),
	(2,'footer','จัดการข้อมูลส่วนท้ายเว็บ','Footer Managment',NULL,NULL,'<p>บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด</p>\r\n\r\n<p>องค์การเภสัชกรรม ซึ่งเป็นรัฐวิสาหกิจในการกำกับดูแล ของกระทรวงสาธารณสุขหลังจากที่ได้ประสบความสำเร็จในการผลิตยาแผนปัจจุบันมาแล้ว ได้ทำการวิจัยและพัฒนาสมุนไพรเพื่อใช้เป็นยาและผลิตภัณฑ์เสริมอาหาร อย่างต่อเนื่อง และขยายผลการวิจัย</p>\r\n\r\n<p>เลขที่ 130/149 หมู่ 3 ต.วังจุฬา อ.วังน้อย จ.พระนครศรีอยุธยา 13170</p>\r\n\r\n<p>เบอร์โทรศัพท์: 035-721445-7, 063-2049077-8<br />\r\nโทรสาร: 035-721743</p>\r\n\r\n<p>อีเมล์: <a href=\"mailto:sale@thpnetwork.com\">sale@thpnetwork.com</a></p>\r\n','<p>บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด</p>\r\n\r\n<p>องค์การเภสัชกรรม ซึ่งเป็นรัฐวิสาหกิจในการกำกับดูแล ของกระทรวงสาธารณสุขหลังจากที่ได้ประสบความสำเร็จในการผลิตยาแผนปัจจุบันมาแล้ว ได้ทำการวิจัยและพัฒนาสมุนไพรเพื่อใช้เป็นยาและผลิตภัณฑ์เสริมอาหาร อย่างต่อเนื่อง และขยายผลการวิจัย</p>\r\n\r\n<p>เลขที่ 130/149 หมู่ 3 ต.วังจุฬา อ.วังน้อย จ.พระนครศรีอยุธยา 13170</p>\r\n\r\n<p>เบอร์โทรศัพท์: 035-721445-7, 063-2049077-8<br />\r\nโทรสาร: 035-721743</p>\r\n\r\n<p>อีเมล์: <a href=\"mailto:sale@thpnetwork.com\">sale@thpnetwork.com</a></p>\r\n','2018-01-11 02:51:22','2018-01-11 02:51:22',NULL,'unpublish','',1200,1),
	(3,'vision','วิสัยทัศน์','Vission',NULL,NULL,'<p>เป็นผู้นำด้านการผลิตยาสมุนไพร ภายใต้เทคโนโลยีการผลิตที่ดี (GMP) และได้รับการรับรอง มาตรฐานสากล มุ่งเน้นการพัฒนาด้านการผลิตยาสมุนไพรที่มีคุณภาพสูงสุด ตลอดระยะเวลา 20 ปีที่ผ่านมา บริษัท ผลิตภัณฑ์ สมุนไพรไทย จำกัด ตระหนักถึงหน้าที่การเป็นองค์กรที่ดี ผลิตและจำหน่ายยาสมุนไพรที่ดี มีคุณภาพ พร้อมสร้างประโยชน์ต่อสังคม จึงดำเนินงานโดยยึดหลักธรรมาภิบาล ได้รับรางวัลการรันตีคุณภาพและมาตราฐานต่างๆมากมาย เพื่อก้าวสู่การเป็นองค์กรระดับมาตราฐานสากล</p>\r\n\r\n<h3>วัตถุประสงค์ของบริษัท</h3>\r\n\r\n<div class=\"col-sm-12 col-md-6 no-padding vision_block\">\r\n<div class=\"col-sm-6 no-padding\"><img class=\"img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/upload/ckfinder/images/vision_img01.jpg\" /></div>\r\n\r\n<div class=\"col-sm-6\">\r\n<p>เพื่อสนองนโยบาย แห่งชาติด้านยาและ แผนพัฒนาเศรษฐกิจ และสังคมแห่งชาติ ด้านสาธารณสุข</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-sm-12 col-md-6 no-padding vision_block\">\r\n<div class=\"col-sm-6 no-padding\"><img class=\"img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/upload/ckfinder/images/vision_img02.jpg\" /></div>\r\n\r\n<div class=\"col-sm-6\">\r\n<p>เพื่อสนองนโยบาย แห่งชาติด้านยาและ แผนพัฒนาเศรษฐกิจ และสังคมแห่งชาติ ด้านสาธารณสุข</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-sm-12 col-md-6 no-padding vision_block\">\r\n<div class=\"col-sm-6 no-padding\"><img class=\"img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/upload/ckfinder/images/vision_img03.jpg\" /></div>\r\n\r\n<div class=\"col-sm-6\">\r\n<p>เพื่อสนองนโยบาย แห่งชาติด้านยาและ แผนพัฒนาเศรษฐกิจ และสังคมแห่งชาติ ด้านสาธารณสุข</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-sm-12 col-md-6 no-padding vision_block\">\r\n<div class=\"col-sm-6 no-padding\"><img class=\"img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/upload/ckfinder/images/vision_img04.jpg\" /></div>\r\n\r\n<div class=\"col-sm-6 \">\r\n<p>เพื่อสนองนโยบาย แห่งชาติด้านยาและ แผนพัฒนาเศรษฐกิจ และสังคมแห่งชาติ ด้านสาธารณสุข</p>\r\n</div>\r\n</div>\r\n','<p>เป็นผู้นำด้านการผลิตยาสมุนไพร ภายใต้เทคโนโลยีการผลิตที่ดี (GMP) และได้รับการรับรอง มาตรฐานสากล มุ่งเน้นการพัฒนาด้านการผลิตยาสมุนไพรที่มีคุณภาพสูงสุด ตลอดระยะเวลา 20 ปีที่ผ่านมา บริษัท ผลิตภัณฑ์ สมุนไพรไทย จำกัด ตระหนักถึงหน้าที่การเป็นองค์กรที่ดี ผลิตและจำหน่ายยาสมุนไพรที่ดี มีคุณภาพ พร้อมสร้างประโยชน์ต่อสังคม จึงดำเนินงานโดยยึดหลักธรรมาภิบาล ได้รับรางวัลการรันตีคุณภาพและมาตราฐานต่างๆมากมาย เพื่อก้าวสู่การเป็นองค์กรระดับมาตราฐานสากล</p>\r\n\r\n<h3>วัตถุประสงค์ของบริษัท</h3>\r\n\r\n<div class=\"col-sm-12 col-md-6 no-padding vision_block\">\r\n<div class=\"col-sm-6 no-padding\"><img class=\"img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/upload/ckfinder/images/vision_img01.jpg\" /></div>\r\n\r\n<div class=\"col-sm-6\">\r\n<p>เพื่อสนองนโยบาย แห่งชาติด้านยาและ แผนพัฒนาเศรษฐกิจ และสังคมแห่งชาติ ด้านสาธารณสุข</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-sm-12 col-md-6 no-padding vision_block\">\r\n<div class=\"col-sm-6 no-padding\"><img class=\"img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/upload/ckfinder/images/vision_img02.jpg\" /></div>\r\n\r\n<div class=\"col-sm-6\">\r\n<p>เพื่อสนองนโยบาย แห่งชาติด้านยาและ แผนพัฒนาเศรษฐกิจ และสังคมแห่งชาติ ด้านสาธารณสุข</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-sm-12 col-md-6 no-padding vision_block\">\r\n<div class=\"col-sm-6 no-padding\"><img class=\"img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/upload/ckfinder/images/vision_img03.jpg\" /></div>\r\n\r\n<div class=\"col-sm-6\">\r\n<p>เพื่อสนองนโยบาย แห่งชาติด้านยาและ แผนพัฒนาเศรษฐกิจ และสังคมแห่งชาติ ด้านสาธารณสุข</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-sm-12 col-md-6 no-padding vision_block\">\r\n<div class=\"col-sm-6 no-padding\"><img class=\"img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/upload/ckfinder/images/vision_img04.jpg\" /></div>\r\n\r\n<div class=\"col-sm-6 \">\r\n<p>เพื่อสนองนโยบาย แห่งชาติด้านยาและ แผนพัฒนาเศรษฐกิจ และสังคมแห่งชาติ ด้านสาธารณสุข</p>\r\n</div>\r\n</div>\r\n','2018-01-11 01:53:22','2018-01-11 01:53:22',NULL,'unpublish','',1200,1),
	(4,'mission','บทบาทและภารกิจ','Mission',NULL,NULL,'<ol>\r\n	<li>ผลิตยาสมุนไพรที่มีคุณภาพภายใต้การวิจัย และพัฒนาสูตรตำรับโดยองค์การเภสัชกรรม</li>\r\n	<li>ส่งเสริมให้มีการวิเคราะห์ และวิจัยยาสมุนไพร เพื่อนำไปสู่การพัฒนาด้านผลิตภัณฑ์สมุนไพร</li>\r\n	<li>ดำเนินการผลิต และจำหน่ายผลิตภัณฑ์สมุนไพรให้องค์การเภสัชกรรมและผู้แทนจำหน่ายทั่วไป</li>\r\n	<li>มุ่งเน้นพัฒนายาสมุนไพรให้อยู่ในรูปของสารสกัด เพื่อนำไปทดแทนการใช้ยาแผนปัจจุบัน ซึ่งเป็นเคมีสังเคราะห์</li>\r\n</ol>\r\n','<ol>\r\n	<li>ผลิตยาสมุนไพรที่มีคุณภาพภายใต้การวิจัย และพัฒนาสูตรตำรับโดยองค์การเภสัชกรรม</li>\r\n	<li>ส่งเสริมให้มีการวิเคราะห์ และวิจัยยาสมุนไพร เพื่อนำไปสู่การพัฒนาด้านผลิตภัณฑ์สมุนไพร</li>\r\n	<li>ดำเนินการผลิต และจำหน่ายผลิตภัณฑ์สมุนไพรให้องค์การเภสัชกรรมและผู้แทนจำหน่ายทั่วไป</li>\r\n	<li>มุ่งเน้นพัฒนายาสมุนไพรให้อยู่ในรูปของสารสกัด เพื่อนำไปทดแทนการใช้ยาแผนปัจจุบัน ซึ่งเป็นเคมีสังเคราะห์</li>\r\n</ol>\r\n','2018-01-11 02:01:21','2018-01-11 02:01:21',NULL,'unpublish','',1200,1),
	(5,'shareholders','ผู้ถือหุ้น','Shareholders',NULL,NULL,'<ol>\r\n	<li>องค์การเภสัชกรรม</li>\r\n	<li>บริษัท ล็อกซเลย์ จำกัด(มหาชน)</li>\r\n	<li>นายอุทัย สุดสุข</li>\r\n	<li>บริษัท ที.เอ็น.พี.เฮลท์แคร์ จำกัด</li>\r\n	<li>นายวินัย วีรภุชงค์</li>\r\n	<li>นายภากร มกรานนท์</li>\r\n	<li>บริษัท ไทยคอมมอดิตี้ จำกัด</li>\r\n	<li>นายพรชัย ชาญวนิชวงศ์</li>\r\n	<li>บริษัท ไอ.ซี.ซี.อินเตอร์เนชั่นแนล จำกัด (มหาชน)</li>\r\n	<li>บริษัท สหพัฒนาอินเตอร์โฮล์ดิ้ง จำกัด(มหาชน)</li>\r\n	<li>บริษัท สหพัฒนพิบูล จำกัด(มหาชน)</li>\r\n	<li>บริษัท บางกอกรับเบอร์จำกัด(มหาชน)</li>\r\n	<li>บริษัท เอส แอนด์ เจ อินเตอร์เนชั่นแนล เอ็นเตอร์ไพรส์ จำกัด (มหาชน)</li>\r\n	<li>นายปรากรม วุฒิพงค์</li>\r\n	<li>นางพัชราภรณ์ ปัญญาวุฒิไกร</li>\r\n	<li>นางสาว สายทิพย์ จีระวงศ์อร่าม</li>\r\n	<li>นางสุขุมล ศิริมงคลเกษม</li>\r\n	<li>บริษัท สมิติเวช จำกัด(มหาชน)</li>\r\n	<li>บริษัท โรงพยาบาลรามคำแหง จำกัด (มหาชน)</li>\r\n	<li>บริษัท บุญรอดบริวเวอรี่ จำกัด</li>\r\n	<li>ภ.ก สักก์สีห์ คุณวิภูศิลกุล</li>\r\n	<li>นาย จารุวัฒน์ ประวีณวงศ์วุฒิ</li>\r\n</ol>\r\n\r\n<p>*ข้อมูล ณ.วันที่ 28 เมษายน 2560*</p>\r\n','<ol>\r\n	<li>องค์การเภสัชกรรม</li>\r\n	<li>บริษัท ล็อกซเลย์ จำกัด(มหาชน)</li>\r\n	<li>นายอุทัย สุดสุข</li>\r\n	<li>บริษัท ที.เอ็น.พี.เฮลท์แคร์ จำกัด</li>\r\n	<li>นายวินัย วีรภุชงค์</li>\r\n	<li>นายภากร มกรานนท์</li>\r\n	<li>บริษัท ไทยคอมมอดิตี้ จำกัด</li>\r\n	<li>นายพรชัย ชาญวนิชวงศ์</li>\r\n	<li>บริษัท ไอ.ซี.ซี.อินเตอร์เนชั่นแนล จำกัด (มหาชน)</li>\r\n	<li>บริษัท สหพัฒนาอินเตอร์โฮล์ดิ้ง จำกัด(มหาชน)</li>\r\n	<li>บริษัท สหพัฒนพิบูล จำกัด(มหาชน)</li>\r\n	<li>บริษัท บางกอกรับเบอร์จำกัด(มหาชน)</li>\r\n	<li>บริษัท เอส แอนด์ เจ อินเตอร์เนชั่นแนล เอ็นเตอร์ไพรส์ จำกัด (มหาชน)</li>\r\n	<li>นายปรากรม วุฒิพงค์</li>\r\n	<li>นางพัชราภรณ์ ปัญญาวุฒิไกร</li>\r\n	<li>นางสาว สายทิพย์ จีระวงศ์อร่าม</li>\r\n	<li>นางสุขุมล ศิริมงคลเกษม</li>\r\n	<li>บริษัท สมิติเวช จำกัด(มหาชน)</li>\r\n	<li>บริษัท โรงพยาบาลรามคำแหง จำกัด (มหาชน)</li>\r\n	<li>บริษัท บุญรอดบริวเวอรี่ จำกัด</li>\r\n	<li>ภ.ก สักก์สีห์ คุณวิภูศิลกุล</li>\r\n	<li>นาย จารุวัฒน์ ประวีณวงศ์วุฒิ</li>\r\n</ol>\r\n\r\n<p>*ข้อมูล ณ.วันที่ 28 เมษายน 2560*</p>\r\n','2018-01-11 02:02:11','2018-01-11 02:02:11',NULL,'unpublish','',1200,1),
	(6,'board','รายชื่อคณะกรรมการ','Board of Directors',NULL,NULL,'<ol>\r\n	<li>พลโทจาตุรนต์ จารุเสน</li>\r\n	<li>นายปรากรม วุฒิพงศ์</li>\r\n	<li>นายสมมาต ขุนเศษฐ</li>\r\n	<li>นายนันทวัฒ ไกรเสม</li>\r\n	<li>นายบุญชัย สมบูรณ์สุข</li>\r\n	<li>นางมุกดาวรรณ ประกอบไวทยกิจ</li>\r\n	<li>นางอัจฉรา มาศมหิศักดิ์</li>\r\n	<li>นางมาลิน อังสุรังษี</li>\r\n	<li>นางมณีรัตน์ ผลิพัฒน์</li>\r\n	<li>นายณัฐวุฒิ ประเสริฐสิริพงศ์</li>\r\n	<li>นางจุรีภรณ์ บุณยวงศ์วิโรจน์</li>\r\n</ol>\r\n\r\n<p>*ข้อมูลวันที่ 28 เมษายน 2560 *</p>\r\n','<ol>\r\n	<li>พลโทจาตุรนต์ จารุเสน</li>\r\n	<li>นายปรากรม วุฒิพงศ์</li>\r\n	<li>นายสมมาต ขุนเศษฐ</li>\r\n	<li>นายนันทวัฒ ไกรเสม</li>\r\n	<li>นายบุญชัย สมบูรณ์สุข</li>\r\n	<li>นางมุกดาวรรณ ประกอบไวทยกิจ</li>\r\n	<li>นางอัจฉรา มาศมหิศักดิ์</li>\r\n	<li>นางมาลิน อังสุรังษี</li>\r\n	<li>นางมณีรัตน์ ผลิพัฒน์</li>\r\n	<li>นายณัฐวุฒิ ประเสริฐสิริพงศ์</li>\r\n	<li>นางจุรีภรณ์ บุณยวงศ์วิโรจน์</li>\r\n</ol>\r\n\r\n<p>*ข้อมูลวันที่ 28 เมษายน 2560 *</p>\r\n','2018-01-11 02:04:28','2018-01-11 02:04:28',NULL,'unpublish','',1200,1),
	(7,'production','กระบวนการผลิต','Production',NULL,NULL,'<div class=\"entry-image bottommargin\">\r\n<p>We want to offer unique organic products and fresh flowers from our fields and there is delicious food from our certified Organic Kitchen, gourmet groceries, and engaging events for the whole family. Come visit us!</p>\r\n</div>\r\n\r\n<div class=\"entry-content notopmargin\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-3\"><img alt=\"\" class=\"bottommargin img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/production/production_01.jpg\" /></div>\r\n\r\n<div class=\"col-lg-9\">\r\n<h3>Drying facilities</h3>\r\n\r\n<p>We make herbals dried at temperature not more than 60 degree celcius to keep quality of products by controlling moisture of granules to protect fungi.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-3\"><img alt=\"\" class=\"bottommargin img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/production/production_02.jpg\" /></div>\r\n\r\n<div class=\"col-lg-9\">\r\n<h3>Rotary tablet press facilities</h3>\r\n\r\n<p>We manufacture cream and gel in clean room class 10,000 and control cleaning of staffs,clothes,machines and accessories for clean and quality products,In clean room controls pressure,temperature and relative humidity in each room.Moreover,we install Hepa Filter in each room to protect diseases from outdoor.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-3\"><img alt=\"\" class=\"bottommargin img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/production/production_03.jpg\" /></div>\r\n\r\n<div class=\"col-lg-9\">\r\n<h3>Foil striping fill facilities</h3>\r\n\r\n<p>We fill tablets in foil strips to protect moisture and light for keeping quality of products which can check from stability data and result from getting leak test.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-3\"><img alt=\"\" class=\"bottommargin img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/production/production_04.jpg\" /></div>\r\n\r\n<div class=\"col-lg-9\">\r\n<h3>Clean room facilities</h3>\r\n\r\n<p>We manufacture cream and gel in clean room class 10,000 and control cleaning of staffs,clothes,machines and accessories for clean and quality products,In clean room controls pressure,temperature and relative humidity in each room.Moreover,we install Hepa Filter in each room to protect diseases from outdoor.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-3\"><img alt=\"\" class=\"bottommargin img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/production/production_05.jpg\" /></div>\r\n\r\n<div class=\"col-lg-9\">\r\n<h3>Vacuum Homogenizer facilities</h3>\r\n\r\n<p>We use vaccuum homogenized mixer for homogeneous cream and gel to completed dispersion of products and make products stabled and long shelflife.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-3\"><img alt=\"\" class=\"bottommargin img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/production/production_06.jpg\" /></div>\r\n\r\n<div class=\"col-lg-9\">\r\n<h3>Blister packing facilities</h3>\r\n\r\n<p>We fill tablets and capsules in PVDC and foils to protect moisture and light for keeping quality of products which PVDC can protect moisture better than PVC use with modern medicines.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-3\"><img alt=\"\" class=\"bottommargin img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/production/production_07.jpg\" /></div>\r\n\r\n<div class=\"col-lg-9\">\r\n<h3>Film coating facilities</h3>\r\n\r\n<p>We use film coated machines to protect moisture and light for keeping quality of tablets and make herbals acted to target organ.Moreover,make colour of herbals appetized.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-3\"><img alt=\"\" class=\"bottommargin img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/production/production_08.jpg\" /></div>\r\n\r\n<div class=\"col-lg-9\">\r\n<h3>Falling film evaporator for extract raw material</h3>\r\n\r\n<p>We use falling film evaporator removes ethanol out to more active ingredients and result in long stability of herbals,make herbals have long shelflife.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-3\"><img alt=\"\" class=\"bottommargin img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/production/production_09.jpg\" /></div>\r\n\r\n<div class=\"col-lg-9\">\r\n<h3>Automatic capsule filling facilities</h3>\r\n\r\n<p>We fill capsules by using automatic capsule filling machines which in capsule filling rooms control relative humidity to protect fungi and during process we check weight variation and disintegration of capsules.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-3\"><img alt=\"\" class=\"bottommargin img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/production/production_10.jpg\" /></div>\r\n\r\n<div class=\"col-lg-9\">\r\n<h3>Automatic Liquid Filling Machine</h3>\r\n\r\n<p>We use automatic liquid filling machine for filling liquid products to glass bottles which can control volume follow requirement.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-3\"><img alt=\"\" class=\"bottommargin img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/production/production_11.jpg\" /></div>\r\n\r\n<div class=\"col-lg-9\">\r\n<h3>Automatic Cream/Gel Filling Machine</h3>\r\n\r\n<p>We use automatic ceam/gel filling machine for filling cream/gel products to aluminium tubes which can control weight follow requirement.</p>\r\n</div>\r\n</div>\r\n</div>\r\n','<div class=\"entry-image bottommargin\">\r\n<p>We want to offer unique organic products and fresh flowers from our fields and there is delicious food from our certified Organic Kitchen, gourmet groceries, and engaging events for the whole family. Come visit us!</p>\r\n</div>\r\n\r\n<div class=\"entry-content notopmargin\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-3\"><img alt=\"\" class=\"bottommargin img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/production/production_01.jpg\" /></div>\r\n\r\n<div class=\"col-lg-9\">\r\n<h3>Drying facilities</h3>\r\n\r\n<p>We make herbals dried at temperature not more than 60 degree celcius to keep quality of products by controlling moisture of granules to protect fungi.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-3\"><img alt=\"\" class=\"bottommargin img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/production/production_02.jpg\" /></div>\r\n\r\n<div class=\"col-lg-9\">\r\n<h3>Rotary tablet press facilities</h3>\r\n\r\n<p>We manufacture cream and gel in clean room class 10,000 and control cleaning of staffs,clothes,machines and accessories for clean and quality products,In clean room controls pressure,temperature and relative humidity in each room.Moreover,we install Hepa Filter in each room to protect diseases from outdoor.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-3\"><img alt=\"\" class=\"bottommargin img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/production/production_03.jpg\" /></div>\r\n\r\n<div class=\"col-lg-9\">\r\n<h3>Foil striping fill facilities</h3>\r\n\r\n<p>We fill tablets in foil strips to protect moisture and light for keeping quality of products which can check from stability data and result from getting leak test.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-3\"><img alt=\"\" class=\"bottommargin img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/production/production_04.jpg\" /></div>\r\n\r\n<div class=\"col-lg-9\">\r\n<h3>Clean room facilities</h3>\r\n\r\n<p>We manufacture cream and gel in clean room class 10,000 and control cleaning of staffs,clothes,machines and accessories for clean and quality products,In clean room controls pressure,temperature and relative humidity in each room.Moreover,we install Hepa Filter in each room to protect diseases from outdoor.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-3\"><img alt=\"\" class=\"bottommargin img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/production/production_05.jpg\" /></div>\r\n\r\n<div class=\"col-lg-9\">\r\n<h3>Vacuum Homogenizer facilities</h3>\r\n\r\n<p>We use vaccuum homogenized mixer for homogeneous cream and gel to completed dispersion of products and make products stabled and long shelflife.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-3\"><img alt=\"\" class=\"bottommargin img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/production/production_06.jpg\" /></div>\r\n\r\n<div class=\"col-lg-9\">\r\n<h3>Blister packing facilities</h3>\r\n\r\n<p>We fill tablets and capsules in PVDC and foils to protect moisture and light for keeping quality of products which PVDC can protect moisture better than PVC use with modern medicines.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-3\"><img alt=\"\" class=\"bottommargin img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/production/production_07.jpg\" /></div>\r\n\r\n<div class=\"col-lg-9\">\r\n<h3>Film coating facilities</h3>\r\n\r\n<p>We use film coated machines to protect moisture and light for keeping quality of tablets and make herbals acted to target organ.Moreover,make colour of herbals appetized.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-3\"><img alt=\"\" class=\"bottommargin img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/production/production_08.jpg\" /></div>\r\n\r\n<div class=\"col-lg-9\">\r\n<h3>Falling film evaporator for extract raw material</h3>\r\n\r\n<p>We use falling film evaporator removes ethanol out to more active ingredients and result in long stability of herbals,make herbals have long shelflife.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-3\"><img alt=\"\" class=\"bottommargin img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/production/production_09.jpg\" /></div>\r\n\r\n<div class=\"col-lg-9\">\r\n<h3>Automatic capsule filling facilities</h3>\r\n\r\n<p>We fill capsules by using automatic capsule filling machines which in capsule filling rooms control relative humidity to protect fungi and during process we check weight variation and disintegration of capsules.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-3\"><img alt=\"\" class=\"bottommargin img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/production/production_10.jpg\" /></div>\r\n\r\n<div class=\"col-lg-9\">\r\n<h3>Automatic Liquid Filling Machine</h3>\r\n\r\n<p>We use automatic liquid filling machine for filling liquid products to glass bottles which can control volume follow requirement.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-3\"><img alt=\"\" class=\"bottommargin img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/production/production_11.jpg\" /></div>\r\n\r\n<div class=\"col-lg-9\">\r\n<h3>Automatic Cream/Gel Filling Machine</h3>\r\n\r\n<p>We use automatic ceam/gel filling machine for filling cream/gel products to aluminium tubes which can control weight follow requirement.</p>\r\n</div>\r\n</div>\r\n</div>\r\n','2018-01-11 02:30:38','2018-01-11 02:30:38',NULL,'unpublish','',1200,1),
	(9,'distribution','สถานที่จัดจำหน่าย','Distribution',NULL,NULL,'<div class=\"row\">\r\n<div class=\"col-sm-8\">\r\n<h3>Our Quality Products</h3>\r\n\r\n<p>The Thai Herbal Products Company factory,which manufactures the brand name &quot;PHYTO CARE&quot; products is located at Factoryland industrial estate in Pranakorn Sri Ayutthaya province.its main activity is producing herbal medicines and health food supplements,under the Thai FDA GMP. The factory adherres to strict QC methods from raw materials to the finished products at the similar degree as for modern drugs,for example,the gamma ray radiation is used in neutralizing any bacteria or fungal materials,analyzing of active compounds in each product to ensure meeting strict requirements,and a hyginic operating site,along with strict rules governing the sterility of the finished products as not seen in other Thai herbal manufacturers.</p>\r\n</div>\r\n\r\n<div class=\"col-sm-4\"><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/research/research_06.jpg\" /></div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-sm-6\"><img alt=\"\" class=\"bottommargin img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/research/research_05.jpg\" /></div>\r\n\r\n<div class=\"col-sm-6\">\r\n<h3>HPLC</h3>\r\n\r\n<p>Quantitative analysis of chemical compositions of Andrographis paniculata wall.ex nees,Ginkobiloba extract,Ganoderma lucidum extract,Clinacanthus nutans extract,Centella asiatica extract,Glysine max extract,Cimiciffuga racemoca extract and Capsicum fructecens Linn extract.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-sm-6\"><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/research/research_07.jpg\" />\r\n<h3>GC</h3>\r\n\r\n<p>Quantitative analysis of chemical compositions of Plai(Zingiber cassumunar Roxb.)oil,Garlic(Allium sativum Linn.)and Citronella oil.</p>\r\n</div>\r\n\r\n<div class=\"col-sm-6\">\r\n<h3>Microbial laboratory</h3>\r\n\r\n<p>The efficacy of products is ensured by microbial limits control,these hight quality herbal products have been approved and evaluated by Thai FDA for the specified indications ensuring consumers of the safety and efficacy of their products.</p>\r\n<img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/research/research_08.jpg\" /></div>\r\n</div>\r\n','<div class=\"row\">\r\n<div class=\"col-sm-8\">\r\n<h3>Our Quality Products</h3>\r\n\r\n<p>The Thai Herbal Products Company factory,which manufactures the brand name &quot;PHYTO CARE&quot; products is located at Factoryland industrial estate in Pranakorn Sri Ayutthaya province.its main activity is producing herbal medicines and health food supplements,under the Thai FDA GMP. The factory adherres to strict QC methods from raw materials to the finished products at the similar degree as for modern drugs,for example,the gamma ray radiation is used in neutralizing any bacteria or fungal materials,analyzing of active compounds in each product to ensure meeting strict requirements,and a hyginic operating site,along with strict rules governing the sterility of the finished products as not seen in other Thai herbal manufacturers.</p>\r\n</div>\r\n\r\n<div class=\"col-sm-4\"><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/research/research_06.jpg\" /></div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-sm-6\"><img alt=\"\" class=\"bottommargin img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/research/research_05.jpg\" /></div>\r\n\r\n<div class=\"col-sm-6\">\r\n<h3>HPLC</h3>\r\n\r\n<p>Quantitative analysis of chemical compositions of Andrographis paniculata wall.ex nees,Ginkobiloba extract,Ganoderma lucidum extract,Clinacanthus nutans extract,Centella asiatica extract,Glysine max extract,Cimiciffuga racemoca extract and Capsicum fructecens Linn extract.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-sm-6\"><img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/research/research_07.jpg\" />\r\n<h3>GC</h3>\r\n\r\n<p>Quantitative analysis of chemical compositions of Plai(Zingiber cassumunar Roxb.)oil,Garlic(Allium sativum Linn.)and Citronella oil.</p>\r\n</div>\r\n\r\n<div class=\"col-sm-6\">\r\n<h3>Microbial laboratory</h3>\r\n\r\n<p>The efficacy of products is ensured by microbial limits control,these hight quality herbal products have been approved and evaluated by Thai FDA for the specified indications ensuring consumers of the safety and efficacy of their products.</p>\r\n<img alt=\"\" class=\"img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/research/research_08.jpg\" /></div>\r\n</div>\r\n','2018-01-11 02:42:23','2018-01-11 02:42:23',NULL,'unpublish','',1200,1),
	(8,'quality','วิจัยพัฒนา/การประกันคุณภาพ','R&D/Quality Assurance',NULL,NULL,'<div class=\"row\">\r\n<div class=\"col-lg-8\">\r\n<h3>Our Quality Products</h3>\r\n\r\n<p>The Thai Herbal Products Company factory,which manufactures the brand name &quot;PHYTO CARE&quot; products is located at Factoryland industrial estate in Pranakorn Sri Ayutthaya province.its main activity is producing herbal medicines and health food supplements,under the Thai FDA GMP. The factory adherres to strict QC methods from raw materials to the finished products at the similar degree as for modern drugs,for example,the gamma ray radiation is used in neutralizing any bacteria or fungal materials,analyzing of active compounds in each product to ensure meeting strict requirements,and a hyginic operating site,along with strict rules governing the sterility of the finished products as not seen in other Thai herbal manufacturers.</p>\r\n</div>\r\n\r\n<div class=\"col-lg-4\"><img alt=\"\" class=\"bottommargin img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/research/research_06.jpg\" /></div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-6\"><img alt=\"\" class=\"bottommargin img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/research/research_05.jpg\" /></div>\r\n\r\n<div class=\"col-lg-6\">\r\n<h3>HPLC</h3>\r\n\r\n<p>Quantitative analysis of chemical compositions of Andrographis paniculata wall.ex nees,Ginkobiloba extract,Ganoderma lucidum extract,Clinacanthus nutans extract,Centella asiatica extract,Glysine max extract,Cimiciffuga racemoca extract and Capsicum fructecens Linn extract.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-6\"><img alt=\"\" class=\"bottommargin img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/research/research_07.jpg\" />\r\n<h3>GC</h3>\r\n\r\n<p>Quantitative analysis of chemical compositions of Plai(Zingiber cassumunar Roxb.)oil,Garlic(Allium sativum Linn.)and Citronella oil.</p>\r\n</div>\r\n\r\n<div class=\"col-lg-6\">\r\n<h3>Microbial laboratory</h3>\r\n\r\n<p>The efficacy of products is ensured by microbial limits control,these hight quality herbal products have been approved and evaluated by Thai FDA for the specified indications ensuring consumers of the safety and efficacy of their products.</p>\r\n<img alt=\"\" class=\"bottommargin img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/research/research_08.jpg\" /></div>\r\n</div>\r\n','<div class=\"row\">\r\n<div class=\"col-lg-8\">\r\n<h3>Our Quality Products</h3>\r\n\r\n<p>The Thai Herbal Products Company factory,which manufactures the brand name &quot;PHYTO CARE&quot; products is located at Factoryland industrial estate in Pranakorn Sri Ayutthaya province.its main activity is producing herbal medicines and health food supplements,under the Thai FDA GMP. The factory adherres to strict QC methods from raw materials to the finished products at the similar degree as for modern drugs,for example,the gamma ray radiation is used in neutralizing any bacteria or fungal materials,analyzing of active compounds in each product to ensure meeting strict requirements,and a hyginic operating site,along with strict rules governing the sterility of the finished products as not seen in other Thai herbal manufacturers.</p>\r\n</div>\r\n\r\n<div class=\"col-lg-4\"><img alt=\"\" class=\"bottommargin img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/research/research_06.jpg\" /></div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-6\"><img alt=\"\" class=\"bottommargin img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/research/research_05.jpg\" /></div>\r\n\r\n<div class=\"col-lg-6\">\r\n<h3>HPLC</h3>\r\n\r\n<p>Quantitative analysis of chemical compositions of Andrographis paniculata wall.ex nees,Ginkobiloba extract,Ganoderma lucidum extract,Clinacanthus nutans extract,Centella asiatica extract,Glysine max extract,Cimiciffuga racemoca extract and Capsicum fructecens Linn extract.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-6\"><img alt=\"\" class=\"bottommargin img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/research/research_07.jpg\" />\r\n<h3>GC</h3>\r\n\r\n<p>Quantitative analysis of chemical compositions of Plai(Zingiber cassumunar Roxb.)oil,Garlic(Allium sativum Linn.)and Citronella oil.</p>\r\n</div>\r\n\r\n<div class=\"col-lg-6\">\r\n<h3>Microbial laboratory</h3>\r\n\r\n<p>The efficacy of products is ensured by microbial limits control,these hight quality herbal products have been approved and evaluated by Thai FDA for the specified indications ensuring consumers of the safety and efficacy of their products.</p>\r\n<img alt=\"\" class=\"bottommargin img-responsive\" src=\"http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production/assets/front_end/images/research/research_08.jpg\" /></div>\r\n</div>\r\n','2018-01-11 02:26:05','2018-01-11 02:26:05',NULL,'unpublish','',1200,1);

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
	(27,'Content',1,'แก้ไข ประวัติความเป็นมา','2017-09-18 02:24:30','::1','vanlop',1),
	(28,'Article',1,'เพิ่มบทความ','2017-09-22 18:43:16','::1','vanlop',1),
	(29,'Article',0,'แก้ไขบทความ','2017-09-22 18:49:50','::1','vanlop',1),
	(30,'Article',0,'แก้ไขบทความ','2017-09-22 18:50:03','::1','vanlop',1),
	(31,'Article',0,'แก้ไขบทความ','2017-09-22 18:50:14','::1','vanlop',1),
	(32,'Article',2,'เพิ่มบทความ','2017-09-22 18:50:38','::1','vanlop',1),
	(33,'Article',2,'ลบบทความ','2017-09-22 18:51:51','::1','vanlop',1),
	(34,'Article',3,'เพิ่มบทความ','2017-09-22 18:52:11','::1','vanlop',1),
	(35,'Article',3,'ลบบทความ','2017-09-22 18:52:27','::1','vanlop',1),
	(36,'Article',0,'แก้ไขบทความ','2017-09-24 22:42:01','::1','vanlop',1),
	(37,'News',0,'แก้ไข news','2017-09-24 23:03:11','::1','vanlop',1),
	(38,'News',0,'แก้ไข news','2017-09-24 23:04:11','::1','vanlop',1),
	(39,'News',0,'แก้ไข news','2017-09-24 23:04:14','::1','vanlop',1),
	(40,'News',0,'แก้ไข news','2017-09-24 23:04:18','::1','vanlop',1),
	(41,'News',0,'แก้ไข news','2017-09-24 23:04:30','::1','vanlop',1),
	(42,'News',0,'แก้ไข news','2017-09-24 23:04:33','::1','vanlop',1),
	(43,'News',0,'แก้ไข news','2017-09-24 23:04:35','::1','vanlop',1),
	(44,'News',0,'แก้ไข news','2017-09-24 23:04:38','::1','vanlop',1),
	(45,'News',0,'แก้ไข event','2017-09-24 23:08:02','::1','vanlop',1),
	(46,'News',0,'แก้ไข event','2017-09-24 23:08:05','::1','vanlop',1),
	(47,'News',0,'แก้ไข event','2017-09-24 23:08:08','::1','vanlop',1),
	(48,'News',0,'แก้ไข event','2017-09-24 23:08:11','::1','vanlop',1),
	(49,'News',0,'แก้ไข event','2017-09-24 23:08:14','::1','vanlop',1),
	(50,'News',0,'แก้ไข event','2017-09-24 23:08:21','::1','vanlop',1),
	(51,'News',0,'แก้ไข event','2017-09-24 23:08:24','::1','vanlop',1),
	(52,'News',0,'แก้ไข event','2017-09-24 23:08:26','::1','vanlop',1),
	(53,'News',0,'แก้ไข event','2017-09-24 23:08:29','::1','vanlop',1),
	(54,'News',0,'แก้ไข event','2017-09-24 23:08:31','::1','vanlop',1),
	(55,'Article',0,'แก้ไขบทความ','2017-09-24 23:13:01','::1','vanlop',1),
	(56,'Article',0,'แก้ไขบทความ','2017-09-24 23:14:13','::1','vanlop',1),
	(57,'Career',2,'เพิ่มตำแหน่งงาน นักวิจัย และตรวจสอบ','2017-09-25 00:18:33','::1','vanlop',1),
	(58,'Career',3,'เพิ่มตำแหน่งงาน Web Programmer','2017-09-25 00:19:51','::1','vanlop',1),
	(59,'Career',4,'เพิ่มตำแหน่งงาน IT Support','2017-09-25 00:20:06','::1','vanlop',1),
	(60,'Career',0,'แก้ไขตำแหน่งงาน - นักวิจัย และตรวจสอบxxx','2017-09-25 00:26:33','::1','vanlop',1),
	(61,'Career',0,'แก้ไขตำแหน่งงาน - นักวิจัย และตรวจสอบ','2017-09-25 00:26:40','::1','vanlop',1),
	(62,'Career',5,'เพิ่มตำแหน่งงาน - testtes','2017-09-25 00:34:58','::1','vanlop',1),
	(63,'Career',5,'ลบตำแหน่งงาน - testtes','2017-09-25 00:35:07','::1','vanlop',1),
	(64,'Product',6,'เพิ่มผลิตภํณฑ์','2017-09-27 00:31:40','::1','vanlop',1),
	(65,'Product',0,'แก้ไขผลิตภัณฑ์','2017-09-27 00:37:46','::1','vanlop',1),
	(66,'Product',0,'แก้ไขผลิตภัณฑ์','2017-09-27 00:37:59','::1','vanlop',1),
	(67,'Product',7,'เพิ่มผลิตภํณฑ์','2017-09-27 00:38:14','::1','vanlop',1),
	(68,'Product',7,'ลบบทความ','2017-09-27 00:38:47','::1','vanlop',1),
	(69,'Product',8,'เพิ่มผลิตภํณฑ์','2017-09-27 00:39:59','::1','vanlop',1),
	(70,'Product',9,'เพิ่มผลิตภํณฑ์','2017-09-27 00:40:43','::1','vanlop',1),
	(71,'Product',0,'แก้ไขผลิตภัณฑ์','2017-09-27 00:40:52','::1','vanlop',1),
	(72,'Product',0,'แก้ไขผลิตภัณฑ์','2017-09-27 01:04:50','::1','vanlop',1),
	(73,'Product',0,'แก้ไขผลิตภัณฑ์','2017-09-27 01:05:35','::1','vanlop',1),
	(74,'Product',0,'แก้ไขผลิตภัณฑ์','2017-09-27 01:05:39','::1','vanlop',1),
	(75,'Product',10,'เพิ่มผลิตภํณฑ์','2017-09-27 01:10:35','::1','vanlop',1),
	(76,'News',0,'แก้ไข event','2017-09-27 02:06:59','::1','vanlop',1),
	(77,'Herblist',0,'เพิ่มผลิตภํณฑ์','2017-09-27 23:28:50','::1','vanlop',1),
	(78,'Herblist',0,'เพิ่มผลิตภํณฑ์','2017-09-27 23:30:27','::1','vanlop',1),
	(79,'Herblist',0,'เพิ่มผลิตภํณฑ์','2017-09-27 23:32:33','::1','vanlop',1),
	(80,'Herblist',0,'เพิ่มผลิตภํณฑ์','2017-09-27 23:34:32','::1','vanlop',1),
	(81,'Herblist',0,'แก้ไขผลิตภัณฑ์','2017-09-27 23:38:34','::1','vanlop',1),
	(82,'Herblist',0,'แก้ไขผลิตภัณฑ์','2017-09-27 23:38:51','::1','vanlop',1),
	(83,'Herblist',0,'เพิ่มผลิตภํณฑ์','2017-09-27 23:40:56','::1','vanlop',1),
	(84,'Product',0,'เพิ่มผลิตภํณฑ์','2017-09-27 23:42:53','::1','vanlop',1),
	(85,'News',0,'เพิ่มข่าวnews','2017-09-27 23:43:32','::1','vanlop',1),
	(86,'News',19,'ลบข่าว','2017-09-27 23:48:18','::1','vanlop',1),
	(87,'Herblist',15,'ลบรายการสมุนไพร','2017-09-27 23:48:28','::1','vanlop',1),
	(88,'Product',16,'ลบบทความ','2017-09-27 23:48:33','::1','vanlop',1),
	(89,'Herblist',0,'เพิ่มผลิตภํณฑ์','2017-09-28 02:31:44','184.22.219.20','vanlop',1),
	(90,'Herblist',15,'ลบรายการสมุนไพร','2017-09-28 02:31:48','184.22.219.20','vanlop',1),
	(91,'Content',1,'แก้ไข ประวัติความเป็นมา','2017-10-04 15:47:41','182.52.110.228','admin',2),
	(92,'Content',1,'แก้ไข ประวัติความเป็นมา','2017-10-04 15:49:10','182.52.110.228','admin',2),
	(93,'Content',1,'แก้ไข ประวัติความเป็นมา','2017-10-04 15:50:53','182.52.110.228','admin',2),
	(94,'Content',1,'แก้ไข ประวัติความเป็นมา','2017-10-04 15:51:42','182.52.110.228','admin',2),
	(95,'Content',1,'แก้ไข ประวัติความเป็นมา','2017-10-04 15:52:28','182.52.110.228','admin',2),
	(96,'Content',1,'แก้ไข ประวัติความเป็นมา','2017-10-04 15:53:08','182.52.110.228','admin',2),
	(97,'Content',1,'แก้ไข ประวัติความเป็นมา','2017-10-04 16:04:38','182.52.110.228','admin',2),
	(98,'Content',1,'แก้ไข ประวัติความเป็นมา','2017-10-23 16:52:48','::1','vanlop',1),
	(99,'Content',1,'แก้ไข ประวัติความเป็นมา','2017-10-23 16:54:46','::1','vanlop',1),
	(100,'Product',0,'แก้ไขผลิตภัณฑ์','2017-10-23 17:07:14','::1','vanlop',1),
	(101,'Product',0,'แก้ไขผลิตภัณฑ์','2017-10-23 17:07:38','::1','vanlop',1),
	(102,'Product',0,'แก้ไขผลิตภัณฑ์','2017-10-23 17:08:02','::1','vanlop',1),
	(103,'Product',0,'แก้ไขผลิตภัณฑ์','2017-10-23 17:08:19','::1','vanlop',1),
	(104,'Herblist',0,'แก้ไขรายละเอียดสมุนไพร','2017-10-23 17:11:27','::1','vanlop',1),
	(105,'News',0,'แก้ไข news','2017-10-23 17:18:22','::1','vanlop',1),
	(106,'News',0,'แก้ไข event','2017-10-23 17:21:55','::1','vanlop',1),
	(107,'News',0,'แก้ไข event','2017-10-23 17:23:09','::1','vanlop',1),
	(108,'Article',0,'แก้ไขบทความ','2017-10-23 17:25:56','::1','vanlop',1),
	(109,'Career',0,'แก้ไขตำแหน่งงาน - นักวิจัย และตรวจสอบ','2017-10-23 17:28:33','::1','vanlop',1),
	(110,'Career',0,'แก้ไขตำแหน่งงาน - Web Programmer','2017-10-23 17:28:50','::1','vanlop',1),
	(111,'Career',0,'แก้ไขตำแหน่งงาน - IT Support','2017-10-23 17:29:01','::1','vanlop',1),
	(112,'Herblist',0,'แก้ไขรายละเอียดสมุนไพร','2017-10-24 01:45:51','::1','vanlop',1),
	(113,'Herblist',0,'แก้ไขรายละเอียดสมุนไพร','2017-10-24 01:46:08','::1','vanlop',1),
	(114,'Herblist',0,'แก้ไขรายละเอียดสมุนไพร','2017-10-24 01:46:21','::1','vanlop',1),
	(115,'Content',1,'แก้ไข ประวัติความเป็นมา','2017-10-24 02:23:10','::1','vanlop',1),
	(116,'Product',0,'เพิ่มผลิตภํณฑ์','2017-11-01 11:36:16','171.96.191.8','admin',2),
	(117,'Product',0,'แก้ไขผลิตภัณฑ์','2017-11-01 11:39:23','171.96.191.8','admin',2),
	(118,'Product',0,'เพิ่มผลิตภํณฑ์','2017-11-01 11:41:33','171.96.191.8','admin',2),
	(119,'Product',0,'เพิ่มผลิตภํณฑ์','2017-11-01 11:43:33','171.96.191.8','admin',2),
	(120,'Product',0,'เพิ่มผลิตภํณฑ์','2017-11-01 11:44:06','171.96.191.8','admin',2),
	(121,'Product',0,'แก้ไขผลิตภัณฑ์','2017-11-01 11:45:37','171.96.191.8','admin',2),
	(122,'Product',0,'แก้ไขผลิตภัณฑ์','2017-11-01 11:45:48','171.96.191.8','admin',2),
	(123,'Product',0,'แก้ไขผลิตภัณฑ์','2017-11-01 11:46:25','171.96.191.8','admin',2),
	(124,'Product',0,'แก้ไขผลิตภัณฑ์','2017-11-01 11:47:10','171.96.191.8','admin',2),
	(125,'Product',0,'แก้ไขผลิตภัณฑ์','2017-11-01 11:47:33','171.96.191.8','admin',2),
	(126,'Product',0,'แก้ไขผลิตภัณฑ์','2017-11-01 11:47:47','171.96.191.8','admin',2),
	(127,'Banner',0,'Add Banner','2018-01-08 23:38:30','::1','vanlop',1),
	(128,'Banner',0,'Add Banner','2018-01-08 23:43:01','::1','vanlop',1),
	(129,'Banner',0,'Edit banner','2018-01-08 23:58:41','::1','vanlop',1),
	(130,'Banner',0,'Add Banner','2018-01-08 23:59:23','::1','vanlop',1),
	(131,'Banner',0,'Edit banner','2018-01-08 23:59:40','::1','vanlop',1),
	(132,'Banner',0,'Edit banner','2018-01-08 23:59:50','::1','vanlop',1),
	(133,'Banner',0,'Add Banner','2018-01-09 00:00:35','::1','vanlop',1),
	(134,'Banner',21,'Delete banner','2018-01-09 00:03:49','::1','vanlop',1),
	(135,'Banner',0,'Edit banner','2018-01-09 00:04:15','::1','vanlop',1),
	(136,'Banner',0,'Add Banner','2018-01-09 00:21:23','::1','vanlop',1),
	(137,'Banner',0,'Add Banner','2018-01-09 00:23:02','::1','vanlop',1),
	(138,'Banner',0,'uploads/thumbs/','2018-01-09 00:24:07','::1','vanlop',1),
	(139,'Banner',0,'./upload/banner/thumb/','2018-01-09 00:28:00','::1','vanlop',1),
	(140,'Banner',26,'Delete banner','2018-01-09 00:29:10','::1','vanlop',1),
	(141,'Banner',25,'Delete banner','2018-01-09 00:29:12','::1','vanlop',1),
	(142,'Banner',24,'Delete banner','2018-01-09 00:29:15','::1','vanlop',1),
	(143,'Banner',23,'Delete banner','2018-01-09 00:29:18','::1','vanlop',1),
	(144,'Banner',0,'','2018-01-09 00:35:24','::1','vanlop',1),
	(145,'Banner',0,'','2018-01-09 00:37:14','::1','vanlop',1),
	(146,'Banner',0,'','2018-01-09 00:37:54','::1','vanlop',1),
	(147,'Banner',0,'','2018-01-09 00:38:29','::1','vanlop',1),
	(148,'Banner',30,'Delete banner','2018-01-09 00:41:37','::1','vanlop',1),
	(149,'Banner',29,'Delete banner','2018-01-09 00:41:44','::1','vanlop',1),
	(150,'Banner',28,'Delete banner','2018-01-09 00:41:49','::1','vanlop',1),
	(151,'Banner',27,'Delete banner','2018-01-09 00:41:52','::1','vanlop',1),
	(152,'Banner',0,'Edit banner','2018-01-09 00:42:04','::1','vanlop',1),
	(153,'Banner',0,'Edit banner','2018-01-09 00:44:35','::1','vanlop',1),
	(154,'Banner',0,'Edit banner','2018-01-09 00:44:45','::1','vanlop',1),
	(155,'Banner',0,'Edit banner','2018-01-09 00:45:07','::1','vanlop',1),
	(156,'Banner',0,'Edit banner','2018-01-09 00:45:16','::1','vanlop',1),
	(157,'Banner',0,'Edit banner','2018-01-09 00:45:25','::1','vanlop',1),
	(158,'Banner',0,'Edit banner','2018-01-09 00:46:40','::1','vanlop',1),
	(159,'Banner',0,'Edit banner','2018-01-09 00:47:09','::1','vanlop',1),
	(160,'Banner',0,'Edit banner','2018-01-09 00:47:44','::1','vanlop',1),
	(161,'Banner',0,'Edit banner','2018-01-09 00:48:22','::1','vanlop',1),
	(162,'Career',0,'เพิ่มหมวดหมู๋ - ตามอาการ','2018-01-10 01:13:04','::1','vanlop',1),
	(163,'category',0,'แก้ไขหมวดหมู่สินค้า - ไฟโตโกลด์ ','2018-01-10 01:22:09','::1','vanlop',1),
	(164,'category',0,'แก้ไขหมวดหมู่สินค้า - ไพโตแคร์','2018-01-10 01:23:51','::1','vanlop',1),
	(165,'category',0,'แก้ไขหมวดหมู่สินค้า - ไพโตโกลด์','2018-01-10 01:23:58','::1','vanlop',1),
	(166,'Career',0,'เพิ่มหมวดหมู๋ - ะำหะ','2018-01-10 01:24:23','::1','vanlop',1),
	(167,'category',0,'แก้ไขหมวดหมู่สินค้า - ะำหะ','2018-01-10 01:25:53','::1','vanlop',1),
	(168,'category',5,'ลบหมวดหมู่ - ะำหะ','2018-01-10 01:27:23','::1','vanlop',1),
	(169,'Career',0,'เพิ่มหมวดหมู๋ - test','2018-01-10 01:27:36','::1','vanlop',1),
	(170,'category',6,'ลบหมวดหมู่ - test','2018-01-10 01:27:41','::1','vanlop',1),
	(171,'Product',0,'แก้ไขผลิตภัณฑ์','2018-01-10 01:44:21','::1','vanlop',1),
	(172,'Product',0,'แก้ไขผลิตภัณฑ์','2018-01-10 01:44:47','::1','vanlop',1),
	(173,'Product',0,'แก้ไขผลิตภัณฑ์','2018-01-10 01:45:00','::1','vanlop',1),
	(174,'Product',0,'แก้ไขผลิตภัณฑ์','2018-01-10 01:45:22','::1','vanlop',1),
	(175,'Product',0,'แก้ไขผลิตภัณฑ์','2018-01-10 01:45:28','::1','vanlop',1),
	(176,'Product',0,'แก้ไขผลิตภัณฑ์','2018-01-10 01:45:33','::1','vanlop',1),
	(177,'Product',0,'แก้ไขผลิตภัณฑ์','2018-01-10 01:45:43','::1','vanlop',1),
	(178,'Product',0,'แก้ไขผลิตภัณฑ์','2018-01-10 01:47:13','::1','vanlop',1),
	(179,'Product',0,'แก้ไขผลิตภัณฑ์','2018-01-10 01:47:18','::1','vanlop',1),
	(180,'Content',0,'แก้ไข จัดการข้อมูลส่วนท้ายเว็บ ','2018-01-10 02:23:44','::1','vanlop',1),
	(181,'Content',2,'แก้ไข จัดการข้อมูลส่วนท้ายเว็บ ','2018-01-10 02:23:47','::1','vanlop',1),
	(182,'Content',0,'แก้ไข วิสัยทัศน์','2018-01-11 01:53:22','::1','vanlop',1),
	(183,'Content',0,'แก้ไข บทบาทและภารกิจ','2018-01-11 01:58:13','::1','vanlop',1),
	(184,'Content',4,'แก้ไข บทบาทและภารกิจ','2018-01-11 02:01:21','::1','vanlop',1),
	(185,'Content',0,'แก้ไข ผู้ถือหุ้น','2018-01-11 02:02:11','::1','vanlop',1),
	(186,'Content',0,'แก้ไข รายชื่อคณะกรรมการ ','2018-01-11 02:04:28','::1','vanlop',1),
	(187,'Content',0,'แก้ไข กระบวนการผลิต ','2018-01-11 02:07:12','::1','vanlop',1),
	(188,'Content',7,'แก้ไข กระบวนการผลิต ','2018-01-11 02:09:52','::1','vanlop',1),
	(189,'Content',0,'แก้ไข วิจัยพัฒนา/การประกันคุณภาพ ','2018-01-11 02:12:55','::1','vanlop',1),
	(190,'Content',8,'แก้ไข วิจัยพัฒนา/การประกันคุณภาพ ','2018-01-11 02:26:05','::1','vanlop',1),
	(191,'Content',7,'แก้ไข กระบวนการผลิต ','2018-01-11 02:30:38','::1','vanlop',1),
	(192,'Content',0,'แก้ไข สถานที่จัดจำหน่าย ','2018-01-11 02:35:52','::1','vanlop',1),
	(193,'Content',9,'แก้ไข สถานที่จัดจำหน่าย ','2018-01-11 02:41:28','::1','vanlop',1),
	(194,'Content',9,'แก้ไข สถานที่จัดจำหน่าย ','2018-01-11 02:42:23','::1','vanlop',1),
	(195,'Content',2,'แก้ไข จัดการข้อมูลส่วนท้ายเว็บ ','2018-01-11 02:50:53','::1','vanlop',1),
	(196,'Content',2,'แก้ไข จัดการข้อมูลส่วนท้ายเว็บ ','2018-01-11 02:51:22','::1','vanlop',1);

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
	(1,'news','ยาน่ารู้','ยาน่ารู้','ยาน่ารู้   วารสารของเภสัชกรรมสมาคมแห่งประเทศไทย ในพระบรมราชูปถัมภ์','ยาน่ารู้   วารสารของเภสัชกรรมสมาคมแห่งประเทศไทย ในพระบรมราชูปถัมภ์','<p><span style=\"font-size:14px\">ยาน่ารู้&nbsp;&nbsp; วารสารของเภสัชกรรมสมาคมแห่งประเทศไทย ในพระบรมราชูปถัมภ์</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>&quot; พบกับบทสัมภาษณ์ ของ <span style=\"background-color:rgb(255, 255, 255)\">ภก.ดร.สุวิทย์&nbsp; ธีรกุลชน</span>&nbsp; ผู้อำนวยการ&nbsp; บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด ที่น่าประทับใจ และได้สาระประโยชน์มากมาย &quot;</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>จุดประกาย ความหวังให้เกิดการเปลี่ยนแปลง พลิกโฉม ยาสมุนไพรไทย สร้างคุณค่าและการยอมรับทั้งในระดับชาติและระดับสากล</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\">ข่าวสารเพื่อวงการเภสัชกรไทย ปีที่ 60 ฉบับที่ 2/2560 เมษายน - มิถุนายน 2560<br />\r\n<strong>บทสัมภาษณ์โดย : </strong>ภญ.ศศิมา&nbsp; อาจสงคราม<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ประธานฝ่ายประชาสัมพันธ์&nbsp; เภสัชกรรมสมาคมแห่งประเทศไทยฯ<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; บรรณาธิการ&nbsp; วารสาร&nbsp; &quot;ยาน่ารู้&quot;</span></p>','',NULL,'201709171746271.jpg','2017-09-14','2017-09-17 17:46:27','2017-09-24 23:04:30',NULL,'',0,'ยาน่ารู้',1200,1),
	(2,'news','รางวัลพัฒนาการโลจิสติกส์อุตสาหกรรมดีเด่น ปี2560','รางวัลพัฒนาการโลจิสติกส์อุตสาหกรรมดีเด่น ปี2560','กระทรวงอุตสาหกรรม โดย กรมอุตสากรรม พื้นฐาน และ การเหมืองแร่ ขอมอบรางวัล พัฒนาการโลจิสติกส์อุตสาหกรรมดีเด่น ปี2560 ด้านความมุ่งมั่นพัฒนาโลจิสติกส์ในองค์กร แด่  บริษัทผลิตภัณฑ์สมุนไพรไทย จำกัด','กระทรวงอุตสาหกรรม โดย กรมอุตสากรรม พื้นฐาน และ การเหมืองแร่ ขอมอบรางวัล พัฒนาการโลจิสติกส์อุตสาหกรรมดีเด่น ปี2560 ด้านความมุ่งมั่นพัฒนาโลจิสติกส์ในองค์กร แด่  บริษัทผลิตภัณฑ์สมุนไพรไทย จำกัด','<p>กระทรวงอุตสาหกรรม โดย กรมอุตสากรรม พื้นฐาน และ การเหมืองแร่ ขอมอบรางวัล พัฒนาการโลจิสติกส์อุตสาหกรรมดีเด่น ปี2560 ด้านความมุ่งมั่นพัฒนาโลจิสติกส์ในองค์กร แด่&nbsp; บริษัทผลิตภัณฑ์สมุนไพรไทย จำกัด</p>','',NULL,'201709171803119.jpg','2017-09-13','2017-09-17 17:50:39','2017-09-24 23:04:11',NULL,'',0,'รางวัลพัฒนาการโลจิสติกส์อุตสาหกรรมดีเด่น-ปี2560',1200,1),
	(3,'news','ฉลองเปิดร้านใหม่ สาขา JJ Mall','ฉลองเปิดร้านใหม่ สาขา JJ Mall','บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด (บริษัทร่วมทุนขององค์การเภสัชกรรม) จะมีพิธีเปิดศูนย์จำหน่ายผลิตภัณฑ์สมุนไพรไทย ที่ห้อง 378-380 ชั้น G ศูนย์การค้า JJ Mall ตลาดนัดจตุจักร วันที่ 18 สิงหาคม 60 เพื่อเป็นศูนย์กลางการส่งออกผลิตภัณฑ์สมุนไพรไทย รวมทั้งจำหน่ายผลิตภัณฑ์ให้กับชาวต่างชาติ นักท่องเที่ยว และประชาชนทั่วไป','บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด (บริษัทร่วมทุนขององค์การเภสัชกรรม) จะมีพิธีเปิดศูนย์จำหน่ายผลิตภัณฑ์สมุนไพรไทย ที่ห้อง 378-380 ชั้น G ศูนย์การค้า JJ Mall ตลาดนัดจตุจักร วันที่ 18 สิงหาคม 60 เพื่อเป็นศูนย์กลางการส่งออกผลิตภัณฑ์สมุนไพรไทย รวมทั้งจำหน่ายผลิตภัณฑ์ให้กับชาวต่างชาติ นักท่องเที่ยว และประชาชนทั่วไป','<p>บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด (บริษัทร่วมทุนขององค์การเภสัชกรรม) จะมีพิธีเปิดศูนย์จำหน่ายผลิตภัณฑ์สมุนไพรไทย ที่ห้อง 378-380 ชั้น G ศูนย์การค้า JJ Mall ตลาดนัดจตุจักร วันที่ 18 สิงหาคม 60 เพื่อเป็นศูนย์กลางการส่งออกผลิตภัณฑ์สมุนไพรไทย รวมทั้งจำหน่ายผลิตภัณฑ์ให้กับชาวต่างชาติ นักท่องเที่ยว และประชาชนทั่วไป</p>','',NULL,'201709180005120.jpg','2017-09-15','2017-09-18 00:05:12','2017-09-24 23:04:33',NULL,'',0,'ฉลองเปิดร้านใหม่-สาขา-JJ-Mall',1200,1),
	(4,'event','การประชุมเชิงปฏิบัติการระหว่างองค์การเภสัชกรรมและบริษัทร่วมทุน ก้าวสู่ Thailand 4.0','การประชุมเชิงปฏิบัติการระหว่างองค์การเภสัชกรรมและบริษัทร่วมทุน ก้าวสู่ Thailand 4.0','การประชุมเชิงปฏิบัติการระหว่างองค์การเภสัชกรรมและบริษัทร่วมทุน ก้าวสู่ Thailand 4.0','การประชุมเชิงปฏิบัติการระหว่างองค์การเภสัชกรรมและบริษัทร่วมทุน ก้าวสู่ Thailand 4.0','<p>การประชุมเชิงปฏิบัติการระหว่างองค์การเภสัชกรรมและบริษัทร่วมทุน ก้าวสู่ Thailand 4.0 เพื่อให้มีการบริหารจัดการที่เป็นเลิศ สอดคล้องกับนโยบายของรับบาลยุทธศาสตร์ชาติระยะ 20 ปี และแผนแม่บทแห่งชาติว่าด้วยการพัฒนาสมุนไพรไทย</p>','',NULL,'201709180022536.jpg','2017-09-05','2017-09-18 00:22:53','2017-09-24 23:08:29',NULL,'',0,'การประชุมเชิงปฏิบัติการระหว่างองค์การเภสัชกรรมและบริษัทร่วมทุน-ก้าวสู่-Thailand-4.0',1200,1),
	(5,'event','บริจาคยาสมุนไพร เพื่อช่วยผู้ประสบภัยน้ำท่วม จ.สกลนคร','บริจาคยาสมุนไพร เพื่อช่วยผู้ประสบภัยน้ำท่วม จ.สกลนคร','บริจาคยาสมุนไพร เพื่อช่วยผู้ประสบภัยน้ำท่วม จ.สกลนคร','บริจาคยาสมุนไพร เพื่อช่วยผู้ประสบภัยน้ำท่วม จ.สกลนคร','<p>บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด กับ กรมการแพทย์แผนไทยและการแพทย์ทางเลือก ได้ร่วมบริจาคยาสมุนไพร ได้แก่ ยาอมมะแว้ง , โลชั่นกันยุงตะไคร้หอม และ ยาสมุนไพรอื่นๆ เพื่อไปช่วยเหลือผู้ประสบอุทกภัยน้ำท่วม จังหวัดสกลนคร</p>','',NULL,'201709180033301.jpg','2017-09-11','2017-09-18 00:33:30','2017-09-24 23:08:08',NULL,'',0,'บริจาคยาสมุนไพร-เพื่อช่วยผู้ประสบภัยน้ำท่วม-จ.สกลนคร',1200,1),
	(6,'news','ความร่วมมือกับกรมแพทย์แผนไทยและแพทย์ทางเลือก','ความร่วมมือกับกรมแพทย์แผนไทยและแพทย์ทางเลือก','ความร่วมมือกับกรมแพทย์แผนไทยและแพทย์ทางเลือก','ความร่วมมือกับกรมแพทย์แผนไทยและแพทย์ทางเลือก','<p>ตามยุทธศาสตร์แผนแม่บทแห่งชาติว่าด้วยการพัฒนาสุนไพร ฉบับที่ ๑ พ.ศ. ๒๕๖๐-๒๕๖๔<br />\r\nเรื่อง การพัฒนาอุตสาหกรรมและการตลาดสมุนไพรให้มีคุณภาพระดับสากล<br />\r\nโดยมีมาตรการและแผนงานในการเพิ่มผลิตภาพของสถานประกอบการผลิต<br />\r\nยกระดับคุณภาพและความหลากหลายของผลิตภัณฑ์และยกระดับความรู้บุคลากร<br />\r\nกรมแพทย์แผนไทยและการแพทย์ทางเลือกจึงมีการแต่งตั้ง คณะทำงานวิชาการ ร่วมกันร่าง<br />\r\n<strong>หนังสือเทคโนโลยีเภสัชกรรมสำหรับการผลิตยาสมุนไพร</strong> และ <strong>บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด</strong><br />\r\nได้รับเลือกให้เข้าร่วมเป็นคณะทำงานในการร่างหนังสือฉบับนี้ด้วย</p>','',NULL,'201709180109320.jpg','2017-09-18','2017-09-18 01:09:32','2017-09-24 23:04:35',NULL,'',0,'ความร่วมมือกับกรมแพทย์แผนไทยและแพทย์ทางเลือก',1200,1),
	(7,'event','นักศึกษามหาวิทยาลัยสุโขทัยธรรมาธิราชเข้าเยี่ยมชม บริษัท','นักศึกษามหาวิทยาลัยสุโขทัยธรรมาธิราชเข้าเยี่ยมชม บริษัท','นักศึกษามหาวิทยาลัยสุโขทัยธรรมาธิราชเข้าเยี่ยมชม บริษัท','นักศึกษามหาวิทยาลัยสุโขทัยธรรมาธิราชเข้าเยี่ยมชม บริษัท','<p>มหาวิทยาลัยสุโขทัยะรรมมาธิราชร่วมกับสาขาวิชาวิทยาศาสตร์สุขภาพ กำหนดให้มีการปฏิบัติเสริมทักษะนักศักษาหลักสูตรแพทย์แผนไทยบัณฑิต ในการฝึกปฏิบัติเสริมทักษะดังกล่าว นักศึกษามีความจำเป็นทีีต้องศึกษาดุงานการปรุงยาในรูปแบบต่างๆที่ได้มาตรฐาน ซึ่งบริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด มีความพร้อมและมีความเหมาะสมที่จะใช้เป็นที่ศึกษาดูงานการปรุงยาอย่างดี เนื่องจากมีมาตรฐานรับรองการบริษัทมากมาย</p>','',NULL,'201709180143541.jpg','2017-06-20','2017-09-18 01:34:29','2017-09-24 23:08:21',NULL,'',0,'นักศึกษามหาวิทยาลัยสุโขทัยธรรมาธิราชเข้าเยี่ยมชม-บริษัท',1200,1),
	(8,'news','สนค. กระทรวงพาณิชย์ เข้าเยี่ยมชมกระบวนการผลิตของบริษัท','สนค. กระทรวงพาณิชย์ เข้าเยี่ยมชมกระบวนการผลิตของบริษัท','สนค. กระทรวงพาณิชย์ เข้าเยี่ยมชมกระบวนการผลิตของบริษัท','สนค. กระทรวงพาณิชย์ เข้าเยี่ยมชมกระบวนการผลิตของบริษัท','<p>สำนักงานนโยบายและยุทธศาสตร์การค้า (สนค.) กระทรวงพาณิชย์ จัดโครงการเพิ่มศักยภาพการตลาดสมุนไพรและผลิตภัณฑ์แปรรูปสู่สากล โดยมีกิจกรรมย่อยคือกิจกรรมสำรวจศักยภาพสมุนไพรไทย มีความประสงค์จะขอเข้าศึกษาดูงานกับทาง บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด เพื่อนำผู้แทนหน่วยงานรัฐ เอกชน เจ้าหน้าที่จากสถานเอกอัครราชฑูตประเทศต่างๆ และ สื่อมวลชน เข้าชมศักยภาพในการผลิตและการแปรรูปผลิตภัณฑ์</p>','<p>สำนักงานนโยบายและยุทธศาสตร์การค้า (สนค.) กระทรวงพาณิชย์ จัดโครงการเพิ่มศักยภาพการตลาดสมุนไพรและผลิตภัณฑ์แปรรูปสู่สากล โดยมีกิจกรรมย่อยคือกิจกรรมสำรวจศักยภาพสมุนไพรไทย มีความประสงค์จะขอเข้าศึกษาดูงานกับทาง บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด เพื่อนำผู้แทนหน่วยงานรัฐ เอกชน เจ้าหน้าที่จากสถานเอกอัครราชฑูตประเทศต่างๆ และ สื่อมวลชน เข้าชมศักยภาพในการผลิตและการแปรรูปผลิตภัณฑ์</p>',NULL,'201709180135281.jpg','2017-07-09','2017-09-18 01:35:28','2017-10-23 17:18:22',NULL,'',0,'สนค.-กระทรวงพาณิชย์-เข้าเยี่ยมชมกระบวนการผลิตของบริษัท',1200,1),
	(9,'event','บริจาคยาสมุนไพร สถานสงเคราะห์บ้านพระพร','บริจาคยาสมุนไพร สถานสงเคราะห์บ้านพระพร','บริจาคยาสมุนไพร สถานสงเคราะห์บ้านพระพร','บริจาคยาสมุนไพร สถานสงเคราะห์บ้านพระพร','<p>มูลนิธิพันธกิจเรือนจำคริสเตียน โดยเปิดบ้านพระพร ช่วยเหลือผู้ด้อยโอกาส เยาวชนจากสถานพินิจ และอุปการะลูกผู้ต้องขัง เนื่องจากมีเด็กจำนวนมากที่ป่วยด้วยอาการไข้หวัด จึงขอความอนุเคราะห์บริจาคยาสมุนไพรฟ้าทะลายโจร ให้กับเด็กที่ป่วยเป็นไข้ตัวร้อนและมีอาการหวัด ซึ่งทางมูลนิธิเคยได้รับบริจาคยาสมุนไพรดังกล่าว แล้ว อาการป่วยของเด็กๆดีขึ้น</p>','',NULL,'201709180136335.jpg','2017-06-21','2017-09-18 01:36:33','2017-09-24 23:08:11',NULL,'',0,'บริจาคยาสมุนไพร-สถานสงเคราะห์บ้านพระพร',1200,1),
	(10,'event','สถาบันวิจัยสมุนไพร กรมวิทยาศาสตร์การแพทย์ เข้าเยี่ยมชมโรงงานผลิต','สถาบันวิจัยสมุนไพร กรมวิทยาศาสตร์การแพทย์ เข้าเยี่ยมชมโรงงานผลิต','สถาบันวิจัยสมุนไพร กรมวิทยาศาสตร์การแพทย์ เข้าเยี่ยมชมโรงงานผลิต','','<p>สถาบันวิจัยสมุนไพร กรมวิทยาศาสตร์การแพทย์ ได้มีการจัดโครงการ Training on GMP Production ให้แก่ผู้รับทุนฝึกอบรมขององค์การอนามัยโลกจากประเทศเมียนมาร์ จึงได้มีการขอความอนุเคราะห์เข้าเยี่ยมชม บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด โดย คณะผู้ศึกษาดูงานประกอบด้วยผู้บริหาร นักวิทยาศาตร์การแพทย์ เภสัชกร และเจ้าหน้าที่ ผู้เกี่ยวข้อง</p>','',NULL,'201709180146088.jpg','2017-06-01','2017-09-18 01:46:08','2017-09-24 23:08:05',NULL,'',0,'สถาบันวิจัยสมุนไพร-กรมวิทยาศาสตร์การแพทย์-เข้าเยี่ยมชมโรงงานผลิต',1200,1),
	(11,'event','การประกวดตั้งชื่อผลิตภัณฑ์ใหม่ Phyto Gold','การประกวดตั้งชื่อผลิตภัณฑ์ใหม่ Phyto Gold','การประกวดตั้งชื่อผลิตภัณฑ์ใหม่ Phyto Gold','','<p>เพื่อให้พนักงานทุกคนได้มีส่วนร่วมในชื่อสินค้าผลิตภัณฑ์ใหม่ของบริษัทฯ จึงได้มีการจัดให้มีการประกวดตั้งชื่อผลิตภัณฑ์ใหม่ <span style=\"color:rgb(0, 100, 0)\"><span style=\"color:#daa520\">Phyto Gold</span> สารสกัดใบหม่อน</span> โดยชื่อที่ได้รับคัดเลือกจะได้รับเงินรางวัล และ ของที่ระลึก จากทางบริษัทฯ</p>','',NULL,'201709180148310.jpg','2017-05-18','2017-09-18 01:48:31','2017-09-24 23:08:31',NULL,'',0,'การประกวดตั้งชื่อผลิตภัณฑ์ใหม่-Phyto-Gold',1200,1),
	(12,'event','กิจกรรม CSR ประจำปี 2560','กิจกรรม CSR ประจำปี 2560','กิจกรรม CSR ประจำปี 2560','','<p>กิจกรรม CSR ประจำปี 2560 จัดกิจกรรมและจัดเลี้ยงอาหารกลางวัน ณ สถานสงเคราะห์บ้านพักคนชราวาสนะเวศม์ วันที่ 24 เมษายน 2560</p>','',NULL,'201709180149278.jpg','2017-05-03','2017-09-18 01:49:27','2017-09-24 23:08:24',NULL,'',0,'กิจกรรม-CSR-ประจำปี-2560',1200,1),
	(13,'event','การสัมมนาหลักสูตร สมุนไพรในร้านขายยา','การสัมมนาหลักสูตร สมุนไพรในร้านขายยา','การสัมมนาหลักสูตร สมุนไพรในร้านขายยา','','<p><strong><span style=\"font-size:18px\">การสัมมนาหลักสูตร สมุนไพรในร้านขายยา</span></strong><br />\r\nพื้นฐานเภสัชกรรมแผนไทย<br />\r\nจัดโดย สมาคมร้านขายยา<br />\r\nวันที่ 22 มกราคม 2560<br />\r\nณ โรงแรม เดอะทวินทาวเวอร์</p>','',NULL,'201709180151376.jpg','2017-02-22','2017-09-18 01:51:37','2017-09-24 23:08:26',NULL,'',0,'การสัมมนาหลักสูตร-สมุนไพรในร้านขายยา',1200,1),
	(14,'event','นักศึกษาเข้าเยี่ยมชม บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด','นักศึกษาเข้าเยี่ยมชม บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด','นักศึกษาเข้าเยี่ยมชม บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด','','<p>นักศึกษาสาขาวิชาแพทย์แผนไทย คณะวิทยาศาตร์ มหาวิทยาลัยรามคำแหง เข้าเยี่ยมชมกระบวนการผลิตของ บริษัทผลิตภัณฑ์สมุนไพรไทย จำกัด เพื่อศึกษาหลักเกณฑ์ที่ดีในการผลิตยา (GMP) คณะนักศึกษาพร้อมด้วยคณะอาจารย์ รวม ๔๔ ท่าน</p>','',NULL,'201709180153233.jpg','2017-05-03','2017-09-18 01:53:23','2017-09-24 23:08:14',NULL,'',0,'นักศึกษาเข้าเยี่ยมชม-บริษัท-ผลิตภัณฑ์สมุนไพรไทย-จำกัด',1200,1),
	(15,'event','ออกร้าน งานตลาดน้ำอโยธยา','Lorem ipsum dolor sit amet, urna lacinia curabitur,','ออกร้าน งานตลาดน้ำอโยธยา','Lorem ipsum dolor sit amet, urna lacinia curabitur, erat nec a vestibulum, arcu in. Vel est ipsum sed aliquam adipiscing cum, sed ut integer diam sapien, wisi diam ac maecenas, neque vitae fusce varius, eu in et volutpat. Eu proin aliquam consequat.','<p>ประชาสัมพันธ์ เรื่อง งานออกร้าน ตลาดน้ำอโธยา โดย บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด ได้เข้าร่วมกิจกรรมออกร้าน ในวันที่ 3-4 มิถุนายน 2560 สถานที่จัดงาน K-village สุขุมวิท 26 ภายในงานท่านจะได้พบกับ โปรโมรชั่นสุดพิเศษเพื่อคนรักสมุนไพร</p>\r\n\r\n<p>คิดถึงสมุนไพร คิดถึงไฟโตแคร์</p>','<p>Lorem ipsum dolor sit amet, urna lacinia curabitur, erat nec a vestibulum, arcu in. Vel est ipsum sed aliquam adipiscing cum, sed ut integer diam sapien, wisi diam ac maecenas, neque vitae fusce varius, eu in et volutpat. Eu proin aliquam consequat. Dignissim cursus ipsum diam ut, non et ut eget dignissim curabitur, at elit viverra lacinia ac, fringilla metus aliquam magna scelerisque purus. Necessitatibus massa, vitae nec ipsum.</p>\r\n\r\n<p>Sed commodi wisi odio duis donec etiam, eget diam in orci fringilla, tristique suscipit dui venenatis blandit. Morbi dapibus, justo in sed lectus tempor, diam magnis a. Nunc parturient proin. A accumsan id mattis egestas vivamus. Non aliquam odio, amet hac eros sit risus montes.</p>',NULL,'201709180201453.jpg','2017-09-27','2017-09-18 02:01:45','2017-10-23 17:23:09',NULL,'',0,'ออกร้าน-งานตลาดน้ำอโยธยา',1200,1),
	(16,'news','รางวัล อย. ควอลิตี้ อวอร์ด ประจำปี 2557','รางวัล อย. ควอลิตี้ อวอร์ด ประจำปี 2557','รางวัล อย. ควอลิตี้ อวอร์ด ประจำปี 2557','','<p>คุณภีมภัทร ตาละลักษมณ์ กรรมการผู้จัดการบริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด ให้การต้อนรับ นพ.บุญชัย สมบูรณ์สุข เลขาธิการคณะกรรมการอาหารและยา เยี่ยมชมบูธของบริษัท ในโอกาสที่บริษัทได้รับรางวัล อย.ควอลิตี้ อวอร์ด ประจำปี 2557 ในฐานะเป็นผู้ประกอบการด้านการผลิตยาที่มีการดำเนินการอย่างมีคุณภาพ มีจริยธรรม และประกอบการด้วยความรับผิดชอบต่อสังคม ตามมาตรฐาน GMP ณ โรงแรมมิราเคิล แกรนด์ คอนแวนชั่น เมื่อวันที่ 17 มีนาคม 2557</p>','',NULL,'201709180204334.jpg','2017-03-26','2017-09-18 02:04:33','2017-09-24 23:04:18',NULL,'',0,'รางวัล-อย.-ควอลิตี้-อวอร์ด-ประจำปี-2557',1200,1),
	(17,'news','รางวัล อย. ควอลิตี้ อวอร์ด ประจำปี 2557','รางวัล อย. ควอลิตี้ อวอร์ด ประจำปี 2557','รางวัล อย. ควอลิตี้ อวอร์ด ประจำปี 2557','','<p>คุณภีมภัทร ตาละลักษมณ์ กรรมการผู้จัดการบริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด และทีมงาน รับมอบรางวัล อย. ควอลิตี้ อวอร์ด ประจำปี 2557 โดยมีคุณสุนันทา ตันสิริเสริญกุล ผู้อำนวยการศูนย์วิจัยพัฒนาและประกันคุณภาพ ของบริษัท เป็นตัวแทนรับรางวัลจากนพ.บุญชัย สมบูรณ์สุข เลขาธิการคณะกรรมการอาหารและยา ในฐานะเป็นผู้ประกอบการด้านการผลิตยาที่มีการดำเนินการอย่างมีคุณภาพ มีจริยธรรม และประกอบการด้วยความรับผิดชอบต่อสังคม ตามมาตรฐาน GMP ณ โรงแรมมิราเคิล แกรนด์ คอนเวนชั่น เมื่อวันที่ 17 มีนาคม 2557</p>','',NULL,'201709180206232.jpg','2014-03-17','2017-09-18 02:06:23','2017-09-24 23:04:14',NULL,'',0,'รางวัล-อย.-ควอลิตี้-อวอร์ด-ประจำปี-2557',1200,1),
	(18,'news','40 สุดยอดสถานประกอบการดี จริยธรรมเด่น','40 สุดยอดสถานประกอบการดี จริยธรรมเด่น','40 สุดยอดสถานประกอบการดี จริยธรรมเด่น','','<p>40 สุดยอดสถานประกอบการดี จริยธรรมเด่น รับรางวัล อย. คอวลิตี้ อวอร์ด ประจำปี 2557</p>','',NULL,'201709180208360.jpg','2014-05-28','2017-09-18 02:08:36','2017-09-24 23:04:38',NULL,'',0,'40-สุดยอดสถานประกอบการดี-จริยธรรมเด่น',1200,1);

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


# Dump of table bt_pages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bt_pages`;

CREATE TABLE `bt_pages` (
  `pages_id` int(20) NOT NULL AUTO_INCREMENT,
  `pages_categories` varchar(100) DEFAULT NULL,
  `pages_subject_th` varchar(200) DEFAULT NULL,
  `pages_subject_en` varchar(200) DEFAULT NULL,
  `pages_title_th` text,
  `pages_title_en` text,
  `pages_content_th` text,
  `pages_content_en` text,
  `pages_photo` varchar(200) DEFAULT NULL,
  `pages_photoslide` varchar(200) DEFAULT NULL,
  `pages_date` date DEFAULT NULL,
  `pages_createdate` datetime DEFAULT NULL,
  `pages_lastupdate` datetime DEFAULT NULL,
  `pages_view` int(20) DEFAULT NULL,
  `pages_slide` enum('publish','unpublish') DEFAULT 'unpublish',
  `pages_order` int(20) DEFAULT NULL,
  `pages_link` varchar(200) DEFAULT NULL,
  `officeID` int(20) NOT NULL,
  `userID` int(20) NOT NULL,
  `category_id` int(11) DEFAULT '0',
  PRIMARY KEY (`pages_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

LOCK TABLES `bt_pages` WRITE;
/*!40000 ALTER TABLE `bt_pages` DISABLE KEYS */;

INSERT INTO `bt_pages` (`pages_id`, `pages_categories`, `pages_subject_th`, `pages_subject_en`, `pages_title_th`, `pages_title_en`, `pages_content_th`, `pages_content_en`, `pages_photo`, `pages_photoslide`, `pages_date`, `pages_createdate`, `pages_lastupdate`, `pages_view`, `pages_slide`, `pages_order`, `pages_link`, `officeID`, `userID`, `category_id`)
VALUES
	(1,'article','Andrographis paniculata','Andrographis paniculata','Andrographis paniculata is an herbal mixture used to treat inflammatory diseases. An extract of the herb, HMPL-004, inhibits TNF-α and IL-1β, and prevents colitis in animal models.','Andrographis paniculata is an herbal mixture used to treat inflammatory diseases. An extract of the herb, HMPL-004, inhibits TNF-α and IL-1β, and prevents colitis in animal models.','<p><span style=\"color:#696969\"><span style=\"font-size:14px\"><span style=\"font-family:tahoma,geneva,sans-serif\"><strong>BACKGROUND:</strong>&nbsp;<em>Andrographis paniculata</em>&nbsp;is an herbal mixture used to treat inflammatory diseases. An extract of the herb, HMPL-004, inhibits TNF-<em>&alpha;</em>&nbsp;and IL-1<em>&beta;</em>, and prevents colitis in animal models.</span></span></span></p>\r\n\r\n<p><span style=\"color:#696969\"><span style=\"font-size:14px\"><span style=\"font-family:tahoma,geneva,sans-serif\"><strong>AIM:</strong>&nbsp;To determine the efficacy and safety of HMPL-004 in patients with mild-to-moderate ulcerative colitis.</span></span></span></p>\r\n\r\n<p><span style=\"color:#696969\"><span style=\"font-size:14px\"><span style=\"font-family:tahoma,geneva,sans-serif\"><strong>METHODS:</strong>&nbsp;A randomised, double-blind, multicentre, 8-week parallel group study was conducted using HMPL-004 1200 mg/day compared with 4500 mg/day of slow release mesalazine (mesalamine) granules in patients with mild-to-moderately active ulcerative colitis. Disease activity was assessed at baseline and every 2 weeks for clinical response, and at baseline and 8 weeks by colonoscopy.</span></span></span></p>\r\n\r\n<p><span style=\"color:#696969\"><span style=\"font-size:14px\"><span style=\"font-family:tahoma,geneva,sans-serif\"><strong>RESULTS:</strong>&nbsp;One hundred and twenty patients at five centres in China were randomised and dosed. Clinical remission and response were seen in 21% and 76% of HMPL-004-treated patients, and 16% and 82% of mesalazine-treated patients. By colonoscopy, remission and response were seen in 28% and 74% of HMPL-004-treated patients and 24% and 71% of mesalazine-treated patients, respectively. There was no significant difference between the two treatment groups.</span></span></span></p>\r\n\r\n<p><span style=\"color:#696969\"><span style=\"font-size:14px\"><span style=\"font-family:tahoma,geneva,sans-serif\"><strong>CONCLUSION:</strong>&nbsp;HMPL-004 may be an efficacious alternative to mesalazine in ulcerative colitis.</span></span></span></p>','<p><span style=\"color:#696969\"><span style=\"font-size:14px\"><span style=\"font-family:tahoma,geneva,sans-serif\"><strong>BACKGROUND:</strong>&nbsp;<em>Andrographis paniculata</em>&nbsp;is an herbal mixture used to treat inflammatory diseases. An extract of the herb, HMPL-004, inhibits TNF-<em>&alpha;</em>&nbsp;and IL-1<em>&beta;</em>, and prevents colitis in animal models.</span></span></span></p>\r\n\r\n<p><span style=\"color:#696969\"><span style=\"font-size:14px\"><span style=\"font-family:tahoma,geneva,sans-serif\"><strong>AIM:</strong>&nbsp;To determine the efficacy and safety of HMPL-004 in patients with mild-to-moderate ulcerative colitis.</span></span></span></p>\r\n\r\n<p><span style=\"color:#696969\"><span style=\"font-size:14px\"><span style=\"font-family:tahoma,geneva,sans-serif\"><strong>METHODS:</strong>&nbsp;A randomised, double-blind, multicentre, 8-week parallel group study was conducted using HMPL-004 1200 mg/day compared with 4500 mg/day of slow release mesalazine (mesalamine) granules in patients with mild-to-moderately active ulcerative colitis. Disease activity was assessed at baseline and every 2 weeks for clinical response, and at baseline and 8 weeks by colonoscopy.</span></span></span></p>\r\n\r\n<p><span style=\"color:#696969\"><span style=\"font-size:14px\"><span style=\"font-family:tahoma,geneva,sans-serif\"><strong>RESULTS:</strong>&nbsp;One hundred and twenty patients at five centres in China were randomised and dosed. Clinical remission and response were seen in 21% and 76% of HMPL-004-treated patients, and 16% and 82% of mesalazine-treated patients. By colonoscopy, remission and response were seen in 28% and 74% of HMPL-004-treated patients and 24% and 71% of mesalazine-treated patients, respectively. There was no significant difference between the two treatment groups.</span></span></span></p>\r\n\r\n<p><span style=\"color:#696969\"><span style=\"font-size:14px\"><span style=\"font-family:tahoma,geneva,sans-serif\"><strong>CONCLUSION:</strong>&nbsp;HMPL-004 may be an efficacious alternative to mesalazine in ulcerative colitis.</span></span></span></p>',NULL,'201709242242016.jpg','2017-09-22','2017-09-22 18:43:16','2017-10-23 17:25:56',NULL,'',0,'Andrographis-paniculata',1200,1,0),
	(2,'career','นักวิจัย และตรวจสอบ','นักวิจัย และตรวจสอบ','','','<p>Duties and Responsibilities:</p>\r\n\r\n<ul>\r\n	<li>Organizing and preparing agendas and papers for board meetings, committees and annual general meeting (AGMs).</li>\r\n	<li>Taking minutes, drafting resolutions and relevant documents.</li>\r\n	<li>Maintaining statutory books, including registers members, directors and secretaries.</li>\r\n	<li>Maintaining database and all other documents in relations to company secretary and investor relations matters.</li>\r\n	<li>Liaising with external regulators and advisers, such as lawyers and auditors.</li>\r\n	<li>Assist team in terms of ensuring department year plan and calendars are being followed and executed as planned.</li>\r\n</ul>','<p>Duties and Responsibilities:</p>\r\n\r\n<ul>\r\n	<li>Organizing and preparing agendas and papers for board meetings, committees and annual general meeting (AGMs).</li>\r\n	<li>Taking minutes, drafting resolutions and relevant documents.</li>\r\n	<li>Maintaining statutory books, including registers members, directors and secretaries.</li>\r\n	<li>Maintaining database and all other documents in relations to company secretary and investor relations matters.</li>\r\n	<li>Liaising with external regulators and advisers, such as lawyers and auditors.</li>\r\n	<li>Assist team in terms of ensuring department year plan and calendars are being followed and executed as planned.</li>\r\n</ul>',NULL,'','2017-09-25','2017-09-25 00:18:33','2017-10-23 17:28:33',NULL,'',0,'นักวิจัย-และตรวจสอบ',1200,1,0),
	(3,'career','Web Programmer','Web Programmer','','','<p>Duties and Responsibilities:</p>\r\n\r\n<ul>\r\n	<li>Organizing and preparing agendas and papers for board meetings, committees and annual general meeting (AGMs).</li>\r\n	<li>Taking minutes, drafting resolutions and relevant documents.</li>\r\n	<li>Maintaining statutory books, including registers members, directors and secretaries.</li>\r\n	<li>Maintaining database and all other documents in relations to company secretary and investor relations matters.</li>\r\n	<li>Liaising with external regulators and advisers, such as lawyers and auditors.</li>\r\n	<li>Assist team in terms of ensuring department year plan and calendars are being followed and executed as planned.</li>\r\n</ul>','<p>Duties and Responsibilities:</p>\r\n\r\n<ul>\r\n	<li>Organizing and preparing agendas and papers for board meetings, committees and annual general meeting (AGMs).</li>\r\n	<li>Taking minutes, drafting resolutions and relevant documents.</li>\r\n	<li>Maintaining statutory books, including registers members, directors and secretaries.</li>\r\n	<li>Maintaining database and all other documents in relations to company secretary and investor relations matters.</li>\r\n	<li>Liaising with external regulators and advisers, such as lawyers and auditors.</li>\r\n	<li>Assist team in terms of ensuring department year plan and calendars are being followed and executed as planned.</li>\r\n</ul>',NULL,'','2017-09-25','2017-09-25 00:19:51','2017-10-23 17:28:50',NULL,'',0,'Web-Programmer',1200,1,0),
	(4,'career','IT Support','IT Support','','','<p>Duties and Responsibilities:</p>\r\n\r\n<ul>\r\n	<li>Organizing and preparing agendas and papers for board meetings, committees and annual general meeting (AGMs).</li>\r\n	<li>Taking minutes, drafting resolutions and relevant documents.</li>\r\n	<li>Maintaining statutory books, including registers members, directors and secretaries.</li>\r\n	<li>Maintaining database and all other documents in relations to company secretary and investor relations matters.</li>\r\n	<li>Liaising with external regulators and advisers, such as lawyers and auditors.</li>\r\n	<li>Assist team in terms of ensuring department year plan and calendars are being followed and executed as planned.</li>\r\n</ul>','<p>Duties and Responsibilities:</p>\r\n\r\n<ul>\r\n	<li>Organizing and preparing agendas and papers for board meetings, committees and annual general meeting (AGMs).</li>\r\n	<li>Taking minutes, drafting resolutions and relevant documents.</li>\r\n	<li>Maintaining statutory books, including registers members, directors and secretaries.</li>\r\n	<li>Maintaining database and all other documents in relations to company secretary and investor relations matters.</li>\r\n	<li>Liaising with external regulators and advisers, such as lawyers and auditors.</li>\r\n	<li>Assist team in terms of ensuring department year plan and calendars are being followed and executed as planned.</li>\r\n</ul>',NULL,'','2017-09-18','2017-09-25 00:20:06','2017-10-23 17:29:01',NULL,'',0,'IT-Support',1200,1,0),
	(6,'product','สารสกัดฟ้าทะลายโจร แคปซูล','สารสกัดฟ้าทะลายโจร แคปซูล','','','<p><strong>ชื่อผลิตภัณฑ์ : </strong>สารสกัดฟ้าทะลายโจร แคปซูล<br />\r\n<strong>สารสำคัญ </strong><strong>:</strong> ใน1 แคปซูล ประกอบด้วย สารสกัดฟ้าทะลายโจร ซึ่งมีแอนโดรกราโฟไลด์ ไม่ต่ำกว่า 20 มก.<br />\r\n<strong>สรรพคุณ </strong><strong>: </strong>ลดไข้ และบรรเทาอาการเจ็บคอ<br />\r\n<strong>รูปแบบ</strong> <strong>:</strong> แคปซูล<br />\r\n<strong>วิธีใช้ </strong><strong>:</strong> รับประทานครั้งละ 1 แคปซูล วันละ 3 ครั้ง หลังอาหารหรือตามแพทย์สั่ง<br />\r\n<strong>ขนาดบรรจุ : </strong>2*10 แคปซูล/กล่อง<br />\r\n<strong>คำเตือน :</strong><br />\r\n<strong>สั่งซื้อสินค้าได้ที่ :</strong> <a href=\"\\\" target=\"\\&quot;_blank\\&quot;\">www.herbalshopthailand.com/สารสกัดฟ้าทลายโจร</a></p>','<p><strong>ชื่อผลิตภัณฑ์ : </strong>สารสกัดฟ้าทะลายโจร แคปซูล<br />\r\n<strong>สารสำคัญ </strong><strong>:</strong> ใน1 แคปซูล ประกอบด้วย สารสกัดฟ้าทะลายโจร ซึ่งมีแอนโดรกราโฟไลด์ ไม่ต่ำกว่า 20 มก.<br />\r\n<strong>สรรพคุณ </strong><strong>: </strong>ลดไข้ และบรรเทาอาการเจ็บคอ<br />\r\n<strong>รูปแบบ</strong> <strong>:</strong> แคปซูล<br />\r\n<strong>วิธีใช้ </strong><strong>:</strong> รับประทานครั้งละ 1 แคปซูล วันละ 3 ครั้ง หลังอาหารหรือตามแพทย์สั่ง<br />\r\n<strong>ขนาดบรรจุ : </strong>2*10 แคปซูล/กล่อง<br />\r\n<strong>คำเตือน :</strong><br />\r\n<strong>สั่งซื้อสินค้าได้ที่ :</strong> <a href=\"\\\" target=\"\\&quot;_blank\\&quot;\">www.herbalshopthailand.com/สารสกัดฟ้าทลายโจร</a></p>',NULL,'201709270031406.jpg','2017-11-02','2017-09-27 00:31:40','2018-01-10 01:45:00',NULL,'',0,'สารสกัดฟ้าทะลายโจร-แคปซูล',1200,1,2),
	(8,'product','ขมิ้นชันแคปซูล','ขมิ้นชันแคปซูล','','','<p>ส่วนประกอบ : ใน 1 แคปซูลประกอบด้วย ผงขมิ้นชันที่จะให้น้ำมันระเหยง่าย 0.02 มล. เคอร์คูมินอยด์ 0.024 กรัม สรรพคุณ : บรรเทาอาการท้องอืด ท้องเฟ้อ จุกเสียดแน่น วิธีใช้ : รับประทานครั้งละ 2 แคปซูล วันละ 4 ครั้ง หลังอาหารและก่อนนอน หรือตามแพทย์สั่ง คำเตือน : ถ้าอาการดังกล่าวไม่ดีขึ้นภายใน 1-2 สัปดาห์ ควรปรึกษาแพทย์ การเก็บรักษา : เก็บในที่เย็นและแห้ง ขนาดบรรจุ : 10&times;10 แคปซูล/กล่อง</p>','<p>ส่วนประกอบ : ใน 1 แคปซูลประกอบด้วย ผงขมิ้นชันที่จะให้น้ำมันระเหยง่าย 0.02 มล. เคอร์คูมินอยด์ 0.024 กรัม สรรพคุณ : บรรเทาอาการท้องอืด ท้องเฟ้อ จุกเสียดแน่น วิธีใช้ : รับประทานครั้งละ 2 แคปซูล วันละ 4 ครั้ง หลังอาหารและก่อนนอน หรือตามแพทย์สั่ง คำเตือน : ถ้าอาการดังกล่าวไม่ดีขึ้นภายใน 1-2 สัปดาห์ ควรปรึกษาแพทย์ การเก็บรักษา : เก็บในที่เย็นและแห้ง ขนาดบรรจุ : 10&times;10 แคปซูล/กล่อง</p>',NULL,'201709270040522.jpg','2017-11-01','2017-09-27 00:39:59','2018-01-10 01:47:18',NULL,'',0,'ขมิ้นชันแคปซูล',1200,1,1),
	(10,'product','ยาเม็ดจันทน์ลีลา','ยาเม็ดจันทน์ลีลา','','','<p><strong>ชื่อผลิตภัณฑ์ :&nbsp;</strong>ยาเม็ดจันทน์ลีลา&nbsp;<br />\r\n<strong>สารสำคัญ&nbsp;</strong><strong>:</strong>&nbsp;ใน 1 เม็ด ( ผงยา 500 มิลลิกรัม ) ประกอบด้วย โกฐสอ โกฐเขมา โกฐจุฬาลัมพา แก่นจันทน์เทศ แก่นจันทน์แดง ลูกกระดอม บอระเพ็ด รากปลาไหลเผือก หนักสิ่งละ 60.6 มิลลิกรัม หรือ 4 ส่วน พิมเสน หนัก15.2 มิลิกรัม หรือ 1 ส่วน<br />\r\n<strong>สรรพคุณ&nbsp;</strong><strong>:&nbsp;</strong>แก้ไข้ แก้ตัวร้อน&nbsp;<br />\r\n<strong>รูปแบบ</strong>&nbsp;<strong>:</strong>&nbsp;ยาเม็ด&nbsp;<br />\r\n<strong>วิธีใช้&nbsp;</strong><strong>:</strong>&nbsp;ผู้ใหญ่ ครั้งละ 3-4 เม็ด ทุก 4 ชั่วโมง, เด็กอายุ 6-12 ปี ครั้งละ 1-2 เม็ด ทุก 4 ชั่วโมง<br />\r\n<strong>ขนาดบรรจุ :&nbsp;</strong>30 เม็ด/ขวด<br />\r\n<strong>คำเตือน :&nbsp;</strong>ไม่แนะนำให้ใช้ในผู้ที่สงสัยเป็นไข้เลือดออก, หากใช้ยาเป็นเวลานานเกิน 3 วัน แล้วอาการไม่ดีขึ้น ควรปรึกษาแพทย์<br />\r\nสั่งซื้อสินค้าได้ที่ <a href=\"\\\" target=\"\\\">www.herbalshopthailand.com/ยาเม็ดจันท</a><a href=\"\\\">น์ลีลา</a></p>','<p><strong>ชื่อผลิตภัณฑ์ :&nbsp;</strong>ยาเม็ดจันทน์ลีลา&nbsp;<br />\r\n<strong>สารสำคัญ&nbsp;</strong><strong>:</strong>&nbsp;ใน 1 เม็ด ( ผงยา 500 มิลลิกรัม ) ประกอบด้วย โกฐสอ โกฐเขมา โกฐจุฬาลัมพา แก่นจันทน์เทศ แก่นจันทน์แดง ลูกกระดอม บอระเพ็ด รากปลาไหลเผือก หนักสิ่งละ 60.6 มิลลิกรัม หรือ 4 ส่วน พิมเสน หนัก15.2 มิลิกรัม หรือ 1 ส่วน<br />\r\n<strong>สรรพคุณ&nbsp;</strong><strong>:&nbsp;</strong>แก้ไข้ แก้ตัวร้อน&nbsp;<br />\r\n<strong>รูปแบบ</strong>&nbsp;<strong>:</strong>&nbsp;ยาเม็ด&nbsp;<br />\r\n<strong>วิธีใช้&nbsp;</strong><strong>:</strong>&nbsp;ผู้ใหญ่ ครั้งละ 3-4 เม็ด ทุก 4 ชั่วโมง, เด็กอายุ 6-12 ปี ครั้งละ 1-2 เม็ด ทุก 4 ชั่วโมง<br />\r\n<strong>ขนาดบรรจุ :&nbsp;</strong>30 เม็ด/ขวด<br />\r\n<strong>คำเตือน :&nbsp;</strong>ไม่แนะนำให้ใช้ในผู้ที่สงสัยเป็นไข้เลือดออก, หากใช้ยาเป็นเวลานานเกิน 3 วัน แล้วอาการไม่ดีขึ้น ควรปรึกษาแพทย์<br />\r\nสั่งซื้อสินค้าได้ที่ <a href=\"\\\" target=\"\\\">www.herbalshopthailand.com/ยาเม็ดจันท</a><a href=\"\\\">น์ลีลา</a></p>',NULL,'201709270110350.jpg','2017-11-01','2017-09-27 01:10:35','2018-01-10 01:44:47',NULL,'',0,'ยาเม็ดจันทน์ลีลา',1200,1,2),
	(9,'product','ยาอมแก้ไอมะแว้ง รสบ๊วย','ยาอมแก้ไอมะแว้ง รสบ๊วย','','','<p><strong>ชื่อผลิตภัณฑ์ : </strong>ยาอมมะแว้งรสบ๊วย<br />\r\n<strong>สารสำคัญ </strong><strong>:</strong> ผลมะแว้งผง ใบกระเพราแดง ใบตานหม่อน ใบสวาด หัวขมิ้นอ้อย สารส้ม<br />\r\n<strong>สรรพคุณ </strong><strong>: </strong>แก้ไอ ขับเสมหะ<br />\r\n<strong>รูปแบบ</strong> <strong>:</strong> ยาเม็ดอม<br />\r\n<strong>วิธีใช้ </strong><strong>:</strong> อมครั้งละ 3-5 เม็ด เมื่อมีอาการไอ<br />\r\n<strong>ขนาดบรรจุ : </strong>20 เม็ด/ซอง 20 ซอง/กล่อง<br />\r\n<strong>คำเตือน :<br />\r\nสั่งซื้อสินค้าได้ที่ :&nbsp;</strong> <a href=\"\\\" target=\"\\&quot;_blank\\&quot;\">www.herbalshopthailand.com/ยาอมมะแว้ง รสบ๊วย</a></p>','<p><strong>ชื่อผลิตภัณฑ์ : </strong>ยาอมมะแว้งรสบ๊วย<br />\r\n<strong>สารสำคัญ </strong><strong>:</strong> ผลมะแว้งผง ใบกระเพราแดง ใบตานหม่อน ใบสวาด หัวขมิ้นอ้อย สารส้ม<br />\r\n<strong>สรรพคุณ </strong><strong>: </strong>แก้ไอ ขับเสมหะ<br />\r\n<strong>รูปแบบ</strong> <strong>:</strong> ยาเม็ดอม<br />\r\n<strong>วิธีใช้ </strong><strong>:</strong> อมครั้งละ 3-5 เม็ด เมื่อมีอาการไอ<br />\r\n<strong>ขนาดบรรจุ : </strong>20 เม็ด/ซอง 20 ซอง/กล่อง<br />\r\n<strong>คำเตือน :<br />\r\nสั่งซื้อสินค้าได้ที่ :&nbsp;</strong> <a href=\"\\\" target=\"\\&quot;_blank\\&quot;\">www.herbalshopthailand.com/ยาอมมะแว้ง รสบ๊วย</a></p>',NULL,'201709270040435.jpg','2017-11-01','2017-09-27 00:40:43','2018-01-10 01:45:43',NULL,'',0,'ยาอมแก้ไอมะแว้ง-รสบ๊วย',1200,1,1),
	(11,'herblist','Solanum trilobatum','Solanum trilobatum','','','<p><span style=\"font-size:14px\"><span style=\"font-family:tahoma,geneva,sans-serif\"><strong>Govindan, S., S. Viswanathan, V. Vijayasekaran and R. Alagappan.&nbsp;1999.&nbsp;A pilot study on the clinical efficacy of&nbsp;<em>Solanum xanthocarpum&nbsp;</em>and&nbsp;<em>Solanum trilobatum&nbsp;</em>in bronchial asthma,</strong>&nbsp;<strong>Journal of Ethnopharmacology 66: 205-210.</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:tahoma,geneva,sans-serif\"><strong>Abstract;&nbsp;</strong><em>Solanum xanthocarpum&nbsp;</em>and&nbsp;<em>Solanum trilobatum&nbsp;</em>are widely used to treat respiratory diseases in southern Indian traditional medicine (Siddha). A pilot study was undertaken to investigate the clinical efficacy and safety of a single dose of the above herbs in mild to moderate bronchial asthma. The respiratory functions (FVC, FEV1, PEFR and FEF25&ndash;75%) were assessed by using a spirometer prior to and 2 h after oral administration of 300 mg powder of whole plant of either&nbsp;<em>S</em>.&nbsp;<em>xanthocarpum&nbsp;</em>or&nbsp;<em>S</em>.&nbsp;<em>trilobatum</em>. Standard bronchodilator drugs, salbutamol (4 mg) and deriphylline (200 mg) were used for comparison. Treatment with either&nbsp;<em>S</em>.&nbsp;<em>xanthocarpum&nbsp;</em>or&nbsp;<em>S</em>.&nbsp;<em>trilobatum&nbsp;</em>significantly improved the various parameters of pulmonary function in asthmatic subjects. However, the effect was less when compared to that of deriphylline or salbutamol. No untoward effects were reported during the study. The results of the present study confirm the traditional claim for the usefulness of these herbs in bronchial asthma. More detailed studies are required to investigate the mechanism of action and therapeutic utility of&nbsp;<em>S</em>.&nbsp;<em>xanthocarpum&nbsp;</em>and&nbsp;<em>S</em>.&nbsp;<em>trilobatum</em>.</span></span></p>','<p><span style=\"font-size:14px\"><span style=\"font-family:tahoma,geneva,sans-serif\"><strong>Govindan, S., S. Viswanathan, V. Vijayasekaran and R. Alagappan.&nbsp;1999.&nbsp;A pilot study on the clinical efficacy of&nbsp;<em>Solanum xanthocarpum&nbsp;</em>and&nbsp;<em>Solanum trilobatum&nbsp;</em>in bronchial asthma,</strong>&nbsp;<strong>Journal of Ethnopharmacology 66: 205-210.</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:tahoma,geneva,sans-serif\"><strong>Abstract;&nbsp;</strong><em>Solanum xanthocarpum&nbsp;</em>and&nbsp;<em>Solanum trilobatum&nbsp;</em>are widely used to treat respiratory diseases in southern Indian traditional medicine (Siddha). A pilot study was undertaken to investigate the clinical efficacy and safety of a single dose of the above herbs in mild to moderate bronchial asthma. The respiratory functions (FVC, FEV1, PEFR and FEF25&ndash;75%) were assessed by using a spirometer prior to and 2 h after oral administration of 300 mg powder of whole plant of either&nbsp;<em>S</em>.&nbsp;<em>xanthocarpum&nbsp;</em>or&nbsp;<em>S</em>.&nbsp;<em>trilobatum</em>. Standard bronchodilator drugs, salbutamol (4 mg) and deriphylline (200 mg) were used for comparison. Treatment with either&nbsp;<em>S</em>.&nbsp;<em>xanthocarpum&nbsp;</em>or&nbsp;<em>S</em>.&nbsp;<em>trilobatum&nbsp;</em>significantly improved the various parameters of pulmonary function in asthmatic subjects. However, the effect was less when compared to that of deriphylline or salbutamol. No untoward effects were reported during the study. The results of the present study confirm the traditional claim for the usefulness of these herbs in bronchial asthma. More detailed studies are required to investigate the mechanism of action and therapeutic utility of&nbsp;<em>S</em>.&nbsp;<em>xanthocarpum&nbsp;</em>and&nbsp;<em>S</em>.&nbsp;<em>trilobatum</em>.</span></span></p>',NULL,'201709272328502.jpg','2017-09-27','2017-09-27 23:28:50','2017-10-23 17:11:27',NULL,'',0,'Solanum-trilobatum',1200,1,0),
	(12,'herblist','Andrographis paniculata','Andrographis paniculata','','','<p><span style=\"color:#696969\"><span style=\"font-size:14px\"><span style=\"font-family:tahoma,geneva,sans-serif\"><strong>BACKGROUND:</strong>&nbsp;<em>Andrographis paniculata</em>&nbsp;is an herbal mixture used to treat inflammatory diseases. An extract of the herb, HMPL-004, inhibits TNF-<em>&alpha;</em>&nbsp;and IL-1<em>&beta;</em>, and prevents colitis in animal models.</span></span></span></p>\r\n\r\n<p><span style=\"color:#696969\"><span style=\"font-size:14px\"><span style=\"font-family:tahoma,geneva,sans-serif\"><strong>AIM:</strong>&nbsp;To determine the efficacy and safety of HMPL-004 in patients with mild-to-moderate ulcerative colitis.</span></span></span></p>\r\n\r\n<p><span style=\"color:#696969\"><span style=\"font-size:14px\"><span style=\"font-family:tahoma,geneva,sans-serif\"><strong>METHODS:</strong>&nbsp;A randomised, double-blind, multicentre, 8-week parallel group study was conducted using HMPL-004 1200 mg/day compared with 4500 mg/day of slow release mesalazine (mesalamine) granules in patients with mild-to-moderately active ulcerative colitis. Disease activity was assessed at baseline and every 2 weeks for clinical response, and at baseline and 8 weeks by colonoscopy.</span></span></span></p>\r\n\r\n<p><span style=\"color:#696969\"><span style=\"font-size:14px\"><span style=\"font-family:tahoma,geneva,sans-serif\"><strong>RESULTS:</strong>&nbsp;One hundred and twenty patients at five centres in China were randomised and dosed. Clinical remission and response were seen in 21% and 76% of HMPL-004-treated patients, and 16% and 82% of mesalazine-treated patients. By colonoscopy, remission and response were seen in 28% and 74% of HMPL-004-treated patients and 24% and 71% of mesalazine-treated patients, respectively. There was no significant difference between the two treatment groups.</span></span></span></p>\r\n\r\n<p><span style=\"color:#696969\"><span style=\"font-size:14px\"><span style=\"font-family:tahoma,geneva,sans-serif\"><strong>CONCLUSION:</strong>&nbsp;HMPL-004 may be an efficacious alternative to mesalazine in ulcerative colitis.</span></span></span></p>','<p><span style=\"color:#696969\"><span style=\"font-size:14px\"><span style=\"font-family:tahoma,geneva,sans-serif\"><strong>BACKGROUND:</strong>&nbsp;<em>Andrographis paniculata</em>&nbsp;is an herbal mixture used to treat inflammatory diseases. An extract of the herb, HMPL-004, inhibits TNF-<em>&alpha;</em>&nbsp;and IL-1<em>&beta;</em>, and prevents colitis in animal models.</span></span></span></p>\r\n\r\n<p><span style=\"color:#696969\"><span style=\"font-size:14px\"><span style=\"font-family:tahoma,geneva,sans-serif\"><strong>AIM:</strong>&nbsp;To determine the efficacy and safety of HMPL-004 in patients with mild-to-moderate ulcerative colitis.</span></span></span></p>\r\n\r\n<p><span style=\"color:#696969\"><span style=\"font-size:14px\"><span style=\"font-family:tahoma,geneva,sans-serif\"><strong>METHODS:</strong>&nbsp;A randomised, double-blind, multicentre, 8-week parallel group study was conducted using HMPL-004 1200 mg/day compared with 4500 mg/day of slow release mesalazine (mesalamine) granules in patients with mild-to-moderately active ulcerative colitis. Disease activity was assessed at baseline and every 2 weeks for clinical response, and at baseline and 8 weeks by colonoscopy.</span></span></span></p>\r\n\r\n<p><span style=\"color:#696969\"><span style=\"font-size:14px\"><span style=\"font-family:tahoma,geneva,sans-serif\"><strong>RESULTS:</strong>&nbsp;One hundred and twenty patients at five centres in China were randomised and dosed. Clinical remission and response were seen in 21% and 76% of HMPL-004-treated patients, and 16% and 82% of mesalazine-treated patients. By colonoscopy, remission and response were seen in 28% and 74% of HMPL-004-treated patients and 24% and 71% of mesalazine-treated patients, respectively. There was no significant difference between the two treatment groups.</span></span></span></p>\r\n\r\n<p><span style=\"color:#696969\"><span style=\"font-size:14px\"><span style=\"font-family:tahoma,geneva,sans-serif\"><strong>CONCLUSION:</strong>&nbsp;HMPL-004 may be an efficacious alternative to mesalazine in ulcerative colitis.</span></span></span></p>',NULL,'201709272330274.jpg','2017-09-27','2017-09-27 23:30:27','2017-10-24 01:46:08',NULL,'',0,'Andrographis-paniculata',1200,1,0),
	(13,'herblist','Aloe vera','Aloe vera','','','<p><strong>Lloyd, E. C., B. C. Rodgers, M. Michener and&nbsp;M. S. Williams. 2012.&nbsp;Outpatient burns: prevention and care.&nbsp;Am Fam Physician. 185, 1: 25-32.</strong></p>\r\n\r\n<p><strong>Abstract:&nbsp;</strong>Most burn injuries can be managed on an outpatient basis by primary care physicians. Prevention efforts can significantly lower the incidence of burns, especially in children. Burns should be managed in the same manner as any other trauma, including a primary and secondary survey. Superficial burns can be treated with topical application of lotions, honey,&nbsp;aloe vera, or antibiotic ointment. Partial-thickness burns should be treated with a topical antimicrobial agent or an absorptive occlusive dressing to help reduce pain, promote healing, and prevent wound desiccation. Topical silver sulfadiazine is the standard treatment; however, newer occlusive dressings can provide faster healing and are often more cost-effective. Physicians must reevaluate patients frequently after a burn injury and be aware of the indications for referral to a burn specialist.</p>','<p><strong>Lloyd, E. C., B. C. Rodgers, M. Michener and&nbsp;M. S. Williams. 2012.&nbsp;Outpatient burns: prevention and care.&nbsp;Am Fam Physician. 185, 1: 25-32.</strong></p>\r\n\r\n<p><strong>Abstract:&nbsp;</strong>Most burn injuries can be managed on an outpatient basis by primary care physicians. Prevention efforts can significantly lower the incidence of burns, especially in children. Burns should be managed in the same manner as any other trauma, including a primary and secondary survey. Superficial burns can be treated with topical application of lotions, honey,&nbsp;aloe vera, or antibiotic ointment. Partial-thickness burns should be treated with a topical antimicrobial agent or an absorptive occlusive dressing to help reduce pain, promote healing, and prevent wound desiccation. Topical silver sulfadiazine is the standard treatment; however, newer occlusive dressings can provide faster healing and are often more cost-effective. Physicians must reevaluate patients frequently after a burn injury and be aware of the indications for referral to a burn specialist.</p>',NULL,'201709272332332.jpg','2017-09-27','2017-09-27 23:32:33','2017-10-24 01:46:21',NULL,'',0,'Aloe-vera',1200,1,0),
	(14,'herblist','Phyllanthus emblica','Phyllanthus emblica','','','<p><strong>Draelos, Z. D., M. Yatskayer, P. Bhushan, S. Pillai and C.&nbsp;Oresajo. 2010.&nbsp;Evaluation of a kojic acid, emblica extract, and glycolic acid formulation compared with hydroquinone 4% for skin lightening.&nbsp;Cutis. 86, 3: 153-158.</strong></p>\r\n\r\n<p><strong>Abstract:</strong>&nbsp;Hydroquinone has been the standard prescription agent for skin lightening; however, its use recently has become controversial. Hydroquinone is banned in Europe and parts of Asia because of potential long-term consequences, including carcinogenesis when orally consumed. These concerns have stimulated research to develop alternative skin lightening agents with efficacy comparable to hydroquinone but with a better safety profile. This double-blind study examined the skin lightening ability of a topical formulation containing kojic acid, emblica extract, and glycolic acid compared with prescription generic hydroquinone cream 4%. Eighty multiethnic participants with mild to moderate facial dyschromia were randomly assigned to use the study product or hydroquinone 4% twice daily for 12 weeks to evaluate product efficacy, tolerability, and safety using investigator assessment, participant assessment, and dermospectrophotometry. Study results demonstrated efficacy parity between the study product and hydroquinone 4%. Thus this novel skin lightening preparation is an alternative to hydroquinone 4% for participants with mild to moderate facial dyschromia.</p>','<p><strong>Draelos, Z. D., M. Yatskayer, P. Bhushan, S. Pillai and C.&nbsp;Oresajo. 2010.&nbsp;Evaluation of a kojic acid, emblica extract, and glycolic acid formulation compared with hydroquinone 4% for skin lightening.&nbsp;Cutis. 86, 3: 153-158.</strong></p>\r\n\r\n<p><strong>Abstract:</strong>&nbsp;Hydroquinone has been the standard prescription agent for skin lightening; however, its use recently has become controversial. Hydroquinone is banned in Europe and parts of Asia because of potential long-term consequences, including carcinogenesis when orally consumed. These concerns have stimulated research to develop alternative skin lightening agents with efficacy comparable to hydroquinone but with a better safety profile. This double-blind study examined the skin lightening ability of a topical formulation containing kojic acid, emblica extract, and glycolic acid compared with prescription generic hydroquinone cream 4%. Eighty multiethnic participants with mild to moderate facial dyschromia were randomly assigned to use the study product or hydroquinone 4% twice daily for 12 weeks to evaluate product efficacy, tolerability, and safety using investigator assessment, participant assessment, and dermospectrophotometry. Study results demonstrated efficacy parity between the study product and hydroquinone 4%. Thus this novel skin lightening preparation is an alternative to hydroquinone 4% for participants with mild to moderate facial dyschromia.</p>',NULL,'201709272334327.jpg','2017-09-22','2017-09-27 23:34:32','2017-10-24 01:45:51',NULL,'',0,'Phyllanthus-emblica',1200,1,0),
	(15,'product','ยาชง หญ้าหนวดแมว','','','','<p><strong>ชื่อผลิตภัณฑ์ :&nbsp;</strong>ยาเม็ด เมม-โอ-จี (ขวด)&nbsp;<br />\r\n<strong>สารสำคัญ&nbsp;</strong><strong>:</strong>&nbsp;สารสกัดใบแปะก๊วย 40 มก. ประกอบด้วย สารกิงโกฟลาโวนไกลโคไซด์ 24 % สารบิโลบาไลด์ และกิงโกไลด์ 6 %<br />\r\n<strong>สรรพคุณ&nbsp;</strong><strong>:&nbsp;</strong>บำรุงสมอง กระตุ้นการไหลเวียนของเลือด&nbsp;<br />\r\n<strong>รูปแบบ</strong>&nbsp;<strong>:</strong>&nbsp;ยาเม็ด&nbsp;<br />\r\n<strong>วิธีใช้&nbsp;</strong><strong>:</strong>&nbsp;รับประทานครั้งละ 1 เม็ด วันละ 1-2 ครั้ง หลังอาหาร หรือตามแพทย์สั่ง<br />\r\n<strong>ขนาดบรรจุ :&nbsp;</strong>ชนิดขวด 30 เม็ด/ขวด<br />\r\n<strong>คำเตือน :&nbsp;</strong>ไม่ควรใช้ในผู้ป่วยโรคความดันโลหิตสูง และโรคหัวใจ&nbsp;<br />\r\nสั่งซื้อได้ที่&nbsp;<a href=\"\\\" target=\"\\&quot;\\\\&quot;_blank\\\\&quot;\\&quot;\">www.herbalshopthailand.com/เมม-โอ-จี(ขวด)</a></p>','',NULL,'201711011139232.jpg','2017-11-01','2017-11-01 11:36:16','2018-01-10 01:47:13',NULL,'',0,'ยาชง-หญ้าหนวดแมว',1200,1,1),
	(16,'product','ยาเม็ด เมม-โอ-จี (ขวด)','','','','<p><strong>ชื่อผลิตภัณฑ์ :&nbsp;</strong>ยาเม็ด เมม-โอ-จี (ขวด)&nbsp;<br />\r\n<strong>สารสำคัญ&nbsp;</strong><strong>:</strong>&nbsp;สารสกัดใบแปะก๊วย 40 มก. ประกอบด้วย สารกิงโกฟลาโวนไกลโคไซด์ 24 % สารบิโลบาไลด์ และกิงโกไลด์ 6 %<br />\r\n<strong>สรรพคุณ&nbsp;</strong><strong>:&nbsp;</strong>บำรุงสมอง กระตุ้นการไหลเวียนของเลือด&nbsp;<br />\r\n<strong>รูปแบบ</strong>&nbsp;<strong>:</strong>&nbsp;ยาเม็ด&nbsp;<br />\r\n<strong>วิธีใช้&nbsp;</strong><strong>:</strong>&nbsp;รับประทานครั้งละ 1 เม็ด วันละ 1-2 ครั้ง หลังอาหาร หรือตามแพทย์สั่ง<br />\r\n<strong>ขนาดบรรจุ :&nbsp;</strong>ชนิดขวด 30 เม็ด/ขวด<br />\r\n<strong>คำเตือน :&nbsp;</strong>ไม่ควรใช้ในผู้ป่วยโรคความดันโลหิตสูง และโรคหัวใจ&nbsp;<br />\r\nสั่งซื้อได้ที่&nbsp;<a href=\"\\\" target=\"\\&quot;_blank\\&quot;\">www.herbalshopthailand.com/เมม-โอ-จี(ขวด)</a></p>','',NULL,'201711011141332.jpg','2017-11-01','2017-11-01 11:41:33','2018-01-10 01:45:22',NULL,'',0,'ยาเม็ด-เมม-โอ-จี--ขวด-',1200,1,2),
	(17,'product','ยาเม็ด เมม-โอ-จี (กล่อง)','','','','<p><strong>ชื่อผลิตภัณฑ์ :&nbsp;</strong>ยาเม็ด เมม-โอ-จี (กล่อง)&nbsp;<br />\r\n<strong>สารสำคัญ&nbsp;</strong><strong>:</strong>&nbsp;สารสกัดใบแปะก๊วย 40 มก. ประกอบด้วย สารกิงโกฟลาโวนไกลโคไซด์ 24 % สารบิโลบาไลด์ และกิงโกไลด์ 6 %<br />\r\n<strong>สรรพคุณ&nbsp;</strong><strong>:&nbsp;</strong>บำรุงสมอง กระตุ้นการไหลเวียนของเลือด&nbsp;<br />\r\n<strong>รูปแบบ</strong>&nbsp;<strong>:</strong>&nbsp;ยาเม็ด&nbsp;<br />\r\n<strong>วิธีใช้&nbsp;</strong><strong>:</strong>&nbsp;รับประทานครั้งละ 1 เม็ด วันละ 1-2 ครั้ง หลังอาหาร หรือตามแพทย์สั่ง<br />\r\n<strong>ขนาดบรรจุ :&nbsp;</strong>ชนิดแผง 10&times;10 เม็ด/กล่อง<br />\r\n<strong>คำเตือน :&nbsp;</strong>ไม่ควรใช้ในผู้ป่วยโรคความดันโลหิตสูง และโรคหัวใจ&nbsp;<br />\r\nสั่งซื้อได้ที่&nbsp;<a href=\"\\\" target=\"\\&quot;\\\\&quot;_blank\\\\&quot;\\&quot;\">www.herbalshopthailand.com/ยาเม็ดเมม-โอ-จี</a></p>','',NULL,'201711011145480.jpg','2017-11-01','2017-11-01 11:43:33','2018-01-10 01:45:28',NULL,'',0,'ยาเม็ด-เมม-โอ-จี--กล่อง-',1200,1,1),
	(18,'product','ยาเม็ด ซิมิราฟ','','','','<p><strong>ชื่อผลิตภัณฑ์ :&nbsp;</strong>ยาเม็ด ซิมิราฟ&nbsp;<br />\r\n<strong>สารสำคัญ&nbsp;</strong><strong>:</strong>&nbsp;<br />\r\n1.Actien และ Cimifugoside ไม่ต่ำกว่า 25 %&nbsp;<br />\r\n2. Formononetin<br />\r\n3. Isoferulic acid , salisylic acid<br />\r\n<strong>สรรพคุณ&nbsp;</strong><strong>:&nbsp;</strong><br />\r\n1. ลดการหลั่งฮอร์โมน LH ที่ทำให้เกิดอาการร้อนวูบวาบ<br />\r\n2. ลดอาการช่องคลอดแห้ง&nbsp;<br />\r\n<strong>รูปแบบ</strong>&nbsp;<strong>:</strong>&nbsp;ยาเม็ด&nbsp;<br />\r\n<strong>วิธีใช้&nbsp;</strong><strong>:</strong>&nbsp;รับประทานครั้งละ 1 เม็ด วันละ 2 ครั้ง หลังอาหารเช้า-เย็น&nbsp;<br />\r\n<strong>องค์ประกอบทางเคมี</strong>&nbsp;:&nbsp;<br />\r\n1. Triterpene glycosides<br />\r\n2. A weak Isoflavone<br />\r\n3. Organic acid<br />\r\n<strong>ขนาดบรรจุ :&nbsp;</strong>10*10 เม็ด/กล่อง<br />\r\n<strong>คำเตือน :&nbsp;</strong>อาจเป็นพิษต่อตับเมื่อรับประทานติดต่อกันนาน ๆ และผู้ป่วยที่เป็นโรคไตไม่ควรใช้&nbsp;<br />\r\nสั่งซื้อได้ที่&nbsp;<a href=\"\\\" target=\"\\&quot;\\\\&quot;_blank\\\\&quot;\\&quot;\">www.herbalshopthailand.com/ยาเม็ดซิมิราฟ</a></p>','',NULL,'201711011145375.jpg','2017-11-01','2017-11-01 11:44:06','2018-01-10 01:45:33',NULL,'',0,'ยาเม็ด-ซิมิราฟ',1200,1,2),
	(19,'Home-Banner','นวัตกรรมสมุนไพรไทย ระดับมาตรฐานสากล','นวัตกรรมสมุนไพรไทย ระดับมาตรฐานสากล','','','<p>โดยบริษัทร่วมทุนองค์การเภสัชกรรมซึ่งเป็นรัฐวิสาหกิจในการกำกับดูแลของกระทรวงสาธารณสุข โดยทำการวิจัยและพัฒนาสมุนไพรเพื่อใช้เป็นยาและผลิตภัณฑ์เสริมอาหารอย่างต่อเนื่อง</p>','<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s</p>',NULL,'201801090045073.jpg','0000-00-00','2018-01-08 23:38:30','2018-01-09 00:45:07',NULL,'publish',0,'http://www.google.com',1200,1,0),
	(20,'Home-Banner','Phyto Gold','Phyto Gold','','','<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s</p>','<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s</p>',NULL,'201801090047444.jpg','0000-00-00','2018-01-08 23:43:01','2018-01-09 00:47:44',NULL,'publish',0,'http://www.google.com',1200,1,0),
	(22,'Home-Banner','Phytocare','Phytocare','','','<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s</p>','<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s</p>',NULL,'201801090048210.jpg','0000-00-00','2018-01-09 00:00:35','2018-01-09 00:48:22',NULL,'publish',0,'http://www.google.com',1200,1,0);

/*!40000 ALTER TABLE `bt_pages` ENABLE KEYS */;
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
	(3,'2560','09',954,1200),
	(4,'2560','10',525,1200),
	(5,'2560','11',34,1200),
	(6,'2560','12',7,1200),
	(7,'2561','01',105,1200);

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
	(25,'admin','25255a1c32d44845ecbfdafecf8535b3','2017-09-18 02:33:54','::1','true'),
	(26,'vanlop','2d1413e78399d9eaaa9cbae7b387be43','2017-09-23 13:22:27','::1','true'),
	(27,'vanlop','2d1413e78399d9eaaa9cbae7b387be43','2017-09-24 22:40:42','::1','true'),
	(28,'vanlop','2d1413e78399d9eaaa9cbae7b387be43','2017-09-26 23:20:42','::1','true'),
	(29,'vanlop','2d1413e78399d9eaaa9cbae7b387be43','2017-09-26 23:27:06','::1','true'),
	(30,'vanlop','Logout','2017-09-27 00:10:52','::1','true'),
	(31,'vanlop','2d1413e78399d9eaaa9cbae7b387be43','2017-09-27 00:10:53','::1','true'),
	(32,'vanlop','Logout','2017-09-27 00:10:55','::1','true'),
	(33,'admin','25255a1c32d44845ecbfdafecf8535b3','2017-09-27 00:11:01','::1','true'),
	(34,'admin','Logout','2017-09-27 00:14:37','::1','true'),
	(35,'vanlop','2d1413e78399d9eaaa9cbae7b387be43','2017-09-27 00:14:38','::1','true'),
	(36,'vanlop','2d1413e78399d9eaaa9cbae7b387be43','2017-09-27 22:58:34','::1','true'),
	(37,'vanlop','2d1413e78399d9eaaa9cbae7b387be43','2017-09-28 02:31:31','184.22.219.20','true'),
	(38,'admin','25255a1c32d44845ecbfdafecf8535b3','2017-09-28 09:48:35','1.47.141.109','true'),
	(39,'admin','Logout','2017-09-28 09:49:18','1.47.141.109','true'),
	(40,'admin','25255a1c32d44845ecbfdafecf8535b3','2017-10-02 09:40:13','125.26.5.39','true'),
	(41,'admin','25255a1c32d44845ecbfdafecf8535b3','2017-10-02 13:16:26','125.26.5.39','true'),
	(42,'admin','25255a1c32d44845ecbfdafecf8535b3','2017-10-02 16:10:07','125.26.5.39','true'),
	(43,'admin','25255a1c32d44845ecbfdafecf8535b3','2017-10-04 15:41:53','182.52.110.228','true'),
	(44,'admin','25255a1c32d44845ecbfdafecf8535b3','2017-10-05 09:46:50','125.26.4.27','true'),
	(45,'admin','25255a1c32d44845ecbfdafecf8535b3','2017-10-05 13:18:21','125.26.4.27','true'),
	(46,'admin','25255a1c32d44845ecbfdafecf8535b3','2017-10-06 00:13:15','171.96.190.230','true'),
	(47,'admin','25255a1c32d44845ecbfdafecf8535b3','2017-10-06 09:55:48','125.26.5.177','true'),
	(48,'admin','25255a1c32d44845ecbfdafecf8535b3','2017-10-17 07:40:13','182.52.111.11','true'),
	(49,'vanlop','2d1413e78399d9eaaa9cbae7b387be43','2017-10-21 14:54:31','49.229.208.201','true'),
	(50,'vanlop','2d1413e78399d9eaaa9cbae7b387be43','2017-10-23 14:06:23','182.232.184.209','true'),
	(51,'vanlop','2d1413e78399d9eaaa9cbae7b387be43','2017-10-23 16:49:31','::1','true'),
	(52,'vanlop','2d1413e78399d9eaaa9cbae7b387be43','2017-10-23 23:00:59','::1','true'),
	(53,'vanlop','2d1413e78399d9eaaa9cbae7b387be43','2017-10-24 01:45:22','::1','true'),
	(54,'admin','f876efca185654bfdb7d1d1553635eb0','2017-10-30 16:33:09','171.96.191.201','false'),
	(55,'admin','25255a1c32d44845ecbfdafecf8535b3','2017-10-30 16:33:15','171.96.191.201','true'),
	(56,'admin','9bc4035a5fafd48599bfc71fba025b40','2017-10-30 16:33:59','58.137.121.126','false'),
	(57,'vanlop','2d1413e78399d9eaaa9cbae7b387be43','2017-10-30 23:55:47','184.22.212.161','true'),
	(58,'admin','9bc4035a5fafd48599bfc71fba025b40','2017-11-01 11:32:28','171.96.191.8','false'),
	(59,'admin','25255a1c32d44845ecbfdafecf8535b3','2017-11-01 11:32:39','171.96.191.8','true'),
	(60,'admin','25255a1c32d44845ecbfdafecf8535b3','2017-11-01 11:42:38','171.96.191.8','true'),
	(61,'vanlop','2d1413e78399d9eaaa9cbae7b387be43','2018-01-08 22:31:40','::1','true'),
	(62,'vanlop','2d1413e78399d9eaaa9cbae7b387be43','2018-01-09 23:32:34','::1','true'),
	(63,'vanlop','2d1413e78399d9eaaa9cbae7b387be43','2018-01-11 01:39:04','::1','true');

/*!40000 ALTER TABLE `bt_userlog` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table btview_category
# ------------------------------------------------------------

DROP VIEW IF EXISTS `btview_category`;

CREATE TABLE `btview_category` (
   `category_id` INT(20) UNSIGNED NOT NULL DEFAULT '0',
   `category_name_th` VARCHAR(150) NULL DEFAULT NULL,
   `category_name_en` VARCHAR(150) NULL DEFAULT NULL,
   `category_type` VARCHAR(100) NULL DEFAULT NULL,
   `category_status` ENUM('publish','unpublish') NULL DEFAULT NULL,
   `category_datecreate` DATETIME NULL DEFAULT NULL,
   `firstnameTH` VARCHAR(200) NULL DEFAULT NULL,
   `lastnameTH` VARCHAR(200) NULL DEFAULT NULL,
   `title_nameTH` VARCHAR(50) NULL DEFAULT NULL
) ENGINE=MyISAM;



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



# Dump of table btview_pages
# ------------------------------------------------------------

DROP VIEW IF EXISTS `btview_pages`;

CREATE TABLE `btview_pages` (
   `firstnameTH` VARCHAR(200) NULL DEFAULT NULL,
   `lastnameTH` VARCHAR(200) NULL DEFAULT NULL,
   `officeNameTH` VARCHAR(200) NULL DEFAULT NULL,
   `officeNameEN` VARCHAR(200) NULL DEFAULT NULL,
   `officeShortname` VARCHAR(30) NULL DEFAULT NULL,
   `title_nameTH` VARCHAR(50) NULL DEFAULT NULL,
   `pages_id` INT(20) NOT NULL DEFAULT '0',
   `pages_categories` VARCHAR(100) NULL DEFAULT NULL,
   `pages_subject_th` VARCHAR(200) NULL DEFAULT NULL,
   `pages_subject_en` VARCHAR(200) NULL DEFAULT NULL,
   `pages_title_th` TEXT NULL DEFAULT NULL,
   `pages_title_en` TEXT NULL DEFAULT NULL,
   `pages_content_th` TEXT NULL DEFAULT NULL,
   `pages_content_en` TEXT NULL DEFAULT NULL,
   `pages_photo` VARCHAR(200) NULL DEFAULT NULL,
   `pages_photoslide` VARCHAR(200) NULL DEFAULT NULL,
   `pages_date` DATE NULL DEFAULT NULL,
   `pages_createdate` DATETIME NULL DEFAULT NULL,
   `pages_lastupdate` DATETIME NULL DEFAULT NULL,
   `pages_view` INT(20) NULL DEFAULT NULL,
   `pages_slide` ENUM('publish','unpublish') NULL DEFAULT 'unpublish',
   `officeID` INT(20) NOT NULL,
   `userID` INT(20) NOT NULL,
   `pages_order` INT(20) NULL DEFAULT NULL,
   `pages_link` VARCHAR(200) NULL DEFAULT NULL,
   `category_id` INT(11) NULL DEFAULT '0',
   `category_name_th` VARCHAR(150) NULL DEFAULT NULL,
   `category_name_en` VARCHAR(150) NULL DEFAULT NULL
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


# Replace placeholder table for btview_category with correct view syntax
# ------------------------------------------------------------

DROP TABLE `btview_category`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `btview_category`
AS SELECT
   `bt_category`.`category_id` AS `category_id`,
   `bt_category`.`category_name_th` AS `category_name_th`,
   `bt_category`.`category_name_en` AS `category_name_en`,
   `bt_category`.`category_type` AS `category_type`,
   `bt_category`.`category_status` AS `category_status`,
   `bt_category`.`category_datecreate` AS `category_datecreate`,
   `bt_user`.`firstnameTH` AS `firstnameTH`,
   `bt_user`.`lastnameTH` AS `lastnameTH`,
   `bt_title`.`title_nameTH` AS `title_nameTH`
FROM ((`bt_category` join `bt_user` on((`bt_category`.`userID` = `bt_user`.`id`))) join `bt_title` on((`bt_title`.`title_id` = `bt_user`.`title_id`)));


# Replace placeholder table for btview_pages with correct view syntax
# ------------------------------------------------------------

DROP TABLE `btview_pages`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `btview_pages`
AS SELECT
   `bt_user`.`firstnameTH` AS `firstnameTH`,
   `bt_user`.`lastnameTH` AS `lastnameTH`,
   `bt_office`.`officeNameTH` AS `officeNameTH`,
   `bt_office`.`officeNameEN` AS `officeNameEN`,
   `bt_office`.`officeShortname` AS `officeShortname`,
   `bt_title`.`title_nameTH` AS `title_nameTH`,
   `bt_pages`.`pages_id` AS `pages_id`,
   `bt_pages`.`pages_categories` AS `pages_categories`,
   `bt_pages`.`pages_subject_th` AS `pages_subject_th`,
   `bt_pages`.`pages_subject_en` AS `pages_subject_en`,
   `bt_pages`.`pages_title_th` AS `pages_title_th`,
   `bt_pages`.`pages_title_en` AS `pages_title_en`,
   `bt_pages`.`pages_content_th` AS `pages_content_th`,
   `bt_pages`.`pages_content_en` AS `pages_content_en`,
   `bt_pages`.`pages_photo` AS `pages_photo`,
   `bt_pages`.`pages_photoslide` AS `pages_photoslide`,
   `bt_pages`.`pages_date` AS `pages_date`,
   `bt_pages`.`pages_createdate` AS `pages_createdate`,
   `bt_pages`.`pages_lastupdate` AS `pages_lastupdate`,
   `bt_pages`.`pages_view` AS `pages_view`,
   `bt_pages`.`pages_slide` AS `pages_slide`,
   `bt_pages`.`officeID` AS `officeID`,
   `bt_pages`.`userID` AS `userID`,
   `bt_pages`.`pages_order` AS `pages_order`,
   `bt_pages`.`pages_link` AS `pages_link`,
   `bt_pages`.`category_id` AS `category_id`,
   `bt_category`.`category_name_th` AS `category_name_th`,
   `bt_category`.`category_name_en` AS `category_name_en`
FROM ((((`bt_pages` join `bt_office` on((`bt_pages`.`officeID` = `bt_office`.`officeID`))) join `bt_user` on((`bt_pages`.`userID` = `bt_user`.`id`))) join `bt_title` on((`bt_title`.`title_id` = `bt_user`.`title_id`))) join `bt_category` on((`bt_pages`.`category_id` = `bt_category`.`category_id`)));


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
