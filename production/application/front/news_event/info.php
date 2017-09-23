<!-- Header -->

<?php
    $title = 'ข่าวสารและกิจกรรม - Herbalshop Thailand';
    $description = 'Herbalshop Thailand';
    $keywords = 'Herbalshop Thailand';

	$news_selected = "selected"; // Menu selected
    require 'template/front/header.php';
	// require 'controllers/front/home.php';
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
        <div class="parallax"><img src="<?php echo $baseUrl; ?>/assets/front_end/images/bg_title_news.jpg"></div>
        <div class="container">
                <div class="text-left">
                    <h1>News & Events</h1>
                    <p>ข่าวสารและกิจกรรม</p>
                    <!-- <a href="#" class="btn btn-large">อ่านเพิ่มเติม &nbsp;&nbsp; ></a> -->
                    <ol class="breadcrumb">
                        <li><a href="<?php echo $baseUrl; ?>">Home</a></li>
                        <li><a href="<?php echo $baseUrl; ?>/news_envent">News and Event</a></li>
                        <li class="active">News info</li>
                    </ol>
                </div>
        </div>
</section>
<!-- <section id="page-title">

    <div class="container clearfix">
        <h1>News and Event</h1>
        <ol class="breadcrumb">
            <li><a href="<?php //echo $baseUrl; ?>">Home</a></li>
            <li><a href="<?php //echo $baseUrl; ?>/news_envent">News and Event</a></li>
            <li class="active">News info</li>
        </ol>
    </div>

</section>#page-title end -->

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
								<h2>This is a Standard post with a Preview Image</h2>
							</div><!-- .entry-title end -->

							<!-- Entry Meta
							============================================= -->
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> 10th July 2014</li>
								<li><i class="icon-user"></i> admin</li>
								<!-- <li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li>
								<li><a href="#"><i class="icon-comments"></i> 43 Comments</a></li>
								<li><a href="#"><i class="icon-camera-retro"></i></a></li> -->
							</ul><!-- .entry-meta end -->

							<!-- Entry Image
							============================================= -->
							<div class="entry-image bottommargin">
								<img src="<?php echo $baseUrl; ?>/assets/front_end/images/sample_img.jpg" class="img-responsive" alt="">
							</div><!-- .entry-image end -->

							<!-- Entry Content
							============================================= -->
							<div class="entry-content notopmargin">

								<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>

								<p>Nullam id dolor id nibh ultricies vehicula ut id elit. <a href="#">Curabitur blandit tempus porttitor</a>. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper.</p>

								<blockquote><p>Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.</p></blockquote>

								<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus.</p>

								<p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam. <a href="#">Nullam quis risus eget urna</a> mollis ornare vel eu leo. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

								<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>

								<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper.</p>
								<!-- Post Single - Content End -->

								<!-- Tag Cloud
								============================================= -->
								<div class="tagcloud clearfix bottommargin">
									<a href="#">general</a>
									<a href="#">information</a>
									<a href="#">media</a>
									<a href="#">press</a>
									<a href="#">gallery</a>
									<a href="#">illustration</a>
								</div><!-- .tagcloud end -->

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