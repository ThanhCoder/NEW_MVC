<?php
	require_once('header1.php');
    ?>
      <!--================Home Banner Area =================-->
      <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
				<div class="container">
					<div class="banner_content text-center">
						<h2>Thêm Sản Phẩm</h2>
						<div class="page_link">
							<a href="index.php">Yêu Cầu</a>
							<a href="tracking.php">Thêm Sản Phẩm</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->

        <!--================Tracking Box Area =================-->
        <section class="tracking_box_area p_120">
        	<div class="container">
            <h2>ADD PRODUCT</h2>
        		<div class="tracking_box_inner"> <!--action="/../Project_SmartOSC123/?controller=home"-->
        			<form class="row tracking_form" method="post" novalidate="novalidate" enctype="multipart/form-data">
               
                <!--================Bắt đầu thêm các trường dữ liệu =================-->    
                <!-- TÊN -->    
                
                <div class="col-md-12 form-group"  >
                    <h6>Name</h6>            <!--value="<?php// echo $name ?>"-->
                    <input type="text" class="form-control" id="name" name="name"  placeholder="Add Name Product">
                    </div>

                    <!-- NHÃN HIỆU -->    

                        <div class="col-md-12 form-group">
                        <h6>Brand</h6>
							<input type="text" class="form-control" id="brand" name="brand"  placeholder=" Add Brand Product">
                        </div>
                        
                     <!-- GIÁ -->        

                        <div class="col-md-12 form-group">
                        <h6>Price</h6>    
                        <input type="number" class="form-control" id="price" name="price" placeholder="Price">
                        </div>
                     

                <!-- Thêm css cho table -->
                    <style>
                        table, th, td {
                        border: 1px solid black;
                        padding: 10px;
                        }
                        table {
                        border-spacing: 10px;
                        }
                    </style>
                       <!-- End css cho table -->



                     <!-- MÀU SẮC -->    
                     <!-- Dùng checked cho checkbox hay radio để nó chọn tích vào cái mục có checked-->    

                    <div class="col-md-12 form-group">
                    <h6>Color</h6>
                        <table border=1 cellpadding= 0 cellspacing =5 >
                        <tr><td>COLOR</td>
                            <td><input type="checkbox" name="color" value="White Milt" checked>&nbsp White Milt &nbsp</td>
                            <td><input type="checkbox" name="color" value="Yellow">&nbsp Yellow &nbsp</td>
                            <td><input type="checkbox" name="color" value="Orange">&nbsp Orange &nbsp</td>
                            <td><input type="checkbox" name="color" value="Green">&nbsp Green &nbsp</td>
                            <td><input type="checkbox" name="color" value="Red">&nbsp Red &nbsp </td>
                            <td><input type="checkbox" name="color" value="Blue">&nbsp Blue &nbsp</td>
                            <td><input type="checkbox" name="color" value="Purple">&nbsp Purple &nbsp</td>
                            <td><input type="checkbox" name="color" value="Extra Red">Extra Red</td>
                            <td><input type="checkbox" name="color" value="Low Blue">Low Blue</td>
                            <td><input type="checkbox" name="color" value="Grey">&nbsp Grey &nbsp</td>
                            <td><input type="checkbox" name="color" value="Low Orange">&nbspLow Orange &nbsp</td>
                            <td><input type="checkbox" name="color" value="Dark">&nbsp Dark &nbsp</td>
                            </tr>
                            </table>
                        </div>
                    <!-- Số lượng -->
                    <div class="col-md-12 form-group">
                        <h6>Quantity</h6>    
                        <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity">
                        </div>
                        
                    <!-- GIỚI TÍNH -->        
        				<div class="col-md-12 form-group" class="form-control">
                        <h6>Sex</h6>
                        <table border=1 cellpadding= 0 cellspacing =15 >
                        <tr><td>&nbsp&nbsp SEX &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                            <td><input type="radio" name="sex" value="True" checked>&nbsp Men &nbsp</td>
                            <td><input type="radio" name="sex" value="False" checked>&nbsp Women &nbsp </td>
                            </tr>
                            </table>
                        </div>
                        

               

                    <!-- LOẠI (Size) -->    
                        <div class="col-md-12 form-group">
                        <h6>Size</h6>
                        <table border=1 cellpadding= 0 cellspacing =5 >
                        <tr><td>&nbsp&nbsp SIZE &nbsp&nbsp&nbsp&nbsp&nbsp</td>
                            <td><input type="checkbox" name="size" value="S" checked>&nbsp S &nbsp</td>
                            <td><input type="checkbox" name="size" value="L" >&nbsp L &nbsp</td>
                            <td><input type="checkbox" name="size" value="M" >&nbsp M &nbsp</td>
                            <td><input type="checkbox" name="size" value="XL" >&nbsp XL &nbsp</td>
                            <td><input type="checkbox" name="size" value="XXL" >&nbsp XXL &nbsp </td>
                            <td><input type="checkbox" name="size" value="XS" >&nbsp XS &nbsp</td>
                            </tr>
                            </table>
                        </div>    

                    <!-- ẢNH -->
                    <div class="col-md-12 form-group">
                        <h6>Image</h6>
                    <input type="file" class="form-control" id="brand" name="image">
                        </div>
                     
 
                    <!-- id_cate-->
                    <div class="col-md-12 form-group"  >
                    <h6>Categories</h6>
                    <!--<input type="number" class="form-control" id="id_cate" name="id_cate" placeholder="Quantity">-->
                    <select name="id_cate" class="form-control">

                            <?php 
                                while($row2s = mysqli_fetch_array($row2))
                                {
                                    echo "<option value='{$row2s['id_cate']}'>{$row2s['type_cate']}</option>";
                                 }
                                 
                            ?>
                    </select>
                    </div>
                    
                    <div class="col-md-12 form-group">
                        <h6>Description</h6>
                        <textarea type="" class="form-control" name="description" value="" col="10" row="50" placeholder="Description" ></textarea>    
                        </div>
                   

                     <!--SUBMIT -->    
        				<div class="col-md-12 form-group">
							<button type="submit" value="submit" name="buttonins" class="btn submit_btn">Thêm dữ liệu</button>
                        
                        </div>
					</form>
        		</div>
        	</div>
        </section>
 
       <!--================End Tracking Box Area =================-->
<?php
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
        if(isset($_POST['image'])){
            $image = $_POST['image'];
        }
        else
        {
            $image = " ";
        }
        if(isset($_POST['id_cate'])){
            $id_cate = $_POST['id_cate'];
        }
        else
        {
            $id_cate = " ";
        }
     }
     //echo $name, $brand, $price,$color,$sex,$size;
     
?>


<?php
	require_once('footer1.php');
?>
