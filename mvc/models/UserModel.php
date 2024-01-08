<?php 
    class UserModel extends Db 
    {
        public function Create($username , $password , $email , $role) {
            $result =  false;
            $query = "INSERT INTO users (username , password , email , role ) VALUES ('$username' , '$password' , '$email' , '$role')";
            if (mysqli_query($this->con , $query)) {
                $result = true;
            }
            return json_encode($result);
        }
        public function Update($username, $password , $email , $role) {
            $result = false;
            $query = "UPDATE users SET username = '$username' , password = '$password',email = '$email',role = '$role' ";
            if (mysqli_query($this->con , $query)) {
                $result = true;
            }
            return json_encode($result);
        }
        public function GetAll(){
            
        }

    }
    

?>