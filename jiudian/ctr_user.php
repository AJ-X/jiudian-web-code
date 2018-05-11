<?php
$conn=new mysqli("localhost","root","","jiudian");
if($conn->connect_error){
	die("连接失败".$conn->$connect_error);
}
mysqli_query($conn,"SET NAMES UTF8");
$type = $_REQUEST['type'];
$id = $_REQUEST['id'];
$zhanghao = $_POST['zhanghao'];
$mima = $_POST['mima'];
$phone = $_POST['phone'];


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
			'zhanghao' => $zhanghao,
			'mima' => $mima,
			'phone' => $phone,
	
		);



$res = update('yonghu',$array,$id);
if ($res) {
	echo '修改成功，一秒后跳转';
	header('Refresh:1,Url=main.php'); 
}

?>