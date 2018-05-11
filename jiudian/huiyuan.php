<?php
$conn=new mysqli("localhost","root","","jiudian");
if($conn->connect_error){
	die("连接失败".$conn->$connect_error);
}
mysqli_query($conn,"SET NAMES UTF8");
$zh=$_POST['form-first-name'];
$mm=$_POST['form-last-name'];


$sql = "SELECT * FROM vip WHERE (user='$zh')";
$result1 = $conn->query($sql);
$rs1=mysqli_fetch_array($result1);
if (!$rs1 && $mm == 'vip') {	
	$sql1="INSERT INTO vip (user,mima) VALUES ('$zh','$mm')";
$result1 = $conn->query($sql1);
if ($result1 ) {

	echo "注册成功";
	header('Refresh:1,Url=user.php'); 
}

}
else{
	echo "激活失败，3秒后自动跳转";
	header('Refresh:3,Url=huiyuan.html'); 
}

?>