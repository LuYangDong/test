<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>首页</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/site.css">
    <style>
    	.footer{height:40px;background:#eee;text-align:center;line-height:40px;margin-top:30px;}
    </style>
</head>

<body>
<div class="container ">
<div class="page-header">
  <h1>后台信息系统 <small>欢迎您:<?php if(isset($_COOKIE["user"])){ echo $_COOKIE["user"];}else{echo  "请先登录";}?></small></h1>
</div>
 <div class="form-group">
    <div class="col-sm-3 ">
    	  <div class="panel panel-success">
             <div class="panel-heading">文章栏目</div>
               <ul class="list-group">
               <li class="list-group-item"><a href="#">粤菜佳肴</a></li>
                <li class="list-group-item"><a href="#">湘菜佳肴</a></li>
                <li class="list-group-item"><a href="#">川菜佳肴</a></li>
                <li class="list-group-item"><a href="#">江浙菜佳肴</a></li>
                <li class="list-group-item"><a href="#">鲁菜佳肴</a></li>
                <li class="list-group-item list-group-item-success"><a href="addInfor.php" target="_blank">发布文章</a></li>
              </ul>
            </div>
        </div>
    <div class="col-sm-9" style="border-width:1px 0 0 1px;border-style:solid; border-color:#eee;height:550px;overflow:hidden;">
     
         <table class="table" >
          <thead>
          		<tr scope="row">
                	<th>ID</th>
                    <th>文章标题</th>
                    <th>发布日期</th>
                    <th>操作</th>
                </tr>
          </thead>
          <tbody>
              <?php
               $conn = new mysqli("localhost","root","root","food");
	             if($conn->connect_error){
						die($conn->connect_error);
					}
	
					$sql = "SELECT * FROM ac_info";  // 查询语句  * 是通配符
					$result = $conn->query($sql);  // 执行查询语句
					
					if($result->num_rows>0){  // 判断查询结果是否大于0；
						while($row = $result->fetch_assoc()){  // $result->fetch_assoc() 一条一条的读
						
				?>		
                    <tr scope="row">
                      <td><?php echo $row["ac_id"]?></td>
                      <td><?php echo $row["ac_title"]?></td>
                      <td><?php echo $row["ac_date"]?></td>
                      <td><a href="php/delect.php?ac_id=<?php echo $row["ac_id"]?>">删除</a> 
                       <a href="dochange.php?ac_id=<?php echo $row["ac_id"]?>">修改</a></td>
                    </tr>
                     
			<?php				
						}
					
					}
			  
			  ?>
          </tbody>
            
        </table>
 
    </div>     
  </div>
 </div>
  <div class="footer container">
    Copyright1999-2016 北京中公教育科技股份有限公司 AllRights Reserved 京ICP证161188号
  </div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>