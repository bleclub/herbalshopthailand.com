<?php
    $db = new database();

    // Query pages section
    $sql_pages = "select * from btview_pages where pages_categories = 'career' order by pages_date desc";
    
    $query_pages = $db->query($sql_pages);
    $rows_pages = $db->rows($query_pages);


?>