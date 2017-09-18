<?php
      $msg=$jumpUrl="";
     if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST["title"])||empty($_POST["column"])||empty($_POST["describe"])||empty($_POST["keyword"])||empty($_POST["content"])){
			 $msg="请先将内容填写完整";
			 $jumpUrl="../addInfor.php";
			 include "tips.php";
			 exit;
			 }else{
				$title=$_POST["title"];$column=$_POST["column"];$describe=$_POST["describe"];
				 $keyword=$_POST["keyword"];$content=$_POST["content"];
				
?>
<?php
     if($_FILES["thum"]["name"]){
		if($_FILES["thum"]["error"]>0){
			echo $_FILES["thum"]["error"];
		}else{
			$imgSize = 1000000; // 设置允许上传的最大图片大小
			$filename = $_FILES["thum"]["name"]; // 获取上传文件的名称
			$filetype = $_FILES["thum"]["type"];	// 获取上传文件的mime类型
			$filesize = $_FILES["thum"]["size"];  // 获取上传文件的大小
			$filetmp = $_FILES["thum"]["tmp_name"];  // 存储在服务器的文件的临时副本的名称
			$arrImg = array(
				"image/jpg",
				"image/jpeg",
				"image/png",
				"image/gif"
			);
			
			if(!in_array($filetype,$arrImg)){
		      $msg="图片文件格式不正确";
			  $jumpUrl="../addInfor.php";
			  include "tips.php";
				exit;
			}
			if($filesize>$imgSize){
		      $msg="图片文件太大";
			  $jumpUrl="../addInfor.php";
			  include "tips.php";
			  exit;
			}
			// pic01.jpg
			// 获取文件的扩展名
			$arr = explode(".",$filename);  // [pic01,jpg]
			$imgType = array_pop($arr);   // 删除数组最后一项，并返回该项  jpg
			// 给文件重命名
			$imgName = time().rand(0,10).".".$imgType;    // rand(0,10)  生成一个0-10的随机数
			
			// 把上传文件移动到指定目录下
			$thum="uploads/".$imgName;
			$time=time();
			if(!move_uploaded_file($filetmp,"../uploads/".$imgName )){
				   $msg="上传失败";
			  $jumpUrl="../addInfor.php";
			  include "tips.php";
			  exit;
				}
		}
		}else{
	          $msg="请选择上传文件";
			  $jumpUrl="../addInfor.php";
			  include "tips.php";
	}	
?>				
<?php
			 }
		
   $conn = new mysqli("localhost","root","root","food");
	  if($conn->connect_error){
		 die($conn->connect_error);
	  }
	 $sql = "INSERT INTO ac_info(ac_title,ac_column,ac_describe,ac_keyword,ac_content,ac_thum,ac_date)VALUES('$title','$column','$describe','$keyword','$content','$thum','$time')";
	if($conn->query($sql)){
			 $msg="提交成功";
			 $jumpUrl="../infor.php";
			 include "tips.php"; 
	}else{
		 $msg="提交失败";
			 $jumpUrl="../addInfor.php";
			 include "tips.php"; 	
	}	
	$conn->close();
					 
	 }
?>