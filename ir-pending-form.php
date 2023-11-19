<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Incident Report | Review Pending Form</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="ir-pending-form1.css">
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

if (isset($_GET['report_no'])) 
{
include ("db-connect.php");

$rno=$_GET['report_no'];
  $email=$_GET['reported_by'];

  $search="SELECT * from pending_report where(report_no='$rno')";
  $result=mysqli_query($con,$search);

  $ssearch="SELECT * from stud_admin_rec where(email='$email')";
  $sresult=mysqli_query($con,$ssearch);

print "

        <div class='menu-items'>
            <ul class='nav-links'>
            <li><a href='ir-report-pending.php'>
            <i class='uil uil-file-alt'></i>
            <span class='link-name'>Pending Report</span>
        </a></li>

        <li><a href='ir-report-rec.php'>
        <i class='uil uil-file-check-alt'></i>
            <span class='link-name'>Responded Report</span>
        </a></li>

        <li><a href='ir-report-ignored.php'>
        <i class='uil uil-file-times-alt'></i>
            <span class='link-name'>Ignored Report</span>
        </a></li>

        <li><a href='stud-list.php'>
        <i class='uil uil-users-alt'></i>
            <span class='link-name'>Student List</span>
        </a></li>

        <li><a href='admin-list.php'>
        <i class='uil uil-user-md'></i>
            <span class='link-name'>College & Dept. Staff List</span>
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
      $a=$rec['involved_person'];
      $b=$rec['ip_stat'];
      $c=$rec['date'];
      $d=$rec['time'];
      $e=$rec['loc'];
      $f=$rec['ip_sevlevel'];
      $g=$rec['ip_incident'];
      $h=$rec['ip_detail'];
      $no=$rec['report_no'];
      $image=$rec['image'];
      $simage=$rec['simage'];

      while ($rec=mysqli_fetch_array($sresult,MYSQLI_ASSOC)) 
    {
      $stat=$rec['status'];
      $name=$rec['name'];
      $con=$rec['contact'];
      $email=$rec['email'];
       

      print " 
      <div class='top'>
            <i class='uil uil-bars sidebar-toggle'></i>
        </div>

        <div class='lightbox'>
        <div class='wrapper'>
        <header>
        <div class='buttons'><i class='close-icon uil uil-times'></i></div>
        </header>
        <div class='preview-img'>
        <div class='img'><img src=$image alt='preview-img'></div>
        </div>
        </div>
        </div>

        <div class='dash-content'>

        <div class='title'>
            <header>REVIEW PENDING FORM<header>
        </div>
      
      <div class='main-form'>
			<div class='form-box'>
               <form action='ir-response-report.php' method='post' enctype='multipart/form-data'>

               <input type='text' name='txtNo' value='$no' hidden>
              
                    <div class='details personal'>
                        <span class='title1'>Reported By</span>
                        <div class='fields'>
                        <div class='input-fields'>
								<label>Status</label>
								<input type='text' value='$stat' readonly>
							</div>

							<div class='input-fields'>
								<label>Name</label>
								<input type='text' value='$name' readonly>
							</div>

							<div class='input-fields'>
								<label>Contact</label>
								<input type='text' value='$con' readonly>
							</div>

							<div class='input-fields'>
								<label>Email</label>
								<input type='text' value='$email' name='txtemail' readonly>
							</div> 
                        </div> 
                       

                  <div class=details personal>
                        <span class=title1>Incident Details</span>
                        <div class=fields>
							<div class=input-fields>
								<label>Involved Person</label>
								<input type=text value='$a' name='txtInvolved' readonly>
							</div>

                            <div class=input-fields>
								<label>Status</label>
								<input type='text' value='$b' name='txtStat' readonly>
							</div>

							<div class='input-fields'>
								<label>Date of Incident</label>
								<input type='date' value='$c' name='txtDate'readonly>
							</div>

							<div class='input-fields'>
								<label>Time of Incident</label>
								<input type='time' value='$d' name='txtTime' readonly>
							</div>

                            <div class='input-fields'>
								<label>Location of Incident</label>
								<input type='text' value='$e' name='txtLoc' readonly>
							</div>

                            <div class='input-fields'>
								<label>Severity Level</label>
								<input type='text' value='$f' name='txtSev' readonly>
							</div>

                            <div class=input-fields>
                            <label>Incident Type</label>
                            <input type='text' value='$g' name='txtType' readonly>
                        </div>

							<div class='input-fields'>
								<label>Supporting Details (Optional)</label>
								<input type='text' value='$h' name='txtSdetails' readonly>
							</div>

                            <div class='input-fields'>
                            <label>Supporting Image (Optional)</label>
                            <section class='gallery'>
                            <ul class='images'>
                            <li class='img'><img src=$image></li>
                            <input type='text' value='$image' name='image' hidden>
                            </ul>
                            </section> 
                        </div>

                        
                        <script type='text/javascript'>
                        const allImages = document.querySelectorAll('.images .img');
                     const lightbox = document.querySelector('.lightbox');
                     const closeImgBtn = lightbox.querySelector('.close-icon');
                     
                     allImages.forEach(img => {
                         // Calling showLightBox function with passing clicked img src as argument
                         img.addEventListener('click', () => showLightbox(img.querySelector('img').src));
                     });
                     
                     const showLightbox = (img) => {
                         // Showing lightbox and updating img source
                         lightbox.querySelector('img').src = img;
                         lightbox.classList.add('show');
                         document.body.style.overflow = 'hidden';
                     }
                     
                     closeImgBtn.addEventListener('click', () => {
                         // Hiding lightbox on close icon click
                         lightbox.classList.remove('show');
                         document.body.style.overflow = 'auto';
                     });
                       </script>

                       <input type='text' value='$simage' name='simage' hidden>

                        <div class=input-fields>
                            <label>Date Responded/Ignored</label>
                            <input type='date' name='txtdateRes' placeholder='Enter date responded' required>
                        </div>

                        <div class='input-fields'>
								<label>Action Taken</label>
								<select id=level name=irAction>
									<option selected disabled>Choose Action</option>
									<option value='Probation'>Probation</option>
									<option value='Suspension'>Suspension</option>
									<option value='Dismissal/Non Re-admission/Exculsion'>Dismissal/Non Re-admission/Exculsion</option>
									<option value='Expulsion'>Expulsion</option>
								</select>
							</div>

                        <div class=input-fields>
                            <label>Reason for ignoring</label>
                            <input type='text' name='txtIgnore'>
                        </div> 
                        
                     ";
    }
}
}
?>

<?php
    include ("db-connect.php");
         if(isset($_GET['report_no']))
       {
         $rno=$_GET['report_no'];
       
                 print "      
                 <div class='choice-btn'>
                       <button name='btnCancel' type='submit' class='cancel-btn'>IGNORE</button>
                       <button name='btnRes' type='submit' class='res-btn'>RESPOND</button>
                       <button name='btnView' type='submit' class='res-btn'><a href=ir-video-view.php?report_no=$rno>VIEW</a></button>
       </div>
                       </div> ";
       }
?>

                        </div>
                    </div>
               </form>
			</div>
        </div>
    </section>

    <script src='dashboard.js'></script>
    
</body>
</html>
   
  



  
 



