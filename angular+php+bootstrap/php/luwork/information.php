<?php
  include "header.php";
 
?>
<script>
function getChange(page){
	
	if(page==undefined){
		page=1;
		}
	var selct = document.getElementsByName("sll")[0];
	     val = selct.value;
		 //alert(val);
	if(window.XMLHttpRequest){
		var xHttp = new XMLHttpRequest();
	}else{
		var xHttp = new ActiveXObject("Microsoft.XMLHTTP");	
	}
	xHttp.open("GET","php/doInfor.php?q="+val+"&p="+page,true);
	xHttp.send();
	xHttp.onreadystatechange=function(){
		if(xHttp.readyState==4&&xHttp.status==200){
			document.getElementById("oDiv").innerHTML = xHttp.responseText;
		}	
	}
}
	
     window.onload=function(){
		 getChange();
		 } 
</script>
    <ol class="breadcrumb">
			<li><a href="index.php">首页</a></li>
			<li class="active">美食资讯</li>
		</ol>
</div>
</div>
<div class="dropdown page-header container">

    <select name="sll" style="height:30px;font-size:16px;" onChange="getChange()">
       <option value="">请选择您要查询的美食</option>
       <option value="粤菜佳肴">粤菜佳肴</option>
       <option value="湘菜佳肴">湘菜佳肴</option>
       <option value="川菜佳肴">川菜佳肴</option>
        <option value="江浙菜佳肴">江浙菜佳肴</option>
        <option value="鲁菜佳肴">鲁菜佳肴</option>
     </select>

</div>

          <div id="oDiv">

        </div>
    
 
 
<?php
 include "footer.php";

?>