<?php




class USER{

    public $first_name;
    public $last_name;
    public $email;
    public $password;
 
    /** TESTED
     * Creates user record
     * @return {(true|false)} success value
    */


    public function insert() {
        if (!(empty($this->first_name)) && !(empty($this->last_name)) && !(empty($this->email)) && !(empty($this->password))){
            $conn = new mysqli("localhost", "root", "", "gestioncontacts");
            if (!($this->verify_email_exist($conn))) {
                $foo = $conn->prepare("INSERT INTO users (first_name,last_name,email,password) VALUES (?, ?, ? ,?)");
                $this->password = USER::get_hash($this->password);
                $foo->bind_param("ssss", $this->first_name, $this->last_name, $this->email, $this->password);
                $bar = $foo->execute();
                $conn->close();
                return $bar;
            } else {
                $conn->close();
                throw new Exception("[2] user already exists");
            }
        } else {
            throw new Exception("[3] not enough arguments");
        }
    }

    /** TESTED
     * Checks if email exists
     * @return {(true|false)} exists or not
     */


    private function verify_email_exist($conn){
        $foo = $conn->prepare("SELECT COUNT(email) as count FROM users WHERE email = ?");
        $foo->bind_param("s", $this->email);
        $foo->execute();
        $result = $foo->get_result();
        $result = $result->fetch_assoc();
        if ($result['count'] == 0){
            return false;
        } else {
            return true;
        }
    }

    /** TESTED
     * returns hashed password
     * @param {text} password - password
     */


    public static function get_hash($password){
        return hash('sha256', $password);
    }

    /**
     * Verifies user auth
     * @param {text} email - email
     * @param {text} password - password
     * @return {(true|false)} success value
     */

    public static function auth_verify($email, $password){
        $conn = new mysqli("localhost", "root", "", "gestioncontacts");
        $foo = $conn->prepare("SELECT COUNT(email) as count FROM users WHERE email = ? AND password = ?");
        $password = USER::get_hash($password);
        $foo->bind_param("ss", $email, $password);
        $foo->execute();
        $result = $foo->get_result();
        $result = $result->fetch_assoc();
        if ($result['count'] == 0){
            return "doesnt exist";
        } else {
            return "exists";
        }
    }

}





?>