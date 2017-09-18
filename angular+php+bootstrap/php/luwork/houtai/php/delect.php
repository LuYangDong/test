<?php
    if(!empty($_GET["ac_id"])){
		$id=$_GET["ac_id"];
	     $msg=$jumpUrl="";
	$conn = new mysqli("localhost","root","root","food");
	if($conn->connect_error){
		die($conn->connect_error);
	}
	
	$sql = "DELETE FROM ac_info where ac_id='$id'";  // 删除数据，删除的时候一定要添加条件，否则就是清空表  
  $conn->query($sql);
	
	if($conn->query($sql)){
		$msg="删除成功";
		$jumpUrl="../infor.php";
		include "tips.php";
	}else{
		$msg="删除失败";
		$jumpUrl="../infor.php";
		include "tips.php";
	}
	}
	// 增删改查
?>