	   <!-- ===========  Code  =====================-->                   
        <!-- Thêm danh mục ở đây-->	
        <?php 
			                    while ($row1s=mysqli_fetch_array($row1)) {
				            ?>
                        <div class="latest_product_inner row">
                            <div class="col-lg-4 col-md-4 col-sm-6">
								<div class="f_p_item">
									<div class="f_p_img">
                                    <img class="img-fluid" src="Views/listashop/img/product/feature-product/<?php echo $row1s['image']?>.jpg">
										<div class="p_icon">
											<a href="#"><i class="lnr lnr-heart"></i></a>
											<a href="#"><i class="lnr lnr-cart"></i></a>
										</div>
									</div>
									<a href="#"><h4><?php echo $row1s['name'] ?></h4></a>
									<h5><?php echo $row1s['price']?></h5>
								</div>
							</div>
						</div>
                    </div>
                    <?php
			            }
                    ?>

<?php 
			                            while ($row1s=mysqli_fetch_array($row1)) {
				                     ?>
                                        
										<li><a href="#"><?php echo $row1s['brand'] ?></a></li>
                                        <?php
			                        }
                                ?>



 <!-- MÀU SẮC -->        

 <div class="col-md-12 form-group">
                    <h6>Color</h6>
                        <table border=1 cellpadding= 0 cellspacing =5 class="form-control">
                        <tr><td>&nbsp&nbsp&nbsp COLOR &nbsp&nbsp&nbsp</td>
                            <td><input type="radio" name="color" value="Red" checked>&nbsp Đỏ &nbsp</td>
                            <td><input type="radio" name="color" value="Yellow" checked>&nbsp Vàng &nbsp</td>
                            <td><input type="radio" name="color" value="Green" checked>&nbsp Xanh lá &nbsp</td>
                            <td><input type="radio" name="color" value="Orange" checked>&nbsp Cam &nbsp</td>
                            <td> <input type="radio" name="color" value="Red" checked>&nbsp Đỏ&nbsp </td>
                            <td><input type="radio" name="color" value="Blue" checked>&nbsp Xanh lam &nbsp</td>
                            <td><input type="radio" name="color" value="Purple" checked>&nbsp Tím &nbsp</td>
                            <td><input type="radio" name="color" value="Extra Red" checked>&nbsp Đỏ Mận &nbsp</td>
                            <td><input type="radio" name="color" value="Low Blue" checked>&nbsp Xanh nhạt &nbsp</td>
                            <td><input type="radio" name="color" value="While" checked>&nbsp Trắng &nbsp</td>
                            <td><input type="radio" name="color" value="Low Orange" checked>&nbsp Cam Đất &nbsp</td>
                            <td><input type="radio" name="color" value="Dark" checked>&nbsp Đen &nbsp</td>
                            </tr>
                            </table>
                        </div>



                               <!-- MÀU SẮC -->        

                    <div class="col-md-12 form-group" >
                    <h6>Color</h6>
                    <table border=1 cellpadding= 0 cellspacing =15 >
                        <tr>
                            <?php 
                                while($row3s = mysqli_fetch_array($row3))
                                {
                            ?>
                                <td><input type="checkbox" id="color" name="color" value="Red" checked><?php echo $row3s['color']; ?> &nbsp</td>
                            <?php       
                                }    
                            ?>
                            </tr>
                            </table>
                        </div>

                        <div class="widgets_inner">
        							<h4>Color</h4>
        							<ul class="list">
                                    <?php 
			                            while ($row3s=mysqli_fetch_array($row3)) {
                                     ?>
                                        <li>
										<input type="radio" name="color" value="Red" checked> <?php echo $row3s['color'] ?>
                                        </li>
                                        <?php
			                                }
                                        ?>
                                    </ul>
                                </div>


                                <input type="radio" name="color" value="Red" checked>  <?php echo $row2s['type_cate'] ?>