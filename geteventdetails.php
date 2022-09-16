<?php
$q = ($_GET['q']);
$con = mysqli_connect("localhost","root","","myproject");
$sql="SELECT * FROM event WHERE eventname = '".$q."'";
$result = mysqli_query($con,$sql);


$row=mysqli_fetch_array($result);
echo 
"<div class='table-responsive'>
<center><h4><span class='label label-primary'>Event details</span></h4></center>
<table class='table'>
<tr>
<th>Event name</th>
<th>Event date</th>
<th>Event time</th>
<th>Registration last date</th>
<th>Room No.</th>
</tr>";
//while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['eventname'] . "</td>";
    echo "<td>" . $row['eventdate'] . "</td>";
    echo "<td>" . $row['eventtime'] . "</td>";
    echo "<td>" . $row['reglastdate'] . "</td>";
    echo "<td>" . $row['roomnumber'] . "</td>";
    echo "</tr>";
//}

echo "</table>";
echo "</div>";
//}
mysqli_close($con);
?>