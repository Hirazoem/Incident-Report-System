<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Incident Report | Pending Form Response</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="ir-video-view.css">
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

        <div class="menu-items">
            <ul class="nav-links">

            <li><a href='ir-report-pending.php'>
                    <i class='uil uil-file-alt'></i>
                    <span class='link-name'>Pending Report</span>
                </a></li>

                <li><a href='ir-report-rec.php'>
                <i class="uil uil-file-check-alt"></i>
                    <span class='link-name'>Responded Report</span>
                </a></li>

                <li><a href='ir-report-ignored.php'>
                <i class="uil uil-file-times-alt"></i>
                    <span class='link-name'>Ignored Report</span>
                </a></li>

                <li><a href='stud-list.php'>
                <i class="uil uil-users-alt"></i>
                    <span class='link-name'>Student List</span>
                </a></li>

                <li><a href='admin-list.php'>
                <i class="uil uil-user-md"></i>
                    <span class='link-name'>College & Dept. Staff List</span>
                </a></li>
               
            </ul>
            
            <ul class="logout-mode">
                <li><a href="#">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <div class="mode-toggle"> 
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">

    

        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            
        </div>
<?php

if (isset($_GET['report_no'])) 
                {
                    $rno=$_GET['report_no'];

include ("db-connect.php");

$search="SELECT * from pending_report where(report_no='$rno')";
$result=mysqli_query($con,$search);

while ($rec=mysqli_fetch_array($result,MYSQLI_ASSOC)) 
          {
            $vid=$rec['simage']; 
    
  print "<div class='dash-content'>
 
  <video src='$vid' autoplay muted loop class='vid'></video>

  <button class='pop-btn'><a href=ir-report-pending.php>BACK</a></button>
  
  </div>


";
}
                }
?> 

<script src='dashboard.js'></script>
</body>
</html>






  


     