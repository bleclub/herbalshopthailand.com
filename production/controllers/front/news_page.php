<?php
    // Query news section
    $option_news = array(
        "table" => "btview_news",
        "condition" => "news_id='{$_GET['news_id']}' "
        );
    $query_news = $db->select($option_news);
    $rs_news = $db->get($query_news);
    $row_news = $db->rows($query_news);
    
    // if($row_news <= 0 ) {
    //     header("Location: ".$dpmUrl."/".$lang);
    // }
?>