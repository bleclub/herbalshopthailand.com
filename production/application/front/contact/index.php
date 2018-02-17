<!-- Header -->

<?php
    $title = 'ติดต่อเรา | Herbalshop Thailand';
    $description = 'Herbalshop Thailand';
    $keywords = 'Herbalshop Thailand';
    
    $contact_selected = "class='selected'"; // Menu selected
    
    require 'template/front/header.php';
   
?>

<?php require 'template/front/menu.php'; ?>



<!-- Content -->

<!--Title Section  -->
<section id="title_page" class="title_page parallax-container">
    <div class="container">
        <div class="parallax"><img src="<?php echo $baseUrl; ?>/assets/front_end/images/bg_title_contact.jpg"></div>
        <div class="text-left">
            <h1 style="color: #282828;">Contact Us</h1>
            <p style="color: #282828;">ติดต่อเรา</p>
            <!-- <a href="#" class="btn btn-large">อ่านเพิ่มเติม &nbsp;&nbsp; ></a> -->
            <ol class="breadcrumb">
                <li><a href="<?php echo $baseUrl.'/'.$lang; ?>">Home</a></li>
                <li class="active">Contact Us</li>
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

						<h3>Send us an Email</h3>

					
						<form class="nobottommargin" enctype="multipart/form-data" id="template-contactform" name="template-contactform" action="<?php echo $baseUrl.'/'.$lang.'/contact/sendmail/'; ?>" method="post">

							<div class="form-process"></div>

							<div class="col-sm-4 bottommargin">
								<label for="template-contactform-name">Name <small>*</small></label>
								<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
							</div>

							<div class="col-sm-4 bottommargin">
								<label for="template-contactform-email">Email <small>*</small></label>
								<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
							</div>

							<div class="col-sm-4 bottommargin">
								<label for="template-contactform-phone">Phone</label>
								<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
							</div>

							<div class="clearfix"></div>

							<div class="col-sm-12 bottommargin">
								<label for="template-contactform-subject">Subject <small>*</small></label>
								<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
							</div>

							<!-- <div class="col-sm-4">
								<label for="template-contactform-service">Services</label>
								<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
									<option value="">-- Select One --</option>
									<option value="Wordpress">Wordpress</option>
									<option value="PHP / MySQL">PHP / MySQL</option>
									<option value="HTML5 / CSS3">HTML5 / CSS3</option>
									<option value="Graphic Design">Graphic Design</option>
								</select>
							</div> -->

							<div class="clearfix"></div>

							<!-- <div class="col-sm-12 bottommargin">
								<label for="template-contactform-message">Upload CV <small>*</small></label>
								<input type="file" id="template-contactform-cvfile" name="template-contactform-cvfile" value="" class="required sm-form-control" />
							</div> -->

							<div class="col-sm-12 bottommargin">
								<label for="template-contactform-message">Message <small>*</small></label>
								<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
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
							<strong><?php echo translate('สำนักงาน'); ?>:</strong><br>
							เลขที่ 130/149 หมู่ 3 ต.วังจุฬา อ.วังน้อย จ.พระนครศรีอยุธยา 13170
						</address>
						<abbr title="Phone Number"><strong><?php echo translate('เบอร์โทรศัพท์'); ?>:</strong></abbr> 035-721445-7, 063-2049077-8<br>
						<abbr title="Fax"><strong><?php echo translate('โทรสาร'); ?>:</strong></abbr> 035-721743<br>
						<abbr title="Email Address"><strong><?php echo translate('อีเมล์'); ?>:</strong></abbr> sale@thpnetwork.com <br><br>

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