<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>
    <meta charset="UTF-8">
    <title> Incident Report | Login </title>
    <link rel="stylesheet" href="login.css">
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
        <a href="homepage.php"><input type="button" value="HOME"></a></div>
        <li><a href="stud-signup.php">Sign Up</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>

   <div class="container">
   <div class="form-box">
    <div class="login-header">
		<img src="login.png" id="icon">
            <h1>Login</h1>
        </div>

			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="stud()">Student</button>
				<button type="button" class="toggle-btn" onclick="admin()">Admin</button>
			</div>

			<form method="post" action="profile.php" id="stud" class="input-group">
				<input name="txtemail" type="email" class="input-field" placeholder="STUDENT EMAIL" required>
				<input name="txtpass" type="password" class="input-field" placeholder="PASSWORD" required>
				<span></span>
				<button name="btnStud" type="submit" class="submit-btn">LOG IN</button>
			</form>

			<form method="post" action="profile.php" id="admin" class="input-group">
				<input name="txtemail" type="email" class="input-field" placeholder="ADMIN EMAIL" required>
				<input name="txtpass" type="password" class="input-field" placeholder="PASSWORD" required>
				<span></span>
				<button name="btnAdmin" type="submit" class="submit-btn">LOG IN</button>
			</form>
		</div>

        <div class="img-box">
          <img src="login-icon.png">
        </div>

        <script>
		var x = document.getElementById("stud");
		var y = document.getElementById("admin");
		var z = document.getElementById("btn");

		function admin() {
			x.style.left = "-750px";
			y.style.left = "110px";
			z.style.left = "113px";
		}

		function stud() {
			x.style.left = "110px";
			y.style.left = "700px";
			z.style.left = "0";
		}
	</script>

    


