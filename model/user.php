<?php 

    
include("sql.php");
class operations extends Dbconnect{  


        public function __construct() {  
            $this->Dbconnecthh = new Dbconnect;  
            $this->Dbconnecthh->connect();
        }  


        // public function Store_Record()
        // {

        //     if(isset($_POST['btn_save']))
        //     {
        //         $fullname = $_POST['fullname'];
        //         $phone = $_POST['phone'];
        //         $email = $_POST['email'];
        //         $address = $_POST['address'];


        //         if($this->insert_record($fullname,$phone,$email,$address))
        //         {
        //             echo '<div class="alert alert-success"> Your Record Has Been Saved :) </div>';
        //         }
        //         else
        //         {
        //             echo '<div class="alert alert-danger"> Failed </div>';
        //         }
        //     }
        // }


      // Insert Record in the Database Using Query    
        function insert_record($fullname,$phone,$email,$address,$id)
        {
            $query = "insert into contact (fullname,phone, email,address,userid) values('$fullname','$phone','$email','$address',$id)";
            $result = mysqli_query($this->Dbconnecthh->connection,$query);

            if($result)
            {
                return $result;
            }
            else
            {
                return  '<div class="alert alert-danger"> Failed </div>';
            }
        }


        public function view_record($userid)
        {

            $query = "select * from contact where userid = '$userid'";
            $result = mysqli_query($this->Dbconnecthh->connection,$query);
            return $result;
        }


        // Get Particular Record
        public function get_record($id)
        {
            $sql = "select * from contact where contactid='$id'";
            $data = mysqli_query($this->Dbconnecthh->connection,$sql);
            return $data;

        }


        



     }
?>