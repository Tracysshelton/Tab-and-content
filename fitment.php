<?
//connect to DB
include("connect.php");

 //query table
$fits= "(SELECT * FROM parts_and_products WHERE Part_Number = '$product')";
 
$fitment = mysqli_query($conn, $fits) or die("MYSQL error: " . mysqli_error($conn) . "<hr>\n fit: $fits");

//build body with table
while($row = mysqli_fetch_array($fitment))
{
  $plat_yr_start = $row['Start_Year'];
  $plat_yr_end = $row['End_Year'];
  $plat_drive = $row['Drive'];
  $plat_make = $row['Make'];
  $plat_model = $row['Model'];
  
  $body_output .= "<tr>
				  	<td align=\"left\">$plat_yr_start - $plat_yr_end</td>
					<td align=\"left\">$plat_drive</td>
					<td align=\"left\">$plat_make</td>
					<td align=\"left\">$plat_model</td>
        		 </tr>"; 
}
$footer_output .= "</tbody></table>";

mysqli_close($conn);

?>
