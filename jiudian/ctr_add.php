<?php 

$conn = new mysqli("localhost","root","","jiudian");
if($conn->connect_error){
	die(("连接失败".$conn->connect_error));
}
mysqli_query($conn,"SET NAMES UTF8");

function insert($table,$array){
	global $conn;
	$keys=join(",",array_keys($array));
	$vals="'".join("','",array_values($array))."'";
	$sql="insert into {$table}($keys) values({$vals})";
	$res = mysqli_query($conn,$sql);
	return $res;

}
$table = $_GET['table'];
$yonghu = $_POST['yonghu'];
$hotel = $_POST['hotel'];
$num_day = $_POST['days'];
$kid_num = $_POST['kid'];
$man_num = $_POST['man'];
$money = $_POST['pay'];
$array = array(
			'yonghu' => $yonghu,
			'hotel' => $hotel,
			'tianshu' => $num_day,
			'chengren' => $man_num,
			'xiaohai' => $kid_num,
			'zhifu' => $money,
		);
switch ($table) {
	case 1:
		$which = 'weizhifu';
		
		break;
	case 2:
		$which = 'yuding';
		
		break;
	case 3:
		$which = 'yiwancheng';
		
		break;
	
	default:
		# code...
		break;
}
$ins = insert($which,$array);
if ($ins) {
			echo '修改成功，一秒后跳转';
			header('Refresh:1,Url=main.php'); 
		}
?>