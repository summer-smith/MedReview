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
    case 'Login Page':
        include('login.php');
        break;
     
    
    default:
        include('/view/home.php');
}