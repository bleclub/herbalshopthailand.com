<?php
    // Query pages section
    $option_pages = array(
        "table" => "btview_pages",
        "condition" => "pages_id='{$_GET['pages_id']}' "
        );
    $query_pages = $db->select($option_pages);
    $rs_pages = $db->get($query_pages);
    $row_pages = $db->rows($query_pages);
    
    // if($row_pages <= 0 ) {
    //     header("Location: ".$dpmUrl."/".$lang);
    // }
?>