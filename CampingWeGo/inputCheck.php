<?php
function inputCheck(){
$username = filter_input(INPUT_POST, 'Username');
 $password = filter_input(INPUT_POST, 'Password');
if( $password != NULL && $username != NULL){
include('schedule.php');
}else{
$error = 'Invalid Input. Please check the various fields and try again.';
include('error.php');
}
}
inputCheck();
?>
