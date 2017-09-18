<?php
  include "header.php";
?>
<script>
function vote(){
	var inp = document.getElementsByName("optionsRadios");
	var val = "";
	for(var i=0; i<inp.length; i++){
		if(inp[i].checked){
			val = inp[i].value;
		}
	}
	// ajax 
	if(window.XMLHttpRequest){
		var xHttp = new XMLHttpRequest();
	}else{
		var xHttp = new ActiveXObject("Microsoft.XMLHTTP");	
	}
	xHttp.open("GET","php/dovote.php?q="+val,true);
	xHttp.send();
	xHttp.onreadystatechange=function(){
		if(xHttp.readyState==4&&xHttp.status==200){
			//alert(xHttp.responseText);
			document.getElementById("vote").innerHTML = xHttp.responseText;
		}	
	}
}
</script>
    <ol class="breadcrumb">
			<li><a href="index.php">首页</a></li>
			<li class="active">投票</li>
		</ol>
</div>
</div>

<div class="container">
<div id="vote">
	<div class="page-header">
	   <h4>请选择您喜欢的美食</h4> 
	   <div><small>您觉得您比较喜欢下面哪个菜系，请选择</small></div>
    </div>
	<div class="radio">
	  <label>
	    <input type="radio" name="optionsRadios" id="optionsRadios1" value="1" checked>
	           	川菜：川菜在烹调方法上，有炒、煎、干烧、炸、熏、泡、炖、焖、烩、贴、爆等38种之多。在口味上特别讲究色、香、味、形，兼有南北之长，以味的多、广、厚著称。
	  </label>
	</div>
	<div class="radio">
	  <label>
	    <input type="radio" name="optionsRadios" id="optionsRadios2" value="2" >
	                  鲁菜：特点是清香、鲜嫩、味醇而著名，十分讲究清汤和奶汤的调制，清汤色清而鲜，奶汤色白而醇。
	  </label>
    </div>
  <div class="radio">
	  <label>
	    <input type="radio" name="optionsRadios" id="optionsRadios3" value="3">
	                  粤菜：在烹调上以炒、爆为主，兼有烩、煎、烤，讲究清而不淡，鲜而不俗，嫩而不生，油而不腻，有“五滋”(香、松、软、肥、浓)、“六味”(酸、甜、苦、辣、咸、鲜)之说。
	  </label>
    </div>
    <div class="radio">
	  <label>
	    <input type="radio" name="optionsRadios" id="optionsRadios4" value="4">
	                  苏菜：江苏菜系选料讲究，刀工精细，口味偏甜，造型讲究，特色鲜明。
	  </label>
    </div>
    <div class="radio">
	  <label>
	    <input type="radio" name="optionsRadios" id="optionsRadios5" value="5">
	                浙菜：浙菜采用原料十分广泛，注重原料的新鲜、合理搭配，以求味道的互补，充分发掘出普通原料的美味与营养。
	  </label>
    </div>
    <div class="radio">
	  <label>
	    <input type="radio" name="optionsRadios" id="optionsRadios6" value="6">
	                  闽菜：闽菜清鲜，淡爽，偏于甜酸。尤其讲究调汤，汤鲜、味美，汤菜品种多，具有传统特色。
	  </label>
    </div>
    <div class="radio">
	  <label>
	    <input type="radio" name="optionsRadios" id="optionsRadios7" value="7">
	                 湘菜：湘菜调味，特色是“酸辣”，以辣为主，酸寓其中。“酸”是酸泡菜之酸，比醋更为醇厚柔和。
	  </label>
    </div>
    <div class="radio">
	  <label>
	    <input type="radio" name="optionsRadios" id="optionsRadios8" value="8">
	                 徽菜：徽菜擅长烤、炖，讲究火功，其特点是芡大油重。徽菜的主要特点：烹调方法上擅长烧、炖、蒸，而爆、炒菜少，重油、重色，重火功。
	  </label>
   </div>
	<button type="button" class="btn btn-success" onClick="vote()" >投票</button>
	</div>
	
</div>

<?php
 include "footer.php";

?>