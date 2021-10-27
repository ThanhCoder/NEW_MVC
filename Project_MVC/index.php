<?php
require("E:\\xampp\htdocs\Project_SmartOSC123\Core\\Database.php");
require("E:\\xampp\htdocs\Project_SmartOSC123\Models\\BaseModel.php");
require("E:\\xampp\htdocs\Project_SmartOSC123\Controllers\\BaseController.php");
?>

<?php
	require_once('E:\xampp\htdocs\Project_SmartOSC123\Views\listashop\header1.php');
?>

<?php
	//require_once('E:\xampp\htdocs\Project_SmartOSC123\Views\listashop\loginAdmin.php');
?>

<?php
    // Hàm strtolower(str) biến tất cả chữ thành chữ thường
    // hàm ucfirst đổi chữ cái đầu thành chữ hoa, sử dụng toán tử 3 ngôi ? :
    // dùng $_REQUEST sẽ lấy cả URL của $_GET là Server của $_POST
    // nối ."Controller để sau khi khai báo sẽ gọi mục Controller sau tên"
    //Cách 1:  
    $controllername = $_REQUEST["controller"] ? ucfirst((strtolower( $_REQUEST["controller"]))) ."Controller" : "LogoController" ;
    //  Cách 2:
    ///$controllername = ucfirst((strtolower($_REQUEST["controller"])?? 'Logo') ."Controller");
    //echo $controllername;
    
    $actionname = strtolower($_REQUEST["action"] ?? 'index') ; // cho thuộc tính
    //$actionname = $_REQUEST["action"] ?  strtolower($_REQUEST["action"].'()') : "index"; // cho phương thức
    //echo "<br>".$actionname."<br>";
    
    //require("E:\\xampp\htdocs\Project_SmartOSC123\Controllers\ProductController.php");
    require("E:\\xampp\htdocs\Project_SmartOSC123\Controllers\\$controllername.php");
    
    $cate = new $controllername;
    //$cate->index();
    $cate->$actionname();
?>


<?php
	require_once('E:\xampp\htdocs\Project_SmartOSC123\Views\listashop\footer1.php');
?>
        
