<?php

session_start();
include("classes/autoload.php");


$login = new Login();
$user_data = $login->check_login($_SESSION['mybook_userid']);
$USER = $user_data;



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume | SocialHood </title>
    <link rel="stylesheet" href="styleprofile.css">

</head>
<body >


<!-- Top bar -->

<?php

include("header.php");

?>



  <!-- cover area -->
<!-- 
<div style="width: 800px; margin: auto; background-color: black; min-height: 400px">
<div style="
background-color: white; text-align: center; color: #305d9b"> -->
<!-- <img src="images/dolpa.jpg" alt="" style="width:100%"> -->

<!-- <br>


<br>
<b> -->
<!--   
  <div id="menu-buttons"> About  </div>
  <div id="menu-buttons">Friends  </div>
  <div id="menu-buttons">Photos  </div>
  <div id="menu-buttons">Settings</b> </div> -->


<!-- below cover area -->
<!-- <div style="display:flex;"> -->

<!-- friends area -->
<!-- 

<div style="min-height: 400px; flex: 1;">

 <div id="friends-bar" style="height: 500px;">
   
  Friends
  friend area  --> 
   <!-- <img  style ="display:inline;" id = "profilepicc" src="images/user_female.jpg" alt="">
   <div id="username"><a style =" text-decoration: none;" href="profile.php"><?php
    // echo $user_data['first_name'] . "<br> " . $user_data['last_name']; 
    ?> </a> </div> -->
<!-- br tag because some people may have long name -->
 <!-- </div> -->
 
<!-- </div>  -->


<!-- post area -->
<!-- <div style=" min-height: 400px; flex: 2.5; padding: 20px; padding-right: 0px;"> -->

<!-- <div> -->

<!-- <h2>Edit Post</h2> -->




<!-- 
<hr>





</hr>
<form method ="POST" enctype="multipart/form-data">


<?php 

// if($error != ''){
//   echo $error;
// } else{


//   echo "Are you sure you want to edit this post??<br><br>";

//   echo "<textarea name='post' placeholder= ' Edit your text here'></textarea>";
//   echo "<input type='file' name='file'>";







//   echo "<input type='hidden' name='postid' value='$ROW[postid]'>";
//   echo "<input id='post-button' type='submit' value='Save'>";


//     // image 
//     $image_class = new Image();
//   if(file_exists($ROW['image'])){
//     $post_image = $image_class-> get_thumb_post($ROW['image']);
//     echo "<div style='text-align:center;'><img src ='$post_image' style ='width: 60%; height: 50%;'/> </div>";
//     }


// }
 



 ?> 
</form>
</div> -->


<!-- 

</div>







</div>




</div>
</div>
 -->



</body>
</html>




<!-- ================New ================ -->

<html>
    

<head>
<title>

</title>
<link rel="stylesheet" type="" href="styleprofile2.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <!-- header area -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <?php
include("header.php");
?>
</nav>


<!-- content area -->

<div>

<form name="dataPersonal" action="biodata1.php" method="POST">
    

<table>
<th> </th>
<tr>
Biodata Information
<td> Name: </td>
<td><input type ="text" name ="txtName" required></td>

</tr>
<tr>
<td>Father name: </td>
<td><input type ="text" name ="txtFName" required></td>
</td>
</tr>
<tr>
<td>Gender: </td>
<td><input type ="radio" name ="rdogender" value="Male" required> Male
<input type ="radio" name ="rdogender" value="Female" required> Female 
</td>
</tr>
<tr>
<td> Religion: </td>
<td><input type ="text" name ="txtReligion" required></td>
</tr>
<tr>
<td> Occupation: </td>
<td><input type ="text" name ="txtAbout" required></td>
</tr>
</tr>
<tr>
<td><input type="submit" name ="submit">
</tr>
</td>
</tr>
</table>   


<!-- They will not be visible to the users -->
<!--  this is the tricky way to provide info to another file by hiding it from database -->
<!-- Trick to hide the database .. all these things will be hidden now -->

</form>
</div>



</body>
</html>