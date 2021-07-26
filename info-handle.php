<?php
include ('./database/connection.php');
//initialized variables
$id              = 0;
$firstName       = "";
$lastName        = "";
$user_image      = [];
$user_cover      = [];
$user_dob        = 0;
$user_country    = "";
$user_province   = "";
$user_gender     = "";
$user_occupation = "";
$user_status     = "";
$user_fb         = "";
$user_reg_date   = "";
$user_description= "";

if(isset($_POST['update'])){
    $id              = $_POST['id'];
    $firstName       = $_POST['firstName'];
    $lastName        = $_POST['lastName'];
    // $user_image      = $_POST['user_image'];
    // $user_cover      = $_POST['user_cover'];
    $user_dob        = $_POST['datetimepicker'];
    $user_country    = $_POST['country'];
    $user_province   = $_POST['province'];
    $user_gender     = $_POST['gender'];
    $user_occupation = $_POST['occupation'];
    $user_status     = $_POST['status'];
    $user_fb         = $_POST['fb'];
    $user_reg_date   = $_POST['user_reg_date'];
    $user_description= $_POST['description'];
    
    // echo $user_dob;

    mysqli_query($db,"UPDATE users SET firstName = '$firstName', lastName = '$lastName', user_image = '$user_image', user_cover = '$user_cover', 
    user_dob = '$user_dob', user_country = '$user_country', user_province = '$user_province',
    user_gender = '$user_gender', user_occupation = '$user_occupation', user_status = '$user_status',
    user_fb = '$user_fb', user_reg_date = '$user_reg_date', user_description = '$user_description' WHERE id = $id");
    header('location: YourAccount-PersonalInformation.php');
}
?>

