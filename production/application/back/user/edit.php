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
      $db = new database();
      $menu_home = "active";

	
			$option_user = array(
			"table" => "btview_user",
			"condition" => "id='{$_GET['id']}'"
			);
			$query_user = $db->select($option_user);
			$rows_pw = $db->rows($query_user);
			$rs_user = $db->get($query_user);
			$sql_group = "select * from bt_group where officeID='".$rs_user['officeID']."'";
			$query_group = $db->query($sql_group);




$title = 'Edit Profile : ' . $rs_user['firstnameEN']." ".$rs_user['lastnameEN'];
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
        <?php if ($msg_result == "edit") { ?>
            <div id="output" class="callout callout-info animated fadeInUp">Save successfully!</div>
        <?php } ?>
        <section class="content-header">
          <h1>
            Edit profile: <?php echo $rs_user['title_nameEN']." ".$rs_user['firstnameEN']." ".$rs_user['lastnameEN']; ?>
            <small>Form</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">User</li>
            <li class="active">Edit user</li>
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
           <form role="form" id="registration-form" action="<?php echo $baseUrl; ?>/back/user/retEdit" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="row">
                <div class="col-md-6">

                	

                  <div class="form-group">
                    <select class="form-control select2" name="title" style="width: 100%;" required>
                      <?php
					  			$sql_title = "select * from bt_title";
								$query_title = $db->query($sql_title);
                                while ($rs_title = $db->get($query_title)) {
										if($rs_user['title_id'] == $rs_title['title_id']){ 
											echo '<option value="'.$rs_title['title_id'].'" selected>'.$rs_title['title_nameEN'].'</option>';	
										} else {
											echo '<option value="'.$rs_title['title_id'].'">'.$rs_title['title_nameEN'].'</option>';	
										}
                                }
                      ?>
                    </select>
                  </div><!-- /.form-group -->
                  <div class="form-group">
                      <input type="text" class="form-control" value="<?php echo $rs_user['firstnameTH'];?>"  placeholder="First Name(TH)" name="firstnameTH" required>
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-control" value="<?php echo $rs_user['lastnameTH'];?>"   placeholder="Last Name(TH)" name="lastnameTH" required>
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-control" value="<?php echo $rs_user['firstnameEN'];?>"    placeholder="First Name(EN)" name="firstnameEN" required>
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-control"  value="<?php echo $rs_user['lastnameEN'];?>"   placeholder="Last Name(EN)" name="lastnameEN" required>
                  </div>
                 <!-- <div class="form-group">
                      <input type="text" class="form-control" id="username"  placeholder="Username" name="username" required>
                      <span id="user-result"></span>
                  </div>
                  <div class="form-group">
                      <input type="password" class="form-control" id="exampleInputPassword1 inputBT"   placeholder="Password" name="password" required>
                  </div>-->
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                      </div>
                      <input type="text" class="form-control" value="<?php echo $rs_user['telephone'];?>"  name="telephone" placeholder="Telephone" required>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                      </div>
                      <input type="text" class="form-control" value="<?php echo $rs_user['mobile'];?>"  name="mobile" placeholder="Mobile phone" data-inputmask='"mask": "(999) 999-9999"' data-mask required>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->


                  <div class="form-group">
                  <div class="input-group"><div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                      <input type="email" class="form-control" name="personalEmail" value="<?php echo $rs_user['personalEmail'];?>" placeholder="Email (Example:xxx@gmail.com)" required>
                  </div>
                  </div>
                  <div class="form-group">
                  	  <div class="left"><img src="<?php echo $baseUrl ?>/upload/profile/<?php echo $rs_user['profilePicture'];?>" width="160"></div>
                      <label for="exampleInputFile">Picture profile</label>
                      <input type="file" name="image" id="exampleInputFile">
                      <p class="help-block">Browse file from your computer</p>
                 </div>
                
                   <input type="hidden" name="id" value="<?php echo $rs_user['id'];?>">
				  		    <input type="hidden" name="userType" value="<?php echo $rs_user['userType']; ?>" />
                  
                </div>
                <!-- /.col -->
                
                
                <!-- /.col -->
              </div><!-- /.row -->
             </div><!-- /.box-body -->
               <div class="box-footer">
               	<div class="row">
               	 <div class="col-md-6 text-right">
               		  <a href="<?php echo $baseUrl;?>/back/home"  class="btn btn-default">Cancel</a>&nbsp;&nbsp;
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


	<!-- Select2 -->
    <!--<script src="<?php //echo $baseUrl; ?>/assets/admin/plugins/select2/select2.full.min.js"></script>-->
    <!-- InputMask -->
    <script src="<?php echo $baseUrl; ?>/assets/admin/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="<?php echo $baseUrl; ?>/assets/admin/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="<?php echo $baseUrl; ?>/assets/admin/plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- date-range-picker -->
    <script src="<?php echo $baseUrl; ?>/assets/admin/js/moment.min.js"></script>
    <script src="<?php echo $baseUrl; ?>/assets/admin/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap time picker -->
    <script src="<?php echo $baseUrl; ?>/assets/admin/plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="<?php echo $baseUrl; ?>/assets/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src="<?php echo $baseUrl; ?>/assets/admin/plugins/iCheck/icheck.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo $baseUrl; ?>/assets/admin/plugins/fastclick/fastclick.min.js"></script>
    
    <script src="<?php echo $baseUrl; ?>/assets/admin/js/jquery.validate.js"></script> 
    
    
     <!-- AdminLTE App -->
	<script src="<?php echo $baseUrl; ?>/assets/admin/dist/js/app.min.js"></script>
    
    <script>
		
	  /*$(document).ready(function() {
			var x_timer;    
			$("#username").keyup(function (e){
				clearTimeout(x_timer);
				var user_name = $(this).val();
				x_timer = setTimeout(function(){
					check_username_ajax(user_name);
				}, 1000);
			});
		
		function check_username_ajax(username){
			$("#user-result").html('<img src="<?php //echo $baseUrl; ?>/template/admin/img/ajax-loader.gif" />');
			$.post('<?php //echo $baseUrl; ?>/ajax/check_user.php', {'username':username}, function(data) {
			  $("#user-result").html(data);
			});
		}
		});	*/
		
		$(document).ready(function() {
                $('#formoffice').change(function() {
                    $.ajax({
                        type: 'POST',
                        data: {officeID: $(this).val()},
                        url: '<?php echo $baseUrl; ?>/ajax/check_group.php',
                        success: function(data) {
                            $('#formgroup').html(data);
                        }
                    });
                    return false;
                });
        });
		
      $(function () {
		$('#registration-form').validate();
        
		
		//Initialize Select2 Elements
        //$(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate: moment()
            },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });


        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>

  </body>
</html>