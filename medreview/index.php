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
    
    case 'about':
        include('/view/about.php');
        break;

    case 'faq':
        include('/view/faq.php');
        break;
    
    case 'doctor':
        include('/view/doctor.php');
        break;        
    
    case 'doctorreview':
        include('/view/doctorreview.php');
        break;
    
    case 'hospital':
        include('/view/hospital.php');
        break;    
    
    case 'hospitalreview':
        include('/view/hospitalreview.php');
        break;
    
    case 'login':
        include('/view/login.php');
        break;
    
    case 'searchdoctors':
        //TODO: add views for searches
        break;
    
    case 'searchospitals':
        //TODO: add views for searches
        break;
    
    case 'validateDoctorReview':
        $name = $_POST['doctorName'];
        $email = $_POST['email'];
        $comments = $_POST['comments'];
        
        if(empty($name) || empty($email)){
            $reply = "ERROR";
            include('/view/doctorreview.php');
            exit;
        }else{
            break;
        }
            
    
    case 'home':
    default:
        include('/view/home.php');
}