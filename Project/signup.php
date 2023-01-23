<?php
class Signup{
private $error = "";
    public function evaluates($data){
        foreach ($data as $key => $value){
                // $key is the value we enter
            if(empty($value)){
              $this->  error = $this-> error .  $key . "is empty!<br> ";   
        }
            if($key == "email"){
                if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$value)) {
                    $this->error = $this->error . "invalid email address!<br>";
               }
                     // checking if its empty
             }
        if($key == "first_name"){
           if(is_numeric($value)){
               $this->error = $this-> error . "First name cannot be a number <br>";
           }

           if(strstr($value, " ")){
            $this->error = $this-> error . "First name cannot have an empty space<br>";
        }

    } if($key == "last_name")
			{
				if (is_numeric($value)) {
        
 					$this->error = $this->error . "last name cant be a number<br>";
    			}

    			if (strstr($value, " ")) {
        
 					$this->error = $this->error . "last name cant have spaces<br>";
    			}
			}
        }
		$data['userid'] = $this->create_userid();
		//check userid
		$sql = "select id from users where userid = '$data[userid]' limit 1";
		$check = $DB->read($sql);
		while(is_array($check)){

			$data['userid'] = $this->create_userid();
			$sql = "select id from users where userid = '$data[userid]' limit 1";
			$check = $DB->read($sql);
		}
        	//check email
		$sql = "select id from users where email = '$data[email]' limit 1";
		$check = $DB->read($sql);
		if(is_array($check)){
			 $this->error = $this->error . "Another user is already using that email<br>";
		}
        // if there is no error, we now allow to create user
		if($this->error == "")
		{
			//no error
			$this->create_user($data);
		}else
		{
			return $this->error;
		}
	}
 // $data will be an array because the $_POST is an array
   public  function create_user($data){
    $first_name = ucfirst($data['first_name']);
    $last_name = ucfirst($data['last_name']);
     // makes first letter capital
    $gender = $data["gender"];
    $email=addsLashes($data["email"]);
    $password=$data["password"];
    $userid= $data['userid'];
// not available so , need to create it
    $url_address = strtolower($first_name) . "."  . strtolower($last_name);
    $userid = $this->create_userid();
    $query = "insert into users 
    (userid,first_name,last_name,gender,email,password,url_address) 
    values 
    ('$userid','$first_name','$last_name','$gender','$email','$password','$url_address')";
     $DB = new Database();
    $DB-> save($query);
    }
    //its private because its only used here
    private function create_userid(){
        //creating a random userid 
        $length = rand(4,19);
        $number = "";
        for($i = 0; $i < $length; $i++){
            $new_rand = rand(0,9);
             $number = $number . $new_rand;    
        }
        return $number;
    }
}
?>