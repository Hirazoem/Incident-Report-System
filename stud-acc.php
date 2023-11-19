<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Incident Report | Student Profile </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="dashboard1.css">
    <link rel="stylesheet" href="stud-acc.css">

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
  if (isset($_GET['email'])) 
  {
    $email=$_GET['email'];


include ("db-connect.php");

$search="SELECT * from stud_admin_rec WHERE(email='$email')";
$result=mysqli_query($con,$search);
$count=mysqli_num_rows($result);

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
      <section id='right'></section> ";
    

 
  while ($rec=mysqli_fetch_array($result,MYSQLI_ASSOC)) 
    {
      $a=$rec['name'];
      $b=$rec['status'];
      $c=$rec['email'];
      $d=$rec['department'];
      $e=$rec['yr_sec'];
      $f=$rec['contact'];
      $cor=$rec['simage'];


      
print "  <div class='top'> 
<i class='uil uil-bars sidebar-toggle'></i>
 
</div>


<div class='dash-content'>
   
      <div class='title'>
        <header>STUDENT ACCOUNT<header>
      </div> 

        <div class='wrapper'>
    <div class='left'>
        <img src=$cor
        alt='user' width='100'>

        

         

    </div>

    <div class='right'>
        <div class='info'>
        <h3>Information</h3>
            <div class='info_data'>

                <div class='data'>
                    <h4>Name</h4>
                    <p>$c</p>
                 </div>
            
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

        <a href='stud-list.php'><button name='btnSubmit' type='submit' class='submit-btn'>BACK</button></a>
       

      </div>
    </div>
</div>
        </div>
    </section>

    ";
    }     
} 
      
?>

<script src="dashboard.js"></script>
</body>
</html>

