<?php
        $msg=$jumpUrl="";
     if($_SERVER["REQUEST_METHOD"]=="POST"){
		 if(empty($_POST["user"])){
			 $msg="用户名不能为空";
			 $jumpUrl="../login.php";
			 include "tips.php";
			 exit;
			 }else{
				$user=$_POST["user"] ;
				
				 }
		   if(empty($_POST["password"])){
			 $msg="密码不能为空";
			 $jumpUrl="../login.php";
			 include "tips.php";
			 exit;
			 }else{
					$pass=$_POST["password"] ; 
				 }
  $conn = new mysqli("localhost","root","root","food");
	if($conn->connect_error){
		die($conn->connect_error);
	}
	
	$sql = "SELECT * FROM admin_user";  // 查询语句  * 是通配符
	$result = $conn->query($sql);  // 执行查询语句
	
	if($result->num_rows>0){  // 判断查询结果是否大于0；
		while($row = $result->fetch_assoc()){  // $result->fetch_assoc() 一条一条的读
		
		 if($row["admin_name"]==$user&&$row["admin_pass"]==$pass){
			  setcookie("user",$user,time()+86400,"/");
		     $msg="登录成功，即将为您跳转";
			 $jumpUrl="../infor.php";
			 include "tips.php";
			 exit;	
			
			}
		}
	     }
	     $msg="用户名不存在";
			 $jumpUrl="../login.php";
			 include "tips.php";
				 
			 
}
	
	
?>