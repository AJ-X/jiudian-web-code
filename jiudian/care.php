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
		<title>sky-注意事项</title>
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

<!-- END/ ABOUT-US-->
<!-- BEST -->

<!-- END / BEST -->
<!-- TESTIMONOALS -->

<!-- END / TESTIMONOALS -->
<!--OUR-EVENTS-->

<!-- END / OUR NEWS -->
<!-- OUR-GALLERY-->
<section class="gallery-our">
	<div class="container-fluid">
		<div class="gallery">
			<h2 class="title-gallery">skyline酒店注意事项</h2>
			<div class="outline"></div>		
			<br/>
			<div class="row" style="text-align: left;">							
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
					<div style="color: white;">
						<h4>(一) 迎宾服务</h4>
						<br>
						<p>1、宾客光临时,要主动上前问候,不要以貌取人,同时为宾客拉门。拉门的时候注意 力应集中, 以防发生意外。如果客人的行李比较多,可以帮助客人提拿行李,待进入大厅以 后再用手势示意行李员接替;</p>
						<p>2、 宾客乘车光临, 应主动为其打开车门。 但要注意, 对于信仰佛教和伊斯兰教的客人, 不要为其护顶。判断这两种客人可以从客人的着装、言行举止、外貌和自己的工作经验; </p>
						<p>3、遇到老、弱、病、残、幼等客人应先问候,必须征得客人同意以后才能予以必要的扶助,如果客人示意不需要,就不必勉强;</p>
						<p>4、当团队客人抵店时,应主动、自然、连续地向宾客点头致意,或鞠躬行礼,不能顾前不顾后,以免给客人造成厚此薄彼的印象;</p>
						<p>5、迎宾员还要注意衣冠不整者或携带宠物者,劝阻其入店,对形迹可疑的人也应引起高度注意。</p>
						<br>
						<h4>(二) 行李服务</h4>
						<br>
						<p>1、行李员陪同客人到总台办理入住手续,应站立在客人身后,随时准备提供服务,但不可在客人身边指指点点;</p>
						<p>2、在引领客人途中,应走在客人斜前方边侧 2~3步处,将中间位置让给客人,若遇有客人迎面走来,应停下来侧身礼让客人先行,决不可与客人争先抢道;</p>
						<p>3、进入电梯,应礼让客人先上先下,在电梯内,应尽量靠边侧站立,并将行李尽量靠边放置,以免碰撞客人或妨碍客人通行;</p>
						<p>4、提取行李,一律轻拿轻放,不可倒置,若客人不需要行李员提拿的行李,则不要勉强;</p>
						<p>5、进入客房时,应先开灯,并扫视一下房内,确认是 OK 房后,再请客人入内。将行李放置好,请客人核对行李件数;</p>	
						<p>6、交代一些必要的提示以后,不可借故逗留与客人聊天,或暗示或硬性向客人索取小费。退出房间时,应轻轻把门带上,避免用力过猛而发出大的声响;</p>
						<p>7、行李服务,无论是散客还是团体客人,都应注意:(1)行李件数要核实清楚;(2)行李标签不能系错;(3)无论是谁的行李,一切寄存领取手续都要按照规章办理;(4)保护客人行李的安全,不能让行李受损;(5)绝不允许将客人行李搞错或搞混;(6)绝不允许将客人的行李弄丢;</p>
						<br>
						<h4>(三) 预订服务</h4>
						<br>
						<p>1、向客人推销客房,应由高档往低档逐步报价,不可勉强客人。一次报价不宜太多类别,以免客人无所适从;</p>
						<p>2、要注意定时汇总、整理,避免重复订房或漏订、错订;</p>
						<p>3、超额预订要控制一定的量度,不可超额过多以免造成饭店接待困难,引起客人的抱怨,使饭店蒙受经济损失,损害饭店形象;</p>
						<p>4、严格按照饭店的规定提供折扣优惠,不可随意答应客人的优惠要求;</p>
						<p>5、严格按照规章办理预订手续,对于不受欢迎的客人,应婉言拒绝。</p>
						<br>
						<h4>(四) 接待服务</h4>	
						<br>				
						<p>1、热忱接待每一位来店宾客。客人一到,要马上停下手中的事情,面带微笑,致以问候。如果遇到客人较多,一时忙不过来,应注意先来先服务的原则,对后面的客人要致歉, 请其稍候,绝不可顾此失彼;</p>
						<p>2、客人在填写住宿登记单时,如果只愿签名而不愿填写其他内容,应耐心向客人解释 这是饭店工作的规定,也是公安机关对服务性行业的要求;</p>
						<p>3、查验客人证件后,应迅速礼貌地将证件还给客人,并感谢其配合,不能将证件一声不吭地扔给客人或者扔在柜台上;</p>
						<p>4、绝对不可重复排房,这样会引致客人极大的不满;</p>
						<p>5、手续办理完毕,把钥匙交给行李员,并向客人简单介绍、致以祝愿;</p>
						<p>6、对于不符合饭店入住要求的客人,应当婉言拒绝。</p>
						<br>
						<h4>(五) 问讯代办服务</h4>
						<br>
						<p>1、问讯服务要热情主动,微笑服务,有问必答,百问不厌,口齿清楚,用词得当,简单明了,灵活应对,节时高效;</p>
						<p>2、客人委托代办的事项应认真登记在册,有特殊要求要作好注明,真心诚意、高效优质地帮助客人解决问题;</p>
						<p>3、客人的邮件要及时送到客人手里,切不可送错或漏送,造成客人的不满与损失,影响饭店的形象;</p>
						<p>4、保管好客房的钥匙,不能让无关人员拿走钥匙。</p>
						<br>
						<h4>(六) 收银结账服务</h4>
						<br>
						<p>1、客人结账前应将客人的账单一一汇总,待客人结账时,请客人当面核对清楚;</p>
						<p>2、对于不清楚的款项,一定要弄清楚后,再根据客人的原始签单记录入账;</p>
						<p>3、不得算错账,收漏账,开错票,要注意识别假钞;</p>
						<p>4、与客房服务员配合,防止客人逃账;</p>
						<p>5、结账手续完毕,应向客人致谢,并表示欢迎客人下次光临。</p>
						<br>
						<h4>(七) 总机服务</h4>
						<br>
						<p>1、有意识地将礼貌规范的语言贯穿工作中,形成良好的语言习惯;</p>
						<p>2、工作中言语要自然、得当,简练扼要,反映要灵敏,保证高效的服务;</p>
						<p>3、态度要热情、诚恳,服务要耐心。回答客人的问讯要认真耐心,代客留言要做好记录,并及时告知客人;</p>
						<p>4、叫醒服务要准时,还要负责到底,以防止耽误客人时间,以及防止发生意外。</p>
						<br>
						<h4>(八) 商务中心服务</h4>
						<br>
						<p>1、注重个人仪容、仪表,举止文明礼貌;</p>
						<p>2、工作热情、主动、细致、周到;</p>
						<p>3、办事认真、负责,讲究效率;</p>
						<p>4、遵守商务保密制度,不得透露客人的商务秘密;</p>
						<p>5、自我要求严格,尽量杜绝错误的发生。</p>
					</div>
				</div>	
			</div>
			<!-- end-tab-content -->			
		</div>
		<!-- /gallery -->
	</div>
	<!-- /container -->
</section>
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