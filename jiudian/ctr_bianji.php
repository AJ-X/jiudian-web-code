<?php
$conn=new mysqli("localhost","root","","jiudian");
if($conn->connect_error){
	die("连接失败".$conn->$connect_error);
}
mysqli_query($conn,"SET NAMES UTF8");
$type = $_REQUEST['type'];
$id = $_REQUEST['id'];
$yonghu = $_POST['yonghu'];
$room = $_POST['room'];
$num_day = $_POST['days'];
$kid_num = $_POST['kid'];
$man_num = $_POST['man'];
$money = $_POST['pay'];

function update($where,$array,$what = null){
	global $conn;
	$str = null;
	$i = 0;
	foreach($array as $key=>$val){
		if ($key != "hotel") {
			if($str==null){
				$sep="";
			}else{
				$sep=",";
			}
			$str.=$sep.$key."=".$val;
		}
		else{
			if($str==null){
				$sep="";
			}else{
				$sep=",";
			}
			$str.=$sep.$key."='".$val."'";
		}
		
	}
	$sql="update {$where} set {$str} ".($what==null?null:" where "."id = ".$what);
	$res = $conn->query($sql);

	return $res;
}
$array = array(
			'yonghu' => $yonghu,
			'hotel' => $room,
			'tianshu' => $num_day,
			'chengren' => $man_num,
			'xiaohai' => $kid_num,
			'zhifu' => $money,
		);


switch ($type) {
	case 1:
		$which = 'weizhifu';
		
		break;
	case 2:
		$which = 'yuding';
		
		break;
	case 3:
		$which = 'yiwancheng';
		
		break;
	case 4:
		
		
		break;
	
	default:
		# code...
		break;
}
$res = update($which,$array,$id);
if ($res) {
	echo '修改成功，一秒后跳转';
	header('Refresh:1,Url=main.php'); 
}

?>