<?php include('../database/connection.php');

// initialize variables - Footer Images
$img        = [];

if (isset($_POST['footerImage'])) {
    $img = $_FILES['img']['name'];

    if (file_exists("upload/footerImage/" . $_FILES["img"]["name"])) {
        $store = $_FILES["img"]["name"];
        $_SESSION['status'] = "Image already exists. '.$store.'";
    } else {
        $temp = explode(".", $_FILES["img"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        move_uploaded_file($_FILES["img"]["tmp_name"], "upload/footerImage/" . $newfilename);
        $qry = "INSERT INTO footerImage (img) VALUES ('$newfilename')";
        $run = mysqli_query($db, $qry);
        $_SESSION['message'] = "Image Added successfully";
    }
}

if (isset($_GET['f_del'])) {
    $id = $_GET['f_del'];
    mysqli_query($db, "DELETE FROM footerImage WHERE id=$id");
    $_SESSION['message'] = "Image Deleted successfully!";
    header('location: footerImageUpload.php');
}

//Update Youtube Video Link

if (isset($_GET['link'])) {
    $link = $_GET['video'];

    $sql = "UPDATE video SET link = '$link' WHERE v_id = '1'";
    $run = mysqli_query($db, $sql);
    if ($run) {
        header("location: homeVideo.php?success");
    } else {
        header("location: homeVideo.php?fail");
    }
}

// initialize variables - Single Video Links
$videoLink = "";
$title = "";
$categoryType = "";


if (isset($_POST['singleVideo'])) {
    $videoLink = $_POST['videoLink'];
    $title = $_POST['title'];
    $categoryType = $_POST['categoryType'];
   
        $qry = "INSERT INTO singlevideo (videoLink, title, categoryType, date) VALUES ('$videoLink', '$title', '$categoryType', NOW() )";
        $run = mysqli_query($db, $qry);
        $_SESSION['message'] = "Added successfully";
}

if (isset($_POST['s_update'])) { //update single video table
    $id = $_POST['s_id'];
    $videoLink = $_POST['videoLink'];
    $title = $_POST['title'];
    $categoryType = $_POST['categoryType'];

    mysqli_query($db, "UPDATE singlevideo SET videoLink = '$videoLink', title = '$title', categoryType = '$categoryType' WHERE s_id = $id");
    $_SESSION['message'] = "Updated successfully!";
    header('location: viewSingleVideo.php');
}

if (isset($_GET['s_del'])) { //delete single video table
    $id = $_GET['s_del'];
    mysqli_query($db, "DELETE FROM singlevideo WHERE s_id=$id");
    $_SESSION['message'] = "Deleted successfully!";
    header('location: viewSingleVideo.php');
}


//Home Advertisement 

if(isset($_POST['ad'])){
    $img = $_FILES['img']['name'];

    if (file_exists("upload/homeAd/" . $_FILES["img"]["name"])) {
        $store = $_FILES["img"]["name"];
        $_SESSION['status'] = "Image already exists. '.$store.'";
    } else {
        $temp = explode(".", $_FILES["img"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        move_uploaded_file($_FILES["img"]["tmp_name"], "upload/homeAd/" . $newfilename);
        $qry = "UPDATE homead SET img = '$newfilename' WHERE h_Id = '1'";
        $run = mysqli_query($db, $qry);
        if($run){
            header("location: homeAd.php?success");
        }else{
            header("location: homeAd.php?fail");
        }
    }
}
