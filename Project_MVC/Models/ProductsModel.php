<?php

class ProductsModel extends BaseModel
{
    const TABLE="product_details";
    const TABLES = "categories";
    public function GetAllProduct($select =['*'],$orderBys = []){
        // chỉ cần dùng self để gọi hằng truyền vào
       return $this->GetAll(self::TABLE,$select,$orderBys);
    }
    
       public function StoreProduct($name, $brand, $price,$color,$sex,$size,$image,$id_cate,$quantity,$description)
       {
           return $this->Store(self::TABLE,$name, $brand, $price,$color,$sex,$size,$image,$id_cate,$quantity,$description);
       }

       public function GetAllCategory(){
        return $this->GetAllCate(self::TABLES);
    }

    public function GetACategory(){
        return $this->GetCateProduct();
    }

    public function GetAllProd(){
        return $this->GetAllPro(self::TABLE);
    }

    public function GetAllProdWhite($color){
        return $this->GetAllProWhite(self::TABLE,$color);
    }

    public function GetAllProId_Category($id_cate){
        return $this->GetAllProId_Cate(self::TABLE,$id_cate);
    }

    public function GetAllProSizes($size){
        return $this->GetAllProSize(self::TABLE,$size);
    }

    public function SearchProduct($search){
        return $this->SearchProducts(self::TABLE,$search);
    }
}