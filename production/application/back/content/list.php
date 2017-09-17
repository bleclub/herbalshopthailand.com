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
if($content_type == "law"){
	$title_th = "กฎหมาย/ระเบียบ";
	$title_en = "Law";
	$title = $title_th." - ".$title_en;
	$menu_about = "active";
	$menu_law = "active";
} 
else if($content_type == "affirmative"){
	$title_th = "คำรับรองการปฏิบัติราชการ";
	$title_en = "Affirmative Role of Government";
	$title = $title_th." - ".$title_en;
	$menu_about = "active";
	$menu_affirmative = "active";
}
else if($content_type == "policy"){
	$title_th = "นโยบายการปฏิบัติงาน";
	$title_en = "Policy of Practice";
	$title = $title_th." - ".$title_en;
	$menu_about = "active";
	$menu_policy = "active";
}
else if($content_type == "cooperation"){
	$title_th = "ข้อตกลงความร่วมมือ";
	$title_en = "Cooperation Agreement";
	$title = $title_th." - ".$title_en;
	$menu_about = "active";
	$menu_cooperation = "active";
}
else if($content_type == "plan"){
	$title_th = "แผนงาน";
	$title_en = "Plan";
	$title = $title_th." - ".$title_en;
	$menu_about = "active";
	$menu_plan = "active";
}
else if($content_type == "project"){
	$title_th = "โครงการ";
	$title_en = "Project";
	$title = $title_th." - ".$title_en;
	$menu_about = "active";
	$menu_project = "active";
}
else if($content_type == "info-center"){
	$title_th = "ศูนย์ข้อมูลข่าวสาร";
	$title_en = "Information center";
	$title = $title_th." - ".$title_en;
	$menu_other = "active";
	$menu_infocenter = "active";
}

else if($content_type == "doc-press"){
	$title_th = "เอกสารประชาสัมพันธ์";
	$title_en = "Document press release ";
	$title = $title_th." - ".$title_en;
	$menu_other = "active";
	$menu_docpress = "active";
}

else if($content_type == "knowledge"){
	$title_th = "ความรู้การป้องกันและปราบปรามการทุจริต";
	$title_en = "Knowledge to prevent and combat corruption.";
	$title = $title_th." - ".$title_en;
	$menu_other = "active";
	$menu_knowledge = "active";
}

else if($content_type == "form-office"){
	$title_th = "แบบฟอร์มสำนักงาน";
	$title_en = "Forrm for office";
	$title = $title_th." - ".$title_en;
	$menu_other = "active";
	$menu_formoffice = "active";
}

else if($content_type == "doc-practice"){
	$title_th = "เอกสารประกอบการปฏิบัติงาน";
	$title_en = "Documentation Practice";
	$title = $title_th." - ".$title_en;
	$menu_other = "active";
	$menu_docpractice = "active";
}

else if($content_type == "operations-report"){
	$title_th = "รายงานผลการดำเนินงาน";
	$title_en = "Operations report";
	$title = $title_th." - ".$title_en;
	$menu_report = "active";
	$menu_oreport = "active";
}

else if($content_type == "annual-report"){
	$title_th = "รายงานประจำปี";
	$title_en = "Annual report";
	$title = $title_th." - ".$title_en;
	$menu_report = "active";
	$menu_areport = "active";
}

else if($content_type == "contact"){
	$title_th = "ข้อมูลการติดต่อ";
	$title_en = "Contact info";
	$title = $title_th." - ".$title_en;
	$menu_other = "active";
	$menu_contact = "active";
}

else if($content_type == "announce"){
	$title_th = "คำสั่ง/ประกาศ(ศอตช.)";
	$title_en = "Announce(CNAC)";
	$title = $title_th." - ".$title_en;
	$menu_about = "active";
	$menu_announce = "active";
}


$db = new database();
if($_SESSION[_ss . 'levelaccess'] == 'superadmin' || $_SESSION[_ss . 'levelaccess'] == 'editor'){
	$sql_content = "select * from btview_content where content_categories = '$content_type' ORDER BY content_createdate DESC";
} else {
	$sql_content = "select * from btview_content where content_categories = '$content_type' and officeID = '".$_SESSION[_ss . 'officeID']."' ORDER BY content_createdate DESC";
}


$query_content = $db->query($sql_content);
$rows_content = $db->rows($query_content);

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
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
      		<?php if ($msg_result == "edit") { ?>
            	    <div id="output" class="callout callout-info animated fadeInUp">คุณได้ทำการแก้ไขเรียบร้อยแล้ว!</div>
            <?php }  else if($msg_result == "delete"){ ?>
					<div id="output" class="callout callout-info animated fadeInUp">คุณได้ลบข้อมูลเรียบร้อยแล้ว!</div>
			<?php }  else if($msg_result == "add"){ ?>
            		<div id="output" class="callout callout-info animated fadeInUp">คุณได้เพิ่มข้อมูลเรียบร้อยแล้ว!</div>
            <?php } ?>
            
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
			<?php echo $title; ?>
            <small>About</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Content</li>
            <li class="active">Main</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Your Page Content Here -->
        	<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>
                  <div class="box-tools pull-right">
                	<a href="<?php echo $baseUrl;?>/back/content/add/<?php echo $content_type; ?>" class="btn btn-box-tool"><i class="fa fa-plus"></i> เพิ่มข้อมูล</a>
                	<!--<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>-->
              	</div>
                </div><!-- /.box-header -->
                
                <div class="box-body" id="table-data">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>วันที่</th>
                        <th>หัวข้อข่าว</th>
                        <th>ผู้บันทึก</th>
                        <th>สำนัก</th>
                        <th>View</th>
                        <th>การจัดการ</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        while ($rs_content = $db->get($query_content)) {
                    ?>
                      <tr>
                        <td><?php echo thaidate($rs_content['content_createdate']); ?></td>
                        <td><?php echo mb_substr($rs_content['content_subject_th'], 0,60, "UTF-8")."..."; ?></td>
                        <td><?php echo $rs_content['title_nameTH'].' '.$rs_content['firstnameTH'].' '.$rs_content['lastnameTH']; ?></td>
                        <td><?php echo $rs_content['officeShortname']; ?></td>
                        <td><?php echo $rs_content['content_view']; ?></td>
                        <td>
                        	<a href="<?php echo $baseUrl; ?>/back/content/edit/<?php echo $content_type."/".$rs_content['content_id']; ?>"><i class="fa fa-edit fa-1x"></i></a>
                            <a class="confirm" title="" href="#" data-toggle="modal" data-target="#deleteModal<?php echo $rs_content['content_id'];?>"><i class="fa fa-trash fa-1x"></i></a>
                            
                            
                       			 <!-- Modal -->
                                    <div class="modal modal-warning fade" id="deleteModal<?php echo $rs_content['content_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">"Warning!</h4>
                                                </div>
                                                <div class="modal-body">
                                                  คลิกที่ "ยืนยัน" เพื่อทำการลบข้อมูล หรือยกเลิก
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline" data-dismiss="modal">ยกเลิก</button>
                                                    <a role="button" class="btn btn-outline" href="<?php echo $baseUrl; ?>/back/content/delete/<?php echo $content_type."/".$rs_content['content_id']; ?>">ยืนยัน ฉันต้องการลบข้อมูลนี้</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </td>
                      </tr>
                    <?php } ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>วันที่</th>
                        <th>หัวข้อข่าว</th>
                        <th>ผู้บันทึก</th>
                        <th>สำนัก</th>
                        <th>View</th>
                        <th>การจัดการ</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
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

	<script src="<?php echo $baseUrl; ?>/template/admin/js/jquery.dataTables.min.js"></script>
   <!-- AdminLTE App -->
	<script src="<?php echo $baseUrl; ?>/template/admin/dist/js/app.min.js"></script>
    
 	<script>
      $(function () {
        $("#example1").DataTable();
      });
    </script>

<?php mysql_close(); ?>

  </body>
</html>