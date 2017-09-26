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

$pages_type = $_GET['url'];
if($pages_type == "product"){
	$title = 'Product List - สินค้า';
	$menu_product = "active";
} else { 
	header("Location: ".$baseUrl."/cms");
}


$db = new database();

$sql_pages = "select * from btview_pages where pages_categories = '$pages_type' order by pages_createdate desc";



$query_pages = $db->query($sql_pages);
$rows_pages = $db->rows($query_pages);

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
            <small>Product</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Pages</li>
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
                	<a href="<?php echo $baseUrl;?>/back/product/add" class="btn btn-box-tool"><i class="fa fa-plus"></i> เพิ่มสินค้า</a>
                	<!--<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>-->
              	</div>
                </div><!-- /.box-header -->
                
                <div class="box-body" id="table-data">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Date</th>
                        <th>Product Name</th>
                        <th>User</th>
                        <th>Managment</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        while ($rs_pages = $db->get($query_pages)) {
                    ?>
                      <tr>
                        <td><?php echo dateFormat($rs_pages['pages_date']); ?></td>
                        <td><?php echo $rs_pages['pages_subject_th']; ?></td>
                        <td><?php echo $rs_pages['title_nameTH'].' '.$rs_pages['firstnameTH'].' '.$rs_pages['lastnameTH']; ?></td>
                        <td>
                        	<a href="<?php echo $baseUrl; ?>/back/product/edit/<?php echo $rs_pages['pages_id']; ?>"><i class="fa fa-edit fa-1x"></i></a>
                            <a class="confirm" title="" href="#" data-toggle="modal" data-target="#deleteModal<?php echo $rs_pages['pages_id'];?>"><i class="fa fa-trash fa-1x"></i></a>
                            
                            
                       			 <!-- Modal -->
                                    <div class="modal modal-warning fade" id="deleteModal<?php echo $rs_pages['pages_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                                    <a role="button" class="btn btn-outline" href="<?php echo $baseUrl."/back/product/delete/".$rs_pages['pages_id']; ?>">Confirm</a>
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
                        <th>Date</th>
                        <th>Position</th>
                        <th>User</th>
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
        // $("#example1").DataTable();

        $('#example1').DataTable({
            "order": [[ 1, "desc" ]]
        });
      });
    </script>

<?php mysql_close(); ?>

  </body>
</html>