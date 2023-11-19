<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Incident Report | Pending Form Response</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="ir-response-report.css">
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

    <section id="up"></section>
    <section id="down"></section>
    <section id="left"></section>
    <section id="right"></section>

        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            
        </div>

        <?php

if(isset($_POST['btnRes']))
  {
    include ("db-connect.php"); 
    $rno=$_POST['txtNo'];

    $a=$_POST['txtdateRes'];
    $b=$_POST['txtemail'];
    $c=$_POST['txtInvolved'];
    $d=$_POST['txtStat'];
    $e=$_POST['txtDate'];
    $f=$_POST['txtTime'];
    $g=$_POST['txtLoc'];
    $h=$_POST['txtSev'];
    $i=$_POST['txtType'];
    $j=$_POST['txtSdetails'];
    $image=$_POST['image'];
    $simage=$_POST['simage'];
    $action=$_POST['irAction'];
    
   
  $query="INSERT INTO responded_report (date_responded,reported_by,involved_person,ip_stat,date,time,loc,ip_sevlevel,ip_incident,ip_detail,image,simage,action) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$image','$simage','$action')";
  $update = mysqli_query($con, $query);

	
  $delete= "DELETE from pending_report WHERE (report_no='$rno')";
  mysqli_query($con,$delete);

  print "

	<div class='popup' id='popup-1'>
    <div class='overlay'></div>
    <div class='content'>
        <div class='title1'>RESPOND TO REPORT</div>
		<div class='pop'><img src='report-res.png'></div>
        <div class='pop-msg'><p>Take an immediate action to the report on hand.</p></div>
        <button class='pop-btn'><a href=ir-report-pending.php>CONTINUE</a></button>
    </div>
</div>
</div>


";
}
?> 

<?php

if(isset($_POST['btnCancel']))
  {
    include ("db-connect.php"); 
    $rno=$_POST['txtNo'];

    $a=$_POST['txtdateRes'];
    $b=$_POST['txtemail'];
    $c=$_POST['txtInvolved'];
    $d=$_POST['txtStat'];
    $e=$_POST['txtDate'];
    $f=$_POST['txtTime'];
    $g=$_POST['txtLoc'];
    $h=$_POST['txtSev'];
    $i=$_POST['txtType'];
    $j=$_POST['txtSdetails'];
    $image=$_POST['image'];
    $simage=$_POST['simage'];
    
   
  $query="INSERT INTO ignore_report (date_ignored,reported_by,involved_person,ip_stat,date,time,loc,ip_sevlevel,ip_incident,ip_detail,image,simage) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$image','$simage')";
  $update = mysqli_query($con, $query);

  $delete= "DELETE from pending_report WHERE (report_no='$rno')";
  mysqli_query($con,$delete);

  print "
	<div class='popup' id='popup-1'>
    <div class='overlay'></div>
    <div class='content'>
        <div class='title1'>REPORT IGNORED</div>
		<div class='pop'><img src='report-ign.png'></div>
        <div class='pop-msg'><p>The filed incident report has been ignored.</p></div>
        <button class='pop-btn'><a href=ir-report-pending.php>CONTINUE</a></button>
    </div>
</div>


";
}
?> 






  


     