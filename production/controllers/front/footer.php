<?php
    // Query footer section
    $option_footer = array(
        "table" => "btview_content",
        "condition" => "content_categories = 'footer'"
        );
    $query_footer = $db->select($option_footer);
    $rs_footer = $db->get($query_footer);


?>