<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>
    <meta charset="UTF-8">
    <title> Incident Report | Admin Sign Up </title>
    <link rel="stylesheet" href="signup.css">
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
        <li><a href="login.php">Login</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>

   <div class="container">
   <div class="form-box">
    <div class="login-header">
        <h1>Sign Up</h1>
        </div>

			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn">Admin</button>
				<a href="stud-signup.php"><button type="button" class="toggle-btn" id="admin-btn">Student</button></a>
			</div>

			<div class="input-box">
			<form action="admin-signup.php" method="post" enctype="multipart/form-data">

			<div class="profile"><img src="blank.jpg" id="profile-pic"></div> 
			<input name=image type="file" id="upload-img" required>
			<span id="text-img">UPLOAD</span>
			<button type="button" id="btn-img" class="labelInput">UPLOAD IMAGE</button>
			
<script type="text/javascript">
			let profilePic = document.getElementById("profile-pic");
        let inputFile = document.getElementById("upload-img");

        inputFile.onchange = function() {
            profilePic.src = URL.createObjectURL(inputFile.files[0]);

        }
		
		const realFileBtn = document.getElementById("upload-img");
		const customBtn = document.getElementById("btn-img");
		const customTxt = document.getElementById("text-img");
			
			customBtn.addEventListener("click", function() {
				realFileBtn.click();
			});
			
			realFileBtn.addEventListener("change", function() {
				if (realFileBtn.value) {
					customTxt.innerHTML = realFileBtn.value.match(
						/[\/\\]([\w\d\s\.\-\(\)]+)$/
						)[1];
					} else {
						customTxt.innerHTML = "Upload book cover.";
					 }
					 });
</script>

                <div class="input-group">
					<div class="input-field">
								<label>Name</label>
								<input type="text" name=txtName placeholder="Enter Full Name">
							</div>

							<div class="input-field">
								<label>Profession</label>
								<select name="txtProf" id="level">
									<option selected disabled>Choose Profession</option>
									<option value="Professor">Professor</option>
									<option value="">Professor</option>
									<option value="">Professor</option>
									<option value="">Professor</option>
									<option value="">Professor</option>
								</select>
							</div>

							<div class="input-field">
								<label>Department</label>
								<select name="txtDept" id="level">
									<option selected disabled>Choose Department</option>
									<option value="College of Architecture and Fine Arts">College of Architecture and Fine Arts</option>
									<option value="College of Arts and Sciences">College of Arts and Sciences</option>
									<option value="College of Business and Public Administration">College of Business and Public Administration</option>
									<option value="College of Education">College of Education</option>
									<option value="College of Engineering">College of Engineering</option>
									<option value="College of Hotel and Tourism Management">College of Hotel and Tourism Management</option>
									<option value="College of Industrial Technology">College of Industrial Technology</option>
									<option value="College of Criminal Justice Education">College of Criminal Justice Education</option>
								</select>
							
							</div>

							<div class="input-field">
								<label>Contact</label>
								<input type="text" name=txtNo placeholder="Enter Contact No.">
							</div>

							<input type="hidden" name=txtStaff value="College & Dept. Staff">

							<div class="input-field">
								<label>Email</label>
								<input type="email" name=txtEmail placeholder="Enter Admin Email">
							</div>

							<div class="input-field">
								<label>Password</label>
								<input type="password" name=txtPass placeholder="Enter Password">
							</div>

							<button name="btnAdmin" type="submit" class="submit-btn">SIGN UP</button>

                        </div>
                    </div>
				</div>

				<div class="img-box">
						<img src="a-signup-icon.png">
					</div>

<?php

if (isset($_POST['btnAdmin'])) {

    $email=$_POST['txtEmail'];
	$pass=$_POST['txtPass'];
	$a=$_POST['txtName'];
	$b=$_POST['txtProf'];
	$c=$_POST['txtDept'];
	$d=$_POST['txtNo'];
	$e=$_POST['txtStaff'];
	$file = $_FILES['image']['name'];
    
include ("db-connect.php");

  $search="SELECT email FROM stud_admin_rec WHERE(email='$email')";
  $result=mysqli_query($con,$search);
  $count=mysqli_num_rows($result);

  if ($count==0)
  {

	$insert="INSERT INTO pending_report(reported_by) VALUES ('$email')";
	mysqli_query($con,$insert);

    $query="INSERT INTO stud_admin_rec (email,password,name,profession,department,contact,status,image) VALUES ('$email','$pass','$a','$b','$c','$d','$e','$file')";
    
	$res = mysqli_query($con,$query);

	if ($res) {
		move_uploaded_file($_FILES['image']['tmp_name'], "$file");
	}

	print "
	<div class='popup' id='popup-1'>
    <div class='overlay'></div>
    <div class='content'>
        <div class='title'>SUCCESS</div>
		<div class='pop'><img src='s-success.png'></div>
        <div class='pop-msg'><p>Your account has been successfully created.</p></div>
        <button class='pop-btn'><a href=login.php>CONTINUE</a></button>
    </div>
</div>
</div>
<header>
</body>
</html>"
;
}
else
  print "
  <div class='popup' id='popup-1'>
  <div class='overlay'></div>
  <div class='content'>
	  <div class='title'>REGISTRATION ERROR</div>
	  <div class='pop'><img src='s-error.png'></div>
	  <div class='pop-msg'><p>There is an existing account associated with this email address.</p></div>
	  <button class='pop-btn'><a href=admin-signup.php>TRY AGAIN</a></button>
  </div>
</div>
</div>
<header>
</body>
</html>"
; 

}

?>