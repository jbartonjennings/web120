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
$robots = "noindex,nofollow";
$meta_description = "Web developer seeking employment in Seattle.";
$meta_keywords = "Web developer, JavaScript, HTML, CSS, Seattle.";
$meta_keywordscontact = "Web developer, Web designer, Seattle, employment, hire, JAVA, JavaScript, HTML, CSS, "

switch(THIS_PAGE){

    case 'index.php':
        $title = 'James Jennings Home Page!';
        $logo = "fa-home";
        $meta_keywords = $meta_keywords;
    break;

    case 'contactme.php':
        $title = 'James Jennings Contact Page!';
        $logo = "fa-paper-plane-o";
        $robots = "noindex,follow";
        $meta_description = "Please contact James. I'm a " .
        $meta_description;
        $meta_keywordscontact = $meta_keywordscontact;
    break;

    case 'big.php':
        $title = 'James Jennings Big Page!';
        $logo = "fa-paper-plane-o";
        $meta_keywords = $meta_keywords;
    break;

    case 'aia.php':
        $title = 'James Jennings Aia Page!';
        $logo = "fa-paper-plane-o";
        $meta_keywords = $meta_keywords;
    break;

    case 'flowchart.php':
        $title = 'James Jennings Flowchart Page!';
        $logo = "fa-paper-plane-o";
        $meta_keywords = $meta_keywords;
    break;

    case 'fp/index.php':
        $title = 'James Jennings Final Project Page!';
        $logo = "fa-paper-plane-o";
        $meta_keywords = $meta_keywords;
    break;
}

//place URL & labels in the array here for navigation:
$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact James";

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}

    
?>