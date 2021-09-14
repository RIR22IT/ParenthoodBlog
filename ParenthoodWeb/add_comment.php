

<?php

$connect = new PDO('mysql:host=localhost;dbname=parenthoodweb', 'root', '');


$error = '';
$comment_name = '';
$comment_content = '';
$comment_email = '';

if(empty($_POST["comment_name"]))
{
 $error .= '<p class="text-danger">Name is required</p>';
}
else
{
 $comment_name = $_POST["comment_name"];
}

if(empty($_POST["comment_email"]))
{
 $error .= '<p class="text-danger">Email is required</p>';
}
else
{
 $comment_email = $_POST["comment_email"];
}

if(empty($_POST["comment_content"]))
{
 $error .= '<p class="text-danger">Comment is required</p>';
}
else
{
 $comment_content = $_POST["comment_content"];
}

if($error == '')
{
 $query = "
 INSERT INTO comment 
 (post_id, comment_email ,parent_comment_id, comment, comment_sender_name) 
 VALUES (:post_id, :comment_email ,:parent_comment_id, :comment, :comment_sender_name)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':parent_comment_id' => $_POST["comment_id"],
   ':comment'    => $comment_content,
   ':comment_sender_name' => $comment_name,
   ':comment_email' => $comment_email,
   ':post_id' => $_POST["post_id"]
  )
 );
 $error = '<label class="text-success">Comment Added</label>';
}

$data = array(
 'error'  => $error
);

echo json_encode($data);

?>
