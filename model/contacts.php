<?php


class contact extends Dbconnect{

    public $id;
    public $name;
    public $phone;
    public $email;
    public $addrees;

    public function find_contact($id) {
        $sql = "SELECT * FROM contacts WHERE contactid = '$id'";
        $result = $this->connection->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row;
        }

    }
  

}




?>