<?php

class HomewhiteController extends BaseController
{
    private $productsModel;

    public function __construct(){
         // require view($modelPath)=>bên trong truyền dữ liệu cho modelpath sau đó chạy require ModelPath(đường dẫn...+php)
        $this->loadModel('ProductsModel');
        $this->productsModel = new ProductsModel;
    }

    public function index(){
        $row1 = $this->productsModel->GetAllProdWhite('White Milt');
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

    public function yellow(){
        if(isset($_POST['buttonins'])){
            if(isset($_POST['timkiem'])){
                $search = $_POST['timkiem'];
                echo $search;
            }
            else
            {
                $search = " ";
            }
            $row5 = $this->productsModel->SearchProduct($search);
        }
        $row1 = $this->productsModel->GetAllProdWhite('Yellow');
        $row2 = $this->productsModel->GetAllCategory();
        $row3 = $this->productsModel->GetAllCategory();
        $row4 = $this->productsModel->GetAllCategory();
        return $this->view('listashop.Admin_Hp_White',[        
            'row1' => $row1,
            'row2' => $row2,
            'row3' => $row3,
            'row4' => $row4,
            'row5' => $row5
            ]);
    }

    public function orange(){
        $row1 = $this->productsModel->GetAllProdWhite('Orange');
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


    public function whitemilt(){
        $row1 = $this->productsModel->GetAllProdWhite('White Milt');
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

    public function blue(){
        $row1 = $this->productsModel->GetAllProdWhite('Blue');
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

    public function purple(){
        $row1 = $this->productsModel->GetAllProdWhite('Purple');
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

    public function extrared(){
        $row1 = $this->productsModel->GetAllProdWhite('Extra Red');
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

    public function lowblue(){
        $row1 = $this->productsModel->GetAllProdWhite('Low blue');
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

    public function grey(){
        $row1 = $this->productsModel->GetAllProdWhite('Grey');
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

    
    public function loworange(){
        $row1 = $this->productsModel->GetAllProdWhite('Low Orange');
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


    public function dark(){
        $row1 = $this->productsModel->GetAllProdWhite('Dark');
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
    
    public function cate_1(){
        $row1 = $this->productsModel->GetAllProId_Category('1');
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

    public function cate_2(){
        $row1 = $this->productsModel->GetAllProId_Category('2');
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
    
    public function cate_3(){
        $row1 = $this->productsModel->GetAllProId_Category('3');
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

    public function cate_4(){
        $row1 = $this->productsModel->GetAllProId_Category('4');
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

    public function cate_5(){
        $row1 = $this->productsModel->GetAllProId_Category('5');
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

    ///

    public function cate_6(){
        $row1 = $this->productsModel->GetAllProId_Category('6');
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

    public function cate_7(){
        $row1 = $this->productsModel->GetAllProId_Category('7');
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

    public function cate_8(){
        $row1 = $this->productsModel->GetAllProId_Category('8');
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

    public function cate_9(){
        $row1 = $this->productsModel->GetAllProId_Category('9');
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

    public function cate_10(){
        $row1 = $this->productsModel->GetAllProId_Category('10');
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

    public function cate_11(){
        $row1 = $this->productsModel->GetAllProId_Category('11');
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

    public function cate_12(){
        $row1 = $this->productsModel->GetAllProId_Category('12');
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


    public function sizes(){
        $row1 = $this->productsModel->GetAllProSizes('S');
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

    public function sizel(){
        $row1 = $this->productsModel->GetAllProSizes('L');
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

    public function sizem(){
        $row1 = $this->productsModel->GetAllProSizes('M');
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

    public function sizexl(){
        $row1 = $this->productsModel->GetAllProSizes('XL');
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

    public function sizexxl(){
        $row1 = $this->productsModel->GetAllProSizes('XXL');
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

    public function sizexs(){
        $row1 = $this->productsModel->GetAllProSizes('XS');
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

    public function search(){
        if(isset($_POST['buttonins'])){
            if(isset($_POST['timkiem'])){
                $search = $_POST['timkiem'];
                //echo $search;
            }
            else
            {
                $search = " ";
            }
            $row5 = $this->productsModel->SearchProduct($search);
        }
        $row2 = $this->productsModel->GetAllCategory();
        $row3 = $this->productsModel->GetAllCategory();
        $row4 = $this->productsModel->GetAllCategory();
        return $this->view('listashop.Admin_Hp_Search',[        
            'row5' => $row5,
            'row2' => $row2,
            'row3' => $row3,
            'row4' => $row4
            ]);
    }

}