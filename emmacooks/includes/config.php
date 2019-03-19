<?php
/**
 * config.php provides a place to store configuration info, 
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

//echo "constant:" . THIS_PAGE;
//die;

$nav1['/emmacooks/index.php'] = "Welcome";  
$nav1['/emmacooks/about.php'] = "About"; 
$nav1['/emmacooks/menus.php'] = "Menus";   
$nav1['/emmacooks/reviews.php'] = "Reviews";     
$nav1['/emmacooks/contact.php'] = "Contact";     


switch(THIS_PAGE)
{
    case 'index.php':
        $title = 'Emma Cooks';
        $logo = 'fas fa-fighter-jet';
        $PageID = 'Welcome';
    break;
        
    case 'about.php':
        $title = 'About';
        $logo = 'fas fa-user-secret';
        $PageID = 'About';
    break;    
        
    case 'menus.php':
        $title = 'Menus';
        $logo = 'fas fa-paper-plane';
        $PageID = 'Menus';
    break;
        
    case 'Reviews.php':
        $title = 'Reviews';
        $logo = 'far fa-paper-plane';
        $PageID = 'Reviews';
    break;

    case 'contact.php':
        $title = 'Contact';
        $logo = 'fas fa-pencil-alt';
        $PageID = 'Contact';
    break;
        
    
        
    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = '';
    break;
}

function makeLinks($nav)
{
    $myReturn = '';
    foreach($nav as $url => $text)
    {
        if(THIS_PAGE == $url)
        {//add class
           $myReturn .= '<li><a href="' . $url . '" class="selected">' . $text . '</a></li>';            
        }else{//no class
           $myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'; 
  
        }
        
    }
    
    return $myReturn;
}














