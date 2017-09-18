<?php
	   $conn= new mysqli("localhost","root","root","food");
		 if($conn->connect_error){
			   die($conn->connect_error);
			  }
			     
			 $page_size=4;
			 $star=0;
		     $page = $_GET["p"];
		     $star = ($page-1)*$page_size;
	           $q=$_REQUEST["q"];
			    if(empty($_REQUEST["q"])||$q=="请选择您要查询的美食"){
				 $sql="SELECT *FROM ac_info limit $star,$page_size"; 
				 $sqltotal="SELECT *FROM ac_info "; 
			      $resultotal=$conn->query($sqltotal);
				  }else{
					 $sql="SELECT *FROM ac_info WHERE ac_column='$q' limit $star,$page_size";  
					  $sqltotal="SELECT *FROM ac_info WHERE ac_column='$q'"; 
			           $resultotal=$conn->query($sqltotal); 
					 }
			
			 $total=$resultotal->num_rows;
			 $total_size=ceil($total/$page_size);
			 
			 $result=$conn->query($sql);
			if($result->num_rows>0){
				
				?>
		 <div class="container">
        <div class="rows"> 	
   <?php
       	 while($row=$result->fetch_assoc()){  
   ?>
			<div class="list-group col-md-3">
	  <a href="show.php?showid=<?php echo $row["ac_id"] ?>"><img src="houtai/<?php  echo $row["ac_thum"]  ?>" style="width:100%;height:200px"/></a>
	         </div>
       
        <?php				
					}
				
				}
	
	?> 
      </div>
      </div>
 <div class="container">
   <nav aria-label="...">
      <ul class="pager">
        <li class="previous"><a href="javascript:getChange(<?php if($page<=1){echo 1;}else{echo $page-1;}?>);"><span aria-hidden="true">&larr;</span> Older</a></li>
        <li class="next"><a href="javascript:getChange(<?php if($page>=$total_size){echo $total_size;}else{echo $page+1;}?>);">Newer <span aria-hidden="true">&rarr;</span></a></li>
      </ul>
  </nav>
</div>   