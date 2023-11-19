
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Incident Report | Admin List </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="account-list.css">
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

<div class='top'>
    <i class='uil uil-bars sidebar-toggle'></i>
    
</div>

<div class='dash-content'>
     
        <div class='title'>
            <header>ACCOUNT LIST<header>
        </div> 

   <div class='content'>
    <section class='table__body'>
            <table>
                <thead>
                    <tr>
                        <th> </th>
                        <th> Admin Email </th>
                        <th> Name </th>
                        <th> Department </th>
                        <th>  </th>
                        
                    </tr>
                </thead>
                </div> 
<?php             

include ("db-connect.php");

$sql = "SELECT * from stud_admin_rec WHERE status='College & Dept. Staff'";
$result=mysqli_query($con,$sql);    

    while ($rec=mysqli_fetch_array($result,MYSQLI_ASSOC))
 {
  $pfp=$rec['image'];
  $a=$rec['email'];
  $b=$rec['name'];
  $c=$rec['department'];
  $d=$rec['profession'];
  
  
  
 	print "<tr>
    <td><img src=$pfp></td>
    <td>$a</td>
    <td>$b</td>
    <td>$c</td>
    <td>$d</td>
    </tr>";
 
 }


?>
 

<script src='dashboard.js'></script>
</body>
</html>
