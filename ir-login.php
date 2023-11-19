<?php
  ob_start();
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>
    <meta charset="UTF-8">
    <title> Incident Report | Login </title>
    <link rel="stylesheet" href="ir-login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>

<body>
  <header>

    <section id="up"></section>
    <section id="down"></section>
    <section id="left"></section>
    <section id="right"></section>

    <nav>
    <div class="logo">
    <a href="#"><div class="icon"><img src="logo.png"></a></div>
    </div>

      <ul class="menu">
      <div class="button">
    </nav>

   <div class="container">
   <div class="form-box">
    <div class="login-header">
		<img src="login.png" id="icon">
            <h1>Login</h1>
        </div>

			<form method="post" action="ir-login.php" id="stud" class="input-group">
				<input name="txtemail" type="email" class="input-field" placeholder="EMAIL" required>
				<input name="txtpass" type="password" class="input-field" placeholder="PASSWORD" required>
				<span></span>
				<button name="btnLogin" type="submit" class="submit-btn">LOG IN</button>
			</form>

		</div>

        <div class="img-box">
          <img src="login-icon.png">
        </div>

        <?php
if (isset($_POST['btnLogin'])) {

  $a=$_POST['txtemail'];
  $b=$_POST['txtpass'];

  include ("db-connect.php");

  $search="SELECT email,password from all_account where(email='$a' and password='$b')";
  $result=mysqli_query($con,$search);
  $count=mysqli_num_rows($result);

  if ($count == 0) {
    print "<div class='popup' id='popup-1'>
    <div class='overlay'></div>
    <div class='content'>
        <div class='error-title'>LOGIN ERROR</div>
        <div class='error'><img src='login-error.png'></div>
        <div class='error-msg'><p>The password or email you entered is invalid. Please try again.</p></div>
        <button class='error-btn'><a href=ir-login.php>TRY AGAIN</a></button>
    </div>
  </div>
  </div>
  "; 
  }
  else
    header("Location:ir-report-pending.php");
}
?>

    


