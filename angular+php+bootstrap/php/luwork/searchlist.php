<?php
	include "header.php";
	$search = $_REQUEST["search"];
	$p = "";
	$star = "";
	if(!empty($_GET["p"])){
		$p = $_GET["p"];
		$star = ($p-1)*5;	
	}else{
		$star = 0;
		$p=1;	
	}
	
	$page = 5; 
	$conn = new mysqli("localhost","root","root","food");
	
	if($conn->connect_error){
		die("链接失败");
	}
   $sqtotal = "SELECT * FROM ac_info where ac_title like '%$search%' ";
	$resultotal = $conn->query($sqtotal);
	$total=$resultotal->num_rows;
	$pages=ceil($total/$page);
	
	$sql = "SELECT * FROM ac_info where ac_title like '%$search%' limit $star,$page";
	$result = $conn->query($sql);
	
	
?>
	<ol class="breadcrumb">
      <li><a href="index.php">首页</a></li>
      <li class="active">搜索结果</li>
    </ol>
    </div>
 </div>
 <div class="container">
    <h1 class="page-header">一共有<?php echo $total; ?>条数据</h1>
    <ul class="container-fluid list-unstyled list-li">
    	<?php
        	if($result->num_rows>0){
				while($row=$result->fetch_assoc()){
		
		?>
      <li class="row">
        <a href="show.php?showid=<?php echo $row["ac_id"]; ?>" class="col-md-10"><?php echo $row["ac_title"]; ?></a>
        <span class=" col-md-2"><?php echo date("Y-m-d",$row["ac_date"]); ?></span>
      </li>
      <?php
      				
				}
			}
	  ?>
    </ul>
    <nav aria-label="Page navigation" class="text-center">
      <ul class="pagination">
        <li>
          <a href="searchlist.php?search=<?php echo $search; ?>&p=<?php if($p<=1){echo 1;}else{echo $p-1;}?>" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <?php
          for($i=1;$i<=$pages;$i++){
			
			   ?>
             <li class="<?php if($p==$i)echo "active";?>"><a href="searchlist.php?search=<?php echo $search; ?>&p=<?php echo $i; ?>"><?php echo $i;?></a></li>
       <?php
			  }
		?>
        <li>
          <a href="searchlist.php?search=<?php echo $search; ?>&p=<?php if($p>=$pages){echo $pages;}else{echo $p+1;}?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
<?php
	include "footer.php";
?>