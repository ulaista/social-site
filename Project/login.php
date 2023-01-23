<?php
class Login{
private $error="";
public  function evaluate($data){
    $email="";  
     // makes first letter capital
    $email=addsLashes($data["email"]);    // addslashes is use for removing slashes
    // like jon\s home here \ is removed
    $password=addsLashes($data["password"]);
     $query = "SELECT * FROM users  where email='$email' limit 1";
       $DB = new Database();
       $result  =$DB->read($query);
    if($result){
        $row = $result[0];   // row is the result of data and  1st result is given to it
            if($password == $row['password']){
            //create a session data
            $_SESSION['mybook_userid'] = $row['userid'];  //Session is used to maintain info. if we have logged in , we can still login because session identifies the browser  
                  //its actually an array of an informations

        } else {

            $this->error .= " Wrong Password/email<br>"; // to stay away from hackers
        }

    }   else {
        $this-> error .= "no such Password/Email";   // to stay away from hackers
    } 
    return $this->error; 
    }
    private function password_hash($text){
        $text = hash("md5", $text);
        return $text;

    }
    public function check_login($id,$redirect = true)
	{

        if(is_numeric($id))
		{
            $query = "select * from users where userid = '$id' limit 1 ";
            $DB= new Database();
            $result = $DB-> read($query);
        // check if user is logged in
          // check userid and if its numeric or not
         

            if($result){
                $user_data = $result[0];
                return $user_data;
                
            } else
			{
			if($redirect){
				header("Location: login.php");
				die;
			}else{
                $_SESSION['mybook_userid'] = 0;
				}
			}
 	 
		}else
		{
			if($redirect){
				header("Location: login.php");
				die;
			}else{
				$_SESSION['mybook_userid'] = 0;
			}
		}
	}
}