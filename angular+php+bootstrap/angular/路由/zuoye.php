<?php
	$conn = new mysqli("localhost","root","root","item_demo");
	if($conn->connect_error){
		die("链接失败");
	}
	
	$sql = "SELECT * FROM my_article ";
	$result = $conn->query($sql);
	$data = "";
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			if($data==""){
				$data = '{"title":"'.$row["ac_title"].'","date":"'.date("Y-m-d",$row["ac_date"]).'","describe":"'.$row["ac_describe"].'","thum":"'.$row["ac_thum"].'","column":"'.$row["ac_column"].'","content":"'.str_replace('"',"'",$row["ac_content"]).'"}';
			}else{
				$data.= ',{"title":"'.$row["ac_title"].'","date":"'.date("Y-m-d",$row["ac_date"]).'","describe":"'.$row["ac_describe"].'","thum":"'.$row["ac_thum"].'","column":"'.$row["ac_column"].'","content":"'.str_replace('"',"'",$row["ac_content"]).'"}';
			}
			
		}
	}
	
	echo '{"person":['.$data.']}';
	$conn->close();
?>