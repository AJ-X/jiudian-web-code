<?php 

$conn = new mysqli("localhost","root","","jiudian");
if($conn->connect_error){
	die(("连接失败".$conn->connect_error));
}
mysqli_query($conn,"SET NAMES UTF8");
  move_uploaded_file($_FILES['file']['tmp_name'],"pic/".$_FILES['file']['name']);
$user = $_COOKIE['user'];
 function insert($table,$array){
	global $conn;
	$keys=join(",",array_keys($array));
	$vals="'".join("','",array_values($array))."'";
	$sql="insert into {$table}($keys) values({$vals})";

	$res = mysqli_query($conn,$sql);
}
if ($_FILES['file']['name']) {
	$array = array(
		'src' => $_FILES['file']['name'],
		'user' => $user,
	);
	insert('pic',$array);
  	echo "上传成功";
}

?>