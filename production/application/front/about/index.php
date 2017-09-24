<!-- Header -->

<?php
    $title = 'เกี่ยวกับ Herbalshop Thailand';
    $description = 'Herbalshop Thailand';
    $keywords = 'Herbalshop Thailand';
    
    $about_selected = "class='selected'"; // Menu selected
    
    require 'template/front/header.php';
    require 'controllers/front/about_page.php';
	// require 'controllers/front/home.php';
?>

<?php require 'template/front/menu.php'; ?>



<!-- Content -->

<!--Title Section  -->
<section id="title_page" class="title_page parallax-container">
        <div class="parallax"><img src="<?php echo $baseUrl; ?>/assets/front_end/images/bg_page_title.jpg"></div>
        <div class="col-md-12 text-left">
            <h1>Company Profiles</h1>
            <p>เกี่ยวกับเรา</p>
            <!-- <a href="#" class="btn btn-large">อ่านเพิ่มเติม &nbsp;&nbsp; ></a> -->
            <ol class="breadcrumb">
                <li><a href="<?php echo $baseUrl; ?>">Home</a></li>
                <li class="active">About Us</a></li>
            </ol>
        </div>
    </section>

    <div id="wrapper" class="clearfix">
        <div id="side-navigation">
            <div class="col-sm-4 col-md-4 col-lg-3 side_block">
                <ul class="sidenav">
                    <li>
                        <a href="#snav-content1" data-target="#snav-content1" data-toggle="tab">ประวัติและความเป็นมา<i class="fa fa-chevron-right"></i></a>
                    </li>
                    <li>
                        <a href="#snav-content2" data-target="#snav-content2" data-toggle="tab">วิสัยทัศน์<i class="fa fa-chevron-right"></i></a>
                    </li>
                     <li>
                        <a href="#snav-content3" data-target="#snav-content3" data-toggle="tab">บทบาทและภารกิจ<i class="fa fa-chevron-right"></i></a>
                    </li>
                    <li>
                        <a href="#snav-content4" data-target="#snav-content4" data-toggle="tab">ผู้ถือหุ้น<i class="fa fa-chevron-right"></i></a>
                    </li>
                    <li>
                        <a href="#snav-content5" data-target="#snav-content5" data-toggle="tab">รายชื่อคณะกรรมการ<i class="fa fa-chevron-right"></i></a>
                    </li> 
                </ul>
            </div>
           
            <!-- About Us section -->
                <section id="snav-content1" class="about_detail">
                    <div class="col-sm-8 col-sm-offset-4">
                        <h2>ประวัติและความเป็นมา</h2>
                        <hr>
                        <?php echo $rs_about['content_detail_th']; ?>
                            <!-- <p>องค์การเภสัชกรรม ซึ่งเป็นรัฐวิสาหกิจในการกำกับดูแลของกระทรวงสาธารณสุขหลังจากที่ได้ประสบความ สำเร็จในการผลิตยาแผนปัจจุบันมาแล้ว ได้ทำการวิจัยและพัฒนาสมุนไพรเพื่อใช้เป็นยาและผลิตภัณฑ์เสริมอาหาร อย่างต่อเนื่อง และขยายผลการวิจัยและพัฒนาไปสู่การผลิตผลิตภัณฑ์สมุนไพรเชิงอุตสาหกรรม โดยใช้แทคโนโลยี และกรรมวิธีผลิตที่ดี (GMP) และระบบคุณภาพ ISO 9002 รวมทั้งมาตรฐานการควบคุมคุณภาพ อย่างไรก็ดี ปริมาณการผลิตยังไม่เพียงพอกับความต้องการของประชาชน<br><br>
                            ดังนั้นในปี พ.ศ. 2538<br>
                            องค์การเภสัชกรรมจึงได้สนองนโยบายของรัฐบาลในการส่งเสริมสมุนไพรไทยให้แพร่ หลายยิ่งขึ้น โดยการร่วมทุนกับภาคเอกชนจัดตั้ง บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด พร้อมกับก่อสร้างโรงงาน ผลิตผลิตภัณฑ์ดังกล่าวขึ้นโดยเฉพาะ ซึ่งองค์การเภสัชกรรมเป็นผู้ถือหุ้นรายใหญ่ โรงงานผลิตผลิตภัณฑ์สมุนไพรไทยตั้งอยู่ที่นิคมอุตสาหกรรมวังจุฬา อ.วังน้อย จังหวัดพระนครศรีอยุธยา ได้ก่อสร้างแล้วเสร็จและเริ่มผลิตยา และผลิตภัณฑ์เสริมอาหารจากสมุนไพร ตั้งแต่เดือนสิงหาคม 2541 เป็นต้นมา โดยได้รับการถ่ายทอดเทคโนโลยีการผลิตจากองค์การเภสัชกรรม ซึ่งตั้งแต่เดือนกรกฎาคม 2542 โรงงาน สามารถผลิตยาและผลิตภัณฑ์เสริมอาหารได้จำนวน 22 รายการ และมีแผนการเพิ่มจำนวนรายการให้มากขึ้นตามความต้องการของตลาดในอนาคต ผลิตภัณฑ์ทุกรายการได้รับก
                            <h3>บริษัท ผลิตภัณฑ์สมุนไพรไทย จำกัด กับ มาตรฐานสากล หลักเกณฑ์วิธีการที่ดีในการผลิตยา (Good Manufacturing Practice:GMP) *1</h3>
                            <p>หลักเกณฑ์วิธีการที่ดีในการผลิต (GMP) คือ  ข้อกำหนด ระเบียบ  แบบแผน  และวิธีปฏิบัติที่นำมาใช้ในการผลิตที่ดีและได้สินค้าที่มีคุณภาพมาตรฐาน  ซึ่งครอบคลุมถึง  สถานที่ผลิตอุปกรณ์เครื่องจักร บุคลากร วัสดุ เอกสารต่าง ๆ  และสิ่งอื่นที่เกี่ยวข้องกับกระบวนการการผลิตทุกขั้นตอน  ตั้งแต่การนำวัตถุดิบเข้าในสถานที่ผลิต   ผ่านขั้นตอนการผลิตต่าง ๆ และการตรวจสอบคุณภาพ  การบรรจุ  การเข้าหีบห่อ  ตลอดจนการจัดเก็บ   จนได้เป็นสินค้าสำเร็จรูปและออกจำหน่าย แก่ประชาชน GMP มีหลักการผลิตยาด้วยความมั่นใจว่า ได้มาตรฐานตรงตามที่กำหนดไว้   เรียกว่า   " ผลิตอย่างมีคุณภาพที่ตรวจสอบได้" หรือ "Quality that must  be built-in and tested " สำหรับสินค้ายา  คุณภาพ  หมายถึง ยาสำเร็จรูปที่มีปริมาณตัวยา  รูปแบบ  การปลดปล่อยตัวยา  ความคงสภาพ  ประสิทธิผลการรักษา ฯลฯ  ตรงตามที่ได้ขึ้นทะเบียนไว้กับกระทรวงสาธารณสุขซึ่งผู้ประกอบการผลิตยา จะต้องทำได้ตามนั้นทุกครั้ง  ซึ่งน่าจะเป็นมาตรฐานที่กำหนดมากกว่าจะเรียกเป็นคุณภาพ     แต่คุณภาพตัวยาตามความเข้าใจของประชาชนหมายถึง  ยารักษาโรคให้หายได้   ขณะที่แพทย์ อย. และหน่วยงานจัดซื้อจะใช้ GMP เป็นสื่อกลางแสดงถึงซึ่งคุณภาพมาตรฐานของยาที่ผลิตได้ <br><br>
                            ข้อมูลอ้างอิง *1 คณะกรรมการ โครงการศึกษาวิเคราะห์ระบบยาของประเทศไทย “ระบบยาของประเทศไทย” 2545 หน้า  475-477</p> -->
                    </div>
                </section>     
                
                
            <!-- Vision section -->
                <section id="snav-content2" class="vision_detail">
                    <div class="col-sm-8 col-sm-offset-4">
                        <h2>วิสัยทัศน์</h2>
                        <hr>
                        <p>เป็นผู้นำด้านการผลิตยาสมุนไพร ภายใต้เทคโนโลยีการผลิตที่ดี (GMP) และได้รับการรับรอง มาตรฐานสากล มุ่งเน้นการพัฒนาด้านการผลิตยาสมุนไพรที่มีคุณภาพสูงสุด
    ตลอดระยะเวลา 20 ปีที่ผ่านมา บริษัท ผลิตภัณฑ์ สมุนไพรไทย จำกัด ตระหนักถึงหน้าที่การเป็นองค์กรที่ดี ผลิตและจำหน่ายยาสมุนไพรที่ดี มีคุณภาพ พร้อมสร้างประโยชน์ต่อสังคม จึงดำเนินงานโดยยึดหลักธรรมาภิบาล  ได้รับรางวัลการรันตีคุณภาพและมาตราฐานต่างๆมากมาย เพื่อก้าวสู่การเป็นองค์กรระดับมาตราฐานสากล
                        </p>
                        <h3>วัตถุประสงค์ของบริษัท</h3>
                        <div class="col-sm-12 col-md-6 no-padding vision_block">
                            <div class="col-sm-6 no-padding">
                                <img src="<?php echo $baseUrl; ?>/assets/front_end/images/vision_img01.jpg" class="img-responsive">
                            </div>
                            <div class="col-sm-6">
                                <p>เพื่อสนองนโยบาย แห่งชาติด้านยาและ แผนพัฒนาเศรษฐกิจ และสังคมแห่งชาติ ด้านสาธารณสุข</p>

                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 no-padding vision_block">
                            <div class="col-sm-6 no-padding">
                                <img src="<?php echo $baseUrl; ?>/assets/front_end/images/vision_img02.jpg" class="img-responsive">
                            </div>
                            <div class="col-sm-6">
                                <p>เพื่อสนองนโยบาย แห่งชาติด้านยาและ แผนพัฒนาเศรษฐกิจ และสังคมแห่งชาติ ด้านสาธารณสุข</p>

                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 no-padding vision_block">
                            <div class="col-sm-6 no-padding">
                                <img src="<?php echo $baseUrl; ?>/assets/front_end/images/vision_img03.jpg" class="img-responsive">
                            </div>
                            <div class="col-sm-6">
                                <p>เพื่อสนองนโยบาย แห่งชาติด้านยาและ แผนพัฒนาเศรษฐกิจ และสังคมแห่งชาติ ด้านสาธารณสุข</p>

                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 no-padding vision_block">
                            <div class="col-sm-6 no-padding">
                                <img src="<?php echo $baseUrl; ?>/assets/front_end/images/vision_img04.jpg" class="img-responsive">
                            </div>
                            <div class="col-sm-6 ">
                                <p>เพื่อสนองนโยบาย แห่งชาติด้านยาและ แผนพัฒนาเศรษฐกิจ และสังคมแห่งชาติ ด้านสาธารณสุข</p>

                            </div>
                        </div>
                    </div>
                </section>

                <!-- Role section -->
                <section id="snav-content3" class="role_detail">
                    <style>
                        .flex-control-nav {
                            bottom: auto;
                            position: absolute;
                            right: auto;
                            text-align: center;
                            width: 100%;
                            z-index: 100;
                            padding: 0;
                        }
                        .flex-control-nav.flex-control-paging {
                            padding: 0;
                        }
                    </style>
                    <div class="col-sm-8 col-sm-offset-4">
                        <h2>บทบาทและธุรกิจ</h2>
                        <hr>
                        <ol>
                            <li>ผลิตยาสมุนไพรที่มีคุณภาพภายใต้การวิจัย และพัฒนาสูตรตำรับโดยองค์การเภสัชกรรม </li>
                            <li>ส่งเสริมให้มีการวิเคราะห์ และวิจัยยาสมุนไพร เพื่อนำไปสู่การพัฒนาด้านผลิตภัณฑ์สมุนไพร </li>
                            <li>ดำเนินการผลิต และจำหน่ายผลิตภัณฑ์สมุนไพรให้องค์การเภสัชกรรมและผู้แทนจำหน่ายทั่วไป </li>
                            <li>มุ่งเน้นพัฒนายาสมุนไพรให้อยู่ในรูปของสารสกัด เพื่อนำไปทดแทนการใช้ยาแผนปัจจุบัน ซึ่งเป็นเคมีสังเคราะห์</li>
                        </ol>
                        <h3 class="text-center">The Company Values</h3>

                        
                        <div class="flexslider">
                            
                             <ul class="slides">
                                <li>
                                    <div class="col-xs-4 col-xs-offset-4">
                                        <div class="avatar">
                                            <img src="<?php echo $baseUrl; ?>/assets/front_end/images/company_value_img01.png" alt="" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <h4>Accountability<br> มีความรับผิดชอบทั้งต่อตนเอง เพื่อนร่วมงานลูกค้า<br> ผู้ถือหุ้น และสังคมโดยรวม</h4>
                                    </div>
                                </li>
                                 <li>
                                    <div class="col-xs-4 col-xs-offset-4">
                                        <div class="avatar">
                                            <img src="<?php echo $baseUrl; ?>/assets/front_end/images/company_value_img02.png" alt="" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <h4>Customer Delight<br> ตอบสนองความต้องการลูกค้า ให้ลูกค้าทั้งภายใน <br>และ ภายนอกองค์กร มีความพึงพอใจเสมอ</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-xs-4 col-xs-offset-4">
                                        <div class="avatar">
                                            <img src="<?php echo $baseUrl; ?>/assets/front_end/images/company_value_img03.png" alt="" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <h4>Challenge<br> พัฒนาตนเอง และ งานที่ทำอยู่ให้มีความก้าวหน้า ตลอดเวลา</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-xs-4 col-xs-offset-4">
                                        <div class="avatar">
                                            <img src="<?php echo $baseUrl; ?>/assets/front_end/images/company_value_img04.png" alt="" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <h4>Integrity<br> มีความซื่อตรง และ ไว้วางใจได้</h4>
                                    </div>
                                </li>
                            </ul> 
                        </div>
                        <!-- flexslider -->
                        
                    </div>
                </section>


                 <!-- Shareholder -->
                <section id="snav-content4" class="role_detail invester">
                    <div class="col-sm-8 col-sm-offset-4">
                        <h2>ผู้ถือหุ้น</h2>
                        <hr>
                            <ol>
                                <li>องค์การเภสัชกรรม</li>
                                <li>บริษัท ล็อกซเลย์ จำกัด(มหาชน)</li>
                                <li>นายอุทัย สุดสุข</li>
                                <li>บริษัท ที.เอ็น.พี.เฮลท์แคร์ จำกัด</li>
                                <li>นายวินัย วีรภุชงค์</li>
                                <li>นายภากร มกรานนท์</li>
                                <li>บริษัท ไทยคอมมอดิตี้ จำกัด</li>
                                <li>นายพรชัย ชาญวนิชวงศ์</li>
                                <li>บริษัท ไอ.ซี.ซี.อินเตอร์เนชั่นแนล จำกัด (มหาชน)</li>
                                <li>บริษัท สหพัฒนาอินเตอร์โฮล์ดิ้ง จำกัด(มหาชน)</li>
                                <li>บริษัท สหพัฒนพิบูล จำกัด(มหาชน)</li>
                                <li>บริษัท บางกอกรับเบอร์จำกัด(มหาชน)</li>
                                <li>บริษัท เอส แอนด์ เจ อินเตอร์เนชั่นแนล เอ็นเตอร์ไพรส์ จำกัด (มหาชน)</li>
                                <li>นายปรากรม วุฒิพงค์</li>
                                <li>นางพัชราภรณ์ ปัญญาวุฒิไกร</li>
                                <li>นางสาว สายทิพย์ จีระวงศ์อร่าม</li>
                                <li>นางสุขุมล ศิริมงคลเกษม</li>
                                <li>บริษัท สมิติเวช จำกัด(มหาชน)</li>
                                <li>บริษัท โรงพยาบาลรามคำแหง จำกัด (มหาชน)</li>
                                <li>บริษัท บุญรอดบริวเวอรี่ จำกัด</li>
                                <li>ภ.ก สักก์สีห์ คุณวิภูศิลกุล</li>
                                <li>นาย จารุวัฒน์ ประวีณวงศ์วุฒิ</li>
                            </ol>
                    <p>*ข้อมูล ณ.วันที่ 28 เมษายน 2560*</p>
                    </div>
                </section>
                
                <section id="snav-content5" class="role_detail invester">
                    <div class="col-sm-8 col-sm-offset-4">
                        <h2>รายชื่อคณะกรรมการ</h2>
                        <hr>
                            <ol>
                                <li>พลโทจาตุรนต์  จารุเสน</li>
                                <li>นายปรากรม  วุฒิพงศ์</li>
                                <li>นายสมมาต  ขุนเศษฐ</li>
                                <li>นายนันทวัฒ  ไกรเสม</li>
                                <li>นายบุญชัย  สมบูรณ์สุข </li>
                                <li>นางมุกดาวรรณ  ประกอบไวทยกิจ</li>
                                <li>นางอัจฉรา  มาศมหิศักดิ์</li>
                                <li>นางมาลิน  อังสุรังษี</li>
                                <li>นางมณีรัตน์  ผลิพัฒน์</li>
                                <li>นายณัฐวุฒิ  ประเสริฐสิริพงศ์</li>
                                <li>นางจุรีภรณ์  บุณยวงศ์วิโรจน์</li>
                            </ol>

                        <p>*ข้อมูลวันที่ 28 เมษายน 2560 *</p>
                    </div>
                </section>  

             </div>
    </div>


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
     <!-- <script src="js/jquery.flexslider-min.js"></script>  -->
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

            $(window).load(function(){
                $('.flexslider').flexslider({
                    animation: "slide",
                    directionNav: false,
                });
            });

            $(document).on('shown.bs.tab', 'a[data-target="#snav-content3"]', function (e) {
                $('.flexslider').resize();
            });
            
        </script>

    </body>
</html>