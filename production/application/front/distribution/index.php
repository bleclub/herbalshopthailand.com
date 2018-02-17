<!-- Header -->
<?php
	
	$title =  'สถานที่จัดจำหน่าย - Distribution | Herbalshop Thailand';
    $description = 'Herbalshop Thailand';
    $keywords = 'Herbalshop Thailand';

    $distribution_selected = "class='selected'"; // Menu selected

	require 'template/front/header.php';
	require 'controllers/front/distribution_page.php';


?>

<!-- <style>
    #header {
        background-color: #333;
    }
</style> -->

<?php require 'template/front/menu.php'; ?>

<!-- Content -->

<!-- Page Title
============================================= -->

<section id="title_page" class="title_page parallax-container">
        <div class="parallax"><img src="<?php echo $baseUrl; ?>/assets/front_end/images/bg_production_title.jpg"></div>
        <div class="container">
                <div class="text-left">
					<h1>Distribution</h1>
					<p>สถานที่จัดจำหน่าย</p>
                    <!-- <a href="#" class="btn btn-large">อ่านเพิ่มเติม &nbsp;&nbsp; ></a> -->
                    <ol class="breadcrumb">
                        <li><a href="<?php echo $baseUrl.'/'.$lang; ?>">Home</a></li>
                        <li class="active">Distribution</li>
                    </ol>
                </div>
        </div>
</section>

<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="single-post nobottommargin">

						<!-- Single Post
						============================================= -->
						<div class="entry clearfix">

						

							<!-- Entry Content
							============================================= -->
							<div class="entry-content notopmargin">
								
							<?php echo $rs_distribution['content_detail_'.$lang]; ?>                                                                                                                                

								
								<!-- Post Single - Content End -->

								<!-- Tag Cloud
								============================================= -->
								<!-- <div class="tagcloud clearfix bottommargin">
									<a href="#">general</a>
									<a href="#">information</a>
									<a href="#">media</a>
									<a href="#">press</a>
									<a href="#">gallery</a>
									<a href="#">illustration</a>
								</div> -->
								<!-- .tagcloud end -->

								<div class="clear"></div>

								<!-- Post Single - Share
								============================================= -->
								<!-- <div class="si-share noborder clearfix">
									<span>Share this Post:</span>
									<div>
										<a href="#" class="social-icon si-borderless si-facebook">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>
										<a href="#" class="social-icon si-borderless si-twitter">
											<i class="icon-twitter"></i>
											<i class="icon-twitter"></i>
										</a>
										<a href="#" class="social-icon si-borderless si-pinterest">
											<i class="icon-pinterest"></i>
											<i class="icon-pinterest"></i>
										</a>
										<a href="#" class="social-icon si-borderless si-gplus">
											<i class="icon-gplus"></i>
											<i class="icon-gplus"></i>
										</a>
										<a href="#" class="social-icon si-borderless si-rss">
											<i class="icon-rss"></i>
											<i class="icon-rss"></i>
										</a>
										<a href="#" class="social-icon si-borderless si-email3">
											<i class="icon-email3"></i>
											<i class="icon-email3"></i>
										</a>
									</div>
								</div>Post Single - Share End -->

								</div>
							</div><!-- .entry end -->

							<div class="line"></div>			

						</div>
                        
                        <div class="clear"></div>
					</div>

				</div>

			</div>

		</section><!-- #content end -->

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