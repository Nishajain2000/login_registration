<?php

$username = null;
$password = null;
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    
        $password = $_POST["password"];
        $gmail = $_POST["gmail"];
        $error=0;
{

        $newdir = $gmail."_".$password;

         mkdir($newdir);

      }	
    }
    
        
    

 ?>


<!DOCTYPE html>
<html>
<head><title>trying</title>
	<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
<div class="container">
	<div class="form">
		<div class="header">
			<h1>REGISTRATION FORM</h1><hr>
		</div>
		<div class="elements">
		<form action='' method="post">
		
			
			<label class="email">Write your Gmail address</label><br>
			<input type="email" name="gmail" placeholder="@ggmail.com"><br>

			<label class="password">Write your password</label><br>
			<input type="password" name="password" placeholder="********"><br>




			<input type="submit" name="submit"><br>

			<a href="index.php">click here to log in</a><br>
<a href="password.php">forgotten password</a>
		</form>
		</form>
	</div>

</div>

	
</body>
</html>
<?php ?>
