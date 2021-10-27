<?php

class HomeredController extends BaseController
{
    private $productsModel;

    public function __construct(){
         // require view($modelPath)=>bên trong truyền dữ liệu cho modelpath sau đó chạy require ModelPath(đường dẫn...+php)
        $this->loadModel('ProductsModel');
        $this->productsModel = new ProductsModel;
    }

    public function index(){
        $row1 = $this->productsModel->GetAllProdWhite('Red');
        $row2 = $this->productsModel->GetAllCategory();
        $row3 = $this->productsModel->GetAllCategory();
        $row4 = $this->productsModel->GetAllCategory();
        return $this->view('listashop.Admin_Hp_White',[        
            'row1' => $row1,
            'row2' => $row2,
            'row3' => $row3,
            'row4' => $row4
            ]);
    }

}