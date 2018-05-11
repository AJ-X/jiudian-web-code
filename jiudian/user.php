<?php
$conn=new mysqli("localhost","root","","jiudian");
if($conn->connect_error){
	die("连接失败".$conn->$connect_error);
}
mysqli_query($conn,"SET NAMES UTF8");
$zh = $_COOKIE['user'];
$sql = "select * from yuding where yonghu = $zh";
$res = $conn->query($sql);
$sql1 = "select * from weizhifu where yonghu = $zh";
$res1 = $conn->query($sql1);
$sql2 = "select * from yiwancheng where yonghu = $zh";
$res2 = $conn->query($sql2);
?>

<!DOCTYPE html>
<html>
<head>
<title>用户中心</title>
<!--Custom Theme files-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Personal Mail Widget template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<link href="css2/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
<!-- js -->
<script src="js2/jquery-1.11.1.min.js"></script> 
<!-- //js -->
<style type="text/css">
	.zhifu{
		margin-top: -20px;
	}
</style>
</head>
<body>
	<!-- main -->
	<div class="main">
		<h1>用户中心</h1>
		<div class="account">
			<div class="account-info">
				<div class="account-top">
					<div class="account-top-left">
						<img src="images2/img1.jpg" alt="">
					</div>
					<div class="account-top-right">
						<h2>
							<?php
								echo $_COOKIE['user'];
							?>
						</h2>
						
					</div>
					<div class="clear"> </div>
				</div>
				<div class="account-bottom">
					<div class="tabs">
						<nav> 
							<a><span> </span>已预订<i>4</i></a>
							<a><span class="icon1"></span>未支付<i>3</i></a> 
							<a><span class="icon2"></span>已完成<i>3</i></a>
							<a href = "huiyuan.html"><span class="icon2"></span>会员卡办理</a>
							<a href = "liuyan.php"><span class="icon2"></span>留言板</a>
							<a href= 'index.php'><span class="icon4"></span>返回首页</a>
						</nav>
						<div class="content">
							<div class="text">
								<div class="text-left">
									<span class="star active"> </span>
								</div>
								<div class="text-right">
									<?php 
									while ($rs = mysqli_fetch_assoc($res)) {
									
									
										

										foreach ($rs as $key => $value) {
											if ($key == "hotel") {
												?>

													<h4><a href="#"><?php echo "酒店：".$value;?></a>

													</h4>
											<?php }

											 if ($key == "date") {
												?>
													<div class="clear"> </div>
													<label style = "tianshu"><?php echo "入住日期：".$value;?>
													</label>

												<?php }
											 if ($key == "zhifu") {
												?>
													<div class="clear"> </div>
													<label class = "zhifu"><?php echo "支付：".$value."元";?></label>
													
												<?php }
											 if ($key == "chengren") {
												?>
												<p><?php echo "成人：".$value;?></p>
												<?php }

												 if ($key == "xiaohai") {
												?>
													<p><?php echo "小孩：".$value;?></p>
												<?php }
													
												
											
									} 
								}	
								?>
									


									<!-- <h4><a href="#">My First Name</a></h4> <label>2:30 PM </label>
									<div class="clear"> </div>
									<p>Lorem Ipsum is dummy text Of industry. </p>
									<p class="from">From</p>
									<h6> Malorum Borney</h6> -->
								</div>
								<div class="clear"> </div>
							</div>
							
						</div>
						<div class="content">
							<div class="text">
								<div class="text-left">
									<span class="star active"> </span>
								</div>
								<div class="text-right">
							<?php 
							while ($rs1 = mysqli_fetch_assoc($res1)) {
									
									
										
										foreach ($rs1 as $key => $value) {
											if ($key == "hotel") {
												?>

													<h4><a href="#"><?php echo "酒店：".$value;?></a>
														
													</h4>
											<?php }
											if ($key == "tianshu") {
												?>
													<div class="clear"> </div>
													<label style = "tianshu"><?php echo "入住天数：".$value; $day = $value;?></label>

												<?php }

											 if ($key == "date") {
												?>
													<div class="clear"> </div>
													<label style = "tianshu"><?php echo "入住日期：".$value;?></label>

												<?php }
											 if ($key == "zhifu") {
												?>
													<div class="clear"> </div>
													<label class = "zhifu"><?php echo "支付：".$value*$day."元";?></label>
													
												<?php }
											 if ($key == "chengren") {
												?>
												<p><?php echo "成人：".$value;?></p>
												<?php }

												 if ($key == "xiaohai") {
												?>
													<p><?php echo "小孩：".$value;?></p>
												<?php }
													
									}			
											
									} 
									?>
										</div>
								<div class="clear"> </div>
							</div>
						</div>
						<div class="content">
							<div class="text">
								<div class="text-left"	>
									<span class="star active"> </span>
								</div>
								<div class="text-right">
							<?php 
									while ($rs2 = mysqli_fetch_assoc($res2)) {
									
									
										foreach ($rs2 as $key => $value) {
											if ($key == "hotel") {
												?>

													<h4><a href="#"><?php echo "酒店：".$value;?></a></h4>
											<?php }

											 if ($key == "date") {
												?>
													<div class="clear"> </div>
													<label style = "tianshu"><?php echo "入住日期：".$value;?></label>

												<?php }
											 if ($key == "zhifu") {
												?>
													<div class="clear"> </div>
													<label class = "zhifu"><?php echo "支付：".$value."元";?></label>
													
												<?php }
											 if ($key == "chengren") {
												?>
												<p><?php echo "成人：".$value;?></p>
												<?php }

												 if ($key == "xiaohai") {
												?>
													<p><?php echo "小孩：".$value;?></p>
												<?php }
													
										}		
											
									} ?>
										</div>
								<div class="clear"> </div>
							</div>

						</div>
						
					
			</div>
		</div>
	</div>	
		<script>
			$(function() {
			  $('.tabs nav a').on('click', function() {
				show_content($(this).index());
			  });
			  
			  show_content(1);

			  function show_content(index) {
				// Make the content visible
				$('.tabs .content.visible').removeClass('visible');
				$('.tabs .content:nth-of-type(' + (index + 1) + ')').addClass('visible');

				// Set the tab to selected
				$('.tabs nav a.selected').removeClass('selected');
				$('.tabs nav a:nth-of-type(' + (index + 1) + ')').addClass('selected');
			  }
			});
			</script>
		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-36251023-1']);
		  _gaq.push(['_setDomainName', 'jqueryscript.net']);
		  _gaq.push(['_trackPageview']);

		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
</body>



</html>