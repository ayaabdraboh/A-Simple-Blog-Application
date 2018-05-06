<?php
 require "connect.php";
 $uid=$_GET['id'];
 echo "inside edit ".$ui;
 $user=User::find_by_uid($ui);
if(!$user){
    echo "error in connection"."<br>";
    exit;
}

?>
