<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>首页</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <style>
		*{margin:0; padding:0;}
		.box{width:450px; height:250px; border:1px solid #eaeaea; position:absolute; top:50%; left:50%; margin:-125px 0 0 -225px;}
		.box h2{text-align:center; line-height:2; background:#000;margin:0 0 30px;color:#fff;}
</style>
</head>
<body>
   <div class="box">
       <h2>后台登录</h2>
        <form class="form-horizontal" action="php/dologin.php" method="post">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-offset-2 col-sm-2 control-label">用户名</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputEmail3" placeholder="admin" name="user">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-offset-2 col-sm-2 control-label">密码</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" id="inputPassword3" placeholder="password" name="password">
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-10">
      <button type="submit" class="btn btn-danger">登录</button>
    </div>
  </div>
</form>
   
   </div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>