<?php
    // Query distribution section
    $option_distribution = array(
        "table" => "btview_content",
        "condition" => "content_categories = 'distribution'"
        );
    $query_distribution = $db->select($option_distribution);
    $rs_distribution = $db->get($query_distribution);


?>