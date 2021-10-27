<?php

class ProductssController extends BaseController
{
    
    private $productsModel;

    public function __construct(){
         // require view($modelPath)=>bên trong truyền dữ liệu cho modelpath sau đó chạy require ModelPath(đường dẫn...+php)
        $this->loadModel('ProductsModel');
        $this->productsModel = new ProductsModel;
    }

    public function index(){
        $row2 = $this->productsModel->GetAllCategory();
        $row3 = $this->productsModel->GetAllCategory();
        $row4 = $this->productsModel->GetAllCategory();
        if(isset($_POST['buttonins'])){
            if(isset($_POST['name'])){
                $name = $_POST['name'];
            }
            else
            {
                $name = " ";
            }
            if(isset($_POST['brand'])){
                $brand = $_POST['brand'];
            }
            else
            {
                $brand = " ";
            }
            if(isset($_POST['price'])){
                $price = $_POST['price'];
            }
            else
            {
                $price = " ";
            }
            if(isset($_POST['color'])){
                $color = $_POST['color'];
            }
            else
            {
                $color = " ";
            }
            if(isset($_POST['sex'])){
                $sex = $_POST['sex'];
            }
            else
            {
                $sex = " ";
            }
            if(isset($_POST['size'])){
                $size = $_POST['size'];
            }
            else
            {
                $size = " ";
            }

            if(isset($_FILES['image'])){
                $image = $_FILES['image']['name'];
                $image_tmp = $_FILES['image']['tmp_name'];
                move_uploaded_file($image_tmp,'Views/listashop/img/product/feature-product/'.$image);
            }

            if(isset($_POST['id_cate'])){
                $id_cate = $_POST['id_cate'];
            }
            else
            {
                $id_cate = " ";
            }
            if(isset($_POST['quantity'])){
                $quantity = $_POST['quantity'];
            }
            else
            {
                $quantity = " ";
            }
            if(isset($_POST['description'])){
                $description = $_POST['description'];
            }
            else
            {
                $description = " ";
            }
            if(!empty($name) && !empty($brand) && !empty($price) && !empty($price) && !empty($color) && !empty($sex) && !empty($quantity) && !empty($description)){
                //$login = $this->loginModel->login($username,$password);
                echo "Thêm sản phẩm thành công";
            }
            else
            {
                echo "Vui lòng nhập lại thông tin!";
            }
            return $this->productsModel->StoreProduct($name, $brand, $price,$color,$sex,$size,$image,$id_cate,$quantity,$description);
            echo ("Thêm sản phẩm thành công");
         }
         //echo $name, $brand, $price,$color,$sex,$size,$image,$id_cate,$quantity,$description;
         return $this->view('listashop.ADMIN_Product',[
                'row2' => $row2,
                'row3' => $row3,
                'row4' => $row4
         ]);
        }
       
        public function show(){
            $row1 = $this->productsModel->GetAllProd();
            return $this->view('listashop.ADMIN_ShowProduct',[
                'row1' => $row1
            ]);
        }

    public function insert(){
       
}

}