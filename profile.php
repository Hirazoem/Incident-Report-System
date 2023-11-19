<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Incident Report | Account </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="dashboard1.css">
    <link rel="stylesheet" href="profile.css">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
   
</head>
<body>

    <nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="logo.png">
            </div>
            <span class="logo_name">Incident Report</span>
        </div>

        <?php
                if (isset($_POST['btnStud'])) {

$a=$_POST['txtemail'];
$b=$_POST['txtpass'];

include ("db-connect.php");

$search="SELECT * from stud_admin_rec where(email='$a' and password='$b')";
$result=mysqli_query($con,$search);
$count=mysqli_num_rows($result);

print "
        <div class='menu-items'>
            <ul class='nav-links'>


                <li><a href='profile1.php?email=$a'>
                    <i class='uil uil-user-square'></i>
                    <span class='link-name'>Account</span>
                </a></li>

                <li><a href='report-form.php?email=$a'>
                    <i class='uil uil-file-alt'></i>
                    <span class='link-name'>Report Form</span>
                </a></li>

                <li><a href='report-pending.php?email=$a'>
                    <i class='uil uil-envelope-upload'></i>
                    <span class='link-name'>Pending Report</span>
                </a></li>

                <li><a href='report-history.php?email=$a'>
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
      <section id='right'></section> ";
    
if ($count == 0) {
    print "
    <div class='popup' id='popup-1'>
    <div class='overlay'></div>
    <div class='content'>
        <div class='error-title'>LOGIN ERROR</div>
        <div class='error'><img src='login-error.png'></div>
        <div class='error-msg'><p>The password or email you entered is invalid. Please try again.</p></div>
        <button class='error-btn'><a href=login.php>TRY AGAIN</a></button>
    </div>
  </div>
  </div>
  <header>
  </body>
  </html>"
  ;
  }

else {
  while ($rec=mysqli_fetch_array($result,MYSQLI_ASSOC)) 
    {
      $pfp=$rec['image']; 
      $a=$rec['name'];
      $b=$rec['status'];
      $c=$rec['email'];
      $d=$rec['department'];
      $e=$rec['yr_sec'];
      $f=$rec['contact'];
      
print "  <div class='top'> 
<i class='uil uil-bars sidebar-toggle'></i>
  <img src=$pfp>
</div>

<div class='dash-content'>
   
      <div class='title'>
        <header>ACCOUNT<header>
      </div> 

        <div class='wrapper'>
    <div class='left'>
        <img src=$pfp
        alt='user' width='100'>
        <h4>$a</h4>
         <p>$b</p>

         <a href='stud-edit.php?email=$c'><button name='btnSubmit' type='submit' class='submit-btn'>Edit Profile</button></a>

    </div>

    <div class='right'>
        <div class='info'>
            <h3>Information</h3>
            <div class='info_data'>
            
                 <div class='data'>
                    <h4>Email</h4>
                    <p>$c</p>
                 </div>

                 <div class='data'>
                   <h4>Department</h4>
                    <p>$d</p>     
              </div>

              <div class='data'>
                   <h4></h4>
                    <p>$e</p>     
              </div>

              <div class='data'>
                   <h4>Contact</h4>
                    <p>$f</p>     
              </div>
            </div>
        </div>

      </div>
    </div>
</div>
        </div>
    </section>

    ";
    }      
}    
}
         
?>



<?php
if (isset($_POST['btnAdmin'])) {
    $a=$_POST['txtemail'];
    $b=$_POST['txtpass'];

include ("db-connect.php");

$search="SELECT * from stud_admin_rec where(email='$a' and password='$b')";
$result=mysqli_query($con,$search);
$count=mysqli_num_rows($result);

print "
        <div class='menu-items'>
            <ul class='nav-links'>

                <li><a href='profile1.php?email=$a'>
                    <i class='uil uil-user-square'></i>
                    <span class='link-name'>Account</span>
                </a></li>

                <li><a href='report-form.php?email=$a'>
                    <i class='uil uil-file-alt'></i>
                    <span class='link-name'>Report Form</span>
                </a></li>

                <li><a href='report-pending.php?email=$a'>
                    <i class='uil uil-envelope-upload'></i>
                    <span class='link-name'>Pending Report</span>
                </a></li>

                <li><a href='report-history.php?email=$a'>
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
<section id='right'></section>";

if ($count == 0) {
    print "
    <div class='popup' id='popup-1'>
    <div class='overlay'></div>
    <div class='content'>
        <div class='error-title'>LOGIN ERROR</div>
        <div class='error'><img src='login-error.png'></div>
        <div class='error-msg'><p>The password or email you entered is invalid. Please try again.</p></div>
        <button class='error-btn'><a href=login.php>TRY AGAIN</a></button>
    </div>
  </div>
  </div>
  <header>
  </body>
  </html>"
  ;
  }

else {
  while ($rec=mysqli_fetch_array($result,MYSQLI_ASSOC)) 
    {
      $pfp=$rec['image']; 
      $a=$rec['name'];
      $b=$rec['status'];
      $c=$rec['email'];
      $d=$rec['department'];
      $e=$rec['profession'];
      $f=$rec['contact'];
      

print " <div class='top'>
  <i class='uil uil-bars sidebar-toggle'></i>
  <img src=$pfp>
</div>

<div class='dash-content'>
   
      <div class='title'>
        <header>ACCOUNT<header>
      </div> 

      <div class='wrapper'>
    <div class='left'>
        <img src=$pfp
        alt='user' width='100'>
        <h4>$a</h4>
         <p>$b</p>

        <a href='admin-edit.php?email=$c'><button name='btnSubmit' type='submit' class='submit-btn'>Edit Profile</button></a>

    </div>

    <div class='right'>
        <div class='info'>
            <h3>Information</h3>
            <div class='info_data'>

                 <div class='data'>
                    <h4>Email</h4>
                    <p>$c</p>
                 </div>

                 <div class='data'>
                   <h4>Department</h4>
                    <p>$d</p>     
              </div>

              <div class='data'>
                   <h4></h4>
                    <p>$e</p>     
              </div>

              <div class='data'>
                   <h4>Contact</h4>
                    <p>$f</p>     
              </div>
            </div>
        </div>

      </div>
    </div>
</div>
        </div>
    </section>
    ";
    }      
}     
}
            
?>

<script src="dashboard.js"></script>
</body>
</html>