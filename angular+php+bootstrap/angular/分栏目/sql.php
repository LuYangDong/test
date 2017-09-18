<?php
  $conn=new mysqli("localhost","root","root","item_demo");
  if($conn->connect_error){
  	die("链接失败");
  }
  $sql="SELECT *FROM my_article";
  $result=$conn->query($sql);
  $data="";
  if($result->num_rows>0){
  	while($row=$result->fetch_assoc()){
  		if($data==""){
  			$data='{"column":"'.$row["ac_column"].'","thum":"'.$row["ac_thum"].'","title":"'.$row["ac_title"].'","describe":"'.$row["ac_describe"].'","date":"'.date("Y-m-d",$row["ac_date"]).'"}';
  		}else{
  		  $data.=',{"column":"'.$row["ac_column"].'","thum":"'.$row["ac_thum"].'","title":"'.$row["ac_title"].'","describe":"'.$row["ac_describe"].'","date":"'.date("Y-m-d",$row["ac_date"]).'"}';
  		}
  	}
  	
  }
 echo '{"article":['.$data.']}';

  $conn->close();
?>