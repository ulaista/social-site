<?php 


$name = $_POST['txtName'];
$fname = $_POST['txtFName'];

$religion=$_POST["txtReligion"];
$about= $_POST["txtAbout"];


//  data from biodata1
$email = $_POST['txtEmail'];
$contact = $_POST['txtContact'];
$address=$_POST["txtAddress"];


// data from biodata2
$school = $_POST['txtSchool'];
$college = $_POST['txtCollege'];
$university=$_POST["txtUniversity"];

$country= $_POST["txtCountry"];
// echo"<pre>";
// print_r($_POST);
// echo"</pre>";
?>
<?php
include("classes/autoload.php");
// session_start();
$login = new Login();
$_SESSION['mybook_userid'] = isset($_SESSION['mybook_userid']) ? $_SESSION['mybook_userid'] : 0;
$user_data = $login->check_login($_SESSION['mybook_userid'],false);

$USER = $user_data;
//check if user is logged in
if(isset($_SESSION['mybook_userid']) && is_numeric($_SESSION['mybook_userid'])){
// is_numeric($_SESSION['mybook_userid'] is done for protection  -- variable escaping
  // check userid and if its numeric or not

$id = $_SESSION['mybook_userid'];
$login = new Login();
$result = $login-> check_login($id);

if($result){

        $user = new User();
        $user_data = $user->get_data($id);
        //retrieving data 
        
        if(!$user_data){
          header("Location: login.php");
          die;
        }
      } else
      {
        header("Location: login.php");
        die;
        }
  } else{
      header("Location: login.php");
      die;
 }


?>




<!-- ================NEw================== -->


<!--top bar-->
<?php 

	$corner_image = "images/user_male.jpg";
	if(isset($USER)){
		
		if(file_exists($USER['profile_image']))
		{
			$image_class = new Image();
			$corner_image = $image_class->get_thumb_profile($USER['profile_image']);
		}else{

			if($USER['gender'] == "Female"){

				$corner_image = "images/user_female.jpg";
			}
		}
	}
?>
	





</div>
</div>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="styleCV.css">

</head>
<body>

    <div class="header">
    <br>
    <br>
    <br>
        <!-- <nav>
            <a href="#" class="logo">John Doe</a>
            <div class="nav-links">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Connect</a></li>
                </ul>
            </div>
        </nav> -->
        <div class="left-sidebar"></div>
        <div class="row">
            <div class="left-col">


            <label class="btn  btn-primary" for="create-post"><a style="text-decoration:none;color:white;"href="profile.php"> SocialHood</a></label>
                <div class="profile-pictures">
				<?php if(isset($USER)): ?>
				<a href="profile.php">
				<img style="width:100%; border-radius:50%; border: 5px solid white;" id="pp"  src="<?php echo $corner_image ?> ">
				</a>
                
                </div>
				<?php endif; ?>

            <!-- <img src="images/user_male.jpg" /> -->
        </div>
        <div class="right-col">
            <h1>I'm <?php echo $name ?> <br>, <?php echo $occupation ?> <br> from <?php echo $country?>
            <br>
            School Details: <?php echo $school?>
            <br>
            College Details: <?php echo $college?>
            <br>
            University Details: <?php echo $university?> <br>
            Religion: <?php echo $religion?> <br>
            Address: <?php echo $address?> <br>
            About me: <?php echo $about?> <br>
            




                </div>
        </div>
    </div>
</div>
    
</body>
</html>