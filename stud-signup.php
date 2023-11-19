<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>
    <meta charset="UTF-8">
    <title> Incident Report | Student Sign Up </title>
    <link rel="stylesheet" href="signup1.css">
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
				<button type="button" class="toggle-btn">Student</button>
				<a href="admin-signup.php"><button type="button" class="toggle-btn" id="admin-btn">Admin</button></a>
			</div>

			<div class="input-box">
			<form action="stud-signup.php" method="post" enctype="multipart/form-data">

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
								<input type="text" name=txtName placeholder="Enter Full Name" required>
							</div>

							<div class="input-field">
								<label>Year / Section</label>
								<select name=txtLevel id="level" required>
									<option selected disabled>Choose Year Level & Section</option>
									<option value="1 - A"> 1 - A</option>
									<option value="1 - B">1 - B</option>
									<option value="1 - C">1 - C</option>
									<option value="2 - A">2 - A</option>
									<option value="2 - B">2 - B</option>
									<option value="2 - C">2 - C</option>
									<option value="3 - A">3 - A</option>
									<option value="3 - B">3 - B</option>
									<option value="3 - C">3 - C</option>
									<option value="4 - A">4 - A</option>
									<option value="4 - B">4 - B</option>
									<option value="4 - C">4 - C</option>
								</select>
							</div>

							<div class="input-field">
								<label>College Dept.</label>
								<select name=txtDept id="level" required>
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
								<input type="text" name=txtNo placeholder="Enter Contact No." required>
							</div>

							<input type="hidden" name=txtStud value="Student">

							<div class="input-field">
								<label>Email</label>
								<input type="email" name=txtEmail placeholder="Enter Student Email" required>
							</div>

							<div class="input-field">
								<label>Password</label>
								<input type="password" name=txtPass placeholder="Enter Password" required>
							</div>

							<div class='input-field'>
								<label>Certificate of Registration</label>
								<input name=simage type='file' id='supload-img'>
                                <span id='stext-img'>Upload COR</span>
                                <button type='button' id='sbtn-img'>Upload</button>
							</div>
                            
                        <script type='text/javascript'>
                            const srealFileBtn = document.getElementById('supload-img');
                            const scustomBtn = document.getElementById('sbtn-img');
                            const scustomTxt = document.getElementById('stext-img');
                            
                            scustomBtn.addEventListener('click', function() {
                                srealFileBtn.click();
                            });

                            srealFileBtn.addEventListener('change', function() {
                                if (srealFileBtn.value) {
                                    scustomTxt.innerHTML = srealFileBtn.value.match(
                                         /[\/\\]([\w\d\s\.\-\(\)]+)$/
                                         )[1];
                                        } else {
                                            scustomTxt.innerHTML = 'Upload book cover.';
                                        }
                                        });
                        </script>

							<button name="btnStud" type="submit" class="submit-btn">SIGN UP</button>

                        </div>
                    </div>
				</div>

				<div class="img-box">
						<img src="https://64.media.tumblr.com/48316e0f45178088fa6332627710ecd5/460ec81dc014e796-42/s500x750/38c008bc5f8cea0b66040e70eab104243b70b317.pnj">
					</div>

<?php

if (isset($_POST['btnStud'])) {

    $email=$_POST['txtEmail'];
	$pass=$_POST['txtPass'];
	$a=$_POST['txtName'];
	$b=$_POST['txtLevel'];
	$c=$_POST['txtDept'];
	$d=$_POST['txtNo'];
	$e=$_POST['txtStud'];
	$file = $_FILES['image']['name'];
	$sfile = $_FILES['simage']['name'];
    

include ("db-connect.php");

  $search="SELECT email FROM stud_admin_rec WHERE(email='$email')";
  
  $result=mysqli_query($con,$search);
  $count=mysqli_num_rows($result);

  if ($count==0)
  {

	$insert="INSERT INTO pending_report(reported_by) VALUES ('$email')";
	mysqli_query($con,$insert);

    $query="INSERT INTO stud_admin_rec (email,password,name,yr_sec,department,contact,status,image,simage) VALUES ('$email','$pass','$a','$b','$c','$d','$e','$file','$sfile')";
    
	$res = mysqli_query($con,$query);


	if ($res) {
		move_uploaded_file($_FILES['image']['tmp_name'], "$file");
		move_uploaded_file($_FILES['simage']['tmp_name'], "$sfile");
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
	  <button class='pop-btn'><a href=stud-signup.php>TRY AGAIN</a></button>
  </div>
</div>
</div>
<header>
</body>
</html>"
; 

}

?>