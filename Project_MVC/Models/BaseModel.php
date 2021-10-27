<?php
session_start();
Class BaseModel extends Database{

    protected $connect;
    
    public function __construct(){
        //echo __METHOD__;
        $this->connect = $this->connect();
        //if()
        //{
        //    echo "Kết nối thành công";
        //}
        //else{
          //  echo "Kết nối thất bại";
        //}
    }


    public function Login($table, $username, $password){
        $sql = "select * from ${table} where username = '${username}' and password ='${password}'";
        //echo "<br>";
        // die($sql);
        $user =  $this->query($sql);
        //return mysqli_fetch_assoc($query);
        if(mysqli_num_rows($user)>0){
            //$_SESSION["user1"] = $username;
           echo "<br>Bạn đã đăng nhập thành công";
           //header("/../Project_SmartOSC123/?controller=home");
        }
        else
    {
        echo "đăng nhập thất bại";
        //header("/../Project_SmartOSC123/");
    }
    }
    

    /**
     * Lấy tất cả dữ liệu
     * Khởi tạo biến $select để khởi tạo gọi ra 1 mảng mới sau đó ProductModel gọi đến GetAll và chèn dữ liệu vào mảng qua lệnh trong ProductController
     */
    public function GetAll($table,$select =['*'],$orderBys = ['name'=>'ASC'],$limit=10){
        //echo "<pre>";
        //print_r($select);
        //print_r($orderBys);
        

        // câu lệnh implode chuyển từ mảng sang chuỗi và ta dùng cách nhau dấu , 
        $columns = implode(',',$select);// Lấy danh sách cột truyền vào cần qua hàm GetAllProduct trong ProductController 
        $orderByString = implode(' ',$orderBys); // chuyển sang dấu cách
        //die($orderByString);
        if($orderByString){
            // ASC TĂNG DẤN, DESC GIẢM DẦN
            //$sql = "select {$columns} from ${table} order by id ASC limit ${limit};";
            $sql = "select {$columns} from ${table} order by ${orderByString} limit ${limit};";
        }
        else{
            $sql = "select {$columns} from ${table}  limit ${limit};";
        }

        
    
        //die($sql);
        
        $query =  $this->query($sql);
        
        //die($query);
        //var_dump($query);

        $data =[];

        while($row = mysqli_fetch_assoc($query)){
            echo "<pre>";
            var_dump($row);
            echo "</pre>";

            //array_push($data,$row);
        }
       //return $data;
    }

    public function StoreCate($table,$type_cate){
        $sql = "insert into ${table}(type_cate) values('$type_cate')";
        //die($sql);
        $query =  $this->query($sql);
    }

    public function GetAllCate($table){
        $sql = "select * from ${table};";
        //die($sql);
        $query =  $this->query($sql);
        return $query;
    }

    public function GetCateProduct(){
        $sql = "select s.*, c.type_cate from product_details s inner join categories c on s.id_cate = c.id_cate";
        $query =  $this->query($sql);
        return $query;
    }

    public function GetAllPro($table){
        $sql = "select * from ${table};";
        //die($sql);
        $query =  $this->query($sql);
        return $query;
    }

    public function GetAllProWhite($table,$color)
    {
        $sql = "select * from ${table} where color='$color';";
        //die($sql);
        $query =  $this->query($sql);
        return $query;
    }

    public function SearchProducts($table,$search)
    {
        $sql = "select * from ${table} where name='$search';";
        //die($sql);
        $query =  $this->query($sql);
        return $query;
    }

    public function GetAllProId_Cate($table,$id_cate)
    {
        $sql = "select * from ${table} where id_cate='$id_cate';";
        //die($sql);
        $query =  $this->query($sql);
        return $query;
    }

    public function GetAllProSize($table,$size)
    {
        $sql = "select * from ${table} where type='$size';";
        //die($sql);
        $query =  $this->query($sql);
        return $query;
    }


    /**
     * Lấy 1 bảng ghi trong bảng
     */
    //public function FindByID(){

    //}
    // $table = self::TABLE
    public function Find($table,$id){
        $sql = "select * from ${table} where id = ${id} limit = 1";
        //die($sql);
        $query =  $this->query($sql);
        //return mysqli_fetch_assoc($query);
        
    }


    /**
     * Thêm dữ liệu vào bảng
     */
    public function Store($table,$name, $brand, $price,$color,$sex,$size,$image,$id_cate,$quantity,$description)
    {
        $sql = "insert into ${table}(name,brand,price,color,sex,type,image,id_cate,quantity,describer) values('$name','$brand','$price','$color','$sex','$size','$image','$id_cate','$quantity','$description')";
        //die($sql);
        $query =  $this->query($sql);
    }

    /**
     * Update dữ liệu vào bảng
     */
    public function Update(){

    }

    /**
     * Delete dữ liệu khỏi bảng
     */

     public function Delete(){

     }

     public function query($sql){
     return mysqli_query($this->connect,$sql);
     }

}