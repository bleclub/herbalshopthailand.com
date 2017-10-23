<!-- Header -->

<?php
    $title = 'Herbalshop Thailand';
    $description = 'Herbalshop Thailand';
    $keywords = 'Herbalshop Thailand';

	$home_selected = "class='selected'"; // Menu selected
    require 'template/front/header.php';
	require 'controllers/front/home_page.php';
?>

    <META name="robots" content="index,follow">

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/assets/front_end/include/rs-plugin/css/settings.css" media="screen" />
    <style>
        .revo-slider-emphasis-text {
            font-size: 64px;
            font-weight: 700;
            letter-spacing: -1px;
            font-family: 'Raleway', sans-serif;
            padding: 15px 20px;
            /* border-top: 2px solid #FFF;
            border-bottom: 2px solid #FFF; */
        }

        .revo-slider-desc-text {
            font-size: 20px;
            font-family: 'Lato', sans-serif;
            width: 650px;
            text-align: center;
            line-height: 1.5;
        }

        .revo-slider-caps-text {
            font-size: 16px;
            font-weight: 400;
            letter-spacing: 3px;
            font-family: 'Raleway', sans-serif;
        }
    </style>

<?php require 'template/front/menu.php'; ?>

<!-- Content -->

<!--Home Banner Section  -->
<section id="slider" class="slider-parallax revslider-wrap clearfix">
        <!--
        #################################
            - THEMEPUNCH BANNER -
        #################################
        -->
        <div class="tp-banner-container">

            <div class="tp-banner">
                <ul>
                    <!-- SLIDE  -->
                    <li class="dark" data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="<?php echo $baseUrl; ?>/assets/front_end/images/slider/thumb/3.jpg"
                        data-delay="8000" data-saveperformance="off" data-title="Page 1">
                        <!-- MAIN IMAGE -->
                        <img src="<?php echo $baseUrl; ?>/assets/front_end/images/slider/3.jpg" alt="kenburns1" data-bgposition="left center" data-kenburns="on" data-duration="12000" data-ease="Linear.easeNone"
                            data-bgfit="130" data-bgfitend="100" data-bgpositionend="right center">
                        <!-- LAYERS -->

                        <!-- LAYER NR. 2 -->

                        <div class="tp-caption" data-x="0" data-y="0" data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-speed="800" data-start="1200" data-easing="easeOutQuad" data-splitin="none" data-splitout="none"
                            data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="1000" data-endeasing="Power4.easeIn">
                            <div class="col-md-7 banner-caption">
                                <div class="banner-text text-left">
                                    <h1>นวัตกรรมสมุนไพรไทย ระดับมาตรฐานสากล</h1>
                                    <p>โดยบริษัทร่วมทุนองค์การเภสัชกรรมซึ่งเป็นรัฐวิสาหกิจในการกำกับดูแลของกระทรวงสาธารณสุข
                                        โดยทำการวิจัยและพัฒนาสมุนไพรเพื่อใช้เป็นยาและผลิตภัณฑ์เสริมอาหารอย่างต่อเนื่อง</p>
                                    <div role="navigation"><a href="<?php echo $baseUrl; ?>/about" class="btn btn-large">อ่านเพิ่มเติม &nbsp;&nbsp; ></a></div>
                                </div>
                                <!-- banner text -->
                            </div>
                        </div>
                        <div class="bg_overlay"></div>


                    </li>


                    <!-- SLIDE  -->
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="<?php echo $baseUrl; ?>/assets/front_end/images/slider/thumb/1.jpg" data-delay="8000"
                        data-saveperformance="off" data-title="Page 2">
                        <!-- MAIN IMAGE -->
                        <img src="<?php echo $baseUrl; ?>/assets/front_end/images/slider/1.jpg" alt="kenburns6" data-bgposition="center top" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone"
                            data-bgfit="120" data-bgfitend="100" data-bgpositionend="center center">
                        <!-- LAYERS -->

                        <div class="tp-caption" data-x="0" data-y="0" data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-speed="800" data-start="1200" data-easing="easeOutQuad" data-splitin="none" data-splitout="none"
                            data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="1000" data-endeasing="Power4.easeIn">
                            <div class="col-md-7 banner-caption">
                                <div class="banner-text text-left">
                                    <h1>นวัตกรรมสมุนไพรไทย ระดับมาตรฐานสากล</h1>
                                    <p>โดยบริษัทร่วมทุนองค์การเภสัชกรรมซึ่งเป็นรัฐวิสาหกิจในการกำกับดูแลของกระทรวงสาธารณสุข
                                        โดยทำการวิจัยและพัฒนาสมุนไพรเพื่อใช้เป็นยาและผลิตภัณฑ์เสริมอาหารอย่างต่อเนื่อง</p>
                                    <div role="navigation"><a href="<?php echo $baseUrl; ?>/about" class="btn btn-large">อ่านเพิ่มเติม &nbsp;&nbsp; ></a></div>
                                </div>
                                <!-- banner text -->
                            </div>
                        </div>
                        <div class="bg_overlay"></div>

                    </li>


                    <!-- SLIDE  -->
                    <li class="dark" data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="<?php echo $baseUrl; ?>/assets/front_end/images/slider/thumb/2.jpg"
                        data-delay="8000" data-saveperformance="off" data-title="Page 3">
                        <!-- MAIN IMAGE -->
                        <img src="<?php echo $baseUrl; ?>/assets/front_end/images/slider/2.jpg" alt="kenburns3" data-bgposition="left top" data-kenburns="on" data-duration="12000" data-ease="Linear.easeNone"
                            data-bgfit="130" data-bgfitend="100" data-bgpositionend="right bottom">
                        <!-- LAYERS -->

                        <div class="tp-caption" data-x="0" data-y="0" data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-speed="800" data-start="1200" data-easing="easeOutQuad" data-splitin="none" data-splitout="none"
                            data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="1000" data-endeasing="Power4.easeIn">
                            <div class="col-md-7 banner-caption">
                                <div class="banner-text text-left">
                                    <h1>นวัตกรรมสมุนไพรไทย ระดับมาตรฐานสากล</h1>
                                    <p>โดยบริษัทร่วมทุนองค์การเภสัชกรรมซึ่งเป็นรัฐวิสาหกิจในการกำกับดูแลของกระทรวงสาธารณสุข
                                        โดยทำการวิจัยและพัฒนาสมุนไพรเพื่อใช้เป็นยาและผลิตภัณฑ์เสริมอาหารอย่างต่อเนื่อง</p>
                                    <div role="navigation"><a href="<?php echo $baseUrl; ?>/about" class="btn btn-large">อ่านเพิ่มเติม &nbsp;&nbsp; ></a></div>
                                </div>
                                <!-- banner text -->
                            </div>
                        </div>
                        <div class="bg_overlay"></div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- END REVOLUTION SLIDER -->

    </section>


    <!-- About Section  -->
    <section id="about" class="about clearfix parallax-container">
        <div class="parallax"><img src="<?php echo $baseUrl; ?>/assets/front_end/images/bg_about.jpg"></div>
        <div class="col-md-6">
            <h2>ผลิตภัณฑ์ สมุนไพรไทย</h2>
            <hr>
            <p>องค์การเภสัชกรรม ซึ่งเป็นรัฐวิสาหกิจในการกำกับดูแลของกระทรวงสาธารณสุขหลังจากที่ได้ ประสบความสำเร็จในการผลิตยาแผนปัจจุบันมาแล้ว
                ได้ทำการวิจัยและพัฒนาสมุนไพรเพื่อใช้ เป็นยาและผลิตภัณฑ์เสริมอาหาร อย่างต่อเนื่อง และขยายผลการวิจัย</p>
        </div>
    </section>

    <!-- Product Section  -->

    <section id="product" class="product clearfix">
        <style>
            .product p a {
                color: #47c9af;
                font-size: 14px;
            }
            .product p a:hover {
                text-decoration: underline;
            }
        </style>
        <?php 
            while($rs_product_loop = $db->get($results)) { 
        ?>

        <div class="col-md-4 col-sm-4 produect_cate">
            <img src="<?php echo $baseUrl; ?>/upload/product/<?php echo $rs_product_loop['pages_photoslide']; ?>" class="img-responsive" alt="">
            <p>
                <?php echo $rs_product_loop['pages_subject_'.$_GET['lang']]; ?> <span>ผลิตภัณฑ์สมุนไพรไทย</span><br>
                <a href="<?php echo $baseUrl; ?>/product/<?php echo $rs_product_loop['pages_link']; ?>">ดูรายละเอียดผลิตภัณฑ์</a>
            </p>
            
        </div>

        <?php } ?>
        <div class="col-md-12 text-center">
            <a href="<?php echo $baseUrl; ?>/product" class="btn btn-large">ดูผลิตภัณฑ์ทั้งหมด &nbsp;&nbsp; ></a>
        </div> 

        <!-- <div class="col-md-4 col-sm-4 produect_cate">
            <img src="<?php //echo $baseUrl; ?>/assets/front_end/images/products/product_img02.jpg" class="img-responsive" alt="">
            <p>ยาอมแก้ไอมะแว้ง รสบ๊วย <span>Category</span></p>
        </div>
        <div class="col-md-4 col-sm-4 produect_cate">
            <img src="<?php //echo $baseUrl; ?>/assets/front_end/images/products/product_img03.jpg" class="img-responsive" alt="">
            <p>ขมิ้นชันแคปซูล <span>Category</span></p>
        </div>-->
        
    </section>

    <!--Vision Section  -->
    <section id="vision" class="vision parallax-container">
        <!-- <div class="parallax"><img src="./images/bg_vision.jpg"></div> -->
        <div class="container">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h3>วิสัยทัศน์</h3>
                <p>บริษัท ผลิตภัณฑ์ สมุนไพรไทย จำกัด ตระหนักถึงหน้าที่การเป็นองค์กรที่ดี ผลิตและจำหน่ายยาสมุนไพรที่ดี มีคุณภาพ
                    พร้อมสร้างประโยชน์ต่อสังคม จึงดำเนินงานโดยยึดหลักธรรมาภิบาล ได้รับรางวัลการรันตีคุณภาพและมาตราฐานต่างๆมากมาย
                    เพื่อก้าวสู่การเป็นองค์กรระดับมาตราฐานสากล</p>
                <a href="<?php echo $baseUrl; ?>/about" class="btn btn-large">อ่านเพิ่มเติม &nbsp;&nbsp; ></a>
            </div>
        </div>

        <div class="parallax video-wrap">
            <video poster="<?php echo $baseUrl; ?>/assets/front_end/videos/SunThroughLeaves.jpg" style="display:block;" preload="auto" loop autoplay muted>
                <source src='<?php echo $baseUrl; ?>/assets/front_end/videos/SunThroughLeaves.mp4' type='video/mp4' />
                <!-- <source src='./videos/explore.webm' type='video/webm' /> -->
            </video>
            <div class="video-overlay" style="background-color: rgba(0,0,0,0.35);"></div>
        </div>
    </section>

    <!-- News Section  -->
    <section id="news" class="news section clearfix">
        <h4 class="text-center">ข่าวสารและกิจกรรม</h4>
        <hr>

        <?php 
            while($rs_news_loop = $db->get($results_news)) { 
        ?>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <img src="<?php echo $baseUrl; ?>/upload/<?php echo $rs_news_loop['news_categories']; ?>/<?php echo $rs_news_loop['news_photoslide']; ?>" class="img-responsive" alt="">
                <div class="content">
                    <h5><?php echo $rs_news_loop['news_subject_'.$_GET['lang']]; ?></h5>
                    <p><b><?php echo $rs_news_loop['news_categories']; ?></b><br><?php echo dateFormat($rs_news_loop['news_date']); ?></p>
                    <p><?php echo mb_substr($rs_news_loop['news_title_'.$_GET['lang']], 0,100, "UTF-8")."..."; ?></p>
                    <p><a href="<?php echo $baseUrl.'/news_event/'.$rs_news_loop['news_link']; ?>">อ่านต่อ</a></p>
                </div>
            </div>
        <?php } ?>
        <div class="text-center"><a href="<?php echo $baseUrl; ?>/news_event" class="btn btn-large">อ่านข่าวทั้งหมด &nbsp;&nbsp; ></a></div>        
        <!-- <div class="col-lg-3 col-md-6 col-sm-6">
            <img src="<?php //echo $baseUrl; ?>/assets/front_end/images/news/news_img02.jpg" class="img-responsive" alt="">
            <div class="content">
                <h5>ยาน่ารู้</h5>
                <p><b>ข่าวสาร</b><br>11 July 2017</p>
                <p>คณะแพทย์ศาสตร์ มหาวิทยาลัยธรรมศาสตร์ มีการจัดการเรียนการสอน วิชา เภสัชกรรมไทยปร...</p>
                <p><a href="#">อ่านต่อ</a></p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <img src="<?php //echo $baseUrl; ?>/assets/front_end/images/news/news_img03.jpg" class="img-responsive" alt="">
            <div class="content">
                <h5>กิจกรรม CSR ประจำปี 2560</h5>
                <p><b>ข่าวสาร</b><br>11 July 2017</p>
                <p>กิจกรรม CSR ประจำปี 2560 จัดกิจกรรมและจัดเลี้ยงอาหารกลางวัน ณ สถานสงเคราะห์บ้านพักคนชราวาสนะเวศม์...</p>
                <p><a href="#">อ่านต่อ</a></p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <img src="<?php //echo $baseUrl; ?>/assets/front_end/images/news/news_img04.jpg" class="img-responsive" alt="">
            <div class="content">
                <h5>ออกร้าน งานตลาดน้ำอโยธยา</h5>
                <p><b>ข่าวสาร</b><br>11 July 2017</p>
                <p>ประชาสัมพันธ์ เรื่อง งานออกร้าน ตลาดน้ำอโธยา โดย บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด ได้เข้าร่วมกิจก...</p>
                <p><a href="#">อ่านต่อ</a></p>
            </div>
        </div> -->
    </section>


<!-- Footer -->
<?php 
    require 'template/front/footer.php';
?>    
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

    <script src="<?php echo $baseUrl; ?>/assets/front_end/js/plugins.js"></script>
    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src="<?php echo $baseUrl; ?>/assets/front_end/include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?php echo $baseUrl; ?>/assets/front_end/include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <script type="text/javascript">
        jQuery(document).ready(function () {



            jQuery('.tp-banner').show().revolution(
                {
                    dottedOverlay: "none",
                    delay: 16000,
                    startwidth: 1140,
                    startheight: 700,
                    hideThumbs: 200,

                    thumbWidth: 100,
                    thumbHeight: 50,
                    thumbAmount: 5,

                    navigationType: "",
                    navigationArrows: "solo",
                    navigationStyle: "preview4",

                    touchenabled: "on",
                    onHoverStop: "off",

                    swipe_velocity: 0.7,
                    swipe_min_touches: 1,
                    swipe_max_touches: 1,
                    drag_block_vertical: false,

                    parallax: "mouse",
                    parallaxBgFreeze: "on",
                    parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],

                    keyboardNavigation: "off",

                    navigationHAlign: "center",
                    navigationVAlign: "bottom",
                    navigationHOffset: 0,
                    navigationVOffset: 20,

                    soloArrowLeftHalign: "left",
                    soloArrowLeftValign: "center",
                    soloArrowLeftHOffset: 20,
                    soloArrowLeftVOffset: 0,

                    soloArrowRightHalign: "right",
                    soloArrowRightValign: "center",
                    soloArrowRightHOffset: 20,
                    soloArrowRightVOffset: 0,

                    shadow: 0,
                    fullWidth: "off",
                    fullScreen: "on",

                    spinner: "spinner4",

                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,

                    shuffle: "off",

                    autoHeight: "off",
                    forceFullWidth: "off",



                    hideThumbsOnMobile: "off",
                    hideNavDelayOnMobile: 1500,
                    hideBulletsOnMobile: "off",
                    hideArrowsOnMobile: "off",
                    hideThumbsUnderResolution: 0,

                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    startWithSlide: 0,
                    fullScreenOffsetContainer: ".header"
                });

        }); //ready
    </script>

</body>

</html>