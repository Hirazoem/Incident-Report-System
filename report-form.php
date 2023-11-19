<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Incident Report | Report Form</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="report-form1.css">
    <link rel="stylesheet" href="dashboard1.css">
     
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    
</head>
<body>

<nav>
<div class="logo-name">
    <div class="logo-image">
       <img src="logo.png" alt="">
    </div>
    <span class="logo_name">Incident Report</span>
</div>  

<?php             

if (isset($_GET['email'])) 
{
    $email=$_GET['email'];

include ("db-connect.php");

$search="SELECT email,name,contact,status,image from stud_admin_rec where(email='$email')";
$result=mysqli_query($con,$search);

print "

        <div class='menu-items'>
            <ul class='nav-links'>

                <li><a href='profile1.php?email=$email'>
                    <i class='uil uil-user-square'></i>
                    <span class='link-name'>Account</span>
                </a></li>

                <li><a href='report-form.php?email=$email'>
                    <i class='uil uil-file-alt'></i>
                    <span class='link-name'>Report Form</span>
                </a></li>

                <li><a href='report-pending.php?email=$email'>
                    <i class='uil uil-envelope-upload'></i>
                    <span class='link-name'>Pending Report</span>
                </a></li>

                <li><a href='report-pending.php?email=$email'>
                    <i class='uil uil-books'></i>
                    <span class='link-name'>Report History</span>
                </a></li>

            </ul>
            
            <ul class='logout-mode'>
                <li><a href='login.php'>
                    <i class='uil uil-signout'></i>
                    <span class='link-name'>Logout</span>
                </a></li>

                <div class='mode-toggle'> 
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class='dashboard'>

    <section id='up'></section>
    <section id='down'></section>
    <section id='left'></section>
    <section id='right'></section>

    ";

    while ($rec=mysqli_fetch_array($result,MYSQLI_ASSOC)) 
    {
      $email=$rec['email'];
      $a=$rec['status'];
      $b=$rec['name'];
      $c=$rec['contact'];
      $pfp=$rec['image'];

      print " 
      <div class='top'>
            <i class='uil uil-bars sidebar-toggle'></i>
            <img src='$pfp'>
        </div>

        <div class='dash-content'>
             
                <div class='title'>
                    <header>REPORT FORM<header>
                </div> 
      
      <div class='main-form'>
			<div class='form-box'>
               <form action='report-submit.php' method='post' enctype='multipart/form-data'>
              
                    <div class='details personal'>
                        <span class='title1'>Personal Details</span>
                        <div class='fields'>
                        <div class='input-fields'>
								<label>Status</label>
								<input type='text' value='$a'>
							</div>

							<div class='input-fields'>
								<label>Name</label>
								<input type='text' value='$b'>
							</div>

							<div class='input-fields'>
								<label>Contact</label>
								<input type='text' value='$c'>
							</div>

							<div class='input-fields'>
								<label>Email</label>
								<input type='text' value='$email' name='txtemail' >
							</div> 
                        </div> 
                        ";
                    }
                    }
                    
                    ?>

                  <div class=details personal>
                        <span class=title1>Incident Details</span>
                        <div class=fields>
							<div class=input-fields>
								<label>Involved Person</label>
								<input type=text placeholder='Enter Full Name' name='txtInvolved'>
							</div>

                            <div class=input-fields>
								<label>Status</label>
								<select id=level name="txtStatus">
									<option selected disabled>Choose Person's Status</option>
									<option value="Student">Student</option>
									<option value="College & Dept. Staff">College & Dept. Staff</option>
								</select>
							</div>

							<div class='input-fields'>
								<label>Date of Incident</label>
								<input type='date' placeholder='Enter Date' name='txtDate'>
							</div>

							<div class='input-fields'>
								<label>Time of Incident</label>
								<input type='time' placeholder='Enter Time' name='txtTime'>
							</div>

                            <div class='input-fields'>
								<label>Location of Incident</label>
								<input type='text' placeholder='Enter Location' name='txtLoc' >
							</div>

                            <div class='input-fields'>
								<label>Severity Level</label>
								<select name="irLevel" id="slct1" onchange="populate(this.id,'slct2')">
									<option selected disabled>Choose Severity Level</option>
									<option value="S">S</option>
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="C">C</option>
									<option value="F">F</option>
								</select>
							</div>


                            <div class=input-fields>
                            <label>Incident Type</label>
                            <select name="irType" id="slct2">
                            </select>
                        </div>

                        
        <script>
		
		function populate(s1,s2)
		{
			var s1 = document.getElementById(s1);
			var s2 = document.getElementById(s2);

			s2.innerHTML = "";

			if(s1.value == "S")
			{
				var optionArray = ['Fire Alarms and Evacuations|Fire Alarms and Evacuations','Health Emergencies|Health Emergencies'];
			}
			else if(s1.value  == 'A')
			{
				var optionArray = ['Sexual Assault and Harassment|Sexual Assault and Harassment','Physical Altercations|Physical Altercations','PDA and Inappropriate Sexual Activities|PDA and Inappropriate Sexual Activities']; 
			}
            else if(s1.value  == 'B')
			{
				var optionArray = ['Accidents and Injuries|Accidents and Injuries','Discrimination and Prejudice|Discrimination and Prejudice','Student Organization Conflicts|Student Organization Conflicts','Health Code Violation|Health Code Violation','Unauthorized Access to Restricted Areas|Unauthorized Access to Restricted Areas'];
			}
            else if(s1.value  == 'C')
			{
				var optionArray = ['Alcohol and Substance Abuse|Alcohol and Substance Abuse','Abuse|Abuse','Hazing|Hazing','Intoxication and Disruptive Behavior|Intoxication and Disruptive Behavior','Bullying|Bullying'];
			}
            else if(s1.value  == 'F')
			{
				var optionArray = ['Academic Misconduct|Academic Misconduct','Vandalism and Property Damage|Vandalism and Property Damage','Theft|Theft','Technology Misuse|Technology Misuse'];
			}

			for(var option in optionArray)
			{
				var pair = optionArray[option].split("|");
				var newoption = document.createElement("option");

				newoption.value = pair[0];
				newoption.innerHTML=pair[1];
				s2.options.add(newoption);
			}

		}

	</script>

							<div class='input-fields'>
								<label>Supporting Details (Optional)</label>
								<input type='text' placeholder='Add details (Max. 1000)' name='txtSdetails'>
							</div>

                            <div class='input-fields'>
								<input name=image type='file' id='upload-img'>
                                <span id='text-img'>Add Image</span>
                                <button type='button' id='btn-img'>Upload</button>
							</div>

                            <div class='input-fields'>
								<input name=simage type='file' id='supload-img'>
                                <span id='stext-img'>Add Video</span>
                                <button type='button' id='sbtn-img'>Upload</button>
							</div>
                            
                        <script type='text/javascript'>
                            const realFileBtn = document.getElementById('upload-img');
                            const customBtn = document.getElementById('btn-img');
                            const customTxt = document.getElementById('text-img');
                            
                            customBtn.addEventListener('click', function() {
                                realFileBtn.click();
                            });

                            realFileBtn.addEventListener('change', function() {
                                if (realFileBtn.value) {
                                    customTxt.innerHTML = realFileBtn.value.match(
                                         /[\/\\]([\w\d\s\.\-\(\)]+)$/
                                         )[1];
                                        } else {
                                            customTxt.innerHTML = 'Upload book cover.';
                                        }
                                        });
                        </script>;
                        
                        <script type='text/javascript'>
                            const srealFileBtn = document.getElementById('supload-img');
                            const scustomBtn = document.getElementById('sbtn-img');
                            const scustomTxt = document.getElementById('stext-img');
                            
                            customBtn.addEventListener('click', function() {
                                realFileBtn.click();
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
                        </script>;
                        

                            <button name='btnSubmit' type='submit' class='submit-btn'>SUBMIT REPORT</button>

                        </div>
                    </div>
               </form>
			</div>
        </div>
    </section> 
  

<script src='dashboard.js'></script>
</body>
</html>

