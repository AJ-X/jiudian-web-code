<?php

$conn = new mysqli("localhost", "root", "", "jiudian");
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
mysqli_query($conn,"SET NAMES UTF8");


$zh=$_POST["form-first-name"];
$mm=$_POST["form-last-name"];



$sql = "SELECT * FROM yonghu WHERE (zhanghao='$zh') AND (mima='$mm')";
	$result = $conn->query($sql);
	$rs=mysqli_fetch_array($result);
	//循环输出数组
	
	if ($rs) {
	setcookie("user", $zh, time()+36000);
		echo "登录成功，1秒后跳转";
		header('Refresh:1,Url=user.php'); 
	}
	
	else{
			echo "账号密码错误";
			header('Refresh:1,Url=index.php'); 
	}


mysqli_close($conn);
?>