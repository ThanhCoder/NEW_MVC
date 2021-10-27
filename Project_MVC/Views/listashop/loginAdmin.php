

        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
				<div class="container">
					<div class="banner_content text-center">
						<h2>Đăng Nhập/Đăng Ký</h2>
						<div class="page_link">
							<a href="index.php">Home</a>
							<a href="login.php">Login</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
<!----  Vùng code sửa đổi cho đăng nhập   -------->

        <!--================Login Box Area =================-->
        <section class="login_box_area p_120">
        	<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="login_box_img">
							<img class="img-fluid" src="Views/listashop/img/login.jpg" alt="">
							<div class="hover">
								<h4>New to our website?</h4>
								<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
								<a class="main_btn" href="registration.php">Tạo tài khoản mới</a>
							</div>
						</div>
                    </div>
                    
    <!------------- Form LOGIN----------->
					<div class="col-lg-6">
						<div class="login_form_inner">
							<h3>Đăng Nhập</h3><!-- action="/../Project_SmartOSC123/?controller=homer"-->
							<form class="row login_form" action="/../Project_SmartOSC123/?controller=homer" method="post" id="contactForm" novalidate="novalidate">
								<div class="col-md-12 form-group">
									<input type="text" class="form-control"  name="username" placeholder="Username">
								</div>
								<div class="col-md-12 form-group">
									<input type="text" class="form-control"  name="password" placeholder="Password">
								</div>
								<div class="col-md-12 form-group">
									<div class="creat_account">
										<input type="checkbox" id="f-option2" name="selector">
										<label for="f-option2">Keep me logged in</label>
									</div>
								</div>
								<div class="col-md-12 form-group">
									<button type="submit" value="submit" name="btn-submit" class="btn submit_btn">Log In</button>
									<a href="#">Forgot Password?</a>
								</div>
							</form>
						</div>
					</div>
				</div>
        	</div>
        </section>
        <!--================End Login Box Area =================-->
	   
	   <?php
/*
	if(isset($_POST["btn-submit"])){
		if(isset($_POST["username"])){
		$username = $_POST["username"];
		//echo "<br> Tài khoản".$username;
	}
		else
		{
			$username = " ";
		}

		if(isset($_POST["password"])){
		$password = $_POST["password"];
		//echo "<br>Mật khẩu".$password;
	}
	else{
		$password =" ";
	}
}
*/
?>