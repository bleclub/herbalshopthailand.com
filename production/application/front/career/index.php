<!-- Header -->

<?php
    $title = 'Career | Herbalshop Thailand';
    $description = 'Herbalshop Thailand';
    $keywords = 'Herbalshop Thailand';
    
    // $contact_selected = "class='selected'"; // Menu selected
    
    require 'template/front/header.php';
    // require 'controllers/front/career_page.php';
	// require 'controllers/front/home.php';
?>

<?php require 'template/front/menu.php'; ?>



<!-- Content -->

<!--Title Section  -->
<section id="title_page" class="title_page parallax-container">
    <div class="container">
        <div class="parallax"><img src="<?php echo $baseUrl; ?>/assets/front_end/images/bg_title_career.jpg"></div>
        <div class="col-md-12 text-left">
            <h1>Career Opportunities</h1>
            <p>ตำแหน่งงาน</p>
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
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading02">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse02" aria-expanded="false" aria-controls="collapse02">
                    Part-time English teacher
                    </a>
                </h4>
                </div>
                <div id="collapse02" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading02">
                <div class="panel-body">
                    <p>Duties and Responsibilities:</p>
                    <ul>
                        <li>Organizing and preparing agendas and papers for board meetings, committees and annual general meeting (AGMs).</li>
                        <li>Taking minutes, drafting resolutions and relevant documents.</li>
                        <li>Maintaining statutory books, including registers members, directors and secretaries.</li>
                        <li>Maintaining database and all other documents in relations to company secretary and investor relations matters.</li>
                        <li>Liaising with external regulators and advisers, such as lawyers and auditors.</li>
                        <li>Assist team in terms of ensuring department year plan and calendars are being followed and executed as planned.</li>
                    </ul>
                    <a class=" btn btn-lg btn-default" href="<?php echo $base_url."/career/Part-time English teacher"; ?>">Apply Job</a>
                </div>
                </div>
            </div>
            
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading04">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse04" aria-expanded="false" aria-controls="collapse04">
                    Regional Manager
                    </a>
                </h4>
                </div>
                <div id="collapse04" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading04">
                <div class="panel-body">
                <p>Duties and Responsibilities:</p>
                    <ul>
                        <li>Organizing and preparing agendas and papers for board meetings, committees and annual general meeting (AGMs).</li>
                        <li>Taking minutes, drafting resolutions and relevant documents.</li>
                        <li>Maintaining statutory books, including registers members, directors and secretaries.</li>
                        <li>Maintaining database and all other documents in relations to company secretary and investor relations matters.</li>
                        <li>Liaising with external regulators and advisers, such as lawyers and auditors.</li>
                        <li>Assist team in terms of ensuring department year plan and calendars are being followed and executed as planned.</li>
                    </ul>
                    <a class=" btn btn-lg btn-default" href="<?php echo $base_url."/career/Regional Manager"; ?>">Apply Job</a>
                </div>
                </div>
            </div>
            
            
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading04">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse04" aria-expanded="false" aria-controls="collapse04">
                    Regional Manager
                    </a>
                </h4>
                </div>
                <div id="collapse04" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading04">
                <div class="panel-body">
                <p>Duties and Responsibilities:</p>
                    <ul>
                        <li>Organizing and preparing agendas and papers for board meetings, committees and annual general meeting (AGMs).</li>
                        <li>Taking minutes, drafting resolutions and relevant documents.</li>
                        <li>Maintaining statutory books, including registers members, directors and secretaries.</li>
                        <li>Maintaining database and all other documents in relations to company secretary and investor relations matters.</li>
                        <li>Liaising with external regulators and advisers, such as lawyers and auditors.</li>
                        <li>Assist team in terms of ensuring department year plan and calendars are being followed and executed as planned.</li>
                    </ul>
                    <a class=" btn btn-lg btn-default" href="<?php echo $base_url."/career/Regional Manager"; ?>">Apply Job</a>
                </div>
                </div>
            </div>
            
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading05">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse05" aria-expanded="false" aria-controls="collapse05">
                    Regional Manager
                    </a>
                </h4>
                </div>
                <div id="collapse05" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading05">
                <div class="panel-body">
                <p>Duties and Responsibilities:</p>
                    <ul>
                        <li>Organizing and preparing agendas and papers for board meetings, committees and annual general meeting (AGMs).</li>
                        <li>Taking minutes, drafting resolutions and relevant documents.</li>
                        <li>Maintaining statutory books, including registers members, directors and secretaries.</li>
                        <li>Maintaining database and all other documents in relations to company secretary and investor relations matters.</li>
                        <li>Liaising with external regulators and advisers, such as lawyers and auditors.</li>
                        <li>Assist team in terms of ensuring department year plan and calendars are being followed and executed as planned.</li>
                    </ul>
                    <a class=" btn btn-lg btn-default" href="<?php echo $base_url."/career/Regional Manager"; ?>">Apply Job</a>
                </div>
                </div>
            </div>
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