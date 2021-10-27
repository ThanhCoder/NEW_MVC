<?php

class CategoriesController extends BaseController
{
    private $categoryModel;

    public function __construct()
    {
        $this->loadModel('CategoryModel');
        $this->categoryModel = new CategoryModel;
    }

    public function index(){

      if(isset($_POST['buttonins'])){
        if(isset($_POST['type_cate'])){
            $type_cate = $_POST['type_cate'];
            //echo $type_cate;
        }
        else
        {
            $type_cate = " ";
        }
        if(!empty($type_cate)){
            //$login = $this->loginModel->login($username,$password);
            echo "Thêm danh mục thành công";
        }
        else
        {
            echo "Vui lòng nhập lại thông tin!";
        }
        return $this->categoryModel->StoreCategory($type_cate);
        echo ("Thêm danh mục thành công");
     }
     //echo $name, $brand, $price,$color,$sex,$size;
     
        return $this->view('listashop.ADMIN_Category',[]);
    }

    public function show(){
        $row1 = $this->categoryModel->GetAllCategory();
        return $this->view('listashop.ADMIN_ShowCate',[
            'row1' => $row1
        ]);
    }
}