
<?php

include("sql.php");

class Sign extends Dbconnect{  
      
    public function __construct() {  
          $this->Dbconnecthh = new Dbconnect;  
          $this->Dbconnecthh->connect();
    }  
    
    public function register( $first_name, $last_name, $email, $pass) {  
        $pass = hash('sha256', $pass);  
        $checkuser = mysqli_query($this->Dbconnecthh->connection,"SELECT id FROM user WHERE email='$email'");  
        $result = mysqli_num_rows($checkuser);  
        if ($result == 0) {  
            $register = mysqli_query($this->Dbconnecthh->connection,"INSERT INTO user( first_name , last_name, email, password) VALUES ('$first_name','$last_name','$email','$pass')") or die("up");  
            return $register;   
        } else {  
            throw new Exception('User already exists');  
        }  
    }
        
    
    public function login($email, $pass) {  
        $pass = md5($pass);  
        $check = mysqli_query($this->Dbconnect,"SELECT * FROM user WHERE email='$email' and password='$pass'");  
        $data = mysqli_fetch_array($check);  
        $result = mysqli_num_rows($check);  
        if ($result == 1) {  

            $_SESSION['login'] = true;  
            $_SESSION['id'] = $data['id']; 

            return true; 

        } else {  
            return false;  
        }  
    }  
    

    public function fullname($id) {  
        $result = mysqli_query($this->Dbconnect,"SELECT * FROM user WHERE email='$id'");  
        $row = mysqli_fetch_array($result);  
        echo $row['first_name'];  
    }  
    

    public  function session() {  
        if (isset($_SESSION['login'])) {  
            return $_SESSION['login'];  
        }  
    }  
    
    public function logout() {  
        $_SESSION['login'] = false;  
        session_destroy();  
    }  
    
  }  
    