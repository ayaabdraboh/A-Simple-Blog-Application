<?php 
session_start();
require "connect.php";
if(isset($_POST['mail'])){
$email=$_POST['mail'];
$password=$_POST['pwd'];
echo "in";

$_SESSION["email"] = $email;
header("Location: home.php");

}
else{

?>

<!DOCTYPE html>
<html>
<head>
<title> Sign Up </title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flat Sign Up Form Responsive Widget Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Raleway+Dots' rel='stylesheet' type='text/css'>
</head>
<body>
<!--header-->
	
<!--//header-->
<!--main-->
<div class="main-agileits">
	<h2 class="sub-head">Sign In</h2>
		<div class="sub-main">	
			<form action="#" method="post">
				<input placeholder="Email" name="mail" class="mail" type="text" required="">
					<span class="icon4"><i class="fa fa-envelope" aria-hidden="true"></i></span><br>

				<input  placeholder="Password" name="pwd" class="pass" type="password" >

					<span class="icon5"><i class="fa fa-unlock" aria-hidden="true"></i></span><br>

				<input type="submit" value="sign in">
			</form>
		</div>
		<div class="clear"></div>
</div>
<!--//main-->

<!--footer-->

<!--//footer-->

</body>
</html>
<?php
}


session_start();



//print_r($_SESSION);

?>