<?php
$conn=new mysqli("localhost","root","","jiudian");
if($conn->connect_error){
	die("连接失败".$conn->$connect_error);
}
mysqli_query($conn,"SET NAMES UTF8");
$zh=$_POST['form-first-name'];
$mm=$_POST['form-last-name'];
$phone=$_POST['form-last-name-three'];


$sql = "SELECT * FROM yonghu WHERE (zhanghao='$zh')";
$result1 = $conn->query($sql);
$rs1=mysqli_fetch_array($result);
if (!$rs1) {	
	$sql1="INSERT INTO youke (zhanghao,mima,phone) VALUES ('$zh','$mm','$phone')";
$result1 = $conn->query($sql1);
if ($result1 ) {
	setcookie("user", $zh, time()+36000);
	echo "注册成功";
	header('Refresh:1,Url=user.php?zh'+$zh); 
}

}
else{
	echo "账号已存在，3秒后自动跳转";
	header('Refresh:3,Url=denglu.html'); 
}

?>