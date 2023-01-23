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


<nav>
<form method="get" action="search.php">
        <div class="container">
		
            <h2 class="log">
				<a href="profile.php" >SocialHood</a> 
            </h2>
            <div class="search-bar">
               
                <img id="searchicon" src="search.png" alt="search png">
				&nbsp &nbsp  <input name="find" type="search" placeholder="Search for Person">
            </div>
            <div class="create">
			<a style="text-decoration:none;color:white;"href="notifications.php"> <img style="color:red; width: 40px;" src="images/bell.png" alt=""> </a>
		
			<?php 
						// $notif = check_notifications();
					?>
					<?php 
					// if($notif > 0):
					 ?>
						<div style="background-color: red;color: white;position: absolute;right:-15px;
						/* width:15px;height: 15px;border-radius: 50%;padding: 4px;text-align:center;font-size: 14px;"> */
						<?
						//  $notif 
						?>
						</div>
					<?php 
				// endif;
				 ?>

		</a></label>
	
			
				<label class="btn  btn-primary" for="create-post"><a style="text-decoration:none;color:white;"href="logout.php"> Logout</a></label>
                <div class="profile-pictures">
				<?php if(isset($USER)): ?>
				<a href="profile.php">
				<img style="width:140%;" id="pp"  src="<?php echo $corner_image ?> ">
				</a>
                <img style="width:140%;" id="pp" src="12.jpg" alt="profile icon">
                </div>
				<?php endif; ?>
            </div>
        </div>
		
    </nav>
</form>
<!-- <div id="blue_bar">
	<form method="get" action="search.php">
		<div style="width: 800px;margin:auto;font-size: 30px;">
			
			<a href="index.php" style="color: white;">Mybook</a> 
			&nbsp &nbsp <input type="text" id="search_box" name="find" placeholder="Search for people" />

			<?php
			//  if(isset($USER)): 
			 ?>
				<a href="profile.php">
				<img src="<?php 
				// echo $corner_image
				 ?>">
				</a>
				<a href="logout.php">
				<span style="font-size:11px;float: right;margin:10px;color:white;">Logout</span>
				</a>

				<a href="notifications.php">
				<span style="display: inline-block;position: relative;">
					<img src="notif.svg" style="width:25px;float:right;margin-top: 10px">
					<?php 
						// $notif = check_notifications();
					?>
					<?php 
					// if($notif > 0):
					 ?>
						<div style="background-color: red;color: white;position: absolute;right:-15px;
						width:15px;height: 15px;border-radius: 50%;padding: 4px;text-align:center;font-size: 14px;"><?= $notif ?></div>
					<?php
				//  endif;
				  ?>
				</span>
				</a>

			<?php
		//  else: 
		 ?>
				<a href="login.php">
				<span style="font-size:13px;float: right;margin:10px;color:white;">Login</span>
			<?php 
		// endif;
		 ?>


		</div>
	</form>
</div> -->