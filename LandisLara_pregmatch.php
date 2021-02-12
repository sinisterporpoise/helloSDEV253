<?php
//=============================================================================
// Lara Landis
// Module 2 Ch 4 RegEx
// 2/10/2021
//
// This program will use preg_match and preg_match all to scrape the URL
// from a pattern given to the program.
//==============================================================================


function get_domain($url = SITE_URL)
{
    preg_match("/[a-z0-9\-]{1,63}\.[a-z\.]{2,6}$/", parse_url($url, PHP_URL_HOST), $_domain_tld);
    return $_domain_tld[0];
}

$url = 'http://www.sdev253.net/home.html';
$result= get_domain($url);
echo ("The url is: $result");

?>
