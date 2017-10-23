<!-- Header -->
<?php
	
	$title =  'วิจัยพัฒนา และการประกันคุณภาพ - Research | Herbalshop Thailand';
    $description = 'Herbalshop Thailand';
    $keywords = 'Herbalshop Thailand';

	$product_selected = "selected"; // Menu selected
    require 'template/front/header.php';


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
        <div class="parallax"><img src="<?php echo $baseUrl; ?>/assets/front_end/images/bg_research_title.jpg"></div>
        <div class="container">
                <div class="text-left">
					<h1>Research</h1>
					<p>วิจัยพัฒนา และการประกันคุณภาพ</p>
                    <!-- <a href="#" class="btn btn-large">อ่านเพิ่มเติม &nbsp;&nbsp; ></a> -->
                    <ol class="breadcrumb">
                        <li><a href="<?php echo $baseUrl.'/'.$lang; ?>">Home</a></li>
                        <li class="active">Research</li>
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

							<!-- Entry Title
							============================================= -->
							<div class="entry-title">
								<!-- <h2>Our Quality Products</h2> -->
							</div><!-- .entry-title end -->

			
							<!-- Entry Image
							============================================= -->
							<!-- <div class="entry-image bottommargin">
								<img src="<?php// echo $baseUrl; ?>/upload/<?php //echo $rs_pages['pages_categories']."/".$rs_pages['pages_photoslide']; ?>" class="img-responsive" alt="">
							</div> -->
							<!-- .entry-image end -->

							<!-- Entry Content
							============================================= -->
							<div class="entry-content notopmargin">
							<div class="row">	
								<div class="col-sm-8">
									<h3>Our Quality Products</h3>
									<p>The Thai Herbal Products Company factory,which manufactures the brand name "PHYTO CARE" products is located at Factoryland industrial estate in Pranakorn Sri Ayutthaya province.its main activity is producing herbal medicines and health food supplements,under the Thai FDA GMP. The factory adherres to strict QC methods from raw materials to the finished products at the similar degree as for modern drugs,for example,the gamma ray radiation is used in neutralizing any bacteria or fungal materials,analyzing of active compounds in each product to ensure meeting strict requirements,and a hyginic operating site,along with strict rules governing the sterility of the finished products as not seen in other Thai herbal manufacturers.</p>
								</div>
								<div class="col-sm-4">
									<img src="<?php echo $baseUrl; ?>/assets/front_end/images/research/research_06.jpg" class="img-responsive" alt="">
								</div>
							</div>

								<div class="row">	
									<div class="col-sm-6">
										<img src="<?php echo $baseUrl; ?>/assets/front_end/images/research/research_05.jpg" class="img-responsive bottommargin" alt="">
									</div>
									<div class="col-sm-6">
									<h3>HPLC</h3>
										<p>Quantitative analysis of chemical compositions of Andrographis paniculata wall.ex nees,Ginkobiloba extract,Ganoderma lucidum extract,Clinacanthus nutans extract,Centella asiatica extract,Glysine max extract,Cimiciffuga racemoca extract and Capsicum fructecens Linn extract.</p>
									</div>
								</div>

								<div class="row">	
									<div class="col-sm-6">
										<img src="<?php echo $baseUrl; ?>/assets/front_end/images/research/research_07.jpg" class="img-responsive" alt="">
										<h3>GC</h3>
										<p>Quantitative analysis of chemical compositions of Plai(Zingiber cassumunar Roxb.)oil,Garlic(Allium sativum Linn.)and Citronella oil.</p>
										
									</div>
								
									<div class="col-sm-6">
										<h3>Microbial laboratory</h3>
										<p>
										The efficacy of products is ensured by microbial limits control,these hight quality herbal products have been approved and evaluated by Thai FDA for the specified indications ensuring consumers of the safety and efficacy of their products.</p>
										<img src="<?php echo $baseUrl; ?>/assets/front_end/images/research/research_08.jpg" class="img-responsive" alt="">										
									</div>
								</div>

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