<?php
	include "header.php";
	$conn=new mysqli("localhost","root","root","food");
	if($conn->connect_error){
		die($conn->connect_error);
	}
	
		
?>
	<ol class="breadcrumb">
      <li><a href="#">首页</a></li>
      <li class="active">前端资讯</li>
    </ol>
<div class="row marginTop20">
      
    <div class="col-sm-6" style="height:220px;">
        <div class="list-group">
          <a href="list.php?listid=粤菜佳肴" class="list-group-item  list-group-item-info">
            <span class="glyphicon glyphicon-question-sign"></span> 粤菜佳肴
          </a>
           <?php
		  $sql2 = "SELECT * FROM ac_info  WHERE ac_column='粤菜佳肴'";
	       $result = $conn->query($sql2);
		   if($result->num_rows>0){
			   while($row=$result->fetch_assoc()){
				   ?>
				    <a href="show.php?showid=<?php echo $row['ac_id']?>" class="list-group-item"><?php echo $row['ac_title']?></a>     
                    <?php
				   }
			   }
		  ?>
        </div>
    </div>
	<div class="col-sm-6" style="height:220px;">
        <div class="list-group">
          <a href="list.php?listid=湘菜佳肴" class="list-group-item list-group-item-warning">
            <span class="glyphicon glyphicon-th-large"></span> 湘菜佳肴
          </a>
              <?php
		  $sql3 = "SELECT * FROM ac_info  WHERE ac_column='湘菜佳肴'";
	       $result = $conn->query($sql3);
		   if($result->num_rows>0){
			   while($row=$result->fetch_assoc()){
				   ?>
				    <a href="show.php?showid=<?php echo $row['ac_id']?>" class="list-group-item"><?php echo $row['ac_title']?></a>     
                    <?php
				   }
			   }
		  ?>
        </div>
    </div>
    <div class="col-sm-6" style="height:220px;">
        <div class="list-group">
          <a href="list.php?listid=川菜佳肴" class="list-group-item active">
            <span class="glyphicon glyphicon-list-alt"></span> 川菜佳肴
          </a>
           <?php
		  $sql3 = "SELECT * FROM ac_info  WHERE ac_column='川菜佳肴'";
	       $result = $conn->query($sql3);
		   if($result->num_rows>0){
			   while($row=$result->fetch_assoc()){
				   ?>
				    <a href="show.php?showid=<?php echo $row['ac_id']?>" class="list-group-item"><?php echo $row['ac_title']?></a>     
                    <?php
				   }
			   }
		  ?>
        </div>
    </div>
    <div class="col-sm-6" style="height:220px;">
        <div class="list-group">
          <a href="list.php?listid=鲁菜佳肴" class="list-group-item list-group-item-danger">
            <span class="glyphicon glyphicon-align-left"></span> 鲁菜佳肴
          </a>
             <?php
		  $sql5 = "SELECT * FROM ac_info  WHERE ac_column='鲁菜佳肴'";
	       $result = $conn->query($sql5);
		   if($result->num_rows>0){
			   while($row=$result->fetch_assoc()){
				   ?>
				    <a href="show.php?showid=<?php echo $row['ac_id']?>" class="list-group-item"><?php echo $row['ac_title']?></a>     
                    <?php
				   }
			   }
		  ?>
        </div>
    </div>
    	<div class="col-sm-6" style="height:220px;">
        <div class="list-group">
          <a href="list.php?listid=江浙菜佳肴" class="list-group-item list-group-item-success">
            <span class="glyphicon glyphicon-user"></span> 江浙菜佳肴
          </a>
          <?php
		  $sql1 = "SELECT * FROM ac_info  WHERE ac_column='江浙菜佳肴'";
	       $result = $conn->query($sql1);
		   if($result->num_rows>0){
			   while($row=$result->fetch_assoc()){
				   ?>
				    <a href="show.php?showid=<?php echo $row['ac_id']?>" class="list-group-item"><?php echo $row['ac_title']?></a>     
                    <?php
				   }
			   }
		  ?>
        </div>
    </div>
</div>   
<?php
	include "footer.php";
?>