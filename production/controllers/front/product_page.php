<?php
    $db = new database();

    // Query pages section
    $option_pages = array(
        "table" => "btview_pages",
        "condition" => "pages_link='{$_GET['pages_id']}' "
        );
    $query_pages = $db->select($option_pages);
    $rs_pages = $db->get($query_pages);
    $row_pages = $db->rows($query_pages);
    

?>