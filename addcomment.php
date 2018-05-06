<?php
session_start();
//ob_start();
require "connect.php";
$email=$_SESSION['email'];
$content=$_SESSION['content'];
$user=User::find_by_email($email);   
      $id= $user->uid;

$pid=$_GET['idp'];
$postes=Post::find($pid);   
//$p_id=$postes->pid
if($postes){
   
$content=$postes->p_content;

?>
<html>
<body>

<form action="" method="post">

<div class="container">


          
<textarea type="text" id="content" name="content"  style="height:100"> 
<?php
   echo $content;
?>
</textarea>


   </div>
</form>

    
</body>
</html>
<?php 
if(isset($_POST['commentcontent'])){
   
$content = $_POST['commentcontent'];

Comment::create(array('c_content'=>$content,'u_id'=>$id,'post_id'=>$pid,'c_status'=>0,'c_date'=>date("h:i:sa")));
  
echo  "<script type='text/javascript'>alert('wait after admin approve !');</script>";     

}//if


else{


?>

    <html>
<head>
   
    <title>add comment</title>

    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

<form action="" method="post">

<div class="container">


          
<textarea type="text" id="commentcontent" name="commentcontent" placeholder="type your comment" style="height:100"></textarea>

<input type="submit" value="Send">
   </div>
</form>

    
</body>
</html>

<?php

}//else
}

?>