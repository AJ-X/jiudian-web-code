<?php 

$conn = new mysqli("localhost","root","","jiudian");
if($conn->connect_error){
	die(("连接失败".$conn->connect_error));
}
mysqli_query($conn,"SET NAMES UTF8");

function select($where,$which,$what){
	global $conn;
	$sql = "select {$where} from {$which} where id={$what}";
	$res = mysqli_query($conn,$sql);
	$rs = mysqli_fetch_assoc($res);
	return $rs;
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

$type = $_GET['type'];
switch ($type) {
	case 1:
		$table = 1;
		$where = 'ctr_add.php';

		break; 
	case 2:
		$table = 2;
		$where = 'ctr_add.php';

		break; 
	case 3:
		$table = 3;
		$where = 'ctr_add.php';

		break; 
	default:
		
		break;
}



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
		.my_form{
			
		}
		.my_form input{
			display: block;
			margin-top: 30px;
		}
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
		.edit{
			text-align: center;
		}
		.edit table{
			margin: auto;
			margin-top: 30px;
		}
		.edit input{
			margin-top: 20px;
		}
		.refer{
			position: absolute;
			left: 700px;
			top: 400px;
		}
		</style>
	</head>
	
	<body style="background-color: #F2F9FD;">
		
		<div class="header">
			
			<div class="logo margin-big-left fadein-top">
				<h1>
					后台管理中心
					<img src="adminassets/img/y.jpg" height="50px" class="radius-circle rotate-hover"/>
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
			
			<h2><span class="icon-user"><a id = "zh" href="#"><?php
					echo $_COOKIE['user'];
				?></a></span></h2>
			<!--无序列表-->
			<ul> 

				<li>
					<a href="main.php" ><span class="icon-caret-right"></span>未支付订单查询</a>
					<a href="main.php" ><span class="icon-caret-right"></span>已预订订单查询</a>
					<a href="main.php" ><span class="icon-caret-right"></span>已完成订单查询</a>
				</li>

				
			</ul>
		</div>
		
<div class = "edit">
	<h3>编辑</h3>
	<table>
		<form method = "post" <?php echo "action=".$where."?table=".$table ?>>
		<tr>
			<td>用户：</td>
			<td><input type="text" name="yonghu"> </td>
		</tr>
		<tr>
			<td>酒店</td>
			<td><input type="text" name="hotel"></td>
		</tr>
		<tr>
			<td>天数</td>
			<td><input type="text" name="days"></td>
		</tr>
		<tr>
			<td>成年人</td>
			<td><input type="text" name="man"></td>
		</tr>
		<tr>
			<td>儿童</td>
			<td><input type="text" name="kid"> </td>
		</tr>
		<tr>
			<td>应支付</td>
			<td><input type="text" name="pay"></td>
		</tr>
		<button class ="refer" type = "submit">提交</button>
		</form>
	</table>
	
</div>

			
		
		
		

	</body>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript">


		function isNumber(val){

    var regPos = /^\d+(\.\d+)?$/; //非负浮点数
    var regNeg = /^(-(([0-9]+\.[0-9]*[1-9][0-9]*)|([0-9]*[1-9][0-9]*\.[0-9]+)|([0-9]*[1-9][0-9]*)))$/; //负浮点数
    if(regPos.test(val) || regNeg.test(val)){
        return true;
    }else{
        return false;
    }

}
  	</script>
</html>
