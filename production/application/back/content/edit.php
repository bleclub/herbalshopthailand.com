<?php
/*
 * php code///////////**********************************************************
 */
$content_type = $_GET['status'];
if($content_type == "law"){
	$title_th = "แก้ไขกฎหมาย/ระเบียบ";
	$title_en = "Add Law";
	$title = $title_th." - ".$title_en;
	$menu_about = "active";
	$menu_law = "active";
} 
else if($content_type == "affirmative"){
	$title_th = "แก้ไขคำรับรองการปฏิบัติราชการ";
	$title_en = "Add Affirmative Role of Government";
	$title = $title_th." - ".$title_en;
	$menu_about = "active";
	$menu_affirmative = "active";
}
else if($content_type == "policy"){
	$title_th = "แก้ไขนโยบายการปฏิบัติงาน";
	$title_en = "Add Policy of Practice";
	$title = $title_th." - ".$title_en;
	$menu_about = "active";
	$menu_policy = "active";
}
else if($content_type == "cooperation"){
	$title_th = "แก้ไขข้อตกลงความร่วมมือ";
	$title_en = "Add Cooperation Agreement";
	$title = $title_th." - ".$title_en;
	$menu_about = "active";
	$menu_cooperation = "active";
}
else if($content_type == "plan"){
	$title_th = "แก้ไขแผนงาน";
	$title_en = "Edit Plan";
	$title = $title_th." - ".$title_en;
	$menu_about = "active";
	$menu_plan = "active";
}
else if($content_type == "project"){
	$title_th = "แก้ไขโครงการ";
	$title_en = "Edit Project";
	$title = $title_th." - ".$title_en;
	$menu_about = "active";
	$menu_project = "active";
}
else if($content_type == "info-center"){
	$title_th = "แก้ไขศูนย์ข้อมูลข่าวสาร";
	$title_en = "Edit information center";
	$title = $title_th." - ".$title_en;
	$menu_other = "active";
	$menu_infocenter = "active";
}

else if($content_type == "doc-press"){
	$title_th = "แก้ไขเอกสารประชาสัมพันธ์";
	$title_en = "Edit document press release ";
	$title = $title_th." - ".$title_en;
	$menu_other = "active";
	$menu_docpress = "active";
}

else if($content_type == "knowledge"){
	$title_th = "แก้ไขความรู้การป้องกันและปราบปรามการทุจริต";
	$title_en = "Edit knowledge to prevent and combat corruption.";
	$title = $title_th." - ".$title_en;
	$menu_other = "active";
	$menu_knowledge = "active";
}

else if($content_type == "form-office"){
	$title_th = "แก้ไขแบบฟอร์มสำนักงาน";
	$title_en = "Edit form for office";
	$title = $title_th." - ".$title_en;
	$menu_other = "active";
	$menu_formoffice = "active";
}

else if($content_type == "doc-practice"){
	$title_th = "แก้ไขเอกสารประกอบการปฏิบัติงาน";
	$title_en = "Edit documentation Practice";
	$title = $title_th." - ".$title_en;
	$menu_other = "active";
	$menu_docpractice = "active";
}
else if($content_type == "operations-report"){
	$title_th = "แก้ไขรายงานผลการดำเนินงาน";
	$title_en = "Edit operations report";
	$title = $title_th." - ".$title_en;
	$menu_report = "active";
	$menu_oreport = "active";
}

else if($content_type == "annual-report"){
	$title_th = "แก้ไขรายงานประจำปี";
	$title_en = "Edit annual report";
	$title = $title_th." - ".$title_en;
	$menu_report = "active";
	$menu_areport = "active";
}

else if($content_type == "contact"){
	$title_th = "ข้อมูลการติดต่อ";
	$title_en = "Contact information";
	$title = $title_th." - ".$title_en;
	$menu_other = "active";
	$menu_contact = "active";
}

else if($content_type == "announce"){
	$title_th = "แก้ไขคำสั่ง/ประกาศ(ศอตช.)";
	$title_en = "Edit Announce(CNAC)";
	$title = $title_th." - ".$title_en;
	$menu_about = "active";
	$menu_announce = "active";
}



$db = new database();

if($_SESSION[_ss . 'levelaccess'] == "admin"){
$option_pw = array(
        "table" => "btview_content",
        "condition" => "officeID='{$_SESSION[_ss . 'officeID']}' AND content_id='{$_GET['id']}' AND content_categories='{$content_type}'"
 );
$query_pw = $db->select($option_pw);
$rows_pw = $db->rows($query_pw);
$rs_pw = $db->get($query_pw);
} else if($_SESSION[_ss . 'levelaccess'] == "superadmin" || $_SESSION[_ss . 'levelaccess'] == "editor"){
	
$option_pw = array(
        "table" => "btview_content",
        "condition" => "content_id='{$_GET['id']}' AND content_categories='{$content_type}'"
 );
$query_pw = $db->select($option_pw);
$rows_pw = $db->rows($query_pw);
$rs_pw = $db->get($query_pw);	
} 




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
<link rel="stylesheet" href="<?php echo $baseUrl; ?>/template/admin/plugins/datepicker/datepicker3.css">
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
        <section class="content-header">
          <h1>
            <?php echo $title; ?>
            <small>Form</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">content</li>
            <li class="active">Add content</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
				<div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">กรุณากรอกข้อมูลด้านล่าง</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <!--<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>-->
              </div>
            </div><!-- /.box-header -->
            <!-- form start -->
           <form role="form" id="registration-form" action="<?php echo $baseUrl; ?>/back/content/retADD" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
              		 <!-- Custom Tabs -->
			
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab">ภาษาไทย</a></li>
                  <li><a href="#tab_2" data-toggle="tab">ภาษาอังกฤษ</a></li>
                  <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                </ul>
               
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                  <div class="row">
                  <?php if($content_type != 'contact'){ ?>
                  	<div class="col-md-10">
                             <div class="form-group">
                                 <textarea placeholder="ชื่อเรื่อง" rows="3" class="form-control" name="content_subject_th" required><?php echo $rs_pw['content_subject_th']; ?></textarea>
                                 <input type="hidden" name="content_categories" value="<?php echo $content_type; ?>">
                                 <input type="hidden" name="content_id" value="<?php echo $_GET['id']; ?>">
                            </div>
                    </div>
                  <?php } else { ?>
                    <div class="col-md-10">
                        <div class="form-group">
                          <input type="text" class="form-control" disabled="disabled"  placeholder="เรื่อง" name="subject_th" value="<?php echo $title_th; ?>">
                          <input type="hidden" name="content_subject_th" value="<?php echo $title_th; ?>">
                          <input type="hidden" name="content_categories" value="<?php echo $content_type; ?>">
                          <input type="hidden" name="content_id" value="<?php echo $_GET['id']; ?>">
                        </div>
                        <div class="form-group">
                        	<p>เนื้อหา</p>
                        	<textarea id="contentTH" name="content_detail_th" rows="15" cols="80"><?php echo $rs_pw['content_detail_th']; ?></textarea>
                        </div>
                        
                    </div>
                    
                   <?php } ?> 
                    
                  </div>
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                  <div class="row">
                  <?php if($content_type != 'contact'){ ?>
                  	<div class="col-md-10">
                  
                        <div class="form-group">
                          	<textarea placeholder="Subject" rows="3" class="form-control" name="content_subject_en" required><?php echo $rs_pw['content_subject_th']; ?></textarea>
                        </div>
                        
                    </div>
                  <?php } else { ?>
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
				  
                  <?php } ?>	  
					 
                 </div>
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content --> 
              </div><!-- nav-tabs-custom -->
			
            
            		    <?php 
						
						if($content_type == 'contact') { 
							$option_gmap = array(
									"table" => "bt_gmap",
									"condition" => "officeID='{$rs_pw['officeID']}'"
							);
							$query_gmap = $db->select($option_gmap);
							$rs_map = $db->get($query_gmap);
						?>
						  <div class="form-group col-md-7">
								<label>พิกัด Google Map</label>
							   <input type="text" class="form-control" id="gmapcode" placeholder="พิกัด Google Map" name="gmap_code" value="<?php echo $rs_map['gmap_code']; ?>">
						  </div>
						  
						<?php } ?>
            
            		  
					  <?php if($_SESSION[_ss . 'levelaccess'] == 'superadmin' || $_SESSION[_ss . 'levelaccess'] == 'editor'){ 
                            $sql_office = "select * from bt_office";
                            $query_office = $db->query($sql_office);
                      ?>
                      <div class="form-group col-md-7">
                      <label>สังกัด</label>
                      <select class="form-control select2" id="formoffice" name="officeID" style="width: 100%;" required>
                          <option value="" >-สังกัด-</option>
                          <?php
                                    while ($rs_office = $db->get($query_office)) {
   										 if($rs_pw['officeID'] == $rs_office['officeID']){ 
                                    		echo '<option value="'.$rs_office['officeID'].'" selected>'.$rs_office['officeNameTH'].'</option>';
										}
										else {
											echo '<option value="'.$rs_office['officeID'].'">'.$rs_office['officeNameTH'].'</option>';	
										}	
                                    }
                          ?>
                      </select>
                      </div>
                      <?php } else { ?>
                      <input type="hidden" name="officeID" value="<?php echo $_SESSION[_ss . 'officeID']; ?>" />
                      <?php } ?>
                   	
            		  <?php 
                            
                            if($content_type != 'contact') {    
                      ?>
                      <div class="form-group col-md-7">
                              <input type="text" class="form-control" id="ckfinder-input-1" value="<?php echo $rs_pw['content_link']; ?>" placeholder="Link file" name="content_link" required><br>
                              <a class="btn bg-navy btn-flat" id="ckfinder-modal-1" onClick="selectFileWithCKFinder();" >Browse Server</a>
                      </div>
                      <?php } ?>
                   
              		
 
             </div>
                <!-- /.col -->
                
                
                <!-- /.col -->
              </div><!-- /.row -->
             </div><!-- /.box-body -->
               <div class="box-footer">
               	<div class="row">
               	 <div class="col-md-10 text-right">
               		<button class="btn btn-default" type="reset">รีเซ็ต</button>
                    <button type="submit" class="btn btn-primary">บันทึก</button>
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
    <script src="<?php echo $baseUrl; ?>/template/admin/plugins/ckeditor/ckeditor.js"></script>
    <script src="<?php echo $baseUrl; ?>/template/admin/plugins/ckfinder/ckfinder.js"></script>
    
    <script src="<?php echo $baseUrl; ?>/template/admin/js/jquery.validate.js"></script> 
   
    <script src="<?php echo $baseUrl; ?>/template/admin/plugins/datepicker/bootstrap-datepicker.js"></script>
     <!-- AdminLTE App -->
	<script src="<?php echo $baseUrl; ?>/template/admin/dist/js/app.min.js"></script>
    
    <script>	
		
      $(function () {
		$('#registration-form').validate();
		
		
		CKEDITOR.replace('contentTH', {
			filebrowserBrowseUrl: '<?php echo $baseUrl;?>/template/admin/plugins/ckfinder/ckfinder.html',
			filebrowserUploadUrl: '<?php echo $baseUrl;?>/template/admin/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
		});
		CKEDITOR.replace('contentEN', {
			filebrowserBrowseUrl: '<?php echo $baseUrl;?>/template/admin/plugins/ckfinder/ckfinder.html',
			filebrowserUploadUrl: '<?php echo $baseUrl;?>/template/admin/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
		});
      });
	  
		function selectFileWithCKFinder( elementId ) {
			CKFinder.modal( {
				chooseFiles: true,
				width: 800,
				height: 600,
				onInit: function( finder ) {
					finder.on( 'files:choose', function( evt ) {
						var file = evt.data.files.first();
						var output = document.getElementById('ckfinder-input-1');
						output.value = file.getUrl();
					} );
		
					finder.on( 'file:choose:resizedImage', function( evt ) {
						var output = document.getElementById('ckfinder-input-1');
						output.value = evt.data.resizedUrl;
					} );
				}
			} );
		}

		
    </script>

  </body>
</html>