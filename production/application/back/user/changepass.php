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
$title = "Change password - AdminCMS";
$menu_user = "active";
$menu_userhome = "active";

$db = new database();

$option_pw = array(
        "table" => "bt_user",
        "fields" => "username",
        "condition" => "id='{$_SESSION[_ss . 'id']}'"
    );
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
        <?php if ($msg_result == "changepass") { ?>
            <div id="output" class="callout callout-info animated fadeInUp">Save successfully!</div>
        <?php } ?>
        <section class="content-header">
          <h1>
            Change password
            <small>Form</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">User</li>
            <li class="active">Change Password</li>
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
           <form role="form" id="registration-form" action="<?php echo $baseUrl; ?>/back/user/retChangepass" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                  
                      <div class="form-group">
                          <input type="text" class="form-control" id="username" disabled value="<?php echo $rs_pw['username']; ?>" placeholder="Username" name="username">
                          <input type="hidden" name="id" id="userid" value="<?php echo $_SESSION[_ss . 'id']; ?>" >
                      </div>
                       <div class="form-group">
                          <input type="password" class="form-control" id="oldpassword" placeholder="Old Password" name="oldpass" required>
                          <span id="pass-result"></span>
                      </div>
                      <div class="form-group">
                          <input type="password" class="form-control" placeholder="New Password" name="newpassword" id="newpass">
                      </div>
                  	   <div class="form-group">
                          <input type="password" class="form-control" placeholder="Confirm Password" name="confirmpasswod">
                      </div>
                 
                </div>
 
                <!-- /.col -->
              </div><!-- /.row -->
             </div><!-- /.box-body -->
               <div class="box-footer">
               	<div class="row">
               	 <div class="col-md-6">
               		<button class="btn btn-default" type="reset">Reset</button>
                    <button type="submit" class="btn btn-primary pull-right">Save</button>
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

    
    <script src="<?php echo $baseUrl; ?>/assets/admin/js/jquery.validate.js"></script> 
     <!-- AdminLTE App -->
	<script src="<?php echo $baseUrl; ?>/assets/admin/dist/js/app.min.js"></script>
    
    <script>
		
	  $(document).ready(function() {
			var x_timer;    
			$("#oldpassword").keyup(function (e){
				clearTimeout(x_timer);
				var oldpassword = $(this).val();
				x_timer = setTimeout(function(){
					check_pass_ajax(oldpassword);
				}, 1000);
			});
		
		function check_pass_ajax(oldpassword){
			var userid = $('#userid').val();
			$("#pass-result").html('<img src="<?php echo $baseUrl; ?>/assets/admin/img/ajax-loader.gif" />');
			$.post('<?php echo $baseUrl; ?>/ajax/check_pass.php', {'password':oldpassword, 'userid':userid}, function(data) {
			  $("#pass-result").html(data);
			});
		}
		});	
		
		
      $(function () {
		$('#registration-form').validate({
		 rules: {
				newpassword: {
					required: true,
					minlength: 5
				},
				confirmpasswod: {
					required: true,
					minlength: 5,
					equalTo: "#newpass"
				}
			}
		});
      });
    </script>

  </body>
</html>