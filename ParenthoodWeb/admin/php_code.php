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

if(isset($_POST['link'])){
    $link= $_POST['video'];

    $sql = "UPDATE video SET link = '$link' WHERE v_id = '1'";
    $run = mysqli_query($db, $sql);
    if($run){
        header("location: homeVideo.php?success");
    }else{
        header("location: homeVideo.php?fail");
    }
}