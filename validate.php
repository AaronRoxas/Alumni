<?php
   $salutation = $_GET["salutation"];
   $name = $_GET["fname"] . " " . $_GET["mname"] . $_GET["maiden"] . $_GET["lname"];
   $civil = $_GET["civil"];
   $gender = $_GET["gender"];
   $bdate = $_GET["bdate"];
   $contactNum = $_GET["num"];
   $primaryEmail = $_GET["p-emailadd"];
   $secondaryEmail = $_GET["s-emailadd"];
   $resume = $_GET["resume"];
   $address = $_GET["address"];
   $city = $_GET["city"];
   $province = $_GET["province"];
   $barangay = $_GET["barangay"];
   $studNum = $_GET["studNum"];
   $graduateYr = $_GET["graduate"];
   $graduateSem = $_GET["sem-grad"];
   $program = $_GET["program"];
   $companyName = $_GET["company"];
   $companyAdd = $_GET["company-address"];
   $companyPos = $_GET["company-pos"];
   $supervisorEmail = $_GET["supervisor-email"];
   $supervisorName = $_GET["supervisor-name"];
   $supervisorNum = $_GET["supervisor-number"];
   $employmentDate = $_GET["employment-date"];
   $businessNum = $_GET["business-number"];
   $employmentStatus = $_GET["employment-status"];
   $fax = $_GET["fax-number"];
   $consent = $_GET["consent"];

   $servername = "localhost";
   $username = "root";
   $password = "0121";
   $dbname = "alumni";

   $conn = mysqli_connect($servername, $username, $password, $dbname);
   if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
   }

   $sql = "INSERT INTO info (Salutation, alumniName, civilStatus, Gender, Birthdate, contactNumber, primaryEmail, secondaryEmail, resumeLink, alumnAddress, City, Province, Barangay, studentNum, yearGrad, semGrad, Program, companyName, companyAddress, companyPosition, supervisorEmail, supervisorName, supervisorNumber, employmentDate, businessNumber, employmentStatus, faxNumber, Consent)
   VALUES ('$salutation', '$name', '$civil', '$gender', '$bdate', '$contactNum', '$primaryEmail', '$secondaryEmail', '$resume', '$address', '$city', '$province', '$barangay', '$studNum', '$graduateYr-01-01', '$graduateSem', '$program', '$companyName', '$companyAdd', '$companyPos', '$supervisorEmail', '$supervisorName', '$supervisorNum', '$employmentDate', '$businessNum', '$employmentStatus', '$fax', '$consent')";

   if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
   } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   mysqli_close($conn);
?>
