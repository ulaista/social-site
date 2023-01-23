<?php 
$name = $_POST['txtName'];
$fname = $_POST['txtFName'];
$gender=$_POST["txtgender"];
$religion=$_POST["txtReligion"];
$about=$_POST["txtAbout"];




//  data from biodata1
$email = $_POST['txtEmail'];
$contact = $_POST['txtContact'];
$address=$_POST["txtAddress"];




?>


<html>
    

<head>
<title>

</title>
<link rel="stylesheet" type="" href="styleprofile2.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body style="color: grey;">
    <!-- header area -->
<br>
<br>
<br>
<br>
  <?php
  include("header.php");
  ?>



<!-- content area -->

<div>

<form name="dataPersonal" action="finalCV.php" method="POST">
<table>
<th> </th>
<tr>
Professional Information
<tr>


<td> School </td>
<td><input type ="data" name ="txtSchool" required></td>
<td><input type ="date" name ="dateSchool" required></td>
<td>
</tr>
<tr>
<tr>
<td> College </td>
<td><input type ="data" name ="txtCollege" required></td>
<td><input type ="date" name ="datecollege" required></td>
<td>
</tr>


<tr>
<td> Country </td>
<td><input type ="text" name ="txtCountry" required></td>
<td>
</tr>
<tr>
<td> University </td>
<td><input type ="data" name ="txtUniversity" required></td>
<td><input type ="date" name ="dateUniversity" required></td>
</tr>



<tr>
<td><input type="submit" name ="submit">
</tr>
</td>
</tr>
</table>    
<!--  biodata1 -->
<input type="hidden" name="txtName" value="<?php echo $name?>">
<input type="hidden" name="txtFName" value="<?php echo $fname?>">
<input type="hidden" name="txtGender" value="<?php echo $gender?>">
<input type="hidden" name="txtReligion" value="<?php echo $religion?>">
<input type="hidden" name="txtAbout" value="<?php echo $about?>">




<!-- biodata2 -->
<input type="hidden" name="txtEmail" value="<?php echo $email?>">
<input type="hidden" name="txtContact" value="<?php echo $contact?>">
<input type="hidden" name="txtAddress" value="<?php echo $address?>">




</form>
</div>



</body>
</html>