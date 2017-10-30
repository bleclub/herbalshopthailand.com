<!-- Header -->

<?php
    $title = 'ข่าวสารและกิจกรรม - Herbalshop Thailand';
    $description = 'Herbalshop Thailand';
    $keywords = 'Herbalshop Thailand';

	$news_selected = "class='selected'"; // Menu selected
    require 'template/front/header.php';
	// require 'controllers/front/home.php';
?>

<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/assets/front_end/css/normalize.css" />
<!-- <link rel="stylesheet" type="text/css" href="<?php //echo $baseUrl; ?>/assets/front_end/css/demo.css" /> -->
<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/assets/front_end/css/set1.css" />

<?php require 'template/front/menu.php'; ?>

<!-- Content -->

<!--Title Section  -->
 <section id="title_page" class="title_page parallax-container">
        <div class="parallax"><img src="<?php echo $baseUrl; ?>/assets/front_end/images/bg_title_news.jpg"></div>
                <div class="col-sm-12 text-left">
                    <h1>News & Events</h1>
                    <p>ข่าวสารและกิจกรรม</p>
                    <!-- <a href="#" class="btn btn-large">อ่านเพิ่มเติม &nbsp;&nbsp; ></a> -->
                    <ol class="breadcrumb">
                        <li><a href="<?php echo $baseUrl.'/'.$lang; ?>">Home</a></li>
                        <li class="active">News and Event</a></li>
                    </ol>
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
                            <div id="result_news"></div>
                            <div class="col-sm-12 text-center">
                                <button class="load_more bt" id="load_more_button" class="text-center">เพิ่มเติม</button>
                                <div class="animation_image" style="display:none;"><img src="<?php echo $baseUrl."/assets/front_end/images/fancybox_loading.gif";?>"> Loading...</div>
                            </div>
                         <?php /*
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
                                */ ?>
                         </div>

                        <!-- Event section -->
                         <div id="snav-content2">
                         <div id="result_event"></div>
                            <div class="col-sm-12 text-center">
                                <button class="load_more_event bt" id="load_more_button" class="text-center">เพิ่มเติม</button>
                                <div class="animation_image" style="display:none;"><img src="<?php echo $baseUrl."/assets/front_end/images/fancybox_loading.gif";?>"> Loading...</div>
                            </div>
                         <?php /*
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
                                */ ?>
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
     <script type="text/javascript">
            $(document).ready(function() {
                var track_click = 0; //track user click on "load more" button, righ now it is 0 click
                var pagetitle = 'news';
                var baseUrl = '<?php echo $baseUrl; ?>';
                var lang_news = '<?php echo $lang; ?>';
                var total_pages = 8;
                $('#result_news').load("<?php echo $baseUrl; ?>/ajax/fetch_news.php", {'page':track_click, 'pagetitle':pagetitle, 'baseUrl':baseUrl, 'lang_news': lang_news}, function() {track_click++;}); //initial data to load

                $(".load_more").click(function (e) { //user clicks on button
                
                    $(this).hide(); //hide load more button on click
                    $('.animation_image').show(); //show loading image

                    if(track_click <= total_pages) //make sure user clicks are still less than total pages
                    {
                        //post page number and load returned data into result element
                        $.post('<?php echo $baseUrl; ?>/ajax/fetch_news.php',{'page':track_click, 'pagetitle':pagetitle, 'baseUrl':baseUrl, 'lang_news': lang_news}, function(data) {
                        
                            $(".load_more").show(); //bring back load more button
                            
                            $("#result_news").append(data); //append data received from server
                            
                            //scroll page to button element
                            $("html, body").animate({scrollTop: $(".load_more").offset().top-500}, 1000);
                            
                            //hide loading image
                            $('.animation_image').hide(); //hide loading image once data is received
                
                            track_click++; //user click increment on load button
                        
                        }).fail(function(xhr, ajaxOptions, thrownError) { 
                            alert(thrownError); //alert any HTTP error
                            $(".load_more").show(); //bring back load more button
                            $('.animation_image').hide(); //hide loading image once data is received
                        });
                        
                        
                        if(track_click >= total_pages-1)
                        {
                            //reached end of the page yet? disable load button
                            $(".load_more").attr("disabled", "disabled");
                        }
                    }
                    
                    });

                
                
                var track_click_event = 0; //track user click on "load more" button, righ now it is 0 click
                var pagetitle_event = 'event';
                var baseUrl_event = '<?php echo $baseUrl; ?>';
                var lang_event = '<?php echo $lang; ?>';                
                var total_pages_event = 8;
                $('#result_event').load("<?php echo $baseUrl; ?>/ajax/fetch_event.php", {'page':track_click_event, 'pagetitle':pagetitle_event, 'baseUrl':baseUrl_event, 'lang_event':lang_event}, function() {track_click_event++;}); //initial data to load

                $(".load_more_event").click(function (e) { //user clicks on button
                
                    $(this).hide(); //hide load more button on click
                    $('.animation_image').show(); //show loading image

                    if(track_click_event <= total_pages_event) //make sure user clicks are still less than total pages
                    {
                        //post page number and load returned data into result element
                        $.post('<?php echo $baseUrl; ?>/ajax/fetch_event.php',{'page':track_click_event, 'pagetitle':pagetitle_event, 'baseUrl':baseUrl_event, 'lang_event':lang_event}, function(data) {
                        
                            $(".load_more_event").show(); //bring back load more button
                            
                            $("#result_event").append(data); //append data received from server
                            
                            //scroll page to button element
                            $("html, body").animate({scrollTop: $(".load_more_event").offset().top-500}, 1000);
                            
                            //hide loading image
                            $('.animation_image').hide(); //hide loading image once data is received
                
                            track_click_event++; //user click increment on load button
                        
                        }).fail(function(xhr, ajaxOptions, thrownError) { 
                            alert(thrownError); //alert any HTTP error
                            $(".load_more_event").show(); //bring back load more button
                            $('.animation_image').hide(); //hide loading image once data is received
                        });
                        
                        
                        if(track_click >= total_pages-1)
                        {
                            //reached end of the page yet? disable load button
                            $(".load_more_event").attr("disabled", "disabled");
                        }
                    }
                    
                    });


            });
    </script>

</body>
</html>