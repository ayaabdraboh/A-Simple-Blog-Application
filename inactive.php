<?php
 require "connect.php";
 $id=$_GET['id'];
 $sid=$_GET['sid'];
 if( $id){

 
$update_user=User::find(array($id));
$update_user->status=0; 
$update_user->save();
 echo $id;
 }
 else if( $sid){

  $update_post=Post::find(array($sid));
$update_post->p_status=0; 
$update_post->save();
 }
else if( $cid){
$update_comment=Post::find(array($cid));
$update_comment->c_status=0; 
$update_comment->save();
 }
 header("Location: admin.php");


?>
