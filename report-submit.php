<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="report-submit.css">
    <link rel="stylesheet" href="dashboard1.css">
     
    
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    

    <title>Admin Dashboard Panel</title>
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

                <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Home</span>
                </a></li>

                <li><a href="#">
                    <i class="uil uil-user-square"></i>
                    <span class="link-name">Account</span>
                </a></li>

                <li><a href="#">
                    <i class="uil uil-file-alt"></i>
                    <span class="link-name">Report Form</span>
                </a></li>

                <li><a href="#">
                    <i class="uil uil-books"></i>
                    <span class="link-name">Report History</span>
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

if (isset($_POST['btnSubmit'])) {

    $a=$_POST['txtemail'];
	$b=$_POST['txtInvolved'];
	$c=$_POST['txtStatus'];
	$d=$_POST['txtDate'];
	$e=$_POST['txtTime'];
	$f=$_POST['txtLoc'];
    $g=$_POST['irLevel'];
    $h=$_POST['irType'];
    $i=$_POST['txtSdetails'];
	$file = $_FILES['image']['name'];
    $sfile = $_FILES['simage']['name'];
    

include ("db-connect.php");

    $query="INSERT INTO pending_report (reported_by,involved_person,ip_stat,date,time,loc,ip_sevlevel,ip_incident,ip_detail,image,simage) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$file','$sfile')";

	$res = mysqli_query($con,$query);

	if ($res) {
		move_uploaded_file($_FILES['image']['tmp_name'], "$file");
	}

	print "
	<div class='popup' id='popup-1'>
    <div class='overlay'></div>
    <div class='content'>
        <div class='pop-title'>REPORT SUBMITTED</div>
		<div class='pop'><img src='report.png'></div>
        <div class='pop-msg'><p>Your case has been successfully reported. Kindly wait for response.</p></div>
        <button class='pop-btn'><a href=report-pending.php?email=$a>CONTINUE</a></button>
    </div>
</div>
</div>
";

}

?>