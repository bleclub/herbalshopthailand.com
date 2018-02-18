<!-- Header -->

<?php
    $title = 'ผลิตภัณฑ์สมุนไพรไทย - Herbalshop Thailand';
    $description = 'ผลิตภัณฑ์สมุนไพรไทย - Herbalshop Thailand';
    $keywords = 'Herbalshop Thailand';

	$product_selected = "selected"; // Menu selected
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
    <div class="parallax"><img src="<?php echo $baseUrl; ?>/assets/front_end/images/bg_product_title.jpg"></div>
    <div class="col-md-12 text-left">
        <h1>Products: <?php echo $_GET['status']; ?></h1>
        <p>ผลิตภัณฑ์สมุนไพรไทย</p>
        <!-- <a href="#" class="btn btn-large">อ่านเพิ่มเติม &nbsp;&nbsp; ></a> -->
        <ol class="breadcrumb">
            <li><a href="<?php echo $baseUrl.'/'.$lang; ?>">Home</a></li>
            <li class="active">Products</a></li>
        </ol>
    </div>
</section>

    <!-- News Section  -->
    <section id="news" class="news section clearfix">

            <div id="side-navigation">
                    <!-- <div class="col-sm-12">
                        <ul class="sidenav_news">
                            <li class="ui-tabs-active">
                                <a href="#snav-content1" data-target="#snav-content1" data-toggle="tab">ข่าวสาร</a>
                            </li>
                            <li>
                                <a href="#snav-content2" data-target="#snav-content2" data-toggle="tab">กิจกรรม</a>
                            </li>
                        </ul>
                    </div> -->
                         <!--News section  -->
                         <div id="snav-content1">
                            <div id="result_news"></div>
                            <div class="col-sm-12 text-center">
                                <button class="load_more bt" id="load_more_button" class="text-center">เพิ่มเติม</button>
                                <div class="animation_image" style="display:none;"><img src="<?php echo $baseUrl."/assets/front_end/images/fancybox_loading.gif";?>"> Loading...</div>
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

    <script src="<?php echo $baseUrl; ?>/assets/front_end/js/jquery.validate.min.js"></script>

    <script src="<?php echo $baseUrl; ?>/assets/front_end/js/plugins.js"></script>
    <script type="text/javascript">
        $("#template-contactform-footer").validate();
    </script>
    <script>
          $(function() {
              $( "#side-navigation" ).tabs({ show: { effect: "fade", duration: 400 } });
          });
     </script> 
     <script type="text/javascript">
            $(document).ready(function() {
                var track_click = 0; //track user click on "load more" button, righ now it is 0 click
                var pagetitle = 'product';
                var baseUrl = '<?php echo $baseUrl; ?>';
                var lang = '<?php echo $lang; ?>';
                var category = '<?php echo $_GET['status']; ?>';
                var total_pages = 8;
                $('#result_news').load("<?php echo $baseUrl; ?>/ajax/fetch_product_cate.php", {'page':track_click, 'pagetitle':pagetitle, 'baseUrl':baseUrl, 'lang':lang, 'category':category},  function() {track_click++;}); //initial data to load

                $(".load_more").click(function (e) { //user clicks on button
                
                    $(this).hide(); //hide load more button on click
                    $('.animation_image').show(); //show loading image

                    if(track_click <= total_pages) //make sure user clicks are still less than total pages
                    {
                        //post page number and load returned data into result element
                        $.post('<?php echo $baseUrl; ?>/ajax/fetch_product_cate.php',{'page':track_click, 'pagetitle':pagetitle, 'baseUrl':baseUrl, 'lang':lang, 'category':category}, function(data) {
                        
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
            });
    </script>

</body>
</html>