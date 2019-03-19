<?php
//config.php

$siteKey = "6LfCeI0UAAAAAAxhEjtVxYBEgLUDtl7DpxF7xuCH";
$secretKey = "6LfCeI0UAAAAABup3C1RU8SmONTf_7Xh6YaTjvHs";

//enables page to know its own name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//helps prevent date errors
date_default_timezone_set('America/Los_Angeles');

//default in case pages don't have titles
$title = THIS_PAGE;

switch(THIS_PAGE){

    case 'index.php':
        $title = 'James Jennings Big Home Page!';
        $logo = "fa-home";
    break;

    case 'contactme.php':
        $title = 'James Jennings Contact Page!';
        $logo = "fa-paper-plane-o";
    break;


}


    
?>