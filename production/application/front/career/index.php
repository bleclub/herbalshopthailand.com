<!-- Header -->

<?php
    $title = 'Career | Herbalshop Thailand';
    $description = 'Herbalshop Thailand';
    $keywords = 'Herbalshop Thailand';
    
    // $contact_selected = "class='selected'"; // Menu selected
    
    require 'template/front/header.php';
    require 'controllers/front/career_page.php';
?>

<?php require 'template/front/menu.php'; ?>



<!-- Content -->

<!--Title Section  -->
<section id="title_page" class="title_page parallax-container">
    <div class="container">
        <div class="parallax"><img src="<?php echo $baseUrl; ?>/assets/front_end/images/bg_title_career.jpg"></div>
        <div class="text-left">
            <h1 style="color: #282828;">Career Opportunities</h1>
            <p style="color: #282828;">ตำแหน่งงาน</p>
            <!-- <a href="#" class="btn btn-large">อ่านเพิ่มเติม &nbsp;&nbsp; ></a> -->
            <ol class="breadcrumb">
                <li><a href="<?php echo $baseUrl; ?>">Home</a></li>
                <li class="active">Career</li>
            </ol>
        </div>
    </div>
</section>

<!-- Content ============================================= -->

<section id="career">
    <div class="container">
        <h3>Career Position</h3>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <?php
                $career_num = 1;
                while ($rs_pages = $db->get($query_pages)) {
            ?>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading0<?php echo $career_num; ?>">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse0<?php echo $career_num; ?>" aria-expanded="false" aria-controls="collapse0<?php echo $career_num; ?>">
                        <?php echo $rs_pages['pages_subject_th']; ?>
                        </a>
                    </h4>
                    </div>
                    <div id="collapse0<?php echo $career_num; ?>" class="panel-collapse collapse <?php if($career_num == 1) { echo 'in'; } ?> " role="tabpanel" aria-labelledby="heading0<?php echo $career_num; ?>">
                    <div class="panel-body">
                        <?php echo $rs_pages['pages_content_th']; ?>
                        <a class=" btn btn-lg btn-default" href="<?php echo $baseUrl."/career/apply/".$rs_pages['pages_link']; ?>">Apply Job</a>
                    </div>
                    </div>
                </div>
                
            <?php 
                 $career_num++;
                 } 
            ?>
        </div>
    </div>
</section>

<!-- #content end -->




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

    </body>
</html>