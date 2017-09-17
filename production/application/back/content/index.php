<?php

	if (isset($_SESSION[_ss . 'msg_result'])) {
    $msg_result = $_SESSION[_ss . 'msg_result'];
    unset($_SESSION[_ss . 'msg_result']);
	} else {
		$msg_result = false;
	}
/*
 * php code///////////**********************************************************
 */
$content_type = $_GET['id'];
if($content_type == "about"){
	$title_th = "ประวัติความเป็นมา";
	$title_en = "ประวัติความเป็นมา";
	$title = $title_en;
	$menu_about = "active";
} 
// else if($content_type == "supportus"){
// 	$title_th = "สนับสนุนมูลนิธิได้โดย";
// 	$title_en = "Support Us";
// 	$title = $title_en;
// 	$menu_support = "active";
// }


$db = new database();

$option_pw = array(
  "table" => "btview_content",
  "condition" => "officeID='{$_SESSION[_ss . 'officeID']}' AND content_categories='{$content_type}'"
);
$officeID = $_SESSION[_ss . 'officeID'];

$query_pw = $db->select($option_pw);
$rs_pw = $db->get($query_pw);



/*
 * php code///////////**********************************************************
 */

/*
 * header***********************************************************************
 */
require 'template/back/header.php';

/*
 * header***********************************************************************
 */
?>
<!-- daterange picker -->
<link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/admin/plugins/datepicker/datepicker3.css">
<style type="text/css">
label.error {
    color: #b31818;
    font-family: rsuregular;
    font-size: 14px;
    letter-spacing: 0.5px;
    margin: 0;
}
.form-control.error {
    border-color: red;
}
</style>
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        	<?php if ($msg_result == "edit") { ?>
            	    <div id="output" class="callout callout-info animated fadeInUp">Save successfully!</div>
            <?php } ?>
        <section class="content-header">
          <h1 style="text-transform:uppercase;">
            <?php echo $title; ?>
            <small>Form</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Content</li>
            <li class="active">Edit Content</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
				<div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Please enter information as below.</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <!--<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>-->
              </div>
            </div><!-- /.box-header -->
            <!-- form start -->
           <form role="form" id="registration-form" action="<?php echo $baseUrl; ?>/back/content/retEDIT" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
              		 <!-- Custom Tabs -->
 
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab">Thai</a></li>
                  <!-- <li><a href="#tab_2" data-toggle="tab">English</a></li> -->
                  <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                  <div class="row">
                  	<div class="col-md-10">
                        <div class="form-group">
                          <input type="text" class="form-control" disabled="disabled"  placeholder="เรื่อง" name="subject_th" value="<?php echo $title_th; ?>">
                          <input type="hidden" name="content_subject_th" value="<?php echo $title_th; ?>">
                          <input type="hidden" name="content_categories" value="<?php echo $content_type; ?>">
                          <input type="hidden" name="content_id" value="<?php echo $rs_pw['content_id']; ?>">
                        </div>
                        <div class="form-group">
                        	<p>Content</p>
                        	<textarea id="contentTH" name="content_detail_th" rows="15" cols="80"><?php echo $rs_pw['content_detail_th']; ?></textarea>
                        </div>
                        
                    </div>
                  </div>
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                  <div class="row">
                  	<div class="col-md-10">
                        <div class="form-group">
                           <input type="text" class="form-control" disabled="disabled" placeholder="Subject" name="subject_en" value="<?php echo $title_en; ?>">
                           <input type="hidden" name="content_subject_en" value="<?php echo $title_en; ?>">
                        </div>
                        <div class="form-group">
                        	<p>Content</p>
                        	<textarea id="contentEN" name="content_detail_en" rows="15" cols="80"><?php echo $rs_pw['content_detail_en']; ?></textarea>
                        </div>
                    </div>
                 </div>
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- nav-tabs-custom -->   
              
              		<?php 
						
						if($content_type == 'contact') { 
							$option_gmap = array(
									"table" => "bt_gmap",
									"condition" => "officeID='{$officeID}'"
							);
							$query_gmap = $db->select($option_gmap);
							$rs_map = $db->get($query_gmap);
					    ?>
              <div class="form-group col-md-7">
                    <label>พิกัด Google Map</label>
                      <input type="text" class="form-control" id="gmapcode" placeholder="พิกัด Google Map" name="gmap_code" value="<?php echo $rs_map['gmap_code']; ?>">
                </div>
                
              <?php } ?>
                      
               <input type="hidden" name="officeID" value="<?php echo $_SESSION[_ss . 'officeID']; ?>" />
                   	
                              
             </div>
                <!-- /.col -->
                
                
                <!-- /.col -->
              </div><!-- /.row -->
             </div><!-- /.box-body -->
               <div class="box-footer">
               	<div class="row">
               	 <div class="col-md-10 text-right">
               		<!-- <button class="btn btn-default" type="reset">Reset</button> -->
                    <button type="submit" class="btn btn-primary">Save</button>
                 </div>
               </div>
               </div>
          	</form>
            
            <div class="box-footer"></div>
          </div><!-- /.box -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

	<?php
    /*
     * footer***********************************************************************
     */
    	require 'template/back/footer.php';
    /*
     * footer***********************************************************************
     */
     ?>
    
    <!-- CK Editor -->
    <script src="<?php echo $baseUrl; ?>/assets/admin/plugins/ckeditor/ckeditor.js"></script>
    
    <script src="<?php echo $baseUrl; ?>/assets/admin/js/jquery.validate.js"></script> 
   
    <script src="<?php echo $baseUrl; ?>/assets/admin/plugins/datepicker/bootstrap-datepicker.js"></script>
     <!-- AdminLTE App -->
	<script src="<?php echo $baseUrl; ?>/assets/admin/dist/js/app.min.js"></script>
    
    <script>	
	
		
      $(function () {
        $('#registration-form').validate();
        
        CKEDITOR.replace("contentTH");
        CKEDITOR.replace("contentEN");
      });
    </script>

  </body>
</html>