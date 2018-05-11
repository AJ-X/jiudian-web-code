<?php 

$conn = new mysqli("localhost","root","","jiudian");
if($conn->connect_error){
	die(("连接失败".$conn->connect_error));
}
mysqli_query($conn,"SET NAMES UTF8");

$user = $_GET['name'];
$pinglun = $_GET['pinglun'];
function insert($table,$array){
	global $conn;
	$keys=join(",",array_keys($array));
	$vals="'".join("','",array_values($array))."'";
	$sql="insert into {$table}($keys) values({$vals})";
	$res = mysqli_query($conn,$sql);

}
$array = array(
		'words' => $pinglun,
		'user' => $user,
	);
$res = insert('pinglun',$array);	

?>