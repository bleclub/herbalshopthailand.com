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