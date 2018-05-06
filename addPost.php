<?php
session_start();
ob_start();
 require "connect.php";

 
$email=$_SESSION['email'];
echo $email;

 if(!isset($email)|| empty($email)){
 header("Location: login.php");
   
}

else{
    
$user=User::find_by_email($email);

   // print_r($user);
    $id=$user->uid;
   
   
    


if(isset($_POST['content'])){
   
    $content = $_POST['content'];
    $checked = $_POST['options'];

Post::create(array('p_content'=>$content,'c_id'=>$checked,'u_id'=>$id,'p_status'=>0,'p_date'=>"2018-03-12" ));
  
echo  "<script type='text/javascript'>alert('wait after admin approve !');</script>";     

}

else{
?>
<html>

<head>
<title>add post</title> 
<link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>

    <form action="" method="post">

    <div class="container" >
 

<!--<?php //echo $option ;?> --> 

<select name="options" style="width:100px">
<option value="1" selected>Sports</option>
<option value="2">News</option>
<option value="3">Educational</option>
<option value="4">Social</option>
       
       
        </select>
            
</div>
       <div class="container">


          
    <textarea type="text" id="content" name="content" placeholder="type your post" style="height:400px"> </textarea >
    
    <input type="submit" value="Save">


       </div>

    </form>

</body>
</html>
<?php
}

}

/*$postes=Post::all(array('conditions' => 'p_status=1 '));

print_r($postes);


for($i=0;$i<count($postes);$i++){

  $id=$postes[$i]->pid;
  print $id;
}
*/

?>





