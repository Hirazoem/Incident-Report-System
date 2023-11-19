<?php  
//export.php  
include ("db-connect.php");
$output = '';
if(isset($_POST["export"]))
{
    $sql = "SELECT * FROM responded_report";
    $result=mysqli_query($con,$sql);
 
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
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
      </tr>
  </thead>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
        <td>'.$row["date_responded"].'</td>  
        <td>'.$row["reported_by"].'</td>  
        <td>'.$row["involved_person"].'</td>  
       <td>'.$row["date"].'</td>  
       <td>'.$row["time"].'</td>
       <td>'.$row["loc"].'</td>
       <td>'.$row["ip_sevlevel"].'</td>
       <td>'.$row["ip_incident"].'</td>
       <td>'.$row["action"].'</td>

    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>