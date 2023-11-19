
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Incident Report | Incident Report Record </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="ir-report-rec.css">
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
            <header>INCIDENT REPORT RECORD<header>
        </div>
        
        <div class="form-group">
    <form action='export.php' method='post'>
    <button type="submit" class="btn-print" name="export">Print Table</button>
</form>

    <form action='ir-report-rec.php' method='get' enctype='multipart/form-data'>
      
    <div class="form-date">
    <div class="form-group">
        <label>From Date</label>
        <input type="date" name="from-date" class="form-control">
    </div>

    <div class="form-group">
        <label>To Date</label>
        <input type="date" name="to-date" class="form-control">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-filter">Filter</button>
    </div>

    </div>

  
<div class="form-group">

    <div class='content'>
    <section class='table__body'>
            <table>
                <thead>
                    <tr>
                        <th>Date Responded</th>
                        <th> Reported By </th>
                        <th> Involved Person </th>
                        <th> Date </th>
                        <th> Time </th>
                        <th> Location </th>
                        <th> Severity of Incident </th>
                        <th> Type of Incident </th>
                        <th> Action Taken </th>
                        <th>  </th>
                        
                        
                    </tr>
                </thead>
                </div> 
<?php             

include ("db-connect.php");

if(isset($_GET['from-date']) && isset($_GET['to-date'])) 
{
    $from_date=$_GET['from-date'];
    $to_date=$_GET['to-date'];

    $sql = "SELECT * FROM responded_report WHERE date_responded BETWEEN '$from_date' AND '$to_date'";
    $result=mysqli_query($con,$sql);
    $count=mysqli_num_rows($result);

    if ($count > 0)
  {
    while ($rec=mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
   
     $rno=$rec['report_no'];
     $a=$rec['date_responded'];
     $b=$rec['reported_by'];
     $c=$rec['involved_person'];
     $d=$rec['date'];
     $e=$rec['time'];
     $f=$rec['loc'];
     $g=$rec['ip_sevlevel'];
     $h=$rec['ip_incident'];
     $i=$rec['action'];
     
        print "<tr>
       <td>$a</td>
       <td>$b</td>
       <td>$c</td>
       <td>$d</td>
       <td>$e</td>
       <td>$f</td>
       <td>$g</td>
       <td>$h</td>
       <td>$i</td>
       <td> <button class='review'><a href=ir-responded.php?report_no=$rno&reported_by=$b>Review</a></button> </td>
       </tr>";

       
    
    }

    print "</table><div class='result'><span class='r-msg'>$count REPORT/S FOUND.</span></div>";
  }

  else
  {
    print "</table><div class='result'><span class='r-msg'>NO REPORT/S RETRIVED.</span></div>";
  }
}

?>
 

<script src='dashboard.js'></script>
</body>
</html>
