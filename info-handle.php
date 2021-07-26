<?php
include './database/connection.php';
//initialized variables
$id               = 0;
$firstName        = "";
$lastName         = "";
$user_image       = [];
$user_cover       = [];
$user_dob         = 0;
$user_country     = "";
$user_province    = "";
$user_gender      = "";
$user_occupation  = "";
$user_status      = "";
$user_fb          = "";
$user_description = "";

if (isset($_POST['update'])) {
    $id        = $_POST['id'];
    $firstName = $_POST['firstName'];
    $lastName  = $_POST['lastName'];
    // $user_image      = $_POST['user_image'];
    // $user_cover      = $_POST['user_cover'];
    $user_dob         = $_POST['birth'];
    $user_country     = $_POST['country'];
    $user_province    = $_POST['province'];
    $user_gender      = $_POST['gender'];
    $user_occupation  = $_POST['occupation'];
    $user_status      = $_POST['status'];
    $user_fb          = $_POST['fb'];
    $user_description = $_POST['description'];

    // echo $user_dob;

    mysqli_query($db, "UPDATE users SET firstName = '$firstName', lastName = '$lastName',  user_image = '$user_image', user_cover = '$user_cover',
    user_dob = '$user_dob', user_country = '$user_country', user_province = '$user_province',
    user_gender = '$user_gender', user_occupation = '$user_occupation', user_status = '$user_status',
    user_fb = '$user_fb', user_description = '$user_description' WHERE id = $id");
    header('location: YourAccount-PersonalInformation.php');
}

//initialized hobbies variables
$hobbies_id     = 0;
$hobbies        = "";
$fav_music      = "";
$fav_TV         = "";
$fav_book       = "";
$fav_movie      = "";
$fav_writer     = "";
$fav_game       = "";
$other_interest = "";

if (isset($_POST['btnHobby'])) {
    $id             = $_POST['id'];
    $hobbies_id     = $_POST['hobbies_id'];
    $hobbies        = $_POST['hobbies'];
    $fav_music      = $_POST['fav_music'];
    $fav_TV         = $_POST['fav_TV'];
    $fav_book       = $_POST['fav_book'];
    $fav_movie      = $_POST['fav_movie'];
    $fav_writer     = $_POST['fav_writer'];
    $fav_game       = $_POST['fav_game'];
    $other_interest = $_POST['other_interest'];

    $query = "SELECT * FROM hobbies WHERE user_id = '$id'";
    $run   = mysqli_query($db, $query);
    if (mysqli_num_rows($run) > 0) {
        $row      = mysqli_fetch_array($run);
        $hobby_id = $row['hobbies_id'];
    }

    if ($hobbies_id == $hobby_id) {
        mysqli_query($db, "UPDATE hobbies SET hobbies = '$hobbies', fav_music = '$fav_music', fav_TV = '$fav_TV',
        fav_book = '$fav_book', fav_movie = '$fav_movie', fav_writer = '$fav_writer',
        fav_game = '$fav_game', other_interest = '$other_interest' WHERE user_id = $id");
        header('location: YourAccount-HobbiesAndInterests.php');
    } else {
        mysqli_query($db, "INSERT INTO hobbies (user_id, hobbies, fav_music, fav_TV, fav_book, fav_movie, fav_writer, fav_game, other_interest) VALUES ('$id', '$hobbies',  '$fav_music', '$fav_movie', '$fav_TV', '$fav_book', '$fav_writer', '$fav_game', '$other_interest')");
        header('location: YourAccount-HobbiesAndInterests.php');
    }

}

if (isset($_POST['btnImg'])) {
    
    $user_image = $_FILES["img"]["name"];
    $id         = $_POST['id'];
    if(file_exists("upload/".$_FILES["img"]["name"]))
    {
        $store = $_FILES["img"]["name"];
        $_SESSION['status'] = "Image already exists.'.$store.'";
        header('location: Error-Page-500.php');
    }else{
        $run = mysqli_query($db, "UPDATE users SET user_image = '$user_image' WHERE id = $id");
        header('location: YourAccount-PersonalInformation.php');
        if($run){
            move_uploaded_file($_FILES["img"]["tmp_name"], "upload/".$_FILES["img"]["name"]);
            header('location: YourAccount-PersonalInformation.php');
        }else{
            $_SESSION['success'] = "not added";
            header('location: Error-Page-500.php');
        }
    }
}
