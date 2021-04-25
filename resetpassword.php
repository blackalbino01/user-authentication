<?php
if(isset($_POST['new_password'])) {
  
  require'config.php';
  $email = $_POST['email'];
  $new_pass = $_POST['new_pass'];
  $new_pass_c = $_POST['new_pass_c'];

  if ($new_pass !== $new_pass_c) echo "Password do not match";

  elseif ($new_pass === $new_pass_c) {

  	$mysqli=$conn->prepare('UPDATE users SET password=$new_pass WHERE email = $email');

   

    header('location: login.php');  
  }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Password Reset</title>
</head>
<body>
	<style type="text/css">
		body{
			background: #C0C0C0;
			color: black;
		}
		.newpassword{
			position: fixed;
			top: 200px;
			left: 40%;
		}
	</style>
	<div class="newpassword">
		<form class="login-form" action="resetpassword.php" method="post">
			<h2 class="form-title">New password</h2>
			<div class="form-group">
				<label for="exampleInputEmail1">Email<span style="color: red;">*</span></label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="email"  required>
			</div>
			<div class="form-group">
				<label>New password</label>
				<input type="password" name="new_pass">
			</div>
			<div class="form-group">
				<label>Confirm new password</label>
				<input type="password" name="new_pass_c">
			</div>
			<div class="form-group">
				<button type="submit" name="new_password" class="login-btn">Submit</button>
			</div>
		</form>
	</div>
</body>
</html>