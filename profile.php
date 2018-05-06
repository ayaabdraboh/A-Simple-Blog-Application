<?php 
session_start();

require "connect.php";

$email=$_SESSION['email'];;



 if(!isset($email)|| empty($email)){
  header("Location: login.php");
  
   
}

else{
    
   $user=User::find_by_email($email);

    $id=$user->uid;
    $all_posts=Post::all();

    if(isset($_POST['inputs']))
    {
        $text=$_POST['inputs'];  
        Post::create(array('p_content'=>$text,'c_id'=>1,'u_id'=>$id,'p_status'=>0,'p_date'=>date("h:i:sa") ));
  
        echo  "<script type='text/javascript'>alert('wait after admin approve !');</script>";     
    
    
        echo $text;
    }else{

?>
<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<body class="w3-theme-l5">

<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">My Profile</h4>
         <p class="w3-center"><img src="images/3.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Designer, UI</p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> London, UK</p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> April 1, 1988</p>
        </div>
      </div>
      <br>
  
    </div>
 
    <div class="w3-col m7">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">Start posting </h6>
              <form method="post">
             <i class="fa fa-pencil"></i> <input contenteditable="true" class="w3-border w3-padding" type="text" name="inputs"></input>
              
              <!--input type="button" class="w3-button w3-theme" style="width:100px;" name="posts" value="post"-->
              </form>   
            </div>
          </div>
        </div>
      </div>
        <?php 
        $user_name=User::find($id); 
               
        foreach ($all_posts as $key) {
          
        ?>
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <img src="<?php echo $user_name->u_img ?>" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity"><?php echo $key->p_date->format('Y-m-d'); ?></span>
        <h4><?php  echo $user_name->f_name;?></h4><br>
        <hr class="w3-clear">
        <p><?php echo $key->p_content; ?></p>
          <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half">
              <img src="<?php echo $key->p_img ?>" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
            </div>
            
        </div>
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
      </div>
      </div> 
  </div>

</div>
<br>
</body>
</html> 
<?php
       }}   }
    ?>