<?php
/*
 * A controller to handle the contact page processing
 */
 session_start();
if($_SESSION['security_code'] != $_POST['cap_code'] && !empty($_SESSION['security_code'])) {
  $errors['security'] = 'Sorry, your entered security code does not match the security image.';
 }
if($_POST['action'] == 'Send'){
 
} else {
 include 'contact.php';
 exit;
}
?>