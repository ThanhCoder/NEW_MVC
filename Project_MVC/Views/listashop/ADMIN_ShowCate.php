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
            <table class="table table-striped">
			 <thead>
			    <tr>
			      <th scope="col">STT</th>
                  <th scope="col">Name</th>
                  <th scope="col">Color</th>
                  <th scope="col">Size</th>
                  </tr>
              </thead>	
              <?php 
			$n=0;
			while ($row1s=mysqli_fetch_array($row1)) {
				?>
					<tr>
						<td><?php echo $n++;?></td>
                        <td><?php echo $row1s['type_cate']?></td>
                        <td><?php echo $row1s['color']?></td>
                        <td><?php echo $row1s['size']?></td>
						<td>
							<a class="btn btn-primary" href="index.php?module=category&action=edit&id=<?php echo $row1s['id']?>">Edit</a>
							<a class="btn btn-danger" href="index.php?module=category&action=delete&id=<?php echo $row1s['id']?>">Delete</a>
						</td>
					</tr>
				<?php
			}

		 ?>
	</table>
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
