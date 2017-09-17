<?php
    $title = 'Dashboard - Welcome to Content Management System';
    $menu_home = 'active';  
    $officeID = $_SESSION[_ss . 'officeID'];

    // Connect Database
    $db = new database();

	//Total View
	$sql_view = "SELECT SUM(stat_view) AS stat_total FROM `bt_statview` WHERE officeID='".$_SESSION[_ss . 'officeID']."'";
	$query_view = $db->query($sql_view);
	 while ($rs_view = $db->get($query_view)) {
		$total_view = $rs_view['stat_total'];
		$total_view_sub = $rs_view['stat_total'];
	}
	if(@$_POST['year'] != "") { 
		$sql_view.= " and stat_year='".$_POST['year']."'";
		 $query_view = $db->query($sql_view);
		 while ($rs_view = $db->get($query_view)) {
			$total_view_sub = $rs_view['stat_total'];
		 }
	}
	
	//User number
	$sql_user = "SELECT * FROM `bt_user` where officeID='".$_SESSION[_ss . 'officeID']."'";
	$query_user= $db->query($sql_user);
	$row_user = $db->rows($query_user);
	
	//News number
	$sql_news = "SELECT * FROM `bt_news` where officeID='".$_SESSION[_ss . 'officeID']."' and news_categories = 'news'";
	$query_news= $db->query($sql_news);
	$row_news = $db->rows($query_news);

	//Event number
	$sql_event = "SELECT * FROM `bt_news` where officeID='".$_SESSION[_ss . 'officeID']."' and news_categories = 'event'";
	$query_event= $db->query($sql_event);
	$row_event = $db->rows($query_event);
	
	
	//Office name
	$sql_office = "SELECT * FROM `bt_office` where officeID='".$_SESSION[_ss . 'officeID']."'";
	$query_office = $db->query($sql_office);
	while ($rs_office = $db->get($query_office)) {
		$officeName = $rs_office['officeNameTH'];
	}


    require('template/back/header.php');

?>

<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Welcome to content managment system</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
           
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="ion ion-eye"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Statistics of pageview</span><br />
                  <span class="info-box-number" style="font-size:14px;"><?php echo number_format($total_view); ?> <small>Pageviews</small></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
						</div><!-- /.col -->
						<div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion ion-document-text"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">News and Event</span><br />
                  <span class="info-box-number" style="font-size:14px;"><?php echo number_format($row_news); ?> <small>issues</small></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-document-text"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Number of Event</span><br />
                  <span class="info-box-number" style="font-size:14px;"><?php echo number_format($row_event); ?> <small>events</small></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
						</div><!-- /.col -->
						<div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-email-unread"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Number of enquiry</span><br />
                  <span class="info-box-number" style="font-size:14px;"><?php echo number_format($row_complaint); ?> <small>enquire</small></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div>
          
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <div class="pull-left"><h3 class="box-title">Statistics of visit pageview.</h3></div>
                  
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                  	<div class="col-md-12">
                    	
                          <form accept-charset="utf-8" method="post" class="form-inline" action="">
                          
                         	<input type="hidden" name="officeID" value="<?php echo $_SESSION[_ss . 'officeID']; ?>" />
                            <label>Year: </label>
                            <?php
								$sql_stat = "SELECT DISTINCT stat_year FROM bt_statview";
								$query_stat = $db->query($sql_stat);
								$rows_pw = $db->rows($query_stat);
							?>
											<select name="year" id="formyear" class="form-control">
												<option value="">-Please select year-</option>
													<?php
														while ($rs_stat = $db->get($query_stat)) {
															echo '<option value="'.$rs_stat['stat_year'].'">'.$rs_stat['stat_year'].'</option>';
														}
													?>
											</select>
                			<input type="submit" value="View" class="btn btn-success">
                    
                		</form>
                        <hr />

                    </div>
                    <div class="col-md-12">
                      <p class="text-center">
                        <strong>Website: <?php echo $officeName; ?> | Year: <?php if(@$_POST['year'] != "") { echo $_POST['year']; } else { echo date('Y')+543; } ?></strong>
                      </p>
                      <div class="chart">
                        <!-- Sales Chart Canvas -->
                        <canvas id="salesChart" style="height: 180px;"></canvas>
                      </div><!-- /.chart-responsive -->
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- ./box-body -->
                <div class="box-footer">
                  <div class="row">
                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block border-right">
                        <!--<span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                        <h5 class="description-header">$35,210.43</h5>
                        <span class="description-text">TOTAL REVENUE</span>-->
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block border-right">
                        <!--<span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                        <h5 class="description-header">$10,390.90</h5>
                        <span class="description-text">TOTAL COST</span>-->
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block border-right">
                        <!--<span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                        <h5 class="description-header">$24,813.53</h5>
                        <span class="description-text">TOTAL PROFIT</span>-->
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block">
                        <!--<span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>-->
                        <h5 class="description-header"><?php echo number_format($total_view_sub); ?> PAGE VIEWS</h5>
                        <span class="description-text">Grand Total</span>
                      </div><!-- /.description-block -->
                    </div>
                  </div><!-- /.row -->
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div>
          
          
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

<?php
    require('template/back/footer.php');
?>   
    
    	<!-- ChartJS 1.0.1 -->
    <script src="<?php echo $baseUrl; ?>/assets/admin/plugins/chartjs/Chart.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script type="text/javascript">
		$(document).ready(function() {
					$('#formoffice').change(function() {
                    $.ajax({
                        type: 'POST',
                        data: {officeID: $(this).val()},
                        url: '<?php echo $baseUrl; ?>/ajax/check_statyear.php',
                        success: function(data) {
                            $('#formyear').html(data);
                        }
                    });
                    return false;
                });
					
			});

    	 $(function () {
		// Get context with jQuery - using jQuery's .get() method.
		  var salesChartCanvas = $("#salesChart").get(0).getContext("2d");
		  // This will get the first returned node in the jQuery collection.
		  var salesChart = new Chart(salesChartCanvas);
		
		  var salesChartData = {
			labels: [
			<?php 
			if(@$_POST['year'] != "") {	
				$month_eng = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
				$sql_grap = "select * from bt_statview where officeID='".$_POST['officeID']."' and stat_year='".$_POST['year']."'";		
				$query_grap = $db->query($sql_grap);
				  $load_m = array(); 
				  $view = array();
				  $x = 0;
				  while ($rs_grap = $db->get($query_grap)) {
						$load_m[$x] = $rs_grap['stat_month'] + 0;
						$view[$x] =	$rs_grap['stat_view'];
						$x.= $x+1;
				  } 
				  foreach($load_m as $value_m) { 
				  	 echo '"'.$month_eng[$value_m-1].'",'; 
				  }
			} else {
				$month_eng = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
				$sql_grap = "select * from bt_statview where officeID='".$officeID."' and stat_year='".(date('Y')+543)."'";		
				$query_grap = $db->query($sql_grap);
				  $load_m = array(); 
				  $view = array();
				  $x = 0;
				  while ($rs_grap = $db->get($query_grap)) {
						$load_m[$x] = $rs_grap['stat_month'] + 0;
						$view[$x] =	$rs_grap['stat_view'];
						$x.= $x+1;
				  } 
				  foreach($load_m as $value_m) { 
				  	 echo '"'.$month_eng[$value_m-1].'",'; 
				  }	
			}
			?>
			],
			datasets: [
			  {
				label: "Digital Goods",
				fillColor: "rgba(60,141,188,0.9)",
				strokeColor: "rgba(60,141,188,0.8)",
				pointColor: "#3b8bba",
				pointStrokeColor: "rgba(60,141,188,1)",
				pointHighlightFill: "#fff",
				pointHighlightStroke: "rgba(60,141,188,1)",
				data: [
				<?php 	  
						foreach ($view as $value_v) {
							echo $value_v.", ";	
						}
				 ?>
				]
				
			  }
			]
		  };
		
		  var salesChartOptions = {
			//Boolean - If we should show the scale at all
			showScale: true,
			//Boolean - Whether grid lines are shown across the chart
			scaleShowGridLines: false,
			//String - Colour of the grid lines
			scaleGridLineColor: "rgba(0,0,0,.05)",
			//Number - Width of the grid lines
			scaleGridLineWidth: 1,
			//Boolean - Whether to show horizontal lines (except X axis)
			scaleShowHorizontalLines: true,
			//Boolean - Whether to show vertical lines (except Y axis)
			scaleShowVerticalLines: true,
			//Boolean - Whether the line is curved between points
			bezierCurve: true,
			//Number - Tension of the bezier curve between points
			bezierCurveTension: 0.3,
			//Boolean - Whether to show a dot for each point
			pointDot: false,
			//Number - Radius of each point dot in pixels
			pointDotRadius: 4,
			//Number - Pixel width of point dot stroke
			pointDotStrokeWidth: 1,
			//Number - amount extra to add to the radius to cater for hit detection outside the drawn point
			pointHitDetectionRadius: 20,
			//Boolean - Whether to show a stroke for datasets
			datasetStroke: true,
			//Number - Pixel width of dataset stroke
			datasetStrokeWidth: 2,
			//Boolean - Whether to fill the dataset with a color
			datasetFill: true,
			//String - A legend template
			legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%=datasets[i].label%></li><%}%></ul>",
			//Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
			maintainAspectRatio: true,
			//Boolean - whether to make the chart responsive to window resizing
			responsive: true
		  };
		
		  //Create the line chart
		  salesChart.Line(salesChartData, salesChartOptions);
		
		  //---------------------------
		  //- END MONTHLY SALES CHART -
		  //---------------------------
		  });
	
    </script>

    <!-- AdminLTE App -->
		<script src="<?php echo $baseUrl; ?>/assets/admin/dist/js/app.min.js"></script>

	  </body>
</html>