<?php

function base_url() {
    return "http://localhost/vanlop/projcets/mktru/herbalshopthailand.com/main/production";
    //  return "http://www.tarnsilp.com/2017";
}

function base_path() {
    return $_SERVER['DOCUMENT_ROOT'] . "/";
}

function salt_pass($pass) {
    return md5("herbalshop" . $pass);
}

function permalink_create($oldstring){

$string_to_replace     = array ('+' , '/' , '*' , '!' , '(' , ')' , '&' , '%' , '$' , '#' , '@' , '>' , '<' , '?' , ' ', '"', "'");
$string_after_replace  = array ('-' , '-' , '-' , '-' , '-' , '-' , '-' , '-percent-' , '-' , '-' , '-' , '-' , '-' , '-' , '-', '-', '-');
return $newstring         = str_replace($string_to_replace , $string_after_replace , $oldstring , $count); 

}
