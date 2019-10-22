<?php
$msg='';
	$username = null;
	$password = null;
	session_start();

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    	if(!empty($_POST["password"]) &&  !empty($_POST["gmail"])) {
             
             $password = $_POST["password"];
       		 $gmail = $_POST["gmail"];
        	 $newdir = $gmail."_".$password;

		if(is_dir($newdir))
  {
 		 header('location:logged.php');
  }
		else
  {
  	     $msg="you are not registered with us";
  }


 }
}



?>


<!DOCTYPE html>
<html>
<head><title>login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="form.css">
</head>

<body>
	<div class="container">
		<div class="form">
			<div class="header">
				<h1>LOGIN</h1><hr>
			</div>

		<div class="elements">
		<form action='' method="post">
		
			
			<label class="email">Write your Gmail address</label><br>
			<input type="email" name="gmail" placeholder="@ggmail.com"><br>

			<label class="password">Write your password</label><br>
			<input type="password" name="password" placeholder="********"><br>
			<input type="submit" name="submit" placeholder="login"><br>

			<a href="register.php">register</a><br>
			<a href="password.php">forgotten password</a>
		</form>
	</div>

</div>

	
</body>
</html>
<?php ?>
