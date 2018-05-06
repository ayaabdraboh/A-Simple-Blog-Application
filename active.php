<?php
 require "connect.php";
 $id=$_GET['id'];
 $sid=$_GET['sid'];
$cid=$_GET['cid'];
 if( $id){

 
$update_user=User::find(array($id));
$update_user->status=1; 
$update_user->save();
 echo $id;
 }
 else if( $sid){

  $update_post=Post::find(array($sid));
$update_post->p_status=1; 
$update_post->save();
 }
else if( $cid){

$update_comment=Comment::find(array($cid));
$update_comment->c_status=1; 
$update_comment->save();
 }
 header("Location: admin.php");



 
?>