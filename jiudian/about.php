<?php
$conn=new mysqli("localhost","root","","jiudian");
if($conn->connect_error){
	die("连接失败".$conn->$connect_error);
}
mysqli_query($conn,"SET NAMES UTF8");
$sql = "select * from fangjian";
$res = $conn->query($sql);
$rs = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>sky-关于我们</title>
		<link rel="shortcut icon" href="img/favicon.ico">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- GOOGLE FONT -->
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">	
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
		<!-- CSS LIBRARY -->
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
		<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
		<link rel="stylesheet" type="text/css" href="css/gallery.css">
		<link rel="stylesheet" type="text/css" href="css/vit-gallery.css">
		<link rel="shortcut icon" type="text/css" href="images/favicon.png" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker.css" />
		<!-- MAIN STYLE -->
		<link rel="stylesheet" href="css/styles.css">
		<style type="text/css">
		.daohang{
				margin-left: 100px;
				color: #fff;
				font-size: 18px;
				padding-top: 15px;
				text-align: center;
				display: inline-block;
				width: 90px;
				height: 50px;
			}
			.daohang:hover{
				border-bottom: 2px solid white;
			}
			#check{
				color: #b3b3b3;
			}
			#check :hover{
				color: #8E7037;
			}
		</style>
	</head>

<body>

 

<!-- HEADER -->
<header class="header-sky">
	<div class="container">
		<!--HEADER-TOP-->
		<div class="header-top">
			<div class="header-top-left">
				<span id = 'weizhi'></span>
			</div>
			<div class="header-top-right">
				<ul>
					<li id = "denglu" class="dropdown"><a  id = 'test' href="#" title="LOGIN" class="dropdown-toggle"><?php if (isset($_COOKIE["user"])){
										echo $_COOKIE['user'];
									}
									else{
										echo "登录";
									}
					?> </a></li>
					<li id = "zhuce" class="dropdown"><a id = 'test_zhuce'  href="#" title="REGISTER" class="dropdown-toggle"><?php if (isset($_COOKIE["user"])){
										echo "注销";
									}
									else{
										echo "注册";
									}
					?></a></li>
					
					<li id = 'user' class="dropdown">
						<a href="#" class="dropdown-toggle">用户中心</a>
						
					</li>
				</ul>
			</div>
		</div>
		<!-- END/HEADER-TOP -->
	</div>
	<!-- MENU-HEADER -->
	<div class="menu-header">
		<nav class="navbar navbar-fixed-top">
			<div class="container">
				<div class="navbar-header ">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar "></span>
						<span class="icon-bar "></span>
						<span class="icon-bar "></span>
					</button>
					<a class="navbar-brand" href="index.php" title="Skyline"><img src="images/Home-1/sky-logo-header.png" alt="#" style="width: 120px;margin-top: -7px;"></a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-left">
						<a href="about.php"><span class = 'daohang'>关于我们</span></a>
						<a href="news.php"><span class = 'daohang'>广告新闻</span></a>
						<a href="show.php"><span class = 'daohang'>酒店展览</span></a>
						<a href="care.php"><span class = 'daohang'>注意事项</span></a>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<!-- END / MENU-HEADER -->
</header>
<!-- END-HEADER -->
<!-- SLIDER -->
<section class="section-slider height-v">
	<div id="index12" class="owl-carousel  owl-theme">
		<div class="item">
			<img alt="Third slide" src="images/Home-1/Slider-v1.jpg" class="img-responsive">
			<div class="carousel-caption">
				<h1 class="v2" style="display: inline;">欢迎来到</h1><img src="images/Home-1/sky-logo-header.png" style="width: 190px;height: 60px;margin-top: -30px; display: inline;"><h1  class="v2" style="display: inline;">酒店预订平台</h1><br><br>
				<p><span class="line-t"></span>一家低调的酒店预订平台<span class="line-b"></span></p>
			</div>
		</div>
		<div class="item">
			<img alt="Third slide" src="images/Home-2/Slider-v2.jpg" class="img-responsive">
			<div class="container">
				<div class="carousel-caption ">
					<h1 class="v2">享受一次不同的旅行</h1>
					<p class="p-v2"><span class="line-t"></span>让您的旅行变得与众不同<span class="line-b"></span></p>
				</div>
			</div>
		</div>
	</div>
	<div class="check-avail">
		<div class="container">
			<div class="arrival date-title ">
				<label>到达日期</label>
				<div id="datepicker" class="input-group date" data-date-format="yyyy-mm-dd">
					<input id ="form-control1" class="form-control" type="text">
					<span class="input-group-addon"><img src="images/Home-1/date-icon.png" alt="#"></span>
				</div>
			</div>
			<div class="departure date-title ">
				<label>离开日期</label>
				<div id="datepickeri" class="input-group date" data-date-format="yyyy-mm-dd">
					<input id= 'form-control2' class="form-control" type="text">
					<span class="input-group-addon"><img src="images/Home-1/date-icon.png" alt="#"></span>
				</div>
			</div>
			<div class="adults date-title ">
				<label>成人</label>
				<form>
					<div class=" carousel-search">
						<div class="btn-group">
							<a id = 'man_num' class="btn dropdown-toggle " data-toggle="dropdown" href="#">2</a>
							<ul class="dropdown-menu">
								<li><a>1</a></li>
								<li><a>2</a></li>
								<li><a>3</a></li>
								<li><a>4</a></li>
							</ul>
						</div>
					</div>
				</form>
			</div>
			<div class="children date-title ">
				<label>孩子</label>
				<form>
					<div class=" carousel-search">
						<div class="btn-group">
							<a id = 'kid_num' class="btn dropdown-toggle " data-toggle="dropdown" href="#">2</a>
							<ul class="dropdown-menu">
								<li><a>1</a></li>
								<li><a>2</a></li>
								<li><a>3</a></li>
								<li><a>4</a></li>
							</ul>
						</div>
					</div>
				</form>
			</div>
			<div class="find_btn date-title">
				<a id ="check" href="index.php">
				<div id = "check" class="text-find">
					查询
					<br>空余的房间
				
				</div>
				</a>
			</div>
		</div>
	</div>
</section>
<!-- END / SLIDER -->
<!-- OUR-ROOMS-->


<!-- TESTIMONOALS -->
<section class="testimonials">
	<div class="testimonials-h">
		<div class="testimonials-content">
			<div class="container">
				<div id="testimonials" class="owl-carousel owl-theme">
					<div class="item ">

						<div class="img-testimonials"><img src="images/Home-1/about-testimonials-img3.png" alt="#"></div>
						<h5 class="sky-h5">Brad Pitt</h5>
						<p class="testimonials-p1">来自 skyline - 首席执行官</p>
						<p class="testimonials-p1">skyline酒店成立于2013年，酒店如今已有五年发展经历。我们本着以“低调内涵，高调享受”的宗旨，全力为住客打造一个特色、舒适、美观的高端酒店。</p>
						<p class="testimonials-p1">skyline酒店集团融酒店投资、管理、策划及餐饮为一体，现旗下共聚集7家酒店，拥有客房近2000间、餐位近3000个，为现代高端酒店中最具规模酒店集团之一。</p>
					</div>
					<div class="item">
						<div class="img-testimonials"><img src="images/Home-1/about-testimonials-img2.png" alt="#"></div>						
						<h5 class="sky-h5">Julia Rose</h5>
						<p class="testimonials-p1">来自 skyline - 设计总监</p>
						<p class="testimonials-p1">酒店的室内设计愈来愈被人重视，与其他建筑不同，为了创造一个有特色、舒适、美观的酒店内部环境，室内设计共分成六个阶段：</p>
						<p class="testimonials-p1">1、概念设计阶段 2、方案设计阶段 3、样板房设计阶段 4、初步设计阶段 5、施工图设计阶段 6、配合装修阶段</p>
					</div>
					<div class="item">
						<div class="img-testimonials"><img src="images/Home-1/about-testimonials-img.png" alt="#"></div>		
						<h5 class="sky-h5">Alice</h5>
						<p class="testimonials-p1">来自 skyline - 客户经理</p>
						<p class="testimonials-p1">欢迎您下榻skyline酒店，我们衷心的感谢您的光临，我们会以最真挚的服务让您感到宾至如归，给您的旅程留下美好的印象。
						<p class="testimonials-p1">在下榻期间，如果您对我们的服务及设施有任何的意见或建议，请拨打总机电话“0”随时和我们联系。</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END / TESTIMONOALS -->
<!--OUR-EVENTS-->

<!-- END / OUR GALLERY -->
<!--FOOTER-->
<footer class="footer-sky">
	
	<!-- /footer-top -->
	<div class="footer-mid">
		<div class="container">
			<div class="row padding-footer-mid">
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<div class="footer-logo text-center list-content">
						<a href="index.html" title="Skyline"><img src="images/Home-1/sky-logo-footer.png" alt="Image"></a>
						<p style="color: white;">Copyright © 2013-2018 skyline . All Rights Reserved</p>
					</div>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2 col-lg-offset-1 col-md-offset-1  ">
					<div class="list-content">
						<ul>
							<li><a href="#" title="">查看地图</a></li>
							<li><a href="#" title="">假期</a></li>
							<li><a href="#" title="">私人保镖</a></li>
							<li><a href="#" title="">帮助</a></li>
							<li><a href="#" title="">附属企业</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2 col-lg-offset-1 col-md-offset-1 ">
					<div class="list-content ">
						<ul>
							<li><a href="#" title="">我们的位置</a></li>
							<li><a href="#" title="">企业文化</a></li>
							<li><a href="#" title="">事业</a></li>
							<li><a href="#" title="">关于我们</a></li>
							<li><a href="#" title="">联系我们</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2 col-lg-offset-1 col-md-offset-1">
					<div class="list-content ">
						<ul>
							<li><a href="#" title="">事件</a></li>
							<li><a href="#" title="">新闻</a></li>
							<li><a href="#" title="">相片和录像</a></li>
							<li><a href="#" title="">餐厅</a></li>
							<li><a href="#" title="">贺卡</a></li>
						</ul>
					</div>
				</div>
			</div>
			
	</div>
</footer>
<!-- END / FOOTER-->
<!--SCOLL TOP-->
<a href="#" title="sroll" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
<!--END / SROLL TOP-->
<!-- LOAD JQUERY -->
<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/vit-gallery.js"></script>
<script type="text/javascript" src="js/jquery.countTo.js"></script>
<script type="text/javascript" src="js/jquery.appear.min.js"></script>
<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="js/bootstrap-select.js"></script>
<script type="text/javascript" src="js/jquery.littlelightbox.js"></script>
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
<!---<script src="http://ditu.google.cn/maps/api/js?key=AIzaSyBDyCxHyc8z9gMA5IlipXpt0c33Ajzqix4"></script>--->
<!-- Custom jQuery -->
<script type="text/javascript" src="js/sky.js"></script>

<script type="text/javascript">


        $.getScript('http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js', function(_result) {
            if (remote_ip_info.ret == '1') {
            $("#weizhi").html("当前位置: "+remote_ip_info.city);
            } else {
                alert('没有找到匹配的IP地址信息！');
            }
        });


function jsonp(url) {
    var script = document.createElement('script');
    script.src = url;
    document.body.insertBefore(script, document.body.firstChild);
    document.body.removeChild(script);
}

var num = 0;
	$("#denglu").click(function(){
		if($("#test").html()=="登录 "){

			window.location.href="denglu.html";

		}
		else{
			return;	
		}
	});
	$("#zhuce").click(function(){
		if($("#test_zhuce").html()=="注册"){

			window.location.href="zhuce.html";

		}
		else{	
			alert('注销成功');		
			window.location.href="zhuxiao.php";
		
		}
	});
	$("#user").click(function(){
		if ($("#test").html()=="登录 ") {
			alert("请先登录");

		}
		else{
			window.location.href = "user.php";
		}
	});
	$(".rooms-content").click(function(){
		var index = $(".rooms-content").index(this);
		number = index-11;
		if ($("#test").html()=="登录 ") {
			alert("请先登录");

		}
		else{
			if ($(this).find("span").html()=="0间") {

				alert("房间已满");
			}
			else{
				var date= $("#form-control1").val();
				

			
				var reg2 = /\d{3}/;
				var str = $("#form-control1").val();
				var str2 = $("#form-control2").val();
				var str3 = $(this).find("p").html();
				var num1 = str.substring(8,10);
				var num2 = str2.substring(8,10);
				var num3 = str3.match(reg2);
				var kid_num = $("#kid_num").html();
				var man_num = $("#man_num").html();
				num = num2-num1;
				console.log(num1);
				if (num == 0) {
					alert('请选择住房时间');
					return;
				};
				window.location.href = "booking.php?num="+number+"&num_day="+num+"&kid_num="+kid_num+"&man_num="+man_num+"&money="+num3+"&date="+date;
			}
		}
		
	});
	

		
</script>
</body>

</html>