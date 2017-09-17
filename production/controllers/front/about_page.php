<?php
    // Query about section
    $option_about = array(
        "table" => "btview_content",
        "condition" => "content_categories = 'about' "
        );
    $query_about = $db->select($option_about);
    $rs_about = $db->get($query_about);

?>