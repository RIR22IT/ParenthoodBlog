<?php include '../database/connection.php';

// initialize variables - Footer Images
$img = [];

if (isset($_POST['footerImage'])) {
    $img = $_FILES['img']['name'];

    if (file_exists("upload/footerImage/" . $_FILES["img"]["name"])) {
        $store              = $_FILES["img"]["name"];
        $_SESSION['status'] = "Image already exists. '.$store.'";
    } else {
        $temp        = explode(".", $_FILES["img"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        move_uploaded_file($_FILES["img"]["tmp_name"], "upload/footerImage/" . $newfilename);
        $qry                 = "INSERT INTO footerImage (img) VALUES ('$newfilename')";
        $run                 = mysqli_query($db, $qry);
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
$videoLink    = "";
$title        = "";
$categoryType = "";

if (isset($_POST['singleVideo'])) {
    $videoLink    = $_POST['videoLink'];
    $title        = $_POST['title'];
    $categoryType = $_POST['categoryType'];

    $qry = "INSERT INTO singlevideo (videoLink, title, categoryType, date) VALUES ('$videoLink', '$title', '$categoryType', NOW() )";
    $run = mysqli_query($db, $qry);
    if ($run) {
        header("location: viewSingleVideo.php?success");
    } else {
        header("location: singleVideo.php?fail");
    }
}

if (isset($_POST['s_update'])) { //update single video table
    $id           = $_POST['s_id'];
    $videoLink    = $_POST['videoLink'];
    $title        = $_POST['title'];
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

if (isset($_POST['ad'])) {
    $img = $_FILES['img']['name'];

    if (file_exists("upload/homeAd/" . $_FILES["img"]["name"])) {
        $store              = $_FILES["img"]["name"];
        $_SESSION['status'] = "Image already exists. '.$store.'";
    } else {
        $temp        = explode(".", $_FILES["img"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        move_uploaded_file($_FILES["img"]["tmp_name"], "upload/homeAd/" . $newfilename);
        $qry = "UPDATE homead SET img = '$newfilename' WHERE h_Id = '1'";
        $run = mysqli_query($db, $qry);
        if ($run) {
            header("location: homeAd.php?success");
        } else {
            header("location: homeAd.php?fail");
        }
    }
}

//Trending Page

if (isset($_POST['trending'])) {
    $mainTitle = $_POST['title'];
    $mainImage = $_FILES['img']['name'];
    $category    = $_POST['categoryType'];
    $description = $_POST['description'];

    if (file_exists("upload/trending/" . $_FILES["img"]["name"])) {
        $qry = "UPDATE trending SET mainTitle = '$mainTitle', category = '$category', description = '$description' WHERE t_Id = '1' ";
        $run = mysqli_query($db, $qry);
        if ($run) {
            header("location: trending.php?success");
        } else {
            header("location: trending.php?fail");
        }
    } else {

        $temp = explode(".", $_FILES["img"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        move_uploaded_file($_FILES["img"]["tmp_name"], "upload/trending/" . $newfilename);
        $qry = "UPDATE trending SET mainTitle = '$mainTitle', mainImage = '$newfilename',  category = '$category', description = '$description' WHERE t_Id = '1' ";
        $run = mysqli_query($db, $qry);
        if ($run) {
            header("location: trending.php?success");
        } else {
            header("location: trending.php?fail");
        }
    }
}

// initialize variables - single post 
$mainTitle    = "";
$img = [];
$subTitle        = "";
$categoryType = "";
$description        = "";

if (isset($_POST['postBtn'])) {
    $mainTitle = $_POST['mainTitle'];
    $img = $_FILES['img']['name'];
    $subTitle = $_POST['subTitle'];
    $categoryType = $_POST['categoryType'];
    $description = $_POST['description'];

    if (file_exists("upload/posts/" . $_FILES["img"]["name"])) {
        $store              = $_FILES["img"]["name"];
        $_SESSION['status'] = "Image already exists. '.$store.'";
    } else {
        $temp        = explode(".", $_FILES["img"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        move_uploaded_file($_FILES["img"]["tmp_name"], "upload/posts/" . $newfilename);
        $qry                 = "INSERT INTO post (mainTitle, img, subTitle, categoryType, description, date) VALUES ('$mainTitle', '$newfilename', '$subTitle', '$categoryType', '$description', NOW())";
        $run                 = mysqli_query($db, $qry);
        $_SESSION['message'] = "Added successfully";
    }
}

//Update post data

if(isset($_POST['updatePost'])){
    $id = $_POST['id'];
    $mainImage = $_FILES['img']['name'];
    $mainTitle = $_POST['mainTitle'];
    $subTitle = $_POST['subTitile'];
    $category = $_POST['categoryType'];
    $description = $_POST['description'];

    if (file_exists("upload/posts/" . $_FILES["img"]["name"])) {
        $qry = "UPDATE post SET mainTitle = '$mainTitle', subTitle = '$subTitle', categoryType = '$category', description = '$description' WHERE id = '$id' ";
        $run = mysqli_query($db, $qry);
        if ($run) {
            header("location: viewPosts.php?success");
        } else {
            header("location: viewPosts.php?fail");
        }
    } else {

        $temp = explode(".", $_FILES["img"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        move_uploaded_file($_FILES["img"]["tmp_name"], "upload/posts/" . $newfilename);
        $qry = "UPDATE post SET mainTitle = '$mainTitle', subTitle = '$subTitle', img = '$newfilename', categoryType = '$category', description = '$description' WHERE id = '$id' ";
        $run = mysqli_query($db, $qry);
        if ($run) {
            header("location: viewPosts.php?success");
        } else {
            header("location: viewPosts.php?fail");
        }

    }

}

//Delete post data

if (isset($_GET['p_del'])) {
    $id = $_GET['p_del'];
    mysqli_query($db, "DELETE FROM post WHERE id=$id");
    header('location: viewPosts.php');
}

