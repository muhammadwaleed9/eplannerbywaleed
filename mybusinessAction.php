<?php
$con=mysqli_connect("localhost", "root", "", "eplanner");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con, "SELECT * FROM createbusiness");

                    echo "<table border='1'>
                    <tr>
                   <th>Business Name</th>
                   <th>City</th>
                   <th>Area</th>
                   <th>Location</th>
                   <th>Open Days</th>
                   <th>Services</th>
                   <th>Business Charges</th>
                   <th>Business Contact</th>
                 </tr>";

               while($row = mysqli_fetch_array($result))
                   {

                    echo "<tr>";
                    echo "<td>" . $row['businessname'] . "</td>";
                    echo "<td>" . $row['city'] . "</td>";
                    echo "<td>" . $row['area'] . "</td>";
                    echo "<td>" . $row['location'] . "</td>";
                    echo "<td>" . $row['dayopen'] . "</td>";
                    echo "<td>" . $row['services'] . "</td>";
                    echo "<td>" . $row['businesscharges'] . "</td>";
                    echo "<td>" . $row['businesscontact'] . "</td>";
                    echo "</tr>";
                    }
                echo "</table>";


?>