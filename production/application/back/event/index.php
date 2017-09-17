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

$news_type = $_GET['url'];
if($news_type == "event"){
	$title = 'Event - กิจกรรม';
	$menu_event = "active";
} else { 
	header("Location: ".$baseUrl."/cms");
}





$db = new database();
if($_SESSION[_ss . 'levelaccess'] == 'superadmin'){
	$sql_news = "select * from btview_news where news_categories = '$news_type'";
} else {
	$sql_news = "select * from btview_news where news_categories = '$news_type' and officeID = '".$_SESSION[_ss . 'officeID']."'";
}


$query_news = $db->query($sql_news);
$rows_news = $db->rows($query_news);

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
                <div id="output" class="callout callout-info animated fadeInUp">Save successfully!</div>
            <?php }  else if($msg_result == "delete"){ ?>
                <div id="output" class="callout callout-info animated fadeInUp">Deleted successfully!!</div>
            <?php }  else if($msg_result == "add"){ ?>
                <div id="output" class="callout callout-info animated fadeInUp">Added successfully!</div>
            <?php } ?>
            
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
			<?php echo $title; ?>
            <small>Event</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Event</li>
            <li class="active">Main</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Your Page Content Here -->
        	<div class="box">
                <div class="box-header">
                  <!-- <h3 class="box-title">Data Table With Full Features</h3> -->
                  <div class="box-tools pull-right">
                	<a href="<?php echo $baseUrl;?>/back/event/add" class="btn btn-box-tool"><i class="fa fa-plus"></i> Add new event</a>
                	<!--<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>-->
              	</div>
                </div><!-- /.box-header -->
                
                <div class="box-body" id="table-data">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Date create</th>
                        <th>Subject</th>
                        <th>User</th>
                        <th>View</th>
                        <th>Managment</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        while ($rs_news = $db->get($query_news)) {
                    ?>
                      <tr>
                        <td><?php echo thaidate($rs_news['news_createdate']); ?></td>
                        <td><?php if($rs_news['news_subject_th'] <> "") { echo mb_substr($rs_news['news_subject_th'], 0,60, "UTF-8")."..."; } else { echo mb_substr($rs_news['news_subject_en'], 0,60, "UTF-8")."...";  } ?></td>
                        <td><?php echo $rs_news['title_nameTH'].' '.$rs_news['firstnameTH'].' '.$rs_news['lastnameTH']; ?></td>
                        <td><?php echo $rs_news['news_view']; ?></td>
                        <td>
                        	<a href="<?php echo $baseUrl; ?>/back/event/edit/<?php echo $rs_news['news_id']; ?>"><i class="fa fa-edit fa-1x"></i></a>
                            <a class="confirm" title="" href="#" data-toggle="modal" data-target="#deleteModal<?php echo $rs_news['news_id'];?>"><i class="fa fa-trash fa-1x"></i></a>
                            
                            
                       			 <!-- Modal -->
                                    <div class="modal modal-warning fade" id="deleteModal<?php echo $rs_news['news_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">"Warning!</h4>
                                                </div>
                                                <div class="modal-body">
                                                  Click "Confirm" to delete or Cancel
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline" data-dismiss="modal">Cancel</button>
                                                    <a role="button" class="btn btn-outline" href="<?php echo $baseUrl."/back/event/delete/".$rs_news['news_id']; ?>">Confirm</a>
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
                        <th>Date create</th>
                        <th>Subject</th>
                        <th>User</th>
                        <th>View</th>
                        <th>Managment</th>
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

	<script src="<?php echo $baseUrl; ?>/assets/admin/js/jquery.dataTables.min.js"></script>
   <!-- AdminLTE App -->
	<script src="<?php echo $baseUrl; ?>/assets/admin/dist/js/app.min.js"></script>
    
 	<script>
      $(function () {
        $("#example1").DataTable();
      });
    </script>

<?php mysql_close(); ?>

  </body>
</html>