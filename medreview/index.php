<?php
//MAIN CONTROLLER

//For debugging - SUMMER TODO comment out before live launch
ini_set('display_errors', 1);

//Connect database connectsions
//BRANDON TODO add require statements


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
    $action = filter_input(INPUT_GET, 'action');
}


switch( $action ) {
    case 'account':
        include('/view/account.php');
        break;

    case 'faq':
        include('/view/faq.php');
        break;
    
    case 'doctorreview':
        include('/view/doctorreview.php');
        break;
    
    case 'hospitalreview':
        include('/view/hospitalreview.php');
        break;
    
    case 'login':
        include('/view/login.php');
        break;
    
    case 'home':
    default:
        include('/view/home.php');
}