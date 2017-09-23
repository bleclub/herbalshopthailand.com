<?php

$yearthai = date('Y')+543;
$db = new database();


// Get office id
$sql_office = "select * from bt_office limit 1";
$query_office = $db->query($sql_office);
$rs_office = $db->get($query_office);
$offID = $rs_office['officeID'];

$sql_log = "select * from bt_statview where officeID='".$offID."' and stat_year='".$yearthai."' and stat_month='".date('m')."'";
$querylogview = $db->query($sql_log);
$row_log = $db->rows($querylogview);

if($row_log > 0 ){	
			while($rs_log = $db->get($querylogview) ) { 
				$statview = $rs_log['stat_view'];
				$statyear = $rs_log['stat_year'];
				$statmonth = $rs_log['stat_month'];
				$value_log = array(
					"stat_view" => $statview+1
				);
				$query_log = $db->update("bt_statview", $value_log, "stat_year='{$statyear}' and stat_month='{$statmonth}' and officeID='{$offID}'");
			}
				
} else {
	$value_log = array(
		"stat_year" => date('Y')+543,
		"stat_month" => date('m'),
		"stat_view" => '1',
		"officeID" => $offID
	);
	$query_log = $db->insert("bt_statview", $value_log);
}

?>

<!Doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
	<meta name="viewport" content="width=device-width, user-scalable=no">
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">

    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/front_end/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/front_end/css/flexslider.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/front_end/css/jquery.fancybox.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/front_end/css/main.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/front_end/css/responsive.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/front_end/css/animate.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/front_end/css/font-icons.css" type="text/css" />
    
    <!-- Favicon -->
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

	