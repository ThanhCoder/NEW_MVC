<?php
class LogoController extends BaseController
{

    private $loginModel;

    public function __construct(){
         // require view($modelPath)=>bên trong truyền dữ liệu cho modelpath sau đó chạy require ModelPath(đường dẫn...+php)
        $this->loadModel('LoginModel');
        $this->loginModel = new LoginModel;
    }

    public function index(){
        if(isset($_POST["btn-submit"]))
        {
            if(isset($_POST["username"]))
            {
            $username = $_POST["username"];
            echo "<br> Tài khoản".$username;
        }
            else
            {
                $username = " ";
            }
    
            if(isset($_POST["password"])){
            $password = $_POST["password"];
            echo "<br>Mật khẩu".$password;
        }
        else{
            $password =" ";
            }
            return $this->loginModel->loginPage($username,$password);
        }
  
        return $this->view('listashop.Admin',[]);
    }

    public function show(){
        return $this->view('listashop.Admin',[
        ]);
    }

    public function loginPage(){
        
   

    
	if(!empty($username) && !empty($password)){
		//$login = $this->loginModel->login($username,$password);
	}
	else
	{
        echo "Vui lòng nhập lại tài khoản và mật khẩu!";
        //require_once('./Views/listashop/Admin.php');
	}

        return $this->view('listashop.Admin',[
                    
            ]);
    }
}