<?php

class CategoryController extends BaseController
{
    private $categoryModel;

    public function __construct()
    {
        $this->loadModel('CategoriesModel');
        $this->categoryModel = new CategoriesModel;
    }

    public function index(){
        /*$categories = [
            [
                'id' => 1,
                'name' => "laptop"
            ],
            [
                'id'   => 2,
                'name' => "laptop"
            ],
            [
                'id' => 3,
                'name' => "laptop"
            ],
            [
                'id' => 4,
                'name' => "laptop"
            ],
            [
                'id' => 5,
                'name' => "laptop"
            ],
            [
                'id' => 6,
                'name' => "laptop"
            ]
        ];*/
        $addConlumn =  ['id','name'];

        // Lấy order để dùng order by giảm dần
        $order = ['column'=>'id', 'order' => 'ASC'];

        // Load Model ok khởi tạo model
        // truyền vào GetAllProduct($select =['*']) $select truyền vào 1 mảng [[1]id,[2] name, [3]category_id)
        echo $this->categoryModel->GetAllProduct(
            $addConlumn,$order,4
        );

        $pageTitle = "Danh Sách Sản Phẩm Theo Danh Mục: Laptop";

        return $this->view('listashop.header',[
            //'categories'=>$categories,
            'pageTitle'=>$pageTitle,
            ]);
    }

    public function show(){
        $id =$_GET['id'];
        $category = $this->categoryModel->findByID($id);
        echo "<pre>";
        print_r($category);
    }
}
