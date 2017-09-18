<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>首页</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <link href="utf8php/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="utf8php/third-party/jquery.min.js"></script>
    <script type="text/javascript" src="utf8php/third-party/template.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="utf8php/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="utf8php/umeditor.min.js"></script>
    <script type="text/javascript" src="utf8php/lang/zh-cn/zh-cn.js"></script>
  
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
        <form action="php/doAddinfor.php" method="post" enctype="multipart/form-data" >
          <div class="form-group">
            <label for="ttl">文章标题</label>
            <input type="text" class="form-control" id="ttl" placeholder="文章标题" name="title">
          </div>
          <div class="form-group">
            <label for="clum">栏目名称</label> 
            <select class="form-control" id="clum"  name="column">
            	<option value="粤菜佳肴">粤菜佳肴</option>
                <option value="湘菜佳肴">湘菜佳肴</option>
                <option value="川菜佳肴">川菜佳肴</option>
                <option value="江浙菜佳肴">江浙菜佳肴</option>
                <option value="鲁菜佳肴">鲁菜佳肴</option>
            </select>
          </div>
          <div class="form-group">
            <label for="dec">文章描述</label>
            <textarea id="dec" class="form-control" name="describe"></textarea>
          </div>
          
           <div class="form-group">
            <label for="keyw">关键词</label>
            <input type="text" class="form-control" id="keyw" placeholder="关键词" name="keyword">
          </div>
          
          <div class="form-group">
             <p>文章内容</p>
            
           <script type="text/plain" id="myEditor" style="width:100%;height:250px;" name="content"></script>
          </div>
           <div class="form-group">
             <label for="fil">上传缩略图</label><br>
            <input type="file" id="fil" name="thum" >
          </div>
          
         <input class="btn btn-success" type="submit" value="发布文章">
         <input class="btn btn-danger" type="button" value="重置内容" onclick="reset()">
        </form>
 
    </div>     
  </div>
 </div>
  <div class="footer container">
    Copyright1999-2016 北京中公教育科技股份有限公司 AllRights Reserved 京ICP证161188号
  </div>
  <script type="text/javascript">
     var um = UM.getEditor('myEditor');
	
    </script>
</body>
</html>