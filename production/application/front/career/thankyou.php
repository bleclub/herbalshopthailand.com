<?php 
if($_GET['job_id'] <> 'success'){
    header('Location: '.$baseUrl);
}
?>

<!-- Header -->
<?php
    $title = 'Thank you for your interest in working with us! | Herbalshop Thailand';
    $description = 'Herbalshop Thailand';
    $keywords = 'Herbalshop Thailand';
    
    require 'template/front/header.php';
    require 'controllers/front/career_page.php';
	// require 'controllers/front/home.php';
?>

<?php require 'template/front/menu.php'; ?>



<!-- Content -->

<!--Title Section  -->
<section id="title_page" class="title_page parallax-container thankyou">
    <div class="container">
        <div class="parallax"><img src="<?php echo $baseUrl; ?>/assets/front_end/images/bg_title_career.jpg"></div>
        <div class="text-left">
            <h1 style="color: #282828;">Thank you for your interest in working with us!</h1>
            <p  style="color: #282828;">ขอบคุณสำหรับความสนใจที่จะเข้าร่วมกับเรา ทางเราได้รับข้อมูลของท่านเรียบร้อย และจะติดต่อกลับในเร็วที่สุด</p>
            <!-- <a href="#" class="btn btn-large">อ่านเพิ่มเติม &nbsp;&nbsp; ></a> -->
            <ol class="breadcrumb">
                <li><a href="<?php echo $baseUrl.'/'.$lang; ?>">Home</a></li>
                <li><a href="<?php echo $baseUrl.'/'.$lang; ?>/career">Career</a></li>
                <li class="active">Thank you</li>
            </ol>
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
        $("#template-contactform-footer").validate();
	</script>

    </body>
</html>