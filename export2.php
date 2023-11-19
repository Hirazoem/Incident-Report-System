

<?php  
 if(isset($_POST["export2"]))
 {
include ("db-connect.php");
$output = '';
 
    $sql = "SELECT * FROM responded_report";
    $result=mysqli_query($con,$sql);
 
    if(mysqli_num_rows($result) > 0)
    {
     $output .= '
     <table>
     <tr>
      <th>Name:</th>
    
     ';
     while($row = mysqli_fetch_array($result))
     {
      $output .= '
      <td>'.$row["date_responded"].'</td>
       </tr>
      ';
 
  }
  $output .= '</table>';
  header('Content-Type: application/pdf');
  header('Content-Disposition: attachment; filename=download.pdf');
  echo $output;
 }
}
 
?>