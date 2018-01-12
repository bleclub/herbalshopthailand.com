<?php

// Query for menu product category secton
$sql_product = "select * from btview_category where category_type='product' order by category_datecreate desc";
$results_product = $db->query($sql_product);

?>