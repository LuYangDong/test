  <?php
      if(!empty($_GET["ac_id"])){
		$id=$_GET["ac_id"];
	 $conn = new mysqli("localhost","root","root","food");
	if($conn->connect_error){
		die($conn->connect_error);
	}
	$sql="SELECT * FROM ac_info WHERE ac_id='$id'";
	 $result=$conn->query($sql);
	 if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			$title=$row["ac_title"];$column=$row["ac_column"];$describe=$row["ac_describe"];
			$keyword=$row["ac_keyword"];$content=$row["ac_content"];
			}
		}
	}
	?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>首页</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" charset="utf-8" src="utf8-php/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="utf8-php/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="utf8-php/lang/zh-cn/zh-cn.js"></script>
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
    <div class="col-sm-9" style="border-width:0 0 0 1px;border-color:#eee;border-style:solid;">
  
        <form action="php/change.php?ac_id=<?php echo $_GET["ac_id"]?>" method="post" enctype="multipart/form-data" >
          <div class="form-group">
            <label for="ttl">文章标题</label>
            <input type="text" class="form-control" id="ttl" placeholder="文章标题" name="title" value="<?php echo $title;?>">
          </div>
          <div class="form-group">
            <label for="clum">栏目名称</label> 
            <select class="form-control" id="clum"  name="column">
                  <option value="<?php echo $column;?>"><?php echo $column;?></option>
            	<option value="粤菜佳肴">粤菜佳肴</option>
                <option value="湘菜佳肴">湘菜佳肴</option>
                <option value="川菜佳肴">川菜佳肴</option>
                <option value="江浙菜佳肴">江浙菜佳肴</option>
                <option value="鲁菜佳肴">鲁菜佳肴</option>
            </select>
          </div>
          <div class="form-group">
            <label for="dec">文章描述</label>
            <textarea id="dec" class="form-control" name="describe"><?php echo $describe;?></textarea>
          </div>
          
           <div class="form-group">
            <label for="keyw">关键词</label>
            <input type="text" class="form-control" id="keyw" placeholder="关键词" name="keyword" value="<?php echo $keyword;?>">
          </div>
          
          <div class="form-group">
             <p>文章内容</p>
            <script id="editor" type="text/plain" style="width:100%;height:250px;" name="content" >
			 <?php echo $content;?>
            </script>
             
          </div>
           <div class="form-group">
             <label for="fil">上传缩略图</label><br>
            <input type="file" id="fil" name="thum">
          </div>
          
         <input class="btn btn-success" type="submit" value="修改">
           <input class="btn btn-danger" type="button" value="放弃" onclick="fun();">
        </form>
 
    </div>     
  </div>
 </div>
  <div class="footer container">
    Copyright1999-2016 北京中公教育科技股份有限公司 AllRights Reserved 京ICP证161188号
  </div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script>
var ue = UE.getEditor('editor');
function fun(){
	window.location="infor.php";
	}
</script>
</body>
</html>