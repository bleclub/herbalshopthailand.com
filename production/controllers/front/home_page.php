<?php


// Query for Home Banner secton
$sql_bannner = "select * from btview_pages where pages_categories='Home-Banner' order by pages_date desc LIMIT 3";
$results_banner = $db->query($sql_bannner);


// Query for product secton
$sql_product = "select * from btview_pages where pages_categories='product' order by pages_date desc LIMIT 3";
$results = $db->query($sql_product);


// Query for news and event secton
$sql_news = "select * from btview_news where (news_categories='news' or news_categories='event') order by news_date desc LIMIT 4";
$results_news = $db->query($sql_news);



?>