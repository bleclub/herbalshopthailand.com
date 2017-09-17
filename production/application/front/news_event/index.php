<!-- Header -->

<?php
    $title = 'ข่าวสารและกิจกรรม - Herbalshop Thailand';
    $description = 'Herbalshop Thailand';
    $keywords = 'Herbalshop Thailand';

	$news_selected = "selected"; // Menu selected
    require 'template/front/header.php';
	// require 'controllers/front/home.php';
?>

<?php require 'template/front/menu.php'; ?>

<!-- Content -->

<!--Title Section  -->
<section id="title_page" class="title_page parallax-container">
        <div class="parallax"><img src="<?php echo $baseUrl; ?>/assets/front_end/images/bg_title_news.jpg"></div>
        <div class="col-md-12 text-left">
            <h1>News & Events</h1>
            <p>ข่าวสารและกิจกรรม</p>
            <!-- <a href="#" class="btn btn-large">อ่านเพิ่มเติม &nbsp;&nbsp; ></a> -->
        </div>
    </section>

    <!-- News Section  -->
    <section id="news" class="news section clearfix">

            <div id="side-navigation">
                    <div class="col-sm-12">
                        <ul class="sidenav_news">
                            <li class="ui-tabs-active">
                                <a href="#snav-content1" data-target="#snav-content1" data-toggle="tab">ข่าวสาร</a>
                            </li>
                            <li>
                                <a href="#snav-content2" data-target="#snav-content2" data-toggle="tab">กิจกรรม</a>
                            </li>
                        </ul>
                    </div>
                         <!--News section  -->
                         <div id="snav-content1">
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <img src="<?php echo $baseUrl; ?>/assets/front_end/images/news/news_img01.jpg" class="img-responsive" alt="">
                                    <div class="content">
                                        <h5>ประวัติประธานคณะกรรมการ บริษัทผลิตภัณฑ์สมุนไพรไทย</h5>
                                        <p><b>ข่าวสาร</b><br>11 July 2017</p>
                                        <p>มูลนิธิพันธกิจเรือนจำคริสเตียน โดยเปิดบ้านพระพร ช่วยเหลือผู้ด้อยโอกาส เยาวชนจากสถานพินิจ และอุปกา...</p>
                                        <p><a href="#">อ่านต่อ</a></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <img src="<?php echo $baseUrl; ?>/assets/front_end/images/news/news_img02.jpg" class="img-responsive" alt="">
                                    <div class="content">
                                        <h5>ยาน่ารู้</h5>
                                        <p><b>ข่าวสาร</b><br>11 July 2017</p>
                                        <p>คณะแพทย์ศาสตร์ มหาวิทยาลัยธรรมศาสตร์ มีการจัดการเรียนการสอน วิชา เภสัชกรรมไทยปร...</p>
                                        <p><a href="#">อ่านต่อ</a></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <img src="<?php echo $baseUrl; ?>/assets/front_end/images/news/news_img03.jpg" class="img-responsive" alt="">
                                    <div class="content">
                                        <h5>กิจกรรม CSR ประจำปี 2560</h5>
                                        <p><b>ข่าวสาร</b><br>11 July 2017</p>
                                        <p>กิจกรรม CSR ประจำปี 2560 จัดกิจกรรมและจัดเลี้ยงอาหารกลางวัน ณ สถานสงเคราะห์บ้านพักคนชราวาสนะเวศม์...</p>
                                        <p><a href="#">อ่านต่อ</a></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <img src="<?php echo $baseUrl; ?>/assets/front_end/images/news/news_img04.jpg" class="img-responsive" alt="">
                                    <div class="content">
                                        <h5>ออกร้าน งานตลาดน้ำอโยธยา</h5>
                                        <p><b>ข่าวสาร</b><br>11 July 2017</p>
                                        <p>ประชาสัมพันธ์ เรื่อง งานออกร้าน ตลาดน้ำอโธยา โดย บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด ได้เข้าร่วมกิจก...</p>
                                        <p><a href="#">อ่านต่อ</a></p>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <img src="<?php echo $baseUrl; ?>/assets/front_end/images/news/news_img05.jpg" class="img-responsive" alt="">
                                    <div class="content">
                                        <h5>ประวัติประธานคณะกรรมการ บริษัทผลิตภัณฑ์สมุนไพรไทย</h5>
                                        <p><b>ข่าวสาร</b><br>11 July 2017</p>
                                        <p>มูลนิธิพันธกิจเรือนจำคริสเตียน โดยเปิดบ้านพระพร ช่วยเหลือผู้ด้อยโอกาส เยาวชนจากสถานพินิจ และอุปกา...</p>
                                        <p><a href="#">อ่านต่อ</a></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <img src="<?php echo $baseUrl; ?>/assets/front_end/images/news/news_img06.jpg" class="img-responsive" alt="">
                                    <div class="content">
                                        <h5>ยาน่ารู้</h5>
                                        <p><b>ข่าวสาร</b><br>11 July 2017</p>
                                        <p>คณะแพทย์ศาสตร์ มหาวิทยาลัยธรรมศาสตร์ มีการจัดการเรียนการสอน วิชา เภสัชกรรมไทยปร...</p>
                                        <p><a href="#">อ่านต่อ</a></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <img src="<?php echo $baseUrl; ?>/assets/front_end/images/news/news_img07.jpg" class="img-responsive" alt="">
                                    <div class="content">
                                        <h5>กิจกรรม CSR ประจำปี 2560</h5>
                                        <p><b>ข่าวสาร</b><br>11 July 2017</p>
                                        <p>กิจกรรม CSR ประจำปี 2560 จัดกิจกรรมและจัดเลี้ยงอาหารกลางวัน ณ สถานสงเคราะห์บ้านพักคนชราวาสนะเวศม์...</p>
                                        <p><a href="#">อ่านต่อ</a></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <img src="<?php echo $baseUrl; ?>/assets/front_end/images/news/news_img08.jpg" class="img-responsive" alt="">
                                    <div class="content">
                                        <h5>ออกร้าน งานตลาดน้ำอโยธยา</h5>
                                        <p><b>ข่าวสาร</b><br>11 July 2017</p>
                                        <p>ประชาสัมพันธ์ เรื่อง งานออกร้าน ตลาดน้ำอโธยา โดย บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด ได้เข้าร่วมกิจก...</p>
                                        <p><a href="#">อ่านต่อ</a></p>
                                    </div>
                                </div>
                         </div>

                        <!-- Event section -->
                         <div id="snav-content2">

                                 <div class="col-lg-3 col-md-6 col-sm-6">
                                        <img src="<?php echo $baseUrl; ?>/assets/front_end/images/news/news_img05.jpg" class="img-responsive" alt="">
                                        <div class="content">
                                            <h5>ประวัติประธานคณะกรรมการ บริษัทผลิตภัณฑ์สมุนไพรไทย</h5>
                                            <p><b>ข่าวสาร</b><br>11 July 2017</p>
                                            <p>มูลนิธิพันธกิจเรือนจำคริสเตียน โดยเปิดบ้านพระพร ช่วยเหลือผู้ด้อยโอกาส เยาวชนจากสถานพินิจ และอุปกา...</p>
                                            <p><a href="#">อ่านต่อ</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <img src="<?php echo $baseUrl; ?>/assets/front_end/images/news/news_img06.jpg" class="img-responsive" alt="">
                                        <div class="content">
                                            <h5>ยาน่ารู้</h5>
                                            <p><b>ข่าวสาร</b><br>11 July 2017</p>
                                            <p>คณะแพทย์ศาสตร์ มหาวิทยาลัยธรรมศาสตร์ มีการจัดการเรียนการสอน วิชา เภสัชกรรมไทยปร...</p>
                                            <p><a href="#">อ่านต่อ</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <img src="<?php echo $baseUrl; ?>/assets/front_end/images/news/news_img07.jpg" class="img-responsive" alt="">
                                        <div class="content">
                                            <h5>กิจกรรม CSR ประจำปี 2560</h5>
                                            <p><b>ข่าวสาร</b><br>11 July 2017</p>
                                            <p>กิจกรรม CSR ประจำปี 2560 จัดกิจกรรมและจัดเลี้ยงอาหารกลางวัน ณ สถานสงเคราะห์บ้านพักคนชราวาสนะเวศม์...</p>
                                            <p><a href="#">อ่านต่อ</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <img src="<?php echo $baseUrl; ?>/assets/front_end/images/news/news_img08.jpg" class="img-responsive" alt="">
                                        <div class="content">
                                            <h5>ออกร้าน งานตลาดน้ำอโยธยา</h5>
                                            <p><b>ข่าวสาร</b><br>11 July 2017</p>
                                            <p>ประชาสัมพันธ์ เรื่อง งานออกร้าน ตลาดน้ำอโธยา โดย บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด ได้เข้าร่วมกิจก...</p>
                                            <p><a href="#">อ่านต่อ</a></p>
                                        </div>
                                    </div>

                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <img src="<?php echo $baseUrl; ?>/assets/front_end/images/news/news_img01.jpg" class="img-responsive" alt="">
                                    <div class="content">
                                        <h5>ประวัติประธานคณะกรรมการ บริษัทผลิตภัณฑ์สมุนไพรไทย</h5>
                                        <p><b>ข่าวสาร</b><br>11 July 2017</p>
                                        <p>มูลนิธิพันธกิจเรือนจำคริสเตียน โดยเปิดบ้านพระพร ช่วยเหลือผู้ด้อยโอกาส เยาวชนจากสถานพินิจ และอุปกา...</p>
                                        <p><a href="#">อ่านต่อ</a></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <img src="<?php echo $baseUrl; ?>/assets/front_end/images/news/news_img02.jpg" class="img-responsive" alt="">
                                    <div class="content">
                                        <h5>ยาน่ารู้</h5>
                                        <p><b>ข่าวสาร</b><br>11 July 2017</p>
                                        <p>คณะแพทย์ศาสตร์ มหาวิทยาลัยธรรมศาสตร์ มีการจัดการเรียนการสอน วิชา เภสัชกรรมไทยปร...</p>
                                        <p><a href="#">อ่านต่อ</a></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <img src="<?php echo $baseUrl; ?>/assets/front_end/images/news/news_img03.jpg" class="img-responsive" alt="">
                                    <div class="content">
                                        <h5>กิจกรรม CSR ประจำปี 2560</h5>
                                        <p><b>ข่าวสาร</b><br>11 July 2017</p>
                                        <p>กิจกรรม CSR ประจำปี 2560 จัดกิจกรรมและจัดเลี้ยงอาหารกลางวัน ณ สถานสงเคราะห์บ้านพักคนชราวาสนะเวศม์...</p>
                                        <p><a href="#">อ่านต่อ</a></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <img src="<?php echo $baseUrl; ?>/assets/front_end/images/news/news_img04.jpg" class="img-responsive" alt="">
                                    <div class="content">
                                        <h5>ออกร้าน งานตลาดน้ำอโยธยา</h5>
                                        <p><b>ข่าวสาร</b><br>11 July 2017</p>
                                        <p>ประชาสัมพันธ์ เรื่อง งานออกร้าน ตลาดน้ำอโธยา โดย บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด ได้เข้าร่วมกิจก...</p>
                                        <p><a href="#">อ่านต่อ</a></p>
                                    </div>
                                </div>
                         </div>
            </div>
        
    </section>

<!-- Footer -->
<?php 
    require 'template/front/footer.php';
?>    

<!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="<?php echo $baseUrl; ?>/assets/front_end/js/jquery.min.js"><\/script>')
    </script>
    <script src="<?php echo $baseUrl; ?>/assets/front_end/js/bootstrap.min.js"></script>
    <script src="<?php echo $baseUrl; ?>/assets/front_end/js/jquery.flexslider-min.js"></script>
    <script src="<?php echo $baseUrl; ?>/assets/front_end/js/jquery.fancybox.pack.js"></script>
    <script src="<?php echo $baseUrl; ?>/assets/front_end/js/jquery.waypoints.min.js"></script>
    <!-- <script src="js/retina.min.js"></script> -->
    <script src="<?php echo $baseUrl; ?>/assets/front_end/js/modernizr.js"></script>
    <script src="<?php echo $baseUrl; ?>/assets/front_end/js/materialize.js"></script>
    <script src="<?php echo $baseUrl; ?>/assets/front_end/js/main.js"></script>

    <script type="text/javascript" src="<?php echo $baseUrl; ?>/assets/front_end/js/plugins.js"></script> 
    <script>
          
          $(function() {
              $( "#side-navigation" ).tabs({ show: { effect: "fade", duration: 400 } });
          });
     </script> 

</body>
</html>