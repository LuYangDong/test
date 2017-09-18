<?php
  include "header.php";
  $conn = new mysqli("localhost","root","root","food");
	if($conn->connect_error){
		die($conn->connect_error);
	}
	
	$sql = "SELECT * FROM ac_info order by ac_date desc limit 8";
	$result = $conn->query($sql);
?>
    <ol class="breadcrumb">
			<li class="active">首页</li>
		</ol>
</div>
</div>
 	<div class="container">
  <div class="page-header">
   <h4>美食推荐</h4> 
   <div><small>中国素有”烹饪王国“这个美誉。在中国这个大家庭里，我们有五十六个小家庭，每个家庭都有自己的特色美食。八大菜系</small></div>
</div>
<div class="row">
   <?php
        	if($result->num_rows>0){
				while($row=$result->fetch_assoc()){
		?>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail" >
      <a href="show.php?showid=<?php echo $row["ac_id"]; ?>" target="_blank" title="<?php echo $row["ac_title"]; ?>">
            	<img class="lazy" src="houtai/<?php echo $row["ac_thum"]; ?>" width="300" alt="<?php echo $row["ac_title"]; ?>"></a>
      <div class="caption">
        <h3><a href="show.php?showid=<?php echo $row["ac_id"]; ?>" target="_blank" title="<?php echo $row["ac_title"]; ?>"><?php echo mb_substr($row["ac_title"],0,8,"UTF8"); ?></a><br><a href="list.php?listid=<?php echo $row["ac_column"]; ?>"><small><?php echo $row["ac_column"]; ?></small></a></h3>

        <p><?php 
					echo mb_substr($row["ac_describe"],0,30,"UTF8"); 
					
				?></p>
      </div>
    </div>
  </div>
  <?php
				}
			}else{
				echo "没有查询到数据";	
			}
		?>
        </div>
  <div class="container">
 <div class="page-header">
   <h4>美食选择</h4> 
   <div><small>中国的烹饪，不仅技术精湛，而且有讲究菜肴美感的传统，注意食物的色、香、味、形、器的协调一致。</small></div>
</div>
<table class="table table-striped table-bordered table-hover " style="background:greenyellow;">
        	<thead>
                <tr>
                    <th>食物名称</th>
                    <th>地区</th>
                    <th>介绍</th>
                    <th>其他</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>鱼香肉丝</td>
                    <td>川菜</td>
                    <td>主料为猪肉、黑木耳，辅料因做法而各异，但多为胡萝卜、竹笋、辣椒等。猪肉选用三成肥、<br>七成瘦的切丝滑炒，吃起来肉丝质地鲜嫩</td>
                    <td><a class="btn btn-danger">了解更多</a></td>
                    </tr>
                <tr>
                    <td>脆皮乳猪</td>
                    <td>北方菜</td>
                    <td>“片皮乳猪”也是传统粤菜的吃法，将烧乳猪的麻皮起肉切件，吃的时候配上葱球、<br>千层饼，蘸点咸中偏甜的乳猪酱或者砂糖来吃，风味尤胜单纯的烧乳猪。</td>
                    <td><a class="btn btn-danger">了解更多</a></td>
                </tr>
                <tr>
                    <td>糖醋鲤鱼</td>
                    <td>鲁菜</td>
                    <td>鲤鱼两面打上百叶花刀，稍加盐腌渍，挂上湿淀粉糊，入油炸至金黄色并呈弓形取出，<br>摆在盘中，浇上用白糖、醋、酱油、清汤、葱末、姜末、蒜末、湿淀粉、<br>花生油炒制而成的糖醋汁，使其形似“鲤鱼跳龙门”。</td>
                    <td><a class="btn btn-danger">了解更多</a></td>
                </tr>
            </tbody>
        </table>
</div>
<?php
 include "footer.php";

?>