<?php 

$conn = new mysqli("localhost","root","","jiudian");
if($conn->connect_error){
	die(("连接失败".$conn->connect_error));
}
$zh = $_POST['zh'];
$mm = $_POST['mm'];
$phone = $_POST['phone'];
mysqli_query($conn,"SET NAMES UTF8");
function select($where,$which,$what){
	global $conn;
	$sql = "select {$where} from {$which} where zhanghao={$what}";
	$res = mysqli_query($conn,$sql);
	$rs = mysqli_fetch_assoc($res);
	return $rs;
}
function update($where,$array,$what = null){
	global $conn;
	$str = null;
	foreach($array as $key=>$val){

		if($str==null){
			$sep="";
		}else{
			$sep=",";
		}
		$str.=$sep.$key."=".$val;
	}
	$sql="update {$where} set {$str} ".($what==null?null:" where "."zhanghao = ".$what);
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
$res = select('*','yonghu',$zh);
if ($res) {
	$array = array(
			'mima' => $mm
		);
	$change = update('yonghu',$array,$zh);
	if($change){
		echo '修改成功，一秒后跳转';
		header('Refresh:1,Url=denglu.html');
	}
}
?>