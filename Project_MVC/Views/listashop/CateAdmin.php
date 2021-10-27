<!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
				<div class="container">
					<div class="banner_content text-center">
						<h2>Product List Page</h2>
						<div class="page_link">
							<a href="index.php">Home</a>
							<a href="category.php">Shop</a>
							<a href="category.php">Shop Category</a>
                        </div>
                    </div>
                    <a href="/../Project_SmartOSC123/?controller=productss">ADD PRODUCT</a>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Category Product Area =================-->
        <section class="cat_product_area p_120">
        	<div class="container">
        		<div class="row flex-row-reverse">
        			<div class="col-lg-9">
        				<div class="product_top_bar">
        					<div class="left_dorp">
								<select class="sorting">
									<option value="1">Default sorting</option>
									<option value="2">Default sorting 01</option>
									<option value="4">Default sorting 02</option>
								</select>
								<select class="show">
									<option value="1">Show 12</option>
									<option value="2">Show 14</option>
									<option value="4">Show 16</option>
								</select>
        					</div>
        					<div class="right_page ml-auto">
								<nav class="cat_page" aria-label="Page navigation example">
									<ul class="pagination">
										<li class="page-item"><a class="page-link" href="#"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a></li>
										<li class="page-item active"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item blank"><a class="page-link" href="#">...</a></li>
										<li class="page-item"><a class="page-link" href="#">6</a></li>
										<li class="page-item"><a class="page-link" href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
									</ul>
								</nav>
        					</div>
                        </div>
                        
            <!-- Code danh mục  -->	
                        <div class="latest_product_inner row">
                        <?php 
			                    while ($row1s=mysqli_fetch_array($row1)) {
				            ?>
							<div class="col-lg-4 col-md-4 col-sm-6">
								<div class="f_p_item">
									<div class="f_p_img">
                                    <img class="img-fluid" src="Views/listashop/img/product/feature-product/<?php echo $row1s['image']?>">
										<div class="p_icon">
											<a href="#"><i class="lnr lnr-heart"></i></a>
											<a href="#"><i class="lnr lnr-cart"></i></a>
										</div>
									</div>
									<a href="#"><h4><?php echo $row1s['name'] ?></h4></a>
									<h5><?php echo $row1s['price']?></h5>
								</div>
                            </div> 
                            <?php
			                    }
                            ?>
                        
						</div>
        			</div>
        			<div class="col-lg-3">
        				<div class="left_sidebar_area">
                        <aside class="left_widgets cat_widgets">
        						<div class="l_w_title">
									<h3>Category Products Filter</h3>
								</div>
        						<div class="widgets_inner">
									<ul class="list">
										<li>
											<a href="#">Size</a>
											<ul class="list">
                                                <li class="active"><a href="/../Project_SmartOSC123/?controller=homewhite&action=sizes">S</a></li>
                                                <li class="active"><a href="/../Project_SmartOSC123/?controller=homewhite&action=sizel">L</a></li>
                                                <li class="active"><a href="/../Project_SmartOSC123/?controller=homewhite&action=sizem">M</a></li>
                                                <li class="active"><a href="/../Project_SmartOSC123/?controller=homewhite&action=sizexl">XL</a></li>
                                                <li class="active"><a href="/../Project_SmartOSC123/?controller=homewhite&action=sizexxl">XXL</a></li>
                                                <li class="active"><a href="/../Project_SmartOSC123/?controller=homewhite&action=sizexs">XS</a></li>
                                            </ul>
										</li>
										<li><a href="#">Color</a>
                                        <ul class="list">
                                         <li>
                                            <li class="active"><a href="/../Project_SmartOSC123/?controller=homewhite&action=whitemilt">White Milt</a></li>
                                            <li class="active"><a href="/../Project_SmartOSC123/?controller=homewhite&action=yellow">Yellow</a></li>
                                            <li class="active"><a href="/../Project_SmartOSC123/?controller=homewhite&action=orange">Orange</a></li>
                                            <li class="active"><a href="/../Project_SmartOSC123/?controller=homered">Red</a></li>
                                            <li class="active"><a href="/../Project_SmartOSC123/?controller=homewhite&action=blue">Blue</a></li>
                                            <li class="active"><a href="/../Project_SmartOSC123/?controller=homewhite&action=purple">Purple</a></li>
                                            <li class="active"><a href="/../Project_SmartOSC123/?controller=homewhite&action=extrared">Extra Red</a></li>
                                            <li class="active"><a href="/../Project_SmartOSC123/?controller=homewhite&action=lowblue">Low blue</a></li>
                                            <li class="active"><a href="/../Project_SmartOSC123/?controller=homewhite&action=grey">Grey</a></li>
                                            <li class="active"><a href="/../Project_SmartOSC123/?controller=homewhite&action=loworange">Low Orange</a></li>
                                            <li class="active"><a href="/../Project_SmartOSC123/?controller=homewhite&action=dark">Dark</a></li>
                                    
                                        </li>
                                    </ul>
										</li>
										<li><a href="#">Category</a>
                                        <ul class="list">
                                    <li>
                                    <li class="active"><a href="/../Project_SmartOSC123/?controller=homewhite&action=cate_1">Men Clother</a></li>
                                        <li class="active"><a href="/../Project_SmartOSC123/?controller=homewhite&action=cate_2">Women Clother</a></li>
                                        <li class="active"><a href="/../Project_SmartOSC123/?controller=homewhite&action=cate_3">Men Shirt</a></li>
                                        <li class="active"><a href="/../Project_SmartOSC123/?controller=homewhite&action=cate_4">Men Suit</a></li>
                                        <li class="active"><a href="/../Project_SmartOSC123/?controller=homewhite&action=cate_5">Women Suit</a></li>
                                        <li class="active"><a href="/../Project_SmartOSC123/?controller=homewhite&action=cate_6">Men Sport</a></li>
                                        <li class="active"><a href="/../Project_SmartOSC123/?controller=homewhite&action=cate_7">Women Departure</a></li>
                                        <li class="active"><a href="/../Project_SmartOSC123/?controller=homewhite&action=cate_8">Cold Clother</a></li>
                                        <li class="active"><a href="/../Project_SmartOSC123/?controller=homewhite&action=cate_9">Spring Clother</a></li>
                                        <li class="active"><a href="/../Project_SmartOSC123/?controller=homewhite&action=cate_10">Women Pants</a></li>
                                        <li class="active"><a href="/../Project_SmartOSC123/?controller=homewhite&action=cate_11">Sport Clother</a></li>
                                        <li class="active"><a href="/../Project_SmartOSC123/?controller=homewhite&action=cate_12">Men Pants</a></li>
                                        </li>
                                    </ul>
										</li>
									</ul>
        						</div>
        					</aside>
        					<aside class="left_widgets p_filter_widgets">
        						<div class="l_w_title">
									<h3>Product Filters</h3>
                                </div>
                                
        						<div class="widgets_inner">
                                    <h4>Brand</h4>
                                    <ul class="list">
                                    <?php 
			                            while ($row2s=mysqli_fetch_array($row2)) {
                                     ?>
                                        <li>
                                        <li class="active"><a href="/../Project_SmartOSC123/?controller=homewhite&action=cate_1"><?php echo $row2s['type_cate'] ?></a></li>
                                        </li>
                                        <?php
			                                }
                                        ?>
								
                                    </ul>
                                </div>
                               
                                
        						<div class="widgets_inner">
        							<h4>Color</h4>
        							<ul class="list">
                                    <li>
                                    <!--<a href="/../Project_SmartOSC123/?controller=homewhite">GreenB</a>-->
                                    <?php 
			                            while ($row3s=mysqli_fetch_array($row3)) {
                                     ?>
                                        <li class="active"><a href="/../Project_SmartOSC123/?controller=homewhite"><?php echo $row3s['color'] ?></a></li>
                                        </li>
                                        <?php
			                                }
                                        ?>
                                    </ul>
                                </div>
                                
        						<div class="widgets_inner">
        							<h4>Price</h4>
        							<div class="range_item">
        								<div id="slider-range"></div>
										<div class="row m0">
											<label for="amount">Price : </label>
  											<input type="text" id="amount" readonly>
										</div>
									</div>
        						</div>
        					</aside>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Category Product Area =================-->
        
        <!--================Most Product Area =================-->
        <section class="most_product_area most_p_withoutbox">
			<div class="container">
				<div class="main_title">
					<h2>Most Searched Products</h2>
					<p>Who are in extremely love with eco friendly system.</p>
				</div>
				<div class="row most_product_inner">
					<div class="col-lg-3 col-sm-6">
						<div class="most_p_list">
							<div class="media">
								<div class="d-flex">
									<img src="img/product/most-product/m-product-1.jpg" alt="">
								</div>
								<div class="media-body">
									<a href="#"><h4>Black lace Heels</h4></a>
									<h3>$189.00</h3>
								</div>
							</div>
							<div class="media">
								<div class="d-flex">
									<img src="img/product/most-product/m-product-2.jpg" alt="">
								</div>
								<div class="media-body">
									<a href="#"><h4>Black lace Heels</h4></a>
									<h3>$189.00</h3>
								</div>
							</div>
							<div class="media">
								<div class="d-flex">
									<img src="img/product/most-product/m-product-3.jpg" alt="">
								</div>
								<div class="media-body">
									<a href="#"><h4>Black lace Heels</h4></a>
									<h3>$189.00</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="most_p_list">
							<div class="media">
								<div class="d-flex">
									<img src="img/product/most-product/m-product-4.jpg" alt="">
								</div>
								<div class="media-body">
									<a href="#"><h4>Black lace Heels</h4></a>
									<h3>$189.00</h3>
								</div>
							</div>
							<div class="media">
								<div class="d-flex">
									<img src="img/product/most-product/m-product-5.jpg" alt="">
								</div>
								<div class="media-body">
									<a href="#"><h4>Black lace Heels</h4></a>
									<h3>$189.00</h3>
								</div>
							</div>
							<div class="media">
								<div class="d-flex">
									<img src="img/product/most-product/m-product-6.jpg" alt="">
								</div>
								<div class="media-body">
									<a href="#"><h4>Black lace Heels</h4></a>
									<h3>$189.00</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="most_p_list">
							<div class="media">
								<div class="d-flex">
									<img src="img/product/most-product/m-product-7.jpg" alt="">
								</div>
								<div class="media-body">
									<a href="#"><h4>Black lace Heels</h4></a>
									<h3>$189.00</h3>
								</div>
							</div>
							<div class="media">
								<div class="d-flex">
									<img src="img/product/most-product/m-product-8.jpg" alt="">
								</div>
								<div class="media-body">
									<a href="#"><h4>Black lace Heels</h4></a>
									<h3>$189.00</h3>
								</div>
							</div>
							<div class="media">
								<div class="d-flex">
									<img src="img/product/most-product/m-product-9.jpg" alt="">
								</div>
								<div class="media-body">
									<a href="#"><h4>Black lace Heels</h4></a>
									<h3>$189.00</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="most_p_list">
							<div class="media">
								<div class="d-flex">
									<img src="img/product/most-product/m-product-10.jpg" alt="">
								</div>
								<div class="media-body">
									<a href="#"><h4>Black lace Heels</h4></a>
									<h3>$189.00</h3>
								</div>
							</div>
							<div class="media">
								<div class="d-flex">
									<img src="img/product/most-product/m-product-11.jpg" alt="">
								</div>
								<div class="media-body">
									<a href="#"><h4>Black lace Heels</h4></a>
									<h3>$189.00</h3>
								</div>
							</div>
							<div class="media">
								<div class="d-flex">
									<img src="img/product/most-product/m-product-12.jpg" alt="">
								</div>
								<div class="media-body">
									<a href="#"><h4>Black lace Heels</h4></a>
									<h3>$189.00</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </section>
        <!--================End Most Product Area =================-->
        