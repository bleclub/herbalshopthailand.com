<?php
	require 'controllers/front/article_page.php';
	if($row_pages <= 0 ) {
		header("Location: ".$baseUrl);
	}
?>

<!-- Header -->
<?php
	
	$title = $rs_pages['pages_subject_'.$lang].' | Herbalshop Thailand';
    $description = 'Herbalshop Thailand';
    $keywords = 'Herbalshop Thailand';

	$article_selected = "class='selected'"; // Menu selected
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
        <div class="parallax"><img src="<?php echo $baseUrl; ?>/assets/front_end/images/bg_info_article.jpg"></div>
        <div class="container">
                <div class="text-left">
					<h1>Article</h1>
					<p>บทความสมุนไพรน่ารู้</p>
                    <!-- <a href="#" class="btn btn-large">อ่านเพิ่มเติม &nbsp;&nbsp; ></a> -->
                    <ol class="breadcrumb">
                        <li><a href="<?php echo $baseUrl.'/'.$lang; ?>">Home</a></li>
                        <li><a href="<?php echo $baseUrl.'/'.$lang; ?>/article">Article</a></li>
                        <li class="active"><?php echo $rs_pages['pages_subject_'.$lang]; ?></li>
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
								<h2><?php echo $rs_pages['pages_subject_'.$lang]; ?></h2>
							</div><!-- .entry-title end -->

							<!-- Entry Meta
							============================================= -->
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> <?php echo dateFormat($rs_pages['pages_date']); ?></li>
								<li><i class="icon-user"></i> <?php echo $rs_pages['firstnameTH']." ".$rs_pages['lastnameTH']; ?></li>
								<!-- <li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li>
								<li><a href="#"><i class="icon-comments"></i> 43 Comments</a></li>
								<li><a href="#"><i class="icon-camera-retro"></i></a></li> -->
							</ul><!-- .entry-meta end -->

							<!-- Entry Image
							============================================= -->
							<div class="entry-image bottommargin">
								<img src="<?php echo $baseUrl; ?>/upload/<?php echo $rs_pages['pages_categories']."/".$rs_pages['pages_photoslide']; ?>" class="img-responsive" alt="">
							</div><!-- .entry-image end -->

							<!-- Entry Content
							============================================= -->
							<div class="entry-content notopmargin">

								<?php echo $rs_pages['pages_content_'.$lang]; ?>
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
	<script src="<?php echo $baseUrl; ?>/assets/front_end/js/jquery.validate.min.js"></script>


	<script src="<?php echo $baseUrl; ?>/assets/front_end/js/plugins.js"></script>

	<script type="text/javascript">
		$("#template-contactform-footer").validate();
	</script>

    <script type="text/javascript" src="<?php echo $baseUrl; ?>/assets/front_end/js/plugins.js"></script> 
    <script>
          $(function() {
              $( "#side-navigation" ).tabs({ show: { effect: "fade", duration: 400 } });
          });
     </script> 

</body>
</html>