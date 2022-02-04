<?php
$con=mysqli_connect("localhost","root","ester12sharon34","phpProject");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
  $result = mysqli_query($con,"SELECT * FROM student");
  $result = mysqli_query($con,"insert into value * FROM student");
  $result = mysqli_query($con,"Update student set id=2 where");
echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
 <th>phone</th>
</tr>";

 while($row = mysqli_fetch_array($result))//מכניס למערך מדפיס שורות
{
echo "<tr>";
echo "<td>" . $row['fName'] . "</td>";
echo "<td>" . $row['lName'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>