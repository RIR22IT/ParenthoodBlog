<?php

$connect = new PDO('mysql:host=localhost;dbname=parenthoodweb', 'root', '');

// $post = 1;
$post = $_POST['post_id'];

$query = "
SELECT * FROM comment
WHERE parent_comment_id = '0' AND post_id = '$post'
ORDER BY comment_id DESC
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
$output = '';
foreach ($result as $row) {
    $output .= '
 <div class="media">
        <div class="media-left">
            <img src="assets/img/avatar.png" alt="" class="media-object">
        </div>
        <div class="media-body">
            <h4 class="media-heading">' . $row["comment_sender_name"] . '<small><i>Posted on ' . $row["date"] . '</i></small></h4>
            <p>' . $row["comment"] . '</p>
            <button id="' . $row["comment_id"] . '" class="btn link-btn reply">Reply ⇾</button>
        </div>
</div>

 ';
    $output .= get_reply_comment($connect, $row["comment_id"]);
}

echo $output;

function get_reply_comment($connect, $parent_id = 0, $marginleft = 0)
{
    $query = "
 SELECT * FROM comment WHERE parent_comment_id = '" . $parent_id . "'
 ";
    $output    = '';
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $count  = $statement->rowCount();
    if ($parent_id == 0) {
        $marginleft = 0;
    } else {
        $marginleft = $marginleft + 48;
    }
    if ($count > 0) {
        foreach ($result as $row) {
            $output .= '
   <div class="media" style="margin-left:' . $marginleft . 'px">
        <div class="media-left">
            <img src="assets/img/avatar.png" alt="" class="media-object">
        </div>
        <div class="media-body">
            <h4 class="media-heading">' . $row["comment_sender_name"] . '<small><i>Posted on ' . $row["date"] . '</i></small></h4>
            <p>' . $row["comment"] . '</p>
            <button id="' . $row["comment_id"] . '" class="btn link-btn reply">Reply ⇾</button>
        </div>
   </div>
  
   ';
            $output .= get_reply_comment($connect, $row["comment_id"], $marginleft);
        }
    }
    return $output;
}


// <div class="panel panel-default">
// <div class="panel-heading">By <b>' . $row["comment_sender_name"] . '</b> on <i>' . $row["date"] . '</i></div>
// <div class="panel-body">' . $row["comment"] . '</div>
// <div class="panel-footer" align="right"><button type="button" class="btn btn-default reply" id="' . $row["comment_id"] . '">Reply</button></div>
// </div>

// <div class="panel panel-default" style="margin-left:' . $marginleft . 'px">
// <div class="panel-heading">By <b>' . $row["comment_sender_name"] . '</b> on <i>' . $row["date"] . '</i></div>
// <div class="panel-body">' . $row["comment"] . '</div>
// <div class="panel-footer" align="right"><button type="button" class="btn btn-default reply" id="' . $row["comment_id"] . '">Reply</button></div>
// </div>