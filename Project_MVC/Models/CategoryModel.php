<!--<h3>Category Model</h3>
<h3>Category Model</h3>
<h3>Category Model</h3>
<h3>Category Model</h3>
<h3>Category Model</h3>
<h3>Category Model</h3>
<h3>Category Model</h3>
<h3>Category Model</h3>
<h3>Category Model</h3>-->
<?php

class CategoryModel extends BaseModel
{
    const TABLE="categories";

    public function StoreCategory($type_cate)
       {
           return $this->StoreCate(self::TABLE,$type_cate);
       }

    public function GetAllCategory(){
        return $this->GetAllCate(self::TABLE);
    }
}