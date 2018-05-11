<?php
$conn=new mysqli("localhost","root","","jiudian");
if($conn->connect_error){
	die("连接失败".$conn->$connect_error);
}
mysqli_query($conn,"SET NAMES UTF8");
$zh = $_COOKIE['user'];
$num = $_GET['num'];
$num_day = $_GET['num_day'];
$kid_num = $_GET['kid_num'];
$man_num = $_GET['man_num'];
$money = $_GET['money'];
$date = $_GET['date'];



function select($where,$which){
	global $conn;
	$sql = "select {$where} from {$which}";
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
switch ($num) {
	case '1':
		$array = array(
			'yonghu' => $zh,
			'hotel' => '皇冠商务房',
			'tianshu' => $num_day,
			'chengren' => $man_num,
			'xiaohai' => $kid_num,
			'zhifu' => $money,
			'date' => $date,
		);
		insert('weizhifu',$array);
		update('hotel','danren');
		
		echo "预定成功，1秒后跳转";
		header('Refresh:1,Url=user.php');
		break;
	case '2':
	$array = array(
			'yonghu' => $zh,
			'hotel' => '欢乐假日房',
			'tianshu' => $num_day,
			'chengren' => $man_num,
			'xiaohai' => $kid_num,
			'zhifu' => $money,
			'date' => $date,
		);
		insert('weizhifu',$array);
		update('hotel','shuangren');
		echo "预定成功，1秒后跳转";
		header('Refresh:1,Url=user.php');
		break;
	case '3':
	$array = array(
			'yonghu' => $zh,
			'hotel' => '休闲娱乐房',
			'tianshu' => $num_day,
			'chengren' => $man_num,
			'xiaohai' => $kid_num,
			'zhifu' => $money,
			'date' => $date,
		);
		insert('weizhifu',$array);
		update('hotel','jiating');
		echo "预定成功，1秒后跳转";
		header('Refresh:1,Url=user.php');
		break;
	case '4':
	$array = array(
			'yonghu' => $zh,
			'hotel' => '临海经典房',
			'tianshu' => $num_day,
			'chengren' => $man_num,
			'xiaohai' => $kid_num,
			'zhifu' => $money,
			'date' => $date,
		);
		insert('weizhifu',$array);
		update('hotel','haohua');
		echo "预定成功，1秒后跳转";
		header('Refresh:1,Url=user.php');
		break;
	case '5':
	$array = array(
			'yonghu' => $zh,
			'hotel' => '舟山经典房',
			'tianshu' => $num_day,
			'chengren' => $man_num,
			'xiaohai' => $kid_num,
			'zhifu' => $money,
			'date' => $date,
		);
		insert('weizhifu',$array);
		update('hotel','biaozhun');
		echo "预定成功，1秒后跳转";
		header('Refresh:1,Url=user.php');
		break;
	case '6':
	$array = array(
			'yonghu' => $zh,
			'hotel' => '海景大床房',
			'tianshu' => $num_day,
			'chengren' => $man_num,
			'xiaohai' => $kid_num,
			'zhifu' => $money,
			'date' => $date,
		);
		insert('weizhifu',$array);
		update('hotel','haijing');
		echo "预定成功，1秒后跳转";
		header('Refresh:1,Url=user.php');
		break;	
	default:
		# code...
		break;
}



?>