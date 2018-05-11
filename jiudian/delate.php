<?php 

$conn = new mysqli("localhost","root","","jiudian");
if($conn->connect_error){
	die(("连接失败".$conn->connect_error));
}
mysqli_query($conn,"SET NAMES UTF8");
$id = $_GET['id'];
$type = $_GET['type'];
function delate($table,$what){
	global $conn;
	$sql = "delete from $table where id = '$what'";
	$res = $conn->query($sql);
	return $res;
}
switch ($type) {
	case 1:
		$which = 'weizhifu'	;
		
		break; 
	case 2:
		$which = 'yuding';
		
		break;
	case 3:
		$which = 'yiwancheng';
		
		break;
		
	default:
		
		break;
}
$change = delate($which,$id);
if ($change) {
			echo '修改成功，一秒后跳转';
			header('Refresh:1,Url=main.php'); 
}
?>