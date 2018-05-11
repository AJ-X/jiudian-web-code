<?php 

$conn = new mysqli("localhost","root","","jiudian");
if($conn->connect_error){
	die(("连接失败".$conn->connect_error));
}
mysqli_query($conn,"SET NAMES UTF8");
function select($where,$which){
	global $conn;
	$sql = "select {$where} from {$which}";
	$res = mysqli_query($conn,$sql);
	return $res;
}
function update($where,$str){
	global $conn;
	$sql = "update {$where} set {$str} = {$str}-1";
	$res = $conn->query($sql);
	return $res;
}
function insert($table,$array){
	global $conn;
	$keys=join(",",array_keys($array));
	$vals="'".join("','",array_values($array))."'";
	$sql="insert into {$table}($keys) values({$vals})";
	$res = mysqli_query($conn,$sql);

}
$wzf = select('*','weizhifu');
$ywc = select('*','yiwancheng');
$yyd = select('*','yuding');
$jd = select('*','fangjian');
$yh = select('*','yonghu');


?>
<html>	
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="adminassets/css/mainstyle.css" />
		<link rel="stylesheet" href="adminassets/css/pintuer.css" />	
		<script type="text/javascript">
			function byebye()
			{
				alert("再见，亲爱的管理员！")
		 	}
		</script>
		<style type="text/css">
		.done{
			position: absolute;
			z-index: 1002;
			top: 500px;
			left: 900px;

		}

		.list{
			text-align: center;
			z-index: 101;
			position: absolute;
			left: 280px;
			top: 120px;
			width: 1000px;
		}
		.list td{
			border-radius: 3px;
			border: 1px solid black;
			height: 40px;
			line-height: 40px;
		}
		.list tr{
			margin-top: 5px;
		}
		.tag{

		font-size: 13px;
		margin-left: 240px;
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
		.liuyan{
			width: 750px;
			position: absolute;
			z-index: 1;
			margin-top: 500px;
			padding-left: 280px;
		}
		#fenshu{
			z-index: 1003;
			position: absolute;
			top: 40px;
			width: 120px;
			margin-left: 0px;
		}
		#wancheng {

			margin-top: 80px;
    		width: 130px;
    		height: 38px;
    		font-size: 18px;
    		font-family: 微软雅黑;
    		letter-spacing: 8px;
    		padding-left: 12px;
    		border-radius: 5px;
    		background: -webkit-linear-gradient(top, #66B5E6, #2e88c0);
    		background: -moz-linear-gradient(top,#66B5E6, #2e88c0);
    		background: linear-gradient(top, #66B5E6, #2e88c0);
    		background: -ms-linear-gradient(top, #66B5E6, #2e88c0);
    		border: 1px solid #2576A8;
    		box-shadow: 0 1px 2px #B8DCF1 inset, 0 -1px 0 #316F96 inset;
    		color: #fff;
    		text-shadow: 1px 1px 0.5px #22629B;
		}		
	.shangchuan{
			position: absolute;
			top: -5%;
			right: 10%;
		}
			.xinxi_top{
			margin-top: 30px;
			list-style: none;
		}
		.xinxi_top li{
			box-shadow:10px 10px 5px #444;
			-moz-box-shadow:10px 10px 5px #444;
			-webkit-box-shadow:10px 10px 5px #444;
			border-radius: 5px;
			float: left;	
			margin-left: 50px;
			font-size: 18px;
			text-align: center;
			width: 210px;
			height:40px;
			line-height: 40px;
			border: 1px solid black;
		}
		.xinxi{
			list-style: none;
		}
		.xinxi li{
			box-shadow:10px 10px 5px #444;
			-moz-box-shadow:10px 10px 5px #444;
			-webkit-box-shadow:10px 10px 5px #444;
			border-radius: 5px;
			float: left;
			margin-top: 10px;	
			margin-left: 50px;
			font-size: 18px;
			text-align: center;
			width: 300px;
			height:40px;
			line-height: 40px;
			border: 1px solid black;
		}
		</style>
	</head>
	
	<body style="background-color: #F2F9FD;">
		
		<div class="header">
			
			<div class="logo margin-big-left fadein-top">
				<h1>
					后台管理中心
					<img src="images/Home-1/about-testimonials-img3.png" height="50px" class="radius-circle rotate-hover"/>
				</h1>
			</div>

			<div class="head-1 margin-big-top" style="float: left; margin-left: 17px;" >
				&nbsp;&nbsp;&nbsp;
				<a class="button button-little bg-red" href="index.php" onclick="byebye()">
					<span class="icon icon-power-off"></span>退出到首页</a>
			</div>
			
		</div>
		
		<!--左侧-->
		<div class="leftnav">
			<div class="leftnav-title">
				<strong><span class="icon-list"></span>菜单列表</strong>
			</div>
			
			<h2><span class="icon-user"><a id = "zh" href="#">
				</a></span></h2>
			<!--无序列表-->
			<ul> 

				<li>
					<a id = 'wzf' href="#" ><span class="icon-caret-right"></span>未支付订单查询</a>
					<a id = 'yyd' href="#" ><span class="icon-caret-right"></span>已预订订单查询</a>
					<a id = 'ywc' href="#" ><span class="icon-caret-right"></span>已完成订单查询</a>
					<a id = 'jd' href="#" ><span class="icon-caret-right"></span>酒店信息查询</a>
					<a id = 'yh' href="#" ><span class="icon-caret-right"></span>用户信息管理</a>
				</li>

				
			</ul>
		</div>
		
		<div class="wzf">
			
			<div>
				
				<table class = "list">
					<tr>
						<th>用户</th>
						<th>酒店</th>
						<th>天数</th>
						<th>成人</th>
						<th>小孩</th>
						<th>金额</th>
						<th>操作</th>
					</tr>
					
 					<?php
 						while ($rs = mysqli_fetch_assoc($wzf)) {

 							?>

 							<tr>
							<td><?php echo $rs['yonghu'] ?></td>	
 							<td><?php echo $rs['hotel'] ?></td>
 							<td><?php echo $rs['tianshu'] ?></td>
 							<td><?php echo $rs['chengren'] ?></td>
 							<td><?php echo $rs['xiaohai'] ?></td>
 							<td><?php echo $rs['zhifu'] ?></td>
 							<td><a href="<?php echo "bianji.php?id=".$rs['id']."&type=1" ?> ">编辑</a> 
 								<a href="<?php echo "delate.php?id=".$rs['id']."&type=1" ?> ">删除</a> 
 								<a href="<?php echo "add.php?id=".$rs['id']."&type=1" ?> ">添加</a> </td>
 							</tr>
 						<?php }
 					?>
 					
				</table>
			</div>

				
		</div>
		<div style = 'display:none' class="yyd">
			
			<div>
				
				<table class = "list">
					<tr>
						<th>用户</th>
						<th>酒店</th>
						<th>天数</th>
						<th>成人</th>
						<th>小孩</th>
						<th>金额</th>
						<th>操作</th>
					</tr>
					
 					<?php
 						while ($rs = mysqli_fetch_assoc($yyd)) {
 							?>
 							<tr>
							<td><?php echo $rs['yonghu'] ?></td>	
 							<td><?php echo $rs['hotel'] ?></td>
 							<td><?php echo $rs['tianshu'] ?></td>
 							<td><?php echo $rs['chengren'] ?></td>
 							<td><?php echo $rs['xiaohai'] ?></td>
 							<td><?php echo $rs['zhifu'] ?></td>
 							<td><a href="<?php echo "bianji.php?id=".$rs['id']."&type=2" ?> ">编辑</a> 
 								<a href="<?php echo "delate.php?id=".$rs['id']."&type=2" ?> ">删除</a> 
 								<a href="<?php echo "add.php?id=".$rs['id']."&type=2" ?> ">添加</a> </td>
 							</tr>
 						<?php }
 					?>
 					
				</table>
			</div>

				
		</div>	

			<div style = 'display:none' class="ywc">
				
				<table class = "list">
					<tr>
						<th>用户</th>
						<th>酒店</th>
						<th>天数</th>
						<th>成人</th>
						<th>小孩</th>
						<th>金额</th>
						<th>操作</th>
					</tr>
					
 					<?php
 						while ($rs = mysqli_fetch_assoc($ywc)) {

 							?>
 							<tr>
							<td><?php echo $rs['yonghu'] ?></td>	
 							<td><?php echo $rs['hotel'] ?></td>
 							<td><?php echo $rs['tianshu'] ?></td>
 							<td><?php echo $rs['chengren'] ?></td>
 							<td><?php echo $rs['xiaohai'] ?></td>
 							<td><?php echo $rs['zhifu'] ?></td>
 							<td><a href="<?php echo "bianji.php?id=".$rs['id']."&type=3" ?> ">编辑</a> 
 								<a href="<?php echo "delate.php?id=".$rs['id']."&type=3" ?> ">删除</a> 
 								<a href="<?php echo "add.php?id=".$rs['id']."&type=3" ?> ">添加</a> </td>
 							</tr>
 						<?php }
 					?>
 					
				</table>
			</div>

				
		</div>	
			
		<div style = 'display:none' class="jd">
				
				<table class = "list">
					<tr>
						<th>皇冠酒店</th>
						<th>欢乐酒店</th>
						<th>休闲酒店</th>
						<th>临海酒店</th>
						<th>舟山酒店</th>
						<th>海景酒店</th>
					
					</tr>
					
 					<?php
 						while ($rs = mysqli_fetch_assoc($jd)) {

 							?>
 							<tr>
							<td><?php echo $rs['huangguan'] ?></td>	
 							<td><?php echo $rs['huanle'] ?></td>
 							<td><?php echo $rs['xiuxian'] ?></td>
 							<td><?php echo $rs['linhai'] ?></td>
 							<td><?php echo $rs['zhoushan'] ?></td>
 							<td><?php echo $rs['haijing'] ?></td>
 							<td><a href="<?php echo "bianji_hotel.php" ?> ">编辑</a> 
 								 </td>
 							</tr>
 						<?php }
 					?>
 					
				</table>
			</div>

				
		</div>	

		<div style = 'display:none' class="yh">
				
				<table class = "list">
					<tr>
						<th>用户账号</th>
						<th>用户密码</th>
						<th>用户电话</th>
					</tr>
					
 					<?php
 						while ($rs = mysqli_fetch_assoc($yh)) {

 							?>
 							<tr>
							<td><?php echo $rs['zhanghao'] ?></td>	
 							<td><?php echo $rs['mima'] ?></td>
 							<td><?php echo $rs['phone'] ?></td>
 							
 							<td><a href="<?php echo "bianji_user.php?id=".$rs['id']."&type=3" ?> ">编辑</a> 
 								<a href="<?php echo "delate.php?id=".$rs['id']."&type=3" ?> ">删除</a> 
 								<a href="<?php echo "add.php?id=".$rs['id']."&type=3" ?> ">添加</a> </td>
 							</tr>
 						<?php }
 					?>
 					
				</table>
			</div>

				
		</div>	
		

	</body>
	<script src="js/jquery-1.12.4.min.js"></script>
	<script type="text/javascript">
		

		function isNumber(val){

    var regPos = /^\d+(\.\d+)?$/; //非负浮点数
    var regNeg = /^(-(([0-9]+\.[0-9]*[1-9][0-9]*)|([0-9]*[1-9][0-9]*\.[0-9]+)|([0-9]*[1-9][0-9]*)))$/; //负浮点数
    if(regPos.test(val) || regNeg.test(val)){
        return true;
    }else{
        return false;
    }

};
	$("#yyd").click(function(){
		$('.ywc').css('display', 'none');
		$('.wzf').css('display', 'none');
		$(".yyd").css('display', 'block');
		$(".jd").css('display', 'none');
		$(".yh").css('display', 'none');
	});
	$("#ywc").click(function(){
		$('.ywc').css('display', 'block');
		$('.wzf').css('display', 'none');
		$(".yyd").css('display', 'none');
		$(".jd").css('display', 'none');
		$(".yh").css('display', 'none');
	});
	$("#wzf").click(function(){
		$('.ywc').css('display', 'none');
		$('.wzf').css('display', 'block');
		$(".yyd").css('display', 'none');
		$(".jd").css('display', 'none');
		$(".yh").css('display', 'none');
	});
	$("#jd").click(function(){
		$(".jd").css('display', 'block');
		$('.ywc').css('display', 'none');
		$('.wzf').css('display', 'none');
		$(".yyd").css('display', 'none');
		$(".yh").css('display', 'none');
	});
	$("#yh").click(function(){
		$(".jd").css('display', 'none');
		$('.ywc').css('display', 'none');
		$('.wzf').css('display', 'none');
		$(".yyd").css('display', 'none');
		$(".yh").css('display', 'block');
	});
  	</script>
</html>
