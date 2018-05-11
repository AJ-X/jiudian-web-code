<?php
$conn=new mysqli("localhost","root","","jiudian");
if($conn->connect_error){
	die("连接失败".$conn->$connect_error);
}
mysqli_query($conn,"SET NAMES UTF8");
$zh = $_COOKIE['user'];

function select($where,$which){
	global $conn;
	$sql = "select {$where} from {$which}";
	$res = mysqli_query($conn,$sql);

	return $res;
}

$res = select('*','pinglun');

$res1 = select('*','pic');

?>

<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>sky-留言板</title>
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
		
		.pic{
			margin-top: 80px;
			float: left;
			width: 100px;

			height: 100px;
		}
			.post_pic{
				width: 100px;
				height: 100px;
				
			}
			.pic1{
			margin-top: 80px;
			float: left;
			width: 100px;
			margin-left: 20px;
			height: 100px;
		}
			.post_pic1{
				width: 100px;
				height: 100px;
				
			}
		    .fileinput-button {
		    	width: 30%;
		        position: relative;
		        display: inline-block;
		        margin: 0px auto;
		    }
		
		    .fileinput-button input{
			display: none;
		        position: absolute;
		        right: 0px;
		        top: 0px;
		    }
			#user{
				position: absolute;
				top: 0px;
				right: 0;
			}
			#check{
				color: #b3b3b3;
		
			}
			#check :hover{
				color: #8E7037;
			}
		
			.main{
				width: 800px;
				margin:40px auto;
			}
		
			.tag{
				font-size: 13px;
				vertical-align: bottom;
				text-align: center;
				margin-bottom: 0;
			}
			.text{
				width: 750px;
				height: 180px;
				margin:0 auto;
		
				resize:none;
			}
			
		
			.creatediv{
				width: 675px;
				overflow: hidden;
				border: 1px solid gray;
				position: relative;
				margin-top: 10px;
				padding-left: 75px;
			}
			.createinput{
				width: 80px;
				height: 30px;
				position:absolute;
				right: 5px;
				bottom:5px;
			}
			.createimg{
				width: 50px;
				height: 50px;
				position: absolute;
				top: 15px;
				left: 15px;
			}

			.createdivs{
				width:600px;
				height:50px;
				position: absolute;
				top: 15px;
				left: 85px;
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
						<ul class="nav navbar-nav navbar-right">
							
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
					<img src="images/Home-1/sky-logo-header.png" style="width: 190px;height: 60px;margin-top: -30px; display: inline;"><h1  class="v2" style="display: inline;">酒店用户留言板</h1><br><br>
					<p><span class="line-t"></span>欢迎您对我们的服务做出评价<span class="line-b"></span></p>
				</div>
			</div>
			<div class="item">
				<img alt="Third slide" src="images/Home-2/Slider-v2.jpg" class="img-responsive">
				<div class="container">
					<div class="carousel-caption ">
					<img src="images/Home-1/sky-logo-header.png" style="width: 190px;height: 60px;margin-top: -30px; display: inline;"><h1  class="v2" style="display: inline;">酒店用户留言板</h1><br><br>
					<p><span class="line-t"></span>欢迎您对我们的服务做出评价<span class="line-b"></span></p>
					</div>
				</div>
			</div>
		</div>
		<div>
	</section>
       
        
        
<div class="main">
	<span>留言板</span>
	<span class="tag">（你最多可以输入30个字符）</span>
	<textarea id="text" cols="30" rows="10" maxlength="30" class="text"></textarea><br>
	<input  type="button" value="发 表" id="ipt">
	 <span id = "fileinput-button" class="btn btn-success fileinput-button">
            <span>点击上传，晒图</span>
            <input id = 'shangchuan' type="file">
        </span>
	<div id="txt" >
	
	<?php 
		while ($rs = mysqli_fetch_array($res)) {
			$i = 0;
			?>
			<div class = "creatediv">
				<div class ="clear">
					
				</div>
				<?php 
		while ($rs1 = mysqli_fetch_array($res1)) {
			$i++;
			if ($i > 1) {
				?>
			<div class = 'pic1'>
				<img class = 'post_pic1' src="pic/<?php echo $rs1['src']; ?>">
			</div>
			
			<?php
			}
			else{
				?>
			<div class = 'pic'>
				<img class = 'post_pic' src="pic/<?php echo $rs1['src']; ?>">
			</div>
			
			<?php
			}
			
		}
	?>
				<img class ="createimg" src = "images2/1.jpg">
				<span id = "user">用户：<?php echo $rs['user']; ?></span>
				<p class ="createdivs"><?php echo $rs['words']; ?></p>
				
			</div>	
			<?php
		}
	?>


</div>
</div>
<footer class="footer-sky">
	
	<!-- /footer-top -->
	<div class="footer-mid">
		<div class="container">
			<div class="row padding-footer-mid">
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<div class="footer-logo text-center list-content">
						<a href="index.html" title="Skyline"><img src="images/Home-1/sky-logo-footer.png" alt="Image"></a>
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



　document.getElementById('fileinput-button').onclick = function(){
	document.getElementById('shangchuan').click();
}


$("#shangchuan").on("change",function() {
	var fileM=document.querySelector("#shangchuan");
    //获取文件对象，files是文件选取控件的属性，存储的是文件选取控件选取的文件对象，类型是一个数组
    var fileObj = fileM.files[0];
    //创建formdata对象，formData用来存储表单的数据，表单数据时以键值对形式存储的。
    var upfile = new FormData();
    upfile.append('file', fileObj);
    $.ajax({
        url: "pic_shangchuan.php",
        type: "post",
        dataType: "json",
        data: upfile,
        async: false,
        cache: false,
        contentType: false,
        processData: false,
        success: function (json_data) {
            alert("恭喜你！上传成功");
        },
    });
});

$('#ipt').click(function(){
	var value = $('#text').val();

	$.ajax({
		url: 'in_pinglun.php',
		type: 'GET',
		dataType: 'text',
		data: { 'pinglun': value,'name':$("#test").html()},
		success:function(){
			
		}

	})
	
});

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
				var reg = /\d{2}/
				var reg2 = /\d{3}/
				var str = $("#form-control1").val();
				var str2 = $("#form-control2").val();
				var str3 = $(this).find("p").html();
				var num1 = str.match(reg);
				var num2 = str2.match(reg);
				var num3 = str3.match(reg2)
				var kid_num = $("#kid_num").html();
				var man_num = $("#man_num").html();
				num = num2-num1;
				if (num == 0) {
					alert('请选择住房时间');
					return;
				};
				window.location.href = "booking.php?num="+number+"&num_day="+num+"&kid_num="+kid_num+"&man_num="+man_num+"&money="+num3;
			}
		}
		
	});
	
	var ipt = document.getElementById("ipt");
	var txt = document.getElementById('txt');
	var textarea = document.getElementById("text");
	ipt.onclick = function(){
		var textValue = textarea.value.LTrim();		
		textarea.value="";
		if(textValue.length>0 ){
			var divs = document.createElement("div");
			var imgs = document.createElement("img");
			var ps = document.createElement("p");
			var inputs = document.createElement("input");
			divs.setAttribute("class","creatediv");
			imgs.setAttribute('class',"createimg");
			ps.setAttribute("class","createdivs");
			inputs.setAttribute("class","createinput");
			imgs.src="images2/1.jpg";
			inputs.type="button";
			inputs.value="删除";
			ps.innerHTML=textValue;
			divs.appendChild(imgs);
			divs.appendChild(ps);
			divs.appendChild(inputs);
			if(txt.children.length==0){
				txt.appendChild(divs);

			}else{
				txt.insertBefore(divs,get_firstChild(txt))
			}
			inputs.onclick = function(){
				this.parentNode.parentNode.removeChild(this.parentNode)
			}
		}
		
		

	}
	function get_previousSibling(n) {
	y=n.previousSibling;
	while (y.nodeType!=1) {
  		y=y.previousSibling;
  	}
	return y;
}
function get_nextSibling(n) {
	y=n.nextSibling;
	while (y.nodeType!=1) {
  		y=y.nextSibling;
  	}
	return y;
}
function get_lastChild(n) {
	y=n.lastChild;
	while (y.nodeType!=1) {
  		y=y.previousSibling;
  	}
	return y;
}
function get_firstChild(n) {
	y=n.firstChild;
	while (y.nodeType!=1) {
  		y=y.nextSibling;
  	}
	return y;
}

// Trim() , Ltrim() , RTrim()  
String.prototype.Trim = function(){   
return this.replace(/(^\s*)|(\s*$)/g, "");   
}   
String.prototype.LTrim = function(){   
return this.replace(/(^\s*)/g, "");   
}   
String.prototype.RTrim = function() {   
return this.replace(/(\s*$)/g, "");   
}  


		
</script>
</body>

</html>