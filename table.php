<?php
   $servername = "localhost";
   $username = "root";
   $password = "0121";
   $dbname = "alumni";

   $conn = mysqli_connect($servername, $username, $password, $dbname);
   if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
   }
   echo"<style>
   table{
      border-collapse: collapse;
      width: 90%;
      margin: 50px auto;          
    }
    th{
      background-color: #DCA789;
      color: white;
      padding: 10px;
      font-size: 14px;
      text-align: center;
      text-transform: uppercase;
    }
    th, td{
      border: 1px solid #DCA789;
      padding: 8px;
      font-size: 12px;
      text-align: center;
    }
    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    tr:hover {
      background-color: #ddd;
    }
    @media screen and (max-width: 600px) {
      table {
        width: 100%;
      }
      th, td {
        padding: 5px;
        font-size: 10px;
      }
    }
   </style>
   ";




   echo"<table>
         <tr>
         <th>Salutation</th>
         <th>Name</th>
         <th>Gender</th>
         <th>Birthdate</th>

         <th>Contact Number</th>
         <th>Primary Email</th>
         <th>Secondary Email</th>
         <th>Resume Link</th>
         <th>Alumni Address</th>
         <th>City</th>
         <th>Province</th>
         <th>Barangay</th>
         <th>Student Number</th>
         <th>Year Graduated</th>
         <th>Semester Graduated</th>
         <th>Program</th>
         <th>Company Name</th>
         <th>Company Address</th>
         <th>Company Position</th>
         <th>Supervisor Email</th>
         <th>Supervisor Name</th>
         <th>Supervisor Number</th>
         <th>Employment Date</th>
         <th>Business Number</th>
         <th>Employment Status</th>
         <th>Fax Number</th>
         <th>Consent</th>

         </tr>";
         $getData = "SELECT * from info";
         
         $result = $conn->query($getData);

         if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
               echo "<tr>";
               echo "<td>" . $row["Salutation"] . "</td>";
               echo "<td>" . $row["alumniName"] . "</td>";
               echo "<td>" . $row["Gender"] . "</td>";
               echo "<td>" . $row["Birthdate"] . "</td>";
               echo "<td>" . $row["contactNumber"] . "</td>";
               echo "<td>" . $row["primaryEmail"] . "</td>";
               echo "<td>" . $row["secondaryEmail"] . "</td>";
               echo "<td>" . $row["resumeLink"] . "</td>";
               echo "<td>" . $row["alumnAddress"] . "</td>";
               echo "<td>" . $row["City"] . "</td>";
               echo "<td>" . $row["Province"] . "</td>";
               echo "<td>" . $row["Barangay"] . "</td>";
               echo "<td>" . $row["studentNum"] . "</td>";
               echo "<td>" . $row["yearGrad"] . "</td>";
               echo "<td>" . $row["semGrad"] . "</td>";
               echo "<td>" . $row["Program"] . "</td>";
               echo "<td>" . $row["companyName"] . "</td>";
               echo "<td>" . $row["companyAddress"] . "</td>";
               echo "<td>" . $row["companyPosition"] . "</td>";
               echo "<td>" . $row["supervisorEmail"] . "</td>";
               echo "<td>" . $row["supervisorName"] . "</td>";
               echo "<td>" . $row["supervisorNumber"] . "</td>";
               echo "<td>" . $row["employmentDate"] . "</td>";
               echo "<td>" . $row["businessNumber"] . "</td>";
               echo "<td>" . $row["employmentStatus"] . "</td>";
               echo "<td>" . $row["faxNumber"] . "</td>";
               echo "<td>" . $row["Consent"] . "</td>";
               echo "</tr>";
            }
         } else {
            echo "0 results";
         }
         echo"</table>";
?>