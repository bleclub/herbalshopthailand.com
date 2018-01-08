<?php
/*
 * php code///////////**********************************************************
 */
 
  $title = "Add Banner";
  $menu_banner = "active";




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
        <section class="content-header">
          <h1>
            <?php echo $title; ?>
            <small>Form</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Content</li>
            <li class="active">Add Banner</li>
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
           <form role="form" id="registration-form" action="<?php echo $baseUrl; ?>/back/banner/retADD" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
              		 <!-- Custom Tabs -->
			
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab">Thai</a></li>
                  <li><a href="#tab_2" data-toggle="tab">English</a></li>
                  <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                </ul>
               
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                  <div class="row">
                  	<div class="col-md-10">
                        <div class="form-group">
                          <input type="text" class="form-control"  placeholder="หัวข้อ" name="pages_subject_th" required>   
                          <input type="hidden" name="pages_categories" value="Home-Banner">
                        </div>

                        <div class="form-group">
                            <p>รายละเอียด</p>
                            <textarea id="contentTH" name="pages_content_th" rows="15" cols="80"></textarea>
                        </div>
                    </div>
                  </div>
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                  <div class="row">
                  	<div class="col-md-10">
                        <div class="form-group">
                           <input type="text" class="form-control"  placeholder="Title" name="pages_subject_en" required>
                        </div>

                        <div class="form-group">
                            <p>Detail</p>
                            <textarea id="contentEN" name="pages_content_en" rows="15" cols="80"></textarea>
                        </div>
                    </div>
                 </div>
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content --> 
              </div><!-- nav-tabs-custom -->

              
                <div class="row">
                  	<div class="col-md-6">
                      <div class="form-group">
                        <input type="text" class="form-control"  placeholder="Link (Exp. http://www.yourlink.com)" name="pages_link" required>   
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                            <select class="form-control select2"  name="pages_slide" style="width: 100%;" required>
                              <option value="" selected="SELECTED">- Status -</option>
                              <option value="publish">Publish</option>
                              <option value="unpublish">Unpublish</option>
                          </select>
                      </div>
                     </div>
              </div>
            

                      <div class="form-group" style="float:left; border:1px solid #CACACA; padding:10px;">
                              <label for="exampleInputFile">Picture</label>
                              <input type="file" name="image" id="exampleInputFile">
                              <p class="help-block">Browse your photo and recommended sizing: 1366 x 768px</p>
                      </div> 
             </div>
                    
                    <div class="form-group col-md-3" style="flex:left" required="" aria-required="true"> 
                            <input type="hidden" name="officeID" value="<?php echo $_SESSION[_ss . 'officeID']; ?>" />
                    </div>
                     <!-- /.col -->
                 	<!-- <div class="form-group col-md-3">
                      	<a class="confirm btn bg-navy btn-flat" title="" href="#" data-toggle="modal" data-target="#addbanner">Add banner</a>	
                       <div id="output"></div>
                    </div>   -->
                
                <!-- /.col -->
              </div><!-- /.row -->
             </div><!-- /.box-body -->
               <div class="box-footer">
               	<div class="row">
               	 <div class="col-md-10 text-right">
               		<button class="btn btn-default" type="reset">Reset</button>
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
    
    <script type="text/javascript" src="<?php echo $baseUrl; ?>/assets/admin/js/jquery.form.min.js"></script>
 
    <script type="text/javascript">
		//customize values to suit your needs.
		var max_file_size 		= 8048576; //maximum allowed file size
		var allowed_file_types 	= ['image/png', 'image/gif', 'image/jpeg', 'image/pjpeg', 'image/JPG']; //allowed file types
		var message_output_el 	= 'output'; //ID of an element for response output
		var loadin_image_el 	= 'loading-img'; //ID of an loading Image element
		
		//You may edit below this line but not necessarily
		var options = { 
			//dataType:  'json', //expected content type
			target: '#' + message_output_el,   // target element(s) to be updated with server response 
			beforeSubmit: before_submit,  // pre-submit callback 
			success: after_success,  // post-submit callback 
			resetForm: true        // reset the form after successful submit 
		}; 
		
		$('#upload_form').submit(function(){
			$(this).ajaxSubmit(options); //trigger ajax submit
			return false; //return false to prevent standard browser submit
		}); 
		
		function before_submit(formData, jqForm, options){
			var proceed = true;
			var error = [];	
			/* validation ##iterate though each input field
			if you add extra text or email fields just add "required=true" attribute for validation. */
			$(formData).each(function(){ 
				
				//check any empty required file input
				if(this.type == "file" && this.required == true && !$.trim(this.value)){ //check empty text fields if available
					error.push( this.name + " is empty!");
					proceed = false;
				}
				
				//check any empty required text input
				if(this.type == "text" && this.required == true && !$.trim(this.value)){ //check empty text fields if available
					error.push( this.name + " is empty!");
					proceed = false;
				}
				
				//check any invalid email field
				var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
				if(this.type == "email" && !email_reg.test($.trim(this.value))){ 
					error.push( this.name + " contains invalid email!");
					proceed = false;          
				}
				
				//check invalid file types and maximum size of a file
				if(this.type == "file"){
					if(window.File && window.FileReader && window.FileList && window.Blob){
						if(this.value !== ""){
							if(allowed_file_types.indexOf(this.value.type) === -1){
								error.push( "<b>"+ this.value.type + "</b> is unsupported file type!");
								proceed = false;
							}
			
							//allowed file size. (1 MB = 1048576)
							if(this.value.size > max_file_size){ 
								error.push( "<b>"+ bytes_to_size(this.value.size) + "</b> is too big! Allowed size is " + bytes_to_size(max_file_size));
								proceed = false;
							}
						}
					}else{
						error.push( "Please upgrade your browser, because your current browser lacks some new features we need!");
						proceed = false;
					}
				}
				
			});	
			
			$(error).each(function(i){ //output any error to element
				$('#' + message_output_el).html('<div class="error">'+error[i]+"</div>");
			});	
			
			if(!proceed){
				return false;
			}
			
			$('#' + loadin_image_el).show();
		}
		
		//Callback function after success
		function after_success(data){
			$('#' + message_output_el).html(data);
			$('#' + loadin_image_el).hide();
		}
		
		//Callback function to format bites bit.ly/19yoIPO
		function bytes_to_size(bytes){
		   var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
		   if (bytes == 0) return '0 Bytes';
		   var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
		   return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
		}
		</script>
        
    <script>	
		
      $(function () {
		    $('#registration-form').validate();
        $('#createdate').datepicker({format: 'yyyy-mm-dd'});
        CKEDITOR.replace('contentTH');
		    CKEDITOR.replace('contentEN');
      });
    </script>

  </body>
</html>