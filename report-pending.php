
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Incident Report | Pending Report </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="report-pending.css">
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

$sql = "SELECT * from pending_report, stud_admin_rec WHERE(reported_by='$email' and email='$email')";
$result=mysqli_query($con,$sql);

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

        <li><a href='report-pending.php?reported_by=$email'>
            <i class='uil uil-envelope-upload'></i>
            <span class='link-name'>Pending Report</span>
        </a></li>

        <li><a href='report-history.php?=$email'>
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

while ($rec=mysqli_fetch_array($result,MYSQLI_ASSOC))
 {
    $pfp=$rec['image'];

print "
<div class='top'>
    <i class='uil uil-bars sidebar-toggle'></i>
    <img src='$pfp'>
</div>

<div class='dash-content'>
     
        <div class='title'>
            <header>PENDING REPORT<header>
        </div> 

   <div class='content'>
    <section class='table__body'>
            <table>
                <thead>
                    <tr>
                        <th>Date </th>
                        <th> Time </th>
                        <th> Location </th>
                        <th> Involved Person </th>
                        <th> Status </th>
                        <th> Severity of Incident </th>
                        <th> Type of Incident </th>
                        <th>  </th>
                    </tr>
                </thead>
                </div> 
                ";
 
 while ($rec=mysqli_fetch_array($result,MYSQLI_ASSOC))
 {
  $a=$rec['date'];
  $b=$rec['time'];
  $c=$rec['loc'];
  $d=$rec['involved_person'];
  $e=$rec['ip_stat'];
  $f=$rec['ip_sevlevel'];
  $g=$rec['ip_incident'];
  
  
 	print "<tr>
    <td>$a</td>
    <td>$b</td>
    <td>$c</td>
    <td>$d</td>
    <td>$e</td>
    <td>$f</td>
    <td>$g</td>
    <td> <p class='status pending'>Pending</p> </td>
    </tr>";
 
 }
}
}

?>

<script src='dashboard.js'></script>
</body>
</html>
