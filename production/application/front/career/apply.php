<!-- Header -->

<?php
    $title = 'Apply Job | Herbalshop Thailand';
    $description = 'Herbalshop Thailand';
    $keywords = 'Herbalshop Thailand';
    
    require 'template/front/header.php';
    require 'controllers/front/career_page.php';
	// require 'controllers/front/home.php';
?>

<?php require 'template/front/menu.php'; ?>



<!-- Content -->

<!--Title Section  -->
<section id="title_page" class="title_page parallax-container">
    <div class="container">
        <div class="parallax"><img src="<?php echo $baseUrl; ?>/assets/front_end/images/bg_title_career.jpg"></div>
        <div class="text-left">
            <h1 style="color: #282828;">Apply Job</h1>
            <p  style="color: #282828;">ยื่นใบสมัครงาน</p>
            <!-- <a href="#" class="btn btn-large">อ่านเพิ่มเติม &nbsp;&nbsp; ></a> -->
            <ol class="breadcrumb">
                <li><a href="<?php echo $baseUrl.'/'.$lang; ?>">Home</a></li>
                <li><a href="<?php echo $baseUrl.'/'.$lang; ?>/career">Career</a></li>
                <li class="active">Apply job</li>
            </ol>
        </div>
    </div>
</section>

<!-- Content ============================================= -->
		<section id="contact">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Postcontent
					============================================= -->
					<div class="col-sm-8 nobottommargin">


						<form class="nobottommargin" enctype="multipart/form-data" id="template-contactform" name="template-contactform" action="<?php echo $baseUrl.'/'.$lang.'/career/sendmail/'; ?>" method="post">

							<div class="form-process"></div>

							<div class="col-sm-4 bottommargin">
								<label for="template-contactform-name">Name <small>*</small></label>
								<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
							</div>

							<div class="col-sm-4 bottommargin">
								<label for="template-contactform-email">Email <small>*</small></label>
								<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="sm-form-control required email " />
							</div>

							<div class="col-sm-4 bottommargin">
								<label for="template-contactform-phone">Phone</label>
								<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control required number" />
							</div>

							<div class="clearfix"></div>

							<div class="col-sm-12 bottommargin">
								<label for="template-contactform-service">Position</label>
								<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
								<?php
									$career_num = 1;
									while ($rs_pages = $db->get($query_pages)) {
								?>
									<option value="<?php echo $rs_pages['pages_subject_'.$lang]; ?>" <?php if($_GET['job_id'] == $rs_pages['pages_link']) { echo 'selected'; } ?>><?php echo $rs_pages['pages_subject_'.$lang]; ?></option>
								<?php } ?>
								</select>
							</div>

							<div class="clearfix"></div>

							<div class="col-sm-12 bottommargin">
								<label for="template-contactform-message">Upload CV <small>*</small></label>
								<input type="file" id="template-contactform-cvfile" name="template-contactform-cvfile" value="" class="required sm-form-control" />
							</div>

							<div class="col-sm-12 bottommargin">
								<label for="template-contactform-message">Message <small>*</small></label>
								<textarea class="sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
							</div>

							<div class="col-sm-12 bottommargin">
								<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
							</div>

						</form>

						

					</div><!-- .postcontent end -->

					<!-- Sidebar
					============================================= -->
					<div class="col-sm-4 nobottommargin">

						<address>
							<strong>สำนักงาน:</strong><br>
							เลขที่ 130/149 หมู่ 3 ต.วังจุฬา อ.วังน้อย จ.พระนครศรีอยุธยา 13170
						</address>
						<abbr title="Phone Number"><strong>เบอร์โทรศัพท์:</strong></abbr> 035-721445-7, 063-2049077-8<br>
						<abbr title="Fax"><strong>โทรสาร:</strong></abbr> 035-721743<br>
						<abbr title="Email Address"><strong>อีเมล์:</strong></abbr> sale@thpnetwork.com<br><br>

						<section id="google-map" class="gmap" style="height: 350px;"></section>

					</div><!-- .sidebar end -->

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
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu3BLJrKvzCcxZpE2QiHiw3RknIl8oQ54&callback=initMap"></script>
	<script type="text/javascript" src="<?php echo $baseUrl."/assets/front_end/js/jquery.gmap.js"; ?>"></script>
	<script type="text/javascript">

		jQuery('#google-map').gMap({

			address: '14.2424027,100.7534794',
			maptype: 'ROADMAP',
			zoom: 16,
			markers: [
				{
					address: "14.2424027,100.7534794",
					html: '<div style="width: 200px;"><p>สำนักงาน: Thai Herb Shop<br>เลขที่ 130/149 หมู่ 3 ต.วังจุฬา อ.วังน้อย จ.พระนครศรีอยุธยา 13170<p></div>',
					icon: {
						image: "<?php echo $baseUrl; ?>/assets/front_end/images/map-icon-red.png",
						iconsize: [32, 39],
						iconanchor: [32,39]
					}
				}
			],
			doubleclickzoom: false,
			controls: {
				panControl: true,
				zoomControl: true,
				mapTypeControl: true,
				scaleControl: false,
				streetViewControl: false,
				overviewMapControl: false
			}

		});

	</script>
    <script src="<?php echo $baseUrl; ?>/assets/front_end/js/bootstrap.min.js"></script>
     <!-- <script src="js/jquery.flexslider-min.js"></script>  -->
    <script src="<?php echo $baseUrl; ?>/assets/front_end/js/jquery.fancybox.pack.js"></script>
    <script src="<?php echo $baseUrl; ?>/assets/front_end/js/jquery.waypoints.min.js"></script>
    <!-- <script src="js/retina.min.js"></script> -->
    <script src="<?php echo $baseUrl; ?>/assets/front_end/js/modernizr.js"></script>
    <script src="<?php echo $baseUrl; ?>/assets/front_end/js/materialize.js"></script>  
	<script src="<?php echo $baseUrl; ?>/assets/front_end/js/main.js"></script>
    <script src="<?php echo $baseUrl; ?>/assets/front_end/js/jquery.validate.min.js"></script>
	
	<script type="text/javascript" src="<?php echo $baseUrl; ?>/assets/front_end/js/plugins.js"></script>
    
	<script type="text/javascript">
		$("#template-contactform").validate();
	</script>

    </body>
</html>