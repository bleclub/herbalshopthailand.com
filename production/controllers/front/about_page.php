<?php
    // Query about section
    $option_about = array(
        "table" => "btview_content",
        "condition" => "content_categories = 'about' "
        );
    $query_about = $db->select($option_about);
    $rs_about = $db->get($query_about);

     // Query vision section
     $option_vision = array(
        "table" => "btview_content",
        "condition" => "content_categories = 'vision' "
        );
    $query_vision = $db->select($option_vision);
    $rs_vision = $db->get($query_vision);


    // Query Mission section
    $option_mission = array(
        "table" => "btview_content",
        "condition" => "content_categories = 'mission' "
        );
    $query_mission = $db->select($option_mission);
    $rs_mission = $db->get($query_mission);
    
    // Query Shareholders section
    $option_shareholders = array(
        "table" => "btview_content",
        "condition" => "content_categories = 'shareholders' "
        );
    $query_shareholders = $db->select($option_shareholders);
    $rs_shareholders = $db->get($query_shareholders);


    // Query board section
    $option_board = array(
        "table" => "btview_content",
        "condition" => "content_categories = 'board' "
        );
    $query_board = $db->select($option_board);
    $rs_board = $db->get($query_board);


     // Query production section
     $option_production = array(
        "table" => "btview_content",
        "condition" => "content_categories = 'production' "
        );
    $query_production = $db->select($option_production);
    $rs_production = $db->get($query_production);

    // Query quality section
    $option_quality = array(
        "table" => "btview_content",
        "condition" => "content_categories = 'quality' "
        );
    $query_quality = $db->select($option_quality);
    $rs_quality = $db->get($query_quality);

?>