<?php
/*
 * include file start***********************************************************
 */

/*
 * php code///////////**********************************************************
 */
if (isset($_SESSION[_ss . 'msg_result'])) {
    $msg_result = $_SESSION[_ss . 'msg_result'];
    unset($_SESSION[_ss . 'msg_result']);
} else {
    $msg_result = false;
}

$title = 'Manage Media - Herbalshopthailand.com';

$db = new database();
$sql_pd = "SELECT * FROM bt_media WHERE media_type = 'media' ";

$sql_pd .= isset($_GET['search']) ? " AND name LIKE '%{$_GET['search']}%' " : "";

$sql_pd .= " order by createdate DESC";
 


$query_pd = $db->query($sql_pd);
$rows_pd = $db->rows($query_pd);

$menu_media = "active";
 
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
<style type="text/css">
	
.bt_delete {
    float: left;
    margin: 0px 0 0 -60px;
}

</style>

<link href="<?php echo $baseUrl; ?>/mediaupload/css/uploadfilemulti.css" rel="stylesheet">
<link href="<?php echo $baseUrl; ?>/assets/admin/css/magnific-popup.css" rel="stylesheet">

 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <?php echo $title; ?>
            <small>Form</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Media</li>
            <li class="active">Manage media</li>
          </ol>
        </section>
         <section class="content">
		   <div class="box box-default">
            <div class="box-header with-border">
              <!-- <h3 class="box-title">Please enter information as below.</h3> -->
              <div class="box-tools pull-right">
                <!-- <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button> -->
                <!--<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>-->
              </div>
            </div><!-- /.box-header -->
            <div class="text-center" style="margin:20px 0 0"><a role="button" class="btn" href="<?php echo $baseUrl; ?>/back/media"><i class="glyphicon glyphicon-refresh"></i> Refresh</a></div>
         	<div id="mulitplefileuploader">
            	Upload
            </div>
            <div id="status"></div>
            <div class="clearfix"></div>
            <div class="box-media" style="margin:0 50px; width:100%;">
            <?php while($rs_media = $db->get($query_pd)) { ?>
                <a href="<?php echo $baseUrl; ?>/mediaupload/upload/<?php echo $rs_media['filename'];?>" class="popup_media" title="<?php echo $baseUrl; ?>/mediaupload/upload/<?php echo $rs_media['filename'];?>"><div style="background:url(<?php echo $baseUrl; ?>/mediaupload/upload/<?php echo $rs_media['filename'];?>); background-size:cover; background-position:center; height:150px; width:150px; margin:0 8px 16px; float:left;"> </div></a>
                <a class="bt_delete btn btn-danger btn-xs confirm" title="" href="#" data-toggle="modal" data-target="#deleteModal<?php echo $rs_media['id'];?>"><i class="glyphicon glyphicon-remove"></i> Delete</a>
                <!-- Modal -->
                <div class="modal fade" id="deleteModal<?php echo $rs_media['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel">Alert!!</h4>
                            </div>
                            <div class="modal-body">
                                Confirm you want to delete this picture?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancle</button>
                                <a role="button" class="btn btn-primary" href="<?php echo $baseUrl; ?>/back/media/delete/<?php echo $rs_media['id']; ?>">Yes, Confirm</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
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
mysql_close();
?>
<!-- AdminLTE App -->
 <script src="<?php echo $baseUrl; ?>/assets/admin/dist/js/app.min.js"></script>
<script src="<?php echo $baseUrl; ?>/mediaupload/js/jquery.fileuploadmulti.min.js"></script>
<script src="<?php echo $baseUrl; ?>/assets/admin/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo $baseUrl; ?>/assets/admin/js/magnific-popup-options.js"></script>
<script>

		$(document).ready(function()
		{
		
		var settings = {
			url: "<?php echo $baseUrl;?>/mediaupload/upload.php",
			method: "POST",
			allowedTypes:"jpg,png,gif,doc,pdf,zip",
			fileName: "myfile",
			multiple: true,
			onSuccess:function(files,data,xhr)
			{
				$("#status").html("<font color='green'>Upload is success</font>");
				
			},
			afterUploadAll:function()
			{
				alert("all images uploaded!!");
			},
			onError: function(files,status,errMsg)
			{		
				$("#status").html("<font color='red'>Upload is Failed</font>");
			}
		}
		$("#mulitplefileuploader").uploadFile(settings);
		
		});
</script>
<script type="text/javascript">
        $(document).ready(function () {
            $('.search-button').click(function () {
                $('.search-form').toggle();
                return false;
            });
        });
    </script>
</div>
 

  </body>
</html>
