<?php
/* BIG CONFIG */
/**
 * big-config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

//Here are the keys for the server: seattlecentral.edu
$siteKey = "6LfCeI0UAAAAAAxhEjtVxYBEgLUDtl7DpxF7xuCH";
$secretKey = "6LfCeI0UAAAAABup3C1RU8SmONTf_7Xh6YaTjvHs";


//this helps eliminate PHP date errors
date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);
//die;

//this constant allows a page to know it's own url/name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));


switch(THIS_PAGE)
{
    case 'index.php':
        $title = 'James Jennings: WEB120 Portal Website';
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
            
    case 'flexbox.php':
        $title = 'James Jennings: Flexbox Research';
        $logo = '';
        $PageID = 'Flexbox Research';
    break;  
        
    case 'galleries.php':
        $title = 'James Jennings: Galleries';
        $logo = '';
        $PageID = 'Galleries Research';
    break;
        
    case 'map.php':
        $title = 'James Jennings: Map Research';
        $logo = '';
        $PageID = 'Map Research';
    break;
            
    case 'calendar.php':
        $title = 'James Jennings: Calendar Research';
        $logo = '';
        $PageID = 'Calendar Research';
    break;         
            
    case 'youtube.php':
        $title = 'James Jennings: YouTube Wordpress Intro Video';
        $logo = '';
        $PageID = 'Wordpress Intro Video';
    break;        
            
   case 'parallax.php':
        $title = 'James Jennings: Parallax Research';
        $logo = '';
        $PageID = 'Parallax Research';
    break;         
            
    case 'shoppingcarts.php':
        $title = 'James Jennings: Shopping Carts Research';
        $logo = '';
        $PageID = 'Shopping Carts Research';
    break;         
    
    case 'siteapp.php':
        $title = 'James Jennings: Site vs App Research';
        $logo = '';
        $PageID = 'Site vs App Research';
    break;     
        
    case 'webcam.php':
        $title = 'James Jennings: Webcam Research';
        $logo = '';
        $PageID = 'Webcam Research';
    break; 

    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = '';
    break;
}














