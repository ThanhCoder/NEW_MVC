<?php
	require_once('header1.php');
    ?>
      <!--================Home Banner Area =================-->
      <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
				<div class="container">
					<div class="banner_content text-center">
						<h2>Thêm Danh Mục</h2>
						<div class="page_link">
							<a href="index.php">Yêu Cầu</a>
							<a href="tracking.php">Thêm Danh Mục</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->

        <!--================Tracking Box Area =================-->
        <section class="tracking_box_area p_120">
        	<div class="container">
            <h2>ADD CATEGORY</h2>
        		<div class="tracking_box_inner"> <!--action="/../Project_SmartOSC123/?controller=home"-->
        			<form class="row tracking_form"  method="post" novalidate="novalidate" enctype="multipart/form-data">
               
                <!--================Bắt đầu thêm các trường dữ liệu =================-->    
                <!-- TÊN -->    
                
                <div class="col-md-12 form-group"  >
                    <h6>Type Category</h6>            <!--value="<?php// echo $name ?>"-->
                    <input type="text" class="form-control" id="type_cate" name="type_cate"  placeholder="Add Type Cate">
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
        if(isset($_POST['type_cate'])){
            $type_cate = $_POST['type_cate'];
        }
        else
        {
            $type_cate = " ";
            echo $type_cate;
        }
     }
     //echo $name, $brand, $price,$color,$sex,$size;
     
?>


<?php
	require_once('footer1.php');
?>
