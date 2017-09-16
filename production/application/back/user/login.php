<?php
	if (isset($_SESSION[_ss . 'msg_result'])) {
    $msg_result = $_SESSION[_ss . 'msg_result'];
    unset($_SESSION[_ss . 'msg_result']);
	} else {
		$msg_result = false;
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />
        <!-- Bootstrap -->
    	<link href="<?php echo $baseUrl; ?>/assets/admin/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo $baseUrl; ?>/assets/admin/css/fonts-style.css" rel="stylesheet">

        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $baseUrl; ?>/assets/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $baseUrl; ?>/assets/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $baseUrl; ?>/assets/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $baseUrl; ?>/assets/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $baseUrl; ?>/assets/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $baseUrl; ?>/assets/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $baseUrl; ?>/assets/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $baseUrl; ?>/assets/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $baseUrl; ?>/assets/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $baseUrl; ?>/assets/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $baseUrl; ?>/assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $baseUrl; ?>/assets/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $baseUrl; ?>/assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?php echo $baseUrl; ?>/assets/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?php echo $baseUrl; ?>/assets/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <title>CMS Herbalshopthailand.com</title>
        <style>
            body{
				/* background: rgba(51,51,51,1);
				background: -moz-linear-gradient(left, rgba(51,51,51,1) 0%, rgba(43,42,43,1) 100%);
				background: -webkit-gradient(left top, right top, color-stop(0%, rgba(51,51,51,1)), color-stop(100%, rgba(43,42,43,1)));
				background: -webkit-linear-gradient(left, rgba(51,51,51,1) 0%, rgba(43,42,43,1) 100%);
				background: -o-linear-gradient(left, rgba(51,51,51,1) 0%, rgba(43,42,43,1) 100%);
				background: -ms-linear-gradient(left, rgba(51,51,51,1) 0%, rgba(43,42,43,1) 100%);
				background: linear-gradient(to right, rgba(51,51,51,1) 0%, rgba(43,42,43,1) 100%);
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#333333', endColorstr='#2b2a2b', GradientType=1 ); */
				background-image:url('../../assets/admin/images/bg_page_title.jpg');
				background-size:cover;
			}
			html,body{
				position: relative;
				height: 100%;
			}
			
			.login-container{
				position: relative;
				width: 300px;
				margin: 20% auto;
				padding: 20px 40px 40px;
				text-align: center;
				background: #fff;
				border: 1px solid #ccc;
			}
			
			#output{
				position: absolute;
				width: 300px;
				top: -75px;
				left: 0;
				color: #fff;
				border:0 none;
			}
			
			#output.alert-success{
				background: rgb(25, 204, 25);
			}
			
			#output.alert-danger{
				background: rgb(228, 105, 105);
			}
			
			
			.login-container::before,.login-container::after{
				content: "";
				position: absolute;
				width: 100%;height: 100%;
				top: 3.5px;left: 0;
				background: #fff;
				z-index: -1;
				-webkit-transform: rotateZ(4deg);
				-moz-transform: rotateZ(4deg);
				-ms-transform: rotateZ(4deg);
				border: 1px solid #ccc;
			
			}
			
			.login-container::after{
				top: 5px;
				z-index: -2;
				-webkit-transform: rotateZ(-2deg);
				 -moz-transform: rotateZ(-2deg);
				  -ms-transform: rotateZ(-2deg);
			
			}
			
			.header {
				background-size: cover;
				border:0 none;
				font-family: rsubold;
				font-size: 14px;
				letter-spacing: 1px;
				line-height: 24px;
				margin: 20px 0;
				padding: 0px;
				text-align: center;
				width: 100%;
			}
			
			.form-box input{
				width: 100%;
				padding: 10px;
				text-align: center;
				height:40px;
				border: 1px solid #ccc;;
				background: #fafafa;
				transition:0.2s ease-in-out;
			
			}
			
			.form-box input:focus{
				outline: 0;
				background: #eee;
			}
			
			.form-box input[type="text"]{
				border-radius: 5px 5px 0 0;
			}
			
			.form-box input[type="password"]{
				border-radius: 0 0 5px 5px;
				border-top: 0;
			}
			
			.form-box button.login{
				margin-top:15px;
				padding: 10px 20px;
				border-radius:0;
				background-color:#393939;
				border:0 none;
			}
			
			.animated {
			  -webkit-animation-duration: 1s;
			  animation-duration: 1s;
			  -webkit-animation-fill-mode: both;
			  animation-fill-mode: both;
			}
			
			@-webkit-keyframes fadeInUp {
			  0% {
				opacity: 0;
				-webkit-transform: translateY(20px);
				transform: translateY(20px);
			  }
			
			  100% {
				opacity: 1;
				-webkit-transform: translateY(0);
				transform: translateY(0);
			  }
			}
			
			@keyframes fadeInUp {
			  0% {
				opacity: 0;
				-webkit-transform: translateY(20px);
				-ms-transform: translateY(20px);
				transform: translateY(20px);
			  }
			
			  100% {
				opacity: 1;
				-webkit-transform: translateY(0);
				-ms-transform: translateY(0);
				transform: translateY(0);
			  }
			}
			
			.fadeInUp {
			  -webkit-animation-name: fadeInUp;
			  animation-name: fadeInUp;
			}
			.copyright{
				font-size: 14px;
				letter-spacing: 0.8px;
				text-transform: uppercase;
				font-family:rsulight;
				color:#ffffff;
				
			}

        </style>
    </head>
    <body>
    
       <div class="container">
            <div class="login-container">
            <?php if ($msg_result == true) { ?>
            	    <div id="output" class="alert alert-danger animated fadeInUp">Username or Password is incorrect!</div>
            <?php } ?>
                    <div id="output"></div>
                    <div class="header"><img src="<?php echo $baseUrl; ?>/assets/admin/images/header-login.png" class="img-responsive"></div>
                     <div class="form-box">
                        <form action="<?php echo $baseUrl; ?>/back/user/form_login/1" method="post" id='myform' enctype="multipart/form-data">
                            <input name="username" type="text" placeholder="Username">
                            <input name="password" type="password" placeholder="Password">
                            <button class="btn btn-info btn-block login" type="submit" >Login</button>
                        </form>
                    </div>
                </div>
            <div class="copyright text-center">CMS V.2.0 © Copyright <?php echo date('Y'); ?> MKTRU.COM All rights reserved</div> 
        </div>
        
        <script src="<?php echo $baseUrl; ?>/assets/admin/js/jquery-1.11.3.min.js"></script>
        <!-- bootstrap js file -->
    	<script src="<?php echo $baseUrl; ?>/assets/admin/js/bootstrap.min.js"></script> 
        <script type="text/javascript">
			$(function(){
				var textfieldUser = $("input[name=username]");
				var textfieldPass = $("input[name=password]");
				
							$('button[type="submit"]').click(function(e) {
								
								//little validation just to check username
								if (textfieldUser.val() != "" && textfieldPass.val() != "") {
									$('#myform').submit();
								}
								else if (textfieldUser.val() == "") {

									//remove success mesage replaced with error message
									$("#output").removeClass(' alert alert-success');
									$("#output").addClass("alert alert-danger animated fadeInUp").html("Sorry, Please enter your username");
									isFormValid = false;
								} 
								else if (textfieldPass.val() == "") {

									//remove success mesage replaced with error message
									$("#output").removeClass(' alert alert-success');
									$("#output").addClass("alert alert-danger animated fadeInUp").html("Sorry, Please enter your password");
									isFormValid = false;
								}
								//console.log(textfield.val());
								e.preventDefault();
							});
							
				});
				
				
		

		</script>
    </body>
</html>