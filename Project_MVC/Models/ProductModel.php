<h3>Product Model</h3>
<h3>Product Model</h3>
<h3>Product Model</h3>
<h3>Product Model</h3>
<h3>Product Model</h3>
<h3>Product Model</h3>
<h3>Product Model</h3>
<h3>Product Model</h3>
<?php

class ProductModel extends BaseModel
{
    const TABLE="products";

    // chèn biến $select vào gọi vào GetAll() ở BaseController
    public function GetAllProduct($select =['*'],$orderBys = [],$limit=10){
        // chỉ cần dùng self để gọi hằng truyền vào
       return $this->GetAll(self::TABLE,$select,$orderBys,$limit);
        
    }

    public function findByID($id){
        return [
        [
            'id'=>1,
            'brand'=>'Apple',
        ],
        [
            'id'=>2,
            'brand'=>'Microsolf'
        ]
            ];
    }

    public function delete(){
        return __METHOD__;
    }
}