<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>SmartEDU - Education Responsive HTML5 Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version"> 

	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Customer Login</h4>
			</div>
			<div class="modal-body customer-box">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
					<li><a href="#Registration" data-toggle="tab">Registration</a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="Login">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" Maloai="Maloai" placeholder="Maloai" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" Tenloai="Tenloai" placeholder="Tenloai" type="tenloai">
								</div>
							</div>
							
							<div class="row">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-light btn-radius btn-brd grd1">
										Submit
									</button>
									<a class="for-pwd" href="javascript:;">Forgot your password?</a>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="Registration">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" placeholder="ID" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" Taikhoan="Taikhoan" placeholder="Taikhoan" type="Taikhoan">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" Taikhoan="Taikhoan" placeholder="Taikhoan" type="Taikhoan">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" Maloai="Maloai" placeholder="Maloai" type="Maloai">
								</div>
							</div>
							<div class="row">							
								<div class="col-sm-10">
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Save &amp; Continue
									</button>
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Cancel</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>

    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	

    <!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.html">
					<img src="images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="index.php">Trang chủ</a></li>
						<li class="nav-item"><a class="nav-link" href="gioi_thieu.php">Giới thiệu</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
							</div>
                        </li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Lớp học </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="course-grid-2.php">Lớp học 1  </a>
								<a class="dropdown-item" href="course-grid-3.php">Lớp học 2 </a>
								<a class="dropdown-item" href="course-grid-4.php">Lớp học 3 </a>
							</div>
						</li>
						<li class="nav-item active dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Đánh giá </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="blog-single.php">Đánh giá của phụ huynh </a>
							</div>
						</li>
						<li class="nav-item active"><a class="nav-link" href="teachers.php">Giáo viên</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
                        <li><a class="hover-btn-new log" href="#" data-toggle="modal" data-target="#login"><span>Liên hệ</span></a></li>
                    </ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<div class="all-title-box">
		<div class="container text-center">
			<h1>ĐỘI NGŨ GIÁO VIÊN<span class="m_1">UY TÍN - CHẤT LƯỢNG -NHIỆT TÌNH.</span></h1>
		</div>
	</div>
	
	<div id="teachers" class="section wb">
        <div class="container">
            <div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img style="width: 400px;height: 300px;" src="images/gv11.png">
							<div class="social">
								<ul>
									<li><a href="#" class="fa fa-facebook"></a></li>
									<li><a href="#" class="fa fa-twitter"></a></li>
									<li><a href="#" class="fa fa-linkedin"></a></li>
									<li><a href="#" class="fa fa-skype"></a></li>
								</ul>
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Lê Anh Thư</h3>
							<span class="post">Giáo viên dạy Toán-Lớp 1</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img style="width: 400px;height: 300px;" src="images/gv8.png">
							<div class="social">
								<ul>
									<li><a href="#" class="fa fa-facebook"></a></li>
									<li><a href="#" class="fa fa-twitter"></a></li>
									<li><a href="#" class="fa fa-linkedin"></a></li>
									<li><a href="#" class="fa fa-skype"></a></li>
								</ul>
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Nông Thị Linh</h3>
							<span class="post">Sinh viên dạy Anh-Lớp 2</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img style="width: 400px;height: 300px;" src="images/gvien01.png">
							<div class="social">
								<ul>
									<li><a href="#" class="fa fa-facebook"></a></li>
									<li><a href="#" class="fa fa-twitter"></a></li>
									<li><a href="#" class="fa fa-linkedin"></a></li>
									<li><a href="#" class="fa fa-skype"></a></li>
								</ul>
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Trần Quốc Anh</h3>
							<span class="post">Giáo viên dạy Toán-Lớp 5</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img style="width: 400px;height: 300px;" src="images/gv2.png">
							<div class="social">
								<ul>
									<li><a href="#" class="fa fa-facebook"></a></li>
									<li><a href="#" class="fa fa-twitter"></a></li>
									<li><a href="#" class="fa fa-linkedin"></a></li>
									<li><a href="#" class="fa fa-skype"></a></li>
								</ul>
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Lê Thị Hoa</h3>
							<span class="post">Sinh viên dạy Văn-Lớp 4</span>
						</div>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img style="width: 400px;height: 300px;" src="images/gv6.png">
							<div class="social">
								<ul>
									<li><a href="#" class="fa fa-facebook"></a></li>
									<li><a href="#" class="fa fa-twitter"></a></li>
									<li><a href="#" class="fa fa-linkedin"></a></li>
									<li><a href="#" class="fa fa-skype"></a></li>
								</ul>
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Nguyễn Lê Vy</h3>
							<span class="post">Sinh viên dạy Văn-Lớp 7</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img style="width: 400px;height: 300px;" src="images/gv5.png">
							<div class="social">
								<ul>
									<li><a href="#" class="fa fa-facebook"></a></li>
									<li><a href="#" class="fa fa-twitter"></a></li>
									<li><a href="#" class="fa fa-linkedin"></a></li>
									<li><a href="#" class="fa fa-skype"></a></li>
								</ul>
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Nguyễn Minh Nhật</h3>
							<span class="post">Giáo viên dạy Toán-Lớp 9</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img style="width: 400px;height: 300px;" src="images/gv12.png">
							<div class="social">
								<ul>
									<li><a href="#" class="fa fa-facebook"></a></li>
									<li><a href="#" class="fa fa-twitter"></a></li>
									<li><a href="#" class="fa fa-linkedin"></a></li>
									<li><a href="#" class="fa fa-skype"></a></li>
								</ul>
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Trần Ngọc Yến</h3>
							<span class="post">Giáo viên dạy Anh-Lớp 12</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img style="width: 400px;height: 300px;" src="images/gv7.png">
							<div class="social">
								<ul>
									<li><a href="#" class="fa fa-facebook"></a></li>
									<li><a href="#" class="fa fa-twitter"></a></li>
									<li><a href="#" class="fa fa-linkedin"></a></li>
									<li><a href="#" class="fa fa-skype"></a></li>
								</ul>
							</div>
						</div>
						<div class="team-content">
							<h3 class="title">Lê Phương Trang</h3>
							<span class="post">Giáo viên dạy Toán- Lớp 11</span>
						</div>
					</div>
				</div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->	

    <div id="testimonials" class="parallax section db parallax-off" style="background-image:url('images/gvien.png');">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="testi-carousel owl-carousel owl-theme">
							<div class="testimonial clearfix">
								<div class="testi-meta">
									<img src="images/testi_01.png" alt="" class="img-fluid">
									<h4>Trần Thị Minh Hằng </h4>
								</div>
								<div class="desc">
									<h3><i class="fa fa-quote-left"></i> GIÁM ĐỐC TRUNG TÂM SmartEDU!</h3>
									<p class="lead">Thầy cô là người lái đò. Vì vậythầy cô giáo phải luôn tậm tâm,sát cánh cùng các em học tập. Không tạo áp lực cho học sinh.</p>
								</div>
								<!-- end testi-meta -->
							</div>
							<!-- end testimonial -->
						</div><!-- end carousel -->
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
    </div><!-- end section -->

	<?php 
	include('./footer.php');
?>

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">                   
                    <p class="footer-company-name">Bảo,Thảo,Đức. &copy; DHCN4 <a href="#">SmartEDU</a> </p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
</html>