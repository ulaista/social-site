
 						<?php 

 	 					 	if($friends)
 	 					 	{

 	 					 		foreach ($friends as $friend) {
 	 					 			# code...
 
 									$FRIEND_ROW = $user->get_user($friend['userid']);
 	 					 			include("user.php");
 	 					 		}
 	 					 	}
 	 			 

	 					 ?>
<form method="POST" enctype="multipart/form-data" class="create-post">
            <div class="profile-pictures-4">
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
<img  src="<?php echo $corner_image ?> ">                
            </div>
            <textarea id="create-post" name="post" placeholder=" Whats on your mind?"></textarea>
            <!-- <input type="text" name="post" placeholder="What's Up,?" id="create-post"> -->
			<br>
            <input type="file" name="file">
            <input type="submit" value="post" class="btn btn-primary">
        </form>

	 				<!--posts-->
	 				<div id="post_bar">
 	 					 <?php 
 	 					 	if($posts)
 	 					 	{
 	 					 		foreach ($posts as $ROW) {
 	 					 			$user = new User();
 	 					 			$ROW_USER = $user->get_user($ROW['userid']);

 	 					 			include("post.php");
 	 					 		}
 	 					 	}
 	 					 	?>
	 				</div>

 				</div>
			</div>