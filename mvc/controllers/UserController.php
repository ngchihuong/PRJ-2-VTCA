<?php 
class UserController extends Controller 
{
    public $UserModel;
    public function __construct()
    {
        $this->UserModel = $this->model("UserModel");
    }
    public function SayHi() {
        $this->view("master1", [
            "pages"=> "create_user",
            
        ]);
        $this->view("pages/create_user");
    }
    public function Create() {
        //get data khách hàng nhập
        if (isset($_POST["btnRegister"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $password = password_hash($password , PASSWORD_DEFAULT);
            $email = $_POST["email"];
            $role = $_POST["role"];
            // echo $password;

            //insert data
            $result = $this->UserModel->Create($username, $password ,$email ,$role);
            //thông báo cho khách hàng đăng ký thành công hay thất bại
            $this->view("master1", [
                "pages"=> "create_user",
                "result"=> $result
            $resul = $this->UserModel->Create($username, $password ,$email ,$role);
            //thông báo cho khách hàng đăng ký thành công hay thất bại
            $this->view("signin", [
                "pages"=> "create_user",
                // "result"=> $resul
            ]);

        }
    }
}

?>