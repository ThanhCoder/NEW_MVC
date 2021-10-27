<?php
class ProductController extends BaseController
{
    private $productModel;

    public function __construct(){
         // require view($modelPath)=>bên trong truyền dữ liệu cho modelpath sau đó chạy require ModelPath(đường dẫn...+php)
        $this->loadModel('ProductModel');
        $this->productModel = new ProductModel;
    }

    public function index(){
       // Lấy cột select column để hiển thị ra
        $addConlumn =  ['id','name','price','category_id'];

        // Lấy order để dùng order by giảm dần
        $order = ['column'=>'id', 'order' => 'ASC'];

        // Load Model ok khởi tạo model
        // truyền vào GetAllProduct($select =['*']) $select truyền vào 1 mảng [[1]id,[2] name, [3]category_id)
        echo $this->productModel->GetAllProduct(
            $addConlumn,$order,4
        );
        // Số sau mảng là limit mảng chuyển vào qua $limit =4 tham số truyền vào trong GetAllProduct()

        $pageTitle = "Danh Sách Sản Phẩm Theo Danh Mục: Laptop";

        //include("E:\\xampp\htdocs\Project_MVC\Views\\frontend\products\index.php");  
        // require view($viewPath)=>bên trong truyền dữ liệu cho view path sau đó chạy require viewPath(đường dẫn...+php)
        return $this->view('frontend.products.index',[
            "pagetitle"=>$pageTitle
        ]);
    }

    public function show(){
        $product = $this->productModel->findByID(1);
        //echo __METHOD__;
        return $this->view('frontend.products.show',[
            'Product'=>$product
        ]);
    }
}