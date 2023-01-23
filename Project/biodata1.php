

<?php 

$name = $_POST['txtName'];
$fname = $_POST['txtFName'];
$gender=$_POST["rdogender"];
$religion=$_POST["txtReligion"];
$about=$_POST["txtAbout"];


?>
<html>
<head>
<title>

</title>
<link rel="stylesheet" type="" href="styleprofile2.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <!-- header area -->
    <br>
<
 <?php
 include("header.php");
 ?>



<!-- content area -->

<div>

<form name="dataPersonal" action="biodata2.php" method="POST">
    

<table>
<th> </th>
<tr>
Biodata Information
<td> Email: </td>
<td><input type ="text" name ="txtEmail" required></td>

</tr>
<tr>
<td>Contact: </td>
<td><input type ="text" name ="txtContact" required></td>
</td>
</tr>

<tr>
<td>About Yourself:</td>
<td><input type ="text" name ="txtAbout" required></td>
</td>
</tr>

<tr>
<td> Address: </td>
<td><input type ="text" name ="txtAddress" required></td>
</tr>
</tr>


<tr>
<td><input type="submit" name ="submit">
</tr>
</td>
</tr>
</table>  



<input type="hidden" name="txtName" value="<?php echo $name?>">
<input type="hidden" name="txtFName" value="<?php echo $fname?>">
<input type="hidden" name="txtgender" value="<?php echo $gender?>">
<input type="hidden" name="txtReligion" value="<?php echo $religion?>">
<input type="hidden" name="txtAbout" value="<?php echo $about?>">


</form>
</div>



</body>
</html>